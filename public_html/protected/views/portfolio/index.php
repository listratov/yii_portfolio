
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top"><?=$model->siteinformations[0]->title?></a>


<?php
//BsHtml::breadcrumbs(array());
//$this->widget('bootstrap.widgets.BsBreadCrumb', array(
//    'links' => array(
//        'Library'
//    ),
//    // will change the container to ul
//    'tagName' => 'ul',
//    // will generate the clickable breadcrumb links
//    'activeLinkTemplate' => '<li><a href="{url}">{label}</a></li>',
//    // will generate the current page url : <li>News</li>
//    'inactiveLinkTemplate' => '<li>{label}</li>',
//    // will generate your homeurl item : <li><a href="/dr/dr/public_html/">Home</a></li>
//    'homeLink' => BsHtml::openTag('li') . BsHtml::icon(BsHtml::GLYPHICON_HOME) . BsHtml::closeTag('li')
//));
?><!-- breadcrumbs -->

        
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">Портфолио</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Обо мне</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Контакты</a>
                    </li>
                    <li class="page-scroll">
                      <?php // echo Yii::app()->user->loginUrl[0]; ?>
                        <span  style="color:#18bc9c; font-size: 12px;" 
                               <?php echo Yii::app()->user->isGuest ? " class='popup'" : '';  ?>
                              >
                              
                            <?php echo Yii::app()->user->isGuest ? "Вход" : "hi ".Yii::app()->user->guestName;  ?>
                        </span>
                    </li>
                    <!--/index.php/site/login-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="/images/portfolio/<?=$model->siteinformations[0]->img?>" alt="">
                    <div class="intro-text">
                        <span class="name"><?=$model->siteinformations[0]->desc?></span>
                        <hr class="star-light">
                        <span class="skills">                        
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Проекты</h2>                    	
                    <hr class="star-primary">
                    <?php if(!Yii::app()->user->isGuest) :  ?>
                    <span style=" font-size: 18px;position: absolute;top: 20px;right: 30px;">
                        <a style="color: tomato;" href="/index.php/yiiPortfolio/admin">РЕДАКТИРОВАТЬ</a></span>
                    <?php  endif; ?>
                    
                </div>
            </div>
            <div class="row">
                <?php  foreach ($model->portfolio as $value) : ?>                                    
                <div class="col-sm-4 portfolio-item">
                    <a href="<?="#portfolioModal{$value->id}" ?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/images/portfolio/<?=$value->img?>" class="img-responsive" alt="" />
                    </a>
                </div>           
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Обо мне</h2>
                    <hr class="star-light">
                     <?php if(!Yii::app()->user->isGuest) :  ?>
                    <span style=" font-size: 18px;position: absolute;top: 20px;right: 30px;">
                        <a style="color: tomato;" href="/index.php/yiiSiteInformation/update/2">РЕДАКТИРОВАТЬ</a></span>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                        <?=$model->siteinformations[0]->about?>
            </div>            
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Связь со мной</h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                   <noindex>
                        <div class="row">
                            <div class="form-group col-xs-12 floating-label-form-group">
                                <a rel="nofollow" for="name">Мой Email: </a> <a rel="nofollow" class="show-ajax" id="email"> 
                                 ( показать ) 
                                </a>
                            </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-xs-12 floating-label-form-group">
                                <a rel="nofollow" for="name">Мой Телефон: </a> <a rel="nofollow" class="show-ajax" id="phone"> 
                                 ( показать ) 
                                </a>
                            </div>
                        </div>
                     </noindex>    
                </div>
            </div>
        </div>
    </section>
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Нижний Новгород</h3>
<!--                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>-->
                    </div>
                    <div class="footer-col col-md-4">
                        <!--<h3>Around the Web</h3>-->
                        <ul class="list-inline">
                            <li><a class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li><a  class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li><a  class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li><a  class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li><a  class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Нижний Новгород</h3>
                        <!--<p>Freelance is a free to use, open source Bootstrap theme created by <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; 2014 - Mishael Morenov
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>



     <?php  foreach ($model->portfolio as $value) : ?>                                    
              <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="<?="portfolioModal{$value->id}" ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2><?=$value->title ?></h2>
                            <hr class="star-primary">
                            <img src="/images/portfolio/<?=$value->img_thumb?>" class="img-responsive img-centered" alt="">
                            <?=$value->description ?>
                            <ul class="list-inline item-details">
                                <li>Сайт: <strong><a target="_blank" href="http://<?=$value->link ?>"><?=$value->link ?></a></strong>
                                </li>
                                <li>Дата: <strong><a><?=$value->year ?></a></strong>
                                </li>
                                <li>Участие: <strong><a><?=$value->development ?></a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Закрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                     
    <?php endforeach; ?>

              
              
              
              
              