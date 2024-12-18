<div x-data x-animate>
    <div class="">
        <div class="select flex space-x-2 items-end justify-end">
              {{-- <x-native-select label="Report Type" wire:model="report_type">
                  <option>Select Report Type</option>
                  @foreach ($report_types as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                  @endforeach
              </x-native-select>
              <x-native-select label="Report Name" wire:model="report_name">
                <option >Select Report Name</option>
                @if (!empty($report_names) && !empty($report_type))
                  @foreach ($report_names as $key => $name)
                      <option value="{{ $key }}">{{ $name }}</option>
                  @endforeach
                @endif
              </x-native-select>
              <x-button.circle positive icon="refresh" spinner="report_get" /> --}}
          </div>
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
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    datasets: [{
      label: 'Schedule Per Month',
      data: [48, 58, 44, 31, 32, 24, 48, 58, 44, 31, 32, 24],
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
