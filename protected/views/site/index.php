<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>

  <div class="main-dashboard-container">
    <div class="span5 offset1">
      <div class='trans-menu-panel'>
        <a href="<?php echo $barangayClearanceFilePublished ?>">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/Places-certificate-server-icon.png"></div>
        <div class="span9 " style="color: white">
            <div class='trans-menu-panel-title'>
              Generate Brgy. Clearance
            </div>
            <div class='trans-panel-content'>
              Generate barangay clearance copy
            </div>
        </div>
        </a>
        <div class="clearfix"></div>
      </div>

      <div class='trans-menu-panel'>
        <a href="<?php echo $publishedCedulaLink ?>">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/seal-icon.png"></div>
        <div class="span9 " style="color: white">
            <div class='trans-menu-panel-title'>
              Barangay Officials
            </div>
            <div class='trans-panel-content'>
              View Barangay Officials
            </div>
        </div>
        </a>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="span6">
    </div>
    <div class="clearfix"></div>

  </div>
