<?php

namespace App\Http\Livewire\Nkd\Track;

use App\Track;
use Livewire\Component;

class StatusChange extends Component
{
    public $track;
    public $track_id;
    public $statusmodel;

    public function mount($id_track){

        $this->track = Track::find($id_track);
        $this->track_id = $id_track;
        $this->statusmodel = $this->track->status;
    }

    public function updatedStatusmodel(){
        $_track= Track::find($this->track_id);
        $_track->status = $this->statusmodel;
        $_track->update();
    }

    public function render()
    {
        return view('livewire.nkd.track.status-change');
    }
}
