<?php

namespace App\Http\Controllers\user;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
        //show single service
        public function show(Services $service)
        {
            return view('user.services.show')->with('services', $service);
        }
}
