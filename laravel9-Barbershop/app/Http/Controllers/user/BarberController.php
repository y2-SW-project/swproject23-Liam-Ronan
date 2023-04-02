<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
            //show single Barber
            public function show(Barber $barber)
            {
                return view('user.barbers.show')->with('barbers', $barber);
            }
}
