<?php

namespace App\Http\Livewire\Admin;

use App\Models\Farmer;
use Livewire\Component;
use App\Models\Planting;
use App\Models\Prunning;
use App\Models\Harvesting;
use App\Models\Masterlist;
use App\Models\FertilizerOrganic;
use App\Models\PesticideHerbicide;
use App\Models\PostharvesMaterial;
use App\Models\FertilizerInorganic;

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
            'respondents_place_of_birth' =>
            $this->report_get != 1 ? [] : Farmer::get(),
            'banisilan_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Banisilan');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'magpet_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Magpet');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'alamada_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Alamada');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'matalam_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Matalam');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'makilala_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Makilala');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'kidapawan_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Kidapawan');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'lake_sebu_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Lake Sebu');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'tupi_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tupi');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'tampakan_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tampakan');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),
            'tboli_own_seeds' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'T\'boli');
            })->where('sources_of_planting_material_own_from_seeds', '!=', null)->count(),

            //from nursery anywhere
            'banisilan_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Banisilan');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'magpet_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Magpet');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'alamada_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Alamada');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'matalam_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Matalam');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'makilala_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Makilala');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'kidapawan_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Kidapawan');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'lake_sebu_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Lake Sebu');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'tupi_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tupi');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'tampakan_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tampakan');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),
            'tboli_from_nursery_anywhere' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'T\'boli');
            })->where('sources_of_planting_material_from_nursery_anywhere', '!=', null)->count(),

            //from accredited nursery
            'banisilan_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Banisilan');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'magpet_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Magpet');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'alamada_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Alamada');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'matalam_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Matalam');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'makilala_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Makilala');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'kidapawan_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Kidapawan');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'lake_sebu_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Lake Sebu');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'tupi_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tupi');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'tampakan_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'Tampakan');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),
            'tboli_accredited_nursery' =>
            $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                $query->where('municipality', 'T\'boli');
            })->where('sources_of_planting_material_from_accredited_nursery', '!=', null)->count(),

              //other
              'banisilan_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Banisilan');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'magpet_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Magpet');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'alamada_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Alamada');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'matalam_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Matalam');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'makilala_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Makilala');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'kidapawan_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Kidapawan');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'lake_sebu_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Lake Sebu');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'tupi_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Tupi');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'tampakan_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'Tampakan');
              })->where('other_sources_of_planting_material', '!=', null)->count(),
              'tboli_other' =>
              $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                  $query->where('municipality', 'T\'boli');
              })->where('other_sources_of_planting_material', '!=', null)->count(),

                 //manual planting
                 'banisilan_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Banisilan');
                 })->where('planting',  0)->count(),
                 'magpet_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Magpet');
                 })->where('planting',  0)->count(),
                 'alamada_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Alamada');
                 })->where('planting',  0)->count(),
                 'matalam_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Matalam');
                 })->where('planting',  0)->count(),
                 'makilala_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                 })->where('planting',  0)->count(),
                 'kidapawan_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Kidapawan');
                 })->where('planting',  0)->count(),
                 'lake_sebu_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Lake Sebu');
                 })->where('planting',  0)->count(),
                 'tupi_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Tupi');
                 })->where('planting',  0)->count(),
                 'tampakan_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Tampakan');
                 })->where('planting',  0)->count(),
                 'tboli_manual' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'T\'boli');
                 })->where('planting',  0)->count(),

                //other planting
                'banisilan_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('other_planting', '!=',  null)->count(),
                'magpet_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('other_planting', '!=',  null)->count(),
                'alamada_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('other_planting', '!=',  null)->count(),
                'matalam_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('other_planting', '!=',  null)->count(),
                'makilala_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                })->where('other_planting', '!=',  null)->count(),
                'kidapawan_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('other_planting', '!=',  null)->count(),
                'lake_sebu_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('other_planting', '!=',  null)->count(),
                'tupi_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('other_planting', '!=',  null)->count(),
                'tampakan_other_planting' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('other_planting', '!=',  null)->count(),
                'tboli_other_planting' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('other_planting', '!=',  null)->count(),

                //2x2
                'banisilan_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '2x2')->count(),
                'magpet_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '2x2')->count(),
                'alamada_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '2x2')->count(),
                'matalam_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '2x2')->count(),
                'makilala_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '2x2')->count(),
                'kidapawan_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '2x2')->count(),
                'lake_sebu_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '2x2')->count(),
                'tupi_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '2x2')->count(),
                'tampakan_2x2' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '2x2')->count(),
                'tboli_2x2' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '2x2')->count(),

                //2x4
                'banisilan_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '2x4')->count(),
                'magpet_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '2x4')->count(),
                'alamada_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '2x4')->count(),
                'matalam_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '2x4')->count(),
                'makilala_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '2x4')->count(),
                'kidapawan_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '2x4')->count(),
                'lake_sebu_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '2x4')->count(),
                'tupi_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '2x4')->count(),
                'tampakan_2x4' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '2x4')->count(),
                'tboli_2x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '2x4')->count(),

                //2.5x3
                'banisilan_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '2.5x3')->count(),
                'magpet_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '2.5x3')->count(),
                'alamada_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '2.5x3')->count(),
                'matalam_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '2.5x3')->count(),
                'makilala_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '2.5x3')->count(),
                'kidapawan_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '2.5x3')->count(),
                'lake_sebu_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '2.5x3')->count(),
                'tupi_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '2.5x3')->count(),
                'tampakan_25x3' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '2.5x3')->count(),
                'tboli_25x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '2.5x3')->count(),

                //2.5x5
                'banisilan_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '2.5x5')->count(),
                'magpet_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '2.5x5')->count(),
                'alamada_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '2.5x5')->count(),
                'matalam_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '2.5x5')->count(),
                'makilala_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '2.5x5')->count(),
                'kidapawan_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '2.5x5')->count(),
                'lake_sebu_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '2.5x5')->count(),
                'tupi_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '2.5x5')->count(),
                'tampakan_25x5' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '2.5x5')->count(),
                'tboli_25x5' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '2.5x5')->count(),

                //2x3
                'banisilan_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '2x3')->count(),
                'magpet_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '2x3')->count(),
                'alamada_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '2x3')->count(),
                'matalam_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '2x3')->count(),
                'makilala_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '2x3')->count(),
                'kidapawan_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '2x3')->count(),
                'lake_sebu_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '2x3')->count(),
                'tupi_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '2x3')->count(),
                'tampakan_2x3' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '2x3')->count(),
                'tboli_2x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '2x3')->count(),

                //3x3
                'banisilan_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '3x3')->count(),
                'magpet_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '3x3')->count(),
                'alamada_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '3x3')->count(),
                'matalam_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '3x3')->count(),
                'makilala_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '3x3')->count(),
                'kidapawan_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '3x3')->count(),
                'lake_sebu_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '3x3')->count(),
                'tupi_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '3x3')->count(),
                'tampakan_3x3' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '3x3')->count(),
                'tboli_3x3' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '3x3')->count(),

                //3x4
                'banisilan_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '3x4')->count(),
                'magpet_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '3x4')->count(),
                'alamada_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '3x4')->count(),
                'matalam_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '3x4')->count(),
                'makilala_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '3x4')->count(),
                'kidapawan_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '3x4')->count(),
                'lake_sebu_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '3x4')->count(),
                'tupi_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '3x4')->count(),
                'tampakan_3x4' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '3x4')->count(),
                'tboli_3x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '3x4')->count(),

                //4x4
                'banisilan_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '4x4')->count(),
                'magpet_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '4x4')->count(),
                'alamada_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '4x4')->count(),
                'matalam_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '4x4')->count(),
                'makilala_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '4x4')->count(),
                'kidapawan_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '4x4')->count(),
                'lake_sebu_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '4x4')->count(),
                'tupi_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '4x4')->count(),
                'tampakan_4x4' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '4x4')->count(),
                'tboli_4x4' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '4x4')->count(),

                //5x6
                'banisilan_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '5x6')->count(),
                'magpet_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '5x6')->count(),
                'alamada_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '5x6')->count(),
                'matalam_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '5x6')->count(),
                'makilala_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '5x6')->count(),
                'kidapawan_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '5x6')->count(),
                'lake_sebu_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '5x6')->count(),
                'tupi_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '5x6')->count(),
                'tampakan_5x6' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '5x6')->count(),
                'tboli_5x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '5x6')->count(),

                //6x6
                'banisilan_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '6x6')->count(),
                'magpet_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '6x6')->count(),
                'alamada_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '6x6')->count(),
                'matalam_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '6x6')->count(),
                'makilala_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '6x6')->count(),
                'kidapawan_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '6x6')->count(),
                'lake_sebu_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '6x6')->count(),
                'tupi_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '6x6')->count(),
                'tampakan_6x6' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '6x6')->count(),
                'tboli_6x6' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '6x6')->count(),

                //10x10
                'banisilan_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('distance',  '10x10')->count(),
                'magpet_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('distance',  '10x10')->count(),
                'alamada_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('distance',  '10x10')->count(),
                'matalam_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('distance',  '10x10')->count(),
                'makilala_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('distance',  '10x10')->count(),
                'kidapawan_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('distance',  '10x10')->count(),
                'lake_sebu_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('distance',  '10x10')->count(),
                'tupi_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('distance',  '10x10')->count(),
                'tampakan_10x10' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('distance',  '10x10')->count(),
                'tboli_10x10' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('distance',  '10x10')->count(),

                //Sources of water irrigation
                'banisilan_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Banisilan');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'magpet_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Magpet');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'alamada_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Alamada');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'matalam_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Matalam');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'makilala_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Makilala');
                    })->where('source_of_water_irrigation', '!=', null)->count(),
                'kidapawan_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Kidapawan');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'lake_sebu_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Lake Sebu');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'tupi_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tupi');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'tampakan_irrigation' =>
                        $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'Tampakan');
                })->where('source_of_water_irrigation', '!=', null)->count(),
                'tboli_irrigation' =>
                $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                    $query->where('municipality', 'T\'boli');
                })->where('source_of_water_irrigation', '!=', null)->count(),

                 //Sources of water rainfed
                 'banisilan_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Banisilan');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'magpet_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Magpet');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'alamada_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Alamada');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'matalam_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Matalam');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'makilala_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Makilala');
                     })->where('source_of_water_rainfed', '!=', null)->count(),
                 'kidapawan_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Kidapawan');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'lake_sebu_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Lake Sebu');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'tupi_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Tupi');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'tampakan_rainfed' =>
                         $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'Tampakan');
                 })->where('source_of_water_rainfed', '!=', null)->count(),
                 'tboli_rainfed' =>
                 $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                     $query->where('municipality', 'T\'boli');
                 })->where('source_of_water_rainfed', '!=', null)->count(),

                  //Other sources of water
                  'banisilan_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'magpet_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'alamada_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'matalam_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'makilala_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('other_source_of_water', '!=', null)->count(),
                  'kidapawan_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'lake_sebu_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'tupi_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'tampakan_other_sources' =>
                          $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('other_source_of_water', '!=', null)->count(),
                  'tboli_other_sources' =>
                  $this->report_get != 2 ? [] : Planting::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('other_source_of_water', '!=', null)->count(),

                    //Fertilizer Organic Name
                  'banisilan_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('name', 'Vermicast')->count(),
                  'magpet_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('name', 'Vermicast')->count(),
                  'alamada_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('name', 'Vermicast')->count(),
                  'matalam_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('name', 'Vermicast')->count(),
                  'makilala_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('name', 'Vermicast')->count(),
                  'kidapawan_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('name', 'Vermicast')->count(),
                  'lake_sebu_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('name', 'Vermicast')->count(),
                  'tupi_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('name', 'Vermicast')->count(),
                  'tampakan_fertilizer_organic_name' =>
                          $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('name', 'Vermicast')->count(),
                  'tboli_fertilizer_organic_name' =>
                  $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('name', 'Vermicast')->count(),

                    //Fertilizer Organic F
                    'banisilan_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Banisilan');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'magpet_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Magpet');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'alamada_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Alamada');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'matalam_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Matalam');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'makilala_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Makilala');
                        })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'kidapawan_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Kidapawan');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'lake_sebu_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Lake Sebu');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'tupi_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Tupi');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'tampakan_fertilizer_organic_f' =>
                            $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Tampakan');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),
                    'tboli_fertilizer_organic_f' =>
                    $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'T\'boli');
                    })->where('name', 'Vermicast')->sum('frequency_of_application_per_year'),

                     //Fertilizer Organic amount
                     'banisilan_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Banisilan');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'magpet_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Magpet');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'alamada_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Alamada');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'matalam_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Matalam');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'makilala_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Makilala');
                         })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'kidapawan_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Kidapawan');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'lake_sebu_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Lake Sebu');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'tupi_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Tupi');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'tampakan_fertilizer_organic_amount' =>
                             $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'Tampakan');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),
                     'tboli_fertilizer_organic_amount' =>
                     $this->report_get != 3 ? [] : FertilizerOrganic::whereHas('farmer', function($query) {
                         $query->where('municipality', 'T\'boli');
                     })->where('name', 'Vermicast')->sum('amount_per_bag'),

                  //Fertilizer Organic Name Urea
                  'banisilan_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('uria', '!=', null)->count(),
                  'magpet_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('uria', '!=', null)->count(),
                  'alamada_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('uria', '!=', null)->count(),
                  'matalam_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('uria', '!=', null)->count(),
                  'makilala_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('uria', '!=', null)->count(),
                  'kidapawan_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('uria', '!=', null)->count(),
                  'lake_sebu_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('uria', '!=', null)->count(),
                  'tupi_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('uria', '!=', null)->count(),
                  'tampakan_fertilizer_organic_urea' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('uria', '!=', null)->count(),
                  'tboli_fertilizer_organic_urea' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('uria', '!=', null)->count(),

                    //Fertilizer Organic F
                  'banisilan_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'magpet_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'alamada_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'matalam_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'makilala_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'kidapawan_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'lake_sebu_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'tupi_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'tampakan_fertilizer_organic_urea_f' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),
                  'tboli_fertilizer_organic_urea_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('uria', '!=', null)->sum('frequency_of_application_per_year'),

                     //Fertilizer Organic amount
                     'banisilan_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'magpet_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'alamada_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'matalam_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'makilala_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'kidapawan_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'lake_sebu_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'tupi_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'tampakan_fertilizer_organic_urea_amount' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),
                  'tboli_fertilizer_organic_urea_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('uria', '!=', null)->sum('amount_per_bag'),

                   //Fertilizer Organic Name Complete
                   'banisilan_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Banisilan');
                   })->where('complete', '!=', null)->count(),
                   'magpet_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Magpet');
                   })->where('complete', '!=', null)->count(),
                   'alamada_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Alamada');
                   })->where('complete', '!=', null)->count(),
                   'matalam_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Matalam');
                   })->where('complete', '!=', null)->count(),
                   'makilala_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Makilala');
                       })->where('complete', '!=', null)->count(),
                   'kidapawan_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Kidapawan');
                   })->where('complete', '!=', null)->count(),
                   'lake_sebu_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Lake Sebu');
                   })->where('complete', '!=', null)->count(),
                   'tupi_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tupi');
                   })->where('complete', '!=', null)->count(),
                   'tampakan_fertilizer_organic_complete' =>
                           $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tampakan');
                   })->where('complete', '!=', null)->count(),
                   'tboli_fertilizer_organic_complete' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'T\'boli');
                   })->where('complete', '!=', null)->count(),

                     //Fertilizer Organic complete F
                   'banisilan_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Banisilan');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'magpet_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Magpet');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'alamada_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Alamada');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'matalam_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Matalam');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'makilala_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Makilala');
                       })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'kidapawan_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Kidapawan');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'lake_sebu_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Lake Sebu');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'tupi_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tupi');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'tampakan_fertilizer_organic_complete_f' =>
                           $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tampakan');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),
                   'tboli_fertilizer_organic_complete_f' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'T\'boli');
                   })->where('complete', '!=', null)->sum('frequency_of_application_per_year_2'),

                      //Fertilizer Organic complete amount
                      'banisilan_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Banisilan');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'magpet_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Magpet');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'alamada_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Alamada');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'matalam_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Matalam');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'makilala_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                        $query->where('municipality', 'Makilala');
                       })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'kidapawan_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Kidapawan');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'lake_sebu_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Lake Sebu');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'tupi_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tupi');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'tampakan_fertilizer_organic_complete_amount' =>
                           $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Tampakan');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),
                   'tboli_fertilizer_organic_complete_amount' =>
                   $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'T\'boli');
                   })->where('complete', '!=', null)->sum('amount_per_bags_2'),

                    //Fertilizer Organic Name Potassium
                  'banisilan_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('pottasium', '!=', null)->count(),
                  'magpet_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('pottasium', '!=', null)->count(),
                  'alamada_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('pottasium', '!=', null)->count(),
                  'matalam_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('pottasium', '!=', null)->count(),
                  'makilala_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('pottasium', '!=', null)->count(),
                  'kidapawan_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('pottasium', '!=', null)->count(),
                  'lake_sebu_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('pottasium', '!=', null)->count(),
                  'tupi_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('pottasium', '!=', null)->count(),
                  'tampakan_fertilizer_organic_potassium' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('pottasium', '!=', null)->count(),
                  'tboli_fertilizer_organic_potassium' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('pottasium', '!=', null)->count(),

                    //Fertilizer Organic F
                  'banisilan_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'magpet_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'alamada_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'matalam_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'makilala_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'kidapawan_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'lake_sebu_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'tupi_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'tampakan_fertilizer_organic_potassium_f' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),
                  'tboli_fertilizer_organic_potassium_f' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('pottasium', '!=', null)->sum('frequency_of_application_per_year_3'),

                     //Fertilizer Organic amount
                     'banisilan_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Banisilan');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'magpet_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Magpet');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'alamada_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Alamada');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'matalam_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Matalam');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'makilala_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                       $query->where('municipality', 'Makilala');
                      })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'kidapawan_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Kidapawan');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'lake_sebu_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Lake Sebu');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'tupi_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tupi');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'tampakan_fertilizer_organic_potassium_amount' =>
                          $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'Tampakan');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),
                  'tboli_fertilizer_organic_potassium_amount' =>
                  $this->report_get != 3 ? [] : FertilizerInorganic::whereHas('farmer', function($query) {
                      $query->where('municipality', 'T\'boli');
                  })->where('pottasium', '!=', null)->sum('amount_per_bag_3'),

                      //Pesticide Herbicide
                      'banisilan_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('name', 'Weeding')->count(),
                      'magpet_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('name', 'Weeding')->count(),
                      'alamada_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('name', 'Weeding')->count(),
                      'matalam_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('name', 'Weeding')->count(),
                      'makilala_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('name', 'Weeding')->count(),
                      'kidapawan_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('name', 'Weeding')->count(),
                      'lake_sebu_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('name', 'Weeding')->count(),
                      'tupi_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('name', 'Weeding')->count(),
                      'tampakan_pesticide_herbicide' =>
                              $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('name', 'Weeding')->count(),
                      'tboli_pesticide_herbicide' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('name', 'Weeding')->count(),

                       //Pesticide Herbicide F
                       'banisilan_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Banisilan');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'magpet_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Magpet');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'alamada_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Alamada');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'matalam_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Matalam');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'makilala_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Makilala');
                           })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'kidapawan_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Kidapawan');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'lake_sebu_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Lake Sebu');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'tupi_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tupi');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'tampakan_pesticide_herbicide_f' =>
                               $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tampakan');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),
                       'tboli_pesticide_herbicide_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'T\'boli');
                       })->where('name', 'Weeding')->sum('frequency_of_application_per_year'),

                        //Pesticide Herbicide Amount
                        'banisilan_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Banisilan');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'magpet_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Magpet');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'alamada_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Alamada');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'matalam_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Matalam');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'makilala_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Makilala');
                            })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'kidapawan_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Kidapawan');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'lake_sebu_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Lake Sebu');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'tupi_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tupi');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'tampakan_pesticide_herbicide_amount' =>
                                $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tampakan');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),
                        'tboli_pesticide_herbicide_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'T\'boli');
                        })->where('name', 'Weeding')->sum('amount_per_bottle'),

                      //Pesticide Glyphosate
                      'banisilan_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('name', 'Glyphosate')->count(),
                      'magpet_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('name', 'Glyphosate')->count(),
                      'alamada_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('name', 'Glyphosate')->count(),
                      'matalam_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('name', 'Glyphosate')->count(),
                      'makilala_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('name', 'Glyphosate')->count(),
                      'kidapawan_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('name', 'Glyphosate')->count(),
                      'lake_sebu_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('name', 'Glyphosate')->count(),
                      'tupi_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('name', 'Glyphosate')->count(),
                      'tampakan_pesticide_glysophate' =>
                              $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('name', 'Glyphosate')->count(),
                      'tboli_pesticide_glysophate' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('name', 'Glyphosate')->count(),

                       //Pesticide Glyphosate F
                       'banisilan_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Banisilan');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'magpet_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Magpet');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'alamada_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Alamada');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'matalam_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Matalam');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'makilala_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Makilala');
                           })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'kidapawan_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Kidapawan');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'lake_sebu_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Lake Sebu');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'tupi_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tupi');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'tampakan_pesticide_glysophate_f' =>
                               $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tampakan');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),
                       'tboli_pesticide_glysophate_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'T\'boli');
                       })->where('name', 'Glyphosate')->sum('frequency_of_application_per_year'),

                        //Pesticide Glyphosate Amount
                        'banisilan_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Banisilan');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'magpet_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Magpet');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'alamada_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Alamada');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'matalam_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Matalam');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'makilala_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Makilala');
                            })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'kidapawan_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Kidapawan');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'lake_sebu_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Lake Sebu');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'tupi_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tupi');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'tampakan_pesticide_glysophate_amount' =>
                                $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tampakan');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),
                        'tboli_pesticide_glysophate_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'T\'boli');
                        })->where('name', 'Glyphosate')->sum('amount_per_bottle'),

                         //Pesticide Cypermethrine
                      'banisilan_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('name', 'Cypermethrine')->count(),
                      'magpet_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('name', 'Cypermethrine')->count(),
                      'alamada_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('name', 'Cypermethrine')->count(),
                      'matalam_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('name', 'Cypermethrine')->count(),
                      'makilala_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('name', 'Cypermethrine')->count(),
                      'kidapawan_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('name', 'Cypermethrine')->count(),
                      'lake_sebu_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('name', 'Cypermethrine')->count(),
                      'tupi_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('name', 'Cypermethrine')->count(),
                      'tampakan_pesticide_cyper' =>
                              $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('name', 'Cypermethrine')->count(),
                      'tboli_pesticide_cyper' =>
                      $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('name', 'Cypermethrine')->count(),

                       //Pesticide Glyphosate F
                       'banisilan_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Banisilan');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'magpet_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Magpet');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'alamada_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Alamada');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'matalam_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Matalam');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'makilala_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Makilala');
                           })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'kidapawan_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Kidapawan');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'lake_sebu_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Lake Sebu');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'tupi_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tupi');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'tampakan_pesticide_cyper_f' =>
                               $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Tampakan');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),
                       'tboli_pesticide_cyper_f' =>
                       $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                           $query->where('municipality', 'T\'boli');
                       })->where('name', 'Cypermethrine')->sum('frequency_of_application_per_year'),

                        //Pesticide Glyphosate Amount
                        'banisilan_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Banisilan');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'magpet_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Magpet');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'alamada_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Alamada');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'matalam_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Matalam');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'makilala_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Makilala');
                            })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'kidapawan_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Kidapawan');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'lake_sebu_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Lake Sebu');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'tupi_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tupi');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'tampakan_pesticide_cyper_amount' =>
                                $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'Tampakan');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),
                        'tboli_pesticide_cyper_amount' =>
                        $this->report_get != 4 ? [] : PesticideHerbicide::whereHas('farmer', function($query) {
                            $query->where('municipality', 'T\'boli');
                        })->where('name', 'Cypermethrine')->sum('amount_per_bottle'),

                        //Prunning Yes
                      'banisilan_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('yes', '!=', null)->count(),
                      'magpet_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('yes', '!=', null)->count(),
                      'alamada_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('yes', '!=', null)->count(),
                      'matalam_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('yes', '!=', null)->count(),
                      'makilala_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('yes', '!=', null)->count(),
                      'kidapawan_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('yes', '!=', null)->count(),
                      'lake_sebu_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('yes', '!=', null)->count(),
                      'tupi_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('yes', '!=', null)->count(),
                      'tampakan_prunning_yes' =>
                              $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('yes', '!=', null)->count(),
                      'tboli_prunning_yes' =>
                      $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('yes', '!=', null)->count(),

                         //Prunning No
                         'banisilan_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Banisilan');
                         })->where('no', '!=', null)->count(),
                         'magpet_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Magpet');
                         })->where('no', '!=', null)->count(),
                         'alamada_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Alamada');
                         })->where('no', '!=', null)->count(),
                         'matalam_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Matalam');
                         })->where('no', '!=', null)->count(),
                         'makilala_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                              $query->where('municipality', 'Makilala');
                             })->where('no', '!=', null)->count(),
                         'kidapawan_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Kidapawan');
                         })->where('no', '!=', null)->count(),
                         'lake_sebu_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Lake Sebu');
                         })->where('no', '!=', null)->count(),
                         'tupi_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tupi');
                         })->where('no', '!=', null)->count(),
                         'tampakan_prunning_no' =>
                                 $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tampakan');
                         })->where('no', '!=', null)->count(),
                         'tboli_prunning_no' =>
                         $this->report_get != 5 ? [] : Prunning::whereHas('farmer', function($query) {
                             $query->where('municipality', 'T\'boli');
                         })->where('no', '!=', null)->count(),

                         //Harvesting Pick Ripe
                         'banisilan_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Banisilan');
                         })->where('pick_ripe', '!=', null)->count(),
                         'magpet_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Magpet');
                         })->where('pick_ripe', '!=', null)->count(),
                         'alamada_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Alamada');
                         })->where('pick_ripe', '!=', null)->count(),
                         'matalam_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Matalam');
                         })->where('pick_ripe', '!=', null)->count(),
                         'makilala_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                              $query->where('municipality', 'Makilala');
                             })->where('pick_ripe', '!=', null)->count(),
                         'kidapawan_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Kidapawan');
                         })->where('pick_ripe', '!=', null)->count(),
                         'lake_sebu_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Lake Sebu');
                         })->where('pick_ripe', '!=', null)->count(),
                         'tupi_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tupi');
                         })->where('pick_ripe', '!=', null)->count(),
                         'tampakan_harvesting_pick_ripe' =>
                                 $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tampakan');
                         })->where('pick_ripe', '!=', null)->count(),
                         'tboli_harvesting_pick_ripe' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'T\'boli');
                         })->where('pick_ripe', '!=', null)->count(),

                         //Harvesting Strip Harvesting
                         'banisilan_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Banisilan');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'magpet_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Magpet');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'alamada_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Alamada');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'matalam_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Matalam');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'makilala_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                              $query->where('municipality', 'Makilala');
                             })->where('strip_harvesting', '!=', null)->count(),
                         'kidapawan_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Kidapawan');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'lake_sebu_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Lake Sebu');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'tupi_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tupi');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'tampakan_harvesting_strip_harvesting' =>
                                 $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tampakan');
                         })->where('strip_harvesting', '!=', null)->count(),
                         'tboli_harvesting_strip_harvesting' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'T\'boli');
                         })->where('strip_harvesting', '!=', null)->count(),

                             //Harvesting Both
                         'banisilan_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Banisilan');
                         })->where('both', '!=', null)->count(),
                         'magpet_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Magpet');
                         })->where('both', '!=', null)->count(),
                         'alamada_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Alamada');
                         })->where('both', '!=', null)->count(),
                         'matalam_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Matalam');
                         })->where('both', '!=', null)->count(),
                         'makilala_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                              $query->where('municipality', 'Makilala');
                             })->where('both', '!=', null)->count(),
                         'kidapawan_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Kidapawan');
                         })->where('both', '!=', null)->count(),
                         'lake_sebu_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Lake Sebu');
                         })->where('both', '!=', null)->count(),
                         'tupi_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tupi');
                         })->where('both', '!=', null)->count(),
                         'tampakan_harvesting_both' =>
                                 $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tampakan');
                         })->where('both', '!=', null)->count(),
                         'tboli_harvesting_both' =>
                         $this->report_get != 5 ? [] : Harvesting::whereHas('farmer', function($query) {
                             $query->where('municipality', 'T\'boli');
                         })->where('both', '!=', null)->count(),

                         //Postharvest Material Sacks
                         'banisilan_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Banisilan');
                         })->where('sacks', '!=', null)->count(),
                         'magpet_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Magpet');
                         })->where('sacks', '!=', null)->count(),
                         'alamada_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Alamada');
                         })->where('sacks', '!=', null)->count(),
                         'matalam_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Matalam');
                         })->where('sacks', '!=', null)->count(),
                         'makilala_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                              $query->where('municipality', 'Makilala');
                             })->where('sacks', '!=', null)->count(),
                         'kidapawan_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Kidapawan');
                         })->where('sacks', '!=', null)->count(),
                         'lake_sebu_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Lake Sebu');
                         })->where('sacks', '!=', null)->count(),
                         'tupi_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tupi');
                         })->where('sacks', '!=', null)->count(),
                         'tampakan_postharvest_material_sacks' =>
                                 $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'Tampakan');
                         })->where('sacks', '!=', null)->count(),
                         'tboli_postharvest_material_sacks' =>
                         $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                             $query->where('municipality', 'T\'boli');
                         })->where('sacks', '!=', null)->count(),

                      //Postharvest Material Plastic Crate
                      'banisilan_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('plastic_crate', '!=', null)->count(),
                      'magpet_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('plastic_crate', '!=', null)->count(),
                      'alamada_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('plastic_crate', '!=', null)->count(),
                      'matalam_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('plastic_crate', '!=', null)->count(),
                      'makilala_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('plastic_crate', '!=', null)->count(),
                      'kidapawan_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('plastic_crate', '!=', null)->count(),
                      'lake_sebu_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('plastic_crate', '!=', null)->count(),
                      'tupi_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('plastic_crate', '!=', null)->count(),
                      'tampakan_postharvest_material_plastic_crate' =>
                              $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('plastic_crate', '!=', null)->count(),
                      'tboli_postharvest_material_plastic_crate' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('plastic_crate', '!=', null)->count(),

                      //Postharvest Material Other
                      'banisilan_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Banisilan');
                      })->where('other', '!=', null)->count(),
                      'magpet_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Magpet');
                      })->where('other', '!=', null)->count(),
                      'alamada_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Alamada');
                      })->where('other', '!=', null)->count(),
                      'matalam_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Matalam');
                      })->where('other', '!=', null)->count(),
                      'makilala_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                           $query->where('municipality', 'Makilala');
                          })->where('other', '!=', null)->count(),
                      'kidapawan_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Kidapawan');
                      })->where('other', '!=', null)->count(),
                      'lake_sebu_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Lake Sebu');
                      })->where('other', '!=', null)->count(),
                      'tupi_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tupi');
                      })->where('other', '!=', null)->count(),
                      'tampakan_postharvest_material_other' =>
                              $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'Tampakan');
                      })->where('other', '!=', null)->count(),
                      'tboli_postharvest_material_other' =>
                      $this->report_get != 5 ? [] : PostharvesMaterial::whereHas('farmer', function($query) {
                          $query->where('municipality', 'T\'boli');
                      })->where('other', '!=', null)->count(),
        ]);
    }
}
