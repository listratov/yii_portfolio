<?php
/* @var $this YiiPortfolioController */
/* @var $model YiiPortfolio */

$this->breadcrumbs=array(
	'Yii Portfolios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Все портфолио', 'url'=>array('index')),
	array('label'=>'Управление портфолио', 'url'=>array('admin')),
);
?>

<div class="container">
    
    <div class="row">
                <div class="col-lg-12 text-center">
                   <h3>Добавление в раздел Портфолио</h3>
                    <hr class="star-primary">
                </div>
            </div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
</div>