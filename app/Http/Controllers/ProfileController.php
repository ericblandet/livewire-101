<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    // This one is not necessary anymore, since it is done in the livewire component
    public function store()
    {
        $attributes = request()->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'about' => 'min:10',
        ]);

        Profile::create($attributes);

        return back()->with('success_message', 'Profile created 🙂!');
    }

    public function index()
    {
        return view('profiles');
    }
}
