<?php
/* @var $this YiiSiteInformationController */
/* @var $model YiiSiteInformation */

$this->breadcrumbs=array(
	'Yii Site Informations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YiiSiteInformation', 'url'=>array('index')),
	array('label'=>'Manage YiiSiteInformation', 'url'=>array('admin')),
);
?>

<div class="container">
    
    <div class="row">
                <div class="col-lg-12 text-center">
                   <h3>Создание страницы с информацией сайта</h3>
                    <hr class="star-primary">
                </div>
            </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>