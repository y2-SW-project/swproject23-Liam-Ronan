<?php

namespace App\Models;

use App\Models\Booking;
use App\Models\Services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;

    public function booking() {
        return $this->hasMany(Booking::class);
    }

    public function service() {
        return $this->belongsToMany(Services::class)->withTimestamps();
    }
}
