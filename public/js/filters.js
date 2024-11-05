function applyFilter() {
    const selectedMakes = [];
    const selectedModels = [];
    const selectedMinYear = document.getElementById('minYear').value;
    const selectedMaxYear = document.getElementById('maxYear').value;
    const selectedYears = [];
    const selectedColors = [];
    const selectedsaleBranch = [];
    const selectedbodyType = [];
    const selectedDrive = [];
    const selectedFuel = [];
    const selectedEngine = [];
    const selectedTransmission = [];

    // Collect selected filter values
    $('#salebranch-list input[type="checkbox"]:checked').each(function () {
        selectedsaleBranch.push($(this).val());
    });
    $('#make-list input[type="checkbox"]:checked').each(function () {
        selectedMakes.push($(this).val());
    });
    $('#model-list input[type="checkbox"]:checked').each(function () {
        selectedModels.push($(this).val());
    });
    $('#color-list input[type="checkbox"]:checked').each(function () {
        selectedColors.push($(this).val());
    });
    $('#bodytype-list input[type="checkbox"]:checked').each(function () {
        selectedbodyType.push($(this).val());
    });
    $('#drive-list input[type="checkbox"]:checked').each(function () {
        selectedDrive.push($(this).val());
    });
    $('#fuel-list input[type="checkbox"]:checked').each(function () {
        selectedFuel.push($(this).val());
    });
    $('#engine-list input[type="checkbox"]:checked').each(function () {
        selectedEngine.push($(this).val());
    });
    $('#transmission-list input[type="checkbox"]:checked').each(function () {
        selectedTransmission.push($(this).val());
    });

   

    if (selectedMinYear && selectedMaxYear && selectedMinYear <= selectedMaxYear) {
        for (let year = selectedMinYear; year <= selectedMaxYear; year++) {
            selectedYears.push(year);
        }
    }

    // AJAX request to fetch filtered car data
    $.ajax({
        url: '/get-cars',
        method: 'GET',
        data: {
            makes: selectedMakes,
            models: selectedModels,
            years: selectedYears,
            colors: selectedColors,
            sale_branches: selectedsaleBranch,
            bodytypes: selectedbodyType,
            drives: selectedDrive,
            fuels: selectedFuel,
            engines: selectedEngine,
            transmissions: selectedTransmission,
        },
        success: function (response) {
            renderCarList(response); // Render the filtered car data
        },
        error: function () {
            alert('Failed to fetch filtered car data.');
        }
    });
}



