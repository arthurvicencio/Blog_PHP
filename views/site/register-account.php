<?php ?>

<div id="wrapper" class="clearfix">

    <?php echo \Yii::$app->view->render('@app/views/includes/header.php', ['sSelectedMenuItem' => $sSelectedMenuItem]); ?>

    <!-- Section -->
    <section id="content">
        <div class="content-wrap" class="main-content">
            <!-- Register New Account Page -->
            <div id="content-login">
                <h2> Register New Account </h2>
            </div>

            <!-- End : Register New Account Page Content -->
        </div>
    </section>
    <!-- End : Section -->

    <?php echo \Yii::$app->view->render('@app/views/includes/footer.php'); ?>
</div>