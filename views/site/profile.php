<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php', ['sSelectedMenuItem' => $sSelectedMenuItem]); ?>

    <!-- Section -->
    <section id="content">
        <div class="main-content content-wrap">
            <!-- Profile Page Content -->
            <div id="content-profile">
                <h2 class="header-title"> Profile Page </h2>

                <div class="well list">
                    <p>
                        Here are the list of bloggers who
                        are currently using this [simple blog node template system]
                    </p>

                    <div class="bloggers">
                        <?php foreach ($aListOfBloggers as $mValues) { ?>
                        <div class="blogger-item">
                            <div class="clearfix common-height">
                                <div class="col-md-3 center col-padding image" style="background: url('images/profile1.jpg') 50% 50% / cover no-repeat;">

                                    <div>&nbsp;</div>
                                </div>

                                <div class="col-md-9 center col-padding col-desc">

                                    <div>

                                        <div class="heading-block nobottomborder">
                                            <span class="before-heading color label-position"> <?php echo $mValues['position_label']; ?> </span>
                                            <h3 class="title"> <?php echo $mValues['name']; ?> </h3>
                                        </div>

                                        <div class="center bottommargin">
                                            <p class="body">
                                                <?php echo $mValues['description']; ?>
                                            </p>

                                            <a class="read-more-link" href="profile/view/<?php echo $mValues['name']; ?>"> View Blogger's Profile Info </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </div>

                </div>

            </div>

            <!-- End : Profile Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script type="text/javascript" src="js/index.js"></script>

</div>