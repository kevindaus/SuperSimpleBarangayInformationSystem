<?php
/* @var $this ResidentsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Residents',
);

$this->menu=array(
	array('label'=>'Create Residents', 'url'=>array('create')),
	array('label'=>'Manage Residents', 'url'=>array('admin')),
);
?>

<h1>Residents</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
