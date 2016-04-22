<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../db_connectivity/db.php';

$result5=  mysqli_query($db_handle, "SELECT * FROM driving_license WHERE driver_NIC='".$_POST['nic']."'");

while($row=  mysqli_fetch_array($result5))
{
    $lsn[]=$row;
    
    
}

echo json_encode($lsn);

