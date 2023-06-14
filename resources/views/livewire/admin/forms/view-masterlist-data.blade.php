<div>
    <div>
        <div class="px-4 sm:px-0">
          <h3 class="text-base font-semibold leading-7 text-gray-900">Member Information</h3>
          <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details</p>
        </div>
        <div class="mt-6">
          <dl class="grid grid-cols-3 sm:grid-cols-3">
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Member ID</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->member_id}}</dd>
              </div>
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">
                {{strtoupper($record->first_name) . ' ' . strtoupper($record->middle_name). ' ' .strtoupper($record->last_name)}}
            </dd>
            </div>
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">TIN</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->tin_number}}</dd>
            </div>
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Address</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->address)}}</dd>
            </div>
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
              <dt class="text-sm font-medium leading-6 text-gray-900">Gender</dt>
              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->gender)}}</dd>
            </div>
            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Date of Birth</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{\Carbon\Carbon::parse($record->date_of_birth)->format('F d, Y')}}</dd>
              </div>
              <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Age</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->age}}</dd>
              </div>
              <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                <dt class="text-sm font-medium leading-6 text-gray-900">Civil Status</dt>
                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->civil_status)}}</dd>
              </div>
              <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Highest Educational Attainment</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->educational_attainment)}}</dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                  <dt class="text-sm font-medium leading-6 text-gray-900">Occupation / Source of Income</dt>
                  <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->occupation)}}</dd>
                </div>
                <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                    <dt class="text-sm font-medium leading-6 text-gray-900">No. of Dependent</dt>
                    <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->dependent_number}}</dd>
                  </div>
                  <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                      <dt class="text-sm font-medium leading-6 text-gray-900">Religion / Social Afilliation</dt>
                      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->religion)}}</dd>
                    </div>
                    <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                      <dt class="text-sm font-medium leading-6 text-gray-900">Annual Income</dt>
                      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">₱{{number_format($record->income, 2, '.', ',')}}</dd>
                    </div>
                    <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Date Accepted</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{\Carbon\Carbon::parse($record->date_accepted)->format('F d, Y')}}</dd>
                      </div>
                      <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                          <dt class="text-sm font-medium leading-6 text-gray-900">BOD RES No.</dt>
                          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->bod_number}}</dd>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                          <dt class="text-sm font-medium leading-6 text-gray-900">Type / Kind of Membership</dt>
                          <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->membership_type)}}</dd>
                        </div>
                        <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                            <dt class="text-sm font-medium leading-6 text-gray-900">Number of Shares</dt>
                            <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{$record->number_of_shares}}</dd>
                          </div>
                          <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Amount Subscribed</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">₱{{number_format($record->amount_subscribed, 2, '.', ',')}}</dd>
                            </div>
                            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                              <dt class="text-sm font-medium leading-6 text-gray-900">Initial Paid Up</dt>
                              <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">₱{{number_format($record->initial_paid_up, 2, '.', ',')}}</dd>
                            </div>
                            <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">BOD Resolution</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{strtoupper($record->bod_resolution)}}</dd>
                              </div>
                              <div class="border-t border-gray-100 px-4 py-6 sm:col-span-1 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Date</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:mt-2">{{\Carbon\Carbon::parse($record->date_created)->format('F d, Y')}}</dd>
                              </div>
          </dl>
        </div>
      </div>


</div>
