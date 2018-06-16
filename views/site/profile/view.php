<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php', ['sSelectedMenuItem' => $sSelectedMenuItem]); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap main-content">
            <!-- Profile Blogger Page Content -->
            <div id="content-profile-blogger">
                <h2> Profile Information </h2>

                <div class="information">
                    <div class="item" id="info-name">
                        <h3> Name : </h3>
                        <p> <?php echo $sBloggerName; ?> </p>
                    </div>

                    <div class="item" id="info-age">
                        <h3> Age : </h3>
                        <p> 24 year(s) old </p>
                    </div>

                    <div class="item" id="info-bday">
                        <h3> Birthday : </h3>
                        <p> May 20, 1990 </p>
                    </div>

                    <div class="item" id="info-bday">
                        <h3> Working Position : </h3>
                        <p> Blogger (Professional) </p>
                    </div>

                    <div class="item" id="info-bday">
                        <h3> Working Company : </h3>
                        <p> Company XYZ </p>
                    </div>

                    <div class="item" id="info-list-of-blogs">
                        <h3> List of Blogs Made : </h3>
                        <ul class="list-of-blogs">
                            <li class="item">
                                <a href="#"><i class="icon-bookmark2"></i> I've made a sample blog just now =p </a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-bookmark2"></i> Sample Blog 2 </a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-bookmark2"></i> Sample Blog 3 </a>
                            </li>
                            <li class="item">
                                <a href="#"><i class="icon-bookmark2"></i> Sample Blog 4 </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <!-- End : Profile Blogger Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script type="text/javascript" src="js/index.js"></script>

</div>