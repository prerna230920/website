<?php
include 'conn.php';
$read = "SELECT * FROM `eduonwheels` ";
$read_run = mysqli_query($conn, $read);
while($fetching = mysqli_fetch_array($read_run)){
    ?>
    <tr>
        <td><?php echo $fetching['Name'];?></td>
        <td><?php echo $fetching['Email'];?></td>
        <td><?php echo $fetching['phone'];?></td>
        <td><a href="deletet.php?ids=<?php echo $fetching['ID']; ?>">Delete</a></td>
        <td><?php echo $fetching['Name'];?></td>
    </tr>
}



?>