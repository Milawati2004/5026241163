@extends('template2')
@section('judul_halaman', 'Data Bus')

@section('konten')
    <p>
        <br>
        <a href="/bus" class="btn btn-secondary mb-4">Kembali</a>
    </p>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Bus
        </div>

        <div class="card-body">
            <form action="/bus/store" method="post">

                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="merkbus" class="col-sm-2 col-form-label">
                        Merk Bus
                    </label>

                    <div class="col-sm-10">
                        <input type="text" name="merkbus" id="merkbus" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="jumlahbus" class="col-sm-2 col-form-label">
                        Jumlah Bus
                    </label>

                    <div class="col-sm-10">
                        <input type="number" name="jumlahbus" id="jumlahbus" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="tersedia" class="col-sm-2 col-form-label">
                        Status Ketersediaan
                    </label>

                    <div class="col-sm-10">
                        <select name="tersedia" id="tersedia" class="form-control" required>

                            <option value="">-- Pilih Status --</option>
                            <option value="Y">Tersedia</option>
                            <option value="T">Tidak Tersedia</option>

                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
