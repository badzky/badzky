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
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home</a></li>

                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map</a></li>
                        <li><a href="course.php"><i class="icon-group"></i>&nbsp;Course</a></li>
                       
                        <li  class="active"><a href="Philosopy.php"><i class="icon-info-sign"></i>&nbsp;About Us</a></li>

                    </ul>
                </div>

            </div>

<div class="span9">


                <div class="alert alert-info">
                 
                    <strong>Mission</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                   Fullbright College is committed in providing quality education while engaged in a meaningful classroom experience and foster development of persistence and effort necessary for acquiring skills, knowledge, and attitude in sufficient depth for its students with the best facilities that it can afford.
                </div>
                </p>


            </div>




<div class="span9">


                <div class="alert alert-info">
                   
                    <strong>Vission</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                   Fullbright College envision of producing students who are Makabayan (Patriotic), Makatao (Mindful of Humanity), Makakalikasan (Respectful of Nature) and MakaDiyos (God-Fearing) that will effect social, moral and economic changes bringing forth a better quality of life to the society in which they belong.
                </div>
                </p>


            </div>

            

            <div class="span9">


                <div class="alert alert-info">
              
                    <strong>Philosopy</strong>
                </div>


                <p>
                <div class="hero-unit-2">

                   Fullbright College believes that a great institution of learning shall always be a bastion of wisdom, provider of high quality education and source of relevant knowledge needed by its beneficiaries, the students.
                </div>
                </p>


            </div>







        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>





</body>
</html>


