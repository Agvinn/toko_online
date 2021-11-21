<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        if(empty($username)){
            echo "<script>allert('username tidak boleh kosong'):location.href='index.php':</script>";
        }elseif(empty($password)){
            echo "<script>allert('password tidak boleh kosong'):location.href='index.php':</script>"; 
        }else{
          include "koneksi.php";
          $sqry_login=mysqli_query($conn, "select *from admin where username = '".$username."' and  password = '".$password."'");
        if(mysqli_num_rows($sqry_login)>0){
            $dt_login=mysqli_fetch_array($sqry_login);
            session_start();
            $_SESSION['username']=$dt_login['username'];
            $_SESSION['password']=$dt_login['password'];
            $_SESSION['status_login']=true;
            header ("location: home.php");
        }else{
            echo "<script>alert('Username dan Password tidak benar');location.href='index.php';</script>";
        }
        }
    }
?>
