<?php 

/**
* YearRangeCollection
*/
class YearRangeCollection
{
	public static function getCollection()
	{
		$yearCollection = array();
		$sqlCommand = "SELECT distinct date_format(term_from,'%Y') as monthCollection FROM `tbl_barangay_officials`";
		$resArr = Yii::app()->db->createCommand($sqlCommand)->queryAll();
		foreach ($resArr as $key => $value) {
			$yearCollection[$value['monthCollection']] = sprintf("%s - %s", $value['monthCollection'] , intval($value['monthCollection']) + 1);
		}
		return $yearCollection;
	}

}