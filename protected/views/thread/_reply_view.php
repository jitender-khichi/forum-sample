<?php
/* @var $this ThreadController */
/* @var $data ThreadMaster */
?>



<div class="<?php echo ($index % 2 == 0) ? "oddRow" : "evenRow"; ?> grid_12" style="text-align:left;">
    <div class="row">
        Posted By : <?php echo '<label class="senderLabel">' . $data->reply_sender . '</label>'; ?> on 
            <?php echo '<label class="senderLabel">' . date('l jS \of F Y h:i:s A', strtotime($data->reply_created )). '</label>';?>
    </div>
    <div class="row">
    <?php echo $data->reply_message ; ?>
    </div>
    <?php //echo '<h4>' . $data->rep_count. '</h4>'; ?>
</div>