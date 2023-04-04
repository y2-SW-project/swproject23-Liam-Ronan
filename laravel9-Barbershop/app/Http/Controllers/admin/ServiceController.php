<?php

namespace App\Http\Controllers\admin;

use App\Models\Services;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    //Returns the show view for admin
    public function show(Services $service)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');
        
        return view('admin.services.show')->with('services', $service);
    }

    //Returns the create view for admin
    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $service = Services::all();
        return view('admin.services.create')->with('services', $service);
    }

    //Store the data passed in from the POST form
    public function store(Request $request)
    {

        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'haircut' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required'
        ]);

        //checks to see if $request has a file, if it does add it to form fields and store it in public/images
        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Services::create($formFields);

        // dd($request);

        //if $request = true, return the admin with a message that is called in the index view
        if ($request) {
            return redirect()->route('home')->with('message', 'New Service created by Admin successfully!');
        } 
        //If the data can't be stored, return the last view with the message
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to create Service at this time. Please try again later.');
        }
    }

    //Return edit view for admin
    public function edit(Services $service)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.services.edit', ['services' => $service]);
    }

    //Update the data from the edit form, validate the data
    public function update(Request $request, Services $service)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $formFields = $request->validate([
            'haircut' => 'required',
            'description' => 'required',
            'price' => 'required',
            'duration' => 'required'
        ]);

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        $service->update($formFields);

        if ($service) {
            return redirect()->route('home')->with('message', 'Service Updated By Admin successfully');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to Update Service at this time. Please try again later.');
        }
    }

    /* Delete a service for admin */
    public function destroy(Services $service)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $service->delete();

        if ($service) {
            return redirect()->route('home')->with('message', 'Admin service has been deleted');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to delete Admin service at this time. Please try again later.');
        }
    }
}
