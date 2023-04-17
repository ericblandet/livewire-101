<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function store()
    {
        $attributes = request()->validate([
            'fullname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'about' => 'min:10',
        ]);

        Profile::create($attributes);

        return back()->with('success-message', 'Profile created 🙂!');
    }
}
