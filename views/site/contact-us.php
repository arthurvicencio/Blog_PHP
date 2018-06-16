<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php', ['sSelectedMenuItem' => $sSelectedMenuItem]); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap main-content">
            <!-- Home Page Content -->
            <div id="content-contact-us">
                <div class="simple-slideshow">
                    <ul>
                        <li class="slide active"><img src="images/blog1.jpeg" /></li>
                        <li class="slide"><img src="images/blog2.jpeg" /></li>
                        <li class="slide"><img src="images/blog3.jpeg" /></li>
                        <li class="slide"><img src="images/full/3.jpg" /></li>
                    </ul>
                </div>

                <div class="wrapper" id="contact-us-intro">
                    <h2 class="header-title"> Contact Us </h2>
                    <p>
                        @marylyn : Prepare input fields for contact us form
                    </p>
                </div>

            </div>

            <!-- End : Home Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script type="text/javascript" src="js/index.js"></script>

</div>