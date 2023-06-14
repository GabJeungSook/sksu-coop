<?php

namespace App\Http\Livewire\Admin\Forms;

use Livewire\Component;

class ViewMasterlistData extends Component
{
    public $record;
    public function render()
    {
        return view('livewire.admin.forms.view-masterlist-data');
    }
}
