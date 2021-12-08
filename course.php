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

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li class="active"><a href="course.php"><i class="icon-group"></i>&nbsp;Course
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


                <div class="alert alert-info">
                   
                    <strong><i class="icon-book icon-large"></i>&nbsp;Hyperlink to the brightest future!</strong>&nbsp;
                </div>
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <div class="alert alert-success">  Fullbright College Courses offers</div>

                            <div class="row-fluid">
                                <div class="span6">
                                    <p><strong>COLLEGE</strong>  COURSE OFFERING</p>
                                    <p><i class="icon-circle"></i>&nbsp;B.S IN CRIMINOLOGY</p>
                                       <p><i class="icon-circle"></i>&nbsp;B.S INFORMATION TECHNOLOGY</p>
                                          <p><i class="icon-circle"></i>&nbsp;B.S IN COMPUTER SCIENCE</p>
                                             <p><i class="icon-circle"></i>&nbsp;B.S IN ELECTRONIC ENGINEERING</p>
                                                <p><i class="icon-circle"></i>&nbsp;B.S IN COMPUTER ENGINEERING</p>
                                                   <p><i class="icon-circle"></i>&nbsp;B.S IN TOURISM MANAGEMENT</p>
                                                      <p><i class="icon-circle"></i>&nbsp;B.S IN HOSPITALITY MANAGEMENT</p>
                                                         <p><i class="icon-circle"></i>&nbsp;B.S IN B.A. MAJOR IN FINANCIAL MANAGEMENT</p>
                                                        <p><i class="icon-circle"></i>&nbsp;B.S IN B.A. MAJOR IN MARKETING MANAGEMENT</p>
                                                          <p><i class="icon-circle"></i>&nbsp;BACHELOR IN ELEMENTARY EDUCATION</p>
                                                         <p><i class="icon-circle"></i>&nbsp;B.S EDUCATION MAJOR IN ENGLISH</p>
                                                         <p><i class="icon-circle"></i>&nbsp;B.S EDUCATION MAJOR IN MATHEMATICS</p>
                                                        <p><i class="icon-circle"></i>&nbsp;B.S EDUCATION MAJOR IN SOCIAL STUDIES </p>
                                     <p><strong>SENIOR HIGH SCHOOL</strong></p>
                                     <p><strong>ACADEMIC STRAND</strong></p>
                                <p><i class="icon-circle"></i>&nbsp;ABM</p>
                               <p><i class="icon-circle"></i>&nbsp;GAS</p>
                                <p><i class="icon-circle"></i>&nbsp;HUMSS</p>
                               <p><strong>TECHNICAL VOCATIONAL STRAND</strong></p>
                                <p><i class="icon-circle"></i>&nbsp;INFORMATION COMMUNICATION TECHNOLOGY</p>
                                 <p><i class="icon-circle"></i>&nbsp;HOME ECONOMICS</p>
                              


                                </div>
                               
                            </div>
                        </div>
                    </div>

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


