<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="page-header" style="color: white">
	<h1 >Login <small style="color: white">to your account</small></h1>
</div>
<div class="row-fluid">

    <div class="span8 offset1">

        <div class="form" style="background-color: white;padding: 30px;border-radius: 10px;">
            <div class="span6">
                <p>Please fill out the following form with your login credentials:</p>
                <?php $form=$this->beginWidget('CActiveForm', array(
                    'id'=>'login-form',
                    'enableClientValidation'=>true,
                    'clientOptions'=>array(
                        'validateOnSubmit'=>true,
                    ),
                )); ?>
                <p class="note">Fields with <span class="required">*</span> are required.</p>
                <div class="">
                    <?php echo $form->labelEx($model,'username'); ?>
                    <?php echo $form->textField($model,'username'); ?>
                    <?php echo $form->error($model,'username'); ?>
                </div>
                <div class="">
                    <?php echo $form->labelEx($model,'password'); ?>
                    <?php echo $form->passwordField($model,'password'); ?>
                    <?php echo $form->error($model,'password'); ?>
                </div>
                <div class=" buttons">
                    <?php echo CHtml::submitButton('Login',array('class'=>'btn btn btn-primary')); ?>
                </div>
                <?php $this->endWidget(); ?>
            </div>
            <div class="span6" style="
    border-left: 5px solid #808080;
    padding-left: 20px;
    min-height: 252px;
">
                <a href="/register" type="button" class="btn btn-success" style="font-size: 18px;padding: 10px;" >
                <img src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-4/32/Male-user-add-icon.png">
                    Register New Record
                </a>
            </div>
            <div class="clearfix"></div>
        </div><!-- form -->


    </div>

</div>