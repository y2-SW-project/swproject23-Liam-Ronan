<?php

namespace App\Http\Controllers\admin;

use App\Models\Barber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BarberController extends Controller
{
    //Returns the show view for admin
    public function show(Barber $barber)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');
        
        return view('admin.barbers.show')->with('barber', $barber);
    }

    //Returns the create view for admin
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $barber = Barber::all();
        return view('admin.barbers.create')->with('barber', $barber);
    }

     //Store the data passed in from the POST form
    public function store(Request $request)
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        //checks to see if $request has a file, if it does add it to form fields and store it in public/images
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Barber::create($formFields);

        // dd($request);

        //if $request = true, return the admin with a message that is called in the index view
        if ($request) {
            return redirect()->route('home')->with('message', 'New Barber created by Admin successfully!');
        } 
        //If the data can't be stored, return the last view with the message
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to create barber at this time. Please try again later.');
        }
    }

    //Return edit view for admin
    public function edit(Barber $barber)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.barbers.edit', ['barber' => $barber]);
    }

    //Update the data from the edit form, validate the data
    public function update(Request $request, Barber $barber)
    {
        // dd($request);
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'name' => 'required',
            'bio' => 'required',
            'email' => 'required',
            'phone_number' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $barber->update($formFields);

        if ($barber) {
            return redirect()->route('home')->with('message', 'Barber Updated By Admin successfully');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to Update Barber at this time. Please try again later.');
        }
    }

    /* Delete a service for admin */
    public function destroy(Barber $barber)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $barber->delete();

        if ($barber) {
            return redirect()->route('home')->with('message', 'Admin Barber has been deleted');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to delete Admin Barber at this time. Please try again later.');
        }
    }
    
}
