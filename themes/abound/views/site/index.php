<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
$baseUrl = Yii::app()->theme->baseUrl; 
?>

  <div class="main-dashboard-container">
    <div class="span5 offset1">

    <?php if (Yii::app()->user->id !== "admin"): ?>
      <div class='trans-menu-panel '>
        <a href="<?php echo $barangayClearanceFilePublished ?>">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/Places-certificate-server-icon.png"></div>
        <div class="span9 " >
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
    <?php endif ?>


      <div class='trans-menu-panel'>
        <a href="/visionMission">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/pin-icon.png"></div>
        <div class="span9 " >
            <div class='trans-panel-title'>
              Vision/Mission
            </div>
            <div class='trans-panel-content'>
              View Vision/Mission
            </div>
        </div>
        </a>  
        <div class="clearfix"></div>
      </div>

      <div class='trans-menu-panel'>
        <a href="/residents/admin">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/people-icon.png"></div>
        <div class="span9 " >
            <div class='trans-panel-title' style="font-size: 26px;">
                Resident Records
            </div>
            <div class='trans-panel-content'>
              View resident records
            </div>
        </div>
        </a>  
        <div class="clearfix"></div>
      </div>


      <?php if (Yii::app()->user->id !== 'admin'): ?>
      <div class='trans-menu-panel'>
        <a href="/profile">
        <div class="span3"><img src="<?php echo $baseUrl ?>/img/man-icon.png"></div>
        <div class="span9 ">
            <div class='trans-panel-title'>
              View Profile
            </div>
            <div class='trans-panel-content'>
              View and update user information
            </div>
        </div>
        </a>
        <div class="clearfix"></div>
      </div>
      <?php endif ?>



    </div>




    <div class="span5">




    <?php if (Yii::app()->user->id === "admin"): ?>
    <div class='trans-menu-panel' >
      <a href="/barangayOfficials/list">
      <div class="span3">
      <img src="<?php echo $baseUrl ?>/img/Actions-view-list-details-icon.png">
      </div>
      <div class="span9 ">
          <div class='trans-panel-title'>
            List officials
          </div>
          <div class='trans-panel-content'>
            Show list of all officials
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>
    <?php endif ?>


    <?php if (Yii::app()->user->id === "admin"): ?>
    <div class='trans-menu-panel' >
      <a href="/barangayOfficials">
      <div class="span3"><img src="<?php echo $baseUrl ?>/img/officials-icon.png"></div>
      <div class="span9 ">
          <div class='trans-panel-title'>
            Register Official
          </div>
          <div class='trans-panel-content'>
            Register official record
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>
    <?php endif ?>
    

    <?php if (Yii::app()->user->id === "admin"): ?>
    <div class='trans-menu-panel' >
      <a href="/updateInfo">
      <div class="span3"><img src="<?php echo $baseUrl ?>/img/Developer-icon.png"></div>
      <div class="span9 ">
          <div class='trans-panel-title' style="font-size: 25px;">
            Update Information
          </div>
          <div class='trans-panel-content'>
            Update barangay information
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>
    <?php endif ?>

    </div>



    <div class="clearfix"></div>
</div>