<?php
include('connect.php');

$get_id = $_POST['id'];
$class_id=$_POST['class_id'];

$teacher_id = $_GET['teacher_id'];
$subject = $_GET['subject'];

mysqli_query($conn,"delete from sws where sws_id='$get_id'") or die(mysqli_error());
?>


<script type="text/javascript">
    window.location="class_admin.php<?php echo "?teacher_id=". $teacher_id."&subject=".$subject; ?>";                          
</script>


