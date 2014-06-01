<?php
/* @var $this YiiSiteInformationController */
/* @var $model YiiSiteInformation */

$this->breadcrumbs=array(
	'Yii Site Informations'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YiiSiteInformation', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'View YiiSiteInformation', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YiiSiteInformation', 'url'=>array('admin')),
);
?>
<div class="container">
    
    <div class="row">
                <div class="col-lg-12 text-center">
                   <h3>Обновление информаци сайта</h3>
                    <hr class="star-primary">
                </div>
            </div>
    
    <?php // echo $model->id; ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>
