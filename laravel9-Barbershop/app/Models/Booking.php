<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Barber;
use App\Models\Services;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function user() {
        return $this->belongsTo(User::class);
    }
}
