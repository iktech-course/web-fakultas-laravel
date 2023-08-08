@extends('layouts.dashboard.app')

@section('title', 'Matakuliah')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Mata Kuliah</h5>

        <!-- <nav aria-label="breadcrumb" class="d-inline-block">
            <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
            </ul>
        </nav> -->
        <a href="{{ route('matakuliah.create') }}" class="btn btn-sm btn-success"><i data-feather="file-plus" class="fea icon-sm"> </i> Tambah Mata Kuliah</a>
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
                            <th class="text-center border-bottom p-3">Kode MK</th>
                            <th class="text-center border-bottom p-3">Nama MK</th>
                            <th class="text-center border-bottom p-3">Semester</th>
                            <th class="text-center border-bottom p-3">SKS</th>
                            <th class="text-center border-bottom p-3">Program Studi</th>
                            <th class="text-center border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Start -->
                        <tr>
                            <td class="text-center p-3">1</td>
                            <td class="text-center p-3">TIF102</td>
                            <td class="text-center p-3">Elektronika Dasar</td>
                            <td class="text-center p-3">1</td>
                            <td class="text-center p-3">2</td>
                            <td class="text-center p-3">Teknik Informatika</td>
                            <td class="text-center p-3">
                                <a href="#" class="btn btn-sm btn-warning ms-2">Edit</a>
                                <a href="#" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
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