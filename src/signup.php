<?php

require('../config/database.php');
    //Get dat from html form
    $f_name =  $_POST ['Fname'];
    $l_name =  $_POST ['Lname'];
    $m_phone = $_POST ['Pnumber'];
    $e_mail =  $_POST ['email'];
    $p_asseword = $_POST ['pswd'];

    $sql_validation ="
        s SELECT
            u.email
          FROM 
            users.u
          WHERE    
            u.email = '$e_mail' 
    ";
   // $local_res=pg_query($local_conn,$sql_validation);
    $supa_res=pg_query($supabase_conn,$sql_validation);
    $total= pg_fetch_result($supa_res,0,0);

    if($total>0){
        echo "<script> alert('user email already exist ::: ')</script>";
        header ('refresh:0;url=signin.html');
    } else{
        
        $sql="
        insert into users (firstname, lastname, mobile_phone, email, password)
        values ( '$f_name', '$l_name', '$m_phone', '$e_mail', '$p_asseword')
        ";
    }

    $supabase_res=pg_query($supabase_conn,$sql);

    
    if($supabase_res){
        echo"<br>Data inserted succesfully into database";

    } else{
        echo"<br>Error inserting data into database";

    }

    /*if($local_res){
        echo"<br>Data inserted succesfully into database";

    } else{
        echo"<br>Error inserting data into database";

    }*/



