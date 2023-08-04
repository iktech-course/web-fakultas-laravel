<!doctype html>
<html lang="en" dir="ltr">

    <head>
        @include('includes.dashboard.meta')

        <title>@yield('title') | Admin Dashboard FILKOM UNDHARI</title>

        @include('includes.dashboard.style')

    </head>

    <body>

        <div class="page-wrapper toggled">
            <!-- sidebar-wrapper -->
            @include('components.dashboard.sidebar')

            <!-- sidebar-wrapper  -->

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <!-- Top Header -->
                @include('components.dashboard.header')

                <!-- Top Header -->

                <div class="container-fluid">
                   @yield('content')
                </div><!--end container-->

                <!-- Footer Start -->

                @include('components.dashboard.footer')
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        
        <!-- javascript -->
        <!-- JAVASCRIPT -->
        @stack('before-script')
        @include('includes.dashboard.script')
        @stack('after-script')

    </body>

</html>