<?php

class SiteController extends Controller
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
			array('allow',
				'actions'=>array('error','login','logout','visionMission'),
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
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->layout = "column2";		
		$punongbarangay = "";
		$secretary = "";
		$criteriaPunongbarangay = new CDbCriteria;
		$criteriaPunongbarangay->compare("position",'punong barangay');
		$criteriaPunongbarangay->order = "date_record_created DESC";

		$criteriaSecretary = new CDbCriteria;
		$criteriaSecretary->compare("position",'secretary');
		$criteriaSecretary->order = "date_record_created DESC";

		$punongBarangaMdl = BarangayOfficials::model()->find($criteriaPunongbarangay);
		$secretary = BarangayOfficials::model()->find($criteriaSecretary);

		if (!$punongBarangaMdl) {
			$barangayOfficialsLink = CHtml::link('Click here', array('/barangayOfficials'));
			throw new CHttpException(404,"Cant find punong barangay record."."Please register a <strong>punong barangay</strong> official. <br>".$barangayOfficialsLink);
		}
		if (!$secretary) {
			$barangayOfficialsLink = CHtml::link('Click here', array('/barangayOfficials'));
			throw new CHttpException(404,"Cant find secretary record."."Please register a <strong>secretary</strong> official. <br>".$barangayOfficialsLink);
		}
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login()){
				$this->redirect("/");
			}
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	public function actionVisionMission()
	{
		$model = BarangayInfo::model()->find();
		if (!$model) {
			throw new CHttpException(404,"Cant find Barangay Information . Please run the migration to import default barangay information or contact the developers.");
		}
		$vision = $model->vision ; 
		$mission = $model->mission; 
		$this->render('visionMission',compact('vision','mission'));
	}
}