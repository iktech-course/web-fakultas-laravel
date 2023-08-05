@extends('layouts.landing.app')

@section('title', 'Pendaftaran')

@section('content')
<!-- Hero Start -->
<section class="bg-half-170 d-table w-100" style="background: url('{{ asset('assets/landing/images/1undhari/berita.jpg') }}');">
    <div class="bg-overlay"></div>
    <div class="container">
        <div class="row mt-5 justify-content">
            <div class="col-lg-12 text-center">
                <div class="pages-heading title-heading">
                    <h2 class="text-white title-dark"> Pendaftaran </h2>
                    <p class="text-white-50 para-desc mb-0 mx-auto">Penting untuk selalu memeriksa situs web resmi Universitas Dharmas Indonesia atau menghubungi pihak universitas langsung untuk mendapatkan informasi terkini mengenai persyaratan dan proses pendaftaran Fakultas Ilmu Komputer.</p>
                    <div class="mt-4">
                        <a href="http://pmb.undhari.ac.id/pmb.php?halaman=pendaftaran" class="btn btn-primary mt-2"><i class="uil uil-book-open"></i>Daftar Sekarang</a>
                    </div>
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
<section class="section mt-60">
    <div class="container mt-lg-3">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-12 d-lg-block">
                <div class="col-lg-12 col-12 mt-3">
                    <div class="border-bottom pb-4">
                        <h5>Jadwal Penerimaan/Pendaftaran :</h5>
                        <ol>
                            <li>Pendaftaran langsung dibuka pada tanggal <span class="badge bg-soft-primary fw-bold">Tgl 18 Mei 2023</span></li>
                            <li>Pendaftaran Online dibuka pada tanggal <span class="badge bg-soft-primary fw-bold">Tgl 18 Juli 2023</span></li>
                            <li>Pengumuman Hasil, Pihak panitia akan mengumumkan hasil penerimaan calon mahasiswa yang diterima. Jika diterima, calon mahasiswa harus melakukan proses registrasi dan pembayaran biaya kuliah sesuai dengan ketentuan universitas, diumumkan pada tanggal <span class="badge bg-soft-primary fw-bold">10 Agustus 2023</span></li>

                        </ol>
                    </div>
                    <div class="border-bottom pb-4">
                        <h5>Syarat masuk dan Pendaftaran :</h5>
                        <ol>
                            <li><span class="text-primary fw-bold">Lulusan Sekolah Menengah Atas (SMA) atau setara </span><br> Calon mahasiswa yang ingin mendaftar di Fakultas Ilmu Komputer harus lulus dari SMA atau sekolah setara dengan jurusan yang relevan, seperti IPA (Ilmu Pengetahuan Alam) atau IPS (Ilmu Pengetahuan Sosial) dengan pengetahuan yang baik.</li>
                            <li><span class="text-primary fw-bold">Membayar Biaya Pendaftaran</span><br>Untuk melakukan pendaftaran calon mahasiswa diwajibkan membayar uang pendaftaran sebanyak <span class="badge bg-success"> Rp.100.000 </span>, sedangkan calon mahasiswa yang mendaftar secara online membayar uang pendaftaran waktu pendaftaran ulang</li>
                            <li><span class="text-primary fw-bold">Daftar secara Langsung</span><br>Mengisi formulir yang sudah tersedia <a href="http://pmb.undhari.ac.id/download/FORMULIR_PENDAFTARAN_2023.pdf" class="text-primary fw-medium readmore"><span class="text-danger fw-bold">Formulir pendaftaran</span></a>, calon mahasiswa juga diharuskan untuk melampirkan dokumen-dokumen pendukung, seperti foto terbaru, salinan raport, akte kelahiran, dan kartu identitas.</li>
                            <li><span class="text-primary fw-bold">Daftar Secara Online</span><br>Untuk mendaftar secara online melalui link<a href="http://pmb.undhari.ac.id/pmb.php?halaman=pendaftaran"><span class="text-danger fw-bold"> http://pmb.undhari.ac.id/pmb.php?halaman=pendaftaran</a></span></li> 
                            <li><span class="text-primary fw-bold">Daftar Ulang</span><br>Pada tahap ini calon mahasiswa melakukan penyerahan semua dokumen yang sudah dilengkapi sebelumnya, dan diserahkan pada panitian pendaftaran.</li>
                        </ol>
                    </div>
                    <div class="border-bottom pb-4">
                        <h5>Biaya Masuk dan Biaya Semester :</h5>
                        <ol>
                            <li><span class="text-primary fw-bold">Biaya Masuk </span><br><span class="badge bg-soft-success"><h6>Rp.8.500.000</h6></span></li>
                            <li><span class="text-primary fw-bold">Biaya Semester </span><br><span class="badge bg-soft-success"><h6>Rp.2.400.000</h6></span></li>
                        </ol>
                    </div>
            </div>
        </div>
    </div>
</section>


<!-- End -->
@endsection
