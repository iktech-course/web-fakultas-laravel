@extends('layouts.dashboard.app')

@section('title', 'Kegiatan Akademik')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Kegitan</h5>

        <!-- <nav aria-label="breadcrumb" class="d-inline-block">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
            </ul>
        </nav> -->
        <a href="{{ route('kegiatan.create') }}" class="btn btn-sm btn-success"><i data-feather="file-plus" class="fea icon-sm"> </i> Tambah Kegiatan</a>
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
                            <th class="text-center border-bottom p-3">Nama Kegiatan</th>
                            <th class="text-center border-bottom p-3">Deskripsi</th>
                            <th class="text-center border-bottom p-3">Tanggal</th>
                            <th class="text-center border-bottom p-3">Waktu</th>
                            <th class="text-center border-bottom p-3">Lokasi</th>
                            <th class="text-center border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Start -->
                        <tr>
                            <th class="p-3">1</th>
                            <td class="text-center p-3">Wisuda Periode 16</td>
                            <td class="text-center p-3">Kegiatan wisuda</td>
                            <td class="text-center p-3">09/09/2023</td>
                            <td class="text-center p-3">08:00 - 12:00 WIB</td>
                            <td class="text-center p-3">Dara Jingga Convention Center</td>
                            <td class="text-start p-3">
                                <a href="#" class="btn btn-sm btn-warning mb-2">Edit</a>
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
@endsection