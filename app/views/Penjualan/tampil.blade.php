@extends('layout.bootstrapadmin.index')
@section('content')

<table class="table"> 
    <thead>
        <th>Kode Pembeli </th>
        <th>Nama </th>
        <th>Jenis Kelamin </th>
        <th>Alamat </th>
        <th>Telphone </th>
        <th>Proses </th>
        
</thead>
    
    
    <tbody>
        
        <?php foreach ($data as $kolom) {?>
        
        <tr>
            <td><?php echo $kolom-> id ?></td> 
            <td><?php echo $kolom-> nama   ?></td> 
            <td><?php echo $kolom-> jeniskelamin  ?></td> 
            <td><?php echo $kolom-> alamat  ?></td> 
            <td><?php echo $kolom-> telpon  ?></td> 
            <td>
    <a href=" <?php echo URL::to ('/pembeli/edit/'. $kolom->id)?> "><button class="btn btn-default-info">
            <i class="glyphicon glyphicon-pencil">Edit</i></button></a>
    
    <a href=" <?php echo URL::to ('/pembeli/delete/'. $kolom->id)?> "><button class="btn btn-danger">
            <i class="glyphicon glyphicon-trash">Hapus</i></button></a>
            </td>
            
            
</tr>
        
        <?php }?>
        
        
        
    </tbody>        
        
        
    
    
    
    
    
    
    
    
    
</table>


@stop

<?php
//echo "<pre>";
//print_r($data[0]['kode_pembeli']);
//print_r ($data[0]['nama']);
//print_r ($data[0]['jeniskelamin']);
//print_r ($data[0]['alamat']);
//echo "</pre>";
//
//?>


