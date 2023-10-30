<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
    <div class = "container">
    <center><h3>Tambah Detail Transaksi</h3></center>
    <br>

    <form action="proses_tambah_detail_transaksi.php" method="post">
        Id Transaksi :
        <select name="id_transaksi" class="form-control">
        <option></option>

        <?php 
        include "koneksi.php";
        $qry_transaksi=mysqli_query($conn,"select * from transaksi");
        while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
            echo '<option value="'.$data_transaksi['id_transaksi'].'">'.$data_transaksi['id_transaksi'].'</option>';   
        }
        ?>
        </select>
        <br>

        Id Paket :
        <select name="id_paket" class="form-control">
        <option></option>

        <?php 
        include "koneksi.php";
        $qry_paket=mysqli_query($conn,"select * from paket");
        while($data_paket=mysqli_fetch_array($qry_paket)){
            echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['id_paket'].'</option>';   
        }
        ?>
        </select>
        <br>

        Quantity :
        <input type="text" name="qty" value="" class="form-control">
        <br>
        
        <input type="submit" name="simpan" value="Tambah Detail Transaksi" class="btn btn-primary">
        <br>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>