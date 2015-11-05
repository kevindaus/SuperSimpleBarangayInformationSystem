<?php 
/* @var $this Controller */ 
$baseUrl = Yii::app()->theme->baseUrl; 

?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">
    <div>
      <h2 style="
    color: white;
    font-weight: bolder;
    font-size: 59px;
    line-height: 60px;
    display: none
">
        Barangay Information System
      </h2>
    </div>
    <br>
    <div style="text-align: center;">
    <img src="<?php echo $baseUrl ?>/img/barangaylogo.png" class="img-responsive">
    </div>
      <h2 style="
    color: white;
    text-align: center;
">Barangy Concepcion Information System</h2>
    <br>
    <?php if (!Yii::app()->user->isGuest): ?>
    <div class='trans-panel'>
      <a href="/home">
      <div class="span3">
        <img src="<?php echo $baseUrl ?>/img/home-icon.png">
      </div>
      <div class="span9 ">
          <div class='trans-panel-title'>
            Home
          </div>
          <div class='trans-panel-content'>
            Go to main page
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>    
    <br>
    <?php endif ?>


    <?php if (Yii::app()->user->isGuest): ?>
    <div class='trans-panel'>
      <a href="/login">
      <div class="span3"><img src="<?php echo $baseUrl ?>/img/Login-icon.png"></div>
      <div class="span9 " style="color: yellow;">
          <div class='trans-panel-title'>
            Login
          </div>
          <div class='trans-panel-content'>
            Login your account
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>
    <br>
    <?php endif ?>
    <?php if (!Yii::app()->user->isGuest): ?>
    <div class='trans-panel' style='text-align:left'>
      <a href="/logout">
      <div class="span3"><img src="<?php echo $baseUrl ?>/img/Logout-icon.png"></div>

      <div class="span9 ">
          <div class='trans-panel-title'>
            Logout
          </div>
          <div class='trans-panel-content'>
            Logout your account
          </div>
      </div>
      </a>
      <div class="clearfix"></div>
    </div>
    <br>
    <?php endif ?>


    </div><!--/span-->
    <div class="span9">
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>