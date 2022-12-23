@extends('layouts.master')

@section('title', 'Transactions List')

@push('css_after')
    <style>
        td {
            max-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
    </style>
@endpush

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Transactions List</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('transactions.create') }}" class="btn btn-success">
                            <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
                            <span>Tambah Transaksi</span>
                        </a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kategori</th>
                        <th>Nominal</th>
                        <th>Tujuan</th>
                        <th>Account ID</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($transactions as $transaction)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><a href="{{ route('transactions.show', $transaction->id) }}">{{ $transaction->title }}</a>
                            </td>
                            <td>{{ $transaction->kategori }}</td>
                            <td>{{ $transaction->nominal }}</td>
                            <td>{{ $transaction->tujuan }}</td>
                            <td>{{ $transaction->account_id }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td align="center" colspan="6">Belum ada transaksi!</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
