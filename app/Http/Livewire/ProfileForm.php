<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class ProfileForm extends Component
{
    public $fullname;
    public $email;
    public $phone;
    public $about;
    public $successMessage;
    protected $rules = [
        'fullname' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'about' => 'min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.profile-form');
    }

    public function submitForm()
    {
        // simulate work
        sleep(1);
        $attributes = $this->validate($this->rules);

        $attributes = [
            'fullname' => $this->fullname,
            'email' => $this->email,
            'phone' => $this->phone,
            'about' => $this->about,
        ];

        Profile::create($attributes);

        $this->successMessage = "Profile '{$this->fullname}' created  🙂!";
        $this->reset('fullname', 'email', 'about', 'phone');
    }
}
