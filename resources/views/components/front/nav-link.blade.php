<a {{ $attributes->merge(['class' => 'relative inline-block font-medium text-blue-black hover:text-red-950']) }} x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false"
 x-cloak>
    <span class="block text-base">{{ $slot }}</span>
    <span class="absolute bottom-0 left-0 inline-block w-full h-1 -mb-1 overflow-hidden">
        <span x-show="hover" class="absolute inset-0 inline-block w-full h-full transform border-t-2 border-red-950"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"></span>
    </span>
</a>
