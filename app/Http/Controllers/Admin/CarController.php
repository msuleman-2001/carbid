<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cars;
class CarController extends Controller
{
    public function showUploadForm()
    {
        return view('admindashboard.upload');
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
                ]);
            }

            fclose($handle);
        }

        return redirect()->back()->with('success', 'CSV file uploaded and data stored successfully!');
    }
}
