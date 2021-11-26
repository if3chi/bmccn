<x-front-layout>
    <!-- Banner -->
    <x-front.banner />

    <section class="pb-20 bg-white -mt-24 -mb-2 font-sans fade-in" id="about">
        <div class="container mx-auto px-4 lg:pt-12 pt-6">
            <div class="flex flex-wrap items-center mt-24">
                <div class="w-full md:w-5/12 px-4 mr-auto ml-auto">
                    {{-- <div
                        class="text-gray-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-gray-100">
                        <i class="fas fa-user-friends text-xl"></i>
                    </div> --}}
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
                                A seminar session with the students of Gracewell Academy Surulere Lagos.
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 -my-2 relative block bg-blue-black fade-in">
        <div class="bottom-auto top-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden -mt-20"
            style="height: 80px;">
            <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
                version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                <polygon class="text-blue-black fill-current" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
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

                    <x-paypal-btn href="{{ paypalLink('generic') }}"
                        class="justify-center shadow-xl" />

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
