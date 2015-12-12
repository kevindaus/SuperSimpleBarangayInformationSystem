<?php 

/**
* SeedResidentsCommand
*/
class SeedResidentsCommand extends CConsoleCommand
{
	
	public function actionIndex()
	{
		// Residents::model()->deleteAll();
		foreach (range(0, 5) as $key => $value) {
			$fakerObj = Faker\Factory::create();
			$model = new Residents('createNewRecord');
			$model->salutation = $fakerObj->title;
			$model->firstname = $fakerObj->firstName;
			$model->lastname = $fakerObj->lastName;;
			$model->middle_name = $fakerObj->firstName;
			$model->blood_type = "O";
			$model->house_number = $fakerObj->buildingNumber;
			$model->street_name = $fakerObj->streetName;
			$model->barangay_name = $fakerObj->streetName;
			$model->mobile_phone_number = "0906".rand(1111111, 9999999);
			$model->town = "Solano";
			$model->province = "Nueva Vizcaya";
			$model->country = "Philippines";
			$model->birthdayYear = date("Y");
			$model->birthdayMonth = date("m");
			$model->birthdayDate = date("d");
			$model->residentSinceYear = date("Y");
			$model->residentSinceMonth = date("m");
			$model->residentSinceDate = date("d");
			$model->employment_type = "Full-time";

			if ($model->save()) {
				echo "New record created \r\n";
			}else{
				echo CHtml::errorSummary($model);
				die();
			}
		}
	}

}