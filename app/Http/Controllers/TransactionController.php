<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('transactions.index', compact('transactions'));
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'id' => 'required|max:16',
            'kategori' => 'required|max:255',
            'nominal' => 'required|double',
            'tujuan' => 'required|max:255',
            'account_id' => 'required|max:16'
        ];

        $validated = $request->validate($rules);

        Transaction::create($validated);

        $request->session()->flash('success', "Berhasil menambahkan data transaksi baru yang memiliki ID {$validated['id']}");
        return redirect()->route('transactions.index');
    }

    public function show(Transaction $transaction)
    {
        return view('transactions.show', compact('transaction'));
    }

    public function edit(Transaction $transaction)
    {
        return view('transactions.edit', compact('transaction'));
    }

    public function update(Request $request, Transaction $transaction)
    {
        $rules = [
            'id' => 'required|max:16',
            'kategori' => 'required|max:255',
            'nominal' => 'required|double',
            'tujuan' => 'required|max:255',
            'account_id' => 'required|max:16'
        ];

        $validated = $request->validate($rules);

        $transaction->update($validated);

        $request->session()->flash('success', "Berhasil memperbarui data transaksi yang memiliki ID {$validated['id']}");
        return redirect()->route('transactions.index');
    }

    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('transactions.index')->with('success', "Berhasil menghapus data transaksi {$transaction['id']}");
    }
}
