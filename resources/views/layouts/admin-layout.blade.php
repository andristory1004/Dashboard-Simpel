<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
    <!--Totally optional :) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
        integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis=" crossorigin="anonymous"></script>

        <!-- Admin JS -->
        <script src=""></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Jquery --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-sequence-diagrams/2.0.0/sequence-diagram-min.js" referrerpolicy="no-referrer"></script>

        
        

</head>

<body class="mt-12 font-sans leading-normal tracking-normal bg-gray-800">

    <header>
        <!--Nav-->
        <nav aria-label="menu nav" class="fixed top-0 z-20 w-full h-auto px-1 pt-2 pb-1 mt-0 bg-gray-800 md:pt-1">

            <div class="flex flex-wrap items-center">
                <div class="flex justify-center flex-shrink text-white md:w-1/3 md:justify-start">
                    <a href="#" aria-label="Home">
                        <span class="pl-2 text-xl"><i class="em em-grinning"></i></span>
                    </a>
                </div>

                <div class="flex justify-center flex-1 px-2 text-white md:w-1/3 md:justify-start">
                    <span class="relative w-full">
                        <input aria-label="search" type="search" id="search" placeholder="Search"
                            class="w-full px-2 py-3 pl-10 leading-normal text-white transition bg-gray-900 border border-transparent rounded appearance-none focus:outline-none focus:border-gray-400">
                        <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                            <svg class="w-4 h-4 text-white pointer-events-none fill-current"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </span>
                </div>

                <div class="flex content-center justify-between w-full pt-2 md:w-1/3 md:justify-end">
                    <ul class="flex items-center justify-between flex-1 list-reset md:flex-none">
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block px-4 py-2 text-white no-underline" href="#">Active</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <a class="inline-block px-4 py-2 text-gray-400 no-underline active:text-red-900 hover:text-gray-200 hover:text-underline"
                                href="#">link</a>
                        </li>
                        <li class="flex-1 md:flex-none md:mr-3">
                            <div class="relative inline-block">
                                <button onclick="toggleDD('myDropdown')" class="px-2 py-2 text-white drop-button"> <span
                                        class="pr-2"><i class="em em-robot_face"></i></span> Hi, User <svg
                                        class="inline h-3 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                    </svg></button>
                                <div id="myDropdown"
                                    class="absolute right-0 z-30 invisible p-3 mt-3 overflow-auto text-white bg-gray-800 dropdownlist">
                                    <input type="text" class="p-2 text-gray-600 drop-search" placeholder="Search.."
                                        id="myInput" onkeyup="filterDD('myDropdown','myInput')">
                                    <a href="#"
                                        class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                            class="fa fa-user fa-fw"></i> Profile</a>
                                    <a href="#"
                                        class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                            class="fa fa-cog fa-fw"></i> Settings</a>
                                    <div class="border border-gray-800"></div>
                                    <a href="#"
                                        class="block p-2 text-sm text-white no-underline hover:bg-gray-800 hover:no-underline"><i
                                            class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>
    </header>

    <script>
        const btn = document.querySelector("button.button-menu");
const menu = document.querySelector(".menuBar");

btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
})
    </script>

    <main>
        <div class="flex flex-col md:flex-row">
            <nav aria-label="alternative nav">
                <div
                    class="fixed bottom-0 z-10 content-center w-full h-20 mt-12 bg-gray-800 shadow-xl md:relative md:h-screen md:w-48">

                    <div
                        class="content-center justify-between text-left md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 md:content-start">
                        <ul
                            class="flex flex-row px-1 pt-3 text-center navbar-nav list-reset md:flex-col md:py-3 md:px-2 md:text-left">
                            {{-- <li class="mr-3 flex-1 {{set_active('analisis')}}">
                                <a href={{route('dashboard')}} class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-blue-600 nav-link md:py-3 hover:text-white">
                                    <i class="pr-0 text-blue-600 fas fa-chart-network md:pr-3"></i>
                                    <span class="block pb-1 text-xs text-white md:pb-0 md:text-base md:text-white md:inline-block">Dashboard</span>
                                </a>
                            </li> --}}
                            <li class="flex-1 mr-3">
                                <a href={{route('dashboard')}}
                                    class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-gray-800 md:py-3 hover:text-white hover:border-pink-500">
                                    <i class="pr-0 fas fa-carrot md:pr-3"></i>
                                    <span
                                        class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">
                                        Dashboard
                                    </span>
                                </a>
                            </li>
                            <li class="flex-1 mr-3">
                                <a href={{route('pengurus')}}
                                    class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-gray-800 md:py-3 hover:text-white hover:border-pink-500">
                                    <i class="pr-0 fas fa-people-group md:pr-3"></i><span
                                        class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Pengurus</span>
                                </a>
                            </li>
                            <li class="flex-1 mr-3">
                                <a href={{route('relawan')}}
                                    class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-gray-800 md:py-3 hover:text-white hover:border-pink-500">
                                    <i class="pr-0 fas fa-people-carry-box md:pr-3"></i><span
                                        class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Relawan</span>
                                </a>
                            </li>
                            <li class="flex-1 mr-3">
                                <a href="{{ route('analisis') }}"
                                    class="block py-1 pl-1 text-white no-underline align-middle border-b-2 border-gray-800 active:text-red-600 md:py-3 hover:text-white hover:border-purple-500">
                                    <i class="pr-0 fa fa-chart-line md:pr-3"></i><span
                                        class="block pb-1 text-xs text-gray-400 nav-link md:pb-0 md:text-base md:text-gray-200 md:inline-block">Analisis</span>
                                </a>
                            </li>
                            <li class="flex-1 mr-3">
                                <a href="#"
                                    class="block py-1 pl-0 text-white no-underline align-middle border-b-2 border-gray-800 md:py-3 md:pl-1 hover:text-white hover:border-red-500">
                                    <i class="pr-0 fa fa-wallet md:pr-3"></i><span
                                        class="block pb-1 text-xs text-gray-400 md:pb-0 md:text-base md:text-gray-200 md:inline-block">Info</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
            {{ $slot }}
    </main>




    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
    </script>


</body>

</html>
