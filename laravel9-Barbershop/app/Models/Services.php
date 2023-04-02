<?php

namespace App\Models;

use App\Models\Barber;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Services extends Model
{
    use HasFactory;

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }

    public function barber() {
        return $this->belongsToMany(Barber::class)->withTimestamps();
    }
}
