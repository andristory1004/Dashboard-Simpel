<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-3xl font-bold text-black ">Grafik Real Count</h1>
        </div>
    </div>
    <div class="flex p-3 space-x-10 w-auto justify-center">
        <table class="bg-white h-full">
            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center" rowspan="2">No
                    </th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center" rowspan="2">
                        Nama Provinsi</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center" colspan="3">
                        Perolehan
                        Suara</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center" rowspan="2">
                        Total</th>
                </tr>
                <tr>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center">Paslon 1</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center">Paslon 1</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase text-center">Paslon 1</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="w-auto px-4  text-left">1</td>
                    <td class="w-auto px-4  text-left">Jawa Barat </td>
                    <td class="w-auto px-4  text-left">22</td>
                    <td class="w-auto px-4  text-left">38</td>
                    <td class="w-auto px-4  text-left">29</td>
                    <td class="w-auto px-4  text-left">89</td>
                </tr>
                <tr class="bg-gray-200">
                    <td class="w-auto px-4 text-left">2</td>
                    <td class="w-auto px-4  text-left">Jawa Timur</td>
                    <td class="w-auto px-4  text-left">22</td>
                    <td class="w-auto px-4  text-left">38</td>
                    <td class="w-auto px-4 text-left">29</td>
                    <td class="w-auto px-4  text-left">89</td>
                </tr>

            </tbody>
        </table>
        <div class="text-center">
            <h1>Grafik Real Count <br> Agustus 2022</h1>
            <div id="myCharts" class="h-96"></div>
        </div>
    </div>
</x-admin-layout>
