<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='/layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

    public $seo = array(
        'description' => '这是 description',
        'keywords' => 'keywords',
        'title' => 'title',
    );		//seo信息


	public $navActive;
	public $menuName;

	protected $_view = array();

    /**
     * 用于上传图片时,覆盖掉COOKIE(火狐下)
     * @author LvJianHua v2014/08/20
     */
    public function init()
    {
        $sessionName = ini_get('session.name');
        if ($sessionName && isset($_POST[$sessionName]) && $_POST[$sessionName]) {
            $session = Yii::app()->session;
            $session->close();
            $session->sessionID = $_POST[$sessionName];
            $session->open();
        }

        parent::init();
    }


	//重写渲染
	public function render($view,$data=null,$return=false)
	{
		//设置自定义
		//CHtml::$afterRequiredLabel = ' <span class="required">*</span>:';

		if($data===null) $data=$this->_view;

		if($return)
			return parent::render($view, $data, $return);
		else
			parent::render($view, $data, $return);
	}

	//常规跳转页面
	public function customRedirect($message,$url='',$time=3,$is_get=false){

		$url = $url ? $url : (Yii::app()->params['baseUrl']);

		//要跳转的URL
		Yii::app()->member->setFlash('re_url',$url);

		//要显示的提示信息
		Yii::app()->member->setFlash('re_msg',$message);

		//跳转等待时间
		Yii::app()->member->setFlash('re_time',$time);

		//强制使用
		$str = $is_get ? '&is_get=true&re_msg='.$message.'&re_url='.$url.'&re_time='.$time:'';

		$this->redirect(Yii::app()->createUrl('site/redirect?rand='.rand(20,100).$str));
	}

	//成功跳转
	public function successRedirect($msg, $url=''){
		Yii::app()->user->setFlash('message',$msg);
		Yii::app()->user->setFlash('status','success');
		if(empty($url)){
			$url = Yii::app()->request->urlReferrer;//$_SERVER['HTTP_REFERER']
		}
		$this->redirect($url);
	}

	//失败跳转
	public function errorRedirect($msg, $url=''){
		Yii::app()->user->setFlash('message',$msg);
		Yii::app()->user->setFlash('status','warning');
		if(empty($url)){
			$url = Yii::app()->request->urlReferrer;
		}
		$this->redirect($url);
	}


	//过滤器
    public function filters()
    {

        // $module=$this->getModule();

        // //超级用户，拥有一切权限，不做权限检查
        // if (User::model()->isRoot(Yii::app()->user->id)) {
        //     return array();
        // }

        // //前台不做权限验证,即只对后台做权限
        // if ($module && in_array($module->id, array('admin'))) {
        //     return array(
        //         'accessControl',
        //     );
        // }

        return array();
    }

	//访问控制规则
	public function accessRules(){

		//把当前访问的模块id,控制器id,动作id放入$arr中，例如
		// $arr = array('admin', 'user', 'create');
		// $arr = array();
		// $arr[] = $this->getAction()->getId();
		// $arr[] = $this->getId();
		// if($this->getModule() !== null ){
		// 	$arr[] = $this->getModule()->getId();
		// }
		// $arr = array_reverse($arr);

		// //组合成如下格式
		// //admin.*
		// //admin.user.*
		// //admin.user.create
		// $allow = array();
		// for($i=1; $i<count($arr); $i++){
		// 	$allow[] = implode('.', array_slice($arr, 0, $i)) . '.*';
		// }
		// $allow[] = implode('.', $arr);

		//返回规则
		return array(
			// array('allow',
			// 	'roles'=>$allow,
			// ),
			array('deny',
				'users'=>array('*'),
				'message'=>'您未被授权访问此模块!',
			),
		);

	}

}
