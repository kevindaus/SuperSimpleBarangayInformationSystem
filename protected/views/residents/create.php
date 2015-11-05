<?php
/* @var $this ResidentsController */
/* @var $model Residents */

$this->breadcrumbs=array(
	'Residents'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Residents', 'url'=>array('index')),
	array('label'=>'Manage Residents', 'url'=>array('admin')),
);
?>

<h1>Create Residents</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>