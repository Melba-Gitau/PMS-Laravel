<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $table = 'units';

    // Define the relationship with Property model
    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }
}
