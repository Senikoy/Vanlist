@extends('layout')

@section('content')
    <div id="layoutSidenav_content" class="bg-info">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">ALFEREZ COMPANY</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">DETAILS OF THE COMPANY</li>
                </ol>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Van Details</h3>
                    </div>
                    <div class="card-body">
                        <p><strong>Brand:</strong> {{ $van->brand }}</p>
                        <p><strong>Model:</strong> {{ $van->model }}</p>
                        <p><strong>Price:</strong> ${{ $van->price }}</p>
                        <a href="{{ route('vans.index') }}" class="btn btn-primary">Back to Vans</a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2023</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@endsection
