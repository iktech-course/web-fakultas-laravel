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
                <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST" class="needs-validation" novalidate>
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kode_mk" id="firstName" placeholder="Kode Mata Kuliah" value="{{ $matakuliah->kode_mk }}"
                                required>
                            <div class="invalid-feedback">
                                Kode Mata Kuliah Harus Terisi
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_mk" id="firstName" placeholder="Nama Mata Kuliah" value="{{ $matakuliah->nama_mk }}"
                                required>
                            <div class="invalid-feedback">
                                SKS Harus Terisi
                            </div>
                        </div>

                         <div class="col-sm-12">
                            <label for="firstName" class="form-label">SKS</label>
                            <input type="text" class="form-control" name="sks" id="firstName" placeholder="Jumlah SKS" value="{{ $matakuliah->sks }}"
                                required>
                            <div class="invalid-feedback">
                                SKS Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Program Studi</label>
                            <select class="form-select form-control" name="program_studi" aria-label="Default select example">
                                <option selected>Pilih Program Studi</option>
                                <option value="Sistem Informasi" @if ($matakuliah->program_studi == "Sistem Informasi") selected @endif >Sistem Informasi</option>
                                <option value="Teknik Informatika" @if ($matakuliah->program_studi == "Teknik Informatika") selected @endif >Teknik Informatika</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Semester</label>
                            <select class="form-select form-control" name="semester" aria-label="Default select example">
                                <option selected>Pilih Semester</option>
                                <option value="1" @if ($matakuliah->semester == "1") selected @endif >1</option>
                                <option value="2" @if ($matakuliah->semester == "2") selected @endif >2</option>
                                <option value="3" @if ($matakuliah->semester == "3") selected @endif >3</option>
                                <option value="4" @if ($matakuliah->semester == "4") selected @endif >4</option>
                                <option value="5" @if ($matakuliah->semester == "5") selected @endif >5</option>
                                <option value="6" @if ($matakuliah->semester == "6") selected @endif >6</option>
                                <option value="7" @if ($matakuliah->semester == "7") selected @endif >7</option>
                                <option value="8" @if ($matakuliah->semester == "8") selected @endif >8</option>
                            </select>
                            <div class="invalid-feedback">
                                Semester Harus Terisi
                            </div>
                        </div>
                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Simpan Perubahan Mata Kuliah</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection