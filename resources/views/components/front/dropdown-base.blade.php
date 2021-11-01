@props(['name'])

<div x-data="{ isOpen: false,  hover: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
    class="w-auto" x-cloak>
    <div @mouseenter="hover = true" @mouseleave="hover = false" href="#"
        class="inline-flex px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">
        <span>{{ $name }}</span>
        <svg class="w-5 h-5 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
    </div>

    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1" class="pt-5 pb-6 shadow-lg" style="display: none;">
        <div class="px-2 space-y-1 text-center rounded-md">
            {{ $slot }}
        </div>
    </div>
</div>
