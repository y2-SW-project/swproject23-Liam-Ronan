<?php

namespace App\Models;

use App\Models\Barber;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Services;
use Carbon\Carbon;

class Booking extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'date', 'time', 'barber_id', 'services_id'
    // ];

    // protected $guarded = [];

    public function barber()
    {
        return $this->belongsTo(Barber::class);
    }

    public function services()
    {
        return $this->belongsTo(Services::class);
    }
}
