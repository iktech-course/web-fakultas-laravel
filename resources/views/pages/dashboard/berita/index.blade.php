@extends('layouts.dashboard.app')

@section('title', 'Daftar Berita')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Daftar Berita</h5>

        <a href="{{ route('berita.create') }}" class="btn btn-sm btn-success"><i data-feather="file-plus" class="fea icon-sm"> </i> Tambah Berita</a>
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
                            <th class="border-bottom p-3" style="max-width: 220px;">Gambar</th>
                            <th class="text-center border-bottom p-3">Judul Berita</th>
                            <th class="text-center border-bottom p-3">Isi</th>
                            <th class="text-center border-bottom p-3">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($berita as $no => $item)
                            <!-- Start -->
                            <tr>
                                <th class="p-3">{{ ++$no + ($berita->currentPage()-1) * $berita->perPage() }}</th>
                                <td style="width: 50px;">
                                    <img src="{{ asset('/storage/berita/'.$item->foto ) }}" class="w-100" alt="">
                                </td>
                                <td class="text-center p-3">{{ $item->judul }}</td>
                                <td class="text-center p-3">{!! substr($item->isi, 0, 50) !!}...</td>
                                <td class="text-center p-3 d-flex flex-md-wrap flex-sm-wrap">
                                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-sm btn-warning m-1">Edit</a>
                                    <a href="#"  data-bs-toggle="modal" data-bs-target="#ConfirmModal-{{ $item->id }}" class="btn btn-sm btn-soft-danger m-1">Hapus</a>
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
                                         <form action="{{ route('berita.destroy', $item->id) }}" method="POST">
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
        {{ $berita->links('vendor.pagination.bootstrap-5') }}
    </div><!--end row-->
</div>
@endsection