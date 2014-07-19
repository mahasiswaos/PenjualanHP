@extends('layout.bootstrapadmin.index')
@section('content')

<table class="table"> 
    <thead>
        <th>Kode Hp</th>
        <th>Merk Hp </th>
        <th>Type Hp </th>
        <th>Jenis Hp </th>
        <th>Harga </th>
        <th>Stock </th>
        
</thead>
    
    
    <tbody>
        
        <?php foreach ($data as $kolom) {?>
        
        <tr>
            <td><?php echo $kolom-> id ?></td> 
            <td><?php echo $kolom-> merek_hp   ?></td> 
            <td><?php echo $kolom-> tipe_hp  ?></td> 
            <td><?php echo $kolom-> jenis_hp ?></td> 
            <td><?php echo $kolom-> harga  ?></td> 
            <td><?php echo $kolom-> stok  ?></td> 
            <td>
    <a href=" <?php echo URL::to ('/Hp/edit/'. $kolom->id)?> "><button class="btn btn-default-info">
            <i class="glyphicon glyphicon-pencil">Edit</i></button></a>
    
    <a href=" <?php echo URL::to ('/Hp/delete/'. $kolom->id)?> "><button class="btn btn-danger">
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

}
