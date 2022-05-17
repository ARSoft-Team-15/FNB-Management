<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\Access;

class UserUpdate extends Component
{
    public $name,$email,$group_id,$access_id,$userId,$password;

    protected $listeners = [
        'getUser' => 'showUser',
    ];

    public function render()
    {
        $this->group = Group::all();
        $this->access = Access::all();
        return view('livewire.user-update');
    }

    public function showUser($user)
    {
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->group_id = $user['group_id'];
        $this->access_id = $user['access_id'];
        $this->userId = $user['id'];
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if($this->userId){
            $user = User::findOrFail($this->userId);
            $user->update([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'group_id' => $this->group_id,
                'access_id' => $this->access_id,
            ]);

            $this->resetInput();

            $this->emit('userUpdated',$user);
        }
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
