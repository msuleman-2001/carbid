<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Str;
use League\Csv\Reader;

class CarController extends Controller
{
    public function showUploadForm()
    {
        $vehicles = Car::paginate(10);
        return view('admindashboard.upload', compact('vehicles'));
    }
    public function uploadCSV(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'csv_file' => 'required|file|mimes:csv,txt|max:2048',
    ]);

    try {
        // Load the CSV
        $file = $request->file('csv_file');
        $csv = Reader::createFromPath($file->getRealPath(), 'r');
        $csv->setHeaderOffset(0); // Use first row as header

        // Iterate through the CSV records
        foreach ($csv->getRecords() as $record) {
            // Trim all field values
            $data = array_map('trim', $record);

            // Extract image URLs
            $images = explode(',', trim($data['images'], "[]\""));  // Clean and split URLs
            $images = array_map('trim', $images);  // Ensure each URL is properly trimmed

            // Generate slug from make, model, and year
            $slug = Str::slug(
                "{$data['make']}-{$data['model']}-{$data['year']}"
            );

            // Insert data into the database
            Car::create([
                'url' => $data['url'] ?? null,
                'vin' => $data['vin'] ?? null,
                'lot_number' => $data['lot_number'] ?? null,
                'auction' => $data['auction'] ?? null,
                'country' => $data['country'] ?? null,
                'sale_branch' => $data['sale_branch'] ?? null,
                'year' => $data['year'] ?? null,
                'make' => $data['make'] ?? null,
                'model' => $data['model'] ?? null,
                'color' => $data['color'] ?? null,
                'bodytype' => $data['bodytype'] ?? null,
                'drive' => $data['drive'] ?? null,
                'fuel' => $data['fuel'] ?? null,
                'engine' => $data['engine'] ?? null,
                'transmission' => $data['transmission'] ?? null,
                // Store image URLs as JSON without unnecessary escaping
                'images' => json_encode($images, JSON_UNESCAPED_SLASHES),
                'slug' => $slug,
            ]);
        }

        return redirect()->back()->with('success', 'CSV uploaded and data stored successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }
}
}
