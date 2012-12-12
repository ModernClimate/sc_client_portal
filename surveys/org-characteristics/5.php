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
            <h1>Operating Data.</h1>
           
            <fieldset>
              <div class="control-group">
                <span class="num">7.</span>
                <p class="label">Please provide the following operating data.</p>
                <p class="group-title">beds</p>
                <div class="control-group control-group-horizontal">
                  <span class="num">7.1</span>
                  <label for="">Hospital Beds Operated</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of beds operated (includes beds, cribs and pediatric bassinets for inpa-tients and excludes newborn bassinets). These beds have staff on hand to attend to the patient who occupies the bed.</p>
                  <p class="additional">If no beds used for long-term care, please enter “0”</p>
                </div>
                <div class="control-group control-group-horizontal">
                  <span class="num">7.2</span>
                  <label for="">Hospital Beds Licensed  </label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Maximum number of beds licensed to operate (includes beds, cribs and pediatric bassinets for inpatients and excludes newborn bassinets)</p>
                  <p class="additional">If no beds used for long-term care, please enter “0”</p>
                </div>
                <div class="control-group control-group-horizontal">
                  <span class="num">7.3</span>
                  <label for="">Long-Term Care Beds Operated </label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of beds used for long-term care.)</p>
                  <p class="additional">If no beds used for long-term care, please enter “0”</p>
                </div>                
              </div>
              <div class="control-group">
                <p class="group-title">Employees</p>
                <div class="control-group control-group-horizontal">
                  <span class="num">7.4</span>
                  <label for="">FTE Employees</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of full-time equivalent employees employed.</p>
                </div>
                 <div class="control-group control-group-horizontal">
                  <span class="num">7.5</span>
                  <label for="">Employed Physicians</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of employed physicians.</p>
                </div>
                 <div class="control-group control-group-horizontal">
                  <span class="num">7.6</span>
                  <label for="">Affiliated Physicians</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of affiliated physicians.</p>
                </div>


              </div>
              <div class="control-group">
                <p class="group-title">Hospital Visits</p>
                <div class="control-group control-group-horizontal">
                  <span class="num">7.7</span>
                  <label for="">Hospital Admissions</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of patients, excluding newborns, accepted for inpatient services.</p>
                </div>
                 <div class="control-group control-group-horizontal">
                  <span class="num">7.8</span>
                  <label for="">Outpatient Care Visits</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of visits for scheduled services provided to patients who do not remain in the hospital overnight.</p>
                </div>
                 <div class="control-group control-group-horizontal">
                  <span class="num">7.9</span>
                  <label for="">Emergency Room Visits</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of visits for emergency room services.</p>
                </div>
                 <div class="control-group control-group-horizontal">
                  <span class="num">7.10</span>
                  <label for="">Trauma Center Admissions</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Number of patients accepted or transported for inpatient trauma services.</p>
                </div>
              </div>
            </fieldset>
            

           
            <footer class="submit-group">
              <div class="dropdown">
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
