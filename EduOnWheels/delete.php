<?php
include 'conn.php';
$ids = $GET['id'];
echo $ids;

$del = "DELETE FROM `eduonwheels` WHERE id=$ids";
del_run = mysqli_query($conn, $del);

if(del_run){
    echo " Deleted !!";
}else{
    echo " Not Deleted !!"
}

?>
