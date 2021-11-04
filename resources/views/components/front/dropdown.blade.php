@props(['name'])

<div x-data="{ isOpen: false,  hover: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false"
    class="w-auto" x-cloak>
    <div @mouseenter="hover = true" @mouseleave="hover = false"
        class="relative inline-block flex font-medium text-blue-black hover:text-red-950 space-x-1">
        <span>{{ $name }}</span>
        <svg class="w-5 h-5 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
            <span x-show="hover"
                class="absolute inset-0 inline-block w-full h-full transform border-t-2 border-red-950"
                x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
        </span>
    </div>

    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 translate-y-1"
        class="absolute text-center z-20 py-3 px-1 my-3 space-y-1 transform text-blue-black bg-white shadow-lg lg:-ml-24 lg:left-1/2 w-64 rounded"
        style="display: none;">

        {{ $slot }}
    </div>
</div>
