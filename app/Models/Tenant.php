<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = ['property_id', 'unit_id', 'name', 'email', 'contact'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}

