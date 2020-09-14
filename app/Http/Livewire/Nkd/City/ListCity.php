<?php

namespace App\Http\Livewire\Nkd\City;

use App\City;
use Livewire\Component;

class ListCity extends Component
{
    public $cities;

    public function mount(){
        $this->cities = City::all();
    }

    public function render()
    {
        return view('livewire.nkd.city.list-city');
    }
}
