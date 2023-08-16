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
                                <th class="text-center border-bottom p-3">NIDN</th>
                                <th class="text-center border-bottom p-3">Nama Dosen</th>
                                <th class="text-center border-bottom p-3">Jabatan</th>
                                <th class="text-center border-bottom p-3">Program Studi</th>
                                <th class="text-center border-bottom p-3">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosen as $no => $item)
                                 <!-- Start -->
                                <tr>
                                    <th class="p-3">{{ ++$no + ($dosen->currentPage()-1) * $dosen->perPage() }}</th>
                                    <td style="width: 50px;">
                                        <img src="{{ asset('/storage/dosen/'.$item->foto ) }}" class="w-100" alt="">
                                    </td>
                                    <td class="text-center p-3">{{ $item->nidn }}</td>
                                    <td class="text-center p-3">{{ $item->nama }}</td>
                                    <td class="text-center p-3">{{ $item->jabatan_struktural }}</td>
                                    <td class="text-center p-3">{{ $item->program_studi }}</td>
                                    <td class="text-center p-3 d-flex flex-md-wrap flex-sm-wrap">
                                        <a href="{{ route('dosen.show',$item->id) }}" class="btn btn-sm btn-primary m-2">Detail</a>
                                        <a href="{{ route('dosen.edit',$item->id) }}" class="btn btn-sm btn-warning m-2">Edit</a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#ConfirmModal-{{ $item->id }}" class="btn btn-sm btn-soft-danger m-2">Hapus</a>
                                    </td>
                                </tr>
                                <!-- Modal Content Start -->
                             <div class="modal fade" id="ConfirmModal-{{ $item->id }}" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content rounded shadow border-0">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="LoginForm-title">Konfirmasi Hapus Data</h5>
                                            <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-3 rounded box-shadow">
                                                <p class="text-muted mb-0">Apakah Anda Akan Menghapus Data Ini...?</p>                                                        
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                         <form action="{{ route('dosen.destroy', $item->id) }}" method="POST">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                         </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Content End -->
                                <!-- End -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--end col-->
        </div><!--end row-->

        <div class="row text-end mt-3">
            {{ $dosen->links('vendor.pagination.bootstrap-5') }}
        </div><!--end row-->
    </div>
</div><!--end container-->
@endsection