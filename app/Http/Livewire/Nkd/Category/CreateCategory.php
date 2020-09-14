<?php

namespace App\Http\Livewire\Nkd\Category;

use App\Category;
use App\Service\Nkd\CategoryServeice;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public $description;
    public function mount (){
        $categories= Category::all();
    }

    public function save(){
        $data = $this->validate(CategoryServeice::validate());

        $cat = new Category();
        $cat->name = $this->name;
        $cat->description = $this->description;
//        $cat->save();
//        emotify('success','Enregistrement éffectuer avec succès');
//        drakify('success');
//        connectify('success', 'Success','Enregistrement éffectuer avec succès');


        in_return( function() use ($cat){
            $cat->save();
            notify()->success('Enregistrement éffectué avec succès');
        });
        return redirect()->route('backend.track.list');

    }

    public function render()
    {
        return view('livewire.nkd.category.create-category');
    }
}
