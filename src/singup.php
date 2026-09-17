<?php
    //Get dat from html form
    $f_name =  $_POST ['Fname'];
    $l_name =  $_POST ['Lname'];
    $m_phone = $_POST ['Pnumber'];
    $e_mail =  $_POST ['email'];
    $p_asseword = $_POST ['pswd'];

    echo "Firtstname is:". $f_name;
    echo "Laststname is:". $l_name;
    echo "phone is:". $m_phone;
    echo "email is:". $e_mail;
    echo "password is:". $p_asseword;
?>