<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$get_id=$_GET['id'];

$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$session_id'") or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);

$course_query = mysqli_query($conn,"select * from class where teacher_id='$session_id'") or die(mysqli_error());
$course_row = mysqli_fetch_array($course_query);
$subect_id = $course_row['subject_id'];
?>
<?php
$query_class = mysqli_query($conn,"select * from class where teacher_id='$session_id'") or die(mysqli_error());
$row_class = mysqli_fetch_array($query_class);
$id_class = $row_class['class_id'];
?>
<body>

    <?php include('navbar.php'); ?>

    <div class="container">
        
            <div class="span12">


                    <a href="class_admin.php?teacher_id=<?php echo $get_id  ?>" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br><br>
                <div class="alert alert-success"> 
                    <strong>Subject:&nbsp;<?php echo $course_row['subject_id']; ?></strong>
                </div>


                <div class="hero-unit-3">
                    <div class="alert alert-info">
                        <strong><i class="icon-user icon-large"></i>&nbsp;Add Students</strong>
                    </div>

                    <div class="row-fluid">
                        <div class="span9">
                            <form class="form-horizontal" method="POST">
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Student</label>
                                    <div class="controls">

                                        <select name="student" class="span6" required>
                                            <option></option>
                                            <?php
                                            $query = mysqli_query($conn,"select * from student") or die(mysqli_error());
                                            while ($row = mysqli_fetch_array($query)) {
                                                $student_id = $row['student_id'];
                                                $student_query = mysqli_query($conn,"select * from student where student_id='$student_id'") or die(mysqli_error());
                                                $student_row = mysqli_fetch_array($student_query);
                                                ?>


                                                ?>
                                                <option value="<?php echo $student_id; ?>"><?php echo $student_row['firstname'] . " " . $student_row['lastname']; ?></option>
                                            <?php } ?>
                                            <input type="hidden" name="teacher_id" value="<?php echo $session_id; ?>">
                                            <input type="hidden" name="cys" value="<?php echo $_GET['subject']; ?>">
                                            <input type="hidden" name="subject" value="<?php echo $course_row['subject_id']; ?>">

                                        </select>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="save_subject" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Students</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($_POST['save_subject'])) {
                                $subject=$_POST['subject'];
                                $cys = $_POST['cys'];
                                $student = $_POST['student'];

                               $teacher_id = $_GET['id'];

                                mysqli_query($conn,"insert into sws (teacher_id,student_id,cys,subject_id,class_id) values('$teacher_id','$student','$cys','$subject','$get_id')") or die(mysqli_error());
                              $teacher_id = $_GET['id'];

                                  echo('<script>location.href = "class_admin.php?teacher_id='.$teacher_id.'&subject='.$_GET['subject'].'"</script>');

                            }
                            ?>


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


