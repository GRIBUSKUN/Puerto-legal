@php
    $currentRoute = Route::currentRouteName();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('const-elements.head')
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- header section end -->
        <div class="header_section">
            @include('const-elements.menu')
        </div>
        <!-- header section end -->

       <!-- Body section start -->
        @switch($currentRoute)

        @case( 'inicio' )
            @include('pages.inicio')
            @break

       @case( 'nosotros' )
            @include('pages.nosotros')
            @break

        @case( 'blog' )
            @include('pages.blog')
            @break

        @case( 'contacto' )
            @include('pages.contacto')
            @break

        @case( 'titulo-de-ejemplo' )
            @include('pages.titulo-de-ejemplo')
            @break

        @endswitch
       <!-- Body section end -->

        <!-- footer section start -->
        @include('const-elements.footer')
        <!-- javascript -->
    </body>
</html>
