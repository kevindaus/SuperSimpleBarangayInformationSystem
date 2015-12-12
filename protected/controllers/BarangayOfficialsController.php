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
				'actions'=>array('index','list','delete','view','update'),
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
	    if(isset($_POST['BarangayOfficials']))
	    {
	        $model->attributes=$_POST['BarangayOfficials'];
	        /*retrieve the uploaded file */
            $uploadedFileObject = CUploadedFile::getInstance($model, 'profile_image');
            if($uploadedFileObject){
            	$newFilename = uniqid() . $uploadedFileObject->getName();
                $ouputfile = Yii::getPathOfAlias("imageUploads") . '/'.$newFilename;
                $uploadedFileObject->saveAs($ouputfile);
                $model->profile_image = $newFilename;
            }
            $termFrom  = sprintf("first day of %s %s",$_POST['term_from_month'] , $_POST['term_from_year']);
            $termTo  = sprintf("last day of %s %s",$_POST['term_to_month'] , $_POST['term_to_year']);
			$termFrom = date("Y-m-d H:i:s" , strtotime($termFrom));
			$termTo = date("Y-m-d H:i:s" , strtotime($termTo));
            $model->term_from = $termFrom;
            $model->term_to = $termTo;

	        /*save to model*/
	        if($model->save())
	        {
	        	Yii::app()->user->setFlash("success","<strong>Saved</strong> : New record saved");
	        	$this->redirect(array("view",'id'=>$model->id));
	        }
	    }
	    $this->render('index',array('model'=>$model));				
	}
	public function actionUpdate($barangayOfficialId)
	{
		$model = BarangayOfficials::model()->findByPk($barangayOfficialId);
	    if(isset($_POST['BarangayOfficials']))
	    {
	    	$oldProfile = $model->profile_image;
	        $model->attributes=$_POST['BarangayOfficials'];
	        /*retrieve the uploaded file */
            $uploadedFileObject = CUploadedFile::getInstance($model, 'profile_image');
            if($uploadedFileObject){
            	$newFilename = uniqid() . $uploadedFileObject->getName();
                $ouputfile = Yii::getPathOfAlias("imageUploads") . '/'.$newFilename;
                $uploadedFileObject->saveAs($ouputfile);
                $model->profile_image = $newFilename;
            }else{
            	$model->profile_image = $oldProfile;
            }
            $termFrom  = sprintf("first day of %s %s",$_POST['term_from_month'] , $_POST['term_from_year']);
            $termTo  = sprintf("last day of %s %s",$_POST['term_to_month'] , $_POST['term_to_year']);
			$termFrom = date("Y-m-d H:i:s" , strtotime($termFrom));
			$termTo = date("Y-m-d H:i:s" , strtotime($termTo));
            $model->term_from = $termFrom;
            $model->term_to = $termTo;

	        /*save to model*/
	        if($model->save())
	        {
	        	Yii::app()->user->setFlash("success","<strong>Saved</strong> : New record saved");
	        	$this->redirect(array("view",'id'=>$model->id));
	        }
	    }
	    $this->render('index',array('model'=>$model));
	}
	public function actionList()
	{ 
		$model = new BarangayOfficials('search');
		$this->render('list', array('model'=>$model));
	}
    public function actionView($id){
        $model = BarangayOfficials::model()->findByPk($id);
        if(!$model){
            throw new CHttpException(404, "Sorry we cant find that barangay official's record");
        }
        $this->render("view", compact("model"));
    }
}