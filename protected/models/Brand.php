<?php

/**
 * This is the model class for table "{{brand}}".
 *
 * The followings are the available columns in table '{{brand}}':
 * @property integer $id
 * @property integer $category_id
 * @property string $zh_name
 * @property string $en_name
 * @property string $description
 * @property string $logo
 * @property string $url
 * @property integer $creat_time
 * @property integer $status
 * @property integer $sort
 *
 * The followings are the available model relations:
 * @property Category $category
 */
class Brand extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{brand}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('category_id, creat_time, status, sort', 'numerical', 'integerOnly'=>true),
			array('zh_name, en_name, description, logo, url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, category_id, zh_name, en_name, description, logo, url, creat_time, status, sort', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'category_id' => '分类',
			'zh_name' => '中文名称',
			'en_name' => '英文名称',
			'description' => '说明',
			'logo' => 'Logo',
			'url' => '品牌地址',
			'creat_time' => '创建时间',
			'status' => '状态',
			'sort' => '排序',
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
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('zh_name',$this->zh_name,true);
		$criteria->compare('en_name',$this->en_name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('creat_time',$this->creat_time);
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
	 * @return Brand the static model class
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
