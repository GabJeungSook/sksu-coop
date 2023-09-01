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
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Profile of the Respondents</h1>
  <div class="mt-5 overflow-x-auto">
    <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Place Of Birth</h1>
    </div>
    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Place Of Birth</th> <!-- Empty top-left cell -->
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
            @php
            $banisilan = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->take(32)->take(32)->count();
            $magpet = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->take(32)->take(32)->count();
            $alamada = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->take(32)->take(32)->count();
            $matalam = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->take(32)->take(32)->count();
            $makilala = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->take(32)->take(32)->count();
            $kidapawan = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->take(32)->take(32)->count();

            $sub_total_north = $banisilan + $magpet + $alamada + $matalam + $makilala + $kidapawan;

            $lake_sebu = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->take(32)->take(32)->count();

            $tupi = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->take(32)->take(32)->count();

            $tampakan = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->take(32)->take(32)->count();

            $tboli = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->take(32)->take(32)->count();

            $sub_total_south = $lake_sebu + $tupi + $tampakan + $tboli;
            @endphp
          <tr>
            <td class="border text-gray-600 text-sm px-3 break py-1">Within their Municipality <br>/Province <br>  /Region</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Age</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Age</th> <!-- Empty top-left cell -->
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
            @php
            $banisilan_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->where('age', '<=', 35)->take(32)->take(32)->count();
            $magpet_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->where('age', '<=', 35)->take(32)->take(32)->count();
            $alamada_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->where('age', '<=', 35)->take(32)->take(32)->count();
            $matalam_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->where('age', '<=', 35)->take(32)->take(32)->count();
            $makilala_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->where('age', '<=', 35)->take(32)->take(32)->count();
            $kidapawan_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->where('age', '<=', 35)->take(32)->take(32)->count();

            $sub_total_north_35_below = $banisilan_35_below + $magpet_35_below + $alamada_35_below + $matalam_35_below + $makilala_35_below + $kidapawan_35_below;

            $lake_sebu_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->where('age', '<=', 35)->take(32)->take(32)->count();

            $tupi_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->where('age', '<=', 35)->take(32)->take(32)->count();

            $tampakan_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->where('age', '<=', 35)->take(32)->take(32)->count();

            $tboli_35_below = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->where('age', '<=', 35)->take(32)->take(32)->count();

            $sub_total_south_35_below = $lake_sebu_35_below + $tupi_35_below + $tampakan_35_below + $tboli_35_below;
            @endphp
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">35 and Below</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_35_below }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_35_below }}</td>
          </tr>
          <tr>
            @php
            $banisilan_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();
            $magpet_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();
            $alamada_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();
            $matalam_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();
            $makilala_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();
            $kidapawan_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();

            $sub_total_north_36_to_45 = $banisilan_36_to_45 + $magpet_36_to_45 + $alamada_36_to_45 + $matalam_36_to_45 + $makilala_36_to_45 + $kidapawan_36_to_45;

            $lake_sebu_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();

            $tupi_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();

            $tampakan_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();

            $tboli_36_to_45 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->where('age', '>=', 36)->where('age', '<=', 45)->take(32)->take(32)->count();

            $sub_total_south_36_to_45 = $lake_sebu_36_to_45 + $tupi_36_to_45 + $tampakan_36_to_45 + $tboli_36_to_45;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">36 - 45</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_36_to_45 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_36_to_45 }}</td>
          </tr>
          <tr>
            @php
            $banisilan_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();
            $magpet_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();
            $alamada_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();
            $matalam_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();
            $makilala_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();
            $kidapawan_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();

            $sub_total_north_46_to_55 = $banisilan_46_to_55 + $magpet_46_to_55 + $alamada_46_to_55 + $matalam_46_to_55 + $makilala_46_to_55 + $kidapawan_46_to_55;

            $lake_sebu_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();

            $tupi_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();

            $tampakan_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();

            $tboli_46_to_55 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->where('age', '>=', 46)->where('age', '<=', 55)->take(32)->take(32)->count();

            $sub_total_south_46_to_55 = $lake_sebu_46_to_55 + $tupi_46_to_55 + $tampakan_46_to_55 + $tboli_46_to_55;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">46 - 55</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_46_to_55 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_46_to_55 }}</td>
          </tr>
          <tr>
            @php
            $banisilan_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();
            $magpet_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();
            $alamada_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();
            $matalam_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();
            $makilala_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();
            $kidapawan_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();

            $sub_total_north_56_to_65 = $banisilan_56_to_65 + $magpet_56_to_65 + $alamada_56_to_65 + $matalam_56_to_65 + $makilala_56_to_65 + $kidapawan_56_to_65;

            $lake_sebu_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();

            $tupi_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();

            $tampakan_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();

            $tboli_56_to_65 = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->where('age', '>=', 56)->where('age', '<=', 65)->take(32)->take(32)->count();

            $sub_total_south_56_to_65 = $lake_sebu_56_to_65 + $tupi_56_to_65 + $tampakan_56_to_65 + $tboli_56_to_65;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">56 - 65</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_56_to_65 }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_56_to_65 }}</td>
          </tr>
          <tr>
            @php
            $banisilan_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'banisilan';
            })->where('age', '>=', 66)->take(32)->take(32)->count();
            $magpet_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'magpet';
            })->where('age', '>=', 66)->take(32)->take(32)->count();
            $alamada_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'alamada';
            })->where('age', '>=', 66)->take(32)->take(32)->count();
            $matalam_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'matalam';
            })->where('age', '>=', 66)->take(32)->take(32)->count();
            $makilala_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'makilala';
            })->where('age', '>=', 66)->take(32)->take(32)->count();
            $kidapawan_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'kidapawan';
            })->where('age', '>=', 66)->take(32)->take(32)->count();

            $sub_total_north_66_and_above = $banisilan_66_and_above + $magpet_66_and_above + $alamada_66_and_above + $matalam_66_and_above + $makilala_66_and_above + $kidapawan_66_and_above;

            $lake_sebu_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'lake sebu';
            })->where('age', '>=', 66)->take(32)->take(32)->count();

            $tupi_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tupi';
            })->where('age', '>=', 66)->take(32)->take(32)->count();

            $tampakan_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 'tampakan';
            })->where('age', '>=', 66)->take(32)->take(32)->count();

            $tboli_66_and_above = $respondents_place_of_birth->filter(function ($item) {
                return strtolower($item->municipality) === 't\'boli';
            })->where('age', '>=', 66)->take(32)->take(32)->count();

            $sub_total_south_66_and_above = $lake_sebu_66_and_above + $tupi_66_and_above + $tampakan_66_and_above + $tboli_66_and_above;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">66 and above</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_66_and_above }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_66_and_above }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Gender</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Gender</th> <!-- Empty top-left cell -->
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
            @php
           $banisilan_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();
            $magpet_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();
            $alamada_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();
            $matalam_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();
            $makilala_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();
            $kidapawan_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();

            $sub_total_north_male = $banisilan_male + $magpet_male + $alamada_male + $matalam_male + $makilala_male + $kidapawan_male;

            $lake_sebu_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();

            $tupi_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();

            $tampakan_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();

            $tboli_male = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->gender === '0' || $item->gender === 'M');
            })->take(32)->take(32)->count();

            $sub_total_south_male = $lake_sebu_male + $tupi_male + $tampakan_male + $tboli_male;
            @endphp
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Male</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_male }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_male }}</td>
          </tr>
          <tr>
            @php
            $banisilan_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();
            $magpet_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();
            $alamada_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();
            $matalam_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();
            $makilala_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();
            $kidapawan_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();

            $sub_total_north_female = $banisilan_female + $magpet_female + $alamada_female + $matalam_female + $makilala_female + $kidapawan_female;

            $lake_sebu_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();

            $tupi_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();

            $tampakan_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();

            $tboli_female = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->gender === '1' || $item->gender === 'F');
            })->take(32)->take(32)->count();

            $sub_total_south_female = $lake_sebu_female + $tupi_female + $tampakan_female + $tboli_female;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Female</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_female }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_female }}</td>
          </tr>

          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Marital Status</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Marital Status</th> <!-- Empty top-left cell -->
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
            @php
           $banisilan_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();
            $magpet_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();
            $alamada_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();
            $matalam_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();
            $makilala_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();
            $kidapawan_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();

            $sub_total_north_single = $banisilan_single + $magpet_single + $alamada_single + $matalam_single + $makilala_single + $kidapawan_single;

            $lake_sebu_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();

            $tupi_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();

            $tampakan_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();

            $tboli_single = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->civil_status === '0');
            })->take(32)->take(32)->count();

            $sub_total_south_single = $lake_sebu_single + $tupi_single + $tampakan_single + $tboli_single;
            @endphp
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Single</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_single }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_single }}</td>
          </tr>
          <tr>
            @php
            $banisilan_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();
            $magpet_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();
            $alamada_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();
            $matalam_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();
            $makilala_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();
            $kidapawan_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();

            $sub_total_north_married = $banisilan_married + $magpet_married + $alamada_married + $matalam_married + $makilala_married + $kidapawan_married;

            $lake_sebu_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();

            $tupi_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();

            $tampakan_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();

            $tboli_married = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                ($item->civil_status === '1');
            })->take(32)->take(32)->count();

            $sub_total_south_married = $lake_sebu_married + $tupi_married + $tampakan_married + $tboli_married;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Married</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_married }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_married }}</td>
          </tr>
          <tr>
            @php
            $banisilan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();
            $magpet_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();
            $alamada_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();
            $matalam_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();
            $makilala_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();
            $kidapawan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();

            $sub_total_north_widow = $banisilan_widow+ $magpet_widow + $alamada_widow + $matalam_widow + $makilala_widow + $kidapawan_widow;

            $lake_sebu_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();

            $tupi_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();

            $tampakan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();

            $tboli_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->civil_status === '2');
            })->take(32)->take(32)->count();

            $sub_total_south_widow = $lake_sebu_widow + $tupi_widow + $tampakan_widow + $tboli_widow;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Widow / Widower</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_widow }}</td>
          </tr>
          <tr>
            @php
            $banisilan_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();
            $magpet_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();
            $alamada_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();
            $matalam_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();
            $makilala_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();
            $kidapawan_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();

            $sub_total_north_divorced = $banisilan_divorced + $magpet_divorced + $alamada_divorced + $matalam_divorced + $makilala_divorced + $kidapawan_divorced;

            $lake_sebu_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();

            $tupi_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();

            $tampakan_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();

            $tboli_divorced = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                      ($item->civil_status === '3');
            })->take(32)->take(32)->count();

            $sub_total_south_divorced = $lake_sebu_divorced + $tupi_divorced + $tampakan_divorced + $tboli_divorced;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Divorced</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_divorced }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_divorced }}</td>
          </tr>

          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Tribe</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Tribe</th> <!-- Empty top-left cell -->
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
            @php
           $banisilan_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->take(32)->count();
            $magpet_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->take(32)->count();
            $alamada_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->take(32)->count();
            $matalam_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->take(32)->count();
            $makilala_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->take(32)->count();
            $kidapawan_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->count();

            $sub_total_north_ilonggo = $banisilan_ilonggo + $magpet_ilonggo + $alamada_ilonggo + $matalam_ilonggo + $makilala_ilonggo + $kidapawan_ilonggo;

            $lake_sebu_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->count();

            $tupi_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->count();

            $tampakan_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->count();

            $tboli_ilonggo = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_ilonggo !== null);
            })->take(32)->count();

            $sub_total_south_ilonggo = $lake_sebu_ilonggo + $tupi_ilonggo + $tampakan_ilonggo + $tboli_ilonggo;
            @endphp
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Ilonggo</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_ilonggo }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_ilonggo }}</td>
          </tr>
          <tr>
            @php
            $banisilan_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();
            $magpet_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();
            $alamada_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();
            $matalam_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();
            $makilala_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();
            $kidapawan_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();

            $sub_total_north_ilocano = $banisilan_ilocano + $magpet_ilocano + $alamada_ilocano + $matalam_ilocano + $makilala_ilocano + $kidapawan_ilocano;


            $lake_sebu_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();

            $tupi_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();

            $tampakan_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();

            $tboli_ilocano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                ($item->ethno_linguistic_ilocano !== null);
            })->take(32)->count();

            $sub_total_south_ilocano = $lake_sebu_ilocano + $tupi_ilocano + $tampakan_ilocano + $tboli_ilocano;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Ilocano</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_ilocano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_ilocano }}</td>
          </tr>
          <tr>
            @php
            $banisilan_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();
            $magpet_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();
            $alamada_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();
            $matalam_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();
            $makilala_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();
            $kidapawan_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();

            $sub_total_north_cebuano = $banisilan_cebuano + $magpet_cebuano + $alamada_cebuano + $matalam_cebuano + $makilala_cebuano + $kidapawan_cebuano;

            $lake_sebu_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();

            $tupi_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();

            $tampakan_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();

            $tboli_cebuano = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                   ($item->ethno_linguistic_cebuano !== null);
            })->take(32)->count();

            $sub_total_south_cebuano = $lake_sebu_cebuano + $tupi_cebuano + $tampakan_cebuano + $tboli_cebuano;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Cebuano</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_cebuano }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_cebuano }}</td>
          </tr>
          <tr>
            @php
            $banisilan_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();
            $magpet_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();
            $alamada_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();
            $matalam_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();
            $makilala_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();
            $kidapawan_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();

            $sub_total_north_maguindanaon = $banisilan_maguindanaon + $magpet_maguindanaon + $alamada_maguindanaon + $matalam_maguindanaon + $makilala_maguindanaon + $kidapawan_maguindanaon;


            $lake_sebu_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();

            $tupi_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();

            $tampakan_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();

            $tboli_maguindanaon = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_maguindanaon !== null);
            })->take(32)->count();

            $sub_total_south_maguindanaon = $lake_sebu_maguindanaon + $tupi_maguindanaon + $tampakan_maguindanaon + $tboli_maguindanaon;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Maguindanaon</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_maguindanaon }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_maguindanaon }}</td>
          </tr>
          <tr>
            @php
            $banisilan_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();
            $magpet_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();
            $alamada_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();
            $matalam_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();
            $makilala_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();
            $kidapawan_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();

            $sub_total_north_tausog = $banisilan_tausog + $magpet_tausog + $alamada_tausog + $matalam_tausog + $makilala_tausog + $kidapawan_tausog;


            $lake_sebu_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();

            $tupi_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();

            $tampakan_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();

            $tboli_tausog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_tausog !== null);
            })->take(32)->count();

            $sub_total_south_tausog = $lake_sebu_tausog + $tupi_tausog + $tampakan_tausog + $tboli_tausog;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Tausog : Iranon</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_tausog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_tausog }}</td>
          </tr>
          <tr>
            @php
            $banisilan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->civil_status === '2');
            })->take(32)->count();
            $magpet_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->civil_status === '2');
            })->take(32)->count();
            $alamada_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->civil_status === '2');
            })->take(32)->count();
            $matalam_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->civil_status === '2');
            })->take(32)->count();
            $makilala_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->civil_status === '2');
            })->take(32)->count();
            $kidapawan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->civil_status === '2');
            })->take(32)->count();

            $sub_total_north_widow = $banisilan_widow+ $magpet_widow + $alamada_widow + $matalam_widow + $makilala_widow + $kidapawan_widow;

            $lake_sebu_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->civil_status === '2');
            })->take(32)->count();

            $tupi_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->civil_status === '2');
            })->take(32)->count();

            $tampakan_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->civil_status === '2');
            })->take(32)->count();

            $tboli_widow = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->civil_status === '2');
            })->take(32)->count();

            $sub_total_south_widow = $lake_sebu_widow + $tupi_widow + $tampakan_widow + $tboli_widow;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Widow / Widower</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_widow }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_widow }}</td>
          </tr>
          <tr>
            @php
            $banisilan_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();
            $magpet_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();
            $alamada_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();
            $matalam_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();
            $makilala_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();
            $kidapawan_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();

            $sub_total_north_blaan = $banisilan_blaan + $magpet_blaan + $alamada_blaan + $matalam_blaan + $makilala_blaan + $kidapawan_blaan;


            $lake_sebu_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();

            $tupi_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();

            $tampakan_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();

            $tboli_blaan = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_blaan !== null);
            })->take(32)->count();

            $sub_total_south_blaan = $lake_sebu_blaan + $tupi_blaan + $tampakan_blaan + $tboli_blaan;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Blaan</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_blaan }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_blaan }}</td>
          </tr>
          <tr>
            @php
            $banisilan_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();
            $magpet_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();
            $alamada_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();
            $matalam_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();
            $makilala_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();
            $kidapawan_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();

            $sub_total_north_tboli = $banisilan_tboli + $magpet_tboli + $alamada_tboli + $matalam_tboli + $makilala_tboli + $kidapawan_tboli;


            $lake_sebu_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();

            $tupi_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();

            $tampakan_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();

            $tboli_tboli = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_tboli !== null);
            })->take(32)->count();

            $sub_total_south_tboli = $lake_sebu_tboli + $tupi_tboli + $tampakan_tboli + $tboli_tboli;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">T'boli</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_tboli }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_tboli }}</td>
          </tr>
          <tr>
            @php
            $banisilan_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();
            $magpet_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();
            $alamada_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();
            $matalam_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();
            $makilala_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();
            $kidapawan_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();

            $sub_total_north_tenduray = $banisilan_tenduray + $magpet_tenduray + $alamada_tenduray + $matalam_tenduray + $makilala_tenduray + $kidapawan_tenduray;


            $lake_sebu_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();

            $tupi_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();

            $tampakan_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();

            $tboli_tenduray = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_tenduray !== null);
            })->take(32)->count();

            $sub_total_south_tenduray = $lake_sebu_tenduray + $tupi_tenduray + $tampakan_tenduray + $tboli_tenduray;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Tenduray</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_tenduray }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_tenduray }}</td>
          </tr>
          <tr>
            @php
            $banisilan_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();
            $magpet_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();
            $alamada_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();
            $matalam_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();
            $makilala_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();
            $kidapawan_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();

            $sub_total_north_tagalog = $banisilan_tagalog + $magpet_tagalog + $alamada_tagalog + $matalam_tagalog + $makilala_tagalog + $kidapawan_tagalog;


            $lake_sebu_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();

            $tupi_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();

            $tampakan_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();

            $tboli_tagalog = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_tagalog !== null);
            })->take(32)->count();

            $sub_total_south_tagalog = $lake_sebu_tagalog + $tupi_tagalog + $tampakan_tagalog + $tboli_tagalog;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Tagalog</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_tagalog }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_tagalog }}</td>
          </tr>
          <tr>
            @php
            $banisilan_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();
            $magpet_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();
            $alamada_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();
            $matalam_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();
            $makilala_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();
            $kidapawan_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();

            $sub_total_north_other = $banisilan_other + $magpet_other + $alamada_other + $matalam_other + $makilala_other + $kidapawan_other;


            $lake_sebu_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();

            $tupi_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();

            $tampakan_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();

            $tboli_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->ethno_linguistic_other !== null);
            })->take(32)->count();

            $sub_total_south_other = $lake_sebu_other + $tupi_other + $tampakan_other + $tboli_other;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Other</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_other }}</td>
          </tr>

          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Educational Attainment</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Educational Attainment</th> <!-- Empty top-left cell -->
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
            @php
           $banisilan_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();
            $magpet_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();
            $alamada_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();
            $matalam_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();
            $makilala_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();
            $kidapawan_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '0' );
            })->take(32)->count();

            $sub_total_north_none = $banisilan_none + $magpet_none + $alamada_none + $matalam_none + $makilala_none + $kidapawan_none;

            $lake_sebu_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();

            $tupi_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();

            $tampakan_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();

            $tboli_none = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '0');
            })->take(32)->count();

            $sub_total_south_none = $lake_sebu_none + $tupi_none + $tampakan_none + $tboli_none;
            @endphp
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">None</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_none }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_none }}</td>
          </tr>
          <tr>
            @php
            $banisilan_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();
            $magpet_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();
            $alamada_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();
            $matalam_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();
            $makilala_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();
            $kidapawan_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();

            $sub_total_north_elementary = $banisilan_elementary + $magpet_elementary + $alamada_elementary + $matalam_elementary + $makilala_elementary + $kidapawan_elementary;


            $lake_sebu_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();

            $tupi_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();

            $tampakan_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();

            $tboli_elementary = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '1');
            })->take(32)->count();

            $sub_total_south_elementary = $lake_sebu_elementary + $tupi_elementary + $tampakan_elementary + $tboli_elementary;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Elementary Level</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_elementary }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_elementary }}</td>
          </tr>
          <tr>
            @php
            $banisilan_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();
            $magpet_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();
            $alamada_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();
            $matalam_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();
            $makilala_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();
            $kidapawan_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();

            $sub_total_north_elementary_graduate = $banisilan_elementary_graduate + $magpet_elementary_graduate + $alamada_elementary_graduate + $matalam_elementary_graduate + $makilala_elementary_graduate + $kidapawan_elementary_graduate;


            $lake_sebu_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();

            $tupi_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();

            $tampakan_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();

            $tboli_elementary_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '2');
            })->take(32)->count();

            $sub_total_south_elementary_graduate = $lake_sebu_elementary_graduate + $tupi_elementary_graduate + $tampakan_elementary_graduate + $tboli_elementary_graduate;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Elementary Graduate</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_elementary_graduate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_elementary_graduate }}</td>
          </tr>
          <tr>
            @php
            $banisilan_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();
            $magpet_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();
            $alamada_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();
            $matalam_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();
            $makilala_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();
            $kidapawan_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();

            $sub_total_north_high_school = $banisilan_high_school + $magpet_high_school + $alamada_high_school + $matalam_high_school + $makilala_high_school + $kidapawan_high_school;


            $lake_sebu_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();

            $tupi_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();

            $tampakan_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();

            $tboli_high_school = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '3');
            })->take(32)->count();

            $sub_total_south_high_school = $lake_sebu_high_school + $tupi_high_school + $tampakan_high_school + $tboli_high_school;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">High School Level</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_high_school }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_high_school }}</td>
          </tr>
          <tr>
            @php
            $banisilan_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();
            $magpet_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();
            $alamada_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();
            $matalam_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();
            $makilala_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();
            $kidapawan_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();

            $sub_total_north_high_school_graduate = $banisilan_high_school_graduate + $magpet_high_school_graduate + $alamada_high_school_graduate + $matalam_high_school_graduate + $makilala_high_school_graduate + $kidapawan_high_school_graduate;


            $lake_sebu_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();

            $tupi_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();

            $tampakan_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();

            $tboli_high_school_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '4');
            })->take(32)->count();

            $sub_total_south_high_school_graduate = $lake_sebu_high_school_graduate + $tupi_high_school_graduate + $tampakan_high_school_graduate + $tboli_high_school_graduate;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">High School Graduate</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_high_school_graduate }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_high_school_graduate }}</td>
          </tr>
          <tr>
            @php
            $banisilan_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();
            $magpet_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();
            $alamada_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();
            $matalam_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();
            $makilala_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();
            $kidapawan_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();

            $sub_total_north_techvoc = $banisilan_techvoc + $magpet_techvoc + $alamada_techvoc + $matalam_techvoc + $makilala_techvoc + $kidapawan_techvoc;


            $lake_sebu_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();

            $tupi_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();

            $tampakan_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();

            $tboli_techvoc = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '5');
            })->take(32)->count();

            $sub_total_south_techvoc = $lake_sebu_techvoc + $tupi_techvoc + $tampakan_techvoc + $tboli_techvoc;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">TechVoc Level</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_techvoc }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_techvoc }}</td>
          </tr>
          <tr>
            @php
            $banisilan_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();
            $magpet_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();
            $alamada_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();
            $matalam_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();
            $makilala_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();
            $kidapawan_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();

            $sub_total_north_techvoc_holder = $banisilan_techvoc_holder + $magpet_techvoc_holder + $alamada_techvoc_holder + $matalam_techvoc_holder + $makilala_techvoc_holder + $kidapawan_techvoc_holder;


            $lake_sebu_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();

            $tupi_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();

            $tampakan_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();

            $tboli_techvoc_holder = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '6');
            })->take(32)->count();

            $sub_total_south_techvoc_holder = $lake_sebu_techvoc_holder + $tupi_techvoc_holder + $tampakan_techvoc_holder + $tboli_techvoc_holder;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">TechVoc Holder</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_techvoc_holder }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_techvoc_holder }}</td>
          </tr>
          <tr>
            @php
            $banisilan_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();
            $magpet_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();
            $alamada_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();
            $matalam_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();
            $makilala_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();
            $kidapawan_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();

            $sub_total_north_college_level = $banisilan_college_level + $magpet_college_level + $alamada_college_level + $matalam_college_level + $makilala_college_level + $kidapawan_college_level;


            $lake_sebu_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();

            $tupi_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();

            $tampakan_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();

            $tboli_college_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '7');
            })->take(32)->count();

            $sub_total_south_college_level = $lake_sebu_college_level + $tupi_college_level + $tampakan_college_level + $tboli_college_level;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">College Level</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_college_level }}</td>
    <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_college_level }}</td>
          </tr>
          <tr>
            @php
            $banisilan_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();
            $magpet_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();
            $alamada_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();
            $matalam_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();
            $makilala_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();
            $kidapawan_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();

            $sub_total_north_college_graduate = $banisilan_college_graduate + $magpet_college_graduate + $alamada_college_graduate + $matalam_college_graduate + $makilala_college_graduate + $kidapawan_college_graduate;


            $lake_sebu_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();

            $tupi_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();

            $tampakan_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();

            $tboli_college_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '8');
            })->take(32)->count();

            $sub_total_south_college_graduate = $lake_sebu_college_graduate + $tupi_college_graduate + $tampakan_college_graduate + $tboli_college_graduate;
            @endphp
             <td class="border text-gray-600 px-3 whitespace-nowrap py-1">College Graduate</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_college_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_college_graduate }}</td>
          </tr>
          <tr>
            @php
            $banisilan_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();
            $magpet_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();
            $alamada_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();
            $matalam_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();
            $makilala_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();
            $kidapawan_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();

            $sub_total_north_masters_level = $banisilan_masters_level + $magpet_masters_level + $alamada_masters_level + $matalam_masters_level + $makilala_masters_level + $kidapawan_masters_level;


            $lake_sebu_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();

            $tupi_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();

            $tampakan_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();

            $tboli_masters_level = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '10');
            })->take(32)->count();

            $sub_total_south_masters_level = $lake_sebu_masters_level + $tupi_masters_level + $tampakan_masters_level + $tboli_masters_level;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Masters Level</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_masters_level }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_masters_level }}</td>
          </tr>
          <tr>
            @php
            $banisilan_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();
            $magpet_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();
            $alamada_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();
            $matalam_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();
            $makilala_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();
            $kidapawan_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();

            $sub_total_north_masters_graduate = $banisilan_masters_graduate + $magpet_masters_graduate + $alamada_masters_graduate + $matalam_masters_graduate + $makilala_masters_graduate + $kidapawan_masters_graduate;


            $lake_sebu_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();

            $tupi_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();

            $tampakan_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();

            $tboli_masters_graduate = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->educational_attainment === '9');
            })->take(32)->count();

            $sub_total_south_masters_graduate = $lake_sebu_masters_graduate + $tupi_masters_graduate + $tampakan_masters_graduate + $tboli_masters_graduate;
            @endphp
             <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Masters Holder</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_masters_graduate }}</td>
             <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_masters_graduate }}</td>
          </tr>
          <tr>
            @php
            $banisilan_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();
            $magpet_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();
            $alamada_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();
            $matalam_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();
            $makilala_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();
            $kidapawan_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();

            $sub_total_north_education_other = $banisilan_education_other + $magpet_education_other + $alamada_education_other + $matalam_education_other + $makilala_education_other + $kidapawan_education_other;


            $lake_sebu_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();

            $tupi_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();

            $tampakan_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();

            $tboli_education_other = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->other_educational_attainment !== null);
            })->take(32)->count();

            $sub_total_south_education_other = $lake_sebu_education_other + $tupi_education_other + $tampakan_education_other + $tboli_education_other;
            @endphp
           <td class="border text-gray-600 px-3 whitespace-nowrap py-1">Other</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_education_other }}</td>
           <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_education_other }}</td>
          </tr>

          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Number of Household Members</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2"></th> <!-- Empty top-left cell -->
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
            $banisilan_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan');
            })->take(32)->sum('number_of_household_members');
            $magpet_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet');
            })->take(32)->sum('number_of_household_members');
            $alamada_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada');
            })->take(32)->sum('number_of_household_members');
            $matalam_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam');
            })->take(32)->sum('number_of_household_members');
            $makilala_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala');
            })->take(32)->sum('number_of_household_members');
            $kidapawan_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan');
            })->take(32)->sum('number_of_household_members');

            $sub_total_north_number_of_household_members = $banisilan_number_of_household_members + $magpet_number_of_household_members + $alamada_number_of_household_members + $matalam_number_of_household_members + $makilala_number_of_household_members + $kidapawan_number_of_household_members;


            $lake_sebu_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu');
            })->take(32)->sum('number_of_household_members');

            $tupi_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi');
            })->take(32)->sum('number_of_household_members');

            $tampakan_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan');
            })->take(32)->sum('number_of_household_members');

            $tboli_number_of_household_members = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli');
            })->take(32)->sum('number_of_household_members');

            $sub_total_south_number_of_household_members = $lake_sebu_number_of_household_members + $tupi_number_of_household_members + $tampakan_number_of_household_members + $tboli_number_of_household_members;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Number of Household Members</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_number_of_household_members }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_number_of_household_members }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

          <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Membership in Organization</h1>
    </div>
    <table class="border-collapse w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Membership in Organization</th> <!-- Empty top-left cell -->
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
            $banisilan_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();
            $magpet_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();
            $alamada_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();
            $matalam_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();
            $makilala_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();
            $kidapawan_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();

            $sub_total_north_member = $banisilan_member + $magpet_member + $alamada_member + $matalam_member + $makilala_member + $kidapawan_member;

            $lake_sebu_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();

            $tupi_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();

            $tampakan_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();

            $tboli_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->membership_in_organization === '0' || $item->membership_in_organization === 'Y');
            })->take(32)->count();

            $sub_total_south_member = $lake_sebu_member + $tupi_member + $tampakan_member + $tboli_member;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Member</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_member }}</td>
          </tr>
          <tr>
            @php
            $banisilan_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'banisilan') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();
            $magpet_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'magpet') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();
            $alamada_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'alamada') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();
            $matalam_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'matalam') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();
            $makilala_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'makilala') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();
            $kidapawan_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'kidapawan') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();

            $sub_total_north_non_member = $banisilan_non_member + $magpet_non_member + $alamada_non_member + $matalam_non_member + $makilala_non_member + $kidapawan_non_member;

            $lake_sebu_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'lake sebu') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();

            $tupi_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tupi') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();

            $tampakan_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 'tampakan') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();

            $tboli_non_member = $respondents_place_of_birth->filter(function ($item) {
                return (strtolower($item->municipality) === 't\'boli') &&
                    ($item->membership_in_organization === '1' || $item->membership_in_organization === 'N');
            })->take(32)->count();

            $sub_total_south_non_member = $lake_sebu_non_member + $tupi_non_member + $tampakan_non_member + $tboli_non_member;
            @endphp
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Non-Member</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_non_member }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_non_member }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>


  </div>
</div>
