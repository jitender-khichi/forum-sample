<?php
/* @var $this ThreadRepliesController */
/* @var $model ThreadReplies */
/* @var $form CActiveForm */
?>

<div class="form getintouch">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'thread-replies-_thread_reply-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'reply_message'); ?>
                <?php echo $form->textArea($model,'reply_message',array('rows'=>15, 'cols'=>50)); ?>
		<?php echo $form->error($model,'reply_message'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reply_sender'); ?>
		<?php echo $form->textField($model,'reply_sender'); ?>
		<?php echo $form->error($model,'reply_sender'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Post Reply'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->