@extends('layouts.landing.app')

@section('title', 'Kegiatan Akademik')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/landing/images/1undhari/berita.jpg') }}') top;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading title-heading">
                            <div class="pages-heading">
                                <h2 class="text-white title-dark"> Judul Kegiatan Akademik </h2>
                                <ul class="list-unstyled mt-4">
                                    <li class="list-inline-item h6 user text-white-50 me-2"><i class="mdi mdi-account"></i> Nama Panitia / Admin</li>
                                    <li class="list-inline-item h6 date text-white-50"><i class="mdi mdi-calendar-check"></i> Tanggal Kegiatan 25th June 2021</li>
                                </ul>
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
                    <div class="col-lg-12 col-md-12">
                        <div class="me-lg-5">
                            <ul class="list-unstyled d-flex justify-content-between mt-4">
                                <li class="list-inline-item user me-2"><a href="javascript:void(0)" class="text-muted"><i class="uil uil-user text-primary"></i><span class="text-primary fw-medium"> Nama Panitia</span></a></li>
                                <li class="list-inline-item date text-muted"><i class="uil uil-calendar-alt text-primary"></i><span class="text-primary fw-medium"> 25th June 2021</span></li>
                            </ul>
                            <h5 class="mt-4">Sub Judul Kegiatan Akademik</h5>
                            <p class="text-muted">This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody.</p>
                            <p class="text-muted">Due to its widespread use as filler text for layouts, non-readability is of great importance: human perception is tuned to recognize certain patterns and repetitions in texts. If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area).</p>
                        </div>
                    </div><!--end col-->
                    <!-- BLog End -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->