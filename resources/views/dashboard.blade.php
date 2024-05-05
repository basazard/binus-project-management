<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="grid grid-cols-3 py-12 px-6 space-x-10">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 flex justify-between">
        <h1>Projects</h1>
        <span>{{ $project }}</span>
      </div>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 flex justify-between">
        <h1>Completed Tasks</h1>
        <span>{{ $completed }}</span>
      </div>
    </div>

    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 text-gray-900 flex justify-between">
        <h1>Uncompleted Tasks</h1>
        <span>{{ $uncompleted }}</span>
      </div>
    </div>
  </div>

  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mx-6">
    <div class="p-6 text-gray-900 flex justify-between">
      <canvas id="myChart"></canvas>
    </div>
  </div>

  @push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    var ctx = document.getElementById('myChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: {!! json_encode($projectYearly) !!},
              datasets: [{
                  label: 'Data',
                  data: [12, 19, 3, 5, 2, 3],
                  backgroundColor: 'rgba(255, 99, 132, 0.2)',
                  borderColor: 'rgba(255, 99, 132, 1)',
                  borderWidth: 1
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
  </script>
  @endpush
</x-app-layout>