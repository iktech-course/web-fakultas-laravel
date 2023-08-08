@extends('layouts.dashboard.app')

@section('title', 'Tambah Kegiatan Akademik')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Kegiatan</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Judul Kegiatan</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nama Kegiatan" value=""
                                required>
                            <div class="invalid-feedback">
                                Nama Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Deskripsi Kegiatan</label>
                            <textarea name="isi" class="form-control" id="editor" cols="30" rows="10" required></textarea>
                            <div class="invalid-feedback">
                                Deskripsi Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Tanggal Kegiatan</label>
                            <input type="date" class="form-control" id="firstName" placeholder="Judul Berita" value=""
                                required>
                            <div class="invalid-feedback">
                                Tanggal Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Waktu Kegiatan</label>
                            <input type="time" class="form-control" id="firstName" placeholder="Judul Berita" value=""
                                required>
                            <div class="invalid-feedback">
                                Waktu Kegiatan Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Lokasi</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Lokasi" value=""
                                required>
                            <div class="invalid-feedback">
                                Lokasi Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Pelaksana</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Pelaksana" value=""
                                required>
                            <div class="invalid-feedback">
                                Pelaksana Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Tambah Berita</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection