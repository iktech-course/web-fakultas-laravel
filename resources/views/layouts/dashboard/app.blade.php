<!doctype html>
<html lang="en" dir="ltr">

    <head>
        @include('includes.dashboard.meta')

        <title>@yield('title') | Admin Dashboard </title>

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
                    <div class="layout-specing">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1">Selamat Datang, Ichsan Khaliq Adyanda</h6>
                                <h5 class="mb-0">Dashboard</h5>
                            </div>

                         
                        </div>
                    
                        <div class="row">
                            <div class="col-4 mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-newspaper mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Jumlah Berita</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="10">10</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col-4 mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-user-circle fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Dosen</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="15">15</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div><!--end col-->
                            
                            <div class="col-4 mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-message fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Pesan</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="30">30</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
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