<?php

/**
 * This is the model class for table "{{attribute}}".
 *
 * The followings are the available columns in table '{{attribute}}':
 * @property integer $id
 * @property string $name
 * @property integer $category_id
 * @property integer $is_alias
 * @property integer $is_color
 * @property integer $is_enu
 * @property integer $is_input
 * @property integer $is_crux
 * @property integer $is_sale
 * @property integer $is_search
 * @property integer $is_must
 * @property integer $is_choose
 * @property integer $status
 * @property integer $sort
 * @property integer $creation_time
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property AttributeValue[] $attributeValues
 */
class Attribute extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{attribute}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, is_alias, is_color, is_enu, is_input, is_crux, is_sale, is_search, is_must, is_choose, status, sort, creation_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, category_id, is_alias, is_color, is_enu, is_input, is_crux, is_sale, is_search, is_must, is_choose, status, sort, creation_time', 'safe', 'on'=>'search'),
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
			'category' => array(self::BELONGS_TO, 'Category', 'category_id'),
			'attributeValues' => array(self::HAS_MANY, 'AttributeValue', 'attribute_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'category_id' => 'Category',
			'is_alias' => 'Is Alias',
			'is_color' => 'Is Color',
			'is_enu' => 'Is Enu',
			'is_input' => 'Is Input',
			'is_crux' => 'Is Crux',
			'is_sale' => 'Is Sale',
			'is_search' => 'Is Search',
			'is_must' => 'Is Must',
			'is_choose' => 'Is Choose',
			'status' => 'Status',
			'sort' => 'Sort',
			'creation_time' => 'Creation Time',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('is_alias',$this->is_alias);
		$criteria->compare('is_color',$this->is_color);
		$criteria->compare('is_enu',$this->is_enu);
		$criteria->compare('is_input',$this->is_input);
		$criteria->compare('is_crux',$this->is_crux);
		$criteria->compare('is_sale',$this->is_sale);
		$criteria->compare('is_search',$this->is_search);
		$criteria->compare('is_must',$this->is_must);
		$criteria->compare('is_choose',$this->is_choose);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('creation_time',$this->creation_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Attribute the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function itemAlias($type, $code=null){
		$items = array(
			/*'Status' => array(
				1 => '是',
				2 => '否',
			),*/
		);
		if (isset($code)){
			return isset($items[$type][$code]) ? $items[$type][$code] : false;
		}else{
			return isset($items[$type]) ? $items[$type] : false;
		}
	}


}
