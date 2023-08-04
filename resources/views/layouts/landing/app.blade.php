
<!doctype html>
<html lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <title> @yield('title') - FILKOM UNDHARI</title>
        {{-- Meta --}}
        @include('includes.landing.meta')

        {{-- CSS --}}
        @include('includes.landing.style')
        

    </head>

    <body>
        {{-- Navbar --}}
        @include('components.landing.navbar')

            {{-- Content --}}
            @yield('content')
            
       {{-- Footer --}}
       @include('components.landing.footer')

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fs-5"><i data-feather="arrow-up" class="fea icon-sm icons align-middle"></i></a>
        <!-- Back to top -->

        {{-- Script --}}
        @stack('before-script')
            @include('includes.landing.script')
        @stack('after-script')
    </body>
</html>