<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php'); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap main-content">
            <!-- Login Page -->
            <div id="content-login">

                <form class="frm-submit" id="frm-login" method="POST">
                    <fieldset id="fs-submit">
                        <h2 class="txt-center header-title" id="header-login"> Login Page </h2>
                        <div class="panel-left col-sm-2">
                            <div class="cont-frm-options" id="cont-profile-img">
                                <img src="images/profile1.jpg" id="img-profile" />
                            </div>
                        </div>

                        <div class="panel-right col-sm-10">
                            <div class="cont-frm-options">
                                <p class="lbl lbl-bold"> Email Address: </p>
                                <input type="text" name="email_address" value="" />
                            </div>
                            <div class="cont-frm-options">
                                <p class="lbl lbl-bold"> Password: </p>
                                <input type="password" name="password" value="" />
                            </div>
                        </div>

                        <div class="panel-both col-sm-12">
                            <div class="cont-frm-options" id="cont-full-options">
                                <input type="submit" name="submit_login" class="btn btn-primary" id="btn-login" value="Login" />
                            </div>
                        </div>
                    </fieldset>

                </form>


            </div>

            <!-- End : Login Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="js/module/form.js"></script>
    <script type="text/javascript" src="js/module/ajax.js"></script>
    <script type="text/javascript" src="js/login.js"></script>

</div>