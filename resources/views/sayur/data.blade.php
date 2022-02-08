@extends("layouts.app")

@section("content")

    <br>
    
    <div class="d-grid gap-2 col-2 mx-auto">
        
    </div>
  
    <br>

    <table class="table">
        <thead>
        <tr>
            <th class="table-dark" scope="col">No</th>
            <th class="table-dark" scope="col">kode sayur</th>
            <th class="table-dark" scope="col">nama sayur</th>
            <th class="table-dark" scope="col">harga sayur</th>
            <th class="table-dark" scope="col">stok</th>
        </tr>
        <button class="btn btn-success" type="button">Tambah Transaksi</button>
        </thead>
        <tbody>
            @php
            $i=1;    
            @endphp

            @foreach ($data as $data)
        
        <tr class="text-justify">
            <th>{{$i}}</th>
            <td>{{$data ["kodesayur"]}}</td>
            <td>{{$data ["namasayur"]}}</td>
            <td>Rp. {{$data ["hargasayur"]}}</td>
            <td>{{$data ["stok"]}}</td>
        </tr>
            @php $i++; @endphp
            @endforeach
        </tbody>
    </table>
@stop