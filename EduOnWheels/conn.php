<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eduonwheels";
// Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn){
    echo "Sucessfully!!";
}else{
    echo "Not Connected!!";
};



?>