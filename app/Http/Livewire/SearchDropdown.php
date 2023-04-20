<?php

namespace App\Http\Livewire;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function render()
    {
        return view('livewire.search-dropdown');
    }

    public function updatedSearch($newValue)
    {
        if (strlen($this->search) > 3) {
            $this->searchResults = [];
        }

        $response =  http::get("https://itunes.apple.com/search/?term={$this->search}&limit=10");
        $this->searchResults = $response->json()['results'];
        // dd($this->searchResults);
    }
}
