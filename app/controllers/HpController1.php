<?php

namespace App\Controllers;

use App\Models\Hp;
use View;
use Validator;
use Redirect;
use Input;

class HpController1 extends BaseController {

    public function tampil() {
        $hp = Hp::all();
        $data = array(
            'data' => $hp,
        );
        return view::make('Hp.tampil', $data);
    }

    function tambah() {
        return View::make('Hp.tambah');
    }

    public function addproses() {

        $aturan = ['id' => 'Required',
            'merk' => 'Required',
            'type' => 'Required',
            'jenis' => 'Required',
            'harga' => 'Required',
            'stok' => 'Required',
        ];

        $input = Input::all();
        $kolom = new Hp();

        $kolom->id = $input ['id'];
        $kolom->merek_hp = $input ['merk'];
        $kolom->tipe_hp = $input ['type'];
        $kolom->jenis_hp = $input ['jenis'];
        $kolom->harga = $input ['harga'];
        $kolom->stok = $input ['stok'];
        $kolom->save();

        return Redirect:: to('/Hp');
    }

    function edit($id) {


        $t = Hp::find($id);
        $data = array(
            'tblhp' => $t,
        );
        return view::make('Hp.edit', $data);
    }

    function proses($id) {

        $aturan = ['id' => 'Required',
            'merk' => 'Required',
            'type' => 'Required',
            'jenis' => 'Required',
            'harga' => 'Required',
            'stok' => 'Required',
        ];
        $validasi = Validator::make(Input::all(), $aturan);
        if ($validasi->fails()) {
            return Redirect:: to('/Hp/edit/' . $id)->withErrors($aturan);
        } else {

            $input = Input::all();
            $kolom = Hp::find($id);

            $kolom->id = $input ['id'];
            $kolom->merek_hp = $input ['merk'];
            $kolom->tipe_hp = $input ['type'];
            $kolom->jenis_hp = $input ['jenis'];
            $kolom->harga = $input ['harga'];
            $kolom->stok = $input ['stok'];
            $kolom->save();
            return Redirect:: to('/Hp');
        }
    }

    public function delete($id) {


        $t = Hp::find($id);
        $t->delete();
        return Redirect::to('/Hp');
    }

}
