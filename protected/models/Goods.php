<?php

/**
 * This is the model class for table "{{goods}}".
 *
 * The followings are the available columns in table '{{goods}}':
 * @property integer $id
 * @property string $name
 * @property integer $brand_id
 * @property string $view_price
 * @property integer $status
 * @property integer $sort
 * @property integer $creation_time
 * @property integer $update_time
 *
 * The followings are the available model relations:
 * @property GoodsAttr[] $goodsAttrs
 * @property GoodsImage[] $goodsImages
 * @property GoodsSku[] $goodsSkus
 */
class Goods extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goods}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'required'),
			array('brand_id, status, sort, creation_time, update_time', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			array('view_price', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, brand_id, view_price, status, sort, creation_time, update_time', 'safe', 'on'=>'search'),
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
			'goodsAttrs' => array(self::HAS_MANY, 'GoodsAttr', 'goods_id'),
			'goodsImages' => array(self::HAS_MANY, 'GoodsImage', 'goods_id'),
			'goodsSkus' => array(self::HAS_MANY, 'GoodsSku', 'goods_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => '名称',
			'brand_id' => '品牌',
			'view_price' => '价格',
			'status' => '状态',
			'sort' => '排序',
			'creation_time' => '创建时间',
			'update_time' => '修改时间',
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
		$criteria->compare('brand_id',$this->brand_id);
		$criteria->compare('view_price',$this->view_price,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('sort',$this->sort);
		$criteria->compare('creation_time',$this->creation_time);
		$criteria->compare('update_time',$this->update_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Goods the static model class
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
