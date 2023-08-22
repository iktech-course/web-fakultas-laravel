@extends('layouts.dashboard.app')

@section('title', 'Beranda')

@section('content')
    <div class="layout-specing">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Selamat Datang, {{ Auth::user()->nama }}</h6>
                <h5 class="mb-0">Dashboard</h5>
            </div>


        </div>

        <div class="row">
            <div class="col-4 mt-4">
                <a href="#!"
                    class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-newspaper mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Jumlah Berita</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $berita }}">{{ $berita }}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->

            <div class="col-4 mt-4">
                <a href="#!"
                    class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-user-circle fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Dosen</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $dosen }}">{{ $dosen }}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->

            @if (Auth::user()->level == 1)
            <div class="col-4 mt-4">
                <a href="#!"
                    class="features feature-primary d-flex justify-content-between align-items-center rounded shadow p-3">
                    <div class="d-flex align-items-center">
                        <div class="icon text-center rounded-pill">
                            <i class="uil uil-message fs-4 mb-0"></i>
                        </div>
                        <div class="flex-1 ms-3">
                            <h6 class="mb-0 text-muted">Pesan</h6>
                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="{{ $pesan }}">{{ $pesan }}</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div><!--end col-->
            @endif
        </div><!--end row-->
    </div>
@endsection
