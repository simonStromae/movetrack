<?php

namespace App\Http\Livewire\Nkd\Quater;

use App\Quater;
use Livewire\Component;

class ListQuater extends Component
{
    public $quaters;

    public function mount(){
        $this->quaters = Quater::all();
    }

    public function render()
    {
        return view('livewire.nkd.quater.list-quater');
    }
}
