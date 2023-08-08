@extends('layouts.dashboard.app')

@section('title', 'Kontak')

@section('content')
<div class="layout-specing">
    <div class="d-md-flex justify-content-between align-items-center">
        <h5 class="mb-0">Kontak</h5>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 mt-4">
            <div class="card rounded shadow p-4 border-0">
                <form class="needs-validation" novalidate>
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Nomor Telepon" value=""
                                required>
                            <div class="invalid-feedback">
                                Nomor Telepon Harus Terisi
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Email</label>
                            <input type="email" class="form-control" id="firstName" placeholder="Email" value=""
                                required>
                            <div class="invalid-feedback">
                                Email Harus Terisi
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

                    </div>

                    <button class="mt-5 w-100 btn btn-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div><!--end col-->
    </div><!--end row-->
</div>
@endsection