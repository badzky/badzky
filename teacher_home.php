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
                        <li   class="active">
                            <a href="teacher_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li>
                            <a href="teacher_class.php"><i class="icon-group icon-large"></i>&nbsp;Class
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  


                    </ul>
                </div>

            </div>

            <div class="span9">

                <div class="alert alert-info">
                    <strong>welcome!</strong>&nbsp;Fullbright College! Hyperlinking to the brighter future
                </div>
                <div class="slider-wrapper theme-default">

                    <?php include('slider.php'); ?>

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


