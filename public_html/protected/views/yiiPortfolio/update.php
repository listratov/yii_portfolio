<?php
/* @var $this YiiPortfolioController */
/* @var $model YiiPortfolio */

$this->breadcrumbs=array(
	'Yii Portfolios'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Все портфолио', 'url'=>array('index')),
	array('label'=>'Создать Портфолио', 'url'=>array('create')),
	array('label'=>'Показать все портфолио', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление порфолио', 'url'=>array('admin')),
);
?>

<div class="container">
    
    <div class="row">
                <div class="col-lg-12 text-center">
                   <h3>Обновление информаци Портфолио</h3>
                    <hr class="star-primary">
                </div>
            </div>
    
    <?php // echo $model->id; ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>