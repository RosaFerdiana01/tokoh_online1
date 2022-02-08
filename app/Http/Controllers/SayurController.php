<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayurController extends Controller
{
    //Membuat Method Index
    public function index() {
        return view("sayur.index");
}

    private $items = [
     [
        'kodesayur' => 'B001',
        'namasayur' => 'Sawi',
        'hargasayur' => 20000,
        'stok' => 100,
        'diskon' => 0.1,
        'max' => 30
    ],
    [
        'kodesayur' => 'B002',
        'namasayur' => 'Bayam',
        'hargasayur' => 15000,
        'stok' => 100,
        'diskon' => 0.075,
        'max' => 20
    ],
    [
        'kodesayur' => 'B003',
        'namasayur' => 'Pare',
        'hargasayur' => 30000,
        'stok' => 100,
        'diskon' => 0.05,
        'max' => 20
    ],
    [
        'kodesayur' => 'B004',
        'namasayur' => 'Brokoli',
        'hargasayur' => 25000,
        'stok' => 100,
        'diskon' => 0.05,
        'max' => 35
    ],
    [
        'kodesayur' => 'B005',
        'namasayur' => 'Kangkung',
        'hargasayur' => 15000,
        'stok' => 100,
        'diskon' => 0.075,
        'max' => 30
    ],
    ];

    //Membuat Method Data
        public function data() {
            return view("sayur.data", ['data' => $this->items ]);
        }

    //Membuat Method Add
        public function add() {
        return view("sayur.add");
        }

    //Membuat Method addProcess
        public function addProcess(Request $request)
        {
            $nama = $request ->nama;
            $kode = $request ->kode;
            $jumlah = $request ->jumlah;
            $check = false;

            foreach ($this->items as $item) {
                if ($kode == $item['kodesayur']) {
                    $harga = $item['hargasayur'];
                    $namasayur = $item['namasayur'];
                    $stok = $item['stok'];
                    $diskon = $item['diskon'];
                    $max = $item['max'];
                    $check = true; 
                }
            }

    if ($check == false) {
        return view('sayur.show') ->withErrors("Kode sayur $kode Tidak Terdaftar");
        } else {
             if ($jumlah > $stok) {
                return view('sayur.show') ->withErrors("Data tidak dapat diproses, Stok Barang $kode hanya tinggal $stok");
            } else {
                $total = (int)$jumlah * (int)$harga;
                $ppn = $total * 0.1;
                if ($jumlah >= $max) {
                    $jumlahdiskon = $diskon * $total;
            } else {
                    $checkdiskon = true;
                    $jumlahdiskon = 0;
                        }
                $grandtotal = $total + $ppn - $jumlahdiskon;
                    return view('sayur.show', 
                [
                    'nama'=>$nama,
                    'kode'=>$kode,
                    'jumlah'=>$jumlah,
                    'harga'=>$harga,
                    'namabsayur'=>$namasayur,
                    'total'=>$total,
                    'ppn'=>$ppn,
                    'jumlahdiskon'=>$jumlahdiskon,
                    'grandtotal'=>$grandtotal,
                    'dikson'=>$diskon*100
                ]);
            }
                
        }       
    }
}