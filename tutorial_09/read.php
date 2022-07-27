<?php 


include "db_conn.php";
$sql = "SELECT * FROM employee.register ORDER BY ID ASC";
$result = mysqli_query($conn, $sql); ?>