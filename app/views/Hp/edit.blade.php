@extends('layout.bootstrapadmin.index')

@section('content')
<div class="container"> 
<div class="col-sm-5m-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-circle-arrow-right"></i> Edit Hp </div> 
        <div class="panel-body">
            <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?php echo URL::to("/Hp/edit/proses/". $tblhp->id); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Hp</label>
                    <div class="col-sm-3">
                        <input type="text" name="id" value ="<?php echo $tblhp->id  ?>" class="form-control " placeholder="Kode Hp">
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label   class="col-sm-3 control-label">Merek</label>
                    <div class="col-sm-4">
                        <input type="text" name="merk"  value="<?php echo $tblhp->merek_hp ?>  "class="form-control " placeholder="Merek Hp">
                        <p style="color: red"> {{ $errors->first('merek') }} </p>
                    </div>
                    </div>
                <div class="form-group">
                    <label   class="col-sm-3 control-label">Type</label>
                    <div class="col-sm-4">
                        <input type="text" name="type"  value="<?php echo $tblhp->tipe_hp ?>  "class="form-control " placeholder="Type Hp">
                        <p style="color: red"> {{ $errors->first('type') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Jenis</label>
                    <div class="col-sm-3">
                        <input type="text" name="jenis" value="<?php echo $tblhp->jenis_hp ?>" class="form-control " placeholder="Jenis Hp">
                        <p style="color: red"> {{ $errors->first('jenis hp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Harga</label>
                    <div class="col-sm-5">
                        <input type="text" name="harga"  value="<?php echo $tblhp->harga ?>"class="form-control " placeholder="Harga">
                        <p style="color: red"> {{ $errors->first('harga') }} </p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label  class="col-sm-3 control-label">Stok</label>
                    <div class="col-sm-5">
                        <input type="text" name="stok" value="<?php echo $tblhp->stok ?>" class="form-control" placeholder="Stok">
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