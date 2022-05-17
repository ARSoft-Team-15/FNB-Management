<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\Access;

class UserCreate extends Component
{
    public $group,$access,$name,$email,$group_id,$access_id,$password;
    public function render()
    {
        $this->group = Group::all();
        $this->access = Access::all();
        return view('livewire.user-create');
    }

    public function store(){
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'group_id' => $this->group_id,
            'access_id' => $this->access_id,
        ]);

        $this->resetInput();

        $this->emit('userStored', $user);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->email = null;
        $this->password = null;
        $this->group_id = null;
        $this->access_id = null;
    }
}
