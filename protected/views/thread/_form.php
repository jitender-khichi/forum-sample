<?php
/* @var $this ThreadController */
/* @var $model ThreadMaster */
/* @var $form CActiveForm */
?>

<div class="form getintouch">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thread-master-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'thread_title'); ?>
		<?php echo $form->textField($model,'thread_title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'thread_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thread_description'); ?>
		<?php echo $form->textArea($model,'thread_description',array('rows'=>15, 'cols'=>50)); ?>
		<?php echo $form->error($model,'thread_description'); ?>
	</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create Thread' : 'Save Thread'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->