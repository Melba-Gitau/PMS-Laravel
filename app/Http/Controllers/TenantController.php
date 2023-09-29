<?php

// app/Http/Controllers/TenantController.php

// app/Http/Controllers/TenantController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tenant;
use App\Models\Unit;
use App\Models\Property;

class TenantController extends Controller
{
    public function create()
    {
        $properties = Property::all();
        $units = Unit::all();
        return view('tenant', compact('properties', 'units'));
    }

    public function store(Request $request)
    {
        $unitId = $request->input('unit_id');
        $tenantName = $request->input('name');
        $propertyId = $request->input('property_id');

        // Check if the selected unit is already assigned to another tenant in the same property
        $existingTenant = Tenant::where('unit_id', $unitId)->whereHas('unit.property', function($query) use ($propertyId) {
            $query->where('id', $propertyId);
        })->first();

        if ($existingTenant) {
            // Unit is already assigned to another tenant in the same property, show an error message
            return redirect()->route('tenant')->with('error', 'The selected unit is already assigned to another tenant in the same property.');
        } else {
            // Unit is unique, create a new tenant
            $tenant = new Tenant();
            $tenant->unit_id = $unitId;
            $tenant->property_id = $propertyId;
            $tenant->name = $tenantName;
            $tenant->email = $request->input('email');
            $tenant->contact = $request->input('contact');
            $tenant->save();

            return redirect()->route('tenantlist')->with('success', 'Tenant added successfully.');
        }
    }

    public function index()
    {
        $tenants = Tenant::with('unit')->get();
        return view('tenantlist', compact('tenants'));
    }
}


