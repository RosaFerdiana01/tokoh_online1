@extends("layouts.app")

@section("content")

    {{-- Menampilkan Error Validasi --}}
    <br>
    <justify><h3>Transaksi Penjualan</h3></justify>

    @if (count($errors) > 0)
    <br>
    <div class="alert alert-danger">
        <ul>
            @foreach  ($errors -> all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    
    <br>
    

    @else

    <justify>
    <br>Nama Pembeli :{{$nama}} <br>
    <br>Tanggal Transaksi :{{$tgl=date('d M Y')}} <br>
    <br>Kode sayur :{{$kode}} <br>
    <br>Nama sayur :{{$namasayur}} <br>
    <br>Harga : Rp.{{$harga}} <br>
    <br>Jumlah Beli :{{$jumlah}} pcs <br>
    <br>Total : Rp.{{$total}} <br>
    <br>Diskon : Rp. {{$jumlahdiskon > 0 ? "$diskon% = " : ''}} {{$total}} <br>
    <br>PPN : 10% = Rp. {{$ppn}} <br>
    <br>Total Bayar : Rp.{{$grandtotal}} <br>
    </justify>

    @endif
    
@stop