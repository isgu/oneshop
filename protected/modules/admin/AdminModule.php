<?php

class AdminModule extends CWebModule
{

	private $_assetsUrl;

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'admin.models.*',
			'admin.components.*',
		));
	}

	//发布module目录中的assets目录，返回url
	public function getAssetsUrl()
	{
		if($this->_assetsUrl===null){
			$assets = $this->getBasePath().DIRECTORY_SEPARATOR . 'assets';
			$this->_assetsUrl=Yii::app()->getAssetManager()->publish($assets);
		}
		return $this->_assetsUrl;
	}

	/**
	 * @param string $value the base URL that contains all published asset files of gii.
	 */
	public function setAssetsUrl($value)
	{
		$this->_assetsUrl=$value;
	}

	public function beforeControllerAction($controller, $action)
	{
		if(parent::beforeControllerAction($controller, $action))
		{
			// //保存后台操作日志
			// $accessLog = new AccessLog();
			// $accessLog->user_id 		= (Yii::app()->user->isGuest) ? 0 : (Yii::app()->user->id);
			// $accessLog->user_ip 		= $_SERVER["REMOTE_ADDR"];
			// $accessLog->action_id 		= $action->id;
			// $accessLog->controller_id 	= $controller->id;
			// $accessLog->request_get 	= serialize($_GET);
			// $accessLog->request_post 	= serialize($_POST);
			// $accessLog->request_url 	= $_SERVER['PHP_SELF'];
			// $accessLog->created 		= time();
			// $accessLog->save();

			// //后台模块url不添加后缀
			// Yii::app()->urlManager->urlSuffix = '';

			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
