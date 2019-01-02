<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DriverEquipment extends Model
{
    protected $fillable = [
        'driver_id', 'imei', 'name', 'phone'

    ];

    protected $casts = [
    ];

    protected $dates = [
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
