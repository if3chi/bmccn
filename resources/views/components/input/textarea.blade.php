@props(['id' => false])

<div class="w-full mt-6">
    <label class="block uppercase text-blue-50 text-xs font-bold mb-2" for="{{ $id }}">
        {{ $slot }}
    </label>
    <textarea id="{{ $id }}"
        {{ $attributes->merge(['class' => 'border-0 px-3 py-3 placeholder-gray-500 text-gray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full']) }}
        rows="4" cols="80">
    </textarea>
</div>
