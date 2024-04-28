<?php
$conn =mysqli_connect('localhost','root','','movie');
if (!$conn){
    echo 'error coonnecting to the database';
    
}