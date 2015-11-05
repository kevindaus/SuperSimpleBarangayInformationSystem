<?php
/* @var $this ResidentsController */
/* @var $model Residents */

$this->breadcrumbs=array(
	'Residents'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Residents', 'url'=>array('index')),
	array('label'=>'Create Residents', 'url'=>array('create')),
	array('label'=>'View Residents', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Residents', 'url'=>array('admin')),
);
?>

<h1>Update Residents <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>