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

    public function getCars(Request $request)
{
    $query = Car::query(); // Start building the query

    // Apply filters if provided
    if ($request->filled('make')) {
        $query->where('make', $request->make);
    }
    if ($request->filled('model')) {
        $query->where('model', $request->model);
    }
    if ($request->filled('color')) {
        $query->where('color', $request->color);
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
