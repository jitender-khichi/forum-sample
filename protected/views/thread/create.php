
<div class="well row">
    <div class="grid_6">
        <h3>Create Your Thread</h3>
    </div>
    <div class="getintouch  grid_6" style="width:15%;float:right;">
        <span><a href="<?php echo Yii::app()->createUrl('thread/index', array());?>" class="tele-btn"><strong> View All Threads</strong></a></span>
    </div>
</div>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>