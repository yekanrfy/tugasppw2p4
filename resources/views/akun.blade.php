@extends('layouts.master')

@section('title', 'Akun')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3>Akun</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <h5>Informasi Pribadi</h5>
                        <p><strong>Nama:</strong> Yeka Nurfy Mumtahany</p>
                        <p><strong>Email:</strong> yekanrfy@example.com</p>
                        <p><strong>No. Telepon:</strong> 081234567890</p>
                    </div>
                    <div class="mb-3">
                        <h5>Aksi</h5>
                        <a href="#" class="btn btn-outline-primary">Edit Profil</a>
                        <a href="#" class="btn btn-outline-secondary">Riwayat Transaksi</a>
                        <a href="#" class="btn btn-outline-danger">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection