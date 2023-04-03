<?php

namespace App\Http\Controllers\user;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
        //show single service
        public function show(Services $service)
        {
            $user = Auth::user();
            $user->authorizeRoles('user');
            
            return view('user.services.show')->with('services', $service);
        }
}
