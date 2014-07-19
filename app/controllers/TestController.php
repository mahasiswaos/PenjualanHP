<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Test;
use View;

class TestController extends BaseController {
    public function view () {
        $t= Test::find(1);
        
        echo"<pre>";
        print_r($t);
        echo "</pre>";
        
    }
    public function add() {
        $t=new Test();
        $t->id= 2;
        $t->nama ="Test dari Controller";
        $t->tanggal_lahir=date();
        $t->save();        
    }
    public function addproses() {
    }
    public function edit($id) {
        $t=Test::find($id);
        $t->nama='Hasil Editan';
        $t->update();
    }
    public function editProses() {
    }
    public function delete($id) {
        $t=Test::find($id);
        $t->delete($id);
               
    }
    




        
}
