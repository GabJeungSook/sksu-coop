<div>
    <div>
        <div class="flex justify-end">
            <x-button label="Create Schedule" class="font-bold" icon="plus" positive />
          </div>
      </div>
      <div class="mt-5">
          <div id='calendar'></div>
      </div>
    {{-- <div class="flex justify-center items-center">
        <div class="animate-pulse relative block w-full rounded-lg  border-gray-300 text-center focus:outline-none">
            <svg class="mx-auto h-24 w-24 text-green-700" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            <span class="mt-2 block text-2xl font-semibold text-green-700">Content Coming Soon</span>
        </div>
    </div> --}}
    <script>

        document.addEventListener('DOMContentLoaded', function() {
          var calendarEl = document.getElementById('calendar');
          var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
          });
          calendar.render();
        });
  
      </script>
</div>
