<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$db_handle=mysqli_connect("localhost", "root", "", "mydb");

if(mysqli_connect_errno())
{
    echo 'database error'. mysqli_connect_error();
    
}

?>

