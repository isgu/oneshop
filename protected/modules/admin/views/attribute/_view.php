<?php
/* @var $this AttributeController */
/* @var $data Attribute */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('category_id')); ?>:</b>
	<?php echo CHtml::encode($data->category_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_alias')); ?>:</b>
	<?php echo CHtml::encode($data->is_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_color')); ?>:</b>
	<?php echo CHtml::encode($data->is_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_enu')); ?>:</b>
	<?php echo CHtml::encode($data->is_enu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_input')); ?>:</b>
	<?php echo CHtml::encode($data->is_input); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('is_crux')); ?>:</b>
	<?php echo CHtml::encode($data->is_crux); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sale')); ?>:</b>
	<?php echo CHtml::encode($data->is_sale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_search')); ?>:</b>
	<?php echo CHtml::encode($data->is_search); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_must')); ?>:</b>
	<?php echo CHtml::encode($data->is_must); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_choose')); ?>:</b>
	<?php echo CHtml::encode($data->is_choose); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sort')); ?>:</b>
	<?php echo CHtml::encode($data->sort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_time')); ?>:</b>
	<?php echo CHtml::encode($data->creation_time); ?>
	<br />

	*/ ?>

</div>