<?php
/* @var $this ThreadController */
/* @var $data ThreadMaster */
?>



<div class="<?php echo ($index % 2 == 0) ? "oddRow" : "evenRow"; ?> grid_12" style="text-align:left;">
    <?php echo '<h4>' . CHtml::link(CHtml::encode($data->thread_title), array('view', 'id' => $data->thread_id)). '</h4>'; ?>
    <?php //echo '<h4>' . $data->rep_count. '</h4>'; ?>
</div>