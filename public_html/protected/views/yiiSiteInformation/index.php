<?php
/* @var $this YiiSiteInformationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yii Site Informations',
);

$this->menu=array(
	array('label'=>'Create YiiSiteInformation', 'url'=>array('create')),
	array('label'=>'Manage YiiSiteInformation', 'url'=>array('admin')),
);
?>

<h1>Yii Site Informations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
