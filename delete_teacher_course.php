<?php
include('admin/connect.php');
$get_id=$_POST['id'];
mysqli_query($conn,"delete from subject where subject_class='$get_id'")or die(mysqli_error());
header('location:teacher_subject.php');

?>