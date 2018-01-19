<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="language" content="en"/>

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/grid.css" media="screen, projection"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap/css/bootstrap.css" media="print"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/camera.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/owl-carousel.css"/>

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/jquery.fancybox.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/Grey-bg-form.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/white-bg-form.css"/>

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-migrate-1.2.1.js"/></script>
    <!--[if lt IE 9]>
           <html class="lt-ie9">
           <div style=' clear: both; text-align:center; position: relative;'>
             <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
               <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                    alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
             </a>
           </div>
           <script src="js/html5shiv.js"></script>
           <![endif]-->
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/device.min.js"></script>

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="page" id="page">
        <?php echo $this->renderPartial('//layouts/header'); ?>
        <?php if(isset($this->banner) && $this->banner){?>
        <?php echo $this->renderPartial('//layouts/banner'); ?>
        <?php } ?>

        <main>
            <section class="well">
                <div class="container">
                    <div class="row">
                        <div class="equal-space">
                            <?php echo $content; ?>
                            <div class="contact-address"> </div>

                        </div>
                    </div>
                </div>
            </section>


        </main>


        <?php echo $this->renderPartial('//layouts/footer'); ?>


    </div><!-- page -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</body>
</html>
