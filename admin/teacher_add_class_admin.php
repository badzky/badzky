<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php
$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$session_id'") or die(mysqli_error());





?>



 <?php
                            if(isset($_POST['save_class'])) {

                                $teacher_id = $_GET['teacher_id'];
                               
                                $subject = $_POST['subject_id'];
                                $cys = $_POST['cys'];
                                $teacher_id = $_GET['teacher_id'];

                                $checkMon = isset($_POST['mon']) ? 1 : 0;
                                $checkTue = isset($_POST['tue']) ? 1 : 0;
                                $checkWed = isset($_POST['wed']) ? 1 : 0;
                                $checkThur = isset($_POST['thur']) ? 1 : 0;
                                $checkFri = isset($_POST['fri']) ? 1 : 0;
                                $checkSat = isset($_POST['sat']) ? 1 : 0;
                                $checkSun = isset($_POST['sun']) ? 1 : 0;

                                $schedMon = $_POST['schedMon'];
                                $schedTue = $_POST['schedTue'];
                                $schedWed = $_POST['schedWed'];
                                $schedThur = $_POST['schedThur'];
                                $schedFri = $_POST['schedFri'];
                                $schedSat = $_POST['schedSat'];
                                $schedSun = $_POST['schedSun'];

                                $schedule = "";

                                if($checkMon == 1){
                                    $day = "Monday, Time: ". $schedMon;
                                    $schedule .= $day. " ";
                                }
                                

                                if($checkTue == 1){
                                    $day = "Tuesday, Time: ". $schedTue;
                                    $schedule .= $day. " ";
                                }


                                if($checkWed== 1){
                                    $day = "Wednesday, Time: ". $schedWed;
                                    $schedule .= $day. " ";
                                }


                                if($checkThur == 1){
                                    $day = "Thursday, Time: ". $schedThur;
                                    $schedule .= $day. " ";
                                }


                                if($checkFri == 1){
                                    $day = "Friday, Time: ". $schedFri;
                                    $schedule .= $day. " ";
                                }

                                if($checkSat == 1){
                                    $day = "Saturday, Time: ". $schedSat;
                                    $schedule .= $day. " ";
                                }

                                if($checkSun == 1){
                                    $day = "Sunday, Time: ". $schedSun;
                                    $schedule .= $day. " ";
                                }



                                // echo "<script>alert(".$schedule.") </script>";

                                // echo $schedule;

                                mysqli_query($conn,"insert into class (subject_id,course_id,teacher_id,sched) values('$subject','$cys','$teacher_id','$schedule')") or die(mysqli_error());


                               

                                echo('<script>location.href = "teacher_add_class_student.php?id='.$_GET['id'] .'</script>');



                            }

         ?>



<body>

    <?php include('navbar.php'); ?>

    <div class="container">
       
        
            <div class="span12">

                    <?php

                    $teacher_id = $_GET['id']
                    ?>
         
                <a href="teacher_add_class_student.php?id=<?php echo $teacher_id  ?>" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br>
                <br>

                <div class="alert alert-info">
               
                    <strong><i class="icon-user icon-large"></i>&nbsp;Add Class</strong>

                </div>
                <div class="hero-unit-2">
                    <form class="form-horizontal" action="" method="POST">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Class</label>
                            <div class="controls">

                           <h4>Course  <select name="cys"  class="span5" ></h4>
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

                              <h4>Subject:  <select name="subject_id" class="span5" ></h4>
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
    <div class="control-group">
                            <label class="control-label" for="inputEmail"></label>
                            <div class="controls">
                       <h Schedule</h4>
                <input type="checkbox" name="mon" id="Mon">Monday<br><input name="schedMon" type="text"><br>
                <input type="checkbox" name="tue" id="tue">Tuesday<br><input name="schedTue" type="text"><br>
                         <input type="checkbox" name="wed" id="wed">Wednesday<br><input name="schedWed" type="text"><br>
                        <input type="checkbox" name="thur" id="thurs">Thursday<br><input name="schedThur" type="text"><br>
                        <input type="checkbox" name="fri" id="fri">Friday<br><input name="schedFri" type="text"><br>
                    <input type="checkbox" name="sat" id="sat">Saturday<br><input name="schedSat" type="text"><br>
                        <input type="checkbox" name="sun" id="sun">Sunday<br><input name="schedSun" type="text"><br>
 </div>
                        </div>



                        <div class="control-group">
                            <div class="controls">
                                <button type="submit" name="save_class" class="btn btn-success" ><i class="icon-plus-sign icon-large"></i>&nbsp;Add Class</button>

                            </div>
                           
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


