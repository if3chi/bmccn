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
                        <img alt="..." src="{{ asset(setAboutImage()) }}" class="w-full align-middle rounded-t-lg">
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
