<?php

namespace App\Http\Livewire\BecomeDistributor;

use App\CentralLogics\Helpers;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $countries = Helpers::getCountries();
        return view('livewire.become-distributor.index',compact('countries'));
    }
}
