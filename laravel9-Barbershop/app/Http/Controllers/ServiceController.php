<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Services $services) {
        return view('user.services.show')->with('services', $services);
    }

    public function create() {
        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        return view('user.services.create');
    }




    public function edit(Services $services) {

        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        return view('user.bookings.edit', ['services' => $services]);
    }
}
