<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Group;
use App\Models\GroupAccess;

class GroupIndex extends Component
{
    public $group,$group_access;

    protected $listeners = [
        'groupStored' => 'handleStored',
        'groupUpdated' => 'handleUpdated'
    ];

    public function render()
    {
        $this->group = Group::latest()->get();
        $this->group_access = GroupAccess::all();
        return view('livewire.group-index');
    }

    public function getGroup($id)
    {
        $group = Group::findOrFail($id);
        $this->emit('getGroup', $group);
    }

    public function destroy($id){
        if ($id){
            $data = Group::findOrFail($id);
            $data->delete();
            session()->flash('message', 'group berhasil di hapus');
        }
    }

    public function handleStored($group)
    {
        # membuat group
        session()->flash('message', 'group '.$group['name'].' berhasil di buat');
    }

    public function handleUpdated($group)
    {
        # mengupdate group
        session()->flash('message', 'group'.$group['name'].' berhasil di update');
    }
}
