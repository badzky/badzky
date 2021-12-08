<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php

$teacher_id = $_GET['teacher_id'];

$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$teacher_id'") or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);

$course_query = mysqli_query($conn,"select * from class where teacher_id='$session_id' and class_id='$teacher_id'") or die(mysqli_error());
$course_row = mysqli_fetch_array($course_query);
$course_id = $course_row['course_id'];
?>
<?php
$query_class = mysqli_query($conn,"select * from class where teacher_id='$session_id' and class_id='$teacher_id'") or die(mysqli_error());
$row_class = mysqli_fetch_array($query_class);
$id_class = $row_class['class_id'];





?>
<body>
    <?php include('navbar.php'); 

  $teacher_id = $_GET['teacher_id'];
                                    $subject = $_GET['subject'];

    ?>

    <div class="container">
            <div class="span12">
                
                    <a href="teacher_add_class_student.php?id=<?php echo $teacher_id  ?>" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>

                   
                <br><br>
                <div class="alert alert-success"> 
                    <strong>Subject:&nbsp;<?php echo $course_row['subject_id']; ?></strong>
                </div>


                <div class="hero-unit-3">
                    <div class="alert alert-info">
                     
                        <strong><i class="icon-user icon-large"></i>&nbsp;Students</strong>
                    </div>

                    <div class="row-fluid">
                        <div class="span12">

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <a href="student_admin.php<?php echo '?id=' . $teacher_id. "&subject=".$subject; ?>" class="btn btn-info"><i class="icon-plus-sign-alt icon-large"></i>&nbsp;Add Student</a>
                                <br><br>
                                <thead>
                                    <tr>
                                        <th>Photo</th>
                                        <th>Name</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $query = mysqli_query($conn,"select * from sws where cys = '$subject'") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['sws_id'];
                                        $student_id = $row['student_id'];

                                        $student_query = mysqli_query($conn,"select * from student where student_id='$student_id'") or die(mysqli_error());
                                        $student_row = mysqli_fetch_array($student_query);
                                        ?>
                                        <tr class="odd gradeX">
                                            <!-- script -->
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                                                                                
                                            $('#e<?php echo $student_id; ?>').tooltip('show')
                                            $('#e<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>

                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                                                                                                
                                            $('#d<?php echo $student_id; ?>').tooltip('show')
                                            $('#d<?php echo $student_id; ?>').tooltip('hide')
                                        });
                                    </script>
                                    <!-- end script -->
                                    <td width="50"><img class="img-rounded" src="<?php echo $student_row['location']; ?>" height="50" width="50"></td>
                                    <td><a href="">&nbsp;<i class="icon-user icon-large"></i>&nbsp;<?php echo $student_row['firstname'] . " " . $student_row['lastname']; ?></a></td>


                                    <!-- end delete modal -->

                                   
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- end slider -->
                </div>
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


