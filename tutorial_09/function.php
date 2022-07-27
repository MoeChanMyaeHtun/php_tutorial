<?php
include "db_conn.php";
function update(){
		
        global $conn;
        $user_name=$_POST['name'];
        $id=$_POST['ID'];
        $sql="UPDATE employee.regidter set Emp_name='$user_name' where ID='$id'";
        $go_query=mysqli_query($conn,$sql);
        if(!$go_query){
            die("QUERY_FAILED".mysqli_error($conn));
        }
        header("location:home.php");
    }
    ?>