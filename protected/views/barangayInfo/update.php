<?php
/* @var $this BarangayInfoController */
/* @var $model BarangayInfo */

$this->breadcrumbs=array(
	'Barangay Infos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List BarangayInfo', 'url'=>array('index')),
	array('label'=>'Create BarangayInfo', 'url'=>array('create')),
	array('label'=>'View BarangayInfo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage BarangayInfo', 'url'=>array('admin')),
);
?>

<h1>Update BarangayInfo <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>