<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-3xl font-bold text-black ">List Data Real Count</h1>
            <button
                class="px-3 py-2 font-bold text-white transition duration-150 ease-in-out shadow-md rounded-xl bg-blue-hover-green"
                data-bs-target="#modal" data-bs-toggle="modal">
                <i class="fas fa-plus"></i>
                Tambah Data Suara
            </button>
        </div>
    </div>

    <div class="p-3 overflow-auto">
        <table class="bg-white max-w-screen">
            <thead class="text-white bg-gray-800">
                <tr>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">No</a>
                    </th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Provinsi</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Kabupaten/Kota</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Kecamatan</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Kelurahan</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">No TPS</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Suara Sah</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Suara Tidak Sah</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Blangko</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Total Suara</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Keterangan</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Total Suara</th>
                    <th class="w-auto px-4 py-3 text-sm font-semibold text-left uppercase">Relawan/Saksi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr>
                    <td class="px-4 py-3 text-left">1</td>
                    <td class="px-4 py-3 text-left"><button data-bs-target="#editData" data-bs-toggle="modal"
                            type="">Jawa Barat</button></td>
                    <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Garut</button></td>
                    <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Tarogong Kidul</button></td>
                    <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Sukajaya</button></td>
                    <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                            <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                type="button">10</button></td>
                                <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                    type="button">10</button></td>
                                    <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                        type="button">10</button></td>
                                        <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                            type="button">10</button></td>
                                            <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                                type="button">10</button></td>
                                                <td class="px-4 py-3 text-left "><button data-bs-target="#editData" data-bs-toggle="modal"
                                                    type="button">10</button></td>
                    <td class="px-4 py-3 text-left ">-</td>

                </tr>
                <tr class="bg-gray-200">
                    <td class="w-auto px-4 py-3 text-left">2</td>
                    <td class="w-auto px-4 py-3 text-left">Jawa Barat</td>
                    <td class="w-auto px-4 py-3 text-left">Garut</td>
                    <td class="w-auto px-4 py-3 text-left">Tarogong Kidul</td>
                    <td class="w-auto px-4 py-3 text-left">Sukagalih</td>
                    <td class="w-auto px-4 py-3 text-left">5</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                    <td class="w-auto px-4 py-3 text-left">-</td>
                </tr>

            </tbody>
        </table>
    </div>
    <!-- Modal Input TPS -->
    <div class="fixed top-0 left-0 hidden w-8/12 h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="relative w-auto pointer-events-none modal-dialog">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
                {{-- Title Modal --}}
                <div class="px-3 py-3 bg-blue rounded-t-2xl">
                    <h1 class="text-3xl font-bold text-black">Form Real Count</h1>
                </div>
                {{-- End Titel Modal --}}
                <div>
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-2xl font-bold text-black ">Daftar Wilayah</h1>
                    </div>
                    <form action="" class="mx-5 mb-3 space-y-3">
                        
                        <div class="flex space-x-5">
                            <div class="space-y-3">
                                <input type="text"
                                    class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="Nama Relawan" />
                                    <input type="text"
                                    class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="No Telepon" />
                                    <input type="text"
                                    class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="Email" />
                                <select
                                    class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example">
                                    <option selected>Provinsi</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select
                                    class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example">
                                    <option selected>Kabupaten/Kota</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select
                                    class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example">
                                    <option selected>Kecamatan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select
                                    class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example">
                                    <option selected>Kelurahan</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <select
                                    class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example">
                                    <option selected>No TPS</option>
                                    <option value="1">TPS 1</option>
                                    <option value="2">TPS 2</option>
                                    <option value="3">TPS 3</option>
                                </select>
                            </div>
                            <div>
                                <div class="flex space-x-3">

                                </div>
                                <div class="flex space-x-3">

                                </div>
                                <div class="flex space-x-3">
                                    <label for="floatingInput" class="">Paslon 1</label>
                                    <input type="text"
                                    class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="Email" />

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                {{-- Button Modal --}}
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                    <button
                        class="px-5 py-2 text-xl font-bold text-white transition duration-150 ease-in-out rounded shadow-md bg-blue-hover-green"
                        data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button
                        class="px-5 py-2 text-xl font-bold text-white transition duration-150 ease-in-out rounded shadow-md bg-red-hover-green"
                        data-bs-dismiss="modal">
                        <i class="fas fa-xmark"></i>
                        <span>Tutup</span>
                    </button>
                </div>
                {{-- End Button Modal --}}
            </div>
        </div>
    </div>
    {{-- End Modal Input TPS --}}


    <!-- Modal Edit TPS -->
    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="editData" tabindex="-1" aria-labelledby="editData" aria-hidden="true">
        <div class="relative w-auto pointer-events-none modal-dialog">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
                {{-- Title Modal --}}
                <div class="px-3 py-3 bg-blue rounded-t-2xl">
                    <h1 class="text-3xl font-bold text-black">Tambah TPS</h1>
                </div>
                {{-- End Titel Modal --}}
                <div>
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-2xl font-bold text-black ">Daftar Wilayah</h1>
                    </div>
                    <form action="" class="mx-5 space-y-3">
                        <div class="flex space-x-5">
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Provinsi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kabupaten/Kota</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="flex space-x-5">
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kecamatan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kelurahan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="flex justify-center space-x-5">
                            <input type="text"
                                class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Jumlah TPS" />
                        </div>
                        <div>
                            <textarea
                                class=" form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                        </div>
                    </form>
                </div>
                {{-- Button Modal --}}
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                    <button
                        class="px-5 py-2 text-xl font-bold text-white transition duration-150 ease-in-out rounded shadow-md bg-blue-hover-green"
                        data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button
                        class="px-5 py-2 text-xl font-bold text-white transition duration-150 ease-in-out rounded shadow-md bg-red-hover-green"
                        data-bs-dismiss="modal">
                        <i class="fas fa-xmark"></i>
                        <span>Tutup</span>
                    </button>
                </div>
                {{-- End Button Modal --}}
            </div>
        </div>
    </div>
    {{-- End Modal Edit TPS --}}

</x-admin-layout>
