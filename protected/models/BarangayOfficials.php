<?php

/**
 * This is the model class for table "tbl_barangay_officials".
 *
 * The followings are the available columns in table 'tbl_barangay_officials':
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $position
 * @property string $term_from
 * @property string $term_to
 * @property string $profile_image
 * @property string $date_record_created
 * @property string $date_record_updated
 */
class BarangayOfficials extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_barangay_officials';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('firstname, middlename, lastname, term_from , term_to,position', 'required'),
			array('firstname, middlename, lastname, position', 'length', 'max'=>255),
			array('profile_image,term_from , term_to,date_record_created, date_record_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, firstname, middlename, lastname, position, date_record_created, date_record_updated', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'firstname' => 'Firstname',
			'middlename' => 'Middlename',
			'lastname' => 'Lastname',
			'position' => 'Position',
			'term_from' => 'Term from',
			'term_to' => 'Term to',
			'profile_image' => 'Profile picture',
			'date_record_created' => 'Date Record Created',
			'date_record_updated' => 'Date Record Updated',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('middlename',$this->middlename,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('term_from',$this->term_from,true);
		$criteria->compare('term_to',$this->term_to,true);
		$criteria->compare('profile_image',$this->profile_image,true);
		$criteria->compare('date_record_created',$this->date_record_created,true);
		$criteria->compare('date_record_updated',$this->date_record_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangayOfficials the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function beforeSave()
	{

		$this->position = strtolower($this->position);
		parent::beforeSave();
		return true;
	}
	public function behaviors(){
	  	return array(
			  	'CTimestampBehavior' => array(
			  	'class' => 'zii.behaviors.CTimestampBehavior',
			  	'createAttribute' => 'date_record_created',
			  	'updateAttribute' => 'date_record_updated',
		  	)
	  	);
	}	
	public function beforeDelete()
	{
		if (isset($this->profile_image) && !empty($this->profile_image)   ) {
			/*delete the photo*/
			$imagePath = Yii::getPathOfAlias("imageUploads") . "/" . $this->profile_image;
            unlink($imagePath);
		}
		parent::beforeDelete();
		return true;
	}
}
