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
          <section class="island outset">
            <h1>Commit to participate in other surveys.</h1>         
            <p>Verbiage describing how much easier it will be to fill out some of these other surveys once the Large Clinic Group Physician Compensation and Productivity survey is complete.
            </p> 
            <p>Lorumque vollore volupiendi coneste mpossitio. Apellam nit aut quid quo berro imus ducia suntium ducimai onsenda epudiam voloresed ut expliqui tem audit optatiam rae simaio ex elliquo et vitionse alis explabo. Dunt que id eosa ipideles re nossusam, tem laceribus vel illaccae por aut velia veliqui rerestiunt.</p>
            <fieldset>
              <div class="control-group">
                <p class="label">Select other related surveys you want to participate in.</p>
                <ul class="checklist">
                  <li><label for=""><input name="1" type="checkbox">Survey name <a href="#" target="_blank">(?)</a></label></li>
                  <li><label for=""><input name="1" type="checkbox">Survey name <a href="#" target="_blank">(?)</a></label></li>
                  <li><label for=""><input name="1" type="checkbox">Survey name <a href="#" target="_blank">(?)</a></label></li>
                </ul>
              </div>
            </fieldset>
            <footer class="submit-group">
              <div class="dropdown fr">
              <a href="" class="btn btn-blue btn-dropdown dropdown-toggle" data-toggle="dropdown">Save page&hellip;</a>
                <ul class="nav stacked dropdown-menu">
                  <li><a href="">and Go to next page</a></li>
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
        <?php include ($path . '_sidebar.php'); ?>
      <!-- Row End -->
      </div>
    </div>
    <!-- Container End -->
<?php include ($path . '_footer.php'); ?>
