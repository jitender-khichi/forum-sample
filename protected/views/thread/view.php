<?php
/* @var $this ThreadController */
/* @var $model ThreadMaster */

$this->breadcrumbs = array(
    'Thread Masters' => array('index'),
    $model->thread_id,
);
?>
<div class="well row">
    <div class="">
        <h3>
            <?php echo $model->thread_title; ?>
        </h3>
    </div>
</div>
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'thread_description:html',
        'thread_created',
    ),
));
?>


<div class="well row">
    <div class="grid_6">
        <h3>
            User Replies
        </h3>
    </div>
    <div class="getintouch  grid_6" style="width:15%;float:right;">
    <span><a href="<?php echo Yii::app()->createUrl('thread/reply', array('id'=>$model->thread_id));?>" class="tele-btn"><strong> Post Your Reply</strong></a></span>
 </div>
</div>

<div class="row">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_reply_view',
    ));
    ?>
</div>

<style>
    .oddRow
    {
        width:100%; 
        display:inline;
        float:left; 
        margin-right:20px;
        border:1px solid #eee;
        padding:10px;
        margin-bottom: 10px;
    }

    .evenRow
    {
        width:318px; 
        display:inline;
        float:right; 
        margin-right:0px;
        border:1px solid #eee;
        padding:10px;
        margin-bottom: 10px;
    }

</style>