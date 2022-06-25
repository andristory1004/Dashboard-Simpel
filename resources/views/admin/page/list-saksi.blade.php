<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar Saksi</h1>
            <button
                class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue-hover-green md:text-lg lg:txt-lg"
                data-bs-target="#modal" data-bs-toggle="modal">
                <i class="fas fa-plus"></i>
                Tambah Saksi
            </button>
        </div>
    </div>
    
    <div class="p-3 overflow-auto">
        <table class="min-w-full bg-white border-2 border-black">
            <thead class="text-white bg-gray-800 border-2 border-black">
                <tr class="text-sm font-semibold text-center uppercas">
                    <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                    <th class="w-3/12 px-4 py-3 border-r-2 border-white">Nama</th>
                    <th class="w-3/12 px-4 py-3 border-r-2 border-white">Email</th>
                    <th class="w-2/12 px-4 py-3 border-r-2 border-white">No Telepon</th>
                    <th class="w-2/12 px-4 py-3 border-r-2 border-white">Provinsi</th>
                    <th class="w-2/12 px-4 py-3 border-r-2 border-white">Kabupaten</th>
                    <th class="w-2/12 px-4 py-3 border-r-2 border-white">Kecamatan</th>
                    <th class="w-2/12 px-4 py-3 border-r-2 border-white">Kelurahan</th>
                    <th class="w-1/12 px-4 py-3 ">No TPS</th>
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
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">TPS 5</button></td>
                </tr>
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
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">TPS 5</button></td>
                </tr>
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
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">TPS 5</button></td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Modal Input TPS -->
    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="relative w-auto pointer-events-none modal-dialog">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
                {{-- Title Modal --}}
                <div class="px-3 py-3 bg-blue rounded-t-2xl">
                    <h1 class="text-3xl font-bold text-black">Form Saksi</h1>
                </div>
                {{-- End Titel Modal --}}
                <div>
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-2xl font-bold text-black ">Data Saksi</h1>
                    </div>
                    <form action="" class="mx-5 mb-3 space-y-3">
                        <div class="space-y-3">
                            <input type="text"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Nama" />
                            <input type="text"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Email" />
                            <input type="number"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="No Telepon" />
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Provinsi</option>
                                <option value="1">Jawa Barat</option>
                                <option value="2">Admin</option>
                                <option value="3">View Only</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kabupaten</option>
                                <option value="1">Garut</option>
                                <option value="2">Admin</option>
                                <option value="3">View Only</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kecamatan</option>
                                <option value="1">Tarogong Kidul</option>
                                <option value="2">Admin</option>
                                <option value="3">View Only</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kelurahan</option>
                                <option value="1">Super Admin</option>
                                <option value="2">Admin</option>
                                <option value="3">View Only</option>
                            </select>
                            <select
                                class="form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>No TPS</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
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
                        class="flex items-center space-x-3 px-5 py-2 text-xl font-bold text-white transition duration-150 ease-in-out rounded shadow-md bg-red-hover-green"
                        data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                          </svg>
                        <span>Tutup</span>
                    </button>
                </div>
                {{-- End Button Modal --}}
            </div>
        </div>
    </div>
    {{-- End Modal Input TPS --}}
</x-admin-layout>
