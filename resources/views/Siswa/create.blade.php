@extends('layout.layout')
@section('konten')
    <form action='{{ url('Siswa') }}' method='post'>
        @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="Nis" class="col-sm-2 col-form-label">Nis</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name='Nis' id="Nis">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='Angkatan' id="Angkatan">
                </div>
            </div>
            <div class="my-3 p-3 bg-body rounded shadow-sm">
                <div class="mb-3 row">
                    <label for="Wa" class="col-sm-2 col-form-label">No Wa</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name='Wa' id="Wa">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jurusan" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10"><button type="submit" class="btn btn-    primary" name="submit">SIMPAN</button>
                    </div>
                </div>
            </div>
    </form>
@endsection
