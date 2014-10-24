<?php

/**
 * This is the model class for table "num_appinfo".
 *
 * The followings are the available columns in table 'num_appinfo':
 * @property string $AppID
 * @property string $AppVersion
 * @property string $ScreenWidth
 * @property string $ScreenHeight
 * @property string $AppOS
 * @property string $AppExitStatus
 */
class Appinfo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'num_appinfo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('AppVersion, AppOS', 'length', 'max'=>20),
			array('ScreenWidth, ScreenHeight', 'length', 'max'=>10),
			array('AppExitStatus', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('AppID, AppVersion, ScreenWidth, ScreenHeight, AppOS, AppExitStatus', 'safe', 'on'=>'search'),
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
			'AppID' => 'App',
			'AppVersion' => 'App Version',
			'ScreenWidth' => 'Screen Width',
			'ScreenHeight' => 'Screen Height',
			'AppOS' => 'App Os',
			'AppExitStatus' => 'App Exit Status',
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

		$criteria->compare('AppID',$this->AppID,true);
		$criteria->compare('AppVersion',$this->AppVersion,true);
		$criteria->compare('ScreenWidth',$this->ScreenWidth,true);
		$criteria->compare('ScreenHeight',$this->ScreenHeight,true);
		$criteria->compare('AppOS',$this->AppOS,true);
		$criteria->compare('AppExitStatus',$this->AppExitStatus,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Appinfo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
