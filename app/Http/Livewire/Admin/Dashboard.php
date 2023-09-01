<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Masterlist;
use PhpParser\Node\Stmt\Switch_;

class Dashboard extends Component
{
    public $report_types = [];
    public $report_names = [];
    public $report_type;
    public $report_name;

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

    public function updatedReportType()
    {
        switch($this->report_type) {
            case "1" :
                $this->report_names = [
                '1' => 'Place Of Birth',
                '2' => 'Age',
                '3' => 'Gender',
                '4' => 'Marital Status',
                '5' => 'Tribe',
                '6' => 'Educational Attainment',
                '7' => 'Number of Household Members',
                '8' => 'Membership in Organization',
            ];
            break;
            case "2" :
                $this->report_names = [
                '9' => 'Sources of Planting Materials',
                '10' => 'Planting',
                '11' => 'Planting Distance',
                '12' => 'Sources of Water',
            ];
            break;
            case "3" :
                $this->report_names = [
                '13' => 'Fertilizer Application',
            ];
            break;
            case "4" :
                $this->report_names = [
                '14' => 'Herbicide',
                '15' => 'Insecticide',
            ];
            break;
            case "5" :
                $this->report_names = [
                '16' => 'Pruning',
                '17' => 'Harvesting',
                '18' => 'Postharvest Material',
            ];
            break;
            case "6" :
                $this->report_names = [
                '19' => 'Postharvest Transportation',
            ];
            break;
            case "7" :
                $this->report_names = [
                '20' => '# of Years in Coffee Farming',
                '21' => 'Area Planted for Coffee',
                '22' => '# of Planting Materials',
                '23' => 'Years Maturity of Coffee',
                '24' => 'Area of Expansion',
            ];
            break;
            default:
            $this->report_names = null;
        }
    }

    public function mount()
    {
        $this->report_types = [
            '1' => 'Profile Of Respondents',
            '2' => 'Planting Materials',
            '3' => 'Fertilizers',
            '4' => 'Pesticides',
            '5' => 'Prunning, Harvesting, Postharvest Materials',
            '6' => 'Postharvest Transportation',
            '7' => 'Coffee Farming',
        ];
    }
}
