<x-admin-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <section>
        <div class="flex-1 h-full pb-24 mt-12 bg-gray-100 md:mt-2 md:pb-5">

            <div class="w-full pt-3 bg-gray-800">
                <div class="p-4 text-2xl text-white shadow rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 ">
                    <h1 class="pl-2 font-bold">Pengurus</h1>
                </div>
            </div>
            <div id="diagram_container"></div>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="diagram.js"></script>
  <script src="script.js"></script>

  <script>
      let diagram = new dhx.Diagram("diagram_container", {
  type: "org",
  defaultShapeType: "img-card",
  scale: 0.9
});

diagram.data.load('data.json');
    
</x-admin-layout>