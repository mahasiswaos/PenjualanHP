@extends('layout.bootstrapadmin.index')
@section('content')

<table class="table"> 
    <thead>
        <th>KODE TRANSAKSI </th>
        <th>KODE HP</th>
        <th>KODE PEMBELI </th>
        <th>BAYAR </th>
        <th>TOTAL BAYAR </th>
        <th>PROSES </th>
        
</thead>
    
    
    <tbody>
        
        <?php foreach ($data as $kolom) {?>
        
        <tr>
            <td><?php echo $kolom-> id ?></td> 
            <td><?php echo $kolom-> kode_hp   ?></td> 
            <td><?php echo $kolom-> kode_pembeli  ?></td> 
            <td><?php echo $kolom-> bayar  ?></td> 
            <td><?php echo $kolom-> totalbayar  ?></td> 
            <td>
    <a href=" <?php echo URL::to ('/transaksi/edit/'. $kolom->id)?> "><button class="btn btn-info">
            <i class="glyphicon glyphicon-pencil">Edit</i></button></a>
    
    <a href=" <?php echo URL::to ('/transaksi/delete/'. $kolom->id)?> "><button class="btn btn-danger">
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


