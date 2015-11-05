<?php
/* @var $this BarangayInfoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Barangay Infos',
);

$this->menu=array(
	array('label'=>'Create BarangayInfo', 'url'=>array('create')),
	array('label'=>'Manage BarangayInfo', 'url'=>array('admin')),
);
?>

<h1>Barangay Infos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
