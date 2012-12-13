 

<?php include ( '../includes/_header.php'); ?>
<?php include ('_nav.php'); ?>
    <div class="container">
      <!-- Row Start -->
      <div class="row">
        <!-- Col9 start -->
        <div class="col9">
          <!-- island start -->
          <section class="island outset">
          <h1>Teaching Programs.</h1>
          <fieldset>
            <div class="control-group numbered" id="5">
              <p class="label">
                <span class="num">5.</span>
                Does your organization have a teaching program for medical students and residents?
              </p>
              <ul class="checklist">
                <li>
                  <label>
                    Yes
                    <input type="radio" name="5" data-dependency-trigger="true" data-dependency-target="#5-1,#5-2,#5-3,#5-4,#5-5" />  
                  </label>
                </li>
                <li>
                  <label>
                    No
                    <input type="radio" name="5" data-dependency-trigger="false" />  
                  </label>
                </li>
                <li>
                  <label>
                    Unknown
                    <input type="radio" name="5" data-dependency-trigger="false" />  
                  </label>
                </li>
              </ul>

              <div class="control-group control-group-disabled" id="5-1">
                <p class="label">
                  <span class="num">5.1</span>
                  If yes, please select the type of teaching program provided.
                </p>
                <ul class="checklist">
                  <li>
                    <label>
                      Minor teaching (participates in residency or internship training)
                      <input type="radio" disabled="" name="5-1" data-dependency-trigger="false" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      Major teaching (participates in four active residency programs, with at least two being medicine, surgery,  obstetrics/gynecology, pediatrics, family practice or psychiatry)
                      <input type="radio" disabled="" name="5-1" data-dependency-trigger="true" data-dependency-target="#5-1-1" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      Unknown
                      <input type="radio" disabled="" name="5-1" data-dependency-trigger="false" />  
                    </label>
                  </li>

                </ul>
                <div class="control-group control-group-disabled" id="5-1-1">
                  <p class="label">
                    <span class="num">5.1.1</span>
                    If major teaching, is your organization the primary teaching facility for a medical school?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        Yes
                        <input type="radio" disabled="" name="5-1-1" data-dependency-trigger="true" data-dependency-target="#5-1-1-1,#5-1-1-1-1,#5-1-1-1-2,#5-1-1-1-3" />  
                      </label>
                    </li>
                    <li>
                      <label>
                        No
                        <input type="radio" disabled="" name="5-1-1" data-dependency-trigger="false" />  
                      </label>
                    </li>
                    <li>
                      <label>
                        Unknown
                        <input type="radio" disabled="" name="5-1-1" data-dependency-trigger="false" />  
                      </label>
                    </li>

                  </ul>
                  <div class="control-group control-group-disabled" id="5-1-1-1">
                    <p class="label">
                      <span class="num">5.1.1.1</span>
                      If yes, please provide the medical school’s information.
                    </p>
                    <div class="control-group control-group-disabled" id="5-1-1-1-1">
                      <label>Name:     </label>
                       <input type="text" disabled=""/>  
                    </div>
                     <div class="control-group control-group-disabled" id="5-1-1-1-2">
                      <label>
                        City:</label>
                      <input type="text" disabled=""/>  
                    </div>
                    <div class="control-group control-group-disabled" id="5-1-1-1-3">
                      <label>
                        State:
                      </label>
                      <select disabled="">
                        <option value="">Alabama</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="control-group control-group-disabled" id="5-2">
                <p class="label">
                  <span class="num">5.2</span>
                  Is your organization affiliated with one or more medical schools?
                </p>
                <ul class="checklist">
                  <li>
                    <label>
                      Yes
                      <input type="radio" disabled="" name="5-2" data-dependency-trigger="true" data-dependency-target="#5-2-1,#5-2-1-1,#5-2-1-2,#5-2-1-3,#5-2-1-4,#5-2-1-5,#5-2-1-6,#5-2-1-7,#5-2-1-8,#5-2-1-9" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      No
                      <input type="radio" disabled="" name="5-2" data-dependency-trigger="false" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      Unknown
                      <input type="radio" disabled="" name="5-2" data-dependency-trigger="false" />  
                    </label>
                  </li>
                </ul>
                <div class="control-group control-group-disabled" id="5-2-1">
                  <p class="label">
                    <span class="num">5.2.1</span>
                    If yes, please provide the information of the medical school(s) with which your group is affiliated.
                  </p>
                  <div class="control-group control-group-disabled" id="5-2-1-1">
                    <label>
                      Name:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-2">
                    <label>
                      City:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-3">
                    <label>
                      State:                    
                    </label>
                    <select disabled="">
                      <option value=" ">Alabama</option>
                    </select>                    
                  </div>

                  <div class="sep"></div>
                  <div class="control-group control-group-disabled" id="5-2-1-4">
                    <label>
                      Name:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-5">
                    <label>
                      City:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-6">
                    <label>
                      State:                    
                    </label>
                    <select disabled="">
                      <option value=" ">Alabama</option>
                    </select>                    
                  </div>
                  <div class="sep"></div>
                  <div class="control-group control-group-disabled" id="5-2-1-7">
                    <label>
                      Name:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-8">
                    <label>
                      City:
                    </label>
                    <input type="text" disabled=""/>  
                  </div>
                  <div class="control-group control-group-disabled" id="5-2-1-9">
                    <label>
                      State:                    
                    </label>
                    <select disabled="">
                      <option value=" ">Alabama</option>
                    </select>                    
                  </div>
                </div>
              </div>
              <div class="control-group control-group-disabled" id="5-3">
                <p class="label">
                  <span class="num">5.3</span>
                  Does your organization have a full Council of Teaching Hospitals and Health Systems (COTH) membership designation?
                </p>

                <ul class="checklist">
                  <li>
                    <label>
                      Yes
                      <input type="radio" disabled="" name="5-3" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      No
                      <input type="radio" disabled="" name="5-3" />  
                    </label>
                  </li>
                  <li>
                    <label>
                      Unknown
                      <input type="radio" disabled="" name="5-3" />  
                    </label>
                  </li>
                </ul>
              </div>
              <div class="control-group control-group-disabled" id="5-4">
                <span class="num">5.4</span>
                <label>
                  How many approved residency programs do you have in your organization?
                </label>
                <input type="text" disabled="" data-type="number" data-validate="int" />  
              </div>
              <div class="control-group control-group-disabled" id="5-5">
                <span class="num">5.5</span>
                <label>How many residents are affiliated with your organization?</label>
                <input type="text" disabled="" data-type="number" data-validate="int" />  
              </div>

            </fieldset>

            <footer class="submit-group">
              <div class="dropdown fr">
                <a href="" class="btn btn-blue btn-dropdown dropdown-toggle" data-toggle="dropdown">Save page&hellip;</a>
                <ul class="nav stacked dropdown-menu">
                  <li>
                    <a href="<?= ($pageName + 1) ?>">and Go to next page</a>
                  </li>
                  <li>
                    <a href="">and Mark as complete</a>
                  </li>
                  <li class="sep"></li>
                  <li>
                    <a class="disabled" href="">and Submit Survey</a>
                  </li>
                </ul>
              </div>
            </footer>
          </section>
          <!-- island End -->
        </div>
        <!-- Col9 end -->
        <?php include ( '../includes/_sidebar.php'); ?>
      <!-- Row End -->
      </div>
    </div>
    <!-- Container End -->
<?php include ( '../includes/_footer.php'); ?>
