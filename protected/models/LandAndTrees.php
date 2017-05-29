<?php

/**
 * This is the model class for table "landAndTrees".
 *
 * The followings are the available columns in table 'landAndTrees':
 * @property integer $id
 * @property integer $FK_trees_id
 * @property integer $FK_meter_land_id
 * @property string $create_on
 */
class LandAndTrees extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'landAndTrees';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FK_trees_id, FK_meter_land_id', 'required'),
			array('FK_trees_id, FK_meter_land_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, FK_trees_id, FK_meter_land_id, create_on', 'safe', 'on'=>'search'),
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
			'FK_trees_id' => 'Fk Trees',
			'FK_meter_land_id' => 'Fk Meter Land',
			'create_on' => 'Create On',
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
		$criteria->compare('FK_trees_id',$this->FK_trees_id);
		$criteria->compare('FK_meter_land_id',$this->FK_meter_land_id);
		$criteria->compare('create_on',$this->create_on,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LandAndTrees the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
