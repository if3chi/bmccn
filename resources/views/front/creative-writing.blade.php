<x-front-layout>
    <section class="relative block bg-blue-black fade-in">
        <div class="container px-4 py-16 mx-auto">
            <div class="flex flex-wrap justify-center text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold text-white">Essay Writing</h2>
                    <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-50">
                        Complete the form below to enter the competition.
                    </p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center mt-12">
                <div class="w-full px-4 space-y-3 text-center lg:w-3/12">

                    <x-paypal-btn href="{{ paypalLink('bmccn') }}" class="justify-center shadow-xl" />

                    {{-- <h6 class="mt-5 text-xl font-semibold text-white">
                        Support the change
                    </h6> --}}

                    <p class="mt-2 mb-4 text-gray-50">
                        Click the button to support our creative writing competition.
                    </p>
                </div>
            </div>
    </section>

    <section class="block py-24 bg-white lg:pt-0 fade-in"
        style="background-image: url(https://static.intercomassets.com/ember/assets/images/messenger-backgrounds/background-1-99a36524645be823aabcd0e673cb47f8.png)">
        <div class="container px-4 mx-auto">
            <div class="flex flex-wrap items-center">
                <div class="w-full ml-auto mr-auto md:w-5/12">
                    <div class="flex flex-col w-full min-w-0 my-6 break-words rounded-lg shadow-lg bg-blue-black">
                        <img alt="..." src="{{ setCreativeWritingFlyer() }}"
                            class="w-full align-middle rounded-lg">
                    </div>
                </div>
                <div class="w-full ml-auto mr-auto md:w-5/12">
                    <livewire:front.creative-writing-form />
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
