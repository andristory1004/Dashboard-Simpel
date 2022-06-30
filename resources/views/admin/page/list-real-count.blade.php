<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Data Real Count</h1>
            <button
                class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue-hover-green md:text-lg lg:txt-lg"
                data-bs-target="#modal" data-bs-toggle="modal">
                <i class="fas fa-plus"></i>
                Data Suara
            </button>
        </div>
    </div>

    <div class="p-3 overflow-auto">
        <table class="max-w-full bg-white border-2 border-black">
            <thead class="text-white bg-gray-800 border-2 border-black">
                <tr class="text-sm font-semibold text-center uppercas">
                    <th class="w-auto px-4 py-3 border-r-2 border-white text-center" rowspan="2">No</a></th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Provinsi</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Kabupaten/Kota</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Kecamatan</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Kelurahan</th>
                    <th class="w-32 px-4 py-3 border-r-2 border-white text-center" rowspan="2">No TPS</th>
                    <th class="w-32 px-4 py-3 border-r-2 border-b-2 border-white text-center" colspan="3">Suara</th>
                    <th class="w-32 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Total Suara</th>
                    <th class="w-32 px-4 py-3 border-r-2 border-white text-center" rowspan="2">Relawan/Saksi</th>
                    <th class="w-auto px-4 py-3" rowspan="2">Keterangan</th>
                </tr>
                <tr class="text-sm font-semibold text-center uppercas">
                    <th class="w-auto px-4 py-3 border-r-2 border-white text-center">Sah</th>
                    <th class="w-auto px-4 py-3 border-r-2 border-white text-center">Tidak Sah</th>
                    <th class="w-auto px-4 py-3 border-r-2 border-white text-center">Blangko</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="text-xs md:text-sm lg:text-sm">
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">1</td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Jawa Barat</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Garut</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Tarogong Kidul</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Sukajaya</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">M Thorik S</button></td>
                    <td class="px-4 py-3 text-left border-b-2 border-black">-</td>
                </tr>

                <tr class="text-xs md:text-sm lg:text-sm">
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">1</td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Jawa Barat</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Garut</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Tarogong Kidul</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Sukajaya</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">M Thorik S</button></td>
                    <td class="px-4 py-3 text-left border-b-2 border-black">-</td>
                </tr>

                <tr class="text-xs md:text-sm lg:text-sm">
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">1</td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Jawa Barat</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Garut</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Tarogong Kidul</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Sukajaya</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">M Thorik S</button></td>
                    <td class="px-4 py-3 text-left border-b-2 border-black">-</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <!-- Modal Input Data Suara -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="modal" tabindex="-1" aria-labelledby="exampleModalLgLabel" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg relative w-auto pointer-events-none">
          <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">

            {{-- Header Modal --}}
            <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Form Perolehan Suara</h1>
              <button type="button"
                class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- End Header Modal --}}

            {{-- Body Modal --}}
            <div class="modal-body relative p-4">
                <div class="min-w-full">
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-xl font-bold text-black md:text-2xl lg:text-2xl font-oswald">Data Wilayah</h1>
                    </div>
                </div>

                <div class="overflow-auto">
                    <form action="" class="mx-5 mb-3 space-y-3 min-w-full mt-2">
                        <div class="flex space-x-5">
                            <div class="space-y-3">
                                <input type="text"
                                    class=" form-control w-52 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="Nama Relawan/Saksi" />
                                <input type="email"
                                    class=" form-control w-52 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="Email" />
                                <input type="number"
                                    class=" form-control w-52 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    id="exampleFormControlInput1" placeholder="No Telepon" />
                                <select
                                    class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-bases font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="provinsi">
                                <option selected>Provinsi</option>
                                @foreach ($provinces as $provinsi)
                                    <option value="{{$provinsi->id}}">{{$provinsi->name}}</option>
                                @endforeach
                                </select>
                                <select
                                    class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="kabupaten">
                                    <option selected>Kabupaten/Kota</option>
                                </select>
                                <select
                                    class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="kecamatan">
                                    <option selected>Kecamatan</option>
                                </select>
                                <select
                                    class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="kelurahan">
                                    <option selected>Kelurahan</option>
                                </select>
                                <select
                                    class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    aria-label=".form-select-lg example"
                                    id="noTps">
                                    <option selected>No TPS</option>
                                </select>
                            </div>
    
                            <div class="space-y-3">
                                <div class="flex space-x-3">
                                    <div class="w-44 h-64 bg-gray-400">

                                    </div>
                                    <div class="w-44 h-64 bg-gray-400">

                                    </div>
                                    <div class="w-44 h-64 bg-gray-400">

                                    </div>
                                </div>
                                <div class="flex space-x-3">
                                    <input type="text"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="Nama Relawan/Saksi" />
                                    <input type="email"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="Email" />
                                    <input type="number"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="No Telepon" />
                                </div>
                                <div class="flex space-x-3">
                                    <input type="text"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="Nama Relawan/Saksi" />
                                    <input type="email"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="Email" />
                                    <input type="number"
                                        class=" form-control w-44 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="exampleFormControlInput1" placeholder="No Telepon" />
                                </div>
                            </div>
    
                            <div class="space-y-3">
                                <label for="formC1">Foto Form C1</label>
                                <input type="number"
                                        class=" form-control w-52 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        id="formC1" placeholder="No Telepon" />
                                <div class="flex space-x-3 font-bold w-52">
                                    <p class="text-left">
                                        Note:
                                    </p>
                                    <p class="text-justify">
                                        Laporan ini harus di Upload sesuai dengan Suara pilihin, tidak boleh di lebih lebihkan atau di kurangi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- End Body Modal --}}

            {{-- Footer Modal --}}
            <div
                class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                <button
                    class="px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-blue-hover-green"
                    data-bs-dismiss="modal">
                        Simpan
                </button>
                <button
                    class="flex items-center space-x-1 px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-red-hover-green"
                    data-bs-dismiss="modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                        <span>Tutup</span>
                </button>
            </div>
            {{-- End Footer Modal --}}
          </div>
        </div>
      </div>
    {{-- End Modal Input Data Suara --}}

</x-admin-layout>
