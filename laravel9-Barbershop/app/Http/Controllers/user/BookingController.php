<?php

namespace App\Http\Controllers\user;

use App\Models\Barber;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function index() {
        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        $bookings = Booking::all();

        return view('user.bookings.index')->with('bookings', $bookings);
    }

    public function show(Booking $booking) {
        return view('user.bookings.show')->with('booking', $booking);
    }

    public function create() {
        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        $barbers = Barber::all();
        $services = Services::all();
        return view('user.bookings.create')->with('barbers', $barbers)->with('services', $services);
    }

    public function store(Request $request) {

        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        // dd($request);

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'barber_id' => 'required',
            'services_id' => ['required', 'exists:services,id']
        ]);

        $booking = Booking::create([
            'date' => $request->date,
            'time' => $request->time,
            'barber_id' => $request->barber_id,
        ]);

        $booking->services()->attach($request->services);

        return to_route('user.bookings.index')->with('message', 'Your booking has been confirmed');
    }

    public function edit(Booking $booking) {

        // $user = Auth::user();
        // $user->authorizeRoles('admin');
        $barbers = Barber::all();
        $services = Services::all();

        return view('user.bookings.edit', ['booking' => $booking])->with('barbers', $barbers)->with('services', $services);
    }

    public function update(Request $request, Booking $booking) {

        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'duration' => 'required',
            'service' => 'required',
            'description' => 'required',
            'price' => 'required',
            'barber_id' => 'required'
        ]);

        $booking->update($formFields);

        $booking->services()->attach($request->services);

        return to_route('user.bookings.index')->with('message', 'Booking Updated successfully');
    }

    public function destroy(Booking $booking) {
        // $user = Auth::user();
        // $user->authorizeRoles('admin');

        $booking->delete();
        return to_route('user.projects.index')->with('message', 'Booking has been cancelled');
    }
}
