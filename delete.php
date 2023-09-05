<?php
include "./header.php";
include "./navbar2.php";
include "./footer.php";
include "./connection.php";
$Id = mysqli_real_escape_string($conn, $_GET['Id']);
$query = "DELETE FROM student WHERE id='$Id'";
mysqli_query($conn, $query);
header("Location:./Dashbord.php");
?>