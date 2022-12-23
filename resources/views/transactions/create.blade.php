@extends('layouts.master')

@section('title', 'Buat Transaksi')

@section('content')
    <h2>Buat Transaksi</h2>
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
                <label for="kategori">Kategori</label>
                <input type="text" class="form-control @error('kategori') is-invalid @enderror" name="kategori"
                    id="kategori" value="{{ old('kategori') }}">
                @error('kategori')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="nominal">Nominal</label>
                <input type="number" class="form-control @error('nominal') is-invalid @enderror" name="nominal"
                    id="nominal" min="10000" max="1000000000" value="{{ old('nominal') }}">
                @error('nominal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="tujuan">Tujuan</label>
                <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="tujuan"
                    id="tujuan" value="{{ old('tujuan') }}">
                @error('tujuan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="account_id">Account ID</label>
                <input type="text" class="form-control @error('account_id') is-invalaccount_id @enderror"
                    name="account_id" id="account_id" value="{{ old('account_id') }}">
                @error('account_id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Tambah</button>
    </form>
@endsection
