<?php

/**
 * This is the model class for table "{{goods_attr}}".
 *
 * The followings are the available columns in table '{{goods_attr}}':
 * @property integer $id
 * @property integer $goods_id
 * @property integer $attr_id
 * @property integer $attr_value_id
 * @property integer $is_sku
 * @property integer $sku_id
 * @property integer $creation_time
 *
 * The followings are the available model relations:
 * @property AttributeValue $attr
 * @property Goods $goods
 * @property GoodsSku $sku
 */
class GoodsAttr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goods_attr}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, attr_id, attr_value_id', 'required'),
			array('goods_id, attr_id, attr_value_id, is_sku, sku_id, creation_time', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, goods_id, attr_id, attr_value_id, is_sku, sku_id, creation_time', 'safe', 'on'=>'search'),
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
			'attr' => array(self::BELONGS_TO, 'AttributeValue', 'attr_id'),
			'goods' => array(self::BELONGS_TO, 'Goods', 'goods_id'),
			'sku' => array(self::BELONGS_TO, 'GoodsSku', 'sku_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'goods_id' => 'Goods',
			'attr_id' => 'Attr',
			'attr_value_id' => 'Attr Value',
			'is_sku' => 'Is Sku',
			'sku_id' => 'Sku',
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
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('attr_id',$this->attr_id);
		$criteria->compare('attr_value_id',$this->attr_value_id);
		$criteria->compare('is_sku',$this->is_sku);
		$criteria->compare('sku_id',$this->sku_id);
		$criteria->compare('creation_time',$this->creation_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsAttr the static model class
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
