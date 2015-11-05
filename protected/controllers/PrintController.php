<?php 

/**
* PrintController
*/
class PrintController extends Controller
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
				'actions'=>array('barangayclearance'),
				'users'=>array('@'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}

	public function actionBarangayClearance()
	{
		$model = Residents::model()->findByAttributes(array('username'=>Yii::app()->user->id));
		$punongbarangayFull = "test test";
		$secretaryFull = "secretat asdasd";
		$this->render("barangayclearance",compact('model','punongbarangayFull','secretaryFull'));
	}




}