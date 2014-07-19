@extends('layout.bootstrapadmin.index')

@section('content')
<div class="container"> 
<div class="col-sm-5m-8">
    <div class="panel panel-info">
        <div class="panel-heading"><i class="glyphicon glyphicon-circle-arrow-right"></i> Tambah Pembeli </div> 
        <div class="panel-body">
            <form class="form-horizontal"  enctype="multipart/form-tblpembeli" method="POST" action="<?php echo URL::to("/pembeli/edit/proses/". $suma->id); ?>">
                <div class="form-group">
                    <label class="col-sm-3 control-label">Kode Pembeli</label>
                    <div class="col-sm-3">
                        <input type="text" name="id" value ="<?php echo $suma->id  ?>" class="form-control " placeholder="Kode Pembeli">
                        <p style="color: red"> {{ $errors->first('id') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label   class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-4">
                        <input type="text" name="nama"  value="<?php echo $suma->nama ?>  "class="form-control " placeholder="NAMA">
                        <p style="color: red"> {{ $errors->first('nama') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-3">
                        <input type="text" name="jeniskelamin" value="<?php echo $suma->jeniskelamin ?>" class="form-control " placeholder="LAKI-LAKI / PEREMPUAN">
                        <p style="color: red"> {{ $errors->first('jeniskelamin') }} </p>
                    </div>
                </div>
                <div class="form-group">
                    <label  class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-5">
                        <textarea type="text" name="alamat"  value="<?php echo $suma ->alamat ?>"class="form-control " placeholder="Alamat"></textarea>
                        <p style="color: red"> {{ $errors->first('alamat') }} </p>
                    </div>
                </div>
                
                 <div class="form-group">
                    <label  class="col-sm-3 control-label">No Telphone</label>
                    <div class="col-sm-5">
                        <input type="text" name="notelp" value="<?php $suma-> notelp?>" class="form-control" placeholder="No Telp">
                        <p style="color: red"> {{ $errors->first('notelp') }} </p>
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