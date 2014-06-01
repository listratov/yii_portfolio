<?php
/* @var $this YiiPortfolioController */
/* @var $model YiiPortfolio */

$this->breadcrumbs=array(
	'Yii Portfolios'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Все портфолио', 'url'=>array('index')),
	array('label'=>'Создать Портфолио', 'url'=>array('create')),
	array('label'=>'Обновить Портфолио', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить Портфолио', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены, что хотите удалить?')),
	array('label'=>'Управление Портфолио', 'url'=>array('admin')),
);
?>

<h1>View YiiPortfolio #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'author',
		'year',
		'description',
		'development',
		'link',
                'img_thumb',
		'img',
                
	),
)); ?>
