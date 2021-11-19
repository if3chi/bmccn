@props(['id' => false, 'error' => false])

<div class="w-full mb-3 mt-6">
    <label class="block uppercase text-blue-50 text-xs font-bold mb-2"
        for="{{ $id }}">{{ $slot }}</label>
    <input id="{{ $id }}"
        {{ $attributes->merge(['class' => 'border-0 px-3 py-3 placeholder-gray-500 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) }}
        style="transition: all 0.15s ease 0s;">

        @if ($error)
            <p class="text-sm font-bold mt-2 text-red-500">
                {{ $error }}
            </p>
        @endif
</div>
