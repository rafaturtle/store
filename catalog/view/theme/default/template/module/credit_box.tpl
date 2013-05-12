<div class="box">
  <div class="box-heading"><?php echo $heading_title; ?></div>
  <div class="box-content">

      <?php if (!$logged) { ?>
      <p> Log in to see your credits</p>
      <?php } ?>
      <?php if ($logged) { ?>
      <p><?php echo $message; ?></p>
      
       <?php } ?>
  </div>
</div>
