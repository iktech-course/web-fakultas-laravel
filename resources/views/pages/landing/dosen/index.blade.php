@extends('layouts.landing.app')

@section('title', 'Dosen')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-170 bg-primary d-table w-100">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h4 class="title mb-0 text-color-white"> Dosen </h4>
                            <p class="para-desc text-white-50 mx-auto">Temukan profil lengkap dan keahlian dari para dosen terkemuka kami. Jelajahi kontribusi mereka dalam dunia ilmu komputer dan teknologi.</p>

                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
        </section><!--end section-->
        <!-- Hero End -->

 
        <!-- Team Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                        </div>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 mt-4 pt-2">
                        <div class="card team team-primary text-center border-0">
                            <div class="position-relative">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            </div>
                            <div class="card-body py-3 px-0 content">
                                <h5 class="mb-0"><a href="{{ route('landing.dosen.show') }}" class="name text-dark">Nama Dosen</a></h5>
                                <small class="designation text-muted">Jabatan Dosen</small>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Team Start -->
@endsection
