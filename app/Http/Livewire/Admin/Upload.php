<?php

namespace App\Http\Livewire\Admin;

use App\Models\Academe;
use App\Models\AccessAndUseOfFundAgriCoop;
use App\Models\AccessAndUseOfFundCommercialbank;
use App\Models\AccessAndUseOfFundDoa;
use App\Models\AccessAndUseOfFundInformalLender;
use App\Models\AccessAndUseOfFundLandbankDbp;
use App\Models\AccessAndUseOfFundLgu;
use App\Models\AccessAndUseOfFundLocalEarning;
use App\Models\AccessAndUseOfFundLocalEarning2;
use App\Models\AccessAndUseOfFundNgo;
use App\Models\AccessAndUseOfFundOfwFamily;
use App\Models\AccessAndUseOfFundOfwFriends;
use App\Models\AccessAndUseOfFundPaluwagan;
use App\Models\AccessAndUseOfFundPawnShop;
use App\Models\AccessAndUseOfFundRuralbankDbp;
use App\Models\AccessAndUseOfFundTradersBuyers;
use App\Models\AccessAndUseOfFundTradersBuyers2;
use App\Models\AreaPlantedWithOtherCrop;
use App\Models\AtTable;
use App\Models\AttendTraining;
use App\Models\AttendTrainingParticipation;
use App\Models\CafeAndShop;
use App\Models\ConsumersCoffeePreference;
use App\Models\DirectSelling;
use App\Models\Disease;
use App\Models\DiseasesParticipation;
use App\Models\Drying;
use App\Models\DryingParticipation;
use App\Models\Farmer;
use App\Models\FarmerDetail;
use App\Models\FarmToMarket;
use App\Models\FarmTopography;
use App\Models\FarmToRoadAccessOrHouse;
use App\Models\FertilizerInorganic;
use App\Models\FertilizerOrganic;
use App\Models\FertilizerParticipation;
use App\Models\GrowerAssociation;
use App\Models\Harvesting;
use App\Models\HarvestingParticipation;
use App\Models\HerbicideParticipation;
use App\Models\HoldMoneyParticipation;
use App\Models\InsecticideParticipation;
use App\Models\LevelOfTechnology;
use App\Models\LoanSourcesOfCoffee;
use Livewire\Component;
use Livewire\WithFileUploads;
use League\Csv\Reader;
use Illuminate\Support\Facades\Storage;
use App\Models\Masterlist;
use App\Models\NationalRegional;
use App\Models\NestlePhilippines;
use App\Models\OtherCommodityAnimal;
use App\Models\OtherCommodityFish;
use App\Models\OtherOutletMarket;
use App\Models\OtherParticipation;
use App\Models\OtherProcessing;
use App\Models\OtherProjectsGivenByOtherAgency;
use App\Models\Participation;
use App\Models\PesticideHerbicide;
use App\Models\PesticideInsecticide;
use App\Models\Planting;
use App\Models\PostharvesMaterial;
use App\Models\PostHarvestParticipation;
use App\Models\ProblemsEncounteredInTheChainOfCoffee;
use App\Models\ProgramProject;
use App\Models\ProjectIntervention;
use App\Models\ProvinceMunicipality;
use App\Models\Prunning;
use App\Models\PrunningParticipation;
use App\Models\Restaurant;
use App\Models\SellingOfHarvestParticipation;
use App\Models\SourcesOfWaterParticipation;
use App\Models\TimeDateOfPlantingParticipation;
use App\Models\Trader;
use App\Models\UseOfPlantingParticipation;
use WireUi\Traits\Actions;
use Carbon\Carbon;
use DB;

use function Ramsey\Uuid\v1;

class Upload extends Component
{
    use WithFileUploads;
    use Actions;

    public $masterlist;

