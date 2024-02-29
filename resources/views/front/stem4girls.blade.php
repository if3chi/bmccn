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
                        STEP Up STEM4Girls is our project primarily focusing on young girls. The objective is to
                        encourage, stimulate and prepare young girls to pursue STEM related careers, providing resources
                        to enhance digital transformation and training. The 2 day workshop includes hands-on practical
                        experiences and mentorship from leading ladies in the industry.
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
                                Step up - Stem Education
                            </h4>
                            <p class="mt-2 font-normal text-white text-md">
                                In collaboration with <a
                                    class="flex space-x-1 py-2 px-6 bg-white border-2 text-center justify-center border-transparent rounded-md shadow-md text-base font-medium text-blue-950 hover:text-white hover:bg-blue-black hover:border-white"
                                    href="https://makersplacegh.com/" target="_blank">Makers Place
                                    GH</a>
                            </p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pb-20 -mb-2 font-sans bg-white fade-in">
        <div class="container mx-auto px-5 py-2 lg:px-32 lg:pt-12">
            <div class="-m-1 flex flex-wrap md:-m-2">
                @foreach (setStemUpImages() as $image)
                    <div class="flex w-1/3 flex-wrap">
                        <div class="w-full p-1 md:p-2">
                            <img alt="gallery" class="block rounded-lg object-cover object-center"
                                src="{{ $image }}" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-front-layout>
