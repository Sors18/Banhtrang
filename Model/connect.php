<?php
    $server="localhost";
    $user="root";
    $pass="";
    $database="banhtrang";
    $conn=mysqli_connect($server,$user,$pass,$database);
    mysqli_query($conn, 'set names "utf8"');
?>