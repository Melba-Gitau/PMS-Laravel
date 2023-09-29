<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function create()
    {
        return view('property');
    }

    public function store(Request $request)
    {
        $propertyName = $request->input('name');

        // Check if a property with the same name already exists
        $existingProperty = Property::where('name', $propertyName)->first();

        if ($existingProperty) {
            // Property with the same name already exists, show a message
            return redirect()->route('property')->with('error', 'Property already exists.');
        } else {
            // Property with the name doesn't exist, create a new one
            $property = new Property();
            $property->name = $propertyName;
            $property->owner = $request->input('owner');
            $property->contact = $request->input('contact');
            $property->location = $request->input('location');
            $property->save();

            return redirect()->route('proplist')->with('success', 'Property added successfully.');
        }
    }

    public function index()
    {
        $properties = Property::all();
        return view('proplist', compact('properties'));
    }
}

