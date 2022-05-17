<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GroupAccess;

class GroupCreate extends Component
{
    public $name, $group_access, $group_access_id;
    public function render()
    {
        $this->group_access = GroupAccess::all();
        return view('livewire.group-create');
    }

    public function store(){
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'group_access_id' => ['required'],
        ]);

        $group = Group::create([
            'name' => $this->name,
            'group_access_id' => $this->group_access_id,
        ]);

        $this->resetInput();

        dd($group);

        $this->emit('groupStored', $group);
    }

    private function resetInput()
    {
        $this->name = null;
        $this->group_access_id = null;
    }
}
