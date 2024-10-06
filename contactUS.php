<?php
$dbserver = "localhost";
$username = "root";
$password = "";
$dbname ="dynamicweb";

$conn = "";

$conn = mysqli_connect($dbserver,$username,$password, $dbname);

if($conn){
    echo "connection established";
}
else{
    echo "no connection";
}

?>