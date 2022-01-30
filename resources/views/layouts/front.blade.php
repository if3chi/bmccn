<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <meta name="description"
        content="Blooming Minds Change Champions Network is an early intervention youth development organisation" />
        
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@bmccn" />
    <meta name="twitter:title" content="BMCCN" />
    <meta name="twitter:description"
        content="Blooming Minds Change Champions Network is an early intervention youth development organisation" />

    <meta name="twitter:image"
        content="https://i0.wp.com/bmccn.org/wp-content/uploads/2020/01/IMG-20190722-WA0012.jpg?resize=1024%2C678&ssl=1" />
    <meta name="twitter:creator" content="@bmccn" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="BMCCN" />
    <meta property="og:description"
        content="Blooming Minds Change Champions Network is an early intervention youth development organisation" />

    <meta property="og:image"
        content="https://i0.wp.com/bmccn.org/wp-content/uploads/2020/01/IMG-20190722-WA0012.jpg?resize=1024%2C678&ssl=1" />
    <meta property="description"
        content="Blooming Minds Change Champions Network is an early intervention youth development organisation" />


    <title>Equip. Empower. Elevate. - BMCCN</title>

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('styles')
    @livewireStyles
</head>

<body>

    <!-- Header -->
    <x-front.header />

    <main>
        {{ $slot }}
    </main>

    <!-- Footer -->
    <x-front.footer />

    <!--scripts -->

    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        window.addEventListener('swal', function(e) {

            let positions = {
                'top': {
                    position: 'top-end',
                    showClass: {
                        popup: 'animate__animated animate__slideInDown'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__slideOutUp'
                    },
                },
                'bottom': {
                    position: 'bottom-end',
                    showClass: {
                        popup: 'animate__animated animate__slideInUp'
                    },
                    hideClass: {
                        popup: 'animate__animated animate__slideOutDown'
                    },
                },
            }

            const Toast = Swal.mixin({
                toast: true,
                showConfirmButton: false,
                timer: 3555,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                },
                footer: "<img class='h-5 w-auto text-left mr-14' src='{{ asset('images/logo.png') }}' alt='BMCCN Logo'>",
                ...positions['bottom']
            })

            Toast.fire({
                ...e.detail,
                ...positions[e.detail.position]
            })
        });
    </script>

    @livewireScripts
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
