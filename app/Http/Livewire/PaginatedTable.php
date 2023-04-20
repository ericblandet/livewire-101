<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;

class PaginatedTable extends Component
{
    public $profiles = [];


    public function render()
    {
        $this->profiles = Profile::all();
        return view('livewire.paginated-table');
    }
}
