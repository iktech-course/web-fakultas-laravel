@extends('layouts.landing.app')

@section('title', 'Prodi')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-260 bg-primary d-table w-100" style="background-image: url('assets/images/course/detail.png');">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h4 class="title mb-0 text-light"> Program Studi </h4>
                            <p class="para-desc text-white-50 mx-auto">Pilihlah jalur karier Anda di dunia ilmu komputer. Temukan program studi yang sesuai untuk mencapai impian Anda dalam teknologi.</p>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        
        <!--Blog Lists Start-->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- Blog Post Start -->
                    <div class="col-lg-12 col-6">
                        <div class="row">
                            <div class="col-12 mb-4 pb-2">
                                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/landing/images/1undhari/ti.png') }}" class="img-fluid" alt="">
                                            <div class="overlay"></div>
                                            <div class="author">
                                                <small class="user"><i class="uil uil-user"></i> Kaprodi: Lido Sabda Lesmana M.Kom</small>
                                            </div>
                                        </div><!--end col-->
        
                                        <div class="col-md-6">
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Teknik Informatika</a></h5>
                                                <p class="text-muted mb-0">Jurusan Teknik Informatika adalah program studi di perguruan tinggi yang fokus pada pengembangan dan penerapan teknologi informasi, termasuk perangkat lunak, perangkat keras, dan jaringan komputer.</p>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <a href="{{ route('landing.prodi.show-ti') }}" class="text-primary fw-medium readmore">Baca Lebih Lanjut <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->
                                </div><!--end blog post-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->

                    <div class="col-lg-12 col-6">
                        <div class="row">
                            <div class="col-12 mb-4 pb-2">
                                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                                    <div class="row align-items-center g-0">
                                        <div class="col-md-6">
                                            <img src="{{ asset('assets/landing/images/1undhari/si.png') }}" class="img-fluid" alt="">
                                            <div class="overlay"></div>
                                            <div class="author">
                                                <small class="user d-block"><i class="uil uil-user"></i> Kaprodi: Elinda Revita M.Kom</small>
                                            </div>
                                        </div><!--end col-->
        
                                        <div class="col-md-6">
                                            <div class="card-body content">
                                                <h5><a href="javascript:void(0)" class="card-title title text-dark">Sistem Informasi</a></h5>
                                                <p class="text-muted mb-0">Jurusan Sistem Informasi adalah sebuah bidang studi yang menggabungkan ilmu komputer dengan manajemen bisnis untuk mengelola dan memanfaatkan teknologi informasi dalam suatu organisasi. Fokus utama dari jurusan ini adalah mengembangkan, menerapkan, dan memelihara sistem informasi yang efisien untuk mendukung proses bisnis dan pengambilan keputusan.</p>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <a href="{{ route('landing.prodi.show-si') }}" class="text-primary fw-medium readmore">Baca Lebih Lanjut <i class="uil uil-angle-right-b align-middle"></i></a>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div> <!--end row-->
                                </div><!--end blog post-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                    <!-- Blog Post End -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section -->
        <!--Blog Lists End-->