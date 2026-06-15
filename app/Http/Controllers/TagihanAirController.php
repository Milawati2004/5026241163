<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TagihanAirController extends Controller
{
    public function index()
    {

        $tagihan = DB::table('tagihan_air')->get();
        return view('tagihanair.index', ['tagihan' => $tagihan]);
    }

    public function tambah()
    {
        return view('tagihanair.tambah');
    }

    public function store(Request $request)
    {

        DB::table('tagihanair')->insert([
            'NoMeteran' => $request->NoMeteran,
            'MeterAwal' => $request->MeterAwal,
            'MeterAkhir'=> $request->MeterAkhir,
        ]);

        return redirect('/eas');
    }
}
