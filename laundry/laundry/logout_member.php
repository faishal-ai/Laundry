<?php
session_start();
unset($_SESSION['id_member']);
unset($_SESSION['nama']);
$_SESSION['status_login']=false;
session_destroy();
?>