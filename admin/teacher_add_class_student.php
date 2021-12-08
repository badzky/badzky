<?php include('header.php'); ?>
<?php include('session.php'); ?>

<body>

    <?php include('navbar.php'); ?>

    <div class="container">
    
            <div class="span12">
                  <a href="teacher.php" class="btn btn-success"><i class="icon-arrow-left icon-large"></i>&nbsp;Back</a>
                <br></br>
                
                <div class="hero-unit-3">

                    <?php

                    $teacher_id = $_GET['id']
                    ?>


                    <a href="teacher_add_class_admin.php?teacher_id=<?php echo $teacher_id  ?>" class="btn btn-success"><i class="icon-plus-sign icon-large"></i>&nbsp;Add Class</a>
                <br></br>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                     
                      <strong><i class="icon-user icon-large"></i>&nbsp;Class</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>Class</th>
                                <th>Subject</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                       <tbody>
                            <?php

           

                            $q="select * from class where teacher_id =".$teacher_id;
                            $query = mysqli_query($conn,$q) or die(mysqli_error());
                            while ($row = mysqli_fetch_array($query)) {
                              

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

                            <td><a rel="tooltip"  title="View Class" id="<?php echo $class_id; ?>"  href="class_admin.php?teacher_id=<?php echo $teacher_id  ?>&subject=<?php echo $row['course_id']; ?>" class="btn btn-info">&nbsp;<i class="icon-group icon-large"></i>&nbsp;<?php echo $row['course_id']; ?></a></td>
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
                                    <a href="teacher_delete_class.php<?php echo '?id=' . $class_id; ?>" class="btn btn-danger"><i class="icon-trash icon-large"></i>&nbsp;Delete</a>
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





