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
                <form action="{{ route('dosen.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" name="nama" id="firstName" placeholder="Nama Dosen" value=""
                                required>
                            <div class="invalid-feedback">
                                Nama Dosen Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">NIDN</label>
                            <input type="text" class="form-control" name="nidn" id="firstName" placeholder="NIDN Dosen" value=""
                                required>
                            <div class="invalid-feedback">
                                NIDN Dosen Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Foto</label>
                            <input type="file" class="form-control" name="foto" id="firstName" placeholder="Judul Berita" value=""
                                required>
                            <div class="invalid-feedback">
                                Foto Harus Terisi
                            </div>
                        </div>
                        
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Jabatan Fungsional</label>
                            <select class="form-select form-control" name="jabatan_fungsional" aria-label="Default select example">
                                <option selected>Pilih Jabatan Fungsional</option>
                                <option value="Asisten Ahli">Asisten Ahli</option>
                                <option value="Lektor">Lektor</option>
                                <option value="Lektor Kepala">Lektor Kepala</option>
                                <option value="Guru Besar">Guru Besar / Profesor</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Jabatan Struktural</label>
                            <select class="form-select form-control" name="jabatan_struktural" aria-label="Default select example">
                                <option selected>Pilih Jabatan Struktural</option>
                                <option value="Rektor">Rektor</option>
                                <option value="Wakil Rektor">Wakil Rektor</option>
                                <option value="Kepala Bidang">Kepala Bidang</option>
                                <option value="Dekan">Dekan</option>
                                <option value="Wakil Dekan">Wakil Dekan</option>
                                <option value="Kepala Program Studi">Kepala Program Studi</option>
                                <option value="Dosen Fakultas">Dosen Fakultas</option>
                            </select>
                        </div>
                       
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Program Studi</label>
                            <select class="form-select form-control" name="program_studi" aria-label="Default select example">
                                <option selected>Pilih Program Studi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nomor WA</label>
                            <input type="text" class="form-control" name="no_wa" id="firstName" placeholder="Nomor WA" value=""
                                required>
                            <div class="invalid-feedback">
                                Nomor WA Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control" id="editor" cols="30" rows="10" required></textarea>
                            <div class="invalid-feedback">
                                Deskripsi Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Tambah Dosen</button>
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
