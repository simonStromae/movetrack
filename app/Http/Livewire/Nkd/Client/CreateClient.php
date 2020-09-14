<?php

namespace App\Http\Livewire\Nkd\Client;

use App\Client;
use App\Quater;
use App\Service\Nkd\ClientService;
use App\User;
use Livewire\Component;

class CreateClient extends Component
{
    public $name;
    public $username;
    public $password;
    public $quater_id;

    public $quaters;

    public function mount(){
        $this->quaters = Quater::all();
    }

    public function save(){

        $this->validate(ClientService::validate());
        $client = new Client();
        $client->quater_id = $this->quater_id;
        $client->save();

        $user= new User();
        $user->name= $this->name;
        $user->username= $this->username;
        $user->password= bcrypt($this->password);
        $user->client_id= $client->id;

        in_return( function() use ($user){
            $user->save();
            notify()->success('Enregistrement éffectué avec succès');
        });

        return redirect()->route('backend.client.list');

    }

    public function render()
    {
        return view('livewire.nkd.client.create-client');
    }
}
