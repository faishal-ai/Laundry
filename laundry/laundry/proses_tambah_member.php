<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $telp=$_POST['telp'];
    $username=$_POST['username'];
    $password=$_POST['password'];

    if(empty($nama)){
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
        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, telp, username, password) value ('".$nama."','".$alamat."','".$jenis_kelamin."','".$telp."','".$username."','".$password."')");
            if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tambah_member.php';</script>";
            } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
            }
    }
}
    ?>