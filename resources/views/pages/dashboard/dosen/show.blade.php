@extends('layouts.dashboard.app')

@section('title', 'Dosen Detail')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Detail Dosen</h5>
    </div>

    <div class="row">
        <div class="col-12 mt-4">
            <div class="card border-0 rounded shadow">
                <div class="fw-bold card-header">Identitas Diri</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('/storage/dosen/'.$dosen->foto ) }}" class="w-100" width="300px" height="300px">
                        </div>
                        <div class="col-8">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="fw-bold text-muted">Nama Dosen</div>
                                        <div class="text-black">{{ $dosen->nama }}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="fw-bold text-muted">Jabatan Struktural</div>
                                        <div class="text-black">{{ $dosen->jabatan_struktural }}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="fw-bold text-muted">Jabatan Fungsional</div>
                                        <div class="text-black">{{ $dosen->jabatan_fungsional }}</div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mb-3">
                                        <div class="fw-bold text-muted">NIDN</div>
                                        <div class="text-black">{{ $dosen->nidn }}</div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="fw-bold text-muted">Program Studi</div>
                                        <div class="text-black">{{ $dosen->program_studi }}</div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="row">
                                <div class="fw-bold text-muted">Deskripsi</div>
                                <div class="text-black">{!! $dosen->deskripsi !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end col-->

        <div class="col-12 mt-4">
            <div class="card border-0 rounded shadow">
                <div class="fw-bold card-header">Mata Kuliah</div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="#" class="btn btn-sm btn-success">Tambah Mata Kuliah</a>
                    </div>
                    <div class="mb-3">
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
                                <tr>
                                    <td class="text-center p-3">1</td>
                                    <td class="text-center p-3">TIF102</td>
                                    <td class="text-center p-3">Elektronika Dasar</td>
                                    <td class="text-center p-3">1</td>
                                    <td class="text-center p-3">2</td>
                                    <td class="text-center p-3">Teknik Informatika</td>
                                    <td class="text-center p-3">
                                        <a href="#" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
        </div><!--end col-->

        <div class="col-12 mt-4">
            <div class="card border-0 rounded shadow">
                <div class="fw-bold card-header">Publikasi</div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="#" class="btn btn-sm btn-success">Tambah Publikasi</a>
                    </div>
                    <div class="mb-3">
                        <table class="table table-center bg-white mb-0">
                            <thead>
                                <tr>
                                    <th class="border-bottom p-3">No</th>
                                    <th class="text-center border-bottom p-3">Judul</th>
                                    <th class="text-center border-bottom p-3">Publisher</th>
                                    <th class="text-center border-bottom p-3">Tahun</th>
                                    <th class="text-center border-bottom p-3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center p-3">1</td>
                                    <td class="text-center p-3">Sistem Pakar Kepribadian</td>
                                    <td class="text-center p-3">Jurnal XYZ</td>
                                    <td class="text-center p-3">2023</td>
                                    <td class="text-center p-3">
                                        <a href="#" class="btn btn-sm btn-primary ms-2">Lihat Jurnal</a>
                                        <a href="#" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection