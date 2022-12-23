<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }

    public function create()
    {
        return view('accounts.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'id' => 'required|max:16',
            'nama' => 'required|max:255',
            'jenis' => 'required|max:50'
        ];

        $validated = $request->validate($rules);

        Account::create($validated);

        $request->session()->flash('success', "Berhasil menambahkan akun baru yang bernama {$validated['nama']}");
        return redirect()->route('accounts.index');
    }

    public function show(Account $account)
    {
        return view('accounts.show', compact('account'));
    }

    public function edit(Account $account)
    {
        return view('accounts.edit', compact('account'));
    }

    public function update(Request $request, Account $account)
    {
        $rules = [
            'id' => 'required|max:16',
            'nama' => 'required|max:255',
            'jenis' => 'required|max:50'
        ];

        $validated = $request->validate($rules);

        $account->update($validated);

        $request->session()->flash('success', "Berhasil memperbarui data akun yang bernama {$validated['nama']}");
        return redirect()->route('accounts.index');
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->route('accounts.index')->with('success', "Berhasil menghapus data akun {$account['nama']}");
    }
}
