<?php

namespace App\Http\Controllers\user;

use App\Models\Barber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BarberController extends Controller
{
            //show single Barber
            public function show(Barber $barber)
            {
                return view('user.barbers.show')->with('barbers', $barber);
            }

            public function showBarber($id)
            {
                try {
                    $barber = Barber::findOrFail($id);
                } catch (ModelNotFoundException $exception) {
                    abort(404);
                }
    
                return view('user.barbers.show', ['barbers' => $barber]);
            }
}
