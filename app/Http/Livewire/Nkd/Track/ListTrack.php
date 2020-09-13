<?php

namespace App\Http\Livewire\Nkd\Track;

use App\Track;
use Livewire\Component;

class ListTrack extends Component
{

//    public $track_id;
    public $tracks;
//    public $statusmodel;

    public function mount(){
        $this->tracks = Track::all();
    }

    public function render()
    {
        return view('livewire.nkd.track.list-track');
    }
}
