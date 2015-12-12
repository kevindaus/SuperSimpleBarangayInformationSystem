<?php

class ResidentsController extends Controller
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
				'actions'=>array('create','update','list','view','grid'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
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
		$model=new Residents;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Residents']))
		{
			$model->attributes=$_POST['Residents'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
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
		Yii::import('application.libs.Zebra_Image.Zebra_Image');
		$model=$this->loadModel($id);
		if(isset($_POST['Residents']))
		{
			$oldProfilePic = $model->profile_picture;
			$model->attributes=$_POST['Residents'];
			$model->scenario = "update";

			if (!empty($model->profile_picture) && strpos($model->profile_picture,":image") ) {
				/*process profile picture*/
				$foto = str_replace('data:image/png;base64,', '', $model->profile_picture);
				$foto = str_replace(' ', '+', $foto);
				$data_foto = base64_decode($foto);				
				$currentUserFileName = sprintf("%s_%s_%s_%s", $model->firstname , $model->middle_name  , $model->lastname,uniqid());
				$filename = $currentUserFileName.'.png';
				$filepath = YiiBase::getPathOfAlias("webroot.themes.abound.uploads").'/'.$filename;
				$writeToDisk = file_put_contents($filepath, $data_foto);				
				//remove extra space
				//
				$image = new Zebra_Image();
				$image->source_path = $filepath;
				$image->target_path = $filepath;
				$image->jpeg_quality = 100;
				$image->preserve_aspect_ratio = true;
				$image->enlarge_smaller_images = true;
				$image->preserve_time = true;
				$image->resize(300, 300, ZEBRA_IMAGE_CROP_TOPLEFT);
				// 
				// 
				$model->profile_picture = basename($filepath);
			}else{
				$model->profile_picture = $oldProfilePic;
			}
			/*proceed saving*/
			if($model->save()){
				$this->redirect(array('view','id'=>$model->id));
			}else{
				Yii::app()->user->setFlash("error",CHtml::errorSummary($model));
				$this->redirect(array('update','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'residentRecord'=>$model,
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
	public function actionList()
	{
		$model = new Residents('search');
		$model->unsetAttributes();
		$searchKey = @$_POST['searchField'];
		$dataProvider = $model->search();
		if (Yii::app()->request->isPostRequest) {
			if (isset($_POST['searchField'])) {
				foreach ($model->attributes as $key => $value) {
					$model->$key = $_POST['searchField'];
				}
				$dataProvider =$model->searchResidentList();
				$model->unsetAttributes();
			}
		}
		if (isset($_GET['Residents'])) {
			$model->attributes = $_GET['Residents'];
			$dataProvider = $model->search();
		}
		$this->render('admin',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
			'searchKey'=>$searchKey,
		));
	}
	public function actionGrid()
	{
		$model = new Residents('search');
		$model->unsetAttributes();
		$searchKey = @$_POST['searchField'];
		$dataProvider = $model->search();
		if (Yii::app()->request->isPostRequest) {
			if (isset($_POST['searchField'])) {
				foreach ($model->attributes as $key => $value) {
					$model->$key = $_POST['searchField'];
				}
				$dataProvider =$model->searchResidentList();
				$model->unsetAttributes();
			}
		}
		if (isset($_GET['Residents'])) {
			$model->attributes = $_GET['Residents'];
			$dataProvider = $model->search();
		}
		$this->render('grid',array(
			'dataProvider'=>$dataProvider,
			'model'=>$model,
			'searchKey'=>$searchKey,
		));		
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Residents('search');
		$model->unsetAttributes();
		if(isset($_GET['Residents']))
			$model->attributes=$_GET['Residents'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Residents the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Residents::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Residents $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='residents-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
