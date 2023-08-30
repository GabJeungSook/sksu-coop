
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
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">Coffee Farming</h1>
  <div class="mt-5 overflow-x-auto">

    <table class="border-collapse  w-full">
        <thead>
          <tr class="bg-gray-200">
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-500 py-2"></th> <!-- Empty top-left cell -->
            <th class="border-r-2 border-l-2 border-gray-500 text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="7">North Cotabato</th>
            <th class="border text-center whitespace-nowrap px-2 text-md font-medium text-gray-600 py-2" colspan="5">South Cotabato</th>
          </tr>
          <tr class="sub-header">
            <th class="border text-center whitespace-nowrap px-2 text-xs font-medium text-gray-600 py-2"></th> <!-- Empty top-left cell -->
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
            $sub_total_north_years_of_coffee = $banisilan_years_of_coffee + $magpet_years_of_coffee + $alamada_years_of_coffee + $matalam_years_of_coffee + $makilala_years_of_coffee + $makilala_years_of_coffee + $kidapawan_years_of_coffee;
            $sub_total_south_years_of_coffee = $lake_sebu_years_of_coffee + $tupi_years_of_coffee + $tampakan_years_of_coffee + $tboli_years_of_coffee;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1"># of Years in <br> Coffee Farming</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_years_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_years_of_coffee }}</td>
          </tr>
          <tr>
            <th class="border text-center whitespace-nowrap px-2 text-xs font-medium text-gray-600 py-2"></th>
          </tr>
          <tr>
            @php
            $sub_total_north_area_of_coffee = $banisilan_area_of_coffee + $magpet_area_of_coffee + $alamada_area_of_coffee + $matalam_area_of_coffee + $makilala_area_of_coffee + $makilala_area_of_coffee + $kidapawan_area_of_coffee;
            $sub_total_south_area_of_coffee = $lake_sebu_area_of_coffee + $tupi_area_of_coffee + $tampakan_area_of_coffee + $tboli_area_of_coffee;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Area Planted <br> for Coffee</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_area_of_coffee }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_area_of_coffee }}</td>
          </tr>
          <tr>
            <th class="border text-center whitespace-nowrap px-2 text-xs font-medium text-gray-600 py-2"></th>
          </tr>
          <tr>
            @php
            $sub_total_north_planting_materials = $banisilan_planting_materials + $magpet_planting_materials + $alamada_planting_materials + $matalam_planting_materials + $makilala_planting_materials + $makilala_planting_materials + $kidapawan_planting_materials;
            $sub_total_south_planting_materials = $lake_sebu_planting_materials + $tupi_planting_materials + $tampakan_planting_materials + $tboli_planting_materials;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1"># of <br> Planting Materials</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_planting_materials }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_planting_materials }}</td>
          </tr>
          <tr>
            <th class="border text-center whitespace-nowrap px-2 text-xs font-medium text-gray-600 py-2"></th>
          </tr>
          <tr>
            @php
            $sub_total_north_years_maturity = $banisilan_years_maturity + $magpet_years_maturity + $alamada_years_maturity + $matalam_years_maturity + $makilala_years_maturity + $makilala_years_maturity + $kidapawan_years_maturity;
            $sub_total_south_years_maturity = $lake_sebu_years_maturity + $tupi_years_maturity + $tampakan_years_maturity + $tboli_years_maturity;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Years <br> Maturity of Coffee</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_years_maturity }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_years_maturity }}</td>
          </tr>
          <tr>
            <th class="border text-center whitespace-nowrap px-2 text-xs font-medium text-gray-600 py-2"></th>
          </tr>
          <tr>
            @php
            $sub_total_north_area_of_expansion = $banisilan_area_of_expansion + $magpet_area_of_expansion + $alamada_area_of_expansion + $matalam_area_of_expansion + $makilala_area_of_expansion + $makilala_area_of_expansion + $kidapawan_area_of_expansion;
            $sub_total_south_area_of_expansion = $lake_sebu_area_of_expansion + $tupi_area_of_expansion + $tampakan_area_of_expansion + $tboli_area_of_expansion;
            @endphp
            <td class="border text-gray-600 text-sm px-3 break py-1">Area of <br> Expansion</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $banisilan_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $magpet_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $alamada_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $matalam_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $makilala_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $kidapawan_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_north_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $lake_sebu_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tupi_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tampakan_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $tboli_area_of_expansion }}</td>
            <td class="border text-gray-600 text-center px-3 whitespace-nowrap py-1">{{ $sub_total_south_area_of_expansion }}</td>
          </tr>
          {{-- <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">Other Region</td>
          </tr> --}}


        </tbody>
      </table>

  </div>
</div>
