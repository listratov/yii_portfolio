<?php
/* @var $this YiiPortfolioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yii Portfolios',
);

$this->menu=array(
	array('label'=>'Создать Портфолио', 'url'=>array('create')),
	array('label'=>'Управление Портфолио', 'url'=>array('admin')),
);
?>

<h1>Yii Portfolios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
