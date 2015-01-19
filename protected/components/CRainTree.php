<?php
//导航树
class CRainTree extends CWidget{
	/*
	 $data=array(
		array('pid'=>0,'id'=>1,'name'=>'文章管理','url'=>'','icon_class'=>''),
		array('pid'=>0,'id'=>2,'name'=>'分类管理','url'=>'','icon_class'=>''),
		array('pid'=>1,'id'=>3,'name'=>'国内新闻','url'=>'','icon_class'=>''),
	 );
	 */
	public $data;
	public $pid=0;
	public $pidKey='pid';
	public $idKey='id';

	public function init(){}
	public function run(){
		if(empty($this->data)){return '';}
		?>
		<link rel="stylesheet" href="<?php echo Yii::app()->getController()->module->assetsUrl;?>/rainTree/raintree.css"/>
		<script src="<?php echo Yii::app()->getController()->module->assetsUrl;?>/rainTree/raintree.js"></script>
		<?php
		echo '<ul class="nav nav-list nav-pills nav-stacked rain-tree left-menu">';
		echo $this->raintree();
		echo '</ul>';
	}


	/*
	 * 左侧导航树
	 * $data array(
	 * 	array('name'=>'','pid'=>'',id=>'',url=>''),
	 * 	array('name'=>'','pid'=>'',id=>'',url=>''),
	 *
	 * );
	 * */
	private function raintree(){
		$pid=$this->pid; //null
		$pid_key=$this->pidKey; //'pid'
		$id_key=$this->idKey;  //'id'

		$nodes=array();
		foreach($this->data as $val){
			if(!array_key_exists($pid_key,$val)){
				continue;
			}
			
			//$nodes[$val['pid']][] = $val;
			$nodes[$val[$pid_key]][] = $val;
		}

		return $this->rain_tree_item($nodes,$pid,$id_key);
	}
	private function rain_tree_item($nodes,$pid=0,$id_key,$level=1){

		/*
		<ul class="nav nav-list nav-pills nav-stacked rain-tree left-menu">
			<li class="level-1 ">
				<a href="#">
					<i class="rain-tree-btn glyphicon glyphicon-plus-sign"> </i>
					<span class="tree-label">关于我们</span>
				</a>
			</li>
			<li class="level-1 ">
				<a href="#">
					<i class="rain-tree-btn glyphicon glyphicon-minus-sign"> </i>
					<span class="tree-label">商品分类</span>
				</a>
			</li>
			<li class="level-2 active ">
				<a href="#">
					<i class="rain-tree-btn glyphicon glyphicon-list"> </i>
					<span class="tree-label">商品信息</span>
				</a>
			</li>
			<li class="level-2 ">
				<a>
					<i class="rain-tree-btn glyphicon glyphicon-list"> </i>
					<span class="tree-label">商品信息</span>
				</a>
			</li>
			<li class="level-2 ">
				<a>
					<i class="rain-tree-btn glyphicon glyphicon-file"> </i>
					<span class="tree-label">商品信息</span>
				</a>
			</li>
			<li class="level-2 ">
				<a>
					<i class="rain-tree-btn glyphicon glyphicon-file"> </i>
					<span class="tree-label">再下一级</span>
				</a>
			</li>
			<li class="level-3 ">
				<a>
					<i class="rain-tree-btn glyphicon glyphicon-folder-close"> </i>
					<span class="tree-label">哈哈哈哈</span>
				</a>
			</li>
			<li class="level-1 ">
				<a href="#">
					<i class="rain-tree-btn glyphicon glyphicon-plus-sign"> </i>
					<span class="tree-label">商品分类</span>
				</a>
			</li>
		</ul>
		*/

		$plus="glyphicon glyphicon-plus";
		$minus="glyphicon glyphicon-minus";
		$default_icon="glyphicon glyphicon-th-large";

		if(!isset($nodes[$pid])) {
			return '';
		}
		$html = '';
		foreach($nodes[$pid] as $node){

			if(isset($node['icon_class'])){
				$default=$node['icon_class'];
			}else{
				$default=$default_icon;
			}

			$icon= isset($nodes[$node[$id_key]]) ? $minus : $default;

			$url= CHtml::normalizeUrl($node['url']);
			$html .= <<<HTML
			<li data-level="{$level}" data-id="{$node[$id_key]}">
				<a href="{$url}">
					<i class="rain-tree-btn {$icon}"> </i>
					<span>{$node['name']}</span>
				</a>
			</li>
HTML;
			if(isset($nodes[$node[$id_key]])) {
				$html .= $this->rain_tree_item($nodes,$node[$id_key],$id_key,$level+1);
			}
		}
		return $html;
	}
}