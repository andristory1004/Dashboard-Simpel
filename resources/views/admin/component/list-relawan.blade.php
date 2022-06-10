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
                    <h1 class="pl-2 font-bold">Relawan</h1>
                </div>
            </div>
            <div>
                List Relawan
            </div>

        </div>
    </section>
</x-admin-layout>