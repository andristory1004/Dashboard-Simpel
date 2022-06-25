<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Grafik Real Count</h1>
        </div>
    </div>
    <div class="w-auto p-3 space-x-10 space-y-5 md:flex md:space-x-0">
        <div class="overflow-auto md:w-8/12">
            <table class="min-w-full bg-white ">
                <thead class="text-white bg-gray-800">
                    <tr>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase" rowspan="2">No
                        </th>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase" rowspan="2">
                            Nama Provinsi</th>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase" colspan="3">
                            Perolehan Suara</th>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase" rowspan="2">
                            Total</th>
                    </tr>
                    <tr>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase">Paslon 1</th>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase">Paslon 1</th>
                        <th class="w-auto px-4 py-3 text-sm font-semibold text-center uppercase">Paslon 1</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr>
                        <td class="w-auto px-4 text-center">1</td>
                        <td class="w-auto px-4 text-left">Jawa Barat </td>
                        <td class="w-auto px-4 text-center">22</td>
                        <td class="w-auto px-4 text-center">38</td>
                        <td class="w-auto px-4 text-center">29</td>
                        <td class="w-auto px-4 text-center">89</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="w-auto px-4 text-center">2</td>
                        <td class="w-auto px-4 text-left">Jawa Timur</td>
                        <td class="w-auto px-4 text-center">22</td>
                        <td class="w-auto px-4 text-center">38</td>
                        <td class="w-auto px-4 text-center">29</td>
                        <td class="w-auto px-4 text-center">89</td>
                    </tr>
    
                </tbody>
            </table>
        </div>
        <div class=" text-center md:mx-5 md:w-4/12">
            <h1 class="font-oswald font-bold">Grafik Real Count <br> Agustus 2022</h1>
            <div class="container">
                <canvas id="config" width="350" height="350"></canvas>
            </div>
        </div>
    </div>
    <script>
        var ctx = document.getElementById("config");
        var config = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Paslon 1', 'Paslon 2', 'Paslon 3', ],
                datasets: [{
                    data: [45, 20, 35, ],
                    backgroundColor: [
                        "blue",
                        "red",
                        "yellow"
                    ],

                }]
            },
            options: {
                plugins: {
                    datalabels: {
                        display: true,
                        borderRadius: 3,
                        font: {
                            size: 18,
                        },
                        
                    },
                }
            }
        });
    </script>
</x-admin-layout>