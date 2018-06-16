<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php', ['sSelectedMenuItem' => $sSelectedMenuItem]); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap main-content">
            <!-- FAQ Page Content -->
            <div id="content-faq">
                <div class="simple-slideshow">
                    <ul>
                        <li class="slide active"><img src="images/blog1.jpeg" /></li>
                        <li class="slide"><img src="images/blog2.jpeg" /></li>
                        <li class="slide"><img src="images/blog3.jpeg" /></li>
                        <li class="slide"><img src="images/full/3.jpg" /></li>
                    </ul>
                </div>

                <div class="wrapper" id="faq-intro">
                    <h2 class="header-title"> FAQ Page </h2>
                    <p>
                        Insert a sample content here about this page
                    </p>
                </div>

                <div class="wrapper" id="sub-intro">
                    <h3> What is this Page </h3>
                    <p> Insert a sample content here about this page </p>
                </div>
            </div>

            <!-- End : FAQ Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script type="text/javascript" src="js/index.js"></script>

</div>