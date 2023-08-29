<div>
    <style>
        @media print {
          @page {
            size: auto;
          }
        }
    </style>
  <div class="flex justify-center align-center space-x-1">
    <div class="flex">
      {{-- <img src="{{ asset('images/coop_logo_1.png') }}" class="h-16" alt="">
      <img src="{{ asset('images/coop_logo.png') }}" class="h-16" alt=""> --}}
    </div>
    <div>
      {{-- <h1 class="text-xl font-bold text-gray-700"> DOLEFIL AGRARIAN REFORM BENEFICIARIES COOP.</h1> --}}
      {{-- <h1>DARBC Complex, Brgy. Cannery Site, Polomolok, South Cotabato</h1> --}}
    </div>
  </div>
  <h1 class="text-sm text-center mt-2">EJC Montilla, Tacurong City, Sultan Kudarat</h1>
  <h1 class="text-xl mt-5 text-center font-bold text-gray-700">All Members</h1>
  <div class="mt-5 overflow-x-auto">
    <table id="example" class="table-auto mt-5" style="width:100%">
      <thead class="font-normal">
        <tr>
          <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">LAST NAME</th>
          <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">FIRST NAME
          </th>
          <th class="border text-left whitespace-nowrap px-2 text-sm font-medium text-gray-500 py-2">MIDDLE NAME</th>
        </tr>
      </thead>
      <tbody class="">
        @foreach ($all_members as $item)
          <tr>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">{{ $item->last_name }}</td>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">{{ $item->first_name }}</td>
            <td class="border text-gray-600  px-3 whitespace-nowrap py-1">{{ $item->middle_name }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mt-10 flex justify-start">
        <div class="mt-5 flex items-center w-1/4">
          <h1 class="mr-3 mb-3">Prepared By:</h1>
          <div class="border-b border-gray-500 flex-grow"></div>
        </div>
      </div>

  </div>
</div>
