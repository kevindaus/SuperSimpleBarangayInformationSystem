<?php 
	$this->layout = "no_layout";
	$currentBarangayModel  = BarangayInfo::model()->find();
	$baseUrl = Yii::app()->theme->baseUrl; 
?>
<!DOCTYPE html>
<html>
<body>
<table width="100%">
	<tbody>
		<tr>
			<td style="text-align: right;"><img src="<?php echo 'data:image/png;base64,'.base64_encode(file_get_contents(Yii::getPathOfAlias("application").'/../themes/abound/img/barangaylogo.png')) ?>"></td>
			<td>
				<div>
					Republic of the Philippines <br>
					Province of <?php echo ucfirst($currentBarangayModel->province) ?> <br>
					Municipality of <?php echo ucfirst($currentBarangayModel->municipality) ?> <br>
					<strong>BARANGAY <?php echo strtoupper($currentBarangayModel->barangay)?></strong> <br></td>
				</div>
		</tr>
	</tbody>
</table>
<hr style="border: 2px solid black;padding: 0px;clear:both">
<br>
<center><h1>CERTIFICATE OF BARANGAY CLEARANCE</h1>	</center>

<p>
	To whom it may concern:
</p>
<p style='text-indent: 71px;'>
	THIS IS TO CERTIFY that <?php echo ucfirst($model->salutation) ?>. 
	<?php echo ucfirst($model->firstname) ?> 
	<?php echo strtoupper($model->middle_name[0]) ?>. 
	<?php echo ucfirst($model->lastname) ?> 
	<?php echo $model->getAge() ?> years old, is a bonafide resident of 
	Brgy. <?php echo $currentBarangayModel->barangay ?>,
	<?php echo ucfirst($currentBarangayModel->municipality) ?>, 
	<?php echo ucfirst($currentBarangayModel->province) ?>.
</p>
<p style='text-indent: 71px;'>
	As per records in this office on the implementation of P.D. 1508 
	otherwise known as Katarungang Pambarangay Law,
	 and other existing laws, rules and regulations, 
	 andordinances, no case was filed against current subject.
</p>
<p style='text-indent: 71px;'>
	THIS CERTIFIES FURTHER,
	that 
	<?php echo ucfirst($model->salutation) ?>
	<?php echo ucfirst($model->firstname) ?> 
	<?php echo strtoupper($model->middle_name[0]) ?>. 
	<?php echo ucfirst($model->lastname) ?> 
	is known as a person of good moral character.
</p>
<p style='text-indent: 71px;'>
	SIGNED AND ISSUED this 
	<?php echo date("jS") ?> day of 
	<?php echo date("F") ?>, 
	 at 
	Brgy. <?php echo $currentBarangayModel->barangay ?>,
	<?php echo ucfirst($currentBarangayModel->municipality) ?>, 
	<?php echo ucfirst($currentBarangayModel->province) ?>.
</p>


<br>
<br>

<p style="text-align: right;margin: 0px;">
	<strong><?php echo strtoupper($punongbarangayFull) ?></strong> <br>
</p>
<p style="text-align: right;padding-right: 28px;margin: 0px;">
	Punong Barangay
</p>

<p style="margin:0px">
	<strong style="margin:0px"><?php echo strtoupper($secretaryFull) ?></strong> <br>
</p>
<p style="padding-left: 28px;margin: 0px;">
	Secretary
</p>



<p>
<table style="border: 1px solid black;padding: 13px;">
		<tr>
			<td></td>
			<td>
				<p style="text-decoration: underline;margin: 30px 0px;text-transform: uppercase">
					
				</p>
			</td>
		</tr>
		<tr>
			<td>Signature of the Taxpayer :</td>
			<td>
				<p style="text-decoration: underline;margin: 5px 0px;text-transform: uppercase">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
			</td>
		</tr>
		<tr>
			<td>Community Tax Certificate No. :</td>
			<td>
				<p style="text-decoration: underline;margin: 5px 0px;text-transform: uppercase">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				
			</td>
		</tr>
		<tr>
			<td>Issued on :</td>
			<td>
				<p style="text-decoration: underline;margin: 5px 0px;text-transform: uppercase">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				

			</td>
		</tr>
		<tr>
			<td>Issued at : </td>
			<td>
				<p style="text-decoration: underline;margin: 5px 0px;text-transform: uppercase">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				

			</td>
		</tr>
		<tr>
			<td>Amount Paid : </td>
			<td>
				<p style="text-decoration: underline;margin: 5px 0px;text-transform: uppercase">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</p>
				
			</td>
		</tr>
</table>
</p>
</body>
</html>