<div x-data x-animate>
    <div class="flex justify-between">
        <div>
            <div>
                <x-button label="Back" class="font-bold" icon="arrow-left" positive  wire:click="redirectToMasterlist" />
              </div>
          </div>
        <div class="select flex space-x-2 items-end">
            <x-native-select label="Report" wire:model="report_get">
                <option >Select Report</option>
              <option value="1">Profile Of Respondents</option>
              <option value="2">Planting Materials</option>
              <option value="3">Fertilizers</option>
              <option value="4">Pesticides</option>
              <option value="5">Prunning, Harvesting, Postharvest Materials</option>
              <option value="6">Postharvest Transportation</option>
              <option value="7">Coffee Farming</option>
            </x-native-select>
            <x-button.circle positive icon="refresh" spinner="report_get" />
          </div>
    </div>

  @if ($report_get)
    <div class="mt-5 flex justify-between items-end">
      <div class="mt-5 flex space-x-2 ">
        <x-button label="PRINT" sm dark icon="printer" class="font-bold"
          @click="printOut($refs.printContainer.outerHTML);" />
        {{-- <x-button label="EXPORT" sm positive wire:click="exportReport({{ $report_get }})"
          spinner="exportReport({{ $report_get }})" icon="document-text" class="font-bold" /> --}}
      </div>
      @if ($report_get == 1)
        {{-- <div class="flex space-x-2">
          <x-datetime-picker label="From" placeholder="Select Date" without-time wire:model="date_from" />
          <x-datetime-picker label="To" placeholder="Select Date" without-time wire:model="date_to" />
            <x-select label="Select Status" multiselect placeholder="All" wire:model="status">
                <x-select.option label="Encoded" value="ENCODED" />
                <x-select.option label="Transmitted" value="TRANSMITTED" />
                <x-select.option label="Paid" value="PAID" />
                <x-select.option label="Unpaid" value="UNPAID" />
            </x-select>
        </div> --}}
      @endif
    </div>
  @endif
  <div class="mt-5 border rounded-lg p-4" x-ref="printContainer">
    @switch($report_get)
      @case(1)
        @include('reports.respondent_profiles')
      @break
      @case(2)
        @include('reports.sources_of_planting_materials')
      @break
      @case(3)
        @include('reports.fertilizers')
      @break
      @case(4)
      @include('reports.pesticides')
      @break
      @case(5)
      @include('reports.prunning-harvesting-postharvest')
      @break
      @case(6)
      @include('reports.postharvest-transportation')
      @break
      @case(7)
      @include('reports.coffee_farming')
      @break
      @default
        <h1 class="text-gray-600">Select report to generate.</h1>
      @break
    @endswitch
  </div>
</div>
