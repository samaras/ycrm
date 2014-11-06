<?php

/**
 * This is the model class for table "employee".
 *
 * The followings are the available columns in table 'employee':
 * @property integer $id
 * @property integer $departmentid
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property integer $ext
 * @property boolean $active
 * @property string $title
 * @property string $job_title
 * @property string $address1
 * @property string $address2
 * @property string $city
 * @property string $state_province
 * @property integer $country
 * @property string $mobile
 * @property string $gender
 * @property string $bank_name
 * @property string $bank_account_number
 * @property string $hiredate
 * @property string $leavedate
 */
class Employee extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'employee';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('departmentid, firstname, lastname, email, title, job_title, country, gender, hiredate', 'required'),
			array('departmentid, ext, country', 'numerical', 'integerOnly'=>true),
			array('firstname', 'length', 'max'=>20),
			array('lastname, bank_name, bank_account_number', 'length', 'max'=>40),
			array('email, address1, address2', 'length', 'max'=>60),
			array('title', 'length', 'max'=>10),
			array('job_title, city, state_province', 'length', 'max'=>30),
			array('mobile', 'length', 'max'=>15),
			array('gender', 'length', 'max'=>6),
			array('active, leavedate', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, departmentid, firstname, lastname, email, ext, active, title, job_title, city, state_province, country, gender, hiredate, leavedate', 'safe', 'on'=>'search'),
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
			'departmentid' => 'Department',
			'firstname' => 'First Name',
			'lastname' => 'Last Name',
			'email' => 'Email',
			'ext' => 'Ext',
			'active' => 'Active',
			'title' => 'Title',
			'job_title' => 'Job Title',
			'address1' => 'Address1',
			'address2' => 'Address2',
			'city' => 'City',
			'state_province' => 'State Province',
			'country' => 'Country',
			'mobile' => 'Mobile',
			'gender' => 'Gender',
			'bank_name' => 'Bank Name',
			'bank_account_number' => 'Bank Account Number',
			'hiredate' => 'Hired Date',
			'leavedate' => 'Leave Date',
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
		$criteria->compare('departmentid',$this->departmentid);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('ext',$this->ext);
		$criteria->compare('active',$this->active);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('job_title',$this->job_title,true);
		$criteria->compare('address1',$this->address1,true);
		$criteria->compare('address2',$this->address2,true);
		$criteria->compare('city',$this->city,true);
		$criteria->compare('state_province',$this->state_province,true);
		$criteria->compare('country',$this->country);
		$criteria->compare('mobile',$this->mobile,true);
		$criteria->compare('gender',$this->gender,true);
		$criteria->compare('bank_name',$this->bank_name,true);
		$criteria->compare('bank_account_number',$this->bank_account_number,true);
		$criteria->compare('hiredate',$this->hiredate,true);
		$criteria->compare('leavedate',$this->leavedate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Employee the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
