<?php
/* @var $this BarangayOfficialsController */
/* @var $model BarangayOfficials */
$baseUrl = Yii::app()->theme->baseUrl; 

?>


<div class="update-barangay-info">





<div class="row">
<div class="span10 offset1">


<?php if (!empty($model->profile_image)): ?>
    <?php echo CHtml::image($baseUrl."/uploads/".$model->profile_image, $model->firstname.' '.$model->middlename.' '.$model->lastname.' image', array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
<?php endif ?>
<?php if (empty($model->profile_image) ): ?>
    <?php echo CHtml::image($baseUrl."/uploads/not available.png", "image not available", array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
<?php endif ?>

<br>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        "firstname",
        "middlename",
        "lastname",
        "position",
        "term_from",
        // "profile_image", 
        "term_to",
        "date_record_created",
    ),
)); ?>


</div>
</div>