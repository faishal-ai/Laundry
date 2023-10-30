<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
    <div class = "container">
    <center><h3>Tambah Paket</h3></center>  
    <br>

    <form action="proses_tambah_paket.php" method="post">

        Jenis Laundry:
        <select name="jenis" class="form-control" id="">
            <option value="Kiloan">Kiloan</option>
            <option value="Selimut">Selimut</option>
            <option value="Bed Cover">Bed Cover</option>
            <option value="Kaos">Kaos</option>
        </select>
        <br>

        Harga :
        <input type="number" name="harga" value="" class="form-control">
        <br>

        <input type="submit" name="simpan" value="Tambah Paket" class="btn btn-primary">
        <br>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>