@extends('layouts.dashboard.app')

@section('title', 'Tambah User')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Tambah User</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nama Lengkap" value=""
                                required>
                            <div class="invalid-feedback">
                                Nama Lengkap Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="firstName" placeholder="Judul Berita" value=""
                                required>
                            <div class="invalid-feedback">
                                Foto Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Username</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Username" value=""
                                required>
                            <div class="invalid-feedback">
                                Username Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Password</label>
                            <input type="password" class="form-control" name="passswords" id="firstName" placeholder="Password" value=""
                                required>
                            <div class="invalid-feedback">
                                Password Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" name="password-confirm" id="firstName" placeholder="Konfirmasi Password" value=""
                                required>
                            <div class="invalid-feedback">
                                Konfirmasi Password Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Level</label>
                            <select class="form-select form-control" aria-label="Default select example">
                                <option selected>Pilih Level</option>
                                <option value="1">Admin</option>
                                <option value="2">Penulis</option>
                            </select>
                        </div>

                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Tambah User</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection