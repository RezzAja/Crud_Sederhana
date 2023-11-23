@extends('layouts.home')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between mb-5">
            <h4 class="mb-0">Semua Data Siswa</h4>
            <a href="{{ route ('customers.create') }}" class="btn btn-primary px-3">Input Nama Siswa</a>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Email Siswa</th>
                        <th>Nomor Telepon Wali</th>
                        <th>Alamat Rumah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach ($items as $key => $item)
                   <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $item -> name }}</td>
                    <td>{{ $item -> email }}</td>
                    <td>{{ $item -> phone_number}}</td>
                    <td>{{ $item -> address }}</td>
                    <td>
                        <div class="d-flex align--items-center gap-2">
                            <a href="{{ route('customers.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('customers.destroy', $item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Emang Dah Yakin?')">Hapus</button>
                                
                            </form>
                        </div>
                    </td>
                   </tr>     
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection