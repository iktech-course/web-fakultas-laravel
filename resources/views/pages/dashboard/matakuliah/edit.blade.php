@extends('layouts.dashboard.app')

@section('title', 'Tambah Matakuliah')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah Mata Kuliah</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form action="{{ route('matakuliah.store') }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kode_mk" id="firstName" placeholder="Kode Mata Kuliah" value=""
                                required>
                            <div class="invalid-feedback">
                                Kode Mata Kuliah Harus Terisi
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_mk" id="firstName" placeholder="Nama Mata Kuliah" value=""
                                required>
                            <div class="invalid-feedback">
                                SKS Harus Terisi
                            </div>
                        </div>

                         <div class="col-sm-12">
                            <label for="firstName" class="form-label">SKS</label>
                            <input type="text" class="form-control" name="sks" id="firstName" placeholder="Jumlah SKS" value=""
                                required>
                            <div class="invalid-feedback">
                                SKS Harus Terisi
                            </div>
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
                            <label for="firstName" class="form-label">Semester</label>
                            <select class="form-select form-control" name="semester" aria-label="Default select example">
                                <option selected>Pilih Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                            <div class="invalid-feedback">
                                Semester Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Tambah Mata Kuliah</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection