@extends('layouts.landing.app')

@section('title', 'Berita')

@section('content')
    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary"
        style="background: url('{{ asset('assets/landing/images/1undhari/bg.png') }}') center center;">
        <div class="container">
            <div class="overlay"></div>
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center bg-half-170 d-table">
                    <div class="pages-heading">
                        <h4 class="title mb-0 text-light"> Berita </h4>
                        <p class="para-desc text-white-50 mx-auto">Ketahui lebih banyak tentang topik ini! Baca selengkapnya
                            untuk mendapatkan informasi mendalam mengenai berita terkini dari Fakultas Ilmu Komputer.</p>
                    </div>
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Blog STart -->
    <section class="section">
        <div class="container">
            <div class="row">
                @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 mb-4 pb-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('/storage/berita/'.$item->foto ) }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content"> 
                            <h5><a href="{{ Route('landing.berita.show', $item->id) }}" class="card-title title text-dark">{{ $item->judul }}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="{{ Route('landing.berita.show', $item->id) }}" class="text-muted readmore">Read More <i
                                        class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div>
                        <div class="author">
                            <small class="user d-block"><i class="uil uil-user"></i> {{ $item->User->nama }}</small>
                            <small class="date"><i class="uil uil-calendar-alt"></i> {{ substr($item->created_at, 0, 10) }}</small>
                        </div>
                    </div>
                </div><!--end col-->                    
                @endforeach

                <!-- PAGINATION START -->
                <div class="col-12">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="javascript:void(0)"
                                aria-label="Previous">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Next</a>
                        </li>
                    </ul>
                </div><!--end col-->
                <!-- PAGINATION END -->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Blog End -->
@endsection
