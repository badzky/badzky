<?php
include('header.php');
//Start session

//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

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


                        <li class="nav-header">FBC</li>
                        <li class="active"><a href="#"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="course.php"><i class="icon-group"></i>&nbsp;Course
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                      
                            </a></li>
                        <li><a href="philosopy.php"><i class="icon-info-sign"></i>&nbsp;About Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>
                <br>


            </div>
            <div class="span9">



                

      
                    <div class="alert alert-danger"><strong>Access Denied</strong><br>The information that you've insert are not valid!&nbsp;<br>Please input a valid username and password</div>
                    

                        </div>

                        <?php
                        if (isset($_POST['login'])) {

                            function clean($str) {
                                $str = @trim($str);
                                if (get_magic_quotes_gpc()) {
                                    $str = stripslashes($str);
                                }
                                return mysqli_real_escape_string($str);
                            }

                            $username = clean($_POST['username']);
                            $password = clean($_POST['password']);

                            $query = mysqli_query($conn,"select * from student where username='$username' and password='$password'") or die(mysqli_error());
                            $count = mysqli_num_rows($query);
                            $row = mysqli_fetch_array($query);


                            if ($count > 0) {
                                $_SESSION['id'] = $row['student_id'];
                                echo('<script>location.href = "student_home.php"</script>');
                                session_write_close();
                                exit();
                            } else {
                                session_write_close();
                                ?>

                                <?php
                                echo('<script>location.href = "error_login.php"</script>');
                            }
                        }
                        ?>

                    </form>
                </div>
                <!-- end slider -->
            </div>

        </div>

    </div>
    <!---------------->

        <?php include('footer.php'); ?>
    </div>


</div>
</div>




</body>
</html>


