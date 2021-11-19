<div class="container mx-auto px-4 mt-16 lg:mt-0">
    <div class="flex flex-wrap justify-center lg:-mt-64 -mt-48">
        <div class="w-full lg:w-6/12 px-4">
            <form wire:submit.prevent="sendMessage"
                class="flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-gray-300 mt-10">
                @csrf
                <div class="flex-auto p-5 lg:p-10">
                    <h4 class="text-2xl font-semibold text-blue-black">Want to work with us?</h4>
                    <p class="leading-relaxed mt-1 mb-4 text-gray-600">
                        Complete this form and we will get back to you in 24 hours.
                    </p>
                    <div class="w-full mb-3 mt-8">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="full-name">Full
                            Name</label>
                        <input type="text" wire:model.delay="fullname" name="fullname"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Full Name" style="transition: all 0.15s ease 0s;">
                        @error('fullname')
                            <p class="text-sm font-bold text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            for="email">Email</label><input type="email" wire:model.delay="email" name="email"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Email" style="transition: all 0.15s ease 0s;">
                        @error('email')
                            <p class="text-sm font-bold text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="w-full mb-3">
                        <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                            for="message">Message</label><textarea rows="4" cols="80" wire:model.delay="message" name="message"
                            class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                            placeholder="Type a message..."></textarea>
                        @error('message')
                            <p class="text-sm font-bold text-red-500">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="text-center mt-6">
                        <button
                            class="bg-blue-black text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                            type="submit" style="transition: all 0.15s ease 0s;">
                            Send Message
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
