@extends('layout.bootstrapadmin.index')

@section('content')
<div class="container"> 
<div class="col-sm-5m-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-circle-arrow-right"></i> Edit Transaksi</div> 
        <div class="panel-body">
            <form class="form-horizontal"  enctype="multipart/form-data" method="POST" action="<?php echo URL::to("/transaksi/edit/proses/".$tbltransaksi->id); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">KODE TRANSAKSI</label>
                    <div class="col-sm-3">
                        <input type="text" name="id" class="form-control" value="<?php echo $tbltransaksi->id ?>"  placeholder="KODE TRANSAKSI">
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label   class="col-sm-3 control-label">KODE HP</label>
                    <div class="col-sm-4">
                        <input type="text" name="kode_hp" class="form-control" value="<?php echo $tbltransaksi->kode_hp ?>" placeholder="KODE HP">
                        <p style="color: red"> {{ $errors->first('kode_hp') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">KODE PEMBELI</label>
                    <div class="col-sm-3">
                        <input type="text" name="kode_pembeli" class="form-control " value="<?php echo $tbltransaksi->kode_pembeli ?>" placeholder="KODE PEMBELI">
                        <p style="color: red"> {{ $errors->first('kode_pembeli') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">BAYAR</label>
                    <div class="col-sm-5">
                        <input type="text" name="bayar" class="form-control " value="<?php echo $tbltransaksi->bayar ?>"placeholder="BAYAR">
                        
                        <p style="color: red"> {{ $errors->first('bayar') }} </p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label  class="col-sm-3 control-label">TOTAL BAYAR</label>
                    <div class="col-sm-5">
                        <input type="text" name="totalbayar" class="form-control" value="<?php echo $tbltransaksi->totalbayar ?>"placeholder="TOTAL BAYAR">
                        <p style="color: red"> {{ $errors->first('totalbayar') }} </p>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                        <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-floppy-save"></i> Simpan Data </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@stop