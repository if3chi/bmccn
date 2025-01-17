<x-front-layout>
    <section class="relative block bg-blue-black fade-in" {{-- style="background-image: url({{ setKids2ActionImage() }})" --}}>
        <div class="container px-4 py-16 mx-auto">
            <div class="flex flex-wrap justify-center text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold text-white">Leadership &amp; Mentoring Academy</h2>
                    <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-50">
                    </p>
                </div>
            </div>
    </section>

    <section class="block py-24 bg-white lg:pt-0 fade-in">
        <div class="container px-4 pt-6 mx-auto lg:pt-12">
            <!-- Tabs for categories -->
            <div class="tabs flex justify-center -mb-2">
                @foreach (array_keys(getSchoolImgs()) as $year)
                    <button class="tab-button px-4 py-2 mx-1 font-bold border-2 border-transparent rounded-md shadow-md text-base
                        text-blue-950 hover:text-white hover:bg-blue-black hover:border-white" data-category="{{ $year }}">
                        {{ $year }}
                    </button>
                @endforeach
            </div>

            <!-- Gallery container -->
            <div class="gallery">
                @foreach (getSchoolImgs() as $year => $images)
                    <div class="gallery-category hidden" data-category="{{ $year }}">
                        <div class="flex flex-wrap items-center">
                            @foreach ($images as $image)
                                <x-img title="{{ $image['title'] }}" src="{{ setSchoolImg($image['src']) }}" alt="Photo with school children" />
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabButtons = document.querySelectorAll('.tab-button');
            const categories = document.querySelectorAll('.gallery-category');

            if (categories.length > 0 && tabButtons.length > 0) {
                categories[0].classList.remove('hidden');
                tabButtons[0].classList.add('bg-blue-black', 'text-white');
            }

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const category = button.getAttribute('data-category');

                    categories.forEach(cat => {
                        cat.classList.add('hidden');
                    });

                    const selectedCategory = document.querySelector(`.gallery-category[data-category="${category}"]`);
                    if (selectedCategory) {
                        selectedCategory.classList.remove('hidden');
                    }

                    tabButtons.forEach(btn => {
                        btn.classList.remove('bg-blue-black', 'text-white');
                    });

                    button.classList.add('bg-blue-black', 'text-white');
                });
            });
        });
    </script>
    @endpush
</x-front-layout>
