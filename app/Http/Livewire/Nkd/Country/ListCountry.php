<?php

namespace App\Http\Livewire\Nkd\Country;

use App\Country;
use Livewire\Component;

class ListCountry extends Component
{
    public $countries;
    public function mount(){
        $this->countries = Country::All();
    }

    public function render()
    {
        return view('livewire.nkd.country.list-country');
    }
}
