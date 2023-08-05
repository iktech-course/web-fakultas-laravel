@extends('layouts.landing.app')

@section('title', 'Fasilitas')

@section('content')
    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/landing/images/1undhari/berita.jpg') }}');">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row mt-5 justify-content">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark"> Fasilitas</h2>
                        <p class="text-white-50 para-desc mb-0 mx-auto">Mulai jelajahi fasilitas menarik yang berada pada
                            Fakultas Ilmu Komputer.</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="position-breadcrumb">
                <nav aria-label="breadcrumb" class="d-inline-block">
                </nav>
            </div>
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-3 col-md-6">
                    <div
                        class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">Laboratorium Komputer</a>
                            <p class="text-muted mt-2">Fasilitas ini dilengkapi dengan perangkat keras dan perangkat lunak
                                terbaru untuk mendukung kegiatan praktikum dan penelitian dalam berbagai bidang ilmu
                                komputer.</p>
                            <i class="uil uil-airplay full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div
                        class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="uil uil-clipboard-alt rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">Perpustakaan </a>
                            <p class="text-muted mt-2">Dengan koleksi buku, jurnal, dan sumber daya digital yang kaya,
                                perpustakaan kami adalah tempat ideal untuk mengeksplorasi topik terbaru dalam ilmu
                                komputer. Sumber daya ini akan membantu Anda dalam menyelesaikan tugas akademik dan mengejar
                                minat penelitian Anda</p>
                            <i class="uil uil-clipboard-alt full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div
                        class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="uil uil-home rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">Ruang Kuliah Interaktif</a>
                            <p class="text-muted mt-2">Kami memiliki ruang kuliah modern yang dilengkapi dengan teknologi
                                canggih. Dengan proyektor, layar sentuh interaktif, dan sistem audio mutakhir, mahasiswa
                                dapat terlibat dalam pengajaran interaktif yang menarik.</p>
                            <i class="uil uil-home full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                    <div
                        class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="uil uil-notebooks rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">Pusat Karir dan Pengembangan
                                Profesional</a>
                            <p class="text-muted mt-2">Fasilitas ini membantu mahasiswa dalam mempersiapkan karir mereka
                                setelah lulus. Kami menyediakan sesi pelatihan, lokakarya, dan sumber daya karir untuk
                                membantu mereka mencapai tujuan profesional mereka.</p>
                            <i class="uil uil-notebooks full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div
                        class="card border-0 features feature-primary feature-clean course-feature p-4 overflow-hidden shadow">
                        <div class="icons text-start">
                            <i class="uil uil-layer-group rounded h3 mb-0"></i>
                        </div>
                        <div class="card-body p-0 mt-4">
                            <a href="javascript:void(0)" class="title h5 text-dark">Pusat Penelitian</a>
                            <p class="text-muted mt-2">asilitas penelitian untuk membantu mahasiswa dan staf dalam melakukan
                                penelitian di berbagai bidang ilmu komputer.</p>
                            <i class="uil uil-layer-group full-img"></i>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center mb-4 pb-2">
                        <h6 class="text-primary">Bagaimana cara</h6>
                        <h4 class="title mb-4">Kami berkolaborasi ?</h4>
                        <p class="text-muted para-desc mx-auto mb-0"><span class="text-primary fw-bold">Bersama Menuju
                                Keunggulan, Kolaborasi dalam Fakultas Ilmu Komputer</span>.</span></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-presentation-edit rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Kolaborasi Cerdas Berkarya!</h5>
                            <p class="text-muted mb-0">mahasiswa dan dosen bekerja bersama untuk menciptakan solusi inovatif
                                dan mengatasi tantangan kompleks</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-3 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-clean work-process bg-transparent process-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-airplay rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Inspirasi Kolaboratif Berkembang</h5>
                            <p class="text-muted mb-0">Diskusi kelompok, proyek tim, dan seminar membuka kesempatan untuk
                                berbagi ide, menciptakan gagasan baru, dan mengembangkan keterampilan kolaboratif yang
                                berharga.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 mt-md-5 pt-md-5 mt-4 pt-2">
                    <div
                        class="card features feature-primary feature-clean work-process bg-transparent d-none-arrow border-0 text-center">
                        <div class="icons text-center mx-auto">
                            <i class="uil uil-image-check rounded h3 mb-0"></i>
                        </div>

                        <div class="card-body">
                            <h5 class="text-dark">Pengalaman Praktis Bersama Inovasi!</h5>
                            <p class="text-muted mb-0">Gabungkan pengalaman praktis dengan inovasi dalam kolaborasi di
                                Fakultas Ilmu Komputer, Untuk merancang solusi teknologi yang berdampak positif bagi
                                masyarakat.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->

        <div class="container-fluid mt-100 mt-60">
            <div class="bg-cta shadow rounded card overflow-hidden"
                style="background: url('{{ asset('assets/landing/images/2.jpg') }}') center center;" id="cta">
                <div class="bg-overlay"></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title">
                                <h4 class="title title-dark text-white mb-4">Membawa Inovasi, Hasil Karya Fakultas Ilmu
                                    Komputer!</h4>
                                <p class="text-white-50 para-dark para-desc mx-auto">Inovasi adalah inti dari hasil karya
                                    Fakultas Ilmu Komputer kami. Dengan penelitian yang mendalam dan pemikiran yang maju,
                                    kami menghasilkan solusi yang mengubah dunia teknologi dan mendorong perubahan positif
                                    dalam masyarakat.</p>
                                <a href="#!" data-type="youtube" data-id="wVTg_JN1AWQ"
                                    class="play-btn  mt-4 lightbox">
                                    <i data-feather="play" class="fea icon-ex-md text-white"></i>
                                </a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Bergabung dan Segera Daftar</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Pilih<span class="text-primary fw-bold"> Program
                                Studi</span> sesuai keinginan dan minat kalian untuk wujudkan mimpi dan ide kreatif anda</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="col-12 mt-4 pt-2 text-center">
                <a href="javascript:void(0)" class="btn btn-primary">Gabung dan Daftar<i
                        class="uil uil-angle-right-b align-middle"></i></a>
            </div>
        </div><!--end col-->
    </section><!--end section-->
    <!-- End -->
@endsection
