<?php 

/**
* CalendarHelpder
*/
class CalendarHelper
{
	public static function retrieveYearAsArray()
	{
		/*generate month list*/
		$index = 1;
		$monthList = array();
		while ($index <= 12) {
			$monthList["$index"] =  date('F', mktime(0,0,0,$index, 1, date('Y')));
			$index++;
		}
		return $monthList;
	}

}