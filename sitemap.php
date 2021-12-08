<?php
include('header.php');

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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li class="active"><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
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
                        <li><a href="Philosopy.php"><i class="icon-info-sign"></i>&nbsp;About Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                    </ul>
                </div>

            </div>

            <div class="span9">

                <div class="alert alert-info">
            
                   <i class="icon-sitemap icon-large"></i> <strong>&nbsp;Welcome to Fullbright College Learning system</strong>
                </div>


                <p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
                           src="https://www.google.com/maps/d/u/0/embed?mid=11QgDnC1HftrE3bGKpdozF2doXqAeLo9q" width="640" height="480">
                    </iframe></p>




            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>





</body>
</html>


