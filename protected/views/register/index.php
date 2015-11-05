<?php 
/* 
@var $this RegisterController 
*/
$birthdayDateArr = array();
foreach (range(1, 31) as $curData) {
	$birthdayDateArr["$curData"] = $curData;
}
$baseUrl = Yii::app()->theme->baseUrl; 
?>
<style type="text/css">
	label {
		margin-top: 5px;
	}
</style>








<div class='registration-form-container'>
	<h1>
		<img src="<?php echo $baseUrl ?>/img/Male-user-add-icon.64.png">
		Register Resident
	</h1>

	<?php /** @var BootActiveForm $form */
		$form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		    'id'=>'horizontalForm',
		)); ?>

		<?php 
			$this->widget('bootstrap.widgets.TbAlert', array(
			    'fade'=>true, // use transitions?
			    'closeText'=>'×', // close link text - if set to false, no close link is displayed
			    'alerts'=>array( // configurations per alert type
				    'error'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
				    'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
			    ),
			)); 
		?>

		<fieldset>
			<legend>Account Information : <small style="color: black">You will be needing this to generate a barangay clearance</small></legend>
		</fieldset>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'username'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'username'); ?>
	    		<br><?php echo $form->error($residentRecord,'username'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'password'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->passwordField($residentRecord,'password'); ?>
	    		<br><?php echo $form->error($residentRecord,'password'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'retypePassword'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->passwordField($residentRecord,'retypePassword'); ?>
	    		<br><?php echo $form->error($residentRecord,'retypePassword'); ?>
			</div>
			<div class="clearfix"></div>
		</div>

		<fieldset>
			<legend>Personal Information</legend>
		</fieldset>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'salutation'); ?>
			</div>
			<div style="text-align:left" class="span6">
			<?php echo CHtml::activeDropDownList($residentRecord, 'salutation', array("Ms"=>"Ms","Mrs"=>"Mrs","Mr"=>"Mr"), array("prompt"=>'Title')); ?>
	    		<br><?php echo $form->error($residentRecord,'salutation'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'firstname'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'firstname'); ?>
	    		<br><?php echo $form->error($residentRecord,'firstname'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'lastname'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'lastname'); ?>
	    		<br><?php echo $form->error($residentRecord,'lastname'); ?>
			</div>
			<div class="clearfix"></div>
		</div>

		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'middle_name'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'middle_name'); ?>
	    		<br><?php echo $form->error($residentRecord,'middle_name'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'birthday'); ?>
			</div>
			<div style="text-align:left" class="span6">

				<?php echo CHtml::activeDropDownList($residentRecord, 'birthdayDate', $birthdayDateArr ,  array('prompt'=>"Day","style"=>"width: 84px;")); ?>
				<?php echo CHtml::activeDropDownList($residentRecord, 'birthdayMonth',  CalendarHelper::retrieveYearAsArray() ,  array('prompt'=>"Month","style"=>"width: 134px;")); ?>
				<br>
				<?php echo CHtml::activeTextField($residentRecord, 'birthdayYear', array('placeholder'=>"Year")); ?>
	    		<br><?php echo $form->error($residentRecord,'birthday'); ?>
			</div>
			<div class="clearfix"></div>
		</div>


		<fieldset>
			<legend>Contact Information</legend>
		</fieldset>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'postal_code'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'postal_code'); ?>
	    		<br><?php echo $form->error($residentRecord,'postal_code'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'mobile_phone_number'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'mobile_phone_number'); ?>
	    		<br><?php echo $form->error($residentRecord,'mobile_phone_number'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'email_address'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'email_address'); ?>
	    		<br><?php echo $form->error($residentRecord,'email_address'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		

		<fieldset>
			<legend>Address Information</legend>
		</fieldset>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'house_number'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'house_number'); ?>
	    		<br><?php echo $form->error($residentRecord,'house_number'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'street_name'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'street_name'); ?>
	    		<br><?php echo $form->error($residentRecord,'street_name'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'barangay_name'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'barangay_name'); ?>
	    		<br><?php echo $form->error($residentRecord,'barangay_name'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'town'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'town'); ?>
	    		<br><?php echo $form->error($residentRecord,'town'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		
	
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'province'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'province'); ?>
	    		<br><?php echo $form->error($residentRecord,'province'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		

		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'country'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'country'); ?>
	    		<br><?php echo $form->error($residentRecord,'country'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		


		<fieldset>
			<legend>Residency Information</legend>
		</fieldset>

		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'resident_since'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo CHtml::activeDropDownList($residentRecord, 'residentSinceDate', $birthdayDateArr ,  array('prompt'=>"Day","style"=>"width: 84px;")); ?>
				<?php echo CHtml::activeDropDownList($residentRecord, 'residentSinceMonth', CalendarHelper::retrieveYearAsArray() ,  array('prompt'=>"Month","style"=>"width: 120px;")); ?>
				<br>
				<?php echo CHtml::activeTextField($residentRecord, 'residentSinceYear', array('placeholder'=>"Year")); ?>
	    		<br><?php echo $form->error($residentRecord,'resident_since'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
	

		<fieldset>
			<legend>Employment Information</legend>
		</fieldset>
		
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'employment_type'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo CHtml::activeDropDownList($residentRecord, 'employment_type', array("Full-time"=>"Full-time","Part-time"=>"Part-time","Casual"=>"Casual","Contract"=>"Contract","Unemployed"=>"Unemployed"),array("prompt"=>"Select Employment Type")); ?>
	    		<br><?php echo $form->error($residentRecord,'employment_type'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'employment_company'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'employment_company'); ?>
	    		<br><?php echo $form->error($residentRecord,'employment_company'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'occupation'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'occupation'); ?>
	    		<br><?php echo $form->error($residentRecord,'occupation'); ?>
			</div>
			<div class="clearfix"></div>
		</div>


		<fieldset>
			<legend>Other Information Information</legend>
		</fieldset>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'height'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'height',array('placeholder'=>"in cm")); ?>
	    		<br><?php echo $form->error($residentRecord,'height'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'weight'); ?>
			</div>
			<div style="text-align:left" class="span6">
				<?php echo $form->textField($residentRecord,'weight',array('placeholder'=>"in kl")); ?>
	    		<br><?php echo $form->error($residentRecord,'weight'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
		
		<div>
			<div style="text-align:right" class="span3">
	    		<?php echo $form->labelEx($residentRecord,'blood_type'); ?>
			</div>
			<div style="text-align:left" class="span6">
				
				<?php echo CHtml::activeDropDownList($residentRecord, 'blood_type', array("A"=>"A","B"=>"B","AB"=>"AB","O"=>"O"), array('prompt'=>"Blood Type")); ?>
	    		<br><?php echo $form->error($residentRecord,'blood_type'); ?>
			</div>
			<div class="clearfix"></div>
		</div>
        <div>
        	<hr>
        	<div class="">
            	<?php echo CHtml::submitButton('Submit',array('id'=>'registration-button')); ?>
            </div>
        </div>



	<?php $this->endWidget(); ?>

</div>
