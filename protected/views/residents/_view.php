<?php
/* @var $this ResidentsController */
/* @var $data Residents */
$baseUrl = Yii::app()->theme->baseUrl; 

if (isset($data->profile_picture) && !empty($data->profile_picture)) {
	$publishedUrl = Yii::app()->assetManager->publish($data->profile_picture);
}
?>

<div class="view trans-menu-panel">

	<div class="pull-left" style="width: 30%;">
		<?php if (isset($data->profile_picture) && !empty($data->profile_picture)): ?>
			<?php echo CHtml::image($publishedUrl, '' ,array("class"=>"img-polaroid","style"=>"height:171px")); ?>	
		<?php endif ?>
		<?php if (!isset($data->profile_picture) || empty($data->profile_picture)): ?>
			<?php echo CHtml::image($baseUrl.'/uploads/not available.png','', array("class"=>"img-polaroid","style"=>"height:200px")); ?>
		<?php endif ?>
	</div>
	<div class="pull-left" style="width: 60%; margin:20px;font-size: 15px;background-color:white">
		<h2>
			<?php echo CHtml::link(sprintf("%s. %s %s", $data->salutation, $data->firstname , $data->middle_name , $data->lastname), array('residents/view','id'=>$data->id)); ?>
		</h2>
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$data,
			'attributes'=>array(
				array(
					'label'=>"Name",
					'value'=>sprintf("%s. %s %s", $data->salutation, $data->firstname , $data->middle_name , $data->lastname),
				),
				array(
					'label'=>"Address",
					'value'=>sprintf("%s %s %s %s, %s", $data->house_number , $data->street_name , $data->barangay_name , $data->town , $data->province  , $data->country)
				),
				'mobile_phone_number',
				array(
					'label'=>"Resident Since",
					'value'=>date("F d,Y",strtotime($data->resident_since))
				),
			),
		)); ?>
		<div class="clearfix"></div>	
		</div>
	<div class="clearfix"></div>
	
</div>