<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function academes()
    {
        return $this->hasMany(Academe::class);
    }

    public function access_and_use_of_fund_agri_coops()
    {
        return $this->hasMany(AccessAndUseOfFundAgriCoop::class);
    }

    public function access_and_use_of_fund_commercial_banks()
    {
        return $this->hasMany(AccessAndUseOfFundCommercialbank::class);
    }

    public function access_and_use_of_fund_doas()
    {
        return $this->hasMany(AccessAndUseOfFundDoa::class);
    }

    public function access_and_use_of_fund_informal_lenders()
    {
        return $this->hasMany(AccessAndUseOfFundInformalLender::class);
    }

    public function access_and_use_of_fund_landbank_dbps()
    {
        return $this->hasMany(AccessAndUseOfFundLandbankDbp::class);
    }

    public function access_and_use_of_fund_lgus()
    {
        return $this->hasMany(AccessAndUseOfFundLgu::class);
    }

    public function access_and_use_of_fund_local_earnings()
    {
        return $this->hasMany(AccessAndUseOfFundLocalEarning::class);
    }

    public function access_and_use_of_fund_local_earning2s()
    {
        return $this->hasMany(AccessAndUseOfFundLocalEarning2::class);
    }

    public function access_and_use_of_fund_ngos()
    {
        return $this->hasMany(AccessAndUseOfFundNgo::class);
    }

    public function access_and_use_of_fund_ofw_families()
    {
        return $this->hasMany(AccessAndUseOfFundOfwFamily::class);
    }

    public function access_and_use_of_fund_ofw_friends()
    {
        return $this->hasMany(AccessAndUseOfFundOfwFriends::class);
    }

    public function access_and_use_of_fund_paluwagans()
    {
        return $this->hasMany(AccessAndUseOfFundPaluwagan::class);
    }

    public function access_and_use_of_fund_pawn_shops()
    {
        return $this->hasMany(AccessAndUseOfFundPawnShop::class);
    }

    public function access_and_use_of_fund_rural_bank_dbps()
    {
        return $this->hasMany(AccessAndUseOfFundRuralbankDbp::class);
    }

    public function access_and_use_of_fund_trader_buyers()
    {
        return $this->hasMany(AccessAndUseOfFundTradersBuyers::class);
    }

    public function access_and_use_of_fund_trader_buyer2s()
    {
        return $this->hasMany(AccessAndUseOfFundTradersBuyers2::class);
    }

    public function area_planted_with_other_crops()
    {
        return $this->hasMany(AreaPlantedWithOtherCrop::class);
    }

    public function at_tables()
    {
        return $this->hasMany(AtTable::class);
    }

    public function attend_training_participations()
    {
        return $this->hasMany(AttendTraining::class);
    }

    public function access_moneys()
    {
        return $this->hasMany(AttendTrainingParticipation::class);
    }

    public function cafe_and_shops()
    {
        return $this->hasMany(CafeAndShop::class);
    }

    public function consumers_coffee_preferences()
    {
        return $this->hasMany(ConsumersCoffeePreference::class);
    }

    public function direct_sellings()
    {
        return $this->hasMany(DirectSelling::class);
    }

    public function diseases()
    {
        return $this->hasMany(Disease::class);
    }

    public function diseases_participations()
    {
        return $this->hasMany(DiseasesParticipation::class);
    }

    public function dryings()
    {
        return $this->hasMany(Drying::class);
    }

    public function drying_participations()
    {
        return $this->hasMany(DryingParticipation::class);
    }

    public function farmer_details()
    {
        return $this->hasMany(FarmerDetail::class);
    }

    public function farm_to_markets()
    {
        return $this->hasMany(FarmToMarket::class);
    }

    public function farm_topographies()
    {
        return $this->hasMany(FarmTopography::class);
    }

    public function farm_to_road_access()
    {
        return $this->hasMany(FarmToRoadAccessOrHouse::class);
    }

    public function fertilizer_inorganics()
    {
        return $this->hasMany(FertilizerInorganic::class);
    }

    public function fertilizer_organics()
    {
        return $this->hasMany(FertilizerOrganic::class);
    }

    public function fertilizer_participations()
    {
        return $this->hasMany(FertilizerParticipation::class);
    }

    public function grower_associations()
    {
        return $this->hasMany(GrowerAssociation::class);
    }

    public function harvestings()
    {
        return $this->hasMany(Harvesting::class);
    }

    public function harvesting_participations()
    {
        return $this->hasMany(HarvestingParticipation::class);
    }

    public function herbicide_participations()
    {
        return $this->hasMany(HerbicideParticipation::class);
    }

    public function hold_money_participations()
    {
        return $this->hasMany(HoldMoneyParticipation::class);
    }

    public function insecticide_participations()
    {
        return $this->hasMany(InsecticideParticipation::class);
    }

    public function level_of_technologies()
    {
        return $this->hasMany(LevelOfTechnology::class);
    }

    public function loan_sources_of_coffees()
    {
        return $this->hasMany(LoanSourcesOfCoffee::class);
    }

    public function national_regionals()
    {
        return $this->hasMany(NationalRegional::class);
    }

    public function nestle_philippines()
    {
        return $this->hasMany(NestlePhilippines::class);
    }

    public function other_commodity_animals()
    {
        return $this->hasMany(OtherCommodityAnimal::class);
    }

    public function other_commodity_fishes()
    {
        return $this->hasMany(OtherCommodityFish::class);
    }

    public function other_outlet_markets()
    {
        return $this->hasMany(OtherOutletMarket::class);
    }

    public function other_participations()
    {
        return $this->hasMany(OtherParticipation::class);
    }

    public function other_processings()
    {
        return $this->hasMany(OtherProcessing::class);
    }

    public function other_projects_given_by_other_agencies()
    {
        return $this->hasMany(OtherProjectsGivenByOtherAgency::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }

    public function pesticide_herbicides()
    {
        return $this->hasMany(PesticideHerbicide::class);
    }

    public function pesticide_insecticides()
    {
        return $this->hasMany(PesticideInsecticide::class);
    }

    public function plantings()
    {
        return $this->hasMany(Planting::class);
    }

    public function postharvest_materials()
    {
        return $this->hasMany(PostharvesMaterial::class);
    }

    public function postharvest_participations()
    {
        return $this->hasMany(PostHarvestParticipation::class);
    }

    public function problems_encountered_in_the_chain_of_coffees()
    {
        return $this->hasMany(ProblemsEncounteredInTheChainOfCoffee::class);
    }

    public function program_projects()
    {
        return $this->hasMany(ProgramProject::class);
    }

    public function project_interventions()
    {
        return $this->hasMany(ProjectIntervention::class);
    }

    public function province_municipalities()
    {
        return $this->hasMany(ProvinceMunicipality::class);
    }

    public function prunnings()
    {
        return $this->hasMany(Prunning::class);
    }

    public function prunning_participations()
    {
        return $this->hasMany(PrunningParticipation::class);
    }

    public function restaurants()
    {
        return $this->hasMany(Restaurant::class);
    }

    public function selling_of_harvest_participations()
    {
        return $this->hasMany(SellingOfHarvestParticipation::class);
    }

    public function sources_of_water_participations()
    {
        return $this->hasMany(SourcesOfWaterParticipation::class);
    }

    public function time_and_date_of_planting_participations()
    {
        return $this->hasMany(TimeDateOfPlantingParticipation::class);
    }

    public function traders()
    {
        return $this->hasMany(Trader::class);
    }

    public function use_of_planting_participations()
    {
        return $this->hasMany(UseOfPlantingParticipation::class);
    }
}
