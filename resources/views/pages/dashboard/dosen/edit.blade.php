@extends('layouts.dashboard.app')

@section('title', 'Tambah Dosen')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Dosen</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form action="{{ route('dosen.update', $dosen->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" id="firstName" name="nama" placeholder="Nama Dosen" value="{{ $dosen->nama }}"
                                required>
                            <div class="invalid-feedback">
                                Nama Dosen Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">NIDN</label>
                            <input type="text" class="form-control" name="nidn" id="firstName" placeholder="NIDN Dosen" value="{{ $dosen->nidn }}"
                                required>
                            <div class="invalid-feedback">
                                NIDN Dosen Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" id="firstName" placeholder="Judul Berita" value="">
                            <div class="invalid-feedback">
                                Foto Harus Terisi
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Jabatan Fungsional</label>
                            <select class="form-select form-control" name="jabatan_fungsional" aria-label="Default select example">
                                <option selected>Pilih Jabatan Fungsional</option>
                                <option value="Asisten Ahli" @if ($dosen->jabatan_fungsional == "Asisten Ahli") selected @endif>Asisten Ahli</option>
                                <option value="Lektor" @if ($dosen->jabatan_fungsional == "Lektor") selected @endif>Lektor</option>
                                <option value="Lektor Kepala" @if ($dosen->jabatan_fungsional == "Lektor Kepala") selected @endif>Lektor Kepala</option>
                                <option value="Guru Besar" @if ($dosen->jabatan_fungsional == "Guru Besar") selected @endif>Guru Besar / Profesor</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Ikatan Kerja</label>
                            <select class="form-select form-control" name="ikatan_kerja" aria-label="Default select example">
                                <option selected>Pilih Status Ikatan Kerja</option>
                                <option value="Tetap" @if ($dosen->ikatan_kerja == "Tetap") selected @endif>Tetap</option>
                                <option value="Tidak Tetap" @if ($dosen->ikatan_kerja == "Tidak Tetap") selected @endif>Tidak Tetap</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Jabatan Struktural</label>
                            <select class="form-select form-control" name="jabatan_struktural" aria-label="Default select example">
                                <option selected>Pilih Jabatan Struktural</option>
                                <option value="Rektor" @if ($dosen->jabatan_struktural == "Rektor") selected @endif>Rektor</option>
                                <option value="Wakil Rektor" @if ($dosen->jabatan_struktural == "Wakil Rektor") selected @endif>Wakil Rektor</option>
                                <option value="Kepala Bidang" @if ($dosen->jabatan_struktural == "Kepala Bidang") selected @endif>Kepala Bidang</option>
                                <option value="Dekan" @if ($dosen->jabatan_struktural == "Dekan") selected @endif>Dekan</option>
                                <option value="Wakil Dekan" @if ($dosen->jabatan_struktural == "Wakil Dekan") selected @endif>Wakil Dekan</option>
                                <option value="Kepala Program Studi" @if ($dosen->jabatan_struktural == "Kepala Program Studi") selected @endif>Kepala Program Studi</option>
                                <option value="Dosen Fakultas" @if ($dosen->jabatan_struktural == "Dosen Fakultas") selected @endif>Dosen Fakultas</option>
                            </select>
                        </div>
                       
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Program Studi</label>
                            <select class="form-select form-control" name="program_studi" aria-label="Default select example">
                                <option selected>Pilih Program Studi</option>
                                <option value="Sistem Informasi" @if ($dosen->program_studi == "Sistem Informasi") selected @endif>Sistem Informasi</option>
                                <option value="Teknik Informatika" @if ($dosen->program_studi == "Teknik Informatika") selected @endif>Teknik Informatika</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nomor WA</label>
                            <input type="text" class="form-control" name="no_wa" id="firstName" placeholder="Nomor WA" value="{{ $dosen->no_wa }}"
                                required>
                            <div class="invalid-feedback">
                                Nomor WA Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="editor" cols="30" rows="10" required>{!! $dosen->deskripsi !!}</textarea>
                            <div class="invalid-feedback">
                                Deskripsi Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Ubah Data Dosen</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection

@push('before-script')
  <!-- ckeditor -->
  <script src="{{ asset('assets/dashboard/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
@endpush
