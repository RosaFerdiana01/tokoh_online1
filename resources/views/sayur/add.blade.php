@extends("layouts.app")

@section("content")

    <br>

    {{-- Menampilkan Error Validasi --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach  ($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <br>

    <form method="POST" action="/barang/addProcess">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama pembeli</label>
            <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Input Nama Pembeli" required>
        </div>

        <div class="form-group">
            <label for="kode">kode sayur</label>
            <input type="text" class="form-control" name="kode" value="{{old('kodebarang')}}" placeholder="Input Kode Barang" required>
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" class="form-control" name="jumlah" value="{{old('jumlah')}}" placeholder="Jumlah Barang Beli" required>
        </div>

        <div class="form-group gap-2 d-md-flex justify-content-md-end" >
            <button type="submit" class="btn btn-success">simpan</button>
        </div>
@stop