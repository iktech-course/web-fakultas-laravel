@extends('layouts.landing.app')

@section('title', 'Profil Fakultas')

@section('content')
        <!-- Hero Start -->
        <section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/landing/images/1undhari/bg.png') }}') top;">
            <div class="bg-overlay"></div>
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="pages-heading title-heading">
                            <h2 class="text-white title-dark"> Profil Filkom</h2>
                            <p class="text-white-50 para-desc mb-0 mx-auto">Fakultas Ilmu Komputer kami menyambut Anda untuk belajar, berinovasi, dan menciptakan teknologi masa depan. Daftarkan diri Anda hari ini dan mulailah perjalanan luar biasa Anda.</p>
                        </div>
                    </div><!--end col-->
                </div><!--end row--> 
            </div> <!--end container-->
        </section><!--end section-->

        <!-- About Start -->
        <section class="section pt-0 mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 col-12">
                        <img src="{{ asset('assets/landing/images/1undhari/wisudawan.jpg') }}" class="img-fluid shadow rounded" alt="">
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ms-lg-4">
                            <h4 class="title mb-4"><span class="text-primary">Sejarah Singkat Fakultas Ilmu Komputer!</span></h4>
                            <p class="text-muted"><span class="text-primary fw-bold"></span><span class="text-primary fw-bold">Sejarah FILKOM UNDHARI</span> bermula pada tahun <span class="text-primary fw-bold">2008</span>, ketika berdiri Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Dharmasraya. Saat itu, STMIK Dharmasraya didirikan dengan tujuan untuk menyediakan pendidikan tinggi di bidang ilmu komputer dan informatika, guna menjawab tuntutan zaman yang semakin berkembangnya teknologi informasi dan komunikasi.</p>
                            <p class="text-muted"><span class="text-primary fw-bold"></span>Pada tahun <span class="text-primary fw-bold">2015</span>, terjadi penggabungan dari tiga bentuk Sekolah Tinggi, yaitu STMIK Dharmasraya, Sekolah Tinggi Ilmu Kesehatan Dharmasyara (STIKES Dharmasraya), dan Sekolah Tinggi Keguruan dan Ilmu Pendidikan Dharmasraya (STKIP Dharmasraya). Hasil dari penggabungan ini menciptakan suatu entitas pendidikan yang lebih besar, yang kemudian dikenal dengan nama Universitas Dharmas Indonesia (UNDHARI).</p>
                            <ul class="list-unstyled mb-0 text-muted">
                                <li><i class="uil uil-arrow-circle-right text-primary h5 mb-0 align-middle me-2"></i>S1 Teknik Informatika</li>
                                <li><i class="uil uil-arrow-circle-right text-primary h5 mb-0 align-middle me-2"></i>S1 Sistem Informasi</li>
                            </ul>
                            <a href="{{ route('landing.prodi.index') }}" class="btn btn-outline-primary mt-3">Baca Lebih Lanjut</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--enc container-->
        </section><!--end section-->
        <!-- About End -->
        <!-- End -->

        <section class="section">
            <div class="container">
                <div class="row lg-4 align-items-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="ms-lg-5">
                            <div class="row align-items-start">
                                <div class="col-md-5 col-12 mt-4 mx-5 pt-4 px-md-0">
                                    <div class="card pricing pricing-primary starter-plan shadow">
                                        <div class="card-body py-5">
                                            <h4 class="title name fw-bold text-uppercase text-primary mb-4">Visi</h4>
                                            <div class="d-flex mb-4">
                                            </div>
    
                                            <ul class="list-unstyled mb-0 ps-0">
                                                <li class="h6 text-dark-emphasis mb-0">Menjadi pusat unggulan di bidang Ilmu Komputer dan Teknologi Informasi di tingkat regional dalam menyelenggarakan pendidikan, penelitian dan pengabdian kepada masyarakat</li>  
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-5 col-12 mt-4 pt-4 px-md-0">
                                    <div class="card pricing pricing-muted starter-plan shadow">
                                        <div class="card-body py-5">
                                            <h4 class="title name fw-bold text-uppercase text-primary mb-4">Misi</h4>
                                            <div class="d-flex mb-4">
                                            </div>
    
                                            <ol class="list ms-2 mb-0 ps-0">
                                                <li class="h6 text-dark-emphasis mb-0">Mendidik mahasiswa menjadi tenaga profesional di bidang teknologi informasi dilandasi iman dan taqwa serta berakhlak mulia.</li>
                                                <li class="h6 text-dark-emphasis mb-0">Menyelenggarakan pendidikan akademik yang berbasis pada perkembangan Ilmu Pengetahuan dan Teknologi Informasi.</li>
                                                <li class="h6 text-dark-emphasis mb-0">Melaksanakan kegiatan penelitian dan pengembangan dalam bidang teknologi informasi yang memberikan kontribusi pada kemajuan Ilmu Pengetahuan dan Teknologi Informasi.</li>
                                                <li class="h6 text-dark-emphasis mb-0">Melakukan kerjasama dengan Dunia Usaha dan Dunia Industri (DUDI) untuk mendekatkan kebutuhan pengguna dengan kompetensi lulusan.</li>
                                                <li class="h6 text-dark-emphasis mb-0">Melaksanakan pengabdian pada masyarakat dalam bidang Teknologi Informasi dengan memperhatikan kebutuhan masyarakat.</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <section class="section">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 text-center">
                            <div class="section-title mb-4 pb-2">
                                <h4 class="title mb-4">Pendapat alumni mengenai Filkom</h4>
                                <p class="text-muted para-desc mx-auto mb-0">Testimoni berdasarkan<span class="text-primary fw-bold">Pengalaman</span> pribadi alumni selama belajar di Prodi Teknik Informatika maupun Sistem Informasi pada Fakultas Ilmu Komputer Undhari</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
    
                    <div class="row justify-content-center">
                        <div class="col-lg-12 mt-4">
                            <div class="tiny-three-item">
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <ul class="list-unstyled mb-0">
                                            </ul>
                                            <h6 class="text-primary">- Adreas Abi Widyanto <small class="text-muted">S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Laboratorium yang lengkap dengan perangkat keras dan perangkat lunak terbaru memungkinkan kami untuk mendapatkan pengalaman praktis yang berharga dan meningkatkan keterampilan teknis kami."</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <h6 class="text-primary">- Intan andesti <small class="text-muted">S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Kuliah di fakultas ilmu komputer adalah pengalaman yang luar biasa bagiku. Selama masa studi saya, saya sangat terkesan dengan fasilitas modern dan lingkungan belajar yang inovatif yang disediakan oleh fakultas"</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">                                        
                                            <h6 class="text-primary">- Viona Yulia Fitra<small class="text-muted">S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Saya belajar banyak tentang berbagai aspek ilmu komputer, termasuk pemrograman, kecerdasan buatan, keamanan siber, dan analisis data. Semua ini telah membantu mempersiapkan saya untuk menghadapi tantangan dunia nyata."</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">                                        
                                            <h6 class="text-primary">- Irfan Kurniawan<small class="text-muted">S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Fakultas juga menyediakan kesempatan magang di perusahaan-perusahaan ternama. Saya mendapatkan kesempatan untuk magang di salah satu perusahaan IT terkemuka, yang memberikan saya wawasan berharga tentang bagaimana teknologi diterapkan dalam dunia bisnis."</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <h6 class="text-primary">- Ichsan Khaliq Adyanda<small class="text-muted"> S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Dosen-dosen di fakultas ilmu komputer ini sangat berpengetahuan dan berdedikasi tinggi. Mereka tidak hanya memberikan materi pelajaran dengan baik, tetapi juga sangat terbuka untuk membantu mahasiswa dengan pertanyaan dan tantangan yang kami hadapi dalam proses belajar."</p>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="tiny-slide">
                                    <div class="d-flex client-testi m-2">
                                        <img src="{{ asset('assets/landing/images/1undhari/profil-default.png') }}" class="avatar avatar-small client-image rounded shadow" alt="">
                                        <div class="card flex-1 content p-3 shadow rounded position-relative">
                                            <h6 class="text-primary">- Aldi Fransisko <small class="text-muted">S.Kom</small></h6>
                                            <p class="text-muted mt-2">"Saya sungguh bersyukur telah memilih fakultas ilmu komputer ini untuk mengejar studi saya. Pengalaman belajar di sini telah membuka pintu bagi saya untuk berkarier di dunia teknologi informasi dan saya sangat antusias untuk menghadapi masa depan yang cerah dalam bidang ini."</p>
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
                                <p class="text-muted para-desc mx-auto mb-0">Pilih<span class="text-primary fw-bold"> Program Studi</span> sesuai keinginan dan minat kalian untuk wujudkan mimpi dan ide kreatif anda</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
    
                        <div class="col-12 mt-4 pt-2 text-center">
                            <a href="{{ route('landing.pendaftaran.index') }}" class="btn btn-primary">Gabung dan Daftar<i class="uil uil-angle-right-b align-middle"></i></a>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->

                <div class="container mt-100 mt-60">
                    <div class="row align-items-center mb-4 pb-2">
                        <div class="col-lg-6">
                            <div class="section-title text-center text-lg-start">
                                <h6 class="text-primary">Berita</h6>
                                <h4 class="title mb-4 mb-lg-0">Dapat informasi lebih <br> Innovasi & Perkembangan Filkom</h4>

                                <div class="col-lg-12">
                                    <div class="section-title text-center text-lg-start">
                                        <p class="text-muted mb-0 mx-auto para-desc">Seputar project <span class="text-primary fw-bold">Mahasiswa</span> dan Informasi perkembang Teknologi.</p>
                                    </div>
                                </div><!--end col-->
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
                                    <h5><a href="{{ Route('landing.berita.show', $item->id) }}" class="card-title title text-dark">{{ $item->judul }}</a></h5>
                                    <div class="post-meta d-flex justify-content-between mt-3">
                                        <a href="{{ Route('landing.berita.show', $item->id) }}" class="text-muted readmore">Read More <i class="uil uil-angle-right-b align-middle"></i></a>
                                    </div>
                                </div>
                                <div class="author">
                                    <small class="user d-block"><i class="uil uil-user"></i> {{ $item->User->nama }}</small>
                                    <small class="date"><i class="uil uil-calendar-alt"></i> {{ substr($item->created_at, 0, 10) }}</small>
                                </div>
                            </div>   
                        </div><!--end col-->      
                        @endforeach
                    </div><!--end row-->
                </div><!--end container-->
            </section><!--end section-->
@endsection
