<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nomor = 1;
        $bk = Buku::all();
        return view('buku.index',compact('nomor','bk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kd_buku' => 'required|unique:bukus,kd_buku',
            'nm_buku' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $bk = new Buku;
        $bk->kd_buku = $request->kd_buku;
        $bk->nm_buku = $request->nm_buku; // tambahkan ini untuk menyimpan nama buku
        $bk->stok = $request->stok;
        $bk->harga = $request->harga;
        $bk->save();

        return redirect('/buku/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $bk = Buku::find($id);
        if ($bk) {
            return view('buku.edit', compact('bk'));
        } else {
            return redirect('/buku/')->withErrors('Data tidak ditemukan');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kd_buku' => 'required|unique:bukus,kd_buku,'.$id,
            'nm_buku' => 'required',
            'stok' => 'required',
            'harga' => 'required',
        ]);

        $bk = Buku::find($id);
        if ($bk) {
            $bk->kd_buku = $request->kd_buku;
            $bk->nm_buku = $request->nm_buku; // tambahkan ini untuk menyimpan nama buku
            $bk->stok = $request->stok;
            $bk->harga = $request->harga;
            $bk->save();
        } else {
            return redirect('/buku/')->withErrors('Data tidak ditemukan');
        }

        return redirect('/buku/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $bk = Buku::find($id);
        $bk->delete();

        return redirect('/buku/');
    }
}
