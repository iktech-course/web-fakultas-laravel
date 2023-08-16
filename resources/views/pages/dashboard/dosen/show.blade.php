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
                                        <div class="fw-bold text-muted">Status Ikatan Kerja</div>
                                        <div class="text-black">Dosen {{ $dosen->ikatan_kerja }}</div>
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#AddMKPengampu" class="btn btn-sm btn-success">Tambah Mata Kuliah</a>
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
                               @foreach ($mk_pengampu as $no => $item)
                               <tr>
                                <td class="text-center p-3">{{ ++$no }}</td>
                                <td class="text-center p-3">{{ $item->MataKuliah->kode_mk }}</td>
                                <td class="text-center p-3">{{ $item->MataKuliah->nama_mk }}</td>
                                <td class="text-center p-3">{{ $item->MataKuliah->semester }}</td>
                                <td class="text-center p-3">{{ $item->MataKuliah->sks }}</td>
                                <td class="text-center p-3">{{ $item->MataKuliah->program_studi }}</td>
                                <td class="text-center p-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#ConfirmModal-{{ $item->id }}" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                </td>
                            </tr>
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
                                                <p class="text-muted mb-0">Apakah Anda Akan Menghapus Data Ini...?
                                                </p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('mkpengampu.destroy', $item->id) }}" method="POST">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal" id="close-modal">Batalkan</button>
                                                @csrf
                                                @method('DELETE')
                                                <input type="text" class="form-control" id="firstName" name="id_dosen" placeholder="ID Dosen" value="{{ $dosen->id }}" required hidden>
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
                </div>
            </div>
        </div><!--end col-->

        <div class="col-12 mt-4">
            <div class="card border-0 rounded shadow">
                <div class="fw-bold card-header">Publikasi</div>
                <div class="card-body">
                    <div class="mb-3">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#AddPublikasi" class="btn btn-sm btn-success">Tambah Publikasi</a>
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
                                @foreach ($publikasi as $no => $item)
                                <tr>
                                    <td class="text-center p-3">{{ ++$no }}</td>
                                    <td class="text-center p-3">{{ $item->judul }}</td>
                                    <td class="text-center p-3">{{ $item->publisher }}</td>
                                    <td class="text-center p-3">{{ $item->tahun }}</td>
                                    <td class="text-center p-3">
                                        <a href="{{ $item->link }}" target="_blank" class="btn btn-sm btn-primary ms-2 mb-2">Lihat Jurnal</a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#DelPublikasi-{{ $item->id }}" class="btn btn-sm btn-soft-danger ms-2">Hapus</a>
                                    </td>
                                </tr>
                                <!-- Modal Content Start -->
                                <div class="modal fade" id="DelPublikasi-{{ $item->id }}" tabindex="-1"
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
                                                    <p class="text-muted mb-0">Apakah Anda Akan Menghapus Data Ini...?
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('publikasi.destroy', $item->id) }}" method="POST">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal" id="close-modal">Batalkan</button>
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="text" class="form-control" id="firstName" name="id_dosen" placeholder="ID Dosen" value="{{ $dosen->id }}" required hidden>
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
                </div>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>

<!-- Modal Content Start -->
<div class="modal fade" id="AddMKPengampu" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="LoginForm-title">Tambah Mata Kuliah Yang Di Ampu</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('mkpengampu.store') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" id="firstName" name="id_dosen" placeholder="ID Dosen" value="{{ $dosen->id }}" required hidden>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Mata Kuliah</label>
                        <select class="form-select form-control" name="id_mk" aria-label="Default select example">
                            <option selected>Pilih Mata Kuliah</option>
                            @foreach ($matakuliah as $item)
                                <option value="{{ $item->id }}">{{ $item->kode_mk }} - {{ $item->nama_mk }} - {{ $item->program_studi }}</option>         
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
             </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Content End -->


<!-- Modal Content Start -->
<div class="modal fade" id="AddPublikasi" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded shadow border-0">
            <div class="modal-header border-bottom">
                <h5 class="modal-title" id="LoginForm-title">Tambah Publikasi</h5>
                <button type="button" class="btn btn-icon btn-close" data-bs-dismiss="modal" id="close-modal"><i class="uil uil-times fs-4 text-dark"></i></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('publikasi.store') }}" method="POST">
                    @csrf
                    <input type="text" class="form-control" id="firstName" name="id_dosen" placeholder="ID Dosen" value="{{ $dosen->id }}" required hidden>
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="firstName" name="judul" placeholder="Judul Publikasi" value=""
                        required>
                        <div class="invalid-feedback">
                            Judul Harus Terisi
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="firstName" name="publisher" placeholder="Nama Publisher" value=""
                        required>
                        <div class="invalid-feedback">
                            Nama Publisher Harus Terisi
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Tahun</label>
                        <input type="text" class="form-control" id="firstName" name="tahun" placeholder="Tahun Terbit" value="">
                        <div class="invalid-feedback">
                            Tahun Harus Terisi
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Link</label>
                        <input type="url" class="form-control" id="firstName" name="link" placeholder="Link Publikasi" value=""
                        required>
                        <div class="invalid-feedback">
                            Link Harus Terisi
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
             </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Content End -->
@endsection