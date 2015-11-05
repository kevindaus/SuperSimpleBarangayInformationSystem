<?php 

/**
* BISWebUser
*/
class BISWebUser extends CWebUser 
{
	private $_model;

	public function getFullName()
	{
		$criteria = new CDbCriteria;
		$criteria->compare("username",Yii::app()->user->id);
		$residentModel = Residents::model()->find($criteria);
		return sprintf("%s %s.  %s",ucwords($residentModel->firstname) , ucwords($residentModel->middle_name[0]),ucwords($residentModel->lastname));
	}

	protected function loadUser($id=null)
    {
        if($this->_model===null)
        {
            if($id!==null){
				$criteria->compare("username",$id);
                $this->_model=Residents::model()->find($criteria);
            }
        }
        return $this->_model;
    }
}