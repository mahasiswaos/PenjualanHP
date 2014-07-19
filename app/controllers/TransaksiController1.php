<?php

namespace App\Controllers;

use App\Models\Transaksi;
use View;
use Validator;
use Redirect;
use Input;

class TransaksiController1 extends BaseController {

    public function tampil() {
        $Transaksi = Transaksi::all();
        $data = array(
            'data' => $Transaksi,
        );
        return View:: make('transaksi.tampil', $data);
    }

    public function tambah() {

        return View::make('transaksi.tambah');
    }

    public function simpanProses() {
        $aturan = ['id' => 'Required',
            'kode_hp' => 'Required',
            'kode_pembeli' => 'Required',
            'bayar' => 'Required',
            'totalbayar' => 'Required',
        ];

        $validasi = Validator::make(Input::all(), $aturan);

        if ($validasi->fails()) {
            return Redirect:: to('/transaksi/add')->withErrors($validasi);
        } else {
            $input = Input::all();
            $kolom = new Transaksi();

            $kolom->id = $input ['id'];
            $kolom->kode_hp = $input ['kode_hp'];
            $kolom->kode_pembeli = $input ['kode_pembeli'];
            $kolom->bayar = $input ['bayar'];
            $kolom->totalbayar = $input ['totalbayar'];
            $kolom->save();

            return Redirect:: to('/transaksi');
        }
    }

    function edit($id) {


        $t = transaksi::find($id);
        $data = array(
            'tbltransaksi' => $t,
        );
        return view::make('transaksi.edit', $data);
    }

    function proses($id) {
        $aturan = ['id' => 'Required',
            'kode_hp' => 'Required',
            'kode_pembeli' => 'Required',
            'bayar' => 'Required',
            'totalbayar' => 'Required',
        ];

        $validasi = Validator::make(Input::all(), $aturan);

        if ($validasi->fails()) {
            return Redirect:: to('/transaksi/edit' . $id)->withErrors($validasi);
        } else {
            $input = Input::all();
            $kolom = transaksi::find($id);

            $kolom->id = $input ['id'];
            $kolom->kode_hp = $input ['kode_hp'];
            $kolom->kode_pembeli = $input ['kode_pembeli'];
            $kolom->bayar = $input ['bayar'];
            $kolom->totalbayar = $input ['totalbayar'];
            $kolom->save();
            return Redirect:: to('/transaksi');
        }
    }

    public function Hapus($id) {


        $t = Transaksi::find($id);
        $t->delete();
        return Redirect::to('/transaksi');
    }

}
