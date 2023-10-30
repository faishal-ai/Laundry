<?php

if($_POST){

    $id_transaksi=$_POST['id_transaksi'];
    $id_member=$_POST['id_member'];
    $tgl=$_POST['tgl'];
    $batas_waktu=$_POST['batas_waktu'];
    $tgl_bayar=$_POST['tgl_bayar'];
    $status=$_POST['status'];
    $dibayar=$_POST['dibayar'];
    $id_user=$_POST['id_user'];

    if(empty($tgl)){
        echo "<script>alert('tanggal tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($batas_waktu)){
        echo "<script>alert('batas waktu tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } elseif(empty($tgl_bayar)){
        echo "<script>alert('tanggal pembayaran tidak boleh kosong');location.href='tambah_transaksi.php';</script>";

    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into transaksi (id_transaksi, id_member, tgl, batas_waktu, tgl_bayar, status, dibayar, id_user) value ('".$id_transaksi."','".$id_member."','".$tgl."','".$batas_waktu."','".$tgl_bayar."','".$status."','".$dibayar."','".$id_user."')");
            if($insert){
            echo "<script>alert('Sukses melakukan transaksi');location.href='tambah_transaksi.php';</script>";
            } else {
            echo "<script>alert('Gagal melakukan transaksi');location.href='tambah_transaksi.php';</script>";
            }
    }
}
    ?>