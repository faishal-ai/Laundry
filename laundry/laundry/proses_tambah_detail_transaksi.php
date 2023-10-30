<?php

if($_POST){

    $id_detail_transaksi=$_POST['id_detail_transaksi'];
    $id_transaksi=$_POST['id_transaksi'];
    $id_paket=$_POST['id_paket'];
    $qty=$_POST['qty'];

    if(empty($qty)){
        echo "<script>alert('qty tidak boleh kosong');location.href='tambah_detail_transaksi.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into detail_transaksi (id_detail_transaksi, id_transaksi, id_paket, qty) value ('".$id_detail_transaksi."','".$id_transaksi."','".$id_paket."','".$qty."')");
            if($insert){
            echo "<script>alert('Sukses menambahkan detail transaksi');location.href='tambah_detail_transaksi.php';</script>";
            } else {
            echo "<script>alert('Gagal menambahkan detail transaksi');location.href='tambah_detail_transaksi.php';</script>";
            }
    }
}
    ?>