<?php 

/**
* ProfileController
*/
class ProfileController  extends Controller
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
				'actions'=>array('index'),
				'users'=>array('@'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}
	public function actionIndex()
	{
		$criteria = new CDbCriteria;
		$criteria->compare("username",Yii::app()->user->id);
		$model = Residents::model()->find($criteria);
		$this->render('index', compact('model'));
	}
}