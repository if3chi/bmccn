<x-front-layout>
    <!-- Banner -->
    <x-front.banner />

    <section class="pb-20 bg-white -mt-24 -mb-2 font-sans fade-in" id="about">
        <div class="container mx-auto px-4 lg:pt-12 pt-6">
            <div class="flex flex-wrap items-center mt-24">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    <h3 class="text-3xl mt-12 md:mt-0 mb-2 font-bold leading-normal text-blue-950">
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
                </div>
                <div class="w-full md:w-4/12 px-4 mr-auto ml-auto">
                    <div
                        class="relative flex flex-col min-w-0 break-words w-full my-6 shadow-lg rounded-lg bg-blue-black">
                        <img alt="..." src="{{ setAboutImage() }}" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 w-full block" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="text-blue-black fill-current"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                Leadership Workshop
                            </h4>
                            <p class="text-md font-normal mt-2 text-white">
                                A seminar session with the students of Gracewell Academy Surulere Lagos.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="pb-20 bg-white -mt-24 -mb-2 font-sans fade-in" id="art-info">
        <div class="bg-white pt-16 lg:py-24">
            <div class="pb-16 bg-blue-black lg:pb-0 lg:z-10 lg:relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                    <div class="relative lg:-my-8">
                        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white -mt-1 lg:hidden"></div>
                        <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                            <div
                                class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                                <img class="object-cover lg:h-full lg:w-full shadow-inner" src="{{ setFlyer() }}"
                                    alt="Achievers awards 2022 flyer">
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                            <blockquote>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white opacity-25"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M3 21v-4a4 4 0 1 1 4 4h-4"></path>
                                        <path d="M21 3a16 16 0 0 0 -12.8 10.2"></path>
                                        <path d="M21 3a16 16 0 0 1 -10.2 12.8"></path>
                                        <path d="M10.6 9a9 9 0 0 1 4.4 4.4"></path>
                                    </svg>
                                    <p class="mt-4 text-2xl font-medium text-white">Open to all young artists, sculptors
                                        and innovators in Ghana and Nigeria.</p>
                                </div>
                                <footer class="mt-2">
                                    <p class="text-base font-medium text-white">NB: Send all application materials to <a
                                            href="mailto:info@bmccn.org">info@bmccn.org</a></p>
                                    <p class="text-base font-medium text-blue-100">Application deadline extended to
                                        28th Feb, 2022.</p>
                                    <div class="flex flex-col-reverse space-y-2 sm:flex-row space-x-2">
                                        <a href="mailto:info@bmccn.org"
                                            class="mt-4 bg-white justify-center border border-transparent rounded-md shadow-md px-2 py-2.5 inline-flex items-center text-base font-semibold text-blue-gray hover:text-red-950 hover:bg-red-50">
                                            Register your interest
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mt-1"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M3.5 5.5l1.5 1.5l2.5 -2.5" />
                                                <path d="M3.5 11.5l1.5 1.5l2.5 -2.5" />
                                                <path d="M3.5 17.5l1.5 1.5l2.5 -2.5" />
                                                <line x1="11" y1="6" x2="20" y2="6" />
                                                <line x1="11" y1="12" x2="20" y2="12" />
                                                <line x1="11" y1="18" x2="20" y2="18" />
                                            </svg>
                                        </a>
                                        <span class="text-white text-lg mt-3 sm:mt-5 mx-auto ">or</span>
                                        <a href="mailto:info@bmccn.org"
                                            class="mt-4 bg-red-950 justify-center border border-transparent rounded-md shadow px-2 py-2.5 inline-flex items-center text-base font-semibold text-white hover:text-red-950 hover:bg-red-50">
                                            Submit an entry
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 mt-1"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 18h-7a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5">
                                                </path>
                                                <path d="M3 6l9 6l9 -6"></path>
                                                <path d="M15 18h6"></path>
                                                <path d="M18 15l3 3l-3 3"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="pb-20 -my-2 relative block bg-blue-black fade-in">
        <div class="container mx-auto px-4 py-14 lg:pt-24 lg:pb-64">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4" id="contact-us">
                    <h2 class="text-4xl font-semibold text-white">Impact A Change</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-50">
                        We work with individuals and corporates who are committed to the growth and advancement of young
                        people.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center space-y-3 -mb-8">

                    <x-paypal-btn href="{{ paypalLink('generic') }}" class="justify-center shadow-xl" />

                    <h6 class="mt-2 mb-4 text-gray-50 text-lg font-semibold">
                        Support our community projects.
                    </h6>
                </div>
            </div>
    </section>

    <section class="block py-24 lg:pt-0 bg-blue-black fade-in">
        <livewire:front.contact-us />
    </section>

    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    @endpush

    @push('scripts')
        <!-- Swiper JS -->
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            var swiper = new Swiper(".mySwiper", {
                cssMode: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                mousewheel: true,
                keyboard: true,
            });
        </script>
    @endpush
</x-front-layout>