$(document).ready(function () {
    $('#fetch-makes').on('click', function () {
        const icon = $(this).find('i');

        if ($('#filter6').hasClass('show')) {
            $('#filter6').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            if ($('#make-list').is(':empty')) {
                $.ajax({
                    url: '/get-makes',
                    method: 'GET',
                    success: function (response) {
                        let html = '';
                        response.forEach(make => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${make.make}" id="make-${make.make}" onclick="applyFilter()">
                                    <label class="form-check-label" for="make-${make.make}">
                                        ${make.make} (${make.total})
                                    </label>
                                </div>
                            `;
                        });
                        $('#make-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load makes.');
                    }
                });
            }
            $('#filter6').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    $('#reset-make').on('click', function (e) {
        e.preventDefault();
        $('#make-list input[type="checkbox"]').prop('checked', false);
        applyFilter(); // Update the view after resetting
    });

    $('#filter6').on('hidden.bs.collapse', function () {
        $('#fetch-makes i').removeClass('fa-minus').addClass('fa-plus');
    });

    $('#filter6').on('shown.bs.collapse', function () {
        $('#fetch-makes i').removeClass('fa-plus').addClass('fa-minus');
    });
});



function renderCarList(cars) {
    const carList = $('#car-list');
    carList.empty(); // Clear previous data

    if (cars.length === 0) {
        carList.append('<p>No cars found.</p>');
        return;
    }

    cars.forEach(car => {
        carList.append(`
            <div class="container auction-card shadow p-3 mb-4 bg-white rounded">
                <div class="row text-center align-items-start">
                    <div class="col">
                        <div class="auction-thumb">
                            <img src="https://via.placeholder.com/330x247" alt="product" class="product-image img-fluid">
                        </div>
                    </div>
                    <div class="col">
                        <div class="lot-info">
                            <p>Lot #: ${car.lot_number}</p>
                            <p>Sale_Branch #: ${car.sale_branch}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="vehicle-info">
                            <p>${car.make}</p>
                            <p>${car.model}</p>
                            <p>${car.year}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="condition-info">
                            <p>${car.color}</p>
                            <p>${car.bodytype}</p>
                            <p>${car.transmission}</p>
                            <p>${car.drive ? 'Yes' : 'No'}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="engine-info">
                            <p>$${car.engine} USD</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="bids-info">
                            <button class="btn btn-primary mb-2">Bid Now</button>
                            <button class="btn btn-success">Buy It Now</button>
                        </div>
                    </div>
                </div>
            </div>
        `);
    });
}


//model

$(document).ready(function () {
    $('#fetch-models').on('click', function () {
        const icon = $(this).find('i');

        if ($('#filter7').hasClass('show')) {
            $('#filter7').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            if ($('#model-list').is(':empty')) {
                $.ajax({
                    url: '/get-models',
                    method: 'GET',
                    success: function (response) {
                        let html = '';
                        response.forEach(model => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${model.model}" id="model-${model.model}" onclick="applyFilter()">
                                    <label class="form-check-label" for="model-${model.model}">
                                        ${model.model} (${model.total})
                                    </label>
                                </div>
                            `;
                        });
                        $('#model-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load makes.');
                    }
                });
            }
            $('#filter7').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    $('#reset-model').on('click', function (e) {
        e.preventDefault();
        $('#model-list input[type="checkbox"]').prop('checked', false);
        applyFilter(); // Update the view after resetting
    });

    $('#filter7').on('hidden.bs.collapse', function () {
        $('#fetch-models i').removeClass('fa-minus').addClass('fa-plus');
    });

    $('#filter7').on('shown.bs.collapse', function () {
        $('#fetch-models i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//color
$(document).ready(function () {
    // Fetch models and toggle collapse on button click
    $('#fetch-colors').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter8').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter8').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch models only if the content is not already loaded
            if ($('#color-list').is(':empty')) {
                $.ajax({
                    url: '/get-colors', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the models and build the HTML structure
                        response.forEach(color => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${color.color}" id="color-${color.color}" onclick="applyFilter()">
                                    <label class="form-check-label" for="color-${color.color}">
                                        ${color.color} (${color.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the model-list div
                        $('#color-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load color.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter8').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected models
    $('#reset-color').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#color-list input[type="checkbox"]').prop('checked', false);
        applyFilter();  // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter8').on('hidden.bs.collapse', function () {
        $('#fetch-colors i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter8').on('shown.bs.collapse', function () {
        $('#fetch-colors i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//Body Types

$(document).ready(function () {
    // Fetch models and toggle collapse on button click
    $('#fetch-bodytypes').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter9').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter9').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch models only if the content is not already loaded
            if ($('#bodytype-list').is(':empty')) {
                $.ajax({
                    url: '/get-bodytypes', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the models and build the HTML structure
                        response.forEach(bodytype => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${bodytype.bodytype}" id="bodytype-${bodytype.bodytype}" onclick="applyFilter()">
                                    <label class="form-check-label" for="bodytype-${bodytype.bodytype}">
                                        ${bodytype.bodytype} (${bodytype.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the model-list div
                        $('#bodytype-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load bodytype.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter9').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected models
    $('#reset-bodytype').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#bodytype-list input[type="checkbox"]').prop('checked', false);
        applyFilter();  // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter9').on('hidden.bs.collapse', function () {
        $('#fetch-bodytypes i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter9').on('shown.bs.collapse', function () {
        $('#fetch-bodytypes i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//Sale Branch
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-salebranches').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter10').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter10').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#salebranch-list').is(':empty')) {
                $.ajax({
                    url: '/get-salebranches', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(salebranch => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${salebranch.sale_branch}" 
                                           id="salebranch-${salebranch.sale_branch}" onclick="applyFilter()">
                                    <label class="form-check-label" 
                                           for="salebranch-${salebranch.sale_branch}">
                                        ${salebranch.sale_branch} (${salebranch.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the salebranch-list div
                        $('#salebranch-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load salebranches.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter10').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-salebranch').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#salebranch-list input[type="checkbox"]').prop('checked', false); 
        applyFilter(); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter10').on('hidden.bs.collapse', function () {
        $('#fetch-salebranches i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter10').on('shown.bs.collapse', function () {
        $('#fetch-salebranches i').removeClass('fa-plus').addClass('fa-minus');
    });
});


//year
document.addEventListener('DOMContentLoaded', function () {
    const minYearSelect = document.getElementById('minYear');
    const maxYearSelect = document.getElementById('maxYear');
    const currentYear = new Date().getFullYear();

    // Populate dropdowns for year selection
    populateYearDropdown(minYearSelect, 1950, currentYear);
    populateYearDropdown(maxYearSelect, 1950, currentYear);

    // Event listeners to trigger applyFilter
    minYearSelect.addEventListener('change', applyFilter);
    maxYearSelect.addEventListener('change', applyFilter);

    // Toggle + and - icon on collapse show/hide
    const yearToggleButton = document.querySelector('[data-bs-target="#filter3"]');
    const yearIcon = yearToggleButton.querySelector('i');

    $('#filter3').on('shown.bs.collapse', function () {
        yearIcon.classList.remove('fa-plus');
        yearIcon.classList.add('fa-minus');
    });

    $('#filter3').on('hidden.bs.collapse', function () {
        yearIcon.classList.remove('fa-minus');
        yearIcon.classList.add('fa-plus');
    });

    // Function to populate the year dropdowns
    function populateYearDropdown(selectElement, startYear, endYear) {
        selectElement.innerHTML = ''; // Clear existing options
        for (let year = startYear; year <= endYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            selectElement.appendChild(option);
        }
    }

    // Reset year selections
    document.getElementById('resetYears').addEventListener('click', function () {
        minYearSelect.value = minYearSelect.options[0].value; // Reset to the first option
        maxYearSelect.value = maxYearSelect.options[maxYearSelect.options.length - 1].value; // Reset to the last option
        applyFilter(); // Reapply filters to refresh displayed data
    });
});

// Function to collect selected years and other filters



//Drive
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-drives').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter11').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter11').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#drive-list').is(':empty')) {
                $.ajax({
                    url: '/get-drives', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(drive => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${drive.drive}" 
                                           id="drive-${drive.drive}" onclick="applyFilter()">
                                    <label class="form-check-label" 
                                           for="drive-${drive.drive}">
                                        ${drive.drive} (${drive.total})
                                    </label>
                                </div>
                            `;
                        });

                        
                        $('#drive-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load drives.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter11').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-drive').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#drive-list input[type="checkbox"]').prop('checked', false); 
        applyFilter();// Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter11').on('hidden.bs.collapse', function () {
        $('#fetch-drives i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter11').on('shown.bs.collapse', function () {
        $('#fetch-drives i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//Fuel
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-fuels').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter12').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter12').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#fuel-list').is(':empty')) {
                $.ajax({
                    url: '/get-fuels', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(fuel => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${fuel.fuel}" 
                                           id="fuel-${fuel.fuel}" onclick="applyFilter()">
                                    <label class="form-check-label" 
                                           for="fuel-${fuel.fuel}">
                                        ${fuel.fuel} (${fuel.total})
                                    </label>
                                </div>
                            `;
                        });

                        
                        $('#fuel-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load fuels.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter12').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-fuel').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#fuel-list input[type="checkbox"]').prop('checked', false); 
        applyFilter(); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter12').on('hidden.bs.collapse', function () {
        $('#fetch-fuels i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter12').on('shown.bs.collapse', function () {
        $('#fetch-fuels i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//engine
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-engines').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter13').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter13').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#engine-list').is(':empty')) {
                $.ajax({
                    url: '/get-engines', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(engine => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${engine.engine}" 
                                           id="engine-${engine.engine}" onclick="applyFilter()">
                                    <label class="form-check-label" 
                                           for="engine-${engine.engine}">
                                        ${engine.engine} (${engine.total})
                                    </label>
                                </div>
                            `;
                        });

                      
                        $('#engine-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load engines.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter13').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-engine').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#engine-list input[type="checkbox"]').prop('checked', false);
        applyFilter(); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter13').on('hidden.bs.collapse', function () {
        $('#fetch-engines i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter13').on('shown.bs.collapse', function () {
        $('#fetch-engines i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//Transmission
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-transmissions').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter14').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter14').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#transmission-list').is(':empty')) {
                $.ajax({
                    url: '/get-transmissions', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(transmission => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${transmission.transmission}" 
                                           id="transmission-${transmission.transmission}" onclick="applyFilter()">
                                    <label class="form-check-label" 
                                           for="transmission-${transmission.transmission}">
                                        ${transmission.transmission} (${transmission.total})
                                    </label>
                                </div>
                            `;
                        });

                        
                        $('#transmission-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load transmissions.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter14').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-transmission').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#transmission-list input[type="checkbox"]').prop('checked', false); 
        applyFilter(); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter14').on('hidden.bs.collapse', function () {
        $('#fetch-transmissions i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter14').on('shown.bs.collapse', function () {
        $('#fetch-transmissions i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//Auction
$(document).ready(function () {
    // Fetch salebranches and toggle collapse on button click
    $('#fetch-auctions').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter15').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter15').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch salebranches only if the content is not already loaded
            if ($('#auction-list').is(':empty')) {
                $.ajax({
                    url: '/get-auctions', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the response and build the HTML structure
                        response.forEach(auction => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" 
                                           type="checkbox" 
                                           value="${auction.auction}" 
                                           id="auction-${auction.auction}">
                                    <label class="form-check-label" 
                                           for="auction-${auction.auction}">
                                        ${auctio.auction} (${auction.total})
                                    </label>
                                </div>
                            `;
                        });

                       
                        $('#auction-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load auctions.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter15').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected salebranches
    $('#reset-auction').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#auction-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter15').on('hidden.bs.collapse', function () {
        $('#fetch-auctions i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter15').on('shown.bs.collapse', function () {
        $('#fetch-auctions i').removeClass('fa-plus').addClass('fa-minus');
    });
});


//Reset All
$(document).ready(function () {
    const minYearSelect = $('#minYear');
    const maxYearSelect = $('#maxYear');
    const currentYear = new Date().getFullYear();

    // Populate year dropdowns dynamically from 1950 to current year
    populateYearDropdown(minYearSelect, 1950, currentYear);
    populateYearDropdown(maxYearSelect, 1950, currentYear);

    function populateYearDropdown(selectElement, startYear, endYear) {
        selectElement.empty().append(new Option('Select Year', ''));
        for (let year = startYear; year <= endYear; year++) {
            selectElement.append(new Option(year, year));
        }
    }

    // "Reset All" button functionality
    $('#reset-all').on('click', function (e) {
        e.preventDefault(); // Prevent page reload

        // Reset all dropdowns to their first (default) option
        $('select').prop('selectedIndex', 0);

        // Uncheck all checkboxes
        $('input[type="checkbox"]').prop('checked', false);

        // Clear all input fields
        $('input[type="text"]').val('');

        // Collapse all Bootstrap collapse sections (if any)
        $('.collapse').collapse('hide');
    });
});




//all filter
$(document).ready(function () {
    // Populate filter options on page load
    fetchFilterOptions('/get-makes', '#filter-make');
    fetchFilterOptions('/get-models', '#filter-model');
    fetchFilterOptions('/get-colors', '#filter-color');

    // Fetch and render all car data initially
    fetchCarData();

    // Trigger AJAX fetch on filter change
    $('#filter-make, #filter-model, #filter-color').on('change', function () {
        fetchCarData(); // Fetch data on every filter change
    });

    // Function to fetch filter options and populate dropdowns
    function fetchFilterOptions(url, selector) {
        $.ajax({
            url: url,
            method: 'GET',
            success: function (response) {
                const select = $(selector);
                select.empty().append(new Option('Select', ''));
                response.forEach(item => {
                    const value = item.make || item.model || item.color;
                    select.append(new Option(value, value));
                });
            },
            error: function () {
                console.error('Failed to load filter options.');
            }
        });
    }

    // Function to fetch car data based on selected filters
    function fetchCarData() {
        const make = $('#filter-make').val();
        const model = $('#filter-model').val();
        const color = $('#filter-color').val();
        $.ajax({
            url: '/get-cars', // Laravel route to fetch filtered cars
            method: 'GET',
            data: { make, model, color }, // Send selected filters to backend
            success: function (response) {
                renderCarList(response); // Render the car list dynamically
            },
            error: function () {
                alert('Failed to fetch car data.');
            }
        });
    }
    console.log(cars);
    // Function to render car list dynamically
    // Define renderCarList function before calling it in the AJAX success callback
});

