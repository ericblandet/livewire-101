<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{

    /** @test */
    public function search_dropdown_exists()
    {
        $this->get('/')
        ->assertSeeLivewire(SearchDropdown::class);
    }

    /** @test */
    public function search_dropdown_correctly_fetches()
    {
        Livewire::test(SearchDropdown::class)
            ->assertDontSee('Yiruma')
            ->set('search', 'river flows in you')
            ->assertSee('Yiruma');
    }

    /** @test */
    public function search_dropdown_no_song_found()
    {
        Livewire::test(SearchDropdown::class)
            ->set('search', 'wekjfnweolfjkinweofinweoi')
            ->assertSee('No results found for wekjfnweolfjkinweofinweoi');
    }
}
