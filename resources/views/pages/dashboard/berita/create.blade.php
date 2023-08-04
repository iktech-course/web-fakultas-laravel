@extends('layouts.dashboard.app')

@section('title', 'Tambah Berita')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Berita</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form action="{{ route('berita.store') }}" method="POST" enctype="multipart/form-data" class="needs-validation">
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Judul Berita</label>
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Berita"
                                value="" required>
                            <div class="invalid-feedback">
                                Judul Berita Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Gambar</label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Judul Berita"
                                value="" required>
                            <div class="invalid-feedback">
                                Gambar Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Isi Berita</label>
                            <textarea name="isi" class="form-control" id="editor" cols="30" rows="10"></textarea>
                            <div class="invalid-feedback">
                                Isi Berita Harus Terisi
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

@push('before-script')
  <!-- ckeditor -->
  <script src="{{ asset('assets/dashboard/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
@endpush