    public function uploadGoatBinData()
    {
        $csvContents = Storage::get($this->masterlist->getClientOriginalName());
        $csvReader = Reader::createFromString($csvContents);
        $csvRecords = $csvReader->getRecords();

        foreach ($csvRecords as $csvRecord) {
            $data_farmer = [
                'name' => $csvRecord[1],
                'province' => $csvRecord[2],
                'municipality' => $csvRecord[3],
                'residential_address' => $csvRecord[4],
                'birthplace' => $csvRecord[5],
                'birthplace_code' => $csvRecord[6],
                'age' => $csvRecord[7],
                'gender' => $csvRecord[8],
                'civil_status' => $csvRecord[9],
                'ethno_linguistic_ilonggo' => $csvRecord[10],
                'ethno_linguistic_cebuano' => $csvRecord[11],
                'ethno_linguistic_tausog' => $csvRecord[12],
                'ethno_linguistic_tboli' => $csvRecord[13],
                'ethno_linguistic_tagalog' => $csvRecord[14],
                'ethno_linguistic_ilocano' => $csvRecord[15],
                'ethno_linguistic_maguindanaon' => $csvRecord[16],
                'ethno_linguistic_blaan' => $csvRecord[17],
                'ethno_linguistic_tenduray' => $csvRecord[18],
                'ethno_linguistic_other' => $csvRecord[19],
                'educational_attainment' => $csvRecord[20],
                'other_educational_attainment' => $csvRecord[21],
                'number_of_household_members' => $csvRecord[22],
                'membership_in_organization' => $csvRecord[23],
                'organization_name' => $csvRecord[24],
            ];

            $data_planting = [
                'farmer_id' => $csvRecord[0],
                'sources_of_planting_material_own_from_seeds' => $csvRecord[25],
                'sources_of_planting_material_from_nursery_anywhere' => $csvRecord[26],
                'sources_of_planting_material_from_accredited_nursery' => $csvRecord[27],
                'other_sources_of_planting_material' => $csvRecord[28],
                'planting' => $csvRecord[29],
                'other_planting' => $csvRecord[30],
                'distance' => $csvRecord[31],
                'source_of_water_irrigation' => $csvRecord[32],
                'source_of_water_rainfed' => $csvRecord[33],
                'other_source_of_water' => $csvRecord[34],
            ];

            $fertilizer_organic = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[35],
                'number_of_bags' => $csvRecord[36],
                'frequency_of_application_per_year' => $csvRecord[37],
                'amount_per_bag' => $csvRecord[38],
                'other' => $csvRecord[39],
                'number_of_bags_2' => $csvRecord[40],
                'frequency_of_application_per_year_2' => $csvRecord[41],
                'amount_per_gram' => $csvRecord[42],
                'other_2' => $csvRecord[43],
                'number_of_bags_3' => $csvRecord[44],
                'frequency_of_application_per_year_3' => $csvRecord[45],
                'amount_per_gram_2' => $csvRecord[46],
            ];

            $fertilizer_inorganic = [
                'farmer_id' => $csvRecord[0],
                'uria' => $csvRecord[47],
                'number_of_bags' => $csvRecord[48],
                'frequency_of_application_per_year' => $csvRecord[49],
                'amount_per_bag' => $csvRecord[50],
                'complete' => $csvRecord[51],
                'number_of_bags_2' => $csvRecord[52],
                'frequency_of_application_per_year_2' => $csvRecord[53],
                'amount_per_bags_2' => $csvRecord[54],
                'pottasium' => $csvRecord[55],
                'number_of_bags_3' => $csvRecord[56],
                'frequency_of_application_per_year_3' => $csvRecord[57],
                'amount_per_bag_3' => $csvRecord[58],
                'other' => $csvRecord[59],
                'number_of_bags_4' => $csvRecord[60],
                'frequency_of_application_per_year_4' => $csvRecord[61],
                'amount_per_bag_4' => $csvRecord[62],
                'other_2' => $csvRecord[63],
                'number_of_bags_5' => $csvRecord[64],
                'frequency_of_application_per_year_5' => $csvRecord[65],
                'amount_per_bag_5' => $csvRecord[66],
            ];

            $pesticide_herbicide = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[67],
                'number_of_bags_per_liter' => $csvRecord[68],
                'frequency_of_application_per_year' => $csvRecord[69],
                'amount_per_bottle' => $csvRecord[70],
                'name_2' => $csvRecord[71],
                'number_of_bags' => $csvRecord[72],
                'frequency_of_application_per_year_2' => $csvRecord[73],
                'amount_per_bottle_2' => $csvRecord[74],
            ];

