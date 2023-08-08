@extends('layouts.dashboard.app')

@section('title', 'Dosen')

@section('content')

<div class="container-fluid">
    <div class="layout-specing">
        <div class="d-md-flex justify-content-between align-items-center">
            <h5 class="mb-0">Daftar Dosen</h5>

            <!-- <nav aria-label="breadcrumb" class="d-inline-block">
                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                    <li class="breadcrumb-item text-capitalize"><a href="index.html">Landrick</a></li>
                    <li class="breadcrumb-item text-capitalize"><a href="#">Invoice</a></li>
                    <li class="breadcrumb-item text-capitalize active" aria-current="page">List</li>
                </ul>
            </nav> -->
            <a href="{{ route('dosen.create') }}" class="btn btn-sm btn-success"><i data-feather="file-plus" class="fea icon-sm"> </i> Tambah Dosen</a>
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
                                <th class="border-bottom p-3" style="max-width: 220px;">Foto</th>
                                <th class="text-center border-bottom p-3">Nama Dosen</th>
                                <th class="text-center border-bottom p-3">Jabatan</th>
                                <th class="text-center border-bottom p-3">Program Studi</th>
                                <th class="text-center border-bottom p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Start -->
                            <tr>
                                <th class="p-3">1</th>
                                <td style="width: 50px;">
                                    <img src="assets/images/client/01.jpg" class="w-100" alt="">
                                </td>
                                <td class="text-center p-3">Firmansyah Putra, S.Kom, M.Pd.T</td>
                                <td class="text-center p-3">Dekan</td>
                                <td class="text-center p-3">Sistem Informasi</td>
                                <td class="text-center p-3">
                                    <a href="{{ route('dosen.show',1) }}" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                </td>
                            </tr>
                            <!-- End -->
                             <!-- Start -->
                             <tr>
                                <th class="p-3">2</th>
                                <td style="width: 50px;">
                                    <img src="assets/images/client/02.jpg" class="w-100" alt="">
                                </td>
                                <td class="text-center p-3">Elinda Revita M.Kom</td>
                                <td class="text-center p-3">Kaprodi</td>
                                <td class="text-center p-3">Sistem Informasi</td>
                                <td class="text-center p-3">
                                    <a href="#" class="btn btn-sm btn-primary">Detail</a>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
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
</div><!--end container-->
@endsection