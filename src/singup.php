<?php

require('../config/database.php');
    //Get dat from html form
    $f_name =  $_POST ['Fname'];
    $l_name =  $_POST ['Lname'];
    $m_phone = $_POST ['Pnumber'];
    $e_mail =  $_POST ['email'];
    $p_asseword = $_POST ['pswd'];

    $sql="
    insert into users (firstname, lastname, mobile_phone, email, password)
    values ( '$f_name', '$l_name', '$m_phone', '$e_mail', '$p_asseword')
    ";

    $local_res=pg_query($local_conn,$sql);
    $supabase_res=pg_query($supabase_conn,$sql);

    if($local_res){
        echo"<br>Data inserted succesfully into database";

    } else{
        echo"<br>Error inserting data into database";

    }

    if($supabase_res){
        echo"<br>Data inserted succesfully into database";

    } else{
        echo"<br>Error inserting data into database";

    }

















    /*echo "Firtstname is:". $f_name;
    echo "Laststname is:". $l_name;
    echo "phone is:". $m_phone;
    echo "email is:". $e_mail;
    echo "password is:". $p_asseword;
   */

?>