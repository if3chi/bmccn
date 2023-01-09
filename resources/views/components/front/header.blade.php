<header class="relative z-10 shadow-md fade-in" x-data="{ showMenu: false }">
    <div class="">
        <nav class="relative flex items-center justify-between px-6 py-4 mx-auto max-w-7xl xl:px-8" aria-label="Global">
            <div class="flex items-center justify-between w-full lg:w-auto">
                <a href="/">
                    <span class="sr-only">BMCCN</span>
                    <img class="w-auto h-8 sm:h-10" src="{{ asset('images/logo.png') }}" alt="BMCCN Logo">
                </a>
                <div class="flex items-center -mr-2 lg:hidden">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 rounded-md bg-gray-50 text-blue-black hover:bg-gray-100 focus:outline-none focus:ring-2 focus-ring-inset focus:ring-blue-950"
                        @click="showMenu = !showMenu" @mousedown="if (showMenu) $event.preventDefault()"
                        aria-expanded="false" :aria-expanded="showMenu.toString()">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" x-description="Heroicon name: outline/menu"
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
                <x-front.nav-link href="{{ url('/') . '#about' }}">About</x-front.nav-link>
                <x-front.dropdown url="#" name="Community Projects">
                    <div>
                        <x-front.dropdown-link href="{{ url('/') . '#art-info' }}"> Art Exhibition
                        </x-front.dropdown-link>
                        <x-front.dropdown-link href="https://bmywa.com" target="_blank"> BMYWA
                        </x-front.dropdown-link>
                        <x-front.dropdown-link href="#" target="_"> Leadership, Mentoring &amp; Workshop
                        </x-front.dropdown-link>
                        <x-front.dropdown-link href="creative-writing"> Creative Writing UK
                        </x-front.dropdown-link>
                        <x-front.dropdown-link href="{{ route('kids2action') }}"> KIDS2ACTION CAMPAIGN
                        </x-front.dropdown-link>
                    </div>

                    {{-- <div class="mx-2">
                        <x-btn-strip href="#">Donate</x-btn-strip>
                    </div> --}}
                </x-front.dropdown>
                <x-front.nav-link href="#contact-us">Contact</x-front.nav-link>

            </div>
            <div class="hidden lg:flex lg:items-center lg:space-x-6">
                <x-paypal-btn href="{{ paypalLink('generic') }}" />
            </div>
        </nav>
    </div>


    <div x-show="showMenu" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in"
        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
        x-description="Mobile menu, show/hide based on menu showMenu state."
        class="absolute inset-x-0 top-0 p-2 transition origin-top transform lg:hidden" x-ref="panel"
        @click.away="showMenu = false" style="display: none;">
        <div class="overflow-hidden bg-white rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
            <div class="flex items-center justify-between px-5 pt-4">
                <div>
                    <img class="w-auto h-8" src="{{ asset('images/logo.png') }}" alt="BMCCN Logo">
                </div>
                <div class="-mr-2">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 bg-white rounded-md text-blue-black hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-950"
                        @click="showMenu = !showMenu">
                        <span class="sr-only">Close menu</span>
                        <svg class="w-6 h-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="pt-5 pb-6">
                <div class="px-2 space-y-1 text-center">
                    <a href="{{ url('/') . '#about' }}"
                        class="block px-3 py-2 text-base font-medium rounded-md text-blue-black hover:bg-gray-50">About</a>

                    <x-front.dropdown-base name="Community Projects">
                        <div class="flex flex-col">
                            <x-front.dropdown-link href="{{ url('/') . '#art-info' }}"> Art Exhibition
                            </x-front.dropdown-link>
                            <x-front.dropdown-link href="https://bmywa.com" target="_blank"> BMYWA
                            </x-front.dropdown-link>
                            <x-front.dropdown-link href="#" target="_"> Leadership, Mentoring &amp; Workshop
                            </x-front.dropdown-link>
                            <x-front.dropdown-link href="creative-writing"> Creative Writing UK
                            </x-front.dropdown-link>
                            <x-front.dropdown-link href="{{ route('kids2action') }}"> KIDS2ACTION CAMPAIGN
                            </x-front.dropdown-link>
                        </div>

                        {{-- <div class="py-2.5 mt-2">
                            <x-btn-strip href="#">Donate</x-btn-strip>
                        </div> --}}

                    </x-front.dropdown-base>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium rounded-md text-blue-black hover:bg-gray-50">Contact</a>

                </div>
                <div class="px-5 mt-6">
                    <x-paypal-btn href="{{ paypalLink('generic') }}" class="justify-center" />
                </div>
            </div>
        </div>
    </div>

</header>
