<?php

namespace App\Http\Livewire\Admin;

use App\Models\Masterlist;
use Livewire\Component;

class Report extends Component
{
    public $report_get;

    public function redirectToMasterlist()
    {
        return redirect()->route('masterlist');
    }

    public function render()
    {
        return view('livewire.admin.report', [
            'all_members' =>
            $this->report_get != 1 ? [] : Masterlist::get(),
            'active_members' =>
            $this->report_get != 2 ? [] : Masterlist::where(function ($query) {
                $query->whereNull('bod_resolution')
                    ->orWhere('bod_resolution', '')
                    ->orWhere('bod_resolution', ' ');
            })->get(),
            'terminated_members' =>
            $this->report_get != 3 ? [] : Masterlist::where(function ($query) {
                $query->whereNotNull('bod_resolution')
                    ->where('bod_resolution', '!=', '')
                    ->where('bod_resolution', '!=', ' ');
            })->get(),
        ]);
    }
}
