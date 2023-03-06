<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Barber extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function booking() {
        return $this->hasMany(Booking::class);
    }
}
