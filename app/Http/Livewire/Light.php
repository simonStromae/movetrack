<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Light extends Component
{
    public $brightness = 10;

    public function fill_progress(){
        $this->brightness = 100;
    }

    public function empty_progress(){
        $this->brightness = 0;
    }

    public function decrement_progress(){
        $this->brightness -= 10;
    }

    public function increment_progress(){
        $this->brightness += 10;
    }

    public function render()
    {
        return view('livewire.light');
    }
}
