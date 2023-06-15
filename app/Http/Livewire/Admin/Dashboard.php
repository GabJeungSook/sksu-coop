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
        'terminated_count' => Masterlist::where(function ($query) {
            $query->whereNotNull('bod_resolution')
                ->where('bod_resolution', '!=', '')
                ->where('bod_resolution', '!=', ' ');
        })->count(),
        'active_count' => Masterlist::where(function ($query) {
            $query->whereNull('bod_resolution')
                ->orWhere('bod_resolution', '')
                ->orWhere('bod_resolution', ' ');
        })->count(),
        ]);
    }
}
