
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
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Postharvest</h1>
  <div class="mt-5 overflow-x-auto">
    <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Postharvest Transportation</h1>
    </div>
    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Postharvest Transportation</th> <!-- Empty top-left cell -->
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

            <td class="border text-gray-600 text-sm px-3 break py-1">Farm to Road Access</td>

          </tr>
          <tr>
            @php
            $sub_total_north_postharvest_transpo_farm_to_road = $banisilan_postharvest_transpo_farm_to_road + $magpet_postharvest_transpo_farm_to_road + $alamada_postharvest_transpo_farm_to_road + $matalam_postharvest_transpo_farm_to_road + $makilala_postharvest_transpo_farm_to_road + $makilala_postharvest_transpo_farm_to_road + $kidapawan_postharvest_transpo_farm_to_road;
            $sub_total_south_postharvest_transpo_farm_to_road = $lake_sebu_postharvest_transpo_farm_to_road + $tupi_postharvest_transpo_farm_to_road + $tampakan_postharvest_transpo_farm_to_road + $tboli_postharvest_transpo_farm_to_road;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Farm Animals</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_road }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_road }}</td>
          </tr>
          <tr>
            @php
            $sub_total_north_postharvest_transpo_farm_to_road_vehicle = $banisilan_postharvest_transpo_farm_to_road_vehicle + $magpet_postharvest_transpo_farm_to_road_vehicle + $alamada_postharvest_transpo_farm_to_road_vehicle + $matalam_postharvest_transpo_farm_to_road_vehicle + $makilala_postharvest_transpo_farm_to_road_vehicle + $makilala_postharvest_transpo_farm_to_road_vehicle + $kidapawan_postharvest_transpo_farm_to_road_vehicle;
            $sub_total_south_postharvest_transpo_farm_to_road_vehicle = $lake_sebu_postharvest_transpo_farm_to_road_vehicle + $tupi_postharvest_transpo_farm_to_road_vehicle + $tampakan_postharvest_transpo_farm_to_road_vehicle + $tboli_postharvest_transpo_farm_to_road_vehicle;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Vehicle</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_road_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_road_vehicle }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_postharvest_transpo_farm_to_road_other = $banisilan_postharvest_transpo_farm_to_road_other + $magpet_postharvest_transpo_farm_to_road_other + $alamada_postharvest_transpo_farm_to_road_other + $matalam_postharvest_transpo_farm_to_road_other + $makilala_postharvest_transpo_farm_to_road_other + $makilala_postharvest_transpo_farm_to_road_other + $kidapawan_postharvest_transpo_farm_to_road_other;
                $sub_total_south_postharvest_transpo_farm_to_road_other = $lake_sebu_postharvest_transpo_farm_to_road_other + $tupi_postharvest_transpo_farm_to_road_other + $tampakan_postharvest_transpo_farm_to_road_other + $tboli_postharvest_transpo_farm_to_road_other;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Other : Human</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_road_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_road_other }}</td>
          </tr>
          <tr>
            <td><br></td>
          </tr>
          <tr>
            <td class="border text-gray-600 text-sm px-3 break py-1">Road Access to House / Market</td>
          </tr>
          <tr>
            @php
                $sub_total_north_postharvest_transpo_farm_to_market = $banisilan_postharvest_transpo_farm_to_market + $magpet_postharvest_transpo_farm_to_market + $alamada_postharvest_transpo_farm_to_market + $matalam_postharvest_transpo_farm_to_market + $makilala_postharvest_transpo_farm_to_market + $makilala_postharvest_transpo_farm_to_market + $kidapawan_postharvest_transpo_farm_to_market;
                $sub_total_south_postharvest_transpo_farm_to_market = $lake_sebu_postharvest_transpo_farm_to_market + $tupi_postharvest_transpo_farm_to_market + $tampakan_postharvest_transpo_farm_to_market + $tboli_postharvest_transpo_farm_to_market;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Farm Animals</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_market }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_market }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_postharvest_transpo_farm_to_market_vehicle = $banisilan_postharvest_transpo_farm_to_market_vehicle + $magpet_postharvest_transpo_farm_to_market_vehicle + $alamada_postharvest_transpo_farm_to_market_vehicle + $matalam_postharvest_transpo_farm_to_market_vehicle + $makilala_postharvest_transpo_farm_to_market_vehicle + $makilala_postharvest_transpo_farm_to_market_vehicle + $kidapawan_postharvest_transpo_farm_to_market_vehicle;
                $sub_total_south_postharvest_transpo_farm_to_market_vehicle = $lake_sebu_postharvest_transpo_farm_to_market_vehicle + $tupi_postharvest_transpo_farm_to_market_vehicle + $tampakan_postharvest_transpo_farm_to_market_vehicle + $tboli_postharvest_transpo_farm_to_market_vehicle;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Vehicle</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_market_vehicle }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_market_vehicle }}</td>
          </tr>
          <tr>
            @php
            $sub_total_north_postharvest_transpo_farm_to_market_other = $banisilan_postharvest_transpo_farm_to_market_other + $magpet_postharvest_transpo_farm_to_market_other + $alamada_postharvest_transpo_farm_to_market_other + $matalam_postharvest_transpo_farm_to_market_other + $makilala_postharvest_transpo_farm_to_market_other + $makilala_postharvest_transpo_farm_to_market_other + $kidapawan_postharvest_transpo_farm_to_market_other;
            $sub_total_south_postharvest_transpo_farm_to_market_other = $lake_sebu_postharvest_transpo_farm_to_market_other + $tupi_postharvest_transpo_farm_to_market_other + $tampakan_postharvest_transpo_farm_to_market_other + $tboli_postharvest_transpo_farm_to_market_other;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Other : Human</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_postharvest_transpo_farm_to_market_other }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_postharvest_transpo_farm_to_market_other }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>


        </tbody>
      </table>

  </div>
</div>
