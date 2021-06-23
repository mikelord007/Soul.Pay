<?php
    $servername="remotemysql.com";
    $username="pAsG17rffJ";
    $pwdk="i3n3IWG5uZ";
    $database = "pAsG17rffJ";

    $conn = mysqli_connect($servername,$username,$pwdk,$database);
    if(!$conn){
        die("Server connection error".mysqli_connect_error());
    }
    