<?php
$conn=mysqli_connect('localhost','root','','xir5_laravel');
/* check connection */
if (mysqli_connect_error()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>