<?php 
/**
* OrganizationChart
*/
class OrganizationalChartController extends Controller
{

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
		$this->layout = "column2";
		$yearSelectRange = array();
		$yearSelectRange = YearRangeCollection::getCollection();

		$dateFrom = date("Y-m-d H:i:s" ,strtotime(sprintf("first day of October %s", date("Y"))) );
		$dateTo = date("Y-m-d H:i:s" ,strtotime(sprintf("last day of September %s", intval(date("Y")) +  1 )) );

		if (Yii::app()->request->isPostRequest) {
			$searchRange = $_POST['searchRange'];
			$dateFrom = date("Y-m-d H:i:s" ,strtotime(sprintf("first day of October %s", $searchRange)) );
			$dateTo = date("Y-m-d H:i:s" ,strtotime(sprintf("last day of September %s", intval($searchRange) +  1 )) );
		}
		$criteria = new CDbCriteria;
		$criteria->addCondition("DATE(term_from) between :dateFrom and :dateTo");
		$criteria->params = array(
				":dateFrom"=>$dateFrom,
				":dateTo"=>$dateTo,
			);
		$barangayOfficialsModels = BarangayOfficials::model()->findAll($criteria);
		$this->render('index',compact('yearSelectRange','dateFrom','dateTo','barangayOfficialsModels'));
	}

}