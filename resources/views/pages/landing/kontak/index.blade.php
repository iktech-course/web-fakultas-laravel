@extends('layouts.landing.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary"
        style="background: url('{{ asset('assets/landing/images/1undhari/bg.png') }}') center center;">
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center bg-half-170">
                    <div class="pages-heading">
                        <h4 class="title mb-0 text-light">Hubungi Kami</h4>
                        <p class="para-desc text-white-50 mx-auto">Temukan jawaban atas pertanyaan Anda dan dapatkan dukungan
                            dari tim kami. Kami siap memberikan panduan yang Anda butuhkan.</p>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Start Contact -->
    <section class="section pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-phone rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Telephone</h5>
                            <p class="text-muted">Hubungi operator untuk informasi lebih lanjut mengenai Fakultas Ilmu
                                Komputer</p>
                            <a href="https://wa.me/6281277159091" class="read-more" target="_blank">+62 812-7715-9091</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-envelope rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Email</h5>
                            <p class="text-muted">Hubungi operator untuk informasi lebih lanjut mengenai Fakultas Ilmu
                                Komputer</p>
                            <a href="mailto:contact@example.com" class="read-more" target="">filkom@undhari.ac.id</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="card border-0 text-center features feature-primary feature-clean">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-map-marker rounded h3 mb-0"></i>
                        </div>
                        <div class="content mt-4">
                            <h5 class="fw-bold">Lokasi</h5>
                            <p class="text-muted">Jl.Lintas Sumatra KM-18, Kec.Koto Baru, <br>Kab.Dharmasraya, Provinsi
                                Sumatra Barat</p>
                            <a href="https://www.google.co.id/maps/dir//UNIVERSITAS+DHARMAS+INDONESIA,+Jl.+Lintas+Sumatera+No.Km+18,+Koto+Baru,+Koto+Padang,+Kabupaten+Dharmasraya,+Sumatera+Barat+27581/@-1.0584556,101.6414843,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x2e2b8dbb7c25b567:0xd20a958cf685b0f8!2m2!1d101.6437827!2d-1.0586006!3e0?entry=ttu"
                                target="_blank">View on Google map</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 pt-2 pt-sm-0 order-2 order-md-1">
                    <div class="card shadow rounded border-0">
                        <div class="card-body py-5">
                            <h4 class="card-title">Tulis Pesan Disini</h4>
                            <div class="custom-form mt-3">
                                <form action="{{ route('landing.kontak.store') }}" method="post" name="myForm" id="myForm">
                                    @csrf
                                    <p id="error-msg" class="mb-0"></p>
                                    <div id="simple-msg"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Nama <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="nama" id="name" type="text"
                                                        class="form-control ps-5" placeholder="Nama :">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="email" id="email" type="email"
                                                        class="form-control ps-5" placeholder="Email :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">No.handphone <span
                                                        class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="book" class="fea icon-sm icons"></i>
                                                    <input name="no_wa" id="subject" class="form-control ps-5"
                                                        placeholder=" +628 :">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Pesan <span class="text-danger">*</span></label>
                                                <div class="form-icon position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons clearfix"></i>
                                                    <textarea name="pesan" id="comments" rows="4" class="form-control ps-5" placeholder="Isi Pesan :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" id="submit" name="send"
                                                    class="btn btn-primary">Kirim Pesan</button>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div><!--end custom-form-->
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 order-1 order-md-2">
                    <div class="card border-0">
                        <div class="card-body p-0">
                            <img src="{{ asset('assets/landing/images/1undhari/contact.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End contact -->

@endsection
