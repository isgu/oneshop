<?php echo "<?php\n"; ?>


class <?php echo $this->moduleClass; ?> extends CWebModule
{
	private $_assetsUrl;

	public function init()
	{
		// this method is called when the module is being created
		// you may place code here to customize the module or the application

		// import the module-level models and components
		$this->setImport(array(
			'<?php echo $this->moduleID; ?>.models.*',
			'<?php echo $this->moduleID; ?>.components.*',
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
			// this method is called before any module controller action is performed
			// you may place customized code here
			return true;
		}
		else
			return false;
	}
}
