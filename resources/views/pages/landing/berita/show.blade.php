@extends('layouts.landing.app')

@section('title', 'Berita Detail')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('/storage/berita/'.$berita->foto ) }}') top;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading title-heading">
                            <div class="pages-heading">
                                <h2 class="text-white title-dark">{{ $berita->judul }}</h2>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row--> 
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
        
        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="me-lg-5">                                
                            <ul class="list-unstyled d-flex justify-content-between mt-4">
                                <li class="list-inline-item user me-2"><a href="javascript:void(0)" class="text-muted"><i class="uil uil-user text-dark"></i> {{ $berita->User->nama }}</a></li>
                                <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-dark"></i> {{ substr($berita->created_at, 0, 10) }}</li>
                            </ul>
                            
                            <img src="{{ asset('/storage/berita/'.$berita->foto ) }}" class="img-fluid rounded-md shadow" alt="">

                            <h5 class="mt-4 fw-bold">{{ $berita->judul }}</h5>

                            <p class="text-muted">{!! $berita->isi !!}</p>

                            <h5 class="mt-4">Komentar :</h5>

                            <ul class="media-list list-unstyled mb-0">
                                <li class="mt-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <a class="pe-3" href="#">
                                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                            </a>
                                            <div class="flex-1 commentor-detail">
                                                <h6 class="mb-0"><a href="javascript:void(0)" class="text-dark media-heading">Nama</a></h6>
                                                <small class="text-muted">15th August, 2021 at 01:25 pm</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <p class="text-muted fst-italic p-3 bg-light rounded">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                    </div>
                                </li>
                            </ul>

                            <h5 class="mt-4">Kirim komen terbaikmu :</h5>

                            <form class="mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label class="form-label">Komentar</label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                <textarea id="message" placeholder="Tulis Komentar" rows="5" name="message" class="form-control ps-5" required=""></textarea>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nama <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="user" class="fea icon-sm icons"></i>
                                                <input id="name2" name="name" type="text" placeholder="Nama" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <div class="form-icon position-relative">
                                                <i data-feather="mail" class="fea icon-sm icons"></i>
                                                <input id="email2" type="email" placeholder="Email" name="email" class="form-control ps-5" required="">
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-md-12">
                                        <div class="send d-grid">
                                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </form><!--end form-->
                        </div>
                    </div><!--end col-->
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">
    
                                <!-- RECENT POST -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Postinga Lainnya</h5>
                                    <div class="mt-4">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ asset('assets/landing/images/1undhari/wisudawan.jpg') }}" class="avatar avatar-small rounded" style="width: auto;" alt="">
                                            <div class="flex-1 ms-3">
                                                <a href="javascript:void(0)" class="d-block title text-dark">Julul Postingan</a>
                                                <span class="text-muted"> Waktu: 15th April 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- RECENT POST -->
                                
                                <!-- SOCIAL -->
                                <div class="widget">
                                    <h5 class="widget-title">Follow us</h5>
                                    <ul class="list-unstyled social-icon social mb-0 mt-4">
                                        <li class="list-inline-item"><a href="https://www.facebook.com/" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.instagram.com/" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                        <li class="list-inline-item"><a href="https://www.youtube.com/" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li> 
                                        <li class="list-inline-item"><a href="https://www.gmail.com/" class="rounded"><i class="uil uil-envelope" title="email" class="fea icon-sm fea-social"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@endsection
