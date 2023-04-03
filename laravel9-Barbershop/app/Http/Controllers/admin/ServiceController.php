<?php

namespace App\Http\Controllers\admin;

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
        $user->authorizeRoles('admin');
        
        return view('admin.services.show')->with('services', $service);
    }

    public function create()
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        $service = Services::all();
        return view('admin.services.create')->with('services', $service);
    }

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

        if($request->hasFile('image')) {
            $formFields['image'] = $request->file('image')->store('images', 'public');
        }

        Services::create($formFields);

        // dd($request);

        if ($request) {
            return redirect()->route('index')->with('message', 'New Service created by Admin successfully!');
        } 
        else {
            return redirect()->back()->withInput()->with('message', 'Unable to create Service at this time. Please try again later.');
        }
    }

    public function edit(Services $service)
    {
        $user = Auth::user();
        $user->authorizeRoles('admin');

        return view('admin.services.edit', ['services' => $service]);
    }

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
