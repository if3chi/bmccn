<footer class="relative pt-8 pb-6 bg-gray-50 fade-in">
    <div class="absolute top-0 left-0 right-0 bottom-auto w-full -mt-20 overflow-hidden pointer-events-none"
        style="height: 80px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="fill-current text-gray-50" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
    <div class="container px-4 mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-4 text-center lg:w-6/12 sm:mb-0 sm:text-left">
                <h4 class="text-3xl font-semibold text-blue-black">Let's keep in touch!</h4>
                <h5 class="mt-0 mb-2 text-lg text-gray-700">
                    Find us on any of these platforms.
                </h5>
                <div class="my-6 text-center sm:text-left">
                    <button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-400 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button">
                        <x-icon.twitter />
                    </button>
                    <button
                        class="items-center justify-center w-10 h-10 p-3 mr-2 font-normal text-blue-600 bg-white rounded-full shadow-lg outline-none align-center focus:outline-none"
                        type="button">
                        <x-icon.facebook />
                    </button>
                </div>
            </div>
            <div class="w-full px-4 lg:w-6/12">
                <div class="flex flex-wrap mb-6 items-top">
                    <div class="w-full px-4 mb-2 ml-auto lg:w-4/12">
                        <span class="block mb-2 text-sm font-bold uppercase text-blue-black">Useful Links</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ url('/').'#about' }}">About Us</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="https://bmywa.com">BMYWA</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ route('creative-writing') }}">Creative Writing</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ route('kids2action') }}">Kids2Action Campaign</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ route('workshop') }}">Leadership, Mentoring &amp; Workshop</a>
                            </li>
                        </ul>
                    </div>
                    <div class="w-full px-4 lg:w-4/12">
                        <span class="block mb-2 text-sm font-bold uppercase text-blue-black">Other
                            Resources</span>
                        <ul class="list-unstyled">
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ url('/terms') }}">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ url('/privacy') }}">Privacy Policy</a>
                            </li>
                            <li>
                                <a class="block pb-2 text-sm font-semibold text-gray-700 hover:text-blue-black"
                                    href="{{ url('/').'#contact-us' }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-400">
        <div class="flex flex-wrap items-center justify-center md:justify-between">
            <div class="w-full px-4 mx-auto text-center md:w-4/12">
                <div class="py-1 text-sm font-semibold text-blue-black">
                    Copyright © {{ date('Y') }} BMCCN
                    {{-- <a href="#" class="text-blue-black hover:text-blue-950">GuiltyLogik</a>. --}}
                </div>
            </div>
        </div>
    </div>
</footer>
