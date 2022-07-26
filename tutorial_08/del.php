<?php
include "db_conn.php";
$id = $_GET['id'];
$sql = "DELETE FROM employee.register WHERE ID = '$id'";


$result = $conn->query($sql);

if(mysqli_query($conn, $sql)){
    header("location:home.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($sql_connection);    
}
?>