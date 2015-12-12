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
<style type="text/css">
	
.view {
}
.view h1 {
	color:#1D388E;
}

</style>


<div class="main-dashboard-container">
	<h1>Residents</h1>
	<br>
	<?php if (isset($_POST['searchField'])): ?>
		<h4>
		Showing results for "<i><?php echo $searchKey ?></i>"
		</h4>	
	<?php endif ?>
	<?php echo CHtml::beginForm(array('/residents/list'), 'post',array('class'=>'form-search form-horizontal pull-right')); ?>
	    <div class="input-append span12">
	        <input type="text" class="search-query" placeholder="Search" name='searchField'>
	        <button type="submit" class="btn"><i class="icon-search"></i></button>
	    </div>
	<?php echo CHtml::endForm(); ?>
	<div class="clearfix"></div>	
	<?php $this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	)); ?>
</div>