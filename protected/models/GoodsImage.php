<?php

/**
 * This is the model class for table "{{goods_image}}".
 *
 * The followings are the available columns in table '{{goods_image}}':
 * @property integer $id
 * @property string $url
 * @property integer $goods_id
 * @property string $position
 * @property integer $is_main
 * @property integer $create_time
 *
 * The followings are the available model relations:
 * @property Goods $goods
 */
class GoodsImage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goods_image}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('url', 'required'),
			array('goods_id, is_main, create_time', 'numerical', 'integerOnly'=>true),
			array('url, position', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, url, goods_id, position, is_main, create_time', 'safe', 'on'=>'search'),
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
			'url' => 'Url',
			'goods_id' => 'Goods',
			'position' => 'Position',
			'is_main' => 'Is Main',
			'create_time' => 'Create Time',
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
		$criteria->compare('url',$this->url,true);
		$criteria->compare('goods_id',$this->goods_id);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('is_main',$this->is_main);
		$criteria->compare('create_time',$this->create_time);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GoodsImage the static model class
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
