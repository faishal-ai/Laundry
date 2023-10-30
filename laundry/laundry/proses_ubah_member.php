<?php

if($_POST){
    $id_member=$_POST['id_member'];
    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)) {
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($alamat)){
        echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($telp)){
        echo "<script>alert('telp tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_member.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_member.php';</script>";

    } else {

        include "koneksi.php";

            if(empty($alamat)){
            $update=mysqli_query($conn,"update member set nama='".$nama."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', username='".$username."', password='".$password."', id_member='".$id_member."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";

            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";

            }

            } else {
            $update=mysqli_query($conn,"update member set nama='".$nama."', alamat='".$alamat."', jenis_kelamin='".$jenis_kelamin."', telp='".$telp."', username='".$username."', password='".$password."', id_member='".$id_member."' where id_member = '".$id_member."' ") or die(mysqli_error($conn));

            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_member.php';</script>";

            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_member.php?id_member=".$id_member."';</script>";

            }
        }
    }
}
?>