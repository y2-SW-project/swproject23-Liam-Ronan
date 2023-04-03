<?php

namespace App\Http\Controllers;

use App\Models\Barber;
use App\Models\Booking;
use App\Models\Services;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $service = Services::latest()->simplePaginate(4);

        return view('index')->with('services', $service);
    }

    public function about()
    {
        $barber = Barber::all();

        return view('about')->with('barbers', $barber);;
    }

    public function contact()
    {
        return view('contact');
    }
}
