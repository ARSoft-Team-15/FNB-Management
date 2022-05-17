<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\GroupAccess;

class GroupUpdate extends Component
{
    public $name,$group_access_id,$group_access;

    protected $listeners = [
        'getGroup' => 'showGroup',
    ];

    public function render()
    {
        $this->group_access = GroupAccess::all();
        return view('livewire.group-update');
    }

    public function showGroup($group)
    {
        $this->name = $group['name'];
        $this->group_access_id = $group['group_access_id'];
    }

    public function update()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'group_access_id' => ['required',],
        ]);

        if($this->groupId){
            $group = group::findOrFail($this->groupId);
            $group->update([
                'name' => $this->name,
                'group_access_id' => $this->group_access_id,
            ]);

            $this->resetInput();

            $this->emit('groupUpdated',$group);
        }
    }

    private function resetInput()
    {
        $this->name = null;
        $this->group_access_id = null;
    }
}
