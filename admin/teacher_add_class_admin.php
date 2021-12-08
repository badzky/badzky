<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$session_id'") or die(mysqli_error());

?>
<body>

    <?php include('navbar.php'); ?>

    <div class="container">
       
        
            <div class="span12">

                    <?php

                    $teacher_id = $_GET['teacher_id']
                    ?>

                <a href="teacher_add_class_student.php?id=<?php echo $teacher_id  ?>" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br>
                <br>

                <div class="alert alert-info">
               
                    <strong><i class="icon-user icon-large"></i>&nbsp;Add Class</strong>
                </div>
                <div class="hero-unit-2">
                    <form class="form-horizontal" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Class</label>
                            <div class="controls">

                           <h4>Course  <select name="cys"  class="span5" required></h4>
                                    <option></option>
                                    <?php
                                    $query = mysqli_query($conn,"select * from course") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value="<?php echo $row['cys']; ?>"><?php echo $row['cys']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <div class="controls">

                              <h4>Subject:  <select name="subject_id" class="span5" required></h4>
                                    <option></option>
                                    <?php
                                    $teacher_subject_query = mysqli_query($conn,"select * from subject") or die(mysqli_error());
                                    $teacher_row = mysqli_fetch_array($teacher_subject_query);
                                    $subject_id = $teacher_row['subject_id'];

                                   $query = mysqli_query($conn,"select * from subject") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value="<?php echo $row['subject_title']; ?>"><?php echo $row['subject_title']; ?></option>
                                    <?php } ?>

                                </select>


                                
                              

                            </div>
                        </div>

                        <h4>Schedule</h4>
                         <h5><input type="checkbox" name="Mon" id="Mon">Monday<br><input type="text"></h5>
                        <h5><input type="checkbox" name="tue" id="tue">Tuesday<br><input type="text"></h5>
                         <h5><input type="checkbox" name="wed" id="wed">Wednesday<br><input type="text"></h5>
                        <h5><input type="checkbox" name="thurs" id="thurs">Thursday<br><input type="text"></h5>
                        <h5><input type="checkbox" name="fri" id="fri">Friday<br><input type="text"></h5>
                        <h5><input type="checkbox" name="sat" id="sat">Saturday<br><input type="text"></h5>
                        <h5><input type="checkbox" name="sun" id="sun">Sunday<br><input type="text"></h5>




                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="save_class" class="btn btn-success" ><i class="icon-plus-sign icon-large"></i>&nbsp;Add Class</button>
                            </div>
                            <?php
                            if (isset($_POST['save_class'])) {
                               
                                $subject = $_POST['subject_id'];
                                $cys = $_POST['cys'];
                                $teacher_id = $_POST['teacher_id'];

                                mysqli_query($conn,"insert into class (subject_id,course_id,teacher_id) values('$subject','$cys','$teacher_id')") or die(mysqli_error());


                               

                                echo('<script>location.href = "teacher_add_class_student.php?id='.$teacher_id.'"</script>');

                            }
                            ?>
                        </div>
                    </form>
                </div>




                <!-- end slider -->
            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


