<?php
include('header.php');
include ('session.php');
$user_query = mysqli_query($conn,"select * from teacher where teacher_id='$session_id'") or die(mysqli_error());
$user_row = mysqli_fetch_array($user_query);
?>
<body>

    <?php include('navhead_user.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                                        $Today = date('Y-m-d');
                                        $new = date('D, M d, Y', strtotime('+6 hour ',strtotime($Today)));
                                        echo $new;
                                     ?>

    <p id="time"></p>
    <script>
        setInterval(timer, 1000);
function timer(){
    const d = new Date()      
                document.getElementById("time").innerHTML= d.toLocaleTimeString()
}
    </script> 
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li>
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li   class="active">
                            <a href="teacher_class.php"><i class="icon-group icon-large"></i>&nbsp;Class
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                        


                    </ul>
                </div>

            </div>
            <div class="span9">
              
                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                     
                      <strong><i class="icon-user icon-large"></i>&nbsp;Class</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>Class</th>
                                <th>Subject</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $query = mysqli_query($conn,"select * from class where teacher_id = '$session_id'") or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                                $class_id = $row['class_id'];
                                ?>
                                <tr class="odd gradeX">
                                    <!-- script -->
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#d<?php echo $class_id; ?>').tooltip('show')
                                    $('#d<?php echo $class_id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->
                         
                            <script type="text/javascript">
                                $(document).ready(function(){
                                    
                                    $('#v<?php echo $class_id; ?>').tooltip('show')
                                    $('#v<?php echo $class_id; ?>').tooltip('hide')
                                });
                            </script>
                            <!-- end script -->

                            <td><a rel="tooltip"  title="View Class" id="v<?php echo $class_id; ?>"  href="class.php<?php echo '?id='.$class_id; ?>" class="btn btn-info">&nbsp;<i class="icon-group icon-large"></i>&nbsp;<?php echo $row['course_id']; ?></a></td>
                            <td><?php echo $row['subject_id']; ?></td> 

                            <td width="50">
                                <a rel="tooltip"  title="Delete Subject" id="d<?php echo $class_id; ?>" href="#course_id<?php echo $class_id; ?>" role="button"  data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;</a>
                               
                            </td>
                            <!-- user delete modal -->
                            <div id="course_id<?php echo $class_id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-danger">Are you Sure you Want to <strong>Delete</strong>&nbsp; this Class?</div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Close</button>
                                    <a href="delete_class.php<?php echo '?id=' . $class_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
                                </div>
                            </div>
                            <!-- end delete modal -->

                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
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





