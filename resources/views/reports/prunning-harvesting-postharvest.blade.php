
<div>
    <style>
        @media print {
          @page {
            size: auto;
          }
        }
    </style>
  <div class="flex justify-center align-center space-x-1">
    {{-- <div class="flex">
      <img src="{{ asset('images/coop_logo_1.png') }}" class="h-16" alt="">
      <img src="{{ asset('images/coop_logo.png') }}" class="h-16" alt="">
    </div> --}}
    <div>
      {{-- <h1 class="text-xl font-bold text-gray-700"> DOLEFIL AGRARIAN REFORM BENEFICIARIES COOP.</h1> --}}
      {{-- <h1>DARBC Complex, Brgy. Cannery Site, Polomolok, South Cotabato</h1> --}}
    </div>
  </div>
  {{-- <h1 class="text-sm text-center mt-2">EJC Montilla, Tacurong City, Sultan Kudarat</h1> --}}
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Prunning, Harvesting, Postharvest Materials</h1>
  <div class="mt-5 overflow-x-auto">
    <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Pruning</h1>
    </div>
    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Pruning</th> <!-- Empty top-left cell -->
            <!-- Subheaders for Header 1 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Banisilan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Magpet</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Alamada</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Matalam</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Makilala</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Kidapawan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
            <!-- Subheaders for Header 2 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Lake Sebu</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tupi</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tampakan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">T'boli</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
                $sub_total_north_prunning_yes = $banisilan_prunning_yes + $magpet_prunning_yes + $alamada_prunning_yes + $matalam_prunning_yes + $makilala_prunning_yes + $makilala_prunning_yes + $kidapawan_prunning_yes;
                $sub_total_south_prunning_yes = $lake_sebu_prunning_yes + $tupi_prunning_yes + $tampakan_prunning_yes + $tboli_prunning_yes;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Yes</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_prunning_yes }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_prunning_yes }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_prunning_no = $banisilan_prunning_no + $magpet_prunning_no + $alamada_prunning_no + $matalam_prunning_no + $makilala_prunning_no + $makilala_prunning_no + $kidapawan_prunning_no;
                $sub_total_south_prunning_no = $lake_sebu_prunning_no + $tupi_prunning_no + $tampakan_prunning_no + $tboli_prunning_no;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">No</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_prunning_no }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_prunning_no }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-10 text-lg text-left font-bold text-gray-700">Harvesting</h1>
    </div>
      <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Harvesting</th> <!-- Empty top-left cell -->
            <!-- Subheaders for Header 1 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Banisilan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Magpet</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Alamada</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Matalam</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Makilala</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Kidapawan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
            <!-- Subheaders for Header 2 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Lake Sebu</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tupi</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tampakan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">T'boli</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
                $sub_total_north_harvesting_pick_ripe = $banisilan_harvesting_pick_ripe + $magpet_harvesting_pick_ripe + $alamada_harvesting_pick_ripe + $matalam_harvesting_pick_ripe + $makilala_harvesting_pick_ripe + $makilala_harvesting_pick_ripe + $kidapawan_harvesting_pick_ripe;
                $sub_total_south_harvesting_pick_ripe = $lake_sebu_harvesting_pick_ripe + $tupi_harvesting_pick_ripe + $tampakan_harvesting_pick_ripe + $tboli_harvesting_pick_ripe;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Pick Ripe</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_harvesting_pick_ripe }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_harvesting_pick_ripe }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_harvesting_strip_harvesting = $banisilan_harvesting_strip_harvesting + $magpet_harvesting_strip_harvesting + $alamada_harvesting_strip_harvesting + $matalam_harvesting_strip_harvesting + $makilala_harvesting_strip_harvesting + $makilala_harvesting_strip_harvesting + $kidapawan_harvesting_strip_harvesting;
                $sub_total_south_harvesting_strip_harvesting = $lake_sebu_harvesting_strip_harvesting + $tupi_harvesting_strip_harvesting + $tampakan_harvesting_strip_harvesting + $tboli_harvesting_strip_harvesting;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Strip Harvesting</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_harvesting_strip_harvesting }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_harvesting_strip_harvesting }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_harvesting_both = $banisilan_harvesting_both + $magpet_harvesting_both + $alamada_harvesting_both + $matalam_harvesting_both + $makilala_harvesting_both + $makilala_harvesting_both + $kidapawan_harvesting_both;
                $sub_total_south_harvesting_both = $lake_sebu_harvesting_both + $tupi_harvesting_both + $tampakan_harvesting_both + $tboli_harvesting_both;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Both</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_harvesting_both }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_harvesting_both }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-10 text-lg text-left font-bold text-gray-700">Postharvest Material</h1>
    </div>
      <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Postharvest Material</th> <!-- Empty top-left cell -->
            <!-- Subheaders for Header 1 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Banisilan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Magpet</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Alamada</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Matalam</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Makilala</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Kidapawan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
            <!-- Subheaders for Header 2 -->
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Lake Sebu</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tupi</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Tampakan</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">T'boli</th>
            <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">Sub-Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
                $sub_total_north_postharvest_material_sacks = $banisilan_postharvest_material_sacks + $magpet_postharvest_material_sacks + $alamada_postharvest_material_sacks + $matalam_postharvest_material_sacks + $makilala_postharvest_material_sacks + $makilala_postharvest_material_sacks + $kidapawan_postharvest_material_sacks;
                $sub_total_south_postharvest_material_sacks = $lake_sebu_postharvest_material_sacks + $tupi_postharvest_material_sacks + $tampakan_postharvest_material_sacks + $tboli_postharvest_material_sacks;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Sacks</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_material_sacks }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_material_sacks }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_postharvest_material_plastic_crate = $banisilan_postharvest_material_plastic_crate + $magpet_postharvest_material_plastic_crate + $alamada_postharvest_material_plastic_crate + $matalam_postharvest_material_plastic_crate + $makilala_postharvest_material_plastic_crate + $makilala_postharvest_material_plastic_crate + $kidapawan_postharvest_material_plastic_crate;
                $sub_total_south_postharvest_material_plastic_crate = $lake_sebu_postharvest_material_plastic_crate + $tupi_postharvest_material_plastic_crate + $tampakan_postharvest_material_plastic_crate + $tboli_postharvest_material_plastic_crate;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Plastic Crates</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_material_plastic_crate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_material_plastic_crate }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_postharvest_material_other = $banisilan_postharvest_material_other + $magpet_postharvest_material_other + $alamada_postharvest_material_other + $matalam_postharvest_material_other + $makilala_postharvest_material_other + $makilala_postharvest_material_other + $kidapawan_postharvest_material_other;
                $sub_total_south_postharvest_material_other = $lake_sebu_postharvest_material_other + $tupi_postharvest_material_other + $tampakan_postharvest_material_other + $tboli_postharvest_material_other;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Others</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_material_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_material_other }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

  </div>
</div>
