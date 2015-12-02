<?php 

$baseUrl = Yii::app()->theme->baseUrl; 
// Yii::app()->clientScript->registerScriptFile($baseUrl.'/plugins/jquery.org.chart/jquery.orgchart.js', CClientScript::POS_END);
// Yii::app()->clientScript->registerCssFile($baseUrl.'/plugins/jquery.org.chart/jquery.orgchart.css');

?>


<style type="text/css">
	.officialTreeList{
    	padding-left: 70px;
	}
</style>
<script type="text/javascript">
	function quickSubmit(){
		if (jQuery("#brgyOffcialsYearRange").val().length !== 0) {
			jQuery("#searchTermForm").submit();
		}
	}

</script>


<div class="main-dashboard-container">
	<?php echo CHtml::beginForm(Yii::app()->request->requestUri, 'post',array('id'=>'searchTermForm')); ?>
		<div class="offset4">
			<strong style='color:white;padding-left: 32px;'>Search term by year</strong> <br>
			<?php echo CHtml::dropDownList('searchRange', '', $yearSelectRange, array('prompt'=>'Select Term','onchange'=>'quickSubmit()','id'=>'brgyOffcialsYearRange')); ?>
		</div>
	<?php echo CHtml::endForm(); ?>
	<div class="clearfix"></div>
	<hr>
	<div style='text-align:center;'>
		<div class='offset1 span8 '>
			<h1 style="color: white">
				List of Officials from <?php echo date("Y",strtotime($dateFrom)) ?> - <?php echo date("Y",strtotime($dateTo)) ?>
			</h1>
		</div>
		<div class='offset1 span8  trans-menu-panel'>
			<?php foreach ($barangayOfficialsModels as $key => $value): ?>
				<?php if (strtolower($value->position) === 'punong barangay'): ?>
					<strong style="font-size: 30px">
						<?php echo strtoupper(sprintf("Hon. %s %s", $value->firstname , $value->lastname)) ?>
					</strong> 
					<br>
					<small><?php echo strtoupper($value->position) ?></small>
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<div class="clearfix"></div>
		<div class='officialTreeList'>
			<?php foreach ($barangayOfficialsModels as $key => $value): ?>
				<?php if (strtolower($value->position) !== 'punong barangay'): ?>
					<div class="trans-menu-panel" style="width: 249.953px;float:left">
						<strong style="font-size: 15px">
							<?php echo strtoupper(sprintf("Hon. %s %s", $value->firstname , $value->lastname)) ?>
						</strong> 
						<br>
						<small><?php echo strtoupper($value->position) ?></small>
					</div>
				<?php endif ?>
			<?php endforeach ?>
			<div class="clearfix"></div>			
		</div>
	</div>
</div>