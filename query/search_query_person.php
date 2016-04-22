<?php


include '../db_connectivity/db.php';

$result4=  mysqli_query($db_handle, "SELECT * FROM driver WHERE NIC='".$_POST['nic']."'");

while($row=  mysqli_fetch_array($result4))
{
    $prof[]=$row;
    
    
}

echo json_encode($prof);

?>

