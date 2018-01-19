<?php
/* @var $this ThreadController */
/* @var $model ThreadMaster */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'thread_id'); ?>
		<?php echo $form->textField($model,'thread_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_title'); ?>
		<?php echo $form->textField($model,'thread_title',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_description'); ?>
		<?php echo $form->textArea($model,'thread_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_is_active'); ?>
		<?php echo $form->textField($model,'thread_is_active',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_is_delete'); ?>
		<?php echo $form->textField($model,'thread_is_delete',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_is_closed'); ?>
		<?php echo $form->textField($model,'thread_is_closed',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_created'); ?>
		<?php echo $form->textField($model,'thread_created'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thread_updated'); ?>
		<?php echo $form->textField($model,'thread_updated'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->