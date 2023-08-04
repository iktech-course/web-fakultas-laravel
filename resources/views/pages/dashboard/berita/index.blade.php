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
                                <td class="text-center p-3">{!! $item->isi !!}</td>
                                <td class="text-center p-3">
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                </td>
                            </tr>
                            <!-- End -->
                        @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div><!--end col-->
    </div><!--end row-->

    <div class="row text-center">
        {{-- {{ $item->links("vendor.pagination.bootstrap-5") }} --}}
        {{ $berita->links() }}
        {{-- <!-- PAGINATION START -->
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
        <!-- PAGINATION END --> --}}
    </div><!--end row-->
</div>
@endsection