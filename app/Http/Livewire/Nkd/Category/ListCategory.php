<?php

namespace App\Http\Livewire\Nkd\Category;

use App\Category;
use App\Track;
use Livewire\Component;

class ListCategory extends Component
{
    public $categories;
//    public $clients;
//    public $tracks;


    public function mount(){
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.nkd.category.list-category');
    }
}
