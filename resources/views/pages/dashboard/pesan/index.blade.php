@extends('layouts.dashboard.app')

@section('title', 'Pesan Masuk')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Pesan</h5>

        <!-- <nav aria-label="breadcrumb" class="d-inline-block">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
            </ul>
        </nav> -->
    </div>
    <!-- <div class="row">
        <a href="#" class=" my-3 mx-2 col-3 btn btn-success">Tambah Berita Baru</a>
    </div> -->

    <div class="row">
        <div class="col-12 mt-4">
            <div class="table-responsive shadow rounded">
                <table class="table table-center bg-white mb-0">
                    <thead>
                        <tr>
                            <th class="border-bottom p-3">No</th>
                            <th class="text-center border-bottom p-3">Nama</th>
                            <th class="text-center border-bottom p-3">Email</th>
                            <th class="text-center border-bottom p-3">No WA</th>
                            <th class="text-center border-bottom p-3">Pesan</th>
                            <th class="text-center border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Start -->
                        <tr>
                            <th class="p-3">1</th>
                            <td class="text-center p-3">Ramadhan Simanjuntak</td>
                            <td class="text-center p-3">rmdsimanjuntak@gmail.com</td>
                            <td class="text-center p-3">0812345678</td>
                            <td class="text-center p-3">Bagaimana Cara Mendaftar Di FILKOM UNDHARI</td>
                            <td class="text-start p-3">
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#openmail">Detail</a>
                                <a href="#" class="btn btn-sm btn-soft-danger">Hapus</a>
                            </td>
                        </tr>
                        <!-- End -->
                    </tbody>
                </table>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row text-center">
        <!-- PAGINATION START -->
        <div class="col-12 mt-4">
            <div class="d-md-flex align-items-center text-center justify-content-between">
                <span class="text-muted me-3">Showing 1 - 10 out of 50</span>
                <ul class="pagination mb-0 justify-content-center mt-4 mt-sm-0">
                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next</a></li>
                 </ul>
            </div>
        </div><!--end col-->
        <!-- PAGINATION END -->
    </div><!--end row-->
</div>
<!-- Modal Content Start -->
        <div class="modal fade" id="openmail" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header border-bottom">
                        <h5 class="modal-title" id="LoginForm-title">Detail Pesan</h5>
                        <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block fw-bold text-primary">Ramadhan Simanjuntak</span>
                                        <div class="text-muted">Email : <span class="text-black fw-bold">rmdsimanjuntak@gmail.com</span></div>
                                        <div class="text-muted">Nomor WA : <span class="text-black fw-bold">0812345678</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border-bottom">
                            <p class="text-muted mb-0">Bagaimana Cara Mendaftar di FILKOM UNDHARI</p>
                        </div>

                        <div class="p-3">
                            <a href="#" class="btn btn-sm btn-success"> <i class="uil uil-whatsapp me-2"></i>Balas Di Whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Content End -->
@endsection