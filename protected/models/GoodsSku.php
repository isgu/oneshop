<?php

/**
 * This is the model class for table "{{goods_sku}}".
 *
 * The followings are the available columns in table '{{goods_sku}}':
 * @property integer $id
 * @property integer $goods_id
 * @property integer $stock
 * @property string $price
 * @property string $code
 * @property string $sku_name
 * @property integer $creation_time
 * @property integer $update_time
 * @property integer $status
 * @property integer $sort
 *
 * The followings are the available model relations:
 * @property GoodsAttr[] $goodsAttrs
 * @property Goods $goods
 */
class GoodsSku extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goods_sku}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('goods_id, stock, creation_time, update_time, status, sort', 'numerical', 'integerOnly'=>true),
			array('price', 'length', 'max'=>11),
			array('code', 'length', 'max'=>50),
			array('sku_name', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, goods_id, stock, price, code, sku_name, creation_time, update_time, status, sort', 'safe', 'on'=>'search'),
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
			'goodsAttrs' => array(self::HAS_MANY, 'GoodsAttr', 'sku_id'),
			'goods' => array(self::BELONGS_TO, 'Goods', 'goods_id'),
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
			'stock' => 'Stock',
			'price' => 'Price',
			'code' => 'Code',
			'sku_name' => 'Sku Name',
			'creation_time' => 'Creation Time',
			'update_time' => 'Update Time',
			'status' => 'Status',
			'sort' => 'Sort',
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
		$criteria->compare('stock',$this->stock);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('code',$this->code,true);
		$criteria->compare('sku_name',$this->sku_name,true);
		$criteria->compare('creation_time',$this->creation_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsSku the static model class
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
