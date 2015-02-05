<?php
/* @var $this GoodsAttrController */
/* @var $data GoodsAttr */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('goods_id')); ?>:</b>
	<?php echo CHtml::encode($data->goods_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_id')); ?>:</b>
	<?php echo CHtml::encode($data->attr_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attr_value_id')); ?>:</b>
	<?php echo CHtml::encode($data->attr_value_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sku')); ?>:</b>
	<?php echo CHtml::encode($data->is_sku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sku_id')); ?>:</b>
	<?php echo CHtml::encode($data->sku_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_time')); ?>:</b>
	<?php echo CHtml::encode($data->creation_time); ?>
	<br />


</div>