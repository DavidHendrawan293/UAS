@extends('layouts.master')

@section('title', 'Tambah Akun Baru')

@section('content')
    <h2>Tambah Akun Baru</h2>
    <form action="{{ route('accounts.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nama">Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                    value="{{ old('nama') }}">
                @error('nama')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="jenis">Jenis</label>
                <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis"
                    id="jenis" value="{{ old('jenis') }}">
                @error('jenis')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Tambah</button>
    </form>
@endsection
