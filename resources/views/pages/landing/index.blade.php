@extends('layouts.landing.app')

@section('title', 'Beranda')

@section('content')
    <!-- Hero Start -->
    <section class="home-slider position-relative">
        <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center"
                        style="background-image:url({{ asset('assets/landing/images/1undhari/gedung.jpg') }})">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="title-heading text-white mt-4">
                                        <h1 class="display-4 text-white fw-bold mb-3">Temukan Potensi Tanpa Batas di
                                            Fakultas Ilmu Komputer</h1>
                                        <p class="para-desc text-white-50 mx-auto">Daftar dan Bergabung bersama kami untuk
                                            menemukan potensi dirimu</p>
                                        <div class="mt-4">
                                            <a href="{{ route('landing.pendaftaran.index') }}" class="btn btn-primary mt-2"><i
                                                    class="uil uil-book-open"></i>Daftar Sekarang</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center"
                        style="background-image:url({{ asset('assets/landing/images/1undhari/siswa1.jpg') }})">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="title-heading text-white mt-4">
                                        <h1 class="display-4 text-white fw-bold mb-3">Eksplorasi Dunia Digital Bersama Kami
                                        </h1>
                                        <p class="para-desc text-white-50 mx-auto">Temukan Berita Terbaru Seputar Teknologi dan Informasi</p>
                                        <div class="mt-4">
                                            <a href="{{ route('landing.berita.index') }}" class="btn btn-primary mt-2"><i
                                                    class="uil uil-graduation-cap"></i>Innovasi Terbaru</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="3000">
                    <div class="bg-home d-flex align-items-center"
                    style="background-image:url({{ asset('assets/landing/images/1undhari/belajar.jpg') }})">
                        <div class="bg-overlay"></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12 text-center">
                                    <div class="title-heading text-white mt-4">
                                        <h1 class="display-4 text-white fw-bold mb-3">Berkarya dan Berinovasi di Fakultas
                                            Ilmu Komputer</h1>
                                        <p class="para-desc text-white-50 mx-auto">Pilihlah jalur karier Anda di dunia ilmu komputer. Temukan program studi yang sesuai untuk mencapai impian Anda dalam teknologi.</p>
                                        <div class="mt-4">
                                            <a href="{{ route('landing.prodi.index') }}" class="btn btn-primary mt-2"><i
                                                    class="uil uil-user"></i>Program Studi</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section><!--end section-->
    <!-- Hero End -->

    <!-- FEATURES START -->
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-absolute">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-0 text-center features feature-primary feature-clean course-feature p-4 overflow-hidden shadow"
                                    style="height: 350px !important;">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-file rounded h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-4">
                                        <a href="javascript:void(0)" class="title h5 text-dark">Kurikulum Berbasis
                                            Industri</a>
                                        <p class="text-muted mt-2">Fakultas ilmu komputer yang unggul, menawarkan kurikulum
                                            yang relevan dengan perkembangan industri teknologi informasi dan komputer
                                            terkini.</p>
                                        <a href="{{ route('landing.prodi.index') }}" class="text-primary read-more">Read More <i
                                                class="uil uil-angle-right-b align-middle"></i></a>
                                        <i class="uil uil-file full-img"></i>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="card border-0 text-center features feature-primary feature-clean course-feature p-4 overflow-hidden shadow "
                                    style="height: 350px !important;">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-graduation-cap rounded h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-4">
                                        <a href="fasilitas.html" class="title h5 text-dark">Fasilitas dan Infrastruktur</a>
                                        <p class="text-muted mt-2">Fasilitas yang memadai dan infrastruktur yang modern
                                            adalah faktor penting dalam mendukung pembelajaran dan penelitian di bidang ilmu
                                            komputer</p>
                                        <a href="{{ route('landing.fasilitas.index') }}" class="text-primary read-more">Read More <i
                                                class="uil uil-angle-right-b align-middle"></i></a>
                                        <i class="uil uil-graduation-cap full-img"></i>
                                    </div>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                                <div class="card border-0 text-center features feature-primary feature-clean course-feature p-4 overflow-hidden shadow"
                                    style="height: 350px !important;">
                                    <div class="icons text-center mx-auto">
                                        <i class="uil uil-book-reader rounded h3 mb-0"></i>
                                    </div>
                                    <div class="card-body p-0 mt-4">
                                        <a href="dosen.html" class="title h5 text-dark">Tim Pengajar Berkualitas</a>
                                        <p class="text-muted mt-2">Pengajar yang baik dapat memberikan pendekatan mengajar
                                            yang inovatif dan mendukung mahasiswa dalam mengembangkan keterampilan komputasi
                                            mereka</p>
                                        <a href="{{ route('landing.dosen.index') }}" class="text-primary read-more">Read More <i
                                                class="uil uil-angle-right-b align-middle"></i></a>
                                        <i class="uil uil-book-reader full-img"></i>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- FEATURES END -->

    <!-- About Start -->
    <section class="section pt-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6 col-12">
                    <img src="{{ asset('assets/landing/images/1undhari/wisudawan.jpg') }}" class="img-fluid shadow rounded" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-4">
                        <h4 class="title mb-4"><span class="text-primary">Selamat datang di Fakultas Ilmu Komputer!</span>
                        </h4>
                        <p class="text-muted"><span class="text-primary fw-bold"></span>Selamat datang di halaman beranda
                            Fakultas Ilmu Komputer kami! Kami dengan bangga mempersembahkan sebuah lingkungan akademik yang
                            menginspirasi, kolaboratif, dan inovatif bagi para mahasiswa dan staf kami. Fakultas Ilmu
                            Komputer kami adalah tempat untuk belajar, berkreasi, dan bertransformasi menjadi profesional
                            yang siap bersaing di era digital yang cepat berubah.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li><i class="uil uil-arrow-circle-right text-primary h5 mb-0 align-middle me-2"></i>S1 Teknik
                                Informatika</li>
                            <li><i class="uil uil-arrow-circle-right text-primary h5 mb-0 align-middle me-2"></i>S1 Sistem
                                Informasi</li>
                        </ul>
                        <a href="{{ route('landing.prodi.index') }}" class="btn btn-outline-primary mt-3">Baca Lebih Lanjut</a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--enc container-->
    </section><!--end section-->
    <!-- About End -->

    <!-- Cta Start -->
    <section class="section bg-cta" style="background: url('{{ asset('assets/landing/images/1undhari/laptop.jpg') }}') center center;"
        id="cta">
        <div class="bg-overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h4 class="title text-white mb-4">Misi kami adalah untuk menghasilkan lulusan yang berkualitas dan
                            inovatif dalam ilmu komputer</h4>
                        <p class="text-white-50 para-desc mx-auto">Jangan ragu untuk menjelajahi situs web kami untuk
                            informasi lebih lanjut tentang program kami</p>
                        <a href="#!" data-type="youtube" data-id="HJmF2O2nbT0" class="play-btn  mt-4 lightbox">
                            <i data-feather="play" class="fea icon-ex-md text-white"></i>
                        </a>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Cta End -->

    <!-- Courses Start -->
    <section class="section" id="courses">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Temukan Berita Terbaru Seputar Teknologi dan Informasi</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Innovasi terbaru dari <span
                                class="text-primary fw-bold">Filkom</span> seputar project mahasiswa dan dapatkan informasi
                            terbaru dari kami</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                @foreach ($berita as $item)
                <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                    <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                        <div class="position-relative">
                            <img src="{{ asset('/storage/berita/'.$item->foto) }}" class="card-img-top" alt="...">
                            <div class="overlay rounded-top"></div>
                        </div>
                        <div class="card-body content">
                            <h5><a href="{{ route('landing.berita.show', $item->id) }}" class="card-title title text-dark">{{ $item->judul }}</a></h5>
                            <div class="post-meta d-flex justify-content-between mt-3">
                                <a href="{{ route('landing.berita.show', $item->id) }}" class="text-muted readmore">Read More <i
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
                <div class="col-12 mt-4 pt-2 text-center">
                    <a href="{{ route('landing.berita.index') }}" class="btn btn-primary">Berita Lainnya<i
                            class="uil uil-angle-right-b align-middle"></i></a>
                </div>
            </div><!--end row-->
        </div><!--end container-->

        <div class="container mt-100 mt-60" id="instructors">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Dosen Filkom</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Temui tim pengajar kami yang terdiri dari para <span
                                class="text-primary fw-bold">Pakar teknologi informasi</span> dengan pengalaman luas dalam
                            industri. Mereka siap membimbing dan menginspirasi Anda dalam mengejar kesuksesan di dunia IT.
                        </p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('/storage/berita/'.$item->foto) }}"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">

                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="{{ route('landing.dosen.index') }}" class="name text-dark">Firmansyah
                                        Putra</a></h5>
                                <small class="designation text-muted">Dekan Filkom</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('/storage/berita/'.$item->foto) }}"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="{{ route('landing.dosen.index') }}" class="name text-dark">Asril</a></h5>
                                <small class="designation text-muted">Wakil Dekan Filkom</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('/storage/berita/'.$item->foto) }}"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="{{ route('landing.dosen.index') }}" class="name text-dark">Lido Sabda
                                        Lesmana</a></h5>
                                <small class="designation text-muted">Kaprodi Teknik Informatika</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-lg-3 col-md-6 mt-4 pt-2">
                    <div class="card team team-primary text-center rounded border-0">
                        <div class="card-body">
                            <div class="position-relative">
                                <img src="{{ asset('/storage/berita/'.$item->foto) }}"
                                    class="img-fluid avatar avatar-ex-large rounded-circle shadow" alt="">
                            </div>
                            <div class="content pt-3">
                                <h5 class="mb-0"><a href="{{ route('landing.dosen.index') }}" class="name text-dark">Elinda Revita</a>
                                </h5>
                                <small class="designation text-muted">Kaprodi Sistem Informasi</small>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Courses End -->

    <!-- Testi Subscribe Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Pendapat alumni mengenai Filkom</h4>
                        <p class="text-muted para-desc mx-auto mb-0">Testimoni berdasarkan<span
                                class="text-primary fw-bold">Pengalaman</span> pribadi alumni selama belajar di Prodi
                            Teknik Informatika maupun Sistem Informasi pada Fakultas Ilmu Komputer Undhari</p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <ul class="list-unstyled mb-0">
                                    </ul>
                                    <h6 class="text-primary">- Adreas Abi Widyanto <small class="text-muted">S.Kom</small>
                                    </h6>
                                    <p class="text-muted mt-2">"Laboratorium yang lengkap dengan perangkat keras dan
                                        perangkat lunak terbaru memungkinkan kami untuk mendapatkan pengalaman praktis yang
                                        berharga dan meningkatkan keterampilan teknis kami."</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <h6 class="text-primary">- Intan andesti <small class="text-muted">S.Kom</small></h6>
                                    <p class="text-muted mt-2">"Kuliah di fakultas ilmu komputer adalah pengalaman yang
                                        luar biasa bagiku. Selama masa studi saya, saya sangat terkesan dengan fasilitas
                                        modern dan lingkungan belajar yang inovatif yang disediakan oleh fakultas"</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <h6 class="text-primary">- Viona Yulia Fitra<small class="text-muted">S.Kom</small>
                                    </h6>
                                    <p class="text-muted mt-2">"Saya belajar banyak tentang berbagai aspek ilmu komputer,
                                        termasuk pemrograman, kecerdasan buatan, keamanan siber, dan analisis data. Semua
                                        ini telah membantu mempersiapkan saya untuk menghadapi tantangan dunia nyata."</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <h6 class="text-primary">- Irfan Kurniawan<small class="text-muted">S.Kom</small></h6>
                                    <p class="text-muted mt-2">"Fakultas juga menyediakan kesempatan magang di
                                        perusahaan-perusahaan ternama. Saya mendapatkan kesempatan untuk magang di salah
                                        satu perusahaan IT terkemuka, yang memberikan saya wawasan berharga tentang
                                        bagaimana teknologi diterapkan dalam dunia bisnis."</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <h6 class="text-primary">- Ichsan Khaliq Adyanda<small class="text-muted">
                                            S.Kom</small></h6>
                                    <p class="text-muted mt-2">"Dosen-dosen di fakultas ilmu komputer ini sangat
                                        berpengetahuan dan berdedikasi tinggi. Mereka tidak hanya memberikan materi
                                        pelajaran dengan baik, tetapi juga sangat terbuka untuk membantu mahasiswa dengan
                                        pertanyaan dan tantangan yang kami hadapi dalam proses belajar."</p>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="d-flex client-testi m-2">
                                <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}"
                                    class="avatar avatar-small client-image rounded shadow" alt="">
                                <div class="card flex-1 content p-3 shadow rounded position-relative">
                                    <h6 class="text-primary">- Aldi Fransisko <small class="text-muted">S.Kom</small></h6>
                                    <p class="text-muted mt-2">"Saya sungguh bersyukur telah memilih fakultas ilmu komputer
                                        ini untuk mengejar studi saya. Pengalaman belajar di sini telah membuka pintu bagi
                                        saya untuk berkarier di dunia teknologi informasi dan saya sangat antusias untuk
                                        menghadapi masa depan yang cerah dalam bidang ini."</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
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
                <a href="{{ route('landing.pendaftaran.index') }}" class="btn btn-primary">Gabung dan Daftar<i
                        class="uil uil-angle-right-b align-middle"></i></a>
            </div>
        </div><!--end col-->
        </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- Testi Subscribe End -->
@endsection
