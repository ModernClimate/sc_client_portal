 

<?php include ( '../includes/_header.php'); ?>
<?php include ('_nav.php'); ?>
<!-- Container Start -->
<div class="container">
  <!-- Row Start -->
  <div class="row">
    <!-- Col9 start -->
    <div class="col9">
      <!-- island start -->
      <section class="island outset">
        <h1 class="borderless">New Hire Starting Salaries</h1>
        <p>We suggest uploading the data via excel if your adding more than 10 individials.</p>
        <p class="bordered">
          <a href="#modal" data-toggle="modal" class="unimportant">Learn More</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="" class="">Download template</a>
        </p>
        <fieldset class="bordered">
          <div class="control-group">
            <p class="label group-title">Select a file to upload</p>
            <input type="file">
            <a href="" class="btn btn-grey btn-disabled">Upload File</a>
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group">
            <p>No indiviuals added. <a href="5-1.php">Add Individuals one at a time</a>.</p>
          </div>
        </fieldset>
        <footer class="submit-group">
          <div class="dropdown fr">
            <a href="" class="btn btn-blue btn-dropdown dropdown-toggle" data-toggle="dropdown">Save page&hellip;</a>
            <ul class="nav stacked dropdown-menu">
                  <li><a href="<?= ($pageName + 1) ?>.php">and Go to next page</a></li>
                <li><a href="">and Mark as complete</a></li>
                <li class="sep"></li>
                <li><a class="disabled" href="">and Submit Survey</a></li>
              </ul>              
          </div>
        </footer>
      </section>
      <!-- island End -->
    </div>
    <!-- Col9 end -->
    <?php include ( '../includes/_sidebar-trim.php'); ?>
  <!-- Row End -->
  </div>
</div>
<!-- Container End -->

<!-- Modal Start -->  
<div id="modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <form action="">
    <div class="modal-header">
      <p class="modal-title">The Template Upload Process.</p>
      <a href="" class="close btn btn-yellow fr" data-dismiss="modal" aria-hidden="true">&times;</a>
    </div>
    <div class="modal-body">
  
        <div class="control-group full-width">
          <p>Describe template process.</p>
        </div>
    </div>
    <div class="modal-footer">
      <button class="btn btn-blue fr" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </form>
</div>
<!-- Modal End -->     

<?php include ( '../includes/_footer.php'); ?>