            $pesticide_insecticide = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[75],
                'number_of_bags' => $csvRecord[76],
                'frequency_of_application_per_year' => $csvRecord[77],
                'amount_per_bottle' => $csvRecord[78],
                'name_2' => $csvRecord[79],
                'number_of_bags_2' => $csvRecord[80],
                'frequency_of_application_per_year_2' => $csvRecord[81],
                'amount_per_bottle_2' => $csvRecord[82],
            ];

            $disease = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[83],
                'number_of_bags' => $csvRecord[84],
                'frequency_of_application_per_year' => $csvRecord[85],
                'amount_per_bottle' => $csvRecord[86],
                'name_2' => $csvRecord[87],
                'number_of_bags_2' => $csvRecord[88],
                'frequency_of_application_per_year_2' => $csvRecord[89],
                'amount_per_bottle_2' => $csvRecord[90],
            ];

            $prunning = [
                'farmer_id' => $csvRecord[0],
                'yes' => $csvRecord[91],
                'no' => $csvRecord[92],
                'how_often' => $csvRecord[93],
            ];

            $harvesting = [
                'farmer_id' => $csvRecord[0],
                'pick_ripe' => $csvRecord[94],
                'strip_harvesting' => $csvRecord[95],
                'both' => $csvRecord[96],
                'other' => $csvRecord[97],
            ];

            $postharvest_material = [
                'farmer_id' => $csvRecord[0],
                'sacks' => $csvRecord[98],
                'plastic_crate' => $csvRecord[99],
                'other' => $csvRecord[100],
            ];

            $farm_to_access_or_house = [
                'farmer_id' => $csvRecord[0],
                'farm_animals' => $csvRecord[101],
                'farm_animals_with_vehicles' => $csvRecord[102],
                'other' => $csvRecord[103],
                'other_specify' => $csvRecord[104],
            ];

            $farm_to_market = [
                'farmer_id' => $csvRecord[0],
                'farm_animals' => $csvRecord[105],
                'farm_animals_with_vehicles' => $csvRecord[106],
                'other' => $csvRecord[107],
            ];

            $drying = [
                'farmer_id' => $csvRecord[0],
                'tarepaulin_or_trapal' => $csvRecord[108],
                'commercial_solar_drier' => $csvRecord[109],
                'all_weather_drier' => $csvRecord[110],
                'raise_bed' => $csvRecord[111],
                'other_specify' => $csvRecord[112],
            ];

            $other_processing = [
                'farmer_id' => $csvRecord[0],
                'yes_or_no' => $csvRecord[113],
                'specify_if_yes' => $csvRecord[114],
                'roasting' => $csvRecord[115],
                'grading' => $csvRecord[116],
                'cupping' => $csvRecord[117],
                'specification' => $csvRecord[118],
            ];

            $farm_topography = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[119],
                'land_tenure_status' => $csvRecord[120],
                'other_tenure_status' => $csvRecord[121],
                'number_of_years_in_coffee_farming' => $csvRecord[122],
                'area_planted_for_coffee' => $csvRecord[123],
                'number_of_planting_materials' => $csvRecord[124],
                'yield' => $csvRecord[125],
                'years_maturity_of_the_coffee' => $csvRecord[126],
                'variety_of_coffee' => $csvRecord[127],
                'area_of_expansion' => $csvRecord[128],
                'diverse_with_other_crop' => $csvRecord[129],
            ];

            $area_planted_with_other_crops = [
                'farmer_id' => $csvRecord[0],
                'rice' => $csvRecord[130],
                'corn' => $csvRecord[131],
                'vegetables' => $csvRecord[132],
                'fruits' => $csvRecord[133],
                'other' => $csvRecord[134],
                'total_land_area' => $csvRecord[135],
            ];

            $other_commodity_animals = [
                'farmer_id' => $csvRecord[0],
                'number_of_heads_cow' => $csvRecord[136],
                'number_of_heads_carabao' => $csvRecord[137],
                'number_of_heads_goat' => $csvRecord[138],
                'number_of_heads_pig' => $csvRecord[139],
                'number_of_heads_duck' => $csvRecord[140],
                'number_of_heads_chicken' => $csvRecord[141],
                'other' => $csvRecord[142],
                'number_of_heads_other' => $csvRecord[143],
            ];

            $other_commodity_fish = [
                'farmer_id' => $csvRecord[0],
                'pond_area_tilapia' => $csvRecord[144],
                'pond_area_hito' => $csvRecord[145],
                'carpa' => $csvRecord[146],
                'pond_area_carpa' => $csvRecord[147],
            ];

            $grower_association = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[148],
                'volume' => $csvRecord[149],
                'price' => $csvRecord[150],
            ];

            $trader = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[151],
                'volume' => $csvRecord[152],
                'price' => $csvRecord[153],
            ];

            $direct_selling = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[154],
                'volume' => $csvRecord[155],
                'price' => $csvRecord[156],
            ];

            $nestle_philippines = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[157],
                'volume' => $csvRecord[158],
                'price' => $csvRecord[159],
            ];

            $cafe_and_shop = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[160],
                'volume' => $csvRecord[161],
                'price' => $csvRecord[162],
            ];

            $restaurant = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[163],
                'volume' => $csvRecord[164],
                'price' => $csvRecord[165],
            ];

            $other_market_outlet = [
                'farmer_id' => $csvRecord[0],
                'location' => $csvRecord[166],
                'volume' => $csvRecord[167],
                'price' => $csvRecord[168],
            ];

            $national_regional = [
                'farmer_id' => $csvRecord[0],
                'name_of_project' => $csvRecord[169],
                'amount' => $csvRecord[170],
                'name_of_project_2' => $csvRecord[171],
                'amount_2' => $csvRecord[172],
                'name_of_project_3' => $csvRecord[173],
                'amount_3' => $csvRecord[174],
            ];

            $province_municipality = [
                'farmer_id' => $csvRecord[0],
                'name_of_project' => $csvRecord[175],
                'amount' => $csvRecord[176],
                'name_of_project_2' => $csvRecord[177],
                'amount_2' => $csvRecord[178],
            ];

            $academe = [
                'farmer_id' => $csvRecord[0],
                'name_of_project' => $csvRecord[179],
                'amount' => $csvRecord[180],
                'name_of_project_2' => $csvRecord[181],
                'amount_2' => $csvRecord[182],
            ];

            $other_projects_given_by_other_agency = [
                'farmer_id' => $csvRecord[0],
                'name_of_project' => $csvRecord[183],
                'amount' => $csvRecord[184],
                'name_of_project_2' => $csvRecord[185],
                'amount_2' => $csvRecord[186],
                'name_of_project_3' => $csvRecord[187],
                'amount_3' => $csvRecord[188],
            ];

            $level_of_technology = [
                'farmer_id' => $csvRecord[0],
                'using_of_planting_materials' => $csvRecord[189],
                'planting' => $csvRecord[190],
                'sources_of_water' => $csvRecord[191],
                'fertilizer' => $csvRecord[192],
                'pesticides' => $csvRecord[193],
                'pruning' => $csvRecord[194],
                'harvesting' => $csvRecord[195],
                'postharvest_handling' => $csvRecord[196],
                'drying' => $csvRecord[197],
                'others' => $csvRecord[198],
            ];

            $loan_sources_of_coffee = [
                'farmer_id' => $csvRecord[0],
                'yes_or_no' => $csvRecord[199],
            ];

            $access_and_use_of_fund_lgu = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[200],
                'number_of_years_for_payment' => $csvRecord[201],
                'interest_rate' => $csvRecord[202],
                'amount' => $csvRecord[203],
            ];

            $access_and_use_of_fund_doa = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[204],
                'number_of_years_for_payment' => $csvRecord[205],
                'interest_rate' => $csvRecord[206],
                'amount' => $csvRecord[207],
            ];

            $access_and_use_of_fund_local_earnings = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[208],
                'number_of_years_for_payment' => $csvRecord[209],
                'interest_rate' => $csvRecord[210],
                'amount' => $csvRecord[211],
            ];

            $access_and_use_of_fund_ofw_family = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[212],
                'number_of_years_for_payment' => $csvRecord[213],
                'interest_rate' => $csvRecord[214],
                'amount' => $csvRecord[215],
            ];

            $access_and_use_of_fund_local_earning_2 = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[216],
                'number_of_years_for_payment' => $csvRecord[217],
                'interest_rate' => $csvRecord[218],
                'amount' => $csvRecord[219],
            ];

            $access_and_use_of_fund_ofw_friends = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[220],
                'number_of_years_for_payment' => $csvRecord[221],
                'interest_rate' => $csvRecord[222],
                'amount' => $csvRecord[223],
            ];

            $paluwagan = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[224],
                'number_of_years_for_payment' => $csvRecord[225],
                'interest_rate' => $csvRecord[226],
                'amount' => $csvRecord[227],
            ];

            $traders_buyers = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[228],
                'number_of_years_for_payment' => $csvRecord[229],
                'interest_rate' => $csvRecord[230],
                'amount' => $csvRecord[231],
            ];

            $traders_buyers_2 = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[232],
                'number_of_years_for_payment' => $csvRecord[233],
                'interest_rate' => $csvRecord[234],
                'amount' => $csvRecord[235],
            ];

            $informal_lender = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[236],
                'number_of_years_for_payment' => $csvRecord[237],
                'interest_rate' => $csvRecord[238],
                'amount' => $csvRecord[239],
            ];

            $agri_coop = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[240],
                'number_of_years_for_payment' => $csvRecord[241],
                'interest_rate' => $csvRecord[242],
                'amount' => $csvRecord[243],
            ];

            $ngo = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[244],
                'number_of_years_for_payment' => $csvRecord[245],
                'interest_rate' => $csvRecord[246],
                'amount' => $csvRecord[247],
            ];

            $pawnshop = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[248],
                'number_of_years_for_payment' => $csvRecord[249],
                'interest_rate' => $csvRecord[250],
                'amount' => $csvRecord[251],
            ];

            $landbank_dbp = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[252],
                'number_of_years_for_payment' => $csvRecord[253],
                'interest_rate' => $csvRecord[254],
                'amount' => $csvRecord[255],
            ];

            $ruralbank_dbp = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[256],
                'number_of_years_for_payment' => $csvRecord[257],
                'interest_rate' => $csvRecord[258],
                'amount' => $csvRecord[259],
            ];

            $commercial_bank = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[260],
                'number_of_years_for_payment' => $csvRecord[261],
                'interest_rate' => $csvRecord[262],
                'amount' => $csvRecord[263],
            ];

            $problems_encountered = [
                'farmer_id' => $csvRecord[0],
                'production_1' => $csvRecord[264],
                'production_2' => $csvRecord[265],
                'production_3' => $csvRecord[266],
                'production_4' => $csvRecord[267],
                'production_5' => $csvRecord[268],
                'postharvest_1' => $csvRecord[269],
                'postharvest_2' => $csvRecord[270],
                'postharvest_3' => $csvRecord[271],
                'postharvest_4' => $csvRecord[272],
                'postharvest_5' => $csvRecord[273],
                'commercial_marketing_1' => $csvRecord[274],
                'commercial_marketing_2' => $csvRecord[275],
                'commercial_marketing_3' => $csvRecord[276],
                'commercial_marketing_4' => $csvRecord[277],
                'commercial_marketing_5' => $csvRecord[278],
                'postharvest_2_1' => $csvRecord[279],
                'postharvest_2_2' => $csvRecord[280],
                'postharvest_2_3' => $csvRecord[281],
                'postharvest_2_4' => $csvRecord[282],
                'postharvest_2_5' => $csvRecord[283],
                'commercial_2_marketing_1' => $csvRecord[284],
                'commercial_2_marketing_2' => $csvRecord[285],
                'commercial_2_marketing_3' => $csvRecord[286],
                'commercial_2_marketing_4' => $csvRecord[287],
                'commercial_2_marketing_5' => $csvRecord[288],
            ];


            $project_intervention = [
                'farmer_id' => $csvRecord[0],
                'production_1' => $csvRecord[289],
                'production_2' => $csvRecord[290],
                'production_3' => $csvRecord[291],
                'production_4' => $csvRecord[292],
                'production_5' => $csvRecord[293],
                'fundsources_national' => $csvRecord[294],
                'fundsources_regional' => $csvRecord[295],
                'fundsources_lgu' => $csvRecord[296],
                'fundsources_ngo' => $csvRecord[297],
                'fundsources_counterpart' => $csvRecord[298],
                'postharvest_1' => $csvRecord[299],
                'postharvest_2' => $csvRecord[300],
                'postharvest_3' => $csvRecord[301],
                'postharvest_4' => $csvRecord[302],
                'postharvest_5' => $csvRecord[303],
                'postharvest_fundsources_national' => $csvRecord[304],
                'postharvest_fundsources_regional' => $csvRecord[305],
                'postharvest_fundsources_lgu' => $csvRecord[306],
                'postharvest_fundsources_ngo' => $csvRecord[307],
                'postharvest_fundsources_counterpart' => $csvRecord[308],
                'commercial_marketing_1' => $csvRecord[309],
                'commercial_marketing_2' => $csvRecord[310],
                'commercial_marketing_3' => $csvRecord[311],
                'commercial_marketing_4' => $csvRecord[312],
                'commercial_marketing_5' => $csvRecord[313],
                'commercial_marketing_fundsources_national' => $csvRecord[314],
                'commercial_marketing_fundsources_regional' => $csvRecord[315],
                'commercial_marketing_fundsources_lgu' => $csvRecord[316],
                'commercial_marketing_fundsources_ngo' => $csvRecord[317],
                'commercial_marketing_fundsources_counterpart' => $csvRecord[318],
                'training_capability_1' => $csvRecord[319],
                'training_capability_2' => $csvRecord[320],
                'training_capability_3' => $csvRecord[321],
                'training_capability_4' => $csvRecord[322],
                'training_capability_5' => $csvRecord[323],
                'training_capability_fundsources_national' => $csvRecord[324],
                'training_capability_fundsources_regional' => $csvRecord[325],
                'training_capability_fundsources_lgu' => $csvRecord[326],
                'training_capability_fundsources_ngo' => $csvRecord[327],
                'training_capability_fundsources_counterpart' => $csvRecord[328],
            ];


            $at_table = [
                'farmer_id' => $csvRecord[0],
                'first' => $csvRecord[329],
                'second' => $csvRecord[330],
                'third' => $csvRecord[331],
            ];

            $farmer_details = [
                'farmer_id' => $csvRecord[0],
                'name' => $csvRecord[332],
                'organization_name' => $csvRecord[333],
                'years_of_establishment' => $csvRecord[334],
                'resource_available' => $csvRecord[335],
                'sponsoring_agent' => $csvRecord[336],
                'amount' => $csvRecord[337],
                'sponsoring_agent_2' => $csvRecord[338],
                'amount_2' => $csvRecord[339],
                'sponsoring_agent_3' => $csvRecord[340],
                'amount_3' => $csvRecord[341],
                'sponsoring_agent_4' => $csvRecord[342],
                'amount_4' => $csvRecord[343],
                'sponsoring_agent_5' => $csvRecord[344],
                'amount_5' => $csvRecord[345],
            ];


            $program_project = [
                'farmer_id' => $csvRecord[0],
                'available_resources_1' => $csvRecord[346],
                'available_resources_2' => $csvRecord[347],
                'available_resources_3' => $csvRecord[348],
                'available_resources_4' => $csvRecord[349],
                'available_resources_5' => $csvRecord[350],
            ];


            $participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[351],
                'daughter' => $csvRecord[352],
                'father' => $csvRecord[353],
                'mother' => $csvRecord[354],
            ];

            $use_of_planting_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[355],
                'daughter' => $csvRecord[356],
                'father' => $csvRecord[357],
                'mother' => $csvRecord[358],
            ];

            $time_date_of_planting_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[359],
                'daughter' => $csvRecord[360],
                'father' => $csvRecord[361],
                'mother' => $csvRecord[362],
            ];

            $sources_of_water_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[363],
                'daughter' => $csvRecord[364],
                'father' => $csvRecord[365],
                'mother' => $csvRecord[366],
            ];

            $fertilizer_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[367],
                'daughter' => $csvRecord[368],
                'father' => $csvRecord[369],
                'mother' => $csvRecord[370],
            ];

            $herbicide_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[371],
                'daughter' => $csvRecord[372],
                'father' => $csvRecord[373],
                'mother' => $csvRecord[374],
            ];

            $insecticide_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[375],
                'daughter' => $csvRecord[376],
                'father' => $csvRecord[377],
                'mother' => $csvRecord[378],
            ];

            $diseases_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[379],
                'daughter' => $csvRecord[380],
                'father' => $csvRecord[381],
                'mother' => $csvRecord[382],
            ];

            $prunning_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[383],
                'daughter' => $csvRecord[384],
                'father' => $csvRecord[385],
                'mother' => $csvRecord[386],
            ];

            $harvesting_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[387],
                'daughter' => $csvRecord[388],
                'father' => $csvRecord[389],
                'mother' => $csvRecord[390],
            ];

            $postharvest_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[391],
                'daughter' => $csvRecord[392],
                'father' => $csvRecord[393],
                'mother' => $csvRecord[394],
            ];

            $drying_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[395],
                'daughter' => $csvRecord[396],
                'father' => $csvRecord[397],
                'mother' => $csvRecord[398],
            ];

            $other_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[399],
                'daughter' => $csvRecord[400],
                'father' => $csvRecord[401],
                'mother' => $csvRecord[402],
            ];

            $selling_of_harvesting_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[403],
                'daughter' => $csvRecord[404],
                'father' => $csvRecord[405],
                'mother' => $csvRecord[406],
            ];

            $hold_money_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[407],
                'daughter' => $csvRecord[408],
                'father' => $csvRecord[409],
                'mother' => $csvRecord[410],
            ];

            $attend_training = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[411],
                'daughter' => $csvRecord[412],
                'father' => $csvRecord[413],
                'mother' => $csvRecord[414],
            ];

            $attend_training_participation = [
                'farmer_id' => $csvRecord[0],
                'son' => $csvRecord[415],
                'daughter' => $csvRecord[416],
                'father' => $csvRecord[417],
                'mother' => $csvRecord[418],
            ];


            $consumer_coffee_preferences = [
                'farmer_id' => $csvRecord[0],
                'newly_roasted' => $csvRecord[419],
                'readily_available' => $csvRecord[420],
                'other_type' => $csvRecord[421],
                'stick' => $csvRecord[422],
                'sachet' => $csvRecord[423],
                'tea_bag' => $csvRecord[424],
                'glass' => $csvRecord[425],
                'labelled' => $csvRecord[426],
                'grams_250' => $csvRecord[427],
                'grams_500' => $csvRecord[428],
                'kilo_1' => $csvRecord[429],
                'other_volume' => $csvRecord[430],
                'habit_pleasure' => $csvRecord[431],
                'social' => $csvRecord[432],
                'therapeutic' => $csvRecord[433],
                'other_purpose' => $csvRecord[434],
                'native' => $csvRecord[435],
                'nescafe_stick' => $csvRecord[436],
                'etc_1' => $csvRecord[437],
                'etc_2' => $csvRecord[438],
                'etc_3' => $csvRecord[439],
                'etc_4' => $csvRecord[440],
                'consumption_per_day' => $csvRecord[441],
            ];


            //make NULL
            foreach ($data_farmer as $key => $value) {
                if (empty(trim($value)) && $value !== '0') {
                    $data_farmer[$key] = null;
                }
            }

            foreach ($data_planting as $key => $value) {
                if (empty(trim($value)) && $value !== '0') {
                    $data_planting[$key] = null;
                }
            }

            foreach ($fertilizer_organic as $key => $value) {
                if (empty(trim($value)) && $value !== '0') {
                    $fertilizer_organic[$key] = null;
                }
            }

            foreach ($fertilizer_inorganic as $key => $value) {
                if (empty(trim($value)) && $value !== '0') {
                    $fertilizer_inorganic[$key] = null;
                }
            }

            foreach ($pesticide_herbicide as $key => $value) {
                if (empty(trim($value)) && $value !== '0') {
                    $pesticide_herbicide[$key] = null;
                }
            }

            foreach ($pesticide_insecticide as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $pesticide_insecticide[$key] = null;
                }
            }

            foreach ($disease as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $disease[$key] = null;
                }
            }

            foreach ($prunning as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $prunning[$key] = null;
                }
            }

            foreach ($harvesting as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $harvesting[$key] = null;
                }
            }

            foreach ($postharvest_material as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $postharvest_material[$key] = null;
                }
            }

            foreach ($farm_to_access_or_house as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $farm_to_access_or_house[$key] = null;
                }
            }

            foreach ($farm_to_market as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $farm_to_market[$key] = null;
                }
            }

            foreach ($drying as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $drying[$key] = null;
                }
            }

            foreach ($other_processing as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_processing[$key] = null;
                }
            }

            foreach ($farm_topography as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $farm_topography[$key] = null;
                }
            }

            foreach ($area_planted_with_other_crops as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $area_planted_with_other_crops[$key] = null;
                }
            }

            foreach ($other_commodity_animals as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_commodity_animals[$key] = null;
                }
            }

            foreach ($other_commodity_fish as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_commodity_fish[$key] = null;
                }
            }

            foreach ($grower_association as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $grower_association[$key] = null;
                }
            }

            foreach ($trader as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $trader[$key] = null;
                }
            }

            foreach ($direct_selling as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $direct_selling[$key] = null;
                }
            }

            foreach ($nestle_philippines as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $nestle_philippines[$key] = null;
                }
            }

            foreach ($cafe_and_shop as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $cafe_and_shop[$key] = null;
                }
            }

            foreach ($restaurant as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $restaurant[$key] = null;
                }
            }

            foreach ($other_market_outlet as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_market_outlet[$key] = null;
                }
            }

            foreach ($national_regional as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $national_regional[$key] = null;
                }
            }

            foreach ($province_municipality as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $province_municipality[$key] = null;
                }
            }

            foreach ($academe as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $academe[$key] = null;
                }
            }

            foreach ($other_projects_given_by_other_agency as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_projects_given_by_other_agency[$key] = null;
                }
            }

            foreach ($level_of_technology as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $level_of_technology[$key] = null;
                }
            }

            foreach ($loan_sources_of_coffee as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $loan_sources_of_coffee[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_lgu as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_lgu[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_doa as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_doa[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_local_earnings as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_local_earnings[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_ofw_family as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_ofw_family[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_local_earning_2 as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_local_earning_2[$key] = null;
                }
            }

            foreach ($access_and_use_of_fund_ofw_friends as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $access_and_use_of_fund_ofw_friends[$key] = null;
                }
            }

            foreach ($paluwagan as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $paluwagan[$key] = null;
                }
            }

            foreach ($traders_buyers as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $traders_buyers[$key] = null;
                }
            }

            foreach ($traders_buyers_2 as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $traders_buyers_2[$key] = null;
                }
            }

            foreach ($informal_lender as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $informal_lender[$key] = null;
                }
            }

            foreach ($agri_coop as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $agri_coop[$key] = null;
                }
            }

            foreach ($ngo as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $ngo[$key] = null;
                }
            }

            foreach ($pawnshop as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $pawnshop[$key] = null;
                }
            }

            foreach ($landbank_dbp as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $landbank_dbp[$key] = null;
                }
            }

            foreach ($ruralbank_dbp as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $ruralbank_dbp[$key] = null;
                }
            }

            foreach ($commercial_bank as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $commercial_bank[$key] = null;
                }
            }

            foreach ($problems_encountered as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $problems_encountered[$key] = null;
                }
            }

            foreach ($project_intervention as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $project_intervention[$key] = null;
                }
            }

            foreach ($at_table as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $at_table[$key] = null;
                }
            }

            foreach ($farmer_details as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $farmer_details[$key] = null;
                }
            }

            foreach ($program_project as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $program_project[$key] = null;
                }
            }

            foreach ($participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $participation[$key] = null;
                }
            }

            foreach ($use_of_planting_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $use_of_planting_participation[$key] = null;
                }
            }

            foreach ($time_date_of_planting_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $time_date_of_planting_participation[$key] = null;
                }
            }

            foreach ($sources_of_water_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $sources_of_water_participation[$key] = null;
                }
            }

            foreach ($fertilizer_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $fertilizer_participation[$key] = null;
                }
            }

            foreach ($herbicide_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $herbicide_participation[$key] = null;
                }
            }

            foreach ($insecticide_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $insecticide_participation[$key] = null;
                }
            }

            foreach ($diseases_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $diseases_participation[$key] = null;
                }
            }

            foreach ($prunning_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $prunning_participation[$key] = null;
                }
            }

            foreach ($harvesting_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $harvesting_participation[$key] = null;
                }
            }

            foreach ($postharvest_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $postharvest_participation[$key] = null;
                }
            }

            foreach ($drying_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $drying_participation[$key] = null;
                }
            }

            foreach ($other_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $other_participation[$key] = null;
                }
            }

            foreach ($selling_of_harvesting_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $selling_of_harvesting_participation[$key] = null;
                }
            }

            foreach ($hold_money_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $hold_money_participation[$key] = null;
                }
            }

            foreach ($attend_training as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $attend_training[$key] = null;
                }
            }

            foreach ($attend_training_participation as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $attend_training_participation[$key] = null;
                }
            }

            foreach ($consumer_coffee_preferences as $key => $value) {
                  if (empty(trim($value)) && $value !== '0') {
                    $consumer_coffee_preferences[$key] = null;
                }
            }

            //Insert to database
            Farmer::create($data_farmer);
            Planting::create($data_planting);
            FertilizerOrganic::create($fertilizer_organic);
            FertilizerInorganic::create($fertilizer_inorganic);
            PesticideHerbicide::create($pesticide_herbicide);
            PesticideInsecticide::create($pesticide_insecticide);
            Disease::create($disease);
            Prunning::create($prunning);
            Harvesting::create($harvesting);
            PostharvesMaterial::create($postharvest_material);
            FarmToRoadAccessOrHouse::create($farm_to_access_or_house);
            FarmToMarket::create($farm_to_market);
            Drying::create($drying);
            OtherProcessing::create($other_processing);
            FarmTopography::create($farm_topography);
            AreaPlantedWithOtherCrop::create($area_planted_with_other_crops);
            OtherCommodityAnimal::create($other_commodity_animals);
            OtherCommodityFish::create($other_commodity_fish);
            GrowerAssociation::create($grower_association);
            Trader::create($trader);
            DirectSelling::create($direct_selling);
            NestlePhilippines::create($nestle_philippines);
            CafeAndShop::create($cafe_and_shop);
            Restaurant::create($restaurant);
            OtherOutletMarket::create($other_market_outlet);
            NationalRegional::create($national_regional);
            ProvinceMunicipality::create($province_municipality);
            Academe::create($academe);
            OtherProjectsGivenByOtherAgency::create($other_projects_given_by_other_agency);
            LevelOfTechnology::create($level_of_technology);
            LoanSourcesOfCoffee::create($loan_sources_of_coffee);
            AccessAndUseOfFundLgu::create($access_and_use_of_fund_lgu);
            AccessAndUseOfFundDoa::create($access_and_use_of_fund_doa);
            AccessAndUseOfFundLocalEarning::create($access_and_use_of_fund_local_earnings);
            AccessAndUseOfFundOfwFamily::create($access_and_use_of_fund_ofw_family);
            AccessAndUseOfFundLocalEarning2::create($access_and_use_of_fund_local_earning_2);
            AccessAndUseOfFundOfwFriends::create($access_and_use_of_fund_ofw_friends);
            AccessAndUseOfFundPaluwagan::create($paluwagan);
            AccessAndUseOfFundTradersBuyers::create($traders_buyers);
            AccessAndUseOfFundTradersBuyers2::create($traders_buyers_2);
            AccessAndUseOfFundInformalLender::create($informal_lender);
            AccessAndUseOfFundAgriCoop::create($agri_coop);
            AccessAndUseOfFundNgo::create($ngo);
            AccessAndUseOfFundPawnShop::create($pawnshop);
            AccessAndUseOfFundLandbankDbp::create($landbank_dbp);
            AccessAndUseOfFundRuralbankDbp::create($ruralbank_dbp);
            AccessAndUseOfFundCommercialbank::create($commercial_bank);
            ProblemsEncounteredInTheChainOfCoffee::create($problems_encountered);
            ProjectIntervention::create($project_intervention);
            AtTable::create($at_table);
            FarmerDetail::create($farmer_details);
            ProgramProject::create($program_project);
            Participation::create($participation);
            UseOfPlantingParticipation::create($use_of_planting_participation);
            TimeDateOfPlantingParticipation::create($time_date_of_planting_participation);
            SourcesOfWaterParticipation::create($sources_of_water_participation);
            FertilizerParticipation::create($fertilizer_participation);
            HerbicideParticipation::create($herbicide_participation);
            InsecticideParticipation::create($insecticide_participation);
            DiseasesParticipation::create($diseases_participation);
            PrunningParticipation::create($prunning_participation);
            HarvestingParticipation::create($harvesting_participation);
            PostHarvestParticipation::create($postharvest_participation);
            DryingParticipation::create($drying_participation);
            OtherParticipation::create($other_participation);
            SellingOfHarvestParticipation::create($selling_of_harvesting_participation);
            HoldMoneyParticipation::create($hold_money_participation);
            AttendTraining::create($attend_training);
            AttendTrainingParticipation::create($attend_training_participation);
            ConsumersCoffeePreference::create($consumer_coffee_preferences);
        }

        $this->dialog()->success(
            $title = 'Success',
            $description = 'Data uploaded'
        );
    }

    public function uploadMasterlist(){

        $csvContents = Storage::get($this->masterlist->getClientOriginalName());
        $csvReader = Reader::createFromString($csvContents);
        $csvRecords = $csvReader->getRecords();

        foreach ($csvRecords as $csvRecord) {
            Masterlist::create([
               'name' => $csvRecord[1],
               'province' => $csvRecord[1],
               'municipality' => $csvRecord[2],
               'residential_address' => $csvRecord[3],
               'birthplace' => $csvRecord[4],
               'birthplace_code' => $csvRecord[5],
               'age' => Carbon::parse($csvRecord[6])->format('Y-m-d'),
               'gender' => (int)$csvRecord[7],
               'civil_status' => $csvRecord[8],
               'ethno_linguistic_ilonggo' => $csvRecord[9],
               'ethno_linguistic_cebuano' => $csvRecord[10],
               'ethno_linguistic_tausog' => $csvRecord[11],
               'ethno_linguistic_tboli' => $csvRecord[12],
               'religion' => $csvRecord[13],
               'income' => $csvRecord[14],
               'date_accepted' => Carbon::parse($csvRecord[15])->format('Y-m-d'),
               'bod_number' => (int)$csvRecord[16],
               'membership_type' => $csvRecord[17],
               'number_of_shares' => (int)$csvRecord[18],
               'amount_subscribed' => $csvRecord[19],
               'initial_paid_up' => $csvRecord[20],
               'bod_resolution' => $csvRecord[21],
               'date_created' => Carbon::parse($csvRecord[22])->format('Y-m-d'),
            ]);
        }

        $this->dialog()->success(
            $title = 'Success',
            $description = 'Data uploaded'
        );
    }
    public function render()
    {
        return view('livewire.admin.upload');
    }
}
