@extends('template2')
@section('judul_halaman', 'Kode Soal Tagihan')
@section('konten')
    <h2>Input Tagihan Baru</h2>

        <form action="/eas/store" method="POST" onsubmit="return validationForm()">
                <div class="row mb-3">
                    <label for="NoMeteran" class="col-sm-2 col-form-label">No Meteran</label>
                    <div class="col-sm-10">
                        <input type="text" name="NoMeteran" id="NoMeteran" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAwal" class="col-sm-2 col-form-label">Meter Awal</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAwal" id="MeterAwal" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="MeterAkhir" class="col-sm-2 col-form-label">Meter Akhir</label>
                    <div class="col-sm-10">
                        <input type="text" name="MeterAkhir" id="MeterAkhir" class="form-control" required>
                    </div>
                </div>

                <div id="errorMsg" class="text-danger mb-3"></div>

                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>

            <script>
                function validasiForm() {
                    const meterAwal = document.getElementById('MeterAwal').value;
                    const meterAkhir = document.getElementById('MeterAkhir').value;
                    const errorMsg = document.getElementById('errorMsg');

                    errorMsg.innerHTML = '';

                    if (isNaN(meterAwal) || meterAwal.trim() === '') {
                        errorMsg.innerHTML = 'Meter Awal harus berupa angka!';
                        return false;
                    }
                    if (isNaN(meterAkhir) || meterAkhir.trim() === ''){
                        errorMsg.innerHTML = 'Meter Akhir harus berupa angka';
                        return false;
                    }
                    if (parseInt(meterAkhir) <= parseInt(meterAwal) + 20) {
                        errorMsg.innerHTML = 'Meter Akhir harus lebih besar dari Meter Awal + 20!';
                        return false;
                    }
                    return true;
        }
    </script>
@endsection
