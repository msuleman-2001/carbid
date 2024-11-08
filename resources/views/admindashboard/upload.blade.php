<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload and Vehicle Data</title>
    <style>
        /* Basic reset and full height layout */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
        }

        /* Main container layout */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Upload form styling */
        .upload-section {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 40px;
            text-align: center;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        input[type="file"] {
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            width: 100%;
            max-width: 400px;
            margin-bottom: 20px;
            display: inline-block;
        }

        input[type="submit"] {
            background-color: #27ae60;
            color: #fff;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #2ecc71;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
            font-size: 0.9rem;
        }

        table th {
            background-color: #2980b9;
            color: white;
        }

        table tbody tr:nth-child(even) {
            background-color: #f4f7f6;
        }

        table tbody tr:hover {
            background-color: #ecf0f1;
        }

        /* Pagination styling */
        .pagination-list {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
        }

        .pagination-list li {
            margin: 0 5px;
        }

        .pagination-list li a,
        .pagination-list li span {
            display: block;
            padding: 10px 15px;
            color: #2980b9;
            text-decoration: none;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .pagination-list li a:hover {
            background-color: #3498db;
            color: white;
        }

        .pagination-list li.active span {
            background-color: #2980b9;
            color: white;
            border-color: #2980b9;
        }

        .pagination-list li.disabled span {
            color: #bbb;
            cursor: not-allowed;
        }


        /* Responsive design */
        @media (max-width: 768px) {

            input[type="file"],
            input[type="submit"] {
                width: 100%;
                max-width: none;
            }

            table th,
            table td {
                font-size: 0.8rem;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>CSV File Upload</h1>

        <!-- Upload Section -->
        <div class="upload-section">
            <form action="{{ route('cars.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="csv_file">Select CSV file:</label>
                <input type="file" name="csv_file" id="csv_file" required>
                <input type="submit" value="Upload">
            </form>
        </div>

        @if (session('dataToVerify'))
            <div class="image-verification-section">
                <h2>Image Verification</h2>
                <form action="{{ route('admin.store.verified.images') }}" method="POST">
                    @csrf
                    <input type="hidden" name="dataToVerify" value="{{ json_encode(session('dataToVerify')) }}">
                    @foreach (session('dataToVerify') as $index => $data)
                        <div class="verification-item">
                            <h4>Data for {{ $data['data']['make'] }} {{ $data['data']['model'] }} ({{ $data['data']['year'] }})
                            </h4>
                            <p>Images:</p>
                            @foreach ($data['images'] as $imageUrl)
                                <div>
                                    <label>
                                        <input type="checkbox" name="verified_images[{{ $index }}][]" value="{{ $imageUrl }}">
                                        <img src="{{ $imageUrl }}" alt="Image" style="width: 100px; height: auto;">
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                    <input type="submit" value="Verify Images">
                </form>
            </div>
        @endif


        <!-- Vehicle Data Table -->
        <h2>Vehicle Data</h2>
        <table>
            <thead>
                <tr>
                    <th>Sr No#</th>
                    <th>Slug</th>
                    <th>URL</th>
                    <th>VIN</th>
                    <th>Lot_Number</th>
                    <th>Auction</th>
                    <th>Country</th>
                    <th>Sale Branch</th>
                    <th>Seller</th>
                    <th>Auction Date</th>
                    <th>Year</th>
                    <th>Make</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Body Type</th>
                    <th>Drive</th>
                    <th>Fuel</th>
                    <th>Engine</th>
                    <th>Transmission</th>
                    <th>Images</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                        <td>{{ $vehicle->id }}</td>
                        <td>{{$vehicle->slug}}</td>
                        <td>{{ $vehicle->url}}</td>
                        <td>{{ $vehicle->vin}}</td>
                        <td>{{ $vehicle->lot_number }}</td>
                        <td>{{ $vehicle->auction}}</td>
                        <td>{{ $vehicle->country}}</td>
                        <td>{{ $vehicle->sale_branch}}</td>
                        <td>{{ $vehicle->seller}}</td>
                        <td>{{ $vehicle->auction_date}}</td>
                        <td>{{ $vehicle->year}}</td>
                        <td>{{ $vehicle->make}}</td>
                        <td>{{ $vehicle->model}}</td>
                        <td>{{ $vehicle->color}}</td>
                        <td>{{ $vehicle->bodytype}}</td>
                        <td>{{ $vehicle->drive}}</td>
                        <td>{{ $vehicle->fuel}}</td>
                        <td>{{ $vehicle->engine}}</td>
                        <td>{{ $vehicle->transmission}}</td>
                        <td>{{$vehicle->images}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="pagination">
            @if ($vehicles->hasPages())
                <ul class="pagination-list">
                    {{-- Previous Page Link --}}
                    @if ($vehicles->onFirstPage())
                        <li class="disabled"><span>&laquo;</span></li>
                    @else
                        <li><a href="{{ $vehicles->previousPageUrl() }}" rel="prev">&laquo;</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($vehicles->links()->elements[0] as $page => $url)
                        @if ($page == $vehicles->currentPage())
                            <li class="active"><span>{{ $page }}</span></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($vehicles->hasMorePages())
                        <li><a href="{{ $vehicles->nextPageUrl() }}" rel="next">&raquo;</a></li>
                    @else
                        <li class="disabled"><span>&raquo;</span></li>
                    @endif
                </ul>
            @endif
        </div>


</body>

</html>