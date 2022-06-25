<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar TPS</h1>
            <button
                class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue-hover-green md:text-lg lg:txt-lg"
                data-bs-target="#modal" data-bs-toggle="modal">
                <i class="fas fa-plus"></i>
                Tambah TPS
            </button>
        </div>
    </div>

    <div class="p-3 overflow-auto">
        <table class="max-w-full bg-white border-2 border-black">
            <thead class="text-white bg-gray-800 border-2 border-black">
                <tr class="text-sm font-semibold text-center uppercas">
                    <th class="w-auto px-4 py-3 border-r-2 border-white">No</a></th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white">Provinsi</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white">Kabupaten/Kota</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white">Kecamatan</th>
                    <th class="w-56 px-4 py-3 border-r-2 border-white">Kelurahan</th>
                    <th class="w-32 px-4 py-3 border-r-2 border-white">Jumlah TPS</th>
                    <th class="w-auto px-4 py-3">Keterangan</th>
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
                    <td class="px-4 py-3 text-left border-b-2 border-black">-</td>
                </tr>
                <tr class="text-xs md:text-sm lg:text-sm">
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black">2</td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Jawa Barat</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Garut</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Tarogong Kidul</button></td>
                    <td class="px-4 py-3 border-b-2 border-r-2 border-black"><button class="text-left" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">Sukabakti</button></td>
                    <td class="px-4 py-3 text-center border-b-2 border-r-2 border-black"><button class="text-center" data-bs-target="#editData" data-bs-toggle="modal"
                            type="button">10</button></td>
                    <td class="px-4 py-3 text-left border-b-2 border-black">-</td>
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
                    <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Form TPS</h1>
                </div>
                {{-- End Titel Modal --}}
                <div>
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-xl font-bold text-black md:text-2xl lg:text-2xl font-oswald">Daftar Wilayah</h1>
                    </div>
                    <form action="" class="mx-5 mb-3 space-y-3">
                        <div class="flex space-x-5">
                            <select
                                class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-bases font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Provinsi</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select
                                class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kabupaten/Kota</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="flex space-x-5">
                            <select
                                class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kecamatan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select
                                class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                aria-label=".form-select-lg example">
                                <option selected>Kelurahan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="flex justify-center space-x-5">
                            <input type="text"
                                class=" form-control w-1/2 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Jumlah TPS" />
                        </div>
                        <div>
                            <textarea
                                class=" form-control block w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                        </div>
                    </form>
                </div>
                {{-- Button Modal --}}
                <div
                    class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                    <button
                        class="px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-blue-hover-green"
                        data-bs-dismiss="modal">
                        Simpan
                    </button>
                    <button
                        class="px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-red-hover-green"
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
    id="editData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="relative w-auto pointer-events-none modal-dialog">
        <div
            class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
            {{-- Title Modal --}}
            <div class="px-3 py-3 bg-blue rounded-t-2xl">
                <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Tambah TPS</h1>
            </div>
            {{-- End Titel Modal --}}
            <div>
                <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                    <h1 class="text-xl font-bold text-black md:text-2xl lg:text-2xl font-oswald">Daftar Wilayah</h1>
                </div>
                <form action="" class="mx-5 mb-3 space-y-3">
                    <div class="flex space-x-5">
                        <select
                            class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-bases font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label=".form-select-lg example">
                            <option selected>Provinsi</option>
                            @foreach ($provinces as $provinsi)
                                <option value="">{{$provinsi->name  }}</option>
                            @endforeach
                        </select>
                        <select
                            class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label=".form-select-lg example">
                            <option selected>Kabupaten/Kota</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="flex space-x-5">
                        <select
                            class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label=".form-select-lg example">
                            <option selected>Kecamatan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select
                            class="form-control w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label=".form-select-lg example">
                            <option selected>Kelurahan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="flex justify-center space-x-5">
                        <input type="text"
                            class=" form-control w-1/2 px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlInput1" placeholder="Jumlah TPS" />
                    </div>
                    <div>
                        <textarea
                            class=" form-control block w-full px-2 py-1.5 text-sm  md:text-base lg:text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            id="exampleFormControlTextarea1" rows="3" placeholder="Keterangan"></textarea>
                    </div>
                </form>
            </div>
            {{-- Button Modal --}}
            <div
                class="flex flex-wrap items-center justify-end flex-shrink-0 p-4 space-x-5 border-t border-gray-200 modal-footer rounded-b-md">
                <button
                    class="px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-blue-hover-green"
                    data-bs-dismiss="modal">
                    Simpan
                </button>
                <button
                    class="px-5 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded shadow-md md:text-xl lg:text-xl bg-red-hover-green"
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


    <script>
        $(function (){
            $.ajaxSetup({
                headers: {‘X-CSRF-TOKEN’: $(‘meta[name=”csrf-token”]’).attr(‘content’)}
            });
        });
    </script>

</x-admin-layout>
