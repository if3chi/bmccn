<x-front-layout>
    <section class="relative block bg-blue-black fade-in" {{-- style="background-image: url({{ setKids2ActionImage() }})" --}}>
        <div class="container px-4 py-16 mx-auto">
            <div class="flex flex-wrap justify-center text-center">
                <div class="w-full px-4 lg:w-6/12">
                    <h2 class="text-4xl font-semibold text-white">STEPUP STEM4Girls</h2>
                    <p class="mt-4 mb-4 text-lg leading-relaxed text-gray-50">
                    </p>
                </div>
            </div>
    </section>

    <section class="pb-8 -mb-2 font-sans bg-white fade-in">
        <div class="container px-4 mx-auto lg:pt-6">
            <div class="flex flex-wrap items-center mt-12">
                <div class="w-full px-4 ml-auto mr-auto md:w-5/12">
                    <h3 class="mb-2 text-3xl font-bold leading-normal md:mt-0 text-blue-950">
                        About STEM4Girls
                    </h3>
                    <p class="mt-4 mb-4 text-lg font-normal leading-relaxed text-justify text-gray-700">
                        STEPUpSTEM4Girls is our female only project, primarily focusing on young girls. The objective is to encourage,
                        stimulate and prepare young girls to pursue STEM related careers, providing resources to enhance digital transformation.
                        The project features an annual two day workshop including hands-on practical experiences and mentorship from leading ladies in the industry.
                        This project enables us to provide training as well as work experience/job shadowing in relevant industries for young girls who complete training.
                    </p>
                </div>
                <div class="w-full px-4 ml-auto mr-auto md:w-4/12">
                    <div
                        class="relative flex flex-col w-full min-w-0 my-6 break-words rounded-lg shadow-lg bg-blue-black">
                        <img alt="..." src="{{ setStemImage() }}" class="w-full align-middle rounded-t-lg">
                        <blockquote class="relative p-8 mb-4">
                            <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 583 95"
                                class="absolute left-0 block w-full" style="height: 95px; top: -94px;">
                                <polygon points="-30,95 583,95 583,65" class="fill-current text-blue-black"></polygon>
                            </svg>
                            <h4 class="text-xl font-bold text-white">
                                STEPUP STEM4Girls
                            </h4>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 -mb-2 font-sans bg-white fade-in">
        <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
            <!-- Tabs for categories -->
            <div class="tabs flex justify-center mb-5">
                @foreach (array_keys(setStemUpImagesByYear()) as $year)
                    <button
                        class="tab-button px-4 py-2 mx-1 font-bold border-2 border-transparent rounded-md shadow-md text-base
                        text-blue-950 hover:text-white hover:bg-blue-black hover:border-white"
                        data-year="{{ $year }}">
                        {{ $year }}
                    </button>
                @endforeach
            </div>

            <!-- Gallery container -->
            <div class="gallery">
                @foreach (setStemUpImagesByYear() as $year => $images)
                    <div class="gallery-year hidden" data-year="{{ $year }}">
                        <div class="-m-1 flex flex-wrap md:-m-2">
                            @foreach ($images as $image)
                                <div class="flex w-full sm:w-1/2 lg:w-1/3 flex-wrap">
                                    <div class="w-full p-1 md:p-2">
                                        <img alt="gallery" class="block rounded-lg object-cover object-center w-full h-full cursor-pointer zoomable"
                                            src="{{ $image }}" />
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Zoom Popup -->
    <div id="zoom-popup" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-50">
        <div class="relative">
            <button id="zoom-close" class="absolute top-2 right-2 text-3xl text-blue-950">&times;</button>
            <img id="zoom-image" class="max-w-full max-h-full rounded" src="" alt="Zoomed Image" />
        </div>
    </div>

    <style>
        body.no-scroll {
            overflow: hidden;
        }
    </style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.tab-button');
        const galleries = document.querySelectorAll('.gallery-year');
        const zoomPopup = document.getElementById('zoom-popup');
        const zoomImage = document.getElementById('zoom-image');
        const zoomClose = document.getElementById('zoom-close');

        if (galleries.length > 0 && tabButtons.length > 0) {
            galleries[0].classList.remove('hidden');
            tabButtons[0].classList.add('bg-blue-black', 'text-white');
        }

        tabButtons.forEach(button => {
            button.addEventListener('click', () => {
                const year = button.getAttribute('data-year');

                galleries.forEach(gallery => {
                    gallery.classList.add('hidden');
                });

                const selectedGallery = document.querySelector(`.gallery-year[data-year="${year}"]`);
                if (selectedGallery) {
                    selectedGallery.classList.remove('hidden');
                }

                tabButtons.forEach(btn => {
                    btn.classList.remove('bg-blue-black', 'text-white');
                });

                button.classList.add('bg-blue-black', 'text-white');
            });
        });

        document.querySelectorAll('.zoomable').forEach(image => {
            image.addEventListener('click', () => {
                zoomImage.src = image.src;
                zoomPopup.classList.remove('hidden');
                document.body.classList.add('no-scroll');
            });
        });

        zoomClose.addEventListener('click', () => {
            zoomPopup.classList.add('hidden');
            document.body.classList.remove('no-scroll');
        });

        zoomPopup.addEventListener('click', (e) => {
            if (e.target === zoomPopup) {
                zoomPopup.classList.add('hidden');
                document.body.classList.remove('no-scroll');
            }
        });
    });
</script>
@endpush
</x-front-layout>
