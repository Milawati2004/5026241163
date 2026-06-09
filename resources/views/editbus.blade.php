@extends('template2')
@section('judul_halaman', 'Edit Bus')
@section('konten')
<a href="/bus" class="btn btn-secondary mb-4">Kembali</a>

@foreach($bus as $b)
<div class="card">
    <div class="card-header">
        Form Edit Data Bus
    </div>

    <div class="card-body">
        <form action="/bus/update" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="kodebus" value="{{ $b->kodebus }}">

            <div class="row mb-3">
                <label for="merkbus" class="col-sm-2 col-form-label">Merk Bus</label>
                <div class="col-sm-10">
                    <input
                        type="text"
                        name="merkbus"
                        id="merkbus"
                        maxlength="30"
                        class="form-control"
                        required
                        value="{{ $b->merkbus }}"
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label for="jumlahbus" class="col-sm-2 col-form-label">Jumlah Bus</label>
                <div class="col-sm-10">
                    <input
                        type="number"
                        name="jumlahbus"
                        id="jumlahbus"
                        min="0"
                        class="form-control"
                        required
                        value="{{ $b->jumlahbus }}"
                    >
                </div>
            </div>

            <div class="row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <select name="tersedia" id="tersedia" class="form-control">
                        <option value="Y" {{ $b->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                        <option value="T" {{ $b->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
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
@endforeach
@endsection
