
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
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Pesticides</h1>
  <div class="mt-5 overflow-x-auto">
    <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Pesticide Application</h1>
    </div>
    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Herbicide</th> <!-- Empty top-left cell -->
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
                $sub_total_north_pesticide_herbicide = $banisilan_pesticide_herbicide + $magpet_pesticide_herbicide + $alamada_pesticide_herbicide + $matalam_pesticide_herbicide + $makilala_pesticide_herbicide + $makilala_pesticide_herbicide + $kidapawan_pesticide_herbicide;
                $sub_total_south_pesticide_herbicide = $lake_sebu_pesticide_herbicide + $tupi_pesticide_herbicide + $tampakan_pesticide_herbicide + $tboli_pesticide_herbicide;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Manual Weeding</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_herbicide }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_herbicide }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_herbicide_f = $banisilan_pesticide_herbicide_f + $magpet_pesticide_herbicide_f + $alamada_pesticide_herbicide_f + $matalam_pesticide_herbicide_f + $makilala_pesticide_herbicide_f + $makilala_pesticide_herbicide_f + $kidapawan_pesticide_herbicide_f;
                $sub_total_south_pesticide_herbicide_f = $lake_sebu_pesticide_herbicide_f + $tupi_pesticide_herbicide_f + $tampakan_pesticide_herbicide_f + $tboli_pesticide_herbicide_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_herbicide_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_herbicide_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_herbicide_amount = $banisilan_pesticide_herbicide_amount + $magpet_pesticide_herbicide_amount + $alamada_pesticide_herbicide_amount + $matalam_pesticide_herbicide_amount + $makilala_pesticide_herbicide_amount + $makilala_pesticide_herbicide_amount + $kidapawan_pesticide_herbicide_amount;
                $sub_total_south_pesticide_herbicide_amount = $lake_sebu_pesticide_herbicide_amount + $tupi_pesticide_herbicide_amount + $tampakan_pesticide_herbicide_amount + $tboli_pesticide_herbicide_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_herbicide_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_herbicide_amount }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_glysophate = $banisilan_pesticide_glysophate + $magpet_pesticide_glysophate + $alamada_pesticide_glysophate + $matalam_pesticide_glysophate + $makilala_pesticide_glysophate + $makilala_pesticide_glysophate + $kidapawan_pesticide_glysophate;
                $sub_total_south_pesticide_glysophate = $lake_sebu_pesticide_glysophate + $tupi_pesticide_glysophate + $tampakan_pesticide_glysophate + $tboli_pesticide_glysophate;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Glyphosate</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_glysophate }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_glysophate }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_glysophate_f = $banisilan_pesticide_glysophate_f + $magpet_pesticide_glysophate_f + $alamada_pesticide_glysophate_f + $matalam_pesticide_glysophate_f + $makilala_pesticide_glysophate_f + $makilala_pesticide_glysophate_f + $kidapawan_pesticide_glysophate_f;
                $sub_total_south_pesticide_glysophate_f = $lake_sebu_pesticide_glysophate_f + $tupi_pesticide_glysophate_f + $tampakan_pesticide_glysophate_f + $tboli_pesticide_glysophate_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_glysophate_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_glysophate_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_glysophate_amount = $banisilan_pesticide_glysophate_amount + $magpet_pesticide_glysophate_amount + $alamada_pesticide_glysophate_amount + $matalam_pesticide_glysophate_amount + $makilala_pesticide_glysophate_amount + $makilala_pesticide_glysophate_amount + $kidapawan_pesticide_glysophate_amount;
                $sub_total_south_pesticide_glysophate_amount = $lake_sebu_pesticide_glysophate_amount + $tupi_pesticide_glysophate_amount + $tampakan_pesticide_glysophate_amount + $tboli_pesticide_glysophate_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_glysophate_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_glysophate_amount }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

      <table class="border-collapse mt-10 w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Insecticide</th> <!-- Empty top-left cell -->
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
                $sub_total_north_pesticide_cyper = $banisilan_pesticide_cyper + $magpet_pesticide_cyper + $alamada_pesticide_cyper + $matalam_pesticide_cyper + $makilala_pesticide_cyper + $makilala_pesticide_cyper + $kidapawan_pesticide_cyper;
                $sub_total_south_pesticide_cyper = $lake_sebu_pesticide_cyper + $tupi_pesticide_cyper + $tampakan_pesticide_cyper + $tboli_pesticide_cyper;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Cypermethrine</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_cyper }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_cyper }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_cyper_f = $banisilan_pesticide_cyper_f + $magpet_pesticide_cyper_f + $alamada_pesticide_cyper_f + $matalam_pesticide_cyper_f + $makilala_pesticide_cyper_f + $makilala_pesticide_cyper_f + $kidapawan_pesticide_cyper_f;
                $sub_total_south_pesticide_cyper_f = $lake_sebu_pesticide_cyper_f + $tupi_pesticide_cyper_f + $tampakan_pesticide_cyper_f + $tboli_pesticide_cyper_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_cyper_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_cyper_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_pesticide_cyper_amount = $banisilan_pesticide_cyper_amount + $magpet_pesticide_cyper_amount + $alamada_pesticide_cyper_amount + $matalam_pesticide_cyper_amount + $makilala_pesticide_cyper_amount + $makilala_pesticide_cyper_amount + $kidapawan_pesticide_cyper_amount;
                $sub_total_south_pesticide_cyper_amount = $lake_sebu_pesticide_cyper_amount + $tupi_pesticide_cyper_amount + $tampakan_pesticide_cyper_amount + $tboli_pesticide_cyper_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_pesticide_cyper_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_pesticide_cyper_amount }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

  </div>
</div>
