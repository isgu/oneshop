<?php
$test = false;
if ($test) {
    $baseUrl    = 'http://www.g-sky.cn';
    $imgUrl     = $baseUrl . '/uploads';
    $homeUrl    = 'http://www.g-sky.cn';
    $scriptUrl  = 'http://www.g-sky.cn';
} else {
    $baseUrl    = 'http://home.knewbi.loc';
    $imgUrl     = $baseUrl . '/uploads';
    $homeUrl    = 'http://home.knewbi.loc';
    $scriptUrl  = 'http://home.knewbi.loc';
}
return array(

    //是否是线上
    'remoteimg' => $remote,

    //主域名
    //Yii::app()->params['baseUrl'];
    'baseUrl'   => $baseUrl,

    //图片域名
    'imageUrl'  => $imgUrl,

	//会员头像域名
	'avatarUrl' => $scriptUrl . '/uploads/avatar',

    //会员模块域名
    'homeUrl'  => $homeUrl,

    //上传路径
    'uploads'  => 'uploads',

    //会员头像上传路径
	'avatarUploads' => 'uploads/avatar',

    //脚本路径 CSS JS images
    'script'        => $scriptUrl,

    'open_qq'       => array('appid'=>'100571462','appkey'=>'3d441f3395439150e9e7661a92817aa1'),
	'open_weibo'    => array('appid'=>'3992595682','appkey'=>'33991b25324110f2e5613ff705c9c4c6'),

    'expressKey'    =>  'ea8c7954b06fa43e',//查询快递的KEY 

    //产品图片尺寸
	'product_image_size'=>array(
		array('w'=>284,'h'=>284),//风向标尺寸
		array('w'=>490,'h'=>350),//风向标尺寸
		array('w'=>500,'h'=>305),//风向标尺寸
		array('w'=>355,'h'=>193),//风向标尺寸
		array('w'=>110,'h'=>60),//风向标尺寸
		array('w'=>200,'h'=>150),//风向标后台尺寸
	),

    //用户头像尺寸
    'avatar_size'=>array(
        array('w'=>100,'h'=>100),
        array('w'=>50,'h'=>50),
        array('w'=>40,'h'=>40),
        array('w'=>30,'h'=>30),
    ),
);
