@extends('layouts.landing.app')

@section('title', 'Detail Dosen')

@section('content')
    <!-- Hero Start -->
    <section class="bg-profile d-table w-100 bg-primary"
        style="background: url('assets/images/1undhari/bg.png') center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-2 col-md-3 text-md-start text-center">
                                    <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                        class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                                </div><!--end col-->
                                <div class="col-lg-10 col-md-9">
                                    <div class="row align-items-end">
                                        <div class="col-md-7 text-md-start text-center mt-4 mt-sm-0">
                                            <h3 class="title mb-0">{{ $dosen->nama }}</h3>
                                            <small class="text-muted h6 me-2">{{ $dosen->jabatan_struktural }}</small>
                                            <ul class="list-inline mb-0 mt-3">
                                                <li class="list-item me-2 mb-0"><a href="https://wa.me/6281277159091"
                                                        class="text-muted like"><i class="uil uil-whatsapp me-1"></i>{{ $dosen->no_wa }}</a></li>
                                            </ul>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </div><!--end col-->  
                            </div><!--end row-->
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--ed container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- Profile Start -->
    <section class="section mt-60">
        <div class="container mt-lg-3">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 d-lg-block">
                    <div class="sidebar sticky-bar p-4 rounded shadow">
                        <div class="widget">
                            <h5>Personal Details :</h5>
                            <div class="mt-4">
                                <div class="d-flex align-items-center">
                                    <i data-feather="" class="fea icon-ex-md text-muted me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-primary mb-0">Nama :</h6>
                                        <a href="javascript:void(0)" class="text-muted">{{ $dosen->nama }}</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <i data-feather="" class="fea icon-ex-md text-muted me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-primary mb-0">NIDN :</h6>
                                        <a href="javascript:void(0)" class="text-muted">{{ $dosen->nidn }}</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <i data-feather="" class="fea icon-ex-md text-muted me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-primary mb-0">Jabatan Struktual:</h6>
                                        <a href="javascript:void(0)" class="text-muted">{{ $dosen->jabatan_struktural }}</a>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <i data-feather="" class="fea icon-ex-md text-muted me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-primary mb-0">Jabatan Fungsional :</h6>
                                        <p class="text-muted mb-0">{{ $dosen->jabatan_fungsional }}</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mt-3">
                                    <i data-feather="" class="fea icon-ex-md text-muted me-3"></i>
                                    <div class="flex-1">
                                        <h6 class="text-primary mb-0">Status Ikatan Kerja :</h6>
                                        <a href="javascript:void(0)" class="text-muted">Dosen {{ $dosen->ikatan_kerja }}</a>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-8 col-sm-12">
                    <div class="border-bottom pb-4">
                        <h5 class="mx-2 mt-3">{{ $dosen->nama }}</h5>
                        <p class="text-muted mb-0 mx-2 mt-3">{{ $dosen->deskripsi }}</p>
                    </div>   

                    <div class="col-lg-12 col-sm-12 mt-3">
                        <div class="border-bottom pb-4">
                            <h5>Mata Kuliah :</h5>
                            <div class="col-md-12">
                                <div class="table-responsive bg-white shadow rounded mt-3">
                                    <table class="table mb-0 table-center">
                                        <thead>
                                            <tr>
                                                <th scope="col"
                                                    class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                    style="min-width: 100px;">Kode MK</th>
                                                <th scope="col"
                                                    class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                    style="min-width: 100px;">Mata Kuliah</th>
                                                <th scope="col"
                                                    class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                    style="min-width: 100px;">SKS</th>
                                                <th scope="col"
                                                    class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                    style="min-width: 100px;">Semester</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th class="text-center">
                                                    <div class="align-items-center">
                                                        <i class="uil uil-notes h6 text-primary"></i>
                                                        <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                class="text-dark">TIF101</a></p>
                                                    </div>
                                                </th>
                                                <td class="p-0 text-center">Elektronika Dasar</span></td>
                                                <td class="p-2 text-center">2</td>
                                                <td class="p-0 text-center">Semester 2</td>
                                            </tr>  
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div>

                        <div class="col-lg-12 col-12 mt-3">
                            <div class="border-bottom pb-4">
                                <h5>Publikasi :</h5>
                                <div class="col-md-12">
                                    <div class="table-responsive bg-white shadow rounded mt-3">
                                        <table class="table mb-0 table-center">
                                            <thead>
                                                <tr>
                                                    <th scope="col"
                                                        class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                        style="min-width: 100px;">Judul Jurnal</th>
                                                    <th scope="col"
                                                        class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                        style="min-width: 100px;">Publisher</th>
                                                    <th scope="col"
                                                        class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                        style="min-width: 100px;">Tahun</th>
                                                    <th scope="col"
                                                        class="fw-bold border-bottom text-primary py-4 px-3 text-center"
                                                        style="min-width: 100px;">Link</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th class="text-center">
                                                        <div class="align-items-center">
                                                            <i class="uil uil-book-open h6 text-primary"></i>
                                                            <p class="mb-0 d-inline fw-normal h6 ms-1"><a
                                                                    class="text-dark"> Rancang Bangun Sistem Informasi
                                                                    Lowongan Kerja Berbasis WEB</a></p>
                                                        </div>
                                                    </th>
                                                    <td class="p-0 text-center">Jurnal Ilmiah Teknologi Informasi
                                                        Asia</span></td>
                                                    <td class="p-2 text-center">2021</td>
                                                    <td class="p-0 text-center"><a
                                                            href="https://scholar.google.co.id/citations?view_op=view_citation&hl=id&user=DRtE0YQAAAAJ&citation_for_view=DRtE0YQAAAAJ:_FxGoFyzp5QC" target="_blank" class="badge bg-primary">Link
                                                            Jurnal</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!--end col-->
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
    </section><!--end section-->

@endsection
