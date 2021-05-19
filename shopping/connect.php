<?php
    $connect = mysqli_connect('localhost','root', '12345678', 'payment');
    if (mysqli_connect_error()){
        echo 'Failed to connect';
    }
?>
