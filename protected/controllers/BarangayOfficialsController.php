<?php 

/**
* BarangayOfficialsController
*/
class BarangayOfficialsController extends Controller
{
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', 
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
				'actions'=>array('index','list','delete'),
				'users'=>array('admin'),
			),
			array('deny',  
				'users'=>array('*'),
			),
		);
	}	
	public function actionDelete($barangayOfficialId)
	{
		$model = BarangayOfficials::model()->findByPk(intval($barangayOfficialId));
		if ($model) {
			$model->delete();
			Yii::app()->user->setFlash("success","<strong>Success</strong> : Barangay official record deleted.");
			$this->redirect(array('barangayOfficials/list'));
		}else{
			throw new CHttpException(404,"Cant find barangay official record");
		}
	}
	public function actionIndex()
	{
	   $model=new BarangayOfficials('create');
		
	    if(isset($_POST['ajax']) && $_POST['ajax']==='barangay-officials-create-form')
	    {
	        echo CActiveForm::validate($model);
	        Yii::app()->end();
	    }
	    if(isset($_POST['BarangayOfficials']))
	    {
	        $model->attributes=$_POST['BarangayOfficials'];
	        if($model->save())
	        {
	        	Yii::app()->user->setFlash("success","<strong>Saved</strong> : New record saved");
	        	$this->redirect("/barangayOfficials");
	        }
	    }
	    $this->render('index',array('model'=>$model));				
	}
	public function actionList()
	{ 
		$model = new BarangayOfficials('search');
		$this->render('list', array('model'=>$model));
	}
}