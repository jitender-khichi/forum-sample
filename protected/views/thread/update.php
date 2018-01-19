<?php
/* @var $this ThreadController */
/* @var $model ThreadMaster */

$this->breadcrumbs=array(
	'Thread Masters'=>array('index'),
	$model->thread_id=>array('view','id'=>$model->thread_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ThreadMaster', 'url'=>array('index')),
	array('label'=>'Create ThreadMaster', 'url'=>array('create')),
	array('label'=>'View ThreadMaster', 'url'=>array('view', 'id'=>$model->thread_id)),
	array('label'=>'Manage ThreadMaster', 'url'=>array('admin')),
);
?>

<h1>Update ThreadMaster <?php echo $model->thread_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>