<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ubah Member</title>

</head>

<body>

<?php 

include "koneksi.php";

$qry_get_member=mysqli_query($conn,"select * from member where id_member = '".$_GET['id_member']."'");

$dt_member=mysqli_fetch_array($qry_get_member);

?>
<div class="container">
    <center><h3>Ubah Member</h3></center>

    <form action="proses_ubah_member.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="id_member" value="<?=$dt_member['id_member']?>">

        Nama Member :
        <input type="text" name="nama" value="<?=$dt_member['nama']?>" class="form-control">
        <br>

        Alamat :
        <textarea name="alamat" rows="4" value="<?=$dt_member['alamat']?>" class="form-control"></textarea>
        <br>

        Jenis Kelamin :
        <select name="jenis_kelamin" value="<?=$dt_member['jenis_kelamin']?>" class="form-control" id="">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>

        Telp :
        <input type="number" name="telp" value="<?=$dt_member['telp']?>" class="form-control">
        <br>

        Username :
        <input type="text" name="username" value="<?=$dt_member['username']?>" class="form-control">
        <br>

        Password :
        <input type="password" name="password" value="<?=$dt_member['password']?>" class="form-control">
        <br>

        <input type="submit" name="simpan" value="Ubah Member" class="btn btn-primary">
        </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>