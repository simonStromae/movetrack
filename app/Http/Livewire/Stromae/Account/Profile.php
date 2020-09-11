<?php

namespace App\Http\Livewire\Stromae\Account;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public $name, $email, $tel, $birthday, $mdp, $avatar;

    public function mount(){
        $client = user()->client;

        $this->name = user()->name;
        $this->email = $client->email;
        $this->tel = $client->phone_number;
        $this->birthday = $client->birthday;
    }

    public function save_avatar(){
        $this->validate([
            'avatar' => 'image|mimes:jpg,jpeg,png'
        ]);

        $image = $this->avatar;
        $currentDate = Carbon::now()->toDateString();
        $imagename =  'avatar-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
        $image->storeAs('public/images/avatars', $imagename);

        user()->avatar = $imagename;
        user()->save();

        notify()->success('Avatar mis a jour');

        return redirect()->route('my-account');
    }

    public function save_personal(){
        $this->validate([
            'name' => 'required|string',
            'tel' => 'required|string',
            'birthday' => 'required|date'
        ]);

        user()->name = $this->name;
        user()->save();

        $client = user()->client;
        $client->phone_number = $this->tel;
        $client->birthday = $this->birthday;
        $client->save();

        notify()->success('Vos informations personnelles ont bien été mise a jour');

        return redirect()->route('my-account');
    }

    public function save_email(){
        $this->validate([
            'email' => 'required|email'
        ]);

        user()->email = $this->email;
        user()->save();

        $client = user()->client;
        $client->email = $this->email;
        $client->save();

        notify()->success('Vos informations personnelles ont bien été mise a jour');

        return redirect()->route('my-account');
    }

    public function save_password(){
        $this->validate([
            'mdp' => 'required|string|min:8'
        ]);

        user()->password = Hash::make($this->mdp);
        user()->save();

        notify()->success('Votre mot de passe a bien été réinitialisé');

        return redirect()->route('my-account');
    }

    public function render()
    {
        return view('livewire.stromae.account.profile');
    }
}
