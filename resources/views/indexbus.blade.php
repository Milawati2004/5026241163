@extends('template2')
@section('judul_halaman', 'Data Bus')
@section('konten')

    <h3>Data Bus</h3>

    <a href="/bus/tambah" class="btn btn-primary">+ Tambah Bus Baru</a>

    <br />
    <br />

    <form action="/bus/cari" method="POST">
        {{ csrf_field() }}

        <input type="text" name="cari" placeholder="Cari Merk Bus">

        <input type="submit" value="CARI" class="btn btn-info">
    </form>

    <br />

    <table class="table table-striped">

        <tr>
            <th>Kode Bus</th>
            <th>Merk Bus</th>
            <th>Jumlah Bus</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>

        @foreach ($bus as $b)
            <tr>
                <td>{{ $b->kodebus }}</td>
                <td>{{ $b->merkbus }}</td>
                <td>{{ $b->jumlahbus }}</td>

                <td>
                    @if($b->tersedia == 'Y')
                        <span class="badge bg-success">Tersedia</span>
                    @else
                        <span class="badge bg-danger">Tidak Tersedia</span>
                    @endif
                </td>

                <td>
                    <a href="/bus/edit/{{ $b->kodebus }}" class="btn btn-warning">Edit</a>
                    <a href="/bus/hapus/{{ $b->kodebus }}" class="btn btn-danger">Hapus</a>
                </td>

            </tr>
        @endforeach

    </table>

    {{ $bus->links() }}

@endsection
