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
        $data = Produk::all();
        // $data = Produk::where('deskripsi', 'like', '%bagus%')->get();
        // $data = Produk::where('deskripsi', 'like', '%bagus%')->orderBy('harga', 'asc')->get();

        return view('list_produk', compact('data'));
    }

    public function delete($id) {
        $produk = Produk::where('id', $id)->first();
        if($produk) {
            $produk->delete();
            return redirect()->back()->with('success', 'Produk berhasil dihapus.');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }

    public function edit($id) {
        $produk = Produk::findOrFail($id);
        return view('editProduk', compact('produk'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
        ]);

        $produk = Produk::find($id);

        if ($produk) {
            $produk->nama = $request->input('nama');
            $produk->deskripsi = $request->input('deskripsi');
            $produk->harga = $request->input('harga');
            $produk->save();

            return redirect('list_produk')->with('success', 'Produk berhasil diperbarui.');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan.');
        }
    }
}