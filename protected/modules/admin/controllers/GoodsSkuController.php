<?php

class GoodsSkuController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='/layouts/column2';

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new GoodsSku;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GoodsSku']))
		{
			$model->attributes=$_POST['GoodsSku'];
			if($model->save())
				$this->successRedirect('新增成功', array('index'));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['GoodsSku']))
		{
			$model->attributes=$_POST['GoodsSku'];
			if($model->save())
				$this->successRedirect('修改成功', array('index'));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model or models.
	 */
	public function actionDelete()
	{
		if (is_array($_GET['id'])) {
			//批量删除时，传入格式为数组
			$ids = $_GET['id'];
		} else {
			//单个删除
			$ids[] = $_GET['id'];
		}

		$models = GoodsSku::model()->findAllByPk($ids);

		$rows = 0;
		foreach ($models as $model) {
			$rows += $model->delete();
		}

		if ($rows > 0)
			$this->successRedirect("成功删除 {$rows} 条记录!");
		else
			$this->errorRedirect('删除出错!');
	}


	/**
	 * Manages all models.
	 */
	public function actionIndex()
	{
		$model=new GoodsSku('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['GoodsSku']))
			$model->attributes=$_GET['GoodsSku'];

		$this->render('index',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return GoodsSku the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=GoodsSku::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param GoodsSku $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='goods-sku-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
