<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Ubah Paket</title>

</head>

<body>

<?php 

include "koneksi.php";

$qry_get_paket=mysqli_query($conn,"select * from paket where id_paket = '".$_GET['id_paket']."'");

$dt_paket=mysqli_fetch_array($qry_get_paket);

?>
<div class="container">
    <center><h3>Ubah Paket</h3></center>

    <form action="proses_ubah_paket.php" method="post" enctype="multipart/form-data">
        
        <input type="hidden" name="id_paket" value="<?=$dt_paket['id_paket']?>">

        Jenis Laundry :
        <select name="jenis" value="<?=$dt_paket['jenis']?>" class="form-control" id="">
            <option value="Kiloan">Kiloan</option>
            <option value="Selimut">Selimut</option>
            <option value="Bed Cover">Bed Cover</option>
            <option value="Kaos">Kaos</option>
        </select>
        <br>

        Harga:
        <input type="number" name="harga" value="<?=$dt_paket['harga']?>" class="form-control">
        <br>

        <input type="submit" name="simpan" value="Ubah Paket" class="btn btn-primary">
        </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
</body>

</html>