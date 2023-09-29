<?php

// app/Http/Controllers/UnitController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Property;

class UnitController extends Controller
{
    public function create()
    {
        $properties = Property::all();
        return view('unit', compact('properties'));
    }

    public function store(Request $request)
    {
        $propertyId = $request->input('property_id');
        $unitName = $request->input('unit');

        // Check if a unit with the same name and property already exists
        $existingUnit = Unit::where('property_id', $propertyId)->where('unit', $unitName)->first();

        if ($existingUnit) {
            // Unit with the same name and property already exists, show an error message
            return redirect()->route('unit')->with('error', 'Unit already exists for this property.');
        } else {
            // Unit with the name doesn't exist, create a new one
            $unit = new Unit();
            $unit->property_id = $propertyId;
            $unit->unit = $unitName;
            $unit->rent = $request->input('rent');
            $unit->save();

            return redirect()->route('unitlist')->with('success', 'Unit added successfully.');
        }
    }

    public function index()
    {
        $units = Unit::with('property')->get();
        return view('unitlist', compact('units'));
    }
}

