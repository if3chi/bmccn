<x-front-layout>
    <section class="relative block bg-blue-black fade-in">
        <div class="container mx-auto px-4 py-16">
            <div class="flex flex-wrap text-center justify-center">
                <div class="w-full lg:w-6/12 px-4">
                    <h2 class="text-4xl font-semibold text-white">Essay Writing</h2>
                    <p class="text-lg leading-relaxed mt-4 mb-4 text-gray-50">
                        Complete the form below to enter the competition.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap mt-12 justify-center">
                <div class="w-full lg:w-3/12 px-4 text-center space-y-3">

                    <x-paypal-btn href="{{ paypalLink('bmccn') }}"
                        class="justify-center shadow-xl" />

                    {{-- <h6 class="text-xl mt-5 font-semibold text-white">
                        Support the change
                    </h6> --}}

                    <p class="mt-2 mb-4 text-gray-50">
                       Click the button to support our creative writing competition.
                    </p>
                </div>
            </div>
    </section>

    <section class="block py-24 lg:pt-0 bg-white fade-in"
        style="background-image: url(https://static.intercomassets.com/ember/assets/images/messenger-backgrounds/background-1-99a36524645be823aabcd0e673cb47f8.png)">

        <div class="relative">
            <div class="container mx-auto px-4 mt-16 lg:mt-0">
                <livewire:front.creative-writing-form />
            </div>
        </div>
    </section>
</x-front-layout>
