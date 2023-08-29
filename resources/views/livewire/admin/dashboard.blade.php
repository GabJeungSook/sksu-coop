<div>
    <div>
        {{-- <h3 class="text-base font-semibold leading-6 text-gray-900">Last 30 days</h3> --}}

        {{-- <dl class=" grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
          <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
              <div class="absolute rounded-md bg-green-600 p-3">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
              </div>
              <p class="ml-16 truncate text-sm font-medium text-gray-500">Total Membership</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
              <p class="text-2xl font-semibold text-gray-900">{{$user_count}}</p>
              <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
              </p>
              <div class="absolute inset-x-0 bottom-0 bg-green-100 px-4 py-4 sm:px-6">
              </div>
            </dd>
          </div>
          <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
              <div class="absolute rounded-md bg-green-600 p-3">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
              </div>
              <p class="ml-16 truncate text-sm font-medium text-gray-500">Active Members</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
              <p class="text-2xl font-semibold text-gray-900">{{$active_count}}</p>
              <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
              </p>
              <div class="absolute inset-x-0 bottom-0 bg-green-100 px-4 py-4 sm:px-6">
              </div>
            </dd>
          </div>
          <div class="relative overflow-hidden rounded-lg bg-white px-4 pb-12 pt-5 shadow sm:px-6 sm:pt-6">
            <dt>
              <div class="absolute rounded-md bg-green-600 p-3">
                <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
              </div>
              <p class="ml-16 truncate text-sm font-medium text-gray-500">Terminated Members</p>
            </dt>
            <dd class="ml-16 flex items-baseline pb-6 sm:pb-7">
              <p class="text-2xl font-semibold text-gray-900">{{$terminated_count}}</p>
              <p class="ml-2 flex items-baseline text-sm font-semibold text-green-600">
              </p>
              <div class="absolute inset-x-0 bottom-0 bg-green-100 px-4 py-4 sm:px-6">
              </div>
            </dd>
          </div>
        </dl> --}}
        <div class="mt-6">
            <canvas id="myChart" height="100"></canvas>
          </div>
      </div>

      @push('scripts')
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Banisilan', 'Magpet', 'Alamada', 'Matalam', 'Makilala', 'Kidapawan'],
    datasets: [{
      label: 'Respondents North Cotabato',
      data: [48, 58, 44, 31, 32, 24],
      borderWidth: 1,
      backgroundColor: [
              '#04414c',
              '#04414c',
              '#04414c',
              '#04414c',
              '#04414c',
              '#04414c'
            ]
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
        });

      </script>
      @endpush

</div>
