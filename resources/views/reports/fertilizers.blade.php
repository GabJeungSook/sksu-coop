
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
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Fertilizers</h1>
  <div class="mt-5 overflow-x-auto">
    <div class="">
        <h1 class="table-auto mt-5 text-lg text-left font-bold text-gray-700">Fertilizer Application</h1>
    </div>
    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2">Fertilizer Application</th> <!-- Empty top-left cell -->
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
            <td class="border text-gray-700 text-md underline px-3 break py-1">Organic</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_name = $banisilan_fertilizer_organic_name + $magpet_fertilizer_organic_name + $alamada_fertilizer_organic_name + $matalam_fertilizer_organic_name + $makilala_fertilizer_organic_name + $makilala_fertilizer_organic_name + $kidapawan_fertilizer_organic_name;
                $sub_total_south_fertilizer_organic_name = $lake_sebu_fertilizer_organic_name + $tupi_fertilizer_organic_name + $tampakan_fertilizer_organic_name + $tboli_fertilizer_organic_name;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Vermicast</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_name }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_name }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_f = $banisilan_fertilizer_organic_f + $magpet_fertilizer_organic_f + $alamada_fertilizer_organic_f + $matalam_fertilizer_organic_f + $makilala_fertilizer_organic_f + $makilala_fertilizer_organic_f + $kidapawan_fertilizer_organic_f;
                $sub_total_south_fertilizer_organic_f = $lake_sebu_fertilizer_organic_f + $tupi_fertilizer_organic_f + $tampakan_fertilizer_organic_f + $tboli_fertilizer_organic_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_amount = $banisilan_fertilizer_organic_amount + $magpet_fertilizer_organic_amount + $alamada_fertilizer_organic_amount + $matalam_fertilizer_organic_amount + $makilala_fertilizer_organic_amount + $makilala_fertilizer_organic_amount + $kidapawan_fertilizer_organic_amount;
                $sub_total_south_fertilizer_organic_amount = $lake_sebu_fertilizer_organic_amount + $tupi_fertilizer_organic_amount + $tampakan_fertilizer_organic_amount + $tboli_fertilizer_organic_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_amount }}</td>
          </tr>
          <tr>
            <td class="border text-gray-700 text-md underline px-3 break py-1">Inorganic</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_urea = $banisilan_fertilizer_organic_urea + $magpet_fertilizer_organic_urea + $alamada_fertilizer_organic_urea + $matalam_fertilizer_organic_urea + $makilala_fertilizer_organic_urea + $makilala_fertilizer_organic_urea + $kidapawan_fertilizer_organic_urea;
                $sub_total_south_fertilizer_organic_urea = $lake_sebu_fertilizer_organic_urea + $tupi_fertilizer_organic_urea + $tampakan_fertilizer_organic_urea + $tboli_fertilizer_organic_urea;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">UREA</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_urea }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_urea }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_urea_f = $banisilan_fertilizer_organic_urea_f + $magpet_fertilizer_organic_urea_f + $alamada_fertilizer_organic_urea_f + $matalam_fertilizer_organic_urea_f + $makilala_fertilizer_organic_urea_f + $makilala_fertilizer_organic_urea_f + $kidapawan_fertilizer_organic_urea_f;
                $sub_total_south_fertilizer_organic_urea_f = $lake_sebu_fertilizer_organic_urea_f + $tupi_fertilizer_organic_urea_f + $tampakan_fertilizer_organic_urea_f + $tboli_fertilizer_organic_urea_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_urea_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_urea_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_urea_amount = $banisilan_fertilizer_organic_urea_amount + $magpet_fertilizer_organic_urea_amount + $alamada_fertilizer_organic_urea_amount + $matalam_fertilizer_organic_urea_amount + $makilala_fertilizer_organic_urea_amount + $makilala_fertilizer_organic_urea_amount + $kidapawan_fertilizer_organic_urea_amount;
                $sub_total_south_fertilizer_organic_urea_amount = $lake_sebu_fertilizer_organic_urea_amount + $tupi_fertilizer_organic_urea_amount + $tampakan_fertilizer_organic_urea_amount + $tboli_fertilizer_organic_urea_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_urea_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_urea_amount }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_complete = $banisilan_fertilizer_organic_complete + $magpet_fertilizer_organic_complete + $alamada_fertilizer_organic_complete + $matalam_fertilizer_organic_complete + $makilala_fertilizer_organic_complete + $makilala_fertilizer_organic_complete + $kidapawan_fertilizer_organic_complete;
                $sub_total_south_fertilizer_organic_complete = $lake_sebu_fertilizer_organic_complete + $tupi_fertilizer_organic_complete + $tampakan_fertilizer_organic_complete + $tboli_fertilizer_organic_complete;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">COMPLETE</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_complete }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_complete }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_complete_f = $banisilan_fertilizer_organic_complete_f + $magpet_fertilizer_organic_complete_f + $alamada_fertilizer_organic_complete_f + $matalam_fertilizer_organic_complete_f + $makilala_fertilizer_organic_complete_f + $makilala_fertilizer_organic_complete_f + $kidapawan_fertilizer_organic_complete_f;
                $sub_total_south_fertilizer_organic_complete_f = $lake_sebu_fertilizer_organic_complete_f + $tupi_fertilizer_organic_complete_f + $tampakan_fertilizer_organic_complete_f + $tboli_fertilizer_organic_complete_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_complete_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_complete_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_complete_amount = $banisilan_fertilizer_organic_complete_amount + $magpet_fertilizer_organic_complete_amount + $alamada_fertilizer_organic_complete_amount + $matalam_fertilizer_organic_complete_amount + $makilala_fertilizer_organic_complete_amount + $makilala_fertilizer_organic_complete_amount + $kidapawan_fertilizer_organic_complete_amount;
                $sub_total_south_fertilizer_organic_complete_amount = $lake_sebu_fertilizer_organic_complete_amount + $tupi_fertilizer_organic_complete_amount + $tampakan_fertilizer_organic_complete_amount + $tboli_fertilizer_organic_complete_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_complete_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_complete_amount }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_potassium = $banisilan_fertilizer_organic_potassium + $magpet_fertilizer_organic_potassium + $alamada_fertilizer_organic_potassium + $matalam_fertilizer_organic_potassium + $makilala_fertilizer_organic_potassium + $makilala_fertilizer_organic_potassium + $kidapawan_fertilizer_organic_potassium;
                $sub_total_south_fertilizer_organic_potassium = $lake_sebu_fertilizer_organic_potassium + $tupi_fertilizer_organic_potassium + $tampakan_fertilizer_organic_potassium + $tboli_fertilizer_organic_potassium;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">POTASSIUM</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_potassium }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_potassium }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_potassium_f = $banisilan_fertilizer_organic_potassium_f + $magpet_fertilizer_organic_potassium_f + $alamada_fertilizer_organic_potassium_f + $matalam_fertilizer_organic_potassium_f + $makilala_fertilizer_organic_potassium_f + $makilala_fertilizer_organic_potassium_f + $kidapawan_fertilizer_organic_potassium_f;
                $sub_total_south_fertilizer_organic_potassium_f = $lake_sebu_fertilizer_organic_potassium_f + $tupi_fertilizer_organic_potassium_f + $tampakan_fertilizer_organic_potassium_f + $tboli_fertilizer_organic_potassium_f;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">F</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_potassium_f }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_potassium_f }}</td>
          </tr>
          <tr>
            @php
                $sub_total_north_fertilizer_organic_potassium_amount = $banisilan_fertilizer_organic_potassium_amount + $magpet_fertilizer_organic_potassium_amount + $alamada_fertilizer_organic_potassium_amount + $matalam_fertilizer_organic_potassium_amount + $makilala_fertilizer_organic_potassium_amount + $makilala_fertilizer_organic_potassium_amount + $kidapawan_fertilizer_organic_potassium_amount;
                $sub_total_south_fertilizer_organic_potassium_amount = $lake_sebu_fertilizer_organic_potassium_amount + $tupi_fertilizer_organic_potassium_amount + $tampakan_fertilizer_organic_potassium_amount + $tboli_fertilizer_organic_potassium_amount;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Amount</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_fertilizer_organic_potassium_amount }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_fertilizer_organic_potassium_amount }}</td>
          </tr>
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr>
        </tbody>
      </table>

  </div>
</div>
