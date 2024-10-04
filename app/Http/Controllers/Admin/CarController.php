<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cars;
class CarController extends Controller
{
    public function showUploadForm()
{
    $vehicles = cars::paginate(10);
    return view('admindashboard.upload', compact('vehicles'));
}

private function createUniqueSlug($model, $field, $value)
{
    // Generate the initial slug using vehicle_make and vehicle_model
    $slug = Str::slug($value);

    // Check if the slug already exists in the database
    $count = DB::table($model)
        ->where($field, 'like', $slug . '%')
        ->count();

    // If a similar slug exists, append a number to make it unique
    if ($count > 0) {
        $slug = $slug . '-' . ($count + 1);
    }

    return $slug;
}

public function uploadCsv(Request $request)
{
    // Validate the uploaded file
    $request->validate([
        'csv_file' => 'required|file|mimes:csv,txt',
    ]);

    // Get the file
    $file = $request->file('csv_file');

    // Open the file and read the contents
    if (($handle = fopen($file, 'r')) !== false) {
        // Skip the header row if it exists
        fgetcsv($handle);

        // Process each row of the file
        while (($data = fgetcsv($handle, 1000, ',')) !== false) {
            // Generate a unique slug using vehicle_make and vehicle_model
            $slug = $this->createUniqueSlug('cars', 'slug', $data[5] . '-' . $data[6]) . '-' . $data[4];

            // Insert data into the database
            cars::create([
                'vehicle_lot_url' => $data[0],
                'vehicle_lot_number' => $data[1],
                'vehicle_retail_value' => $data[2],
                'vehicle_sale_date' => $data[3],
                'vehicle_year' => $data[4],
                'vehicle_make' => $data[5],
                'vehicle_model' => $data[6],
                'vehicle_engine_type' => $data[7],
                'vehicle_cylinders' => $data[8],
                'vehicle_vin' => $data[9],
                'vehicle_title_code' => $data[10],
                'vehicle_odometer' => $data[11],
                'vehicle_odometer_description' => $data[12],
                'vehicle_damage_description' => $data[13],
                'vehicle_current_bid' => $data[14],
                'vehicle_my_bid' => $data[15],
                'vehicle_item_number' => $data[16],
                'vehicle_sale_name' => $data[17],
                'slug' => $slug, // Add the unique slug here
            ]);
        }

        fclose($handle);
    }

    return redirect()->back()->with('success', 'CSV file uploaded and data stored successfully!');
}

}
