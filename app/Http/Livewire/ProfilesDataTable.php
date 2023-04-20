<?php

namespace App\Http\Livewire;

use App\Models\Profile;
use Livewire\Component;
use Livewire\WithPagination;

class ProfilesDataTable extends Component
{
    use WithPagination;

    public $active = true;
    public $search;
    public $sortField;
    public $sortAsc;
    protected $queryString = ['search', 'active', 'sortAsc', 'sortField'];

    public function render()
    {
        return view(
            'livewire.profiles-data-table',
            ['profiles' => Profile::where(function ($query) {
                $query->where('email', 'like', '%' . $this->search . '%')
                    ->orWhere('fullname', 'like', '%' . $this->search . '%');
            })
                ->where('active', $this->active)
                ->when($this->sortField, function ($query) {
                    $query->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
                })
                ->paginate(5)]
        );
    }

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
