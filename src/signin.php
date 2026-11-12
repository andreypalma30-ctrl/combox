<?php

require('../config/database.php');
    
    session_start();

    if(!isset($_SESSION[userId] )){
        header('refresh:0;url=home.php');

    }


    //Get dat from html from (client)
    $e_mail =  $_POST ['email'];
    $p_asseword = $_POST ['pswd'];
    $pass_enc = md5($p_asseword);

    $sql = "SELECT * FROM users WHERE email ='$e_mail' and password = '$pass_enc' ";
    $res = pg_query ($supabase_conn, $sql);
    if(pg_num_rows ($res) >0){
        $row = pg_fetch_assoc($res);

        $_SESSION['userId'] = $row['id'];
        $_SESSION['fullName'] = $row['fullname'];
        $_SESSION['Fname'] = $row['Firstname'];
        $_SESSION['Lname'] = $row['Lastname'];

        header('refresh:0;url=home.php');
    }else{
        echo "<script>alert('invalid email or password :::')</script>";
        header('refresh:0;url=signin.html');
    }



    ?>