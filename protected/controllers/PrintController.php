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
		$criteriaPunongbarangay = new CDbCriteria;
		$criteriaPunongbarangay->compare("position",'punong barangay');
		$criteriaPunongbarangay->order = "date_record_created DESC";

		$criteriaSecretary = new CDbCriteria;
		$criteriaSecretary->compare("position",'secretary');
		$criteriaSecretary->order = "date_record_created DESC";

		$punongBarangaMdl = BarangayOfficials::model()->find($criteriaPunongbarangay);
		$secretary = BarangayOfficials::model()->find($criteriaSecretary);



		$punongbarangayFull = sprintf("%s %s",$punongBarangaMdl->firstname , $punongBarangaMdl->lastname);
		$secretaryFull = sprintf("%s %s",$secretary->firstname, $secretary->lastname);
		header("Content-type:application/pdf");
		header("Content-Disposition:attachment;filename='Barangay_Clearance.pdf'");
		$dompdf = new DOMPDF();
		$output1 = $this->renderPartial("barangayclearance",compact('model','punongbarangayFull','secretaryFull'),true);
		$dompdf->load_html($output1);
		$dompdf->render();
		$dompdf->stream("Barangay_Clearance.pdf");
		
	}
}