<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BusDBController extends Controller
{
    public function indexbus()
    {
        // mengambil data dari table bus
        $bus = DB::table('bus')->paginate(10);
        // mengirim data bus ke view index
        return view('indexbus', ['bus' => $bus]);
    }

    // method untuk menampilkan view form tambah bus
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahbus');
    }

    // method untuk insert data ke table bus
    public function store(Request $request)
    {
        // insert data ke table bus
        // kodebus tidak diisi karena AUTO_INCREMENT mengisinya otomatis
        DB::table('bus')->insert([
            'merkbus' => $request->merkbus,
            'jumlahbus' => $request->jumlahbus,
            'tersedia' => $request->tersedia
        ]);

        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    // method untuk edit data bus
    public function edit($kode)
    {
        // mengambil data bus berdasarkan kode yang dipilih
        $bus = DB::table('bus')
            ->where('kodebus', $kode)
            ->get();

        // passing data bus ke view editbus.blade.php
        return view('editbus', ['bus' => $bus]);
    }

    // update data bus
    public function update(Request $request)
    {
        DB::table('bus')
            ->where('kodebus', $request->kodebus)
            ->update([
                'merkbus' => $request->merkbus,
                'jumlahbus' => $request->jumlahbus,
                'tersedia' => $request->tersedia
            ]);

        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    // method untuk hapus data bus
    public function hapus($kode)
    {
        // menghapus data bus berdasarkan kode yang dipilih
        DB::table('bus')
            ->where('kodebus', $kode)
            ->delete();

        // alihkan halaman ke halaman bus
        return redirect('/bus');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mencari berdasarkan merk bus
        $bus = DB::table('bus')
            ->where('merkbus', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data bus ke view index
        return view('indexbus', ['bus' => $bus]);
    }
}
