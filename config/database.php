<?php
    //local conection
    $local_host     ="localhost"; //127.0.0.1
    $local_port           ="5432";
    $local_user     ="postgres";
    $local_dbname   ="combox";
    $local_password ="unicesmag";

    $supabase_host     ="aws-0-us-east-2.pooler.supabase.com"; 
    $supabase_port           ="6543";
    $supabase_user     ="postgres.emknhswswgsuhnrmlcjl";
    $supabase_dbname   ="postgres";
    $supabase_password ="unicesmag@@";

$local_conn = pg_connect("
    host= $local_host
    port= $local_port
    dbname= $local_dbname 
    user= $local_user
    password= $local_password
    ");

    $supabase_conn = pg_connect("
    host= $supabase_host
    port= $supabase_port
    dbname= $supabase_dbname 
    user= $supabase_user
    password= $supabase_password
    ");

    if(!$local_conn){
        die("Error connection");
    }else {
        echo "conection succes";
    }

    if(!$supabase_conn){
        die("Error connection");
    }else {
        echo "conection succes";
    }






?>