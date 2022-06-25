<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-blue">
        <div class="flex items-center justify-between px-5 py-3 bg-green rounded-tl-3xl">
            <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Daftar Pasangan Calon</h1>
            <button
                class="px-3 py-2 text-sm font-bold text-white transition duration-150 ease-in-out rounded-md shadow-md bg-blue-hover-green md:text-lg lg:txt-lg"
                data-bs-target="#modal" data-bs-toggle="modal">
                <i class="fas fa-plus"></i>
                Tambah PASLON
            </button>
        </div>
    </div>
    <div class="mt-5 text-3xl font-bold text-center font-oswald">
        <h2 class="">PILKADA SERENTAK</h2>
        <h2>Agustus 2022</h2>
        <hr class="bg-black w-1/2 h-1 mx-auto mt-5">
    </div>
    <div class="justify-center mt-5 space-y-3 md:flex-auto lg:flex sm:flex  sm:space-y-0 sm:space-x-3">
        {{-- Card 1 --}}
        <div class="flex justify-center">
            <div class="w-64 sm:w-56 rounded-lg shadow-lg border-2 border-black">
                <h5 class="text-2xl font-bold font-oswald text-center">Paslon 1</h5>
                <div class="mx-2 my-2">
                    <a href="">
                        <img class="w-full rounded-lg shadow-md" src="{{ asset('image/paslon.jpeg') }}" alt="" />
                    </a>
                </div>
                <div class="flex my-2 justify-center space-x-3">
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Capres</h5>
                        <h5 class="text-xl font-bold font-oswald">Joko Widodo</h5>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Cawapres</h5>
                        <h5 class="text-xl font-bold font-oswald">Ma'ruf Amin</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- end Card1 --}}
        
        {{-- Card2 --}}
        <div class="flex justify-center">
            <div class="w-64 sm:w-56 rounded-lg shadow-lg border-2 border-black ">
                <h5 class="text-2xl font-bold font-oswald text-center">Paslon 1</h5>
                <div class="mx-2 my-2">
                    <a href="">
                        <img class="w-full rounded-lg shadow-md" src="{{ asset('image/paslon.jpeg') }}" alt="" />
                    </a>
                </div>
                <div class="flex my-2 justify-center space-x-3">
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Capres</h5>
                        <h5 class="text-xl font-bold font-oswald">Joko Widodo</h5>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Cawapres</h5>
                        <h5 class="text-xl font-bold font-oswald">Ma'ruf Amin</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Card2 --}}

        {{-- Card3 --}}
        <div class="flex justify-center">
            <div class="w-64 sm:w-56 rounded-lg shadow-lg border-2 border-black ">
                <h5 class="text-2xl font-bold font-oswald text-center">Paslon 1</h5>
                <div class="mx-2 my-2">
                    <a href="">
                        <img class="w-full rounded-lg shadow-md" src="{{ asset('image/paslon.jpeg') }}" alt="" />
                    </a>
                </div>
                <div class="flex my-2 justify-center space-x-3">
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Capres</h5>
                        <h5 class="text-xl font-bold font-oswald">Joko Widodo</h5>
                    </div>
                    <div class="text-center">
                        <h5 class="font-bold font-oswald">Cawapres</h5>
                        <h5 class="text-xl font-bold font-oswald">Ma'ruf Amin</h5>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Card3 --}}
    </div>


    <!-- Modal Input TPS -->
    <div class="fixed top-0 left-0 hidden w-full h-full overflow-x-hidden overflow-y-auto outline-none modal fade"
        id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="relative w-auto pointer-events-none modal-dialog">
            <div
                class="relative flex flex-col w-full text-current bg-white border-none shadow-lg outline-none pointer-events-auto modal-content bg-clip-padding rounded-b-2xl rounded-t-3xl">
                {{-- Title Modal --}}
                <div class="px-3 py-3 bg-blue rounded-t-2xl">
                    <h1 class="text-2xl font-bold text-black md:text-3xl lg:text-3xl font-oswald">Form Pasangan Calon</h1>
                </div>
                {{-- End Titel Modal --}}
                <div>
                    <div class="py-3 mx-5 mt-5 mb-5 text-center bg-gray-300 rounded-t-md">
                        <h1 class="text-xl font-bold text-black md:text-2xl lg:text-2xl font-oswald">Daftar Pasangan Calon</h1>
                    </div>
                    <form action="" class="mx-5 space-y-3">
                        <div class="space-y-3">
                            <input type="text"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Nama Ketua" />
                            <input type="text"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="Nama Wakil" />
                            <input type="text"
                                class=" form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1" placeholder="No Urut" />
                        </div>
                        <div class="flex space-x-5">
                            <input type="image"
                                class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="controlImage" placeholder="Image" />
                            <input type="image"
                                class=" form-control w-1/2 px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="controlImage2" placeholder="Image Wakil" />
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
</x-admin-layout>
