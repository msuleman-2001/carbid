<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV File Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            max-width: 400px;
            margin: 0 auto;
        }
        input[type="file"], input[type="submit"] {
            display: block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Upload CSV File</h1>
        <form action="{{ route('cars.upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="csv_file">Select CSV file:</label>
            <input type="file" name="csv_file" id="csv_file" required>
            <input type="submit" value="Upload">
        </form>
    </div>
</body>
</html>
