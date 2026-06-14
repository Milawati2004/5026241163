<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaDBController extends Controller
{
    // Tampilkan semua data
    public function index()
    {
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view('KeranjangBelanja.indexKeranjangBelanja', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // Tampilkan form tambah
    public function tambah()
    {
        return view('KeranjangBelanja.tambahKeranjangBelanja');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah'     => $request->Jumlah,
            'Harga'      => $request->Harga,
        ]);

        return redirect()->route('keranjangbelanja.index');
    }

    // Hapus data
    public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('id', $id)->delete();
        return redirect()->route('keranjangbelanja.index');
    }
}
