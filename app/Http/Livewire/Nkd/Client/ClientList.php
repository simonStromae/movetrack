<?php

namespace App\Http\Livewire\Nkd\Client;

use App\Client;
use Livewire\Component;

class ClientList extends Component
{
    public $clients;


    public function mount(){
        $this->clients = Client::all();
    }

    public function render()
    {
        return view('livewire.nkd.client.client-list');
    }
}
