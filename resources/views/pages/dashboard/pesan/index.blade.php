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
                       @foreach ($pesan as $no => $item)
                            <!-- Start -->
                            <tr>
                                <th class="p-3"> {{ ++$no + ($pesan->currentPage() - 1) * $pesan->perPage() }}</th>
                                <td class="text-center p-3">{{ $item->nama }}</td>
                                <td class="text-center p-3">{{ $item->email }}</td>
                                <td class="text-center p-3">{{ $item->no_wa }}</td>
                                <td class="text-center p-3">{{ substr($item->pesan, 0, 20) }}</td>
                                <td class="text-start p-3 d-flex flex-md-wrap flex-sm-wrap">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary m-2" data-bs-toggle="modal" data-bs-target="#openmail-{{ $item->id }}">Detail</a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ConfirmModal-{{ $item->id }}" class="btn btn-sm btn-soft-danger m-2">Hapus</a>
                                </td>
                            </tr>
                            <!-- End -->

                            <!-- Modal Content Start -->
                            <div class="modal fade" id="openmail-{{ $item->id }}" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
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
                                                            <span class="d-block fw-bold text-primary">{{ $item->nama }}</span>
                                                            <div class="text-muted">Email : <span class="text-black fw-bold">{{ $item->email }}</span></div>
                                                            <div class="text-muted">Nomor WA : <span class="text-black fw-bold">{{ $item->no_wa }}</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="p-3 border-bottom">
                                                <p class="text-muted mb-0">{{ $item->pesan }}</p>
                                            </div>

                                            <div class="p-3">
                                                <a href="https://wa.me/{{ substr($item->no_wa, 1) }}" target="_blank" class="btn btn-sm btn-success"> <i class="uil uil-whatsapp me-2"></i>Balas Di Whatsapp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Content End -->

                             <!-- Modal Content Start -->
                             <div class="modal fade" id="ConfirmModal-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="LoginForm-title" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content rounded shadow border-0">
                                        <div class="modal-header border-bottom">
                                            <h5 class="modal-title" id="LoginForm-title">Konfirmasi Hapus Data</h5>
                                            <button type="button" class="btn btn-icon btn-close"
                                                data-bs-dismiss="modal" id="close-modal"><i
                                                    class="uil uil-times fs-4 text-dark"></i></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="p-3 rounded box-shadow">
                                                <p class="text-muted mb-0">Apakah Anda Akan Menghapus Data Ini...?</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('pesan.destroy', $item->id) }}" method="POST">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Batalkan</button>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Content End -->

                       @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row text-end mt-3">
        {{ $pesan->links('vendor.pagination.bootstrap-5') }}
    </div><!--end row-->
</div>
@endsection