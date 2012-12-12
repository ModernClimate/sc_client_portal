<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/sc_client_portal/surveys/includes/";
?>

<?php include ($path . '_header.php'); ?>
<?php include ('_nav.php'); ?>
<div class="container">
  <!-- Row Start -->
  <div class="row">
    <!-- Col9 start -->
    <div class="col9">
      <!-- island start -->
      <?php include ($path . '_verify-characteristics.php'); ?>
      <!-- island End -->
    </div>
    <!-- Col9 end -->
    
    <!-- Col3 begin -->
    <div class="col3" data-affix="true">
      <!-- Island begin --> 
      <section class="island" >
        <a href="" class="btn btn-blue">Mark As correct</a>
        <a href="#contact-modal" class="btn btn-yellow" data-toggle="modal">Mark As Incorrect</a>
        <a href="" class="btn btn-grey">Mark As Unknown</a>
        <div class="sep"></div>
        <h3>Last updated</h3>
        <p>This page has never been updated.</p>
         <div class="sep"></div>
        <h3>Assigned Users</h3>
        <p>No users have been assigned to this page. <a href="#">Get some help.</a></p>
      </div>
      </div>    
      <!-- Island End -->
    </section>
    <!-- Col3 End -->
  </div>
  </div>
  <!-- Row End -->

</div>
<!-- Container End -->
<!-- Modal Start -->  
<div id="contact-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="">
    <div class="modal-header">
      <p class="modal-title">What information is incorrect?</p>
      <a href="" class="close btn btn-yellow fr" data-dismiss="modal" aria-hidden="true">&times;</a>
    </div>
    <div class="modal-body">
  
        <div class="control-group full-width">
          <p>The SullivanCotter survey team will be notified about this discrepency and take steps to fix it.  Feel free to complete the rest of the survey..</p>
          <textarea name="" id=""></textarea>
        </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-grey" data-dismiss="modal" aria-hidden="true">Cancel</button>
      <button class="btn btn-blue fr">Send Message</button>
    </div>
  </form>
</div>
<!-- Modal End -->     
<?php include ($path . '_footer.php'); ?>
