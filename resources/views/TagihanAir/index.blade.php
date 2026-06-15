@extends('template2')
@section('judul_halaman', 'Kode Soal tagihan_air')
@section('konten')
    <h2>Data Tagihan Air</h2>
    <a href="/eas/tambah" class="btn btn-primary">Input Tagihan Baru</a>

    <br><br>
    <table class="table table-striped table-hover">
    <tr>
        <th>ID</th>
        <th>No Meteran</th>
        <th>Penggunaan (m³)</th>
        <th>Total Tagihan</th>
    </tr>
    @forelse ($tagihan as $row)
        @php
            $penggunaan = $row->MeterAkhir - $row->MeterAwal;
            $totalTagihan = $penggunaan * 5000;
        @endphp
        <tr>
            <td>{{ $row->ID }}</td>
            <td>{{ $row->NoMeteran }}</td>
            <td>{{ $penggunaan }}</td>
            <td>Rp{{ number_format($totalTagihan, 0, ',', '.') }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="4" class="text-center">Belum ada data tagihan air.</td>
        </tr>
    @endforelse
    </table>
@endsection
