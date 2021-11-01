<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Equip. Empower. Elevate. || BMCCN</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>

    <header class="relative z-10 fade-in" x-data="{ showMenu: false }">
        <div class="">
            <nav class="relative max-w-7xl mx-auto flex items-center justify-between py-4 px-6 xl:px-8"
                aria-label="Global">
                <div class="flex items-center justify-between w-full lg:w-auto">
                    <a href="/">
                        <span class="sr-only">BMCCN</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('images/logo.png') }}" alt="BMCCN Logo">
                    </a>
                    <div class="-mr-2 flex items-center lg:hidden">
                        <button type="button"
                            class="bg-gray-50 rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-purple-500"
                            @click="showMenu = !showMenu" @mousedown="if (showMenu) $event.preventDefault()"
                            aria-expanded="false" :aria-expanded="showMenu.toString()">
                            <span class="sr-only">Open main menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/menu"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden space-x-10 lg:flex lg:ml-10">

                    <x-front.nav-link href="/">Home</x-front.nav-link>
                    <x-front.nav-link href="#about">About</x-front.nav-link>
                    <x-front.dropdown url="#" name="Community Projects">
                        <div>
                            <x-front.dropdown-link href="https://bmywa.com" target="_blank"> BMYWA
                            </x-front.dropdown-link>
                            <x-front.dropdown-link href="#" target="_"> Leadership </x-front.dropdown-link>
                            <x-front.dropdown-link href="#" target="_"> Mentoring </x-front.dropdown-link>
                            <x-front.dropdown-link href="#" target="_"> Workshop </x-front.dropdown-link>
                        </div>

                        <div class="mx-2">
                            <x-btn-strip href="#">Donate</x-btn-strip>
                        </div>
                    </x-front.dropdown>
                    <x-front.nav-link href="#contact-us">Contact</x-front.nav-link>

                </div>
                <div class="hidden lg:flex lg:items-center lg:space-x-6">
                    <a href="#"
                        class="flex space-x-1 py-2 px-6 bg-white border-2 border-transparent rounded-md shadow-md text-base font-medium text-blue-950 hover:bg-gray-50">
                        <span>Donate</span>
                        <span class="p-1 mt-0.5">
                            <svg class="w-4 h-4" viewBox="0 0 24 32">
                                <path fill="#009cde"
                                    d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 6.675 28.9 C 6.581 29.3 6.862 29.6 7.236 29.6 L 11.356 29.6 C 11.825 29.6 12.292 29.3 12.386 28.8 L 12.386 28.5 L 13.228 23.3 L 13.228 23.1 C 13.322 22.6 13.79 22.2 14.258 22.2 L 14.821 22.2 C 18.845 22.2 21.935 20.5 22.871 15.5 C 23.339 13.4 23.153 11.7 22.029 10.5 C 21.748 10.1 21.279 9.8 20.905 9.5 L 20.905 9.5">
                                </path>
                                <path fill="#012169"
                                    d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 8.173 18.7 C 8.267 18.1 8.735 17.7 9.296 17.7 L 11.636 17.7 C 16.224 17.7 19.782 15.7 20.905 10.1 C 20.812 9.8 20.905 9.7 20.905 9.5">
                                </path>
                                <path fill="#003087"
                                    d="M 9.485 9.5 C 9.577 9.2 9.765 8.9 10.046 8.7 C 10.232 8.7 10.326 8.6 10.513 8.6 L 16.692 8.6 C 17.442 8.6 18.189 8.7 18.753 8.8 C 18.939 8.8 19.127 8.8 19.314 8.9 C 19.501 9 19.688 9 19.782 9.1 C 19.875 9.1 19.968 9.1 20.063 9.1 C 20.343 9.2 20.624 9.4 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.6 C 18.658 3.2 16.506 2.6 13.79 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 9.485 9.5 Z">
                                </path>
                            </svg>
                        </span>
                    </a>
                </div>
            </nav>
        </div>


        <div x-show="showMenu" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
            x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
            x-description="Mobile menu, show/hide based on menu showMenu state."
            class="absolute top-0 inset-x-0 p-2 transition transform origin-top lg:hidden" x-ref="panel"
            @click.away="showMenu = false" style="display: none;">
            <div class="rounded-lg shadow-lg bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>
                        <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="BMCCN Logo">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                            class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-purple-500"
                            @click="showMenu = !showMenu">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pt-5 pb-6">
                    <div class="px-2 space-y-1 text-center">
                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-blue-black hover:bg-gray-50">About</a>

                        <x-front.dropdown-base name="Community Projects">
                            <div class="flex flex-col">
                                <x-front.dropdown-link href="https://bmywa.com" target="_blank"> BMYWA
                                </x-front.dropdown-link>
                                <x-front.dropdown-link href="#" target="_"> Leadership </x-front.dropdown-link>
                                <x-front.dropdown-link href="#" target="_"> Mentoring </x-front.dropdown-link>
                                <x-front.dropdown-link href="#" target="_"> Workshop </x-front.dropdown-link>
                            </div>

                            <div class="py-2.5 mt-2">
                                <x-btn-strip href="#">Donate</x-btn-strip>
                            </div>

                        </x-front.dropdown-base>

                        <a href="#"
                            class="block px-3 py-2 rounded-md text-base font-medium text-blue-black hover:bg-gray-50">Contact</a>

                    </div>
                    <div class="mt-6 px-5">
                        {{-- <a href="#"
                            class="block text-center w-full py-2 px-4 border border-transparent rounded-md shadow bg-purple-500 text-white font-medium hover:bg-purple-600">Donate</a> --}}
                        <a href="#"
                            class="flex w-full justify-center space-x-1 py-2 px-6 bg-white border-2 border-transparent rounded-md shadow-lg text-base font-medium text-blue-950 hover:bg-gray-50">
                            <span>Donate</span>
                            <span class="p-1 mt-0.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 32">
                                    <path fill="#009cde"
                                        d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 6.675 28.9 C 6.581 29.3 6.862 29.6 7.236 29.6 L 11.356 29.6 C 11.825 29.6 12.292 29.3 12.386 28.8 L 12.386 28.5 L 13.228 23.3 L 13.228 23.1 C 13.322 22.6 13.79 22.2 14.258 22.2 L 14.821 22.2 C 18.845 22.2 21.935 20.5 22.871 15.5 C 23.339 13.4 23.153 11.7 22.029 10.5 C 21.748 10.1 21.279 9.8 20.905 9.5 L 20.905 9.5">
                                    </path>
                                    <path fill="#012169"
                                        d="M 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.7 C 18.564 3.3 16.411 2.6 13.697 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3.1 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 8.173 18.7 C 8.267 18.1 8.735 17.7 9.296 17.7 L 11.636 17.7 C 16.224 17.7 19.782 15.7 20.905 10.1 C 20.812 9.8 20.905 9.7 20.905 9.5">
                                    </path>
                                    <path fill="#003087"
                                        d="M 9.485 9.5 C 9.577 9.2 9.765 8.9 10.046 8.7 C 10.232 8.7 10.326 8.6 10.513 8.6 L 16.692 8.6 C 17.442 8.6 18.189 8.7 18.753 8.8 C 18.939 8.8 19.127 8.8 19.314 8.9 C 19.501 9 19.688 9 19.782 9.1 C 19.875 9.1 19.968 9.1 20.063 9.1 C 20.343 9.2 20.624 9.4 20.905 9.5 C 21.185 7.4 20.905 6 19.782 4.6 C 18.658 3.2 16.506 2.6 13.79 2.6 L 5.739 2.6 C 5.271 2.6 4.71 3 4.615 3.6 L 1.339 25.8 C 1.339 26.2 1.62 26.7 2.088 26.7 L 6.956 26.7 L 8.267 18.4 L 9.485 9.5 Z">
                                    </path>
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <div class="mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide relative pt-16 pb-32 flex content-center items-center justify-center"
                style="min-height: 89vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover"
                    style='background-image: url("{{ 'https://source.unsplash.com/GDokEYnOfnE' }}");'>
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12 space-y-8">
                                <h1 class="text-white font-semibold text-5xl">
                                    Equip. Empower. Elevate.
                                </h1>
                                <p class="mt-4 text-2xl text-gray-100 tracking-wide">
                                    Aimed at tackling the challenges young people face in their community by building
                                    and equipping a network of young people
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-blue-black opacity-75 fill-current" points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
            </div>
            <div class="swiper-slide relative pt-16 pb-32 flex content-center items-center justify-center"
                style="min-height: 89vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover"
                    style='background-image: url("{{ 'https://source.unsplash.com/feU8G7E5ODI' }}");'>
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12 space-y-8">
                                <h1 class="text-white font-semibold text-5xl">
                                    Schools.
                                </h1>
                                <p class="mt-4 text-2xl text-gray-100 tracking-wide">
                                    Community by building and equipping a network of young people
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-blue-black opacity-75 fill-current" points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
            </div>
            <div class="swiper-slide relative pt-16 pb-32 flex content-center items-center justify-center"
                style="min-height: 89vh;">
                <div class="absolute top-0 w-full h-full bg-center bg-cover"
                    style='background-image: url("{{ 'https://source.unsplash.com/O5EMzfdxedg' }}");'>
                    <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
                </div>
                <div class="container relative mx-auto">
                    <div class="items-center flex flex-wrap">
                        <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                            <div class="pr-12 space-y-8">
                                <h1 class="text-white font-semibold text-5xl">
                                    Educaction.
                                </h1>
                                <p class="mt-4 text-2xl text-gray-100 tracking-wide">
                                    Aimed at tackling the challenges young people face in their community by building
                                    and equipping a network of young people
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                    style="height: 70px;">
                    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                        <polygon class="text-blue-black opacity-75 fill-current" points="2560 0 2560 100 0 100">
                        </polygon>
                    </svg>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>


    <section class="pb-20 bg-white -mt-24 font-sans fade-in" id="about">
        <div class="container mx-auto px-4 lg:pt-12 pt-6">
            <div class="flex flex-wrap items-center mt-24">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    {{-- <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div> --}}
                    <h3 class="text-3xl mb-2 font-bold leading-normal text-blue-950">
                        About
                    </h3>
                    <p class="text-lg font-normal leading-relaxed mt-4 mb-4 text-gray-700 text-justify">
                        Blooming Minds Change Champions Network is an early intervention youth development organisation
                        aimed at tackling the challenges young people face in their community by building and equipping
                        a network of young people between the ages of 6 and 20 who become change agents in transforming
                        their communities and go on to influence other young people by virtue of the knowledge and
                        experience gained through our projects.
                    </p>
                    <p class="text-lg font-normal leading-relaxed mt-0 mb-4 text-gray-700 text-justify">
                        We run a charitable trust in the United Kingdom and most
                        of our major projects are in Africa . We work with individuals and corporates who are committed
                        to the growth and advancement of young
                        people.
                    </p>

                    {{-- <a href="#_"
                        class="relative px-10 py-3 font-medium text-white transition duration-300 bg-green-400 rounded-md hover:bg-green-500 ease">
                        <span class="absolute bottom-0 left-0 h-full -ml-2">
                            <svg viewBox="0 0 487 487" class="w-auto h-full opacity-100 object-stretch"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 .3c67 2.1 134.1 4.3 186.3 37 52.2 32.7 89.6 95.8 112.8 150.6 23.2 54.8 32.3 101.4 61.2 149.9 28.9 48.4 77.7 98.8 126.4 149.2H0V.3z"
                                    fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                            </svg>
                        </span>
                        <span class="absolute top-0 right-0 w-12 h-full -mr-3">
                            <svg viewBox="0 0 487 487" class="object-cover w-full h-full"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M487 486.7c-66.1-3.6-132.3-7.3-186.3-37s-95.9-85.3-126.2-137.2c-30.4-51.8-49.3-99.9-76.5-151.4C70.9 109.6 35.6 54.8.3 0H487v486.7z"
                                    fill="#FFF" fill-rule="nonzero" fill-opacity=".1"></path>
                            </svg>
                        </span>
                        <span class="relative font-semibold">Donate</span>
                    </a> --}}
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full my-6 shadow-lg rounded-lg bg-blue-black">
                        <img alt="..."
                            src="https://i0.wp.com/bmccn.org/wp-content/uploads/2020/01/IMG-20190722-WA0012.jpg?resize=1024%2C678&ssl=1"
                            class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="text-blue-black fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Leadership Workshop
                            </h4>
                            <p class="text-md font-normal mt-2 text-white">
                                A seminar session with the students of Gradewell Academy Surulere Lagos.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="relative py-20">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-white fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="items-center flex flex-wrap">
                <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
                    <img alt="..." class="max-w-full rounded-lg shadow-lg"
                        src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80">
                </div>
                <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                    <div class="md:pr-12">
                        <div
                            class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold">A growing company</h3>
                        <p class="mt-4 text-lg leading-relaxed text-gray-600">
                            The extension comes with three pre-built pages to help you get
                            started faster. You can change the text and images and you're
                            good to go.
                        </p>
                        <ul class="list-none mt-6">
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="fas fa-fingerprint"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">
                                            Carefully crafted components
                                        </h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="fab fa-html5"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Amazing page examples</h4>
                                    </div>
                                </div>
                            </li>
                            <li class="py-2">
                                <div class="flex items-center">
                                    <div>
                                        <span
                                            class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i
                                                class="far fa-paper-plane"></i></span>
                                    </div>
                                    <div>
                                        <h4 class="text-gray-600">Dynamic components</h4>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pb-20 relative block bg-blue-black fade-in">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blue-black fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4" id="contact-us">
                    <h2 class="text-4xl font-semibold text-white">Impact A Change</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-50">
                        We work with individuals and corporates who are committed to the growth and advancement of young
                        people.
                    </p>
                </div>
            </div>
            {{-- <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-blue-black p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-medal text-xl"></i>
                    </div>
                    <h6 class="text-xl mt-5 font-semibold text-white">
                        Excelent Services
                    </h6>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-blue-black p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-poll text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">
                        Grow your market
                    </h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
                <div class="w-full lg:w-3/12 px-4 text-center">
                    <div
                        class="text-blue-black p-3 w-12 h-12 shadow-lg rounded-full bg-white inline-flex items-center justify-center">
                        <i class="fas fa-lightbulb text-xl"></i>
                    </div>
                    <h5 class="text-xl mt-5 font-semibold text-white">Launch time</h5>
                    <p class="mt-2 mb-4 text-gray-500">
                        Some quick example text to build on the card title and make up
                        the bulk of the card's content.
                    </p>
                </div>
            </div> --}}
        </div>
    </section>

    <section class="relative block py-24 lg:pt-0 bg-blue-black fade-in">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
                <div class="w-full lg:w-6/12 px-4">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300">
                        <div class="flex-auto p-5 lg:p-10">
                            <h4 class="text-2xl font-semibold">Want to work with us?</h4>
                            <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                                Complete this form and we will get back to you in 24 hours.
                            </p>
                            <div class="relative w-full mb-3 mt-8">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="full-name">Full
                                    Name</label><input type="text"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Full Name" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="email">Email</label><input type="email"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Email" style="transition: all 0.15s ease 0s;">
                            </div>
                            <div class="relative w-full mb-3">
                                <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                    for="message">Message</label><textarea rows="4" cols="80"
                                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                    placeholder="Type a message..."></textarea>
                            </div>
                            <div class="text-center mt-6">
                                <button
                                    class="bg-blue-black text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                    type="button" style="transition: all 0.15s ease 0s;">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="relative bg-gray-50 pt-8 pb-6 fade-in">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-gray-50 fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold text-blue-black">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-gray-700">
                        Find us on any of these platforms.
                    </h5>
                    <div class="mt-6">
                        <button
                            class="bg-white text-blue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-twitter"></i></button><button
                            class="bg-white text-blue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2 p-3"
                            type="button">
                            <i class="flex fab fa-facebook-square"></i></button>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-blue-black font-semibold block pb-2 text-sm"
                                        href="#about">About Us</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-blue-black font-semibold block pb-2 text-sm"
                                        href="https://bmywa.com">BMYWA</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-gray-600 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-gray-700 hover:text-blue-black font-semibold block pb-2 text-sm"
                                        href="https://bmccn.org/terms">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-blue-black font-semibold block pb-2 text-sm"
                                        href="https://bmccn.org/privacy">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-gray-700 hover:text-blue-black font-semibold block pb-2 text-sm"
                                        href="#contact-us">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-400">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blue-black font-semibold py-1">
                        Copyright © 2021 BMCCN
                        {{-- <a href="#" class="text-blue-black hover:text-blue-950">GuiltyLogik</a>. --}}
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>

</body>

</html>
