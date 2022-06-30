<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

<div class="bg-blue">
    <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
        <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">List Quick Count</h1>
        <button
            class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue-hover-green md:text-lg lg:txt-lg"
            data-bs-target="#modal" data-bs-toggle="modal">
            <i class="fas fa-plus"></i>
            Tambah Data
        </button>
    </div>
</div>

<div class="p-3 overflow-auto">
    <table class="min-w-full bg-white border-2 border-black">
        <thead class="text-white bg-gray-800 border-2 border-black">
            <tr class="text-sm font-semibold text-center uppercas">
                <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Nama</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">NiK</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">No Telepon</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Provinsi</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Kabupaten</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Kecamatan</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">Kelurahan</th>
                <th class="w-auto px-4 py-3 border-r-2 border-white">No TPS</th>
                <th class="w-auto px-4 py-3 ">Relawan</th>
            </tr>
        </thead>
        <tbody class="text-gray-700">
            <tr class="text-xs md:text-sm lg:text-sm">
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">1</td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Andri Ardiansyah</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">andri.story10042gmail.com</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">0859113487778</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Jawa Barat</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Garut</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Tarogong Kidul</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">Sukajaya</button></td>
                <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">TPS 5</button></td>
                <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                        type="button">M Thorik</button></td>
            </tr>
        </tbody>
    </table>
</div>

</x-admin-layout>