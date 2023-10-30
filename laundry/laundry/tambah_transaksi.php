<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
    <div class = "container">
    <center><h3>Tambah Transaksi</h3></center>   
    <br>

    <form action="proses_tambah_transaksi.php" method="post">
        Id Member :
        <select name="id_member" class="form-control">
        <option></option>

        <?php 
        include "koneksi.php";
        $qry_member=mysqli_query($conn,"select * from member");
        while($data_member=mysqli_fetch_array($qry_member)){
            echo '<option value="'.$data_member['id_member'].'">'.$data_member['id_member'].'</option>';   
        }
        ?>
        </select>

        Tanggal :
        <input type="date" name="tgl" value="" class="form-control">
        <br>

        Batas Waktu :
        <input type="date" name="batas_waktu" value="" class="form-control">
        <br>

        Tanggal Pembayaran :
        <input type="date" name="tgl_bayar" value="" class="form-control">
        <br>

        Status :
        <select name="status" class="form-control" id="">
            <option value="Baru">Baru</option>
            <option value="Proses">Proses</option>
            <option value="Selesai">Selesai</option>
            <option value="Diambil">Diambil</option>
        </select>
        <br>

        Dibayar :     
        <select name="dibayar" class="form-control" id="">
            <option value="Dibayar">Dibayar</option>
            <option value="Belum Dibayar">Belum Dibayar</option>
        </select>
        <br>

        Id User :
        <select name="id_user" class="form-control">
        <option></option>

        <?php 
        include "koneksi.php";
        $qry_user=mysqli_query($conn,"select * from user");
        while($data_user=mysqli_fetch_array($qry_user)){
            echo '<option value="'.$data_user['id_user'].'">'.$data_user['id_user'].'</option>';   
        }
        ?>
        </select>
        <br> 

        <input type="submit" name="simpan" value="Tambah Transaksi" class="btn btn-primary">
        <br>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>