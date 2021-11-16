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

                    <x-paypal-btn href="https://www.paypal.com/donate/?hosted_button_id=ZSE7RS78U6QF4" class="justify-center shadow-xl" />

                    {{-- <h6 class="text-xl mt-5 font-semibold text-white">
                        Support the change
                    </h6> --}}

                    <p class="mt-2 mb-4 text-gray-50">
                        Support our creative writing competition.
                    </p>
                </div>
            </div>
    </section>

    <section class="block py-24 lg:pt-0 bg-white fade-in"
        style="background-image: url(https://static.intercomassets.com/ember/assets/images/messenger-backgrounds/background-1-99a36524645be823aabcd0e673cb47f8.png)">
        <div class="relative">
            <div class="container mx-auto px-4 mt-16 lg:mt-0">
                <div class="flex flex-wrap justify-center">
                    <form class="w-full lg:w-6/12 px-4" action="{{ route('creative-writing.store') }}" method="post">
                        @csrf
                        <div
                            class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blue-black mt-10">
                            <div class="flex-auto p-5 lg:p-10">
                                <h4 class="text-2xl font-semibold text-white">Submit Your Entry</h4>

                                <x-input.text name="firstname" value="" type="text" id="first-name"
                                    placeholder="First Name">First Name</x-input.text>

                                <x-input.text name="lastname" value="" type="text" id="last-name"
                                    placeholder="Last Name">Last Name</x-input.text>

                                <x-input.text name="phone" value="" type="phone" id="phone" placeholder="0201234567">
                                    Phone</x-input.text>

                                <x-input.text name="email" value="" type="email" id="email" placeholder="Email">Email
                                </x-input.text>

                                <x-input.text name="age" value="" type="number" id="age" placeholder="Age" min="6"
                                    max="15">Age</x-input.text>

                                <x-input.text name="title" value="" type="text" id="title" placeholder="Essay Title">
                                    Title</x-input.text>

                                <x-input.textarea id="essay" placeholder="Type your Essay...">Essay</x-input.textarea>

                                <div class="text-center mt-6">
                                    <button
                                        class="bg-white text-blue-black active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded-md shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                                        type="submit" style="transition: all 0.15s ease 0s;">
                                        Submit Entry
                                    </button>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
                style="height: 70px;">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blue-black opacity-75 fill-current" points="2560 0 2560 100 0 100">
                    </polygon>
                </svg>
            </div> --}}
        </div>
    </section>
</x-front-layout>
