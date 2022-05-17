<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Group;
use App\Models\Access;

class UserIndex extends Component
{
    public $user,$group,$access;

    protected $listeners = [
        'userStored' => 'handleStored',
        'userUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        $this->user = User::latest()->get();
        $this->group = Group::all();
        $this->access = Access::all();
        return view('livewire.user-index');
    }

    public function getUser($id)
    {
        $user = User::findOrFail($id);
        $this->emit('getUser', $user);
    }

    public function destroy($id){
        if ($id){
            $data = User::findOrFail($id);
            $data->delete();
            session()->flash('message', 'User berhasil di hapus');
        }
    }

    public function handleStored($user)
    {
        # membuat user
        session()->flash('message', 'User '.$user['name'].' berhasil di buat');
    }

    public function handleUpdated($user)
    {
        # mengupdate user
        session()->flash('message', 'User'.$user['name'].' berhasil di update');
    }
}
