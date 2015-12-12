<?php
/* @var $this ResidentsController */
/* @var $model Residents */

$this->breadcrumbs=array(
	'Residents'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Residents', 'url'=>array('index')),
	array('label'=>'Create Residents', 'url'=>array('create')),
	array('label'=>'Update Residents', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Residents', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Residents', 'url'=>array('admin')),
);
?>



<h1>View Residents #<?php echo $model->id; ?></h1>


<?php
/* @var $this BarangayOfficialsController */
/* @var $model BarangayOfficials */
$baseUrl = Yii::app()->theme->baseUrl; 

?>

<style type="text/css">
    .detail-view{
        padding:20px;
    }

</style>


<div class="update-barangay-info">
<div class="row">
<div class="span10 offset1">
<br>
<br>
<div style="background-color:white;padding: 20px;border-radius: 20px;">
    <div>
        <?php if (!empty($model->profile_picture)): ?>
            <?php echo CHtml::image($baseUrl."/uploads/".basename($model->profile_picture), $model->firstname.' '.$model->middle_name.' '.$model->lastname.' image', array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
        <?php endif ?>
        <?php if (empty($model->profile_picture) ): ?>
            <?php echo CHtml::image($baseUrl."/uploads/not available.png", "image not available", array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
        <?php endif ?>
    </div> 

    <div>
	<?php $this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>array(
			'salutation',
			'firstname',
			'lastname',
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
		),
	)); ?>
   </div>

   <div class="clearfix"></div>
   <br>
   <?php echo CHtml::link('<span class="icon-pencil icon-white"></span> Update', array('update','id'=>$model->id), array('class'=>'btn btn-success')); ?>
</div>
</div>
</div>