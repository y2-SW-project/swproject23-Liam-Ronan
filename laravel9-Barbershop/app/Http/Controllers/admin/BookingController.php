<?php

namespace App\Http\Controllers\admin;

use App\Models\Barber;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $bookings = Booking::with('barber', 'services')->latest()->simplePaginate(4);

        return view('admin.bookings.index')->with('bookings', $bookings);
    }

    public function show(Booking $booking)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.bookings.show')->with('booking', $booking);
    }

    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $barbers = Barber::all();
        $services = Services::all();
        return view('admin.bookings.create')->with('barbers', $barbers)->with('services', $services);
    }

    public function store(Request $request)
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'barber_id' => 'required',
            'service_id' => 'required' | 'exists:services,id'
        ]);

        $booking = Booking::create([
            'date' => $request->date,
            'time' => $request->time,
            'barber_id' => $request->barber_id,
            'services_id' => $request->services_id
        ]);

        // dd($request);

        if ($booking) {
            return redirect()->route('admin.bookings.index')->with('message', 'Admin Booking created successfully!');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to create Admin booking at this time. Please try again later.');
        }
    }

    
    public function edit(Booking $booking)
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $barbers = Barber::all();
        $services = Services::all();

        return view('admin.bookings.edit', ['booking' => $booking])->with('barbers', $barbers)->with('services', $services);
    }

    
    public function update(Request $request, Booking $booking)
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'date' => 'required',
            'time' => 'required',
            'barber_id' => 'required',
            'service_id' => 'required' | 'exists:services,id'
        ]);

        $booking->update($formFields);

        if ($booking) {
            return redirect()->route('admin.bookings.index')->with('message', 'Admin booking has been Updated');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to Update Admin booking at this time. Please try again later.');
        }
    }

    public function destroy(Booking $booking)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $booking->delete();

        if ($booking) {
            return redirect()->route('admin.bookings.index')->with('message', 'Admin booking has been cancelled');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to delete Admin booking at this time. Please try again later.');
        }
    }
}
