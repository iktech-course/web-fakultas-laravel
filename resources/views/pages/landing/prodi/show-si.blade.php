@extends('layouts.landing.app')

@section('title', 'Prodi-si-detail')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-260 bg-primary d-table w-100" style="background-image: url('{{ asset('assets/landing/images/course/detail.png') }}');">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading">
                            <h2 class="title text-white title-dark mt-3 mb-0"> Selamat Datang di Prodi Sistem Informatika</h2>

                            <ul class="list-unstyled mt-3 mb-0">
                                <li class="align-items-center justify-content-center list-inline-item mx-1">
                                    <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-ex-small rounded-pill shadow" alt="">
                                    <a href="javascript:void(0)" class="text-white title-dark ms-1">Elinda Revita</a>
                                </li>
                            </ul>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
                <!-- Start -->
                <section class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-title">
                                    <h4 class="title mb-4">Apa itu jurusan Sistem Informasi ?</h4>
                                    <p class="text-muted">
                                        <span class="text-primary fw-bold">Jurusan Sistem Informasi adalah</span> salah satu jurusan atau program studi di perguruan tinggi yang berfokus pada pengembangan dan penerapan teknologi informasi dalam berbagai aspek bisnis dan organisasi. Program studi ini bertujuan untuk menghasilkan tenaga ahli yang mampu merancang, mengelola, dan mengoptimalkan sistem informasi dalam konteks suatu organisasi atau perusahaan.
                                       
                                    <p class="text-muted">
                                        <span class="text-primary fw-bold">Jurusan Sistem Informasi memiliki peran penting</span> dalam membantu organisasi meningkatkan efisiensi, efektivitas, dan daya saingnya melalui penerapan teknologi informasi yang tepat. Lulusan dari jurusan ini dapat bekerja sebagai analis sistem, pengembang perangkat lunak, manajer TI, konsultan bisnis, atau pekerja di berbagai bidang yang menggabungkan teknologi informasi dengan bisnis dan manajemen.

                                    </p>
        
                                    </p>
                                    
                                </div>
        
                                <div class="row">
                                    <div class="col-md-6 mt-4 pt-2"><img src="{{ asset('assets/landing/images/1undhari/de01.jpg') }}" class="img-fluid rounded shadow" alt=""></div>
                                    <div class="col-md-6 mt-4 pt-2">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/landing/images/1undhari/de02.jpg') }}" class="rounded img-fluid mx-auto d-block" alt="">
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
        
                                <div class="section-title mt-4 pt-2">
                                    <h4 class="title mb-0">Mata Kuliah</h4>
                                    <div class="row">
                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 1</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT102</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Paket Program Niaga</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT103</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Matematika Diskrit</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">TIF101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Algoritma dan Pemrograman</span></td>
                                                            <td class="p-2 text-center">3</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">TIF102</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Elektronik Dasar</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">TIF103</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Kalkulus</span></td>
                                                            <td class="p-2 text-center">3</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">TIF104</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Pengantar Teknologi Informasi</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">UND101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Agama</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">UND102</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Kewarganegaraan</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">UND103</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Indonesia</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">UND104</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Pengenmabangan Karakter Berakhlak Mulia</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 1-->
        
                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 2</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                             <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 2-->  

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 3</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 3-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 4</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 4-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 5</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 5-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 6</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 6-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 7</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 7-->

                                        <div class="col-md-6 mt-4 pt-2">
                                            <h5 class="mb-0">Semester 8</h5>
        
                                            <div class="table-responsive bg-white shadow rounded mt-4">
                                                <table class="table mb-0 table-center">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Kode MK</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">Mata Kuliah</th>
                                                            <th scope="col" class="fw-bold border-bottom text-primary py-4 px-3 text-center" style="min-width: 100px;">SKS</th>
                                                        </tr>
                                                    </thead>
                    
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="align-items-center">
                                                                    <i class="uil uil-notes h6 text-primary"></i>
                                                                    <p class="mb-0 d-inline fw-normal h6 ms-1"><a class="text-dark">KPT101</a></p>
                                                                </div>
                                                            </th>
                                                            <td class="p-0 text-center">Bahasa Inggris</span></td>
                                                            <td class="p-2 text-center">2</td>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!--end col 8-->
                                </div>   
                                </div>
        
                                <div class="section-title mt-4 pt-5">
                                    <h4 class="title mb-0">Kepala Prodi Sistem Informasi</h4>
        
                                    <div class="d-md-flex align-items-center mt-4 pt-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-medium rounded-pill" alt="">
        
                                        <div class="ms-md-3 mt-4 mt-sm-0">
                                            <a href="{{ route('landing.dosen.index') }}" class="text-dark h5">Erlinda Revita</a>
                                            <p class="text-muted mb-0 mt-2">I have started my career as a trainee and prove my self and achieve all the milestone with good guidance and reach up to the project manager. In this journey, I understand all the procedure which make me a good developer, team leader, and a project manager.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </section><!--end section-->
                <!-- End -->