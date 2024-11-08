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
    public function uploadCsv(Request $request)
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

            $dataToVerify = []; // Array to store records for verification

            // Iterate through the CSV records
            foreach ($csv->getRecords() as $record) {
                // Trim all field values
                $data = array_map('trim', $record);

                // Extract image URLs
                $images = explode(',', trim($data['images'], "[]\""));  // Clean and split URLs
                $images = array_map('trim', $images);  // Ensure each URL is properly trimmed

                // Prepare data for verification
                $dataToVerify[] = [
                    'data' => $data,
                    'images' => $images
                ];
            }

            // Store dataToVerify in session
            session(['dataToVerify' => $dataToVerify]);

            // Pass data for verification to the view
            return view('admin.image_verification', compact('dataToVerify'));
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }

    // Method to store verified images
    public function storeVerifiedImages(Request $request)
    {
        // Validate the form input for the verified images
        $validatedData = $request->validate([
            'verified_images' => 'required|array',
            'verified_images.*' => 'array',
        ]);
    
        $dataToVerify = session('dataToVerify');
    
        foreach ($validatedData['verified_images'] as $index => $verifiedImages) {
            $data = $dataToVerify[$index]['data'];
    
            $localImagePaths = [];  // Array to store local paths of downloaded images
    
            foreach ($verifiedImages as $imageUrl) {
                // Generate a unique file name for each image
                $imageName = 'car_' . uniqid() . '.jpg';
                $imagePath = storage_path('app/public/car_images/' . $imageName);
    
                try {
                    // Download the image and save it to local storage
                    $imageContents = file_get_contents($imageUrl);
                    file_put_contents($imagePath, $imageContents);
    
                    // Save the local storage path for the image (accessible via public/storage)
                    $localImagePaths[] = 'storage/car_images/' . $imageName;
    
                } catch (\Exception $e) {
                    // If there's an error downloading the image, log the error and skip to the next image
                    \Log::error("Error downloading image: " . $e->getMessage());
                    continue;
                }
            }
    
            // Store car data in the database with local image paths
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
                'images' => json_encode($localImagePaths, JSON_UNESCAPED_SLASHES),
                'is_verified' => true,
                'slug' => Str::slug("{$data['make']}-{$data['model']}-{$data['year']}"),
            ]);
        }
    
        session()->forget('dataToVerify');
    
        return redirect()->back()->with('success', 'Images verified, downloaded, and data stored successfully.');
    }
    
    
}
