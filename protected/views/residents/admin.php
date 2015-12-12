<?php
/* @var $this ResidentsController */
/* @var $model Residents */

$this->breadcrumbs=array(
	'Residents'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Residents', 'url'=>array('index')),
	array('label'=>'Create Residents', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#residents-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<style type="text/css">
	table.detail-view th{
		    text-align: left;
	}
</style>

<div class="update-barangay-info">




<div class="row">
<div class="span10 offset1">
<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'fade'=>true, // use transitions?
    'closeText'=>'×', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
    ),
)); ?>


<h1 style="text-align:center">List of Residents</h1>
<br>

<div style="background-color:white;padding: 20px;border-radius: 20px;">
<div class="pull-left">
	<div class="btn-group">
		<?php echo CHtml::link("<span class='icon-th'></span>", array('grid'), array('class'=>'btn btn-default')); ?>
		<?php echo CHtml::link("<span class='icon-list'></span>", array('list'), array('class'=>'btn btn-default active')); ?>
	</div>
	
	
</div>


<?php echo CHtml::beginForm(Yii::app()->request->requestUri, 'post',array('class'=>'form-search form-horizontal pull-right')); ?>
    <div class="input-append span12">
        <input type="text" class="search-query" placeholder="Search" name='searchField'>
        <button type="submit" class="btn"><i class="icon-search"></i></button>
    </div>
<?php echo CHtml::endForm(); ?>

<div class="clearfix"></div>	

<?php if (isset($_POST['searchField'])): ?>
	<h4>
	Showing results for "<i><?php echo $searchKey ?></i>"
	</h4>	
<?php endif ?>


<?php $this->widget('zii.widgets.CListView', array(
	'id'=>'residents-grid',
	'itemView'=>'_view',
	'dataProvider'=>$dataProvider,
)); ?>

</div>



</div>
</div>
</div>	