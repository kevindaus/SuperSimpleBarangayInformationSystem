<?php

/**
 * This is the model class for table "tbl_residents".
 *
 * The followings are the available columns in table 'tbl_residents':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $salutation
 * @property string $firstname
 * @property string $lastname
 * @property string $middle_name
 * @property string $birthday
 * @property string $postal_code
 * @property string $mobile_phone_number
 * @property string $house_number
 * @property string $street_name
 * @property string $barangay_name
 * @property string $town
 * @property string $province
 * @property string $country
 * @property string $email_address
 * @property string $employment_type
 * @property string $employment_company
 * @property string $occupation
 * @property string $height
 * @property string $weight
 * @property string $blood_type
 * @property string $resident_since
 * @property string $location_longitude
 * @property string $location_latitude
 * @property string $profile_picture
 * @property string $date_record_created
 * @property string $date_record_updated
 */
class Residents extends CActiveRecord
{
	public $retypePassword;
	public $birthdayDate;
	public $birthdayMonth;
	public $birthdayYear;
	public $residentSinceDate;
	public $residentSinceMonth;
	public $residentSinceYear;
	public $country = "Philippines";
	public $profile_picture;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_residents';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salutation, firstname, lastname, middle_name, blood_type,house_number,street_name,barangay_name,town,province,country', 'required', 'on'=>'createNewRecord' ),
			array('username', 'unique', 'on'=>'createNewRecord' ),
			array('username, password, salutation, firstname, lastname, middle_name, postal_code, mobile_phone_number, house_number, street_name, barangay_name, town, province, country, email_address, employment_type, employment_company, occupation, height, weight, blood_type', 'length', 'max'=>255, 'on'=>'createNewRecord' ),
			array('mobile_phone_number,height,weight', 'numerical', 'on'=>'createNewRecord' ),
			array('email_address', 'email', 'on'=>'createNewRecord' ),
			array('birthday', 'validateDateOfBirth', 'on'=>'createNewRecord' ),
			array('resident_since', 'validateDateOfResidency', 'on'=>'createNewRecord' ),
			array('password','checkPasswordEquality','on'=>'createNewRecord' ),
			array('profile_picture,location_longitude,location_latitude,retypePassword,birthdayDate,birthdayMonth,birthdayYear,residentSinceDate,residentSinceMonth,residentSinceYear,birthday, resident_since, date_record_created, date_record_updated','safe','on'=>'createNewRecord' ),
			array('profile_picture,birthday, resident_since, date_record_created, date_record_updated', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('birthdayDate,birthdayMonth,birthdayYear,residentSinceDate,residentSinceMonth,residentSinceYear', 'numerical', 'on'=>'update'),
			array('id, username, password, salutation, firstname, lastname, middle_name, birthday, postal_code, mobile_phone_number, house_number, street_name, barangay_name, town, province, country, email_address, employment_type, employment_company, occupation, height, weight, blood_type, resident_since, date_record_created, date_record_updated,birthdayDate,birthdayMonth,birthdayYear,residentSinceDate,residentSinceMonth,residentSinceYear', 'safe', 'on'=>'update'),
			array('id, username, password, salutation, firstname, lastname, middle_name, birthday, postal_code, mobile_phone_number, house_number, street_name, barangay_name, town, province, country, email_address, employment_type, employment_company, occupation, height, weight, blood_type, resident_since, date_record_created, date_record_updated', 'safe', 'on'=>'search'),
		);
	}
	public function checkPasswordEquality($attr,$param)
	{
		if (!empty($this->password) &&  $this->password !== $this->retypePassword) {
			$this->addError("password","Password and retyped password should match");
			$this->addError("retypePassword","Password and retyped password should match");
		}
	}
	public function validateDateOfBirth($attr,$param)
	{
		if (!checkdate(intval($this->birthdayMonth), intval($this->birthdayDate), intval($this->birthdayYear))) {
			$this->addError("birthday","Invalid date of birth , make sure that the date is valid");
		}
	}
	public function validateDateOfResidency($attr,$param)
	{
		if (!checkdate(intval($this->residentSinceMonth), intval($this->residentSinceDate), intval($this->residentSinceYear))) {
			$this->addError("resident_since","Invalid date , make sure that the date is valid");
		}
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
			'profile_picture' => 'Profile picture',
			'username' => 'Username',
			'password' => 'Password',
			'salutation' => 'Title',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'middle_name' => 'Middle Name',
			'birthday' => 'Birthday',
			'birthdayDate' => 'Birthday Date',
			'birthdayMonth' => 'Birthday Month',
			'birthdayYear' => 'Birthday Year',
			'postal_code' => 'Postal Code',
			'mobile_phone_number' => 'Mobile Phone Number',
			'house_number' => 'House Number',
			'street_name' => 'Street Name',
			'barangay_name' => 'Barangay Name',
			'town' => 'Town',
			'province' => 'Province',
			'country' => 'Country',
			'email_address' => 'Email Address',
			'employment_type' => 'Employment Type',
			'employment_company' => 'Employment Company',
			'occupation' => 'Occupation',
			'height' => 'Height',
			'weight' => 'Weight',
			'blood_type' => 'Blood Type',
			'resident_since' => 'Resident Since',
			'residentSinceDate' => 'Resident Date',
			'residentSinceMonth' => 'Resident Month',
			'residentSinceYear' => 'Resident Year',
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
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('salutation',$this->salutation,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('birthday',$this->birthday,true);
		$criteria->compare('postal_code',$this->postal_code,true);
		$criteria->compare('mobile_phone_number',$this->mobile_phone_number,true);
		$criteria->compare('house_number',$this->house_number,true);
		$criteria->compare('street_name',$this->street_name,true);
		$criteria->compare('barangay_name',$this->barangay_name,true);
		$criteria->compare('town',$this->town,true);
		$criteria->compare('province',$this->province,true);
		$criteria->compare('country',$this->country,true);
		$criteria->compare('email_address',$this->email_address,true);
		$criteria->compare('employment_type',$this->employment_type,true);
		$criteria->compare('employment_company',$this->employment_company,true);
		$criteria->compare('occupation',$this->occupation,true);
		$criteria->compare('height',$this->height,true);
		$criteria->compare('weight',$this->weight,true);
		$criteria->compare('blood_type',$this->blood_type,true);
		$criteria->compare('resident_since',$this->resident_since,true);
		$criteria->compare('date_record_created',$this->date_record_created,true);
		$criteria->compare('date_record_updated',$this->date_record_updated,true);
		$criteria->addNotInCondition("username",array("admin"));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Residents the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function beforeSave()
	{
		$isValid = true;

		if ($this->isNewRecord) {
			$this->date_record_created = date("Y-m-d H:i:s");
		}
		$this->date_record_updated = date("Y-m-d H:i:s");

		if ($this->scenario === "createNewRecord" || $this->scenario === "update" ) {
			try {
				/*format birthday*/
				$dateObj = date_create(sprintf("%s-%s-%s",$this->birthdayYear,$this->birthdayMonth,$this->birthdayDate));
				$this->birthday = date_format($dateObj,"Y-m-d H:i:s");
				/*format residency*/
				$resiDtObj = date_create(sprintf("%s-%s-%s",$this->residentSinceYear,$this->residentSinceMonth,$this->residentSinceDate));
				$this->resident_since = date_format($resiDtObj,"Y-m-d H:i:s");
				$this->password = md5($this->password);				
			} catch (Exception $e) {
				$isValid = true;
			}
		}
		return $isValid;
	}
	public function getAge()
	{
		$curbirthDate = new DateTime($this->birthday);
		$curDate = new DateTime();
		$dateDiff =  $curDate->diff($curbirthDate);
		return $dateDiff->y;
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
	public function searchResidentList()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true,"OR");
		$criteria->compare('password',$this->password,true,"OR");
		$criteria->compare('salutation',$this->salutation,true,"OR");
		$criteria->compare('firstname',$this->firstname,true,"OR");
		$criteria->compare('lastname',$this->lastname,true,"OR");
		$criteria->compare('middle_name',$this->middle_name,true,"OR");
		$criteria->compare('birthday',$this->birthday,true,"OR");
		$criteria->compare('postal_code',$this->postal_code,true,"OR");
		$criteria->compare('mobile_phone_number',$this->mobile_phone_number,true,"OR");
		$criteria->compare('house_number',$this->house_number,true,"OR");
		$criteria->compare('street_name',$this->street_name,true,"OR");
		$criteria->compare('barangay_name',$this->barangay_name,true,"OR");
		$criteria->compare('town',$this->town,true,"OR");
		$criteria->compare('province',$this->province,true,"OR");
		$criteria->compare('country',$this->country,true,"OR");
		$criteria->compare('email_address',$this->email_address,true,"OR");
		$criteria->compare('employment_type',$this->employment_type,true,"OR");
		$criteria->compare('employment_company',$this->employment_company,true,"OR");
		$criteria->compare('occupation',$this->occupation,true,"OR");
		$criteria->compare('height',$this->height,true,"OR");
		$criteria->compare('weight',$this->weight,true,"OR");
		$criteria->compare('blood_type',$this->blood_type,true,"OR");
		$criteria->compare('resident_since',$this->resident_since,true,"OR");
		$criteria->addNotInCondition("username",array("admin"));
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));		
	}
	public function beforeDelete()
	{
		if (isset($this->profile_picture) && !empty($this->profile_picture)   ) {
			/*delete the photo*/
			$imagePath = Yii::getPathOfAlias("imageUploads") . "/" . $this->profile_picture;
            @unlink($imagePath);
		}
		parent::beforeDelete();
		return true;
	}


}
