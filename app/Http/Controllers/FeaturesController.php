<?php

namespace App\Http\Controllers;

use App\Models\Feature; // Make sure you import the Feature Model
use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function index()
    {
        // Retrieve all records from the features table.
        $features = Feature::all();

        // Pass the data to the view 'EmpleoJohnrey.index' using the compact helper.
        return view('EmpleoJohnrey.index')->with([
            'features' => $features
        ]);
    }
}
