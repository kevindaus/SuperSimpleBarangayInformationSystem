<?php 

/**
* RegisterController
*/
class RegisterController extends Controller
{

	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}


	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('deny',
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('allow',
				'actions'=>array('index'),
				'users'=>array('*'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}

	public function actionIndex()
	{
		$residentRecord = new Residents("createNewRecord");
		if (Yii::app()->request->isPostRequest && $_POST['Residents']) {
			$residentRecord->attributes = $_POST['Residents'];
			if ($residentRecord->save()) {
				Yii::app()->user->setFlash("success","<strong>Record Saved ! </strong>New Resident Record Created<br>Your username is : <strong>$residentRecord->username</strong> and your password is <strong>$residentRecord->retypePassword</strong>");
				$this->redirect(array('/register'));
			}else{
				Yii::app()->user->setFlash("error",CHtml::errorSummary($residentRecord));
			}
		}
		$this->render('index',compact('residentRecord'));
	}

}