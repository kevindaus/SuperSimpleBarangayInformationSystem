<?php
/* @var $this BarangayInfoController */
/* @var $model BarangayInfo */

$this->breadcrumbs=array(
	'Barangay Infos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List BarangayInfo', 'url'=>array('index')),
	array('label'=>'Create BarangayInfo', 'url'=>array('create')),
	array('label'=>'Update BarangayInfo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete BarangayInfo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage BarangayInfo', 'url'=>array('admin')),
);
?>

<h1>View BarangayInfo #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'province',
		'municipality',
		'barangay',
		'punong_barangay',
		'secretary',
		'date_updated',
	),
)); ?>
