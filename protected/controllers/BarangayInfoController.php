<?php

class BarangayInfoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
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
				'actions'=>array('updateInfo'),
				'users'=>array('@'),
			),
			array('allow', 
				'actions'=>array('admin','delete','index','view','create','update'),//only admin can access this features . if you want to see it ... better start cracking the password .. good luck
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = BarangayInfo::model()->find();
		if (is_null($model)) {
			$model = new BarangayInfo;
			$model->province = "";
			$model->municipality = "";
			$model->barangay = "";
			$model->punong_barangay = "";
			$model->secretary = "";
			$model->date_updated = "";
			$model->save(false);
		}
		$model = BarangayInfo::model()->find();
		if(isset($_POST['BarangayInfo']))
		{
			$model->attributes=$_POST['BarangayInfo'];
			if($model->save()){
				Yii::app()->user->setFlash("success","");
			}else{
				Yii::app()->user->setFlash("error","flashVal");
			}
		}
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['BarangayInfo']))
		{
			$model->attributes=$_POST['BarangayInfo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('BarangayInfo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new BarangayInfo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['BarangayInfo']))
			$model->attributes=$_GET['BarangayInfo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
	public function actionUpdateInfo()
	{
		$model = BarangayInfo::model()->find();
		if (is_null($model)) {
			$model = new BarangayInfo;
			$model->province = "";
			$model->municipality = "";
			$model->barangay = "";
			$model->date_updated = "";
			$model->save(false);
		}
		$model = BarangayInfo::model()->find();
		if(isset($_POST['BarangayInfo']))
		{
			$model->attributes=$_POST['BarangayInfo'];
			if($model->save()){

				Yii::app()->user->setFlash("success","<strong>Success</strong> : The barangay information is now updated.");
				$this->redirect("/updateInfo");
			}else{
				Yii::app()->user->setFlash("error",CHtml::errorSummary($model));

			}
		}
		$this->render('updateInfo',array(
			'model'=>$model,
		));


	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return BarangayInfo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=BarangayInfo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param BarangayInfo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='barangay-info-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
