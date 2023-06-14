<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Masterlist;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard', [
            'user_count' => Masterlist::count(),
        ]);
    }
}
