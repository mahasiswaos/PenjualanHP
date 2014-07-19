@extends('layout.bootstrapadmin.index')

@section('content')
<div class="container"> 
<div class="col-sm-5m-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-circle-arrow-right"></i> Tambah Model Hp </div> 
        <div class="panel-body">
            <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?php echo URL::to("/Hp/addproses"); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Hp</label>
                    <div class="col-sm-3">
                        <input type="text" name="id" class="form-control " placeholder="Kode Hp">
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label   class="col-sm-3 control-label">Merk Hp</label>
                    <div class="col-sm-4">
                        <input type="text" name="merk" class="form-control " placeholder="Merek Hp">
                        <p style="color: red"> {{ $errors->first('merek_hp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Type Hp</label>
                    <div class="col-sm-3">
                        <input type="text" name="type" class="form-control " placeholder="">
                        <p style="color: red"> {{ $errors->first('type_hp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Jenis Hp</label>
                    <div class="col-sm-5">
                        <textarea type="text" name="jenis" class="form-control " placeholder="Jenis Hp"></textarea>
                        <p style="color: red"> {{ $errors->first('jenis_hp') }} </p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label  class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="text" name="harga" class="form-control" placeholder="Harga">
                        <p style="color: red"> {{ $errors->first('harga') }} </p>
                    </div>
                    </div>
                
                
                 <div class="form-group">
                    <label  class="col-sm-3 control-label">Stock</label>
                    <div class="col-sm-5">
                        <input type="text" name="stok" class="form-control" placeholder="stok">
                        <p style="color: red"> {{ $errors->first('stok') }} </p>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-link"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop