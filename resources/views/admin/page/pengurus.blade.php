<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <div class="flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 h-full">

            <div class="pt-3 bg-gray-800">
                <div class="p-4 text-2xl text-white shadow rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 ">
                    <h1 class="pl-2 font-bold">Pengurus</h1>
                </div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 xl:w-1/3 p-6 hover:scale-75">
                    <!--Metric Card-->
                    <a href={{route('list-pengurus')}}>
                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5 hover:bg-gradient-to-b hover:from-blue-200 hover:to-blue-100 hover:border-blue-600">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600 "><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-3xl">Dapil 1</h2>
                               <p class="font-bold text-gray-600">10 Orang <span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-3xl">Dapil 2</h2>
                                <p class="font-bold text-gray-600">10 Orang <span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-3xl">Dapil 3</h2>
                                <p class="font-bold text-gray-600">2 Orang<span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-yellow-500"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-3xl">Dapil 4</h2>
                                <p class="font-bold text-gray-600 ">15 Orang <span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <a href="" class="">
                    <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold uppercase text-3xl">Dapil 5</h2>
                                <p class="font-bold text-gray-600">7 Orang <span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span></p>
                            </div>
                        </div>
                    </div>
                    </a>
                    <!--/Metric Card-->
                </div>
                <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                    <!--Metric Card-->
                    <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-500 rounded-lg shadow-xl p-5">
                        <div class="flex flex-row items-center">
                            <div class="flex-shrink pr-4">
                                <div class="rounded-full p-5 bg-green-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                            </div>
                            <div class="flex-1 text-right md:text-center">
                                <h2 class="font-bold text-3xl uppercase">Dapil 6</h2>
                                <p class="font-bold text-gray-600">3 Orang
                                    <span class="text-red-500">
                                    <i class="fas fa-caret-down"></i>
                                </span>
                            </p>
                            </div>
                        </div>
                    </div>
                    <!--/Metric Card-->
                </div>
            </div>

        </div>
    </section>
</x-admin-layout>