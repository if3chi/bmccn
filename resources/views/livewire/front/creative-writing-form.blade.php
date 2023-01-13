<div class="flex flex-wrap justify-center">
    <form class="w-full lg:w-10/12" wire:submit.prevent="submitEntry">
        @csrf
        <div class="flex flex-col w-full min-w-0 mt-10 mb-6 break-words rounded-lg shadow-lg bg-blue-black">
            <div class="flex-auto p-5 lg:p-10">
                <h4 class="text-2xl font-semibold text-white">Submit Your Entry</h4>

                <x-input.text name="firstname" wire:model.delay="editing.firstname" type="text" id="first-name"
                    placeholder="First Name" :error="$errors->first('editing.firstname')">First
                    Name</x-input.text>

                <x-input.text name="lastname" wire:model.delay="editing.lastname" type="text" id="last-name"
                    placeholder="Last Name" :error="$errors->first('editing.lastname')">Last Name</x-input.text>

                <x-input.text name="phone" wire:model.delay="editing.phone" type="phone" id="phone"
                    placeholder="0201234567" :error="$errors->first('editing.phone')">
                    Phone</x-input.text>

                <x-input.text name="email" wire:model.delay="editing.email" type="email" id="email"
                    placeholder="Email" :error="$errors->first('editing.email')">Email
                </x-input.text>

                <x-input.text name="age" wire:model.delay="editing.age" type="number" id="age"
                    placeholder="Age" min="6" max="10" :error="$errors->first('editing.age')">Age</x-input.text>

                <x-input.text name="title" wire:model.delay="editing.title" type="text" id="title"
                    placeholder="Essay Title" :error="$errors->first('editing.title')">
                    Title</x-input.text>

                <x-input.textarea name="essay" wire:model.delay="editing.essay" id="essay"
                    placeholder="Type your Essay..." :error="$errors->first('editing.essay')">Essay
                </x-input.textarea>

                <div class="mt-6 text-center">
                    <button
                        class="px-6 py-3 mb-1 mr-1 text-sm font-bold uppercase bg-white rounded-md shadow outline-none text-blue-black active:bg-gray-700 hover:shadow-lg focus:outline-none"
                        type="submit" style="transition: all 0.15s ease 0s;">
                        Submit Essay
                    </button>

                </div>
                @if ($errors->any())
                    <div class="w-full text-sm text-center transition duration-500 ease-in-out">
                        <p class="p-2 mt-4 -mb-6 text-white bg-red-500 rounded-md">
                            There are error(s) on the form, kindly check and fix them!!
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </form>
</div>
