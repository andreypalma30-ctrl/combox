<?php
require('../config/database.php');
$sql = "SELECT 
firstname,
lastname,
mobile_phone,
email,
case
    when u.status = true then 'Active' else  'Inactive'
end as user_status,
photo_url
FROM 
users u
ORDER BY 
lastname ASC";

$res = pg_query($supabase_conn, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combox List users</title>
</head>
<body>
    <center><h3>Lisr all users</h3></center>
    <table border="1" align = "center">
            <tr>
                <th>Firstnaem</th>
                <th>Lastname</th>
                <th>Mobile_phone</th>
                <th>email</th>
                <th>status</th>
                <th>photo</th>
                <th>...</th>
    </tr>
    <?php
        while($row = pg_fetch_assoc ($res)){
            echo "<tr>";
            echo "<td>".$row['firstname']."</td>";
            echo "<td>".$row['Lastname']."</td>";
            echo "<td>".$row['mobile_phone']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['user_status']."</td>";
            echo "<td align= 'center'><img src='".$row['photo_url'] . "'width='30'><td>";
            echo "<td>
                <img src = 'icons/lupa.png' width='15'>&nbsp;
                <img src = 'icons/lapiz.png' width='15'>&nbsp,&nvsp;
                <img src = 'icons/basurero.png' width='15'>
    
            ";
        }

    ?>

        </table>
    </body> 
</html>