<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>

    @php
        $contentNavbar = true;
        $containerNav = $containerNav ?? 'container-xxl';
        $isMenu = $isMenu ?? true;
        $navbarDetached = 'navbar-detached';
        
    @endphp

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            @include('layouts/menu/verticalMenu')


            <div class="layout-page">
                @include('layouts/navbar/navbar')

                <div class="content-wrapper">

                    <div class="container-xxl flex-grow-1 container-p-y">


                        {{ $slot }}


                    </div>

                    @include('layouts/footer/footer')

                    <div class="content-backdrop fade"></div>
                </div>

            </div>

        </div>

        @if ($isMenu)
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        @endif
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>



</body>



</html>
