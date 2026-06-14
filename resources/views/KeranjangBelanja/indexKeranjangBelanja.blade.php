@extends('template2')
@section('judul_halaman', 'Data Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    <a href="/keranjangbelanja/tambah" class="btn btn-primary">Tambah Keranjang Belanja</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>

        @forelse($keranjangbelanja as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>Rp{{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>Rp{{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/tambah" class="btn btn-success btn-sm">Beli</a>

                    <form action="/keranjangbelanja/{{ $row->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada data keranjang belanja.</td>
            </tr>
        @endforelse
    </table>

@endsection
