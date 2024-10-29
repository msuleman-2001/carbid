$(document).ready(function () {
    $('#fetch-makes').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        if ($('#filter6').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter6').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch makes only if the content is not already loaded
            if ($('#make-list').is(':empty')) {
                $.ajax({
                    url: '/get-makes',  
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                       
                        response.forEach(make => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${make.make}" id="make-${make.make}">
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
            // Open the section and switch icon to -
            $('#filter6').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected makes
    $('#reset-make').on('click', function (e) {
        e.preventDefault();  // Prevent default link behavior
        $('#make-list input[type="checkbox"]').prop('checked', false);
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter6').on('hidden.bs.collapse', function () {
        $('#fetch-makes i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
    $('#filter6').on('shown.bs.collapse', function () {
        $('#fetch-makes i').removeClass('fa-plus').addClass('fa-minus');
    });
});

//model

$(document).ready(function () {
    // Fetch models and toggle collapse on button click
    $('#fetch-models').on('click', function () {
        const icon = $(this).find('i'); // Get the icon inside the button

        // Check if the section is already open
        if ($('#filter7').hasClass('show')) {
            // Close the section and switch icon to +
            $('#filter7').collapse('hide');
            icon.removeClass('fa-minus').addClass('fa-plus');
        } else {
            // Fetch models only if the content is not already loaded
            if ($('#model-list').is(':empty')) {
                $.ajax({
                    url: '/get-models', // Ensure this route matches your web.php route
                    method: 'GET',
                    success: function (response) {
                        let html = '';

                        // Loop through the models and build the HTML structure
                        response.forEach(model => {
                            html += `
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="${model.model}" id="model-${model.model}">
                                    <label class="form-check-label" for="model-${model.model}">
                                        ${model.model} (${model.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the model-list div
                        $('#model-list').html(html);
                    },
                    error: function () {
                        alert('Failed to load model.');
                    }
                });
            }

            // Open the section and switch icon to -
            $('#filter7').collapse('show');
            icon.removeClass('fa-plus').addClass('fa-minus');
        }
    });

    // Reset functionality to clear all selected models
    $('#reset-model').on('click', function (e) {
        e.preventDefault(); // Prevent default link behavior
        $('#model-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
    });

    // Ensure the icon switches to + when the section is closed
    $('#filter7').on('hidden.bs.collapse', function () {
        $('#fetch-models i').removeClass('fa-minus').addClass('fa-plus');
    });

    // Ensure the icon switches to - when the section is opened
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
                                    <input class="form-check-input" type="checkbox" value="${color.color}" id="color-${color.color}">
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
        $('#color-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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
                                    <input class="form-check-input" type="checkbox" value="${bodytype.bodytype}" id="bodytype-${bodytype.bodytype}">
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
        $('#bodytype-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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
                                           id="salebranch-${salebranch.sale_branch}">
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
        $('#salebranch-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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

    // Populate dropdowns
    populateYearDropdown(minYearSelect, 1950, currentYear);
    populateYearDropdown(maxYearSelect, 1950, currentYear);

    // Function to populate year dropdowns
    function populateYearDropdown(selectElement, startYear, endYear) {
        selectElement.innerHTML = ''; // Clear existing options
        for (let year = startYear; year <= endYear; year++) {
            const option = document.createElement('option');
            option.value = year;
            option.textContent = year;
            selectElement.appendChild(option);
        }
    }
});

// Reset function to reset both dropdowns to default
function resetYears() {
    document.getElementById('minYear').selectedIndex = 0;
    document.getElementById('maxYear').selectedIndex = 
        document.getElementById('maxYear').options.length - 1;
}


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
                                           id="drive-${drive.drive}">
                                    <label class="form-check-label" 
                                           for="drive-${drive.drive}">
                                        ${drive.drive} (${drive.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the salebranch-list div
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
        $('#drive-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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
                                           id="fuel-${fuel.fuel}">
                                    <label class="form-check-label" 
                                           for="fuel-${fuel.fuel}">
                                        ${fuel.fuel} (${fuel.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the salebranch-list div
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
        $('#fuel-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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
                                           id="engine-${engine.engine}">
                                    <label class="form-check-label" 
                                           for="engine-${engine.engine}">
                                        ${engine.engine} (${engine.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the salebranch-list div
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
        $('#engine-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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
                                           id="transmission-${transmission.transmission}">
                                    <label class="form-check-label" 
                                           for="transmission-${transmission.transmission}">
                                        ${transmission.transmission} (${transmission.total})
                                    </label>
                                </div>
                            `;
                        });

                        // Insert the generated HTML into the salebranch-list div
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
        $('#transmission-list input[type="checkbox"]').prop('checked', false); // Uncheck all checkboxes
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

                        // Insert the generated HTML into the salebranch-list div
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

    // Function to render car list dynamically
    function renderCarList(cars) {
        const carList = $('#car-list');
        carList.empty(); // Clear previous data

        if (cars.length === 0) {
            carList.append('<p>No cars found.</p>');
            return;
        }

        // Loop through each car and render it in the #car-list
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
                                <p>Item #: ${car.item_number}</p>
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
                                <p>${car.odometer} miles</p>
                                <p>${car.condition}</p>
                                <p>${car.clean_title ? 'Yes' : 'No'}</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="sale-info">
                                <p>$${car.sale_price} USD</p>
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
});
