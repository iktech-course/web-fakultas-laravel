@extends('layouts.dashboard.app')

@section('title', 'Tambah User')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Edit User</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data" class="needs-validation">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="firstName" placeholder="Nama Lengkap" value="{{ $user->nama }}"
                                required>
                                @error('nama')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto" placeholder="Judul Berita"
                                value="">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                           
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="firstName" placeholder="Email" value="{{ $user->email }}"
                                required>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" id="firstName" placeholder="Password" value=""
                            autocomplete="current-password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control"  name="password_confirmation" id="firstName" placeholder="Konfirmasi Password" value=""
                            autocomplete="current-password">
                            <div class="invalid-feedback">
                                Konfirmasi Password Harus Terisi
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Level</label>
                            <select class="form-select form-control" name="level" aria-label="Default select example">
                                <option selected>Pilih Level</option>
                                <option value="1" @if ($user->level == 1) selected @endif >Admin</option>
                                <option value="2" @if ($user->level == 2) selected @endif>Penulis</option>
                            </select>

                            @error('level')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Tambah User</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection