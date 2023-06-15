<div>
    <div class="flex space-x-4">
        <div class="space-y-3">
            <img src="{{$record->image_path == null ? asset('images/avatar.png') : Storage::url($record->image_path) }}" class="h-48 w-48 rounded-full" alt="">
            <x-button positive icon="photograph" class="w-48" wire:click="$set('updateImage', true)"  label="Change Photo" />
        </div>
    </div>
    <div class="mt-3 overflow-hidden bg-gray-50 shadow sm:rounded-lg">
        <div class="border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-900 space-x-3">
                <span>Member ID:</span>
                <span>{{$record->member_id}}</span>
                @if ($record->bod_resolution != null || $record->bod_resolution != '')
                <span class="inline-flex items-center gap-x-1.5 rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-700">
                    <svg class="h-1.5 w-1.5 fill-red-500" viewBox="0 0 6 6" aria-hidden="true">
                      <circle cx="3" cy="3" r="3" />
                    </svg>
                    Terminated
                  </span>
                @else
                <span class="inline-flex items-center gap-x-1.5 rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">
                    <svg class="h-1.5 w-1.5 fill-green-500" viewBox="0 0 6 6" aria-hidden="true">
                      <circle cx="3" cy="3" r="3" />
                    </svg>
                    Active
                  </span>
                @endif

            </dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Full Name:</span>  <span>{{strtoupper($record->first_name).' '.strtoupper($record->middle_name).' '.strtoupper($record->last_name)}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>TIN:</span>  <span>{{$record->tin_number == null ? '---' : $record->tin_number}}</span></dt>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Address:</span>  <span>{{$record->address == null ? '---' : strtoupper($record->address)}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Birthday:</span>  <span>{{$record->date_of_birth == null ? '---' : Carbon\Carbon::parse($record->date_of_birth)->format('F d, Y')}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Age:</span>  <span>{{$record->age == 0 ? '---' : $record->age}}</span></dt>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                @php
                $gender = '';
                $civil_status = '';
                    if($record->gender != null){
                        switch ($record->gender) {
                            case 'M':
                                $gender = 'Male';
                                break;
                            case 'F':
                                $gender = 'Female';
                                break;
                            default:
                                # code...
                                break;
                        }
                    }else{
                        $gender = '---';
                    }

                    if($record->civil_status != null){
                        switch ($record->gender) {
                            case 'M':
                                $civil_status = 'Married';
                                break;
                            case 'S':
                                $civil_status = 'Single';
                                break;
                            default:
                                # code...
                                break;
                        }
                    }else{
                        $civil_status = '---';
                    }
                @endphp
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Gender:</span>  <span>{{strtoupper($gender)}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Civil Status:</span>  <span>{{strtoupper($civil_status)}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Religion / Social Afilliation:</span>  <span>{{$record->religion == null ? '---' : strtoupper($record->religion)}}</span></dt>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Number of Dependent:</span>  <span>{{$record->dependent_number == null ? '---' : $record->dependent_number}}</span></dt>
            </div>
          </dl>
        </div>
      </div>

      <div class="mt-3 overflow-hidden bg-gray-50 shadow sm:rounded-lg">
        <div class="border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Highest Educational Attainment:</span>  <span>{{$record->educational_attainment == null ? '---' : $record->educational_attainment}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Occupation:</span>  <span>{{$record->occupation == null ? '---' :   $record->occupation}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Annual Income:</span>  <span>₱ {{$record->income == null ? '---' : number_format($record->income, 2, '.', ',')}}</span></dt>
            </div>
          </dl>
        </div>
      </div>

      <div class="mt-3 overflow-hidden bg-gray-50 shadow sm:rounded-lg">
        <div class="border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Date Accepted:</span>  <span>{{$record->date_accepted == null ? '--- ': Carbon\Carbon::parse($record->date_accepted)->format('F d, Y')}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>BOD Resolution Number:</span>  <span>{{$record->bod_number == 0 ? '---' : $record->bod_number}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Type / Kind of Membership:</span>  <span>{{$record->membership_type == null ? '---' : strtoupper($record->membership_type)}}</span></dt>
            </div>
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Number of Shares Subscribed:</span>  <span>{{$record->number_of_shares == null ? '---' : $record->number_of_shares.' SHARES'}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Amount Subscribed:</span>  <span>₱ {{$record->amount_subscribed == null ? '---' : number_format($record->amount_subscribed, 2, '.', ',')}}</span></dt>
                <dt class="text-sm font-medium text-gray-900 space-x-3"><span>Initial Paid Up:</span>  <span>₱ {{$record->initial_paid_up == null ? '---' : number_format($record->initial_paid_up, 2, '.', ',')}}</span></dt>
            </div>
          </dl>
        </div>
      </div>

      @if ($record->bod_resolution != null || $record->bod_resolution != '')
      <div class="mt-3 overflow-hidden bg-gray-50 shadow sm:rounded-lg">
        <div class="border-t border-gray-100">
          <dl class="divide-y divide-gray-100">
            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-900 space-x-3"><span>BOD Resolution:</span>  <span>{{$record->bod_resolution}}</span></dt>
              <dt class="text-sm font-medium text-gray-900 space-x-3 col-start-3"><span>Date:</span>  <span>{{ Carbon\Carbon::parse($record->date_created)->format('F d, Y')}}</span></dt>
            </div>
          </dl>
        </div>
      </div>
      @endif



      <x-modal.card title="Change Photo" align="center" blur wire:model.defer="updateImage">
        {{$this->form}}
        <x-button positive class="w-full mt-2" wire:click="save"  spinner="save" label="Save" />
     </x-modal.card>
      </div>


</div>
