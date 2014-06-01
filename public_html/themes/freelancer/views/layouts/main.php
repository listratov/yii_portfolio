<!DOCTYPE html>
<html lang="en">
<?php
$cs = Yii::app()->clientScript;
$themePath = Yii::app()->theme->baseUrl;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <!-- Bootstrap Core CSS -->
    <?php $cs->registerCssFile($themePath.'/assets/css/bootstrap.min.css'); ?>
    <?php $cs->registerCssFile($themePath.'/assets/css/freelancer.css'); ?>
    <!-- Fonts -->
    <?php $cs->registerCssFile($themePath.'/assets/font-awesome/css/font-awesome.min.css'); ?>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>

                <?php print_r($content); ?>

<body id="page-top" class="index">
    <?php
    /**
 * JavaScripts
 */
    $cs
//            ->registerScriptFile($themePath.'/assets/js/jquery-1.10.2.js',CClientScript::POS_END)    
            ->registerScriptFile($themePath.'/assets/js/bootstrap.min.js',CClientScript::POS_END)
            ->registerScriptFile($themePath.'/assets/js/jquery.easing.min.js',CClientScript::POS_END)
            ->registerScriptFile($themePath.'/assets/js/classie.js',CClientScript::POS_END)
            ->registerScriptFile($themePath.'/assets/js/cbpAnimatedHeader.js',CClientScript::POS_END)
            ->registerScriptFile($themePath.'/assets/js/freelancer.js',CClientScript::POS_END)
            ->registerScript('tooltip',
            "   $('[data-toggle=\"tooltip\"]').tooltip();
                $('[data-toggle=\"popover\"]').tooltip()"
            ,CClientScript::POS_READY);
    ?>
    
    <?php   // $cs->registerScriptFile($themePath.'/assets/js/jquery-1.10.2.js',CClientScript::POS_END); ?>
    <?php  // $cs->registerScriptFile($themePath.'/assets/js/bootstrap.min.js',CClientScript::POS_END); ?>
    
  

</body>

</html>
