<?php
include('connect.php');
$get_id=$_GET['id'];
mysqli_query($conn,"delete from class where class_id = '$get_id'")or die(mysqli_error());
header('location:teacher_add_class_student.php');

?>