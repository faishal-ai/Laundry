<?php 

    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login_user.php';</script>";

        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login_user.php';</script>";

        } else {
            include "koneksi.php";
            $qry_login=mysqli_query($conn,"select * from user where username = '".$username."' and password = '".$password."'");

            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_user']=$dt_login['id_user'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['status_login']=true;

            } else {
                echo "<script>alert('Username dan Password tidak benar');location.href='login_user.php';</script>";

            }
        }
    }
?>