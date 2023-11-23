@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="mb-0">Semua Data Siswa</h4>
            <a href="{{ route('customers.index') }}" class="btn btn-light px-3">Batal & Kembali</a>
        </div>

        <form action="{{ route('customers.store') }}" method="post">
        
        @csrf

        <div class="mb-3">
            <label for="name">Nama Siswa</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="phone_number">Nomor Telepon</label>
            <input type="number" name="phone_number" id="Phone_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address">Alamat RUmah</label>
            <textarea name="address" id="address" cols="30" rows="4" class="form-control"></textarea>
        </div>
        <button class="btn btn-primary px-4" type="submit">Simpan Baru</button>
        

        </form>
    </div>
@endsection