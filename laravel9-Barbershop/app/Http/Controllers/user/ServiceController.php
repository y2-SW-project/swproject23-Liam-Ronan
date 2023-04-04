<?php

namespace App\Http\Controllers\user;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ServiceController extends Controller
{
        //show single service
        public function show(Services $service)
        {
            $user = Auth::user();
            $user->authorizeRoles('user');
            
            return view('user.services.show')->with('services', $service);
        }

        //returns the services show view for a user from the bookings page by finding the ID of that service
        public function showService($id)
        {
            try {
                $service = Services::findOrFail($id);
            } catch (ModelNotFoundException $exception) {
                abort(404);
            }

            return view('user.services.show', ['services' => $service]);
        }
}
