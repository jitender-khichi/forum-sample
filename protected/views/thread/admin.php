<?php
/* @var $this ThreadController */
/* @var $model ThreadMaster */

$this->breadcrumbs=array(
	'Thread Masters'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ThreadMaster', 'url'=>array('index')),
	array('label'=>'Create ThreadMaster', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#thread-master-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Thread Masters</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'thread-master-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'thread_id',
		'thread_title',
		'thread_description',
		'thread_is_active',
		'thread_is_delete',
		'thread_is_closed',
		/*
		'thread_created',
		'thread_updated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
