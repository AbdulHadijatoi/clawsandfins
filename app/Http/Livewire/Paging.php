<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Paging extends Component
{
    use WithPagination;
    
    public $users;
    public $view;
    public $total=0;

    protected $listeners =['setPage'];

    public function setPage($users)
    {
        dd($users);
        $this->users = [$users];
    }

    public function render()
    {
        return view('livewire.paging');
    }
}
