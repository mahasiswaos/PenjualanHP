<?php
namespace App\Controllers;
use App\Models\Pembeli;

use View;
use Validator;
use Redirect;
use Input;

class PembeliController1 extends BaseController {
    
    public function tampil() {
      $pmbli= Pembeli::all();
      $data=  array(
          
          'data'=> $pmbli,
      );
     return View:: make('Penjualan.tampil',$data); 
     }
    public function tambah() {
        
        return View::make('Penjualan.tambah');
      
     }
     public function simpan() {
         $aturan=['id'=>'Required',
                 'nama' =>'Required', 
                 'jeniskelamin'=>'Required',  
                 'alamat'=>'Required',  
                 'notelp'=>'Required',  
             ];
         
         $validasi= Validator::make(Input::all(),$aturan );
         
         if ($validasi->fails()){
             return Redirect:: to ('/pembeli/add')->withErrors($validasi);
             
         } else {
             $input = Input::all();
             $kolom= new Pembeli();
             
             $kolom->id=$input ['id'];
             $kolom->nama=$input ['nama'];
             $kolom->jeniskelamin=$input ['jeniskelamin'];
             $kolom->alamat=$input ['alamat'];
             $kolom->telpon=$input ['notelp'];
             $kolom->save();
             
             return Redirect:: to ('/pembeli');
     }}
             
             
             

            function edit($id) {
                 
                 
                 $t= Pembeli::find($id);
                 $data=array(
                     'tblpembeli'=>$t,
                     
                 );
                 return view::make('Penjualan.edit', $data);
            }
                 
             function editProses(){
                 
              
                
              $input=input::all();
               $t=Pembeli::find($input['id']);
                $aturan=['id'=>'Required',
                 'nama' =>'Required', 
                 'jeniskelamin'=>'Required',  
                 'alamat'=>'Required',  
                 'notelp'=>'Required',  
             ];
         
         $validasi= Validator::make(Input::all(),$aturan );
         
         if ($validasi->fails()){
             return Redirect:: to ('/pembeli/edit')->withErrors($validasi);
             
         } else {
             $input = Input::all();
             $kolom= new Pembeli();
             
             $kolom=Pembeli::find($input['id']);
             $kolom->nama=$input ['nama'];
             $kolom->jeniskelamin=$input ['jeniskelamin'];
             $kolom->alamat=$input ['alamat'];
             $kolom->telpon=$input ['notelp'];
             $kolom->update();
             
             return Redirect:: to ('/pembeli');
                    
             }
                        
             
                 
             }
             
             public function Hapus($id) {
                 
                 
                $t=Pembeli::find($id);
                $t->delete();
                return Redirect::to('/pembeli');
                        
                 
                         
             }
}
  
     
   
