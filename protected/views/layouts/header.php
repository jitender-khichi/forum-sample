<!--========================================================
                          HEADER
=========================================================-->
<script>
    var SITE_URL = '<?php echo Yii::app()->request->baseUrl; ?>/'; //this will use for accsssing the site root path in js files
</script>
<header>
    <div id="stuck_container" class="stuck_container">
        <div class="container">
            <h1 class="brand">
                <a href="<?php echo Yii::app()->request->baseUrl; ?>/">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/logo.jpg" style="height:40px" alt="<title><?php echo CHtml::encode($this->pageTitle); ?></title>" ></a>
            </h1>

            <nav class="nav">
                <ul class="sf-menu">
                    <li class="">
                        <a href="/">Home</a>
                    </li>            
                    <li>
                        <a href="<?php echo Yii::app()->createUrl('thread/index', array());?>">Discussion Forum</a>
                    </li>            
                    <li>
                        <a href="javascript:void();">Support</a>
                    </li>           
                    <li>
                        <a href="javascript:void();">Services</a>
                    </li>
                </ul>

            </nav>

            <div class="mobile-icons">
                <span>
                    <a href="tel:1234567890">
                        <i class="fa fa-mobile mobile"></i>
                    </a>
                </span>  
                <span>
                    <a href="mailto:test@test.com">
                        <i class="fa fa-envelope-o"></i>
                    </a>
                </span>
            </div>
        </div>
    </div>

</header>
