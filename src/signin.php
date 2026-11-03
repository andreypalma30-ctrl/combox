<?php

require('../config/database.php');
    //Get dat from html form

    $e_mail =  $_POST ['email'];
    $p_asseword = $_POST ['pswd'];
    $pass_enc = md5($p_asseword);

    $sql = "SELECT * FROM users WHERE email ='$e_mail' and password = '$pass_enc' ";
    $res = pg_query ($supabase_conn, $sql);
    if(pg_num_rows ($res) >0){
        header('refresh:0;url=home.php');
    }else{
        echo "<script>alert('invalid email or password :::')</script>";
        header('refresh:0;url=signin.html');
    }



    ?>