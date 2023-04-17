<?php

namespace Tests\Feature;

use App\Http\Livewire\ProfileForm;
use Livewire\Livewire;
use Tests\TestCase;

class ProfileFormTest extends TestCase
{

    /** @test */
    public function create_profile_page_contains_profile_form_livewire_component(): void
    {
        $this->get('/profiles/create')->assertSeeLivewire(ProfileForm::class);
    }

    // ! not working because of weird db connection pb.
    // > check PHP Unit course first

    // /** @test */
    // public function form_create_db_entry()
    // {
    //     Livewire::test(ProfileForm::class)
    //         ->set('fullname', 'Candide Thovex')
    //         ->set('email', 'candide@thovex.io')
    //         ->set('phone', '1234567890')
    //         ->set('about', 'Dolore animqui magna ut consectetur tempor incididunt Lorem elit voluptate enim pariatur dolor veniam.')
    //         ->call('submitForm')
    //         ->assertSee('successMessage', "Profile 'Candide Thovex' created  🙂!");
    // }

    /** @test */
    public function profile_form_email_is_email()
    {
        Livewire::test(ProfileForm::class)
            ->set('fullname', 'Candide Thovex')
            ->set('email', 'candide____thovex.io')
            ->set('phone', '1234567890')
            ->set('about', 'Dolore animqui magna ut consectetur tempor incididunt Lorem elit voluptate enim pariatur dolor veniam.')
            ->call('submitForm')
            ->assertHasErrors(['email', 'email']);
    }

    /** @test */
    public function profile_form_about_has_min_char()
    {
        Livewire::test(ProfileForm::class)
            ->set('fullname', 'Candide Thovex')
            ->set('email', 'candide@thovex.io')
            ->set('phone', '1234567890')
            ->set('about', 'Dolore')
            ->call('submitForm')
            ->assertHasErrors(['about', 'min:10']);
    }
}
