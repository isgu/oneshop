<?php

/**
 * Class AdminMenu 后台菜单
 */
class AdminMenu extends CActiveRecord{
	//返回指定AR类的模型，返回的模型是一个静态的AR类的实例
	//Model的每个派生类必须重写此方法，代码如下即可
	/**
	 * @param string $className
	 * @return AdminMenu
	 */
	public static function model($className=__CLASS__){
		return parent::model($className);
	}

    /**
     * 后台菜单数据
     * @param  $key
     * @return array
     * @modify zp 2014-07-16
     */
	public function getAdminMenu($key=null){

        // $num = ContributeTmp::getAuditStatusNum();
		// $UnContributeNum = Article::getUnContributeNum();
		$menus =  array(
			'default'=>array(
				'admin.goods.index'=>array('pid'=>'default' , 'id'=>"admin.goods.index" , 'name'=>'商品管理', 'url'=>array('goods/index'),'icon_class'=>'glyphicon glyphicon-th-large'),
				'admin.category.index'=>array('pid'=>'default' , 'id'=>"admin.category.index" , 'name'=>'类型管理', 'url'=>array('category/index'),'icon_class'=>'glyphicon glyphicon-list-alt'),
			),

			'user'=>array(


				'admin.user.index'=>array('pid'=>'user','id'=>'admin.user.index','name'=>'个人中心', 'url'=>array('user/index'),'icon_class'=>'glyphicon glyphicon-user'),
				//'admin.user.profile'=>array('pid'=>'user','id'=>'admin.user.profile','name'=>'个人资料', 'url'=>array('user/profile'),'icon_class'=>'glyphicon glyphicon-lock'),
				'admin.user.authorList'=>array('pid'=>'user','id'=>'admin.user.authorList','name'=>'我的作者', 'url'=>array('user/authorList'),'icon_class'=>'glyphicon glyphicon-text-width'),

				'admin.auth.role'=>array('pid'=>'user','id'=>'admin.auth.role','name'=>'角色信息', 'url'=>array('auth/role'),'icon_class'=>'glyphicon glyphicon-link'),
				'admin.user.manage'=>array('pid'=>'user','id'=>'admin.user.manage','name'=>'用户管理', 'url'=>array('user/manage'),'icon_class'=>'glyphicon glyphicon-lock'),
				'admin.author.index'=>array('pid'=>'user','id'=>'admin.author.index','name'=>'作者管理', 'url'=>array('author/index'),'icon_class'=>'glyphicon glyphicon glyphicon-pencil'),

			),

			'member'=>array(
				'admin.noticeSys.index'=>array('pid'=>'member','id'=>'admin.noticeSys.index','name'=>'系统通知', 'url'=>array('noticeSys/index'),'icon_class'=>'glyphicon glyphicon-phone-alt'),
				'admin.member.index'=>array('pid'=>'member','id'=>'admin.member.index','name'=>'会员管理', 'url'=>array('member/index'),'icon_class'=>'glyphicon glyphicon-user'),
				//'admin.contribute.index'=>array('pid'=>'member','id'=>'admin.contribute.index','name'=>'申请管理', 'url'=>array('contribute/index'),'icon_class'=>'glyphicon glyphicon-user'),
				//'admin.memberAuthor.index'=>array('pid'=>'member','id'=>'admin.memberAuthor.article','name'=>'会员关联', 'url'=>array('memberAuthor/index'),'icon_class'=>'glyphicon glyphicon-list'),
			),
			'task'=>array(
				'admin.task.my'=>array('pid'=>'task','id'=>'admin.task.my','name'=>'我的任务','url'=>array('task/my'),'icon_class'=>'glyphicon glyphicon-user'),
				'admin.task.list'=>array('pid'=>'task','id'=>'admin.task.list','name'=>'全部任务','url'=>array('task/list'),'icon_class'=>'glyphicon glyphicon-flag'),
				'admin.task.index'=>array('pid'=>'task','id'=>'admin.task.index','name'=>'任务管理','url'=>array('task/index'),'icon_class'=>'glyphicon glyphicon-tasks'),
			),
			'product'=>array(
				'products'=>array('pid'=>'product','id'=>'products','name'=>'产品', 'url'=>array('product/index'),
					'icon_class'=>'glyphicon glyphicon-th-large'),
				'admin.product.index'=>array('pid'=>'products','id'=>'admin.product.index','name'=>'产品管理',
					'url'=>array('product/index'),'icon_class'=>'glyphicon glyphicon-inbox'),
				'admin.activeness.index'=>array('pid'=>'product','id'=>'admin.activeness.index','name'=>'订阅用户',
					'url'=>array('activeness/index'),'icon_class'=>'glyphicon glyphicon-ok-sign'),
				//'admin.scene.index'=>array('pid'=>'products','id'=>'admin.scene.index','name'=>'场景管理',
					//'url'=>array('scene/index'),'icon_class'=>'glyphicon glyphicon-picture'),
//				'admin.brand.index'=>array('pid'=>'products','id'=>'admin.brand.index','name'=>'品牌管理',
//					'url'=>array('brand/index'),'icon_class'=>'glyphicon glyphicon-bookmark'),
				//'admin.variety.index'=>array('pid'=>'products','id'=>'admin.variety.index','name'=>'品类管理',
				//	'url'=>array('variety/index'),'icon_class'=>'glyphicon glyphicon-list'),

				//'teams.index'=>array('pid'=>'product','id'=>'teams.index','name'=>'团队', 'url'=>array('team/index'),'icon_class'=>'glyphicon glyphicon-inbox'),
				//'team.index'=>array('pid'=>'teams.index','id'=>'team.index','name'=>'团队管理', 'url'=>array('team/index'),'icon_class'=>'glyphicon glyphicon-bookmark'),
				//'features.index'=>array('pid'=>'teams.index','id'=>'features.index','name'=>'功能管理', 'url'=>array('features/index'),'icon_class'=>'glyphicon glyphicon-bookmark'),
				//'domain.index'=>array('pid'=>'teams.index','id'=>'domain.index','name'=>'领域管理', 'url'=>array('domain/index'),'icon_class'=>'glyphicon glyphicon-bookmark'),

			),
			'notice'=>array(
				'admin.notice.create'=>array('pid'=>'notice','id'=>'admin.notice.create','name'=>'发消息','url'=>array('notice/create'),'icon_class'=>'glyphicon glyphicon-pencil'),
				'admin.notice.inbox'=>array('pid'=>'notice','id'=>'admin.notice.inbox','name'=>'收件箱','url'=>array('notice/inbox'),'icon_class'=>'glyphicon glyphicon-envelope'),
				'admin.notice.outbox'=>array('pid'=>'notice','id'=>'admin.notice.outbox','name'=>'发件箱','url'=>array('notice/outbox'),'icon_class'=>'glyphicon glyphicon-send')
			)


		);
		//此处判断用户是否是ROOT用户
        //if(!User::model()->isRoot( Yii::app()->user->id )){
        if(false){
			$filterMenus = Yii::app()->session['menu'];
	        //$filterMenus = array();
            if(!empty($filterMenus)){
                $menus = $filterMenus;
            }else{
                $authItems = array();
                foreach(Yii::app()->getAuthManager()->getAuthItems(2,Yii::app()->user->id) as $value){
                    $this->getRecursionChild($value,$authItems);
                }
                $filterMenus =array();

	            foreach($authItems as &$str){
		            if(substr($str,0,-1)=='*'){
			            $str = str_replace('.','\.',$str);
			            $str = str_replace('*','\w*',$str);
		            }
	            }
	            foreach($menus['default'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='default'){//由于菜单是从上到下render 所以先插父菜单
                                $filterMenus['default'][$default_item['pid']] = $menus['default'][$default_item['pid']];
                            }
				            $filterMenus['default'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }

	            foreach($menus['member'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='member'){
					            $filterMenus['member'][$default_item['pid']] = $menus['member'][$default_item['pid']];
				            }
				            $filterMenus['member'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }
	            foreach($menus['user'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='user'){
					            $filterMenus['user'][$default_item['pid']] = $menus['user'][$default_item['pid']];
				            }
				            $filterMenus['user'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }
	            foreach($menus['task'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='task'){
					            $filterMenus['task'][$default_item['pid']] = $menus['task'][$default_item['pid']];
				            }
				            $filterMenus['task'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }
	            foreach($menus['notice'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='notice'){
					            $filterMenus['notice'][$default_item['pid']] = $menus['notice'][$default_item['pid']];
				            }
				            $filterMenus['notice'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }

	            foreach($menus['product'] as $default_item){
		            foreach($authItems as $reg){
			            if(preg_match('/^'.$reg.'$/',$default_item['id'])){
				            if($default_item['pid']!='product'){
					            $filterMenus['product'][$default_item['pid']] = $menus['product'][$default_item['pid']];
				            }
				            $filterMenus['product'][$default_item['id']] =$default_item;
				            break;
			            }
		            }
	            }
	           
                Yii::app()->session['menu']=$filterMenus;
                $menus =  $filterMenus;
            }
        }
        // var_dump($menus[$key]);exit();
		if($key===null){
			return $menus;
		}else if(array_key_exists($key,$menus)){
			return $menus[$key];
		}else{
			return array();
		}
	}

	/**
	 * 根所控制器id，返回对应左则菜单名
	 * @param $controller_id
	 * @return array
	 */
	public function getMenuNameByController($controller_id){

		//控制器与菜单对应关系
		//可以通过menuName属性来覆盖
		$controllerMenu=array(
			//'菜单key'=>'控制器id'
			'default'=>array('default','article', 'category'),
			'system'=>array('option','siteModel','property'),
			'user'=>array('user','auth','author'),
			'member'=>array('member','contribute','noticeSys'),
			'form'=>array('form'),
			'content'=>array('category','page','menu'),
		);

		foreach($controllerMenu as $k=>$v){
			if(in_array($controller_id,$v)){
				return $k;
			}
		}
		return 'default';
	}

    private function getRecursionChild($item,&$arr){
        $children = Yii::app()->getAuthManager()->getItemChildren($item->name);
        if(!empty($children)){
            foreach($children as $v){
                $subChildren = Yii::app()->getAuthManager()->getItemChildren($v->name);
                if(!empty($subChildren)){
                    $this->getRecursionChild($v,$arr);
                }else{
                    $arr[] = $v->name;
                }
            }
        }else{
            $arr[] = $item->name;
        }
    }
}
