<?php 

/**
* RegisterController
*/
class RegisterController extends Controller
{
	public $layout='//layouts/column2';


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('form'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',
				'users'=>array('*'),
			),
		);
	}
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', 
		);
	}

	public function actionIndex()
	{
		Yii::import('application.libs.Zebra_Image.Zebra_Image');
		$residentRecord = new Residents("createNewRecord");
		if (Yii::app()->request->isPostRequest && $_POST['Residents']) {
			$residentRecord->attributes = $_POST['Residents'];
			if ($residentRecord->validate()) {
					//Decode with base64
					if (isset($residentRecord->profile_picture) && !empty($residentRecord->profile_picture) && !is_null($residentRecord->profile_picture)) {
					$foto = str_replace('data:image/png;base64,', '', $residentRecord->profile_picture);
					$foto = str_replace(' ', '+', $foto);
					$data_foto = base64_decode($foto);

					//Set photo filename
					$currentUserFileName = sprintf("%s_%s_%s_%s", $residentRecord->firstname , $residentRecord->middle_name  , $residentRecord->lastname,uniqid());
					$filename = $currentUserFileName.'.png';
					$filepath = YiiBase::getPathOfAlias("webroot.themes.abound.uploads").'/'.$filename;
					$writeToDisk = file_put_contents($filepath, $data_foto);

					//remove extra space
					$image = new Zebra_Image();
					$image->source_path = $filepath;
					$image->target_path = $filepath;
					$image->jpeg_quality = 100;
					$image->preserve_aspect_ratio = true;
					$image->enlarge_smaller_images = true;
					$image->preserve_time = true;
					$image->resize(300, 300, ZEBRA_IMAGE_CROP_TOPLEFT);
					$residentRecord->profile_picture = $filepath;
				}

				if ($residentRecord->save()) {
					Yii::app()->user->setFlash("success","<strong>Record Saved ! </strong>New Resident Record Created");
					$this->redirect(array('/register'));
				}
			}else{
				Yii::app()->user->setFlash("error",CHtml::errorSummary($residentRecord));
			}
		}
		$this->render('index',compact('residentRecord'));
	}
	public function actionPicture()
	{
		$model = Residents::model()->find();
		$this->render('picture',compact('model'));
	}
	public function actionUpload()
	{
		
	}
	public function actionForm()
	{
		/*get registration form*/
		$pdfFile  = Yii::getPathOfAlias("webroot.themes.abound.pdf").'/registration_form.pdf';
		header("Content-type:application/pdf");
		header("Content-Disposition:attachment;filename='Registration_form.pdf'");
		echo file_get_contents($pdfFile);
	}


}