<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Car;
class ResultController extends Controller
{
    public function result()
    {
        return view('frontend.product-2');
    }

    public function searchCars(Request $request)
    {
        $query = $request->input('query'); // Get the search input

        // Search the database for matching records
        $cars = Car::where('make', 'LIKE', "%{$query}%")
                    ->orWhere('model', 'LIKE', "%{$query}%")
                    ->orWhere('year', 'LIKE', "%{$query}%")
                    ->orWhere('color', 'LIKE', "%{$query}%")
                    ->orWhere('lot_number', 'LIKE', "%{$query}%")
                    ->orWhere('auction', 'LIKE', "%{$query}%")
                    ->orWhere('country', 'LIKE', "%{$query}%")
                    ->orWhere('sale_branch', 'LIKE', "%{$query}%")
                    ->orWhere('bodytype', 'LIKE', "%{$query}%")
                    ->orWhere('drive', 'LIKE', "%{$query}%")
                    ->orWhere('fuel', 'LIKE', "%{$query}%")
                    ->orWhere('engine', 'LIKE', "%{$query}%")
                    ->orWhere('transmission', 'LIKE', "%{$query}%")
                    ->get();

        // Return the search results
        return response()->json($cars);
    }
    public function getCars(Request $request)
    {
        $query = Car::query(); // Start building the query
    
        // Apply filters if provided
        if ($request->has('sale_branches') && !empty($request->sale_branches)) {
            $query->whereIn('sale_branch', $request->sale_branches);
        }
        if ($request->has('makes') && !empty($request->makes)) {
            $query->whereIn('make', $request->makes);
        }
        
        if ($request->has('models') && !empty($request->models)) {
            $query->whereIn('model', $request->models);
        }
         
        if ($request->has('years') && !empty($request->years)) {
            $query->whereBetween('year', [min($request->years), max($request->years)]);
        }
        
        
        
        if ($request->has('colors') && !empty($request->colors)) {
            $query->whereIn('color', $request->colors);
        }

        if ($request->has('bodytypes') && !empty($request->bodytypes)) {
            $query->whereIn('bodytype', $request->bodytypes);
        }

        if ($request->has('drives') && !empty($request->drives)) {
            $query->whereIn('drive', $request->drives);
        }

        if ($request->has('fuels') && !empty($request->fuels)) {
            $query->whereIn('fuel', $request->fuels);
        }
        
        if ($request->has('engines') && !empty($request->engines)) {
            $query->whereIn('engine', $request->engines);
        }

        if ($request->has('transmissions') && !empty($request->transmissions)) {
            $query->whereIn('transmission', $request->transmissions);
        }

        $cars = $query->get(); // Execute the query and get the results
    
        return response()->json($cars); // Return the cars as JSON
    }
    

    
    public function getSaleBranch()
    {
        // Fetch unique car makes with their total counts
        $salebranches = Car::select('sale_branch', \DB::raw('COUNT(*) as total'))
            ->groupBy('sale_branch')
            ->get();

        // Return the data as JSON response
        return response()->json($salebranches);
    }
    public function getMakes()
    {
        // Fetch unique car makes with their total counts
        $makes = Car::select('make', \DB::raw('COUNT(*) as total'))
            ->groupBy('make')
            ->get();

        // Return the data as JSON response
        return response()->json($makes);
    }
    public function getModels()
    {
        // Fetch unique car makes with their total counts
        $models = Car::select('model', \DB::raw('COUNT(*) as total'))
            ->groupBy('model')
            ->get();

        // Return the data as JSON response
        return response()->json($models);
    }
    public function getYears()
{
    // Fetch distinct years in ascending order
    $years = Car::select('year')->distinct()->orderBy('year', 'asc')->get();

    // Return the years as a JSON response
    return response()->json($years);
}

    public function getColors()
    {
        // Fetch unique car makes with their total counts
        $colors = Car::select('color', \DB::raw('COUNT(*) as total'))
            ->groupBy('color')
            ->get();

        // Return the data as JSON response
        return response()->json($colors);
    }

    public function getBodyTypes()
    {
        // Fetch unique car makes with their total counts
        $bodytypes = Car::select('bodytype', \DB::raw('COUNT(*) as total'))
            ->groupBy('bodytype')
            ->get();

        // Return the data as JSON response
        return response()->json($bodytypes);
    }

    public function getDrive()
    {
        // Fetch unique car makes with their total counts
        $drives = Car::select('drive', \DB::raw('COUNT(*) as total'))
            ->groupBy('drive')
            ->get();

        // Return the data as JSON response
        return response()->json($drives);
    } 

    public function getFuels()
    {
        // Fetch unique car makes with their total counts
        $fuels = Car::select('fuel', \DB::raw('COUNT(*) as total'))
            ->groupBy('fuel')
            ->get();

        // Return the data as JSON response
        return response()->json($fuels);
    } 

    public function getEngines()
    {
        // Fetch unique car makes with their total counts
        $fuels = Car::select('engine', \DB::raw('COUNT(*) as total'))
            ->groupBy('engine')
            ->get();

        // Return the data as JSON response
        return response()->json($fuels);
    } 

    public function getTransmissions()
    {
        // Fetch unique car makes with their total counts
        $transmissions = Car::select('transmission', \DB::raw('COUNT(*) as total'))
            ->groupBy('transmission')
            ->get();

        // Return the data as JSON response
        return response()->json($transmissions);
    } 

    public function getAuctions()
    {
        // Fetch unique car makes with their total counts
        $auctions = Car::select('auction', \DB::raw('COUNT(*) as total'))
            ->groupBy('auction')
            ->get();

        // Return the data as JSON response
        return response()->json($auctions);
    } 
}
