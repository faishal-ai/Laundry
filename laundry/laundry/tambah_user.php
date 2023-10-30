<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
    <div class = "container">
    <center><h3>Tambah User</h3></center>  
    <br>

    <form action="proses_tambah_user.php" method="post">

        Nama User :
        <input type="text" name="nama" value="" class="form-control">
        <br>

        Username :
        <input type="text" name="username" value="" class="form-control">
        <br>

        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>

        Role :
        <select name="role" class="form-control" id="">
            <option value="Admin">Admin</option>
            <option value="Kasir">Kasir</option>
        </select>
        <br>

        <input type="submit" name="simpan" value="Tambah User" class="btn btn-primary">
        <br>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>