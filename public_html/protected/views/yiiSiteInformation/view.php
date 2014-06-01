<?php
/* @var $this YiiSiteInformationController */
/* @var $model YiiSiteInformation */

$this->breadcrumbs=array(
	'Yii Site Informations'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List YiiSiteInformation', 'url'=>array('index')),
	array('label'=>'Create YiiSiteInformation', 'url'=>array('create')),
	array('label'=>'Update YiiSiteInformation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete YiiSiteInformation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YiiSiteInformation', 'url'=>array('admin')),
);
?>

<h1>View YiiSiteInformation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'desc',
		'author',
		'about',
		'text',
		'img',
	),
)); ?>
