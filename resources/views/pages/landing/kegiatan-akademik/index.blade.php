@extends('layouts.landing.app')

@section('title', 'Kegiatan Akademik')

@section('content')
        <!-- Hero Start -->
        <section class="bg-profile d-table w-100 bg-primary" style="background: url('assets/images/1undhari/bg.png') center center;">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center bg-half-170">
                        <div class="pages-heading">
                            <h4 class="title mb-0 text-light"> Kegiatan Akademik </h4>
                            <p class="para-desc text-white-50 mx-auto">Jangan lewatkan kesempatan untuk terlibat dalam kegiatan akademik kami. Ikuti workshop, seminar, dan acara lainnya untuk meningkatkan pengetahuan Anda.</p>

                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-4 pb-2">
                        <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                            <div class="card-body content">
                                <h5><a href="berita-detail.html" class="card-title title text-dark">Seminar : Melek dunia teknologi 5.0</a></h5>
                                <div class="post-meta d-flex justify-content-between align-items-center mt-3">
                                    <ul class="list-unstyled mb-0">
                                        <li class="list-item"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-user me-1"></i>Kaprodi</a></li>
                                        <li class="list-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-location-point me-1"></i>Ruang 2.3</a></li>
                                        <li class="list-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-calender me-1"></i>01 September 2023</a></li>
                                        <li class="list-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-clock me-1"></i>08 : 00 WIB</a></li>
                                    </ul>
                                    <a href="{{ route('landing.kegiatan.show') }}" class="text-muted readmore">Detail Kegiatan <i class="uil uil-angle-right-b align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->