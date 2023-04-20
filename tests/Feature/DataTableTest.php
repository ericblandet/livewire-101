<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DataTableTest extends TestCase
{
    //  ! not working because of db access with sail.
    /** @test */
    // public function profiles_data_table_presence()
    // {
    //     $this->get('/profiles')
    //         ->assertSeeLivewire('profiles-data-table');
    // }
}
