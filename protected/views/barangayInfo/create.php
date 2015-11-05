<?php
/* @var $this BarangayInfoController */
/* @var $model BarangayInfo */

$this->breadcrumbs=array(
	'Barangay Infos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List BarangayInfo', 'url'=>array('index')),
	array('label'=>'Manage BarangayInfo', 'url'=>array('admin')),
);
?>


<div class="main-dashboard-container">
  <h1>Create BarangayInfo</h1>
    <div class="span5 offset1">
    <?php $this->renderPartial('_form', array('model'=>$model)); ?>
    <div class="clearfix"></div>
  </div>
</div>