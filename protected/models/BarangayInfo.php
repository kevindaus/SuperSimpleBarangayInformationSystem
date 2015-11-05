<?php

/**
 * This is the model class for table "tbl_barangay_info".
 *
 * The followings are the available columns in table 'tbl_barangay_info':
 * @property integer $id
 * @property string $province
 * @property string $municipality
 * @property string $barangay
 * @property string $street
 * @property string $mission
 * @property string $vision
 * @property string $date_updated
 */
class BarangayInfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_barangay_info';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('province, municipality, barangay,street, mission,vision', 'required'),
			array('province, municipality, barangay,street', 'length', 'max'=>255),
			array('date_updated', 'safe'),
			array('id, province, municipality,street ,barangay, mission,vision,date_updated', 'safe', 'on'=>'search'),
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
			'province' => 'Province',
			'municipality' => 'Municipality',
			'barangay' => 'Barangay',
			'street' => 'Street',
			'mission' => 'Mission',
			'vision' => 'Vision',
			'date_updated' => 'Date Updated',
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
		$criteria->compare('province',$this->province,true);
		$criteria->compare('municipality',$this->municipality,true);
		$criteria->compare('barangay',$this->barangay,true);
		$criteria->compare('street',$this->street,true);
		$criteria->compare('mission',$this->mission,true);
		$criteria->compare('vision',$this->vision,true);
		$criteria->compare('date_updated',$this->date_updated,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BarangayInfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function behaviors(){
	  	return array(
		  	'CTimestampBehavior' => array(
		  	'class' => 'zii.behaviors.CTimestampBehavior',
		  	'updateAttribute' => 'date_updated',
		  	)
	  	);
	}

}
