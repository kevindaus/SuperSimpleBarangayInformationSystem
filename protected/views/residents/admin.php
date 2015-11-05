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

<h1>Manage Residents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'residents-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'salutation',
		'firstname',
		'lastname',
		/*
		'middle_name',
		'birthday',
		'postal_code',
		'mobile_phone_number',
		'house_number',
		'street_name',
		'barangay_name',
		'town',
		'province',
		'country',
		'email_address',
		'employment_type',
		'employment_company',
		'occupation',
		'height',
		'weight',
		'blood_type',
		'resident_since',
		'date_record_created',
		'date_record_updated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
