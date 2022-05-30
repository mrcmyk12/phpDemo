<?php

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp', 3306);
        if(!$connection) {
            die("Database Connection Failed");
        }

?>