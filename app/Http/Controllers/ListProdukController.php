<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ListProdukController extends Controller
{
    public function simpan(Request $request) {
        $produk = new Produk;
        $produk->nama = $request->input('nama');
        $produk->deskripsi = $request->input('deskripsi');
        $produk->harga = $request->input('harga');
        $produk->save();

        return redirect('list_produk')->with('success', 'Data berhasil disimpan!');
    }

    public function show() {
        $data = Produk::get();
        // $data = Produk::where('deskripsi', 'like', '%bagus%')->get();
        // $data = Produk::where('deskripsi', 'like', '%bagus%')->orderBy('harga', 'asc')->get();
        $nama = $desc = $harga = [];

        foreach ($data as $produk) {
            $nama[] = $produk->nama;
            $desc[] = $produk->deskripsi;
            $harga[] = $produk->harga;
        }

        return view('list_produk', compact('nama', 'desc', 'harga'));
    }
}
