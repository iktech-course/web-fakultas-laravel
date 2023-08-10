@extends('layouts.dashboard.app')

@section('title', 'Edit Kegiatan Akademik')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit Kegiatan</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Judul Kegiatan</label>
                            <input type="text" class="form-control" name="nama_kegiatan" id="firstName" placeholder="Nama Kegiatan" value="{{ $kegiatan->nama_kegiatan }}"
                                required>
                            <div class="invalid-feedback">
                                Nama Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Deskripsi Kegiatan</label>
                            <textarea name="deskripsi" class="form-control" id="editor" cols="30" rows="10" required>{!! $kegiatan->deskripsi !!}</textarea>
                            <div class="invalid-feedback">
                                Deskripsi Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" name="tanggal"  placeholder="Judul Berita" value="{{ $kegiatan->tanggal }}"
                                required>
                            <div class="invalid-feedback">
                                Tanggal Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Waktu Kegiatan</label>
                            <input type="time" class="form-control" name="waktu" placeholder="Judul Berita" value="{{ $kegiatan->waktu }}"
                                required>
                            <div class="invalid-feedback">
                                Waktu Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi" value="{{ $kegiatan->lokasi }}"
                                required>
                            <div class="invalid-feedback">
                                Lokasi Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Pelaksana</label>
                            <input type="text" class="form-control" name="pelaksana" placeholder="Pelaksana" value="{{ $kegiatan->pelaksana }}"
                                required>
                            <div class="invalid-feedback">
                                Pelaksana Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Simpan Perubahan Kegiatan</button>
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