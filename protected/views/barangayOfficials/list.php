<?php ?>


<style type="text/css"> 
    #barangayOfficialList td a.deletelink {
        color: red !important;
    }

</style>



<div class="update-barangay-info">

<div class="row">
<div class="span10 offset1">
<h1 style="text-align:center">List of all officials</h1>	
<hr>

<?php
$this->widget('bootstrap.widgets.TbAlert', array(
    'fade'=>true, // use transitions?
    'closeText'=>'×', // close link text - if set to false, no close link is displayed
    'alerts'=>array( // configurations per alert type
        'success'=>array('block'=>true, 'fade'=>true, 'closeText'=>'×'), // success, info, warning, error or danger
    ),
)); ?>

<div style="background-color:white;padding: 20px;border-radius: 20px;">

<?php 
$this->widget('bootstrap.widgets.TbGridView', array(
    'type' => 'striped bordered',
    'id' => 'barangayOfficialList',
    'dataProvider' => $model->search(),
    'template' => "<p style='color:black'>{summary}</p>\n{items}\n{pager}",
    'columns' => array(
        array(
            "type"=>'raw',
            "header"=>'Name',
            "value"=>'CHtml::link($data->firstname." ".$data->middlename." ".$data->lastname, array("barangayOfficials/view","id"=>$data->id))',
        ),
        array('name'=>'position'),
        array(
        	'name'=>'term_from',
        	'header'=>'Term from',
        	'value'=>'date("F d,Y", strtotime($data->term_from))',
    	),
        array(
            'name'=>'term_to',
            'header'=>'Term from',
            'value'=>'date("F d,Y", strtotime($data->term_to))',
        ),
        array(
            'header'=>'',
            'type'=>'raw',
            'value'=>'CHtml::link("edit", array("/barangayOfficials/update","barangayOfficialId"=>$data->id),array())',
        ),
        array(
            'header'=>'',
        	'type'=>'raw',
        	'value'=>'CHtml::link("delete", array("/barangayOfficials/delete","barangayOfficialId"=>$data->id),array("class"=>"deletelink","confirm"=>"Are you sure you want to delete this record ? "))',
    	),
        // array(
        //     'class'=>'bootstrap.widgets.TbButtonColumn',
        //     'htmlOptions'=>array('style'=>'width: 50px'),
        // ),
    ),
));
?>
</div>


</div>
</div>
</div>	
<?php //echo CHtml::link("delete", array("/barangayOfficial/delete"), array("barangayOfficialId"=>$data->id)); ?>