 <div class="container mx-auto p-4" x-data="gallery()">

        <!-- Main Image Gallery -->
        <div class="relative mb-8">
            <div class="flex overflow-x-auto no-scrollbar space-x-4 pb-4">
                <template x-for="(image, index) in displayedImages" :key="index">
                    <div class="flex-shrink-0 w-64 h-96 relative">
                        <img :src="image" alt="Gallery Image" class="w-full h-full object-cover rounded-lg shadow-md cursor-pointer" @click="openModal(image)">
                    </div>
                </template>
            </div>
        </div>

        <!-- Video Carousel -->
        <div class="relative" x-data="carousel()">
            <div class="relative lg:pl-3">
                <template x-for="(video, index) in videos" :key="index">
                    <div x-show="activeVideo === index" class="relative" style="padding-bottom: 46.25%;">
                        <iframe :src="video + '?autoplay=1'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="absolute inset-0 w-full h-full rounded-lg shadow-md"></iframe>
                    </div>
                </template>

                <button @click="prev" class="absolute left-0 lg:left-2 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button @click="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-3 py-2 rounded-full">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Image Modal -->
        <div x-show="modalOpen" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-75">
            <div class="relative bg-white p-4 rounded-lg shadow-lg max-w-full max-h-full">
                <button @click="closeModal" class="absolute top-2 right-2 text-white bg-gray-800 rounded-full p-2">
                    <i class="fas fa-times"></i>
                </button>
                <img :src="modalImage" alt="Zoomed Image" class="max-w-full max-h-full rounded-lg">
            </div>
        </div>
    </div>

    <script>
        function gallery() {
            return {
                images: [
                '{{ asset('images/bmccn/1.jpg')}}',
                '{{ asset('images/bmccn/2.jpg')}}',
                '{{ asset('images/bmccn/3.jpg')}}',
                '{{ asset('images/bmccn/4.jpg')}}',
                '{{ asset('images/bmccn/5.jpg')}}',
                '{{ asset('images/bmccn/6.jpg')}}',
                '{{ asset('images/bmccn/7.jpg')}}',
                '{{ asset('images/bmccn/8.jpg')}}'
                ],
                displayedImages: [],
                modalOpen: false,
                modalImage: '',
                init() {
                    this.displayedImages = this.images.slice(0, 6);
                    document.querySelector('.container').classList.add('modal-open');
                },
                openModal(image) {
                    this.modalImage = image;
                    this.modalOpen = true;
                    document.querySelector('.container').classList.add('modal-open');
                },
                closeModal() {
                    this.modalOpen = false;
                    this.modalImage = '';
                    document.querySelector('.container').classList.remove('modal-open');
                }
            }
        }

        function carousel() {
            return {
                activeVideo: 0,
                videos: [
                    'https://www.youtube.com/embed/aV2AWoLM0YA',
                    'https://www.youtube.com/embed/6ZHfPmIufuc',
                ],
                prev() {
                    this.activeVideo = (this.activeVideo === 0) ? this.videos.length - 1 : this.activeVideo - 1;
                    this.updateIframe();
                },
                next() {
                    this.activeVideo = (this.activeVideo === this.videos.length - 1) ? 0 : this.activeVideo + 1;
                    this.updateIframe();
                },
                updateIframe() {
                    const iframe = this.$el.querySelector('iframe');
                    iframe.src = this.videos[this.activeVideo] + '?autoplay=1';
                }
            }
        }
    </script>
