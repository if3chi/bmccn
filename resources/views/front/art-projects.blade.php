<x-front-layout>
    <section class="relative block bg-blue-black fade-in" {{-- style="background-image: url({{ setKids2ActionImage() }})" --}}>
        <div class="container px-4 py-12 mx-auto">
            <div class="flex flex-wrap justify-center text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold text-white">Art Projects</h2>
                    <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-50">
                    </p>
                </div>
            </div>
    </section>

    <section class="block pb-24 bg-white lg:pt-0 fade-in">
        <div class="container px-4 mx-auto lg:pt-12">
            <div class="flex flex-wrap items-center mt-12">
                <!-- <x-art-card /> -->
                <x-art-project-gallery />
            </div>
        </div>
    </section>

@push('styles')
    <!-- Test Styles -->
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .modal-open {
            overflow: hidden;
        }
    </style>
@endpush
</x-front-layout>

