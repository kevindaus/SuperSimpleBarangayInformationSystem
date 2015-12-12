<?php
/* @var $this BarangayOfficialsController */
/* @var $model BarangayOfficials */
$baseUrl = Yii::app()->theme->baseUrl; 

?>

<style type="text/css">
    .detail-view{
        padding:20px;
    }

</style>


<div class="update-barangay-info">





<div class="row">
<div class="span10 offset1">
<br>
<br>
<div style="background-color:white;padding: 20px;border-radius: 20px;">

    <div style="width: 70%;float:left">
        <?php $this->widget('zii.widgets.CDetailView', array(
            'data'=>$model,
            'attributes'=>array(
                "firstname",
                "middlename",
                "lastname",
                array(
                    'label'=>'Position',
                    'value'=>strtoupper($model->position)
                ),
                array(
                    'label'=>'Term from',
                    'value'=>date("F d,Y", strtotime($model->term_from))
                ),
                array(
                    'label'=>'Term to',
                    'value'=>date("F d,Y", strtotime($model->term_to))
                ),
            ),
        )); ?>
   </div>
    <div style="width: 25%;float:left">
        <?php if (!empty($model->profile_image)): ?>
            <?php echo CHtml::image($baseUrl."/uploads/".$model->profile_image, $model->firstname.' '.$model->middlename.' '.$model->lastname.' image', array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
        <?php endif ?>
        <?php if (empty($model->profile_image) ): ?>
            <?php echo CHtml::image($baseUrl."/uploads/not available.png", "image not available", array('class'=>"img-polaroid","style"=>"height: 169px;")); ?>    
        <?php endif ?>
    </div> 
   <div class="clearfix"></div>
   <br>
   <?php echo CHtml::link('<span class="icon-pencil icon-white"></span> Update', array('update','barangayOfficialId'=>$model->id), array('class'=>'btn btn-success')); ?>
</div>
</div>
</div>