<?php
$conn = mysqli_connect("localhost", "root", "root", "win");
if(!$conn){
    echo "error" . mysqli_connect_error();
}?>