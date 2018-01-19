<?php
/* @var $this ThreadController */
/* @var $dataProvider CActiveDataProvider */
?>
<div class="well row">
    <div class="grid_6">
        <h3>Thread Masters</h3>
    </div>
    <div class="getintouch  grid_6" style="width:15%;float:right;">
        <span><a href="<?php echo Yii::app()->createUrl('thread/create', array());?>" class="tele-btn"><strong> Post Your Thread</strong></a></span>
    </div>
</div>

<?php //echo '<pre>'; print_r($dataProvider); exit; ?>
<div class="row">
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
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