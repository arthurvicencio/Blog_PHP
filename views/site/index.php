<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php'); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap main-content">
            <!-- Home Page Content -->
            <div id="content-home">
                <div class="simple-slideshow">
                    <ul>
                        <li class="slide active"><img src="images/blog1.jpeg" /></li>
                        <li class="slide"><img src="images/blog2.jpeg" /></li>
                        <li class="slide"><img src="images/blog3.jpeg" /></li>
                        <li class="slide"><img src="images/full/3.jpg" /></li>
                    </ul>
                </div>

                <div class="wrapper" id="home-intro">
                    <h2 class="header-title"> Sample Main Initial Title </h2>
                    <p>
                        Sample Main Initial Description
                    </p>
                </div>

                <div class="wrapper" id="sub-intro">
                    <h3> Blog Node Template Mini Project </h3>
                    <p> This is just a sample content fill in text. Provide the necessary details below </p>
                </div>
            </div>

            <!-- End : Home Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script type="text/javascript" src="js/index.js"></script>

</div>