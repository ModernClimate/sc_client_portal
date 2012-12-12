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
            <h1>Financial Data.</h1>
            <p>Report all financial data in whole dollars for the <strong>most recently completed fiscal year</strong> (e.g., $1,234,567,800). For hospital systems, please report "consolidated" financial and operating data for your organization, i.e., data that reflects revenue and expenses from all of the system's organizations (e.g., hospitals, long-term care facilities, physician practices and other business units).</p>
            <fieldset>
              <div class="control-group numbered">
                <span class="num">6.</span>
                <p class="label">Please provide the following financial data.</p>
                <div class="control-group">
                  <span class="num">6.1</span>
                  <label for="">Provide the month and year of the most recent fiscal year for which you are reporting financial data.</label>
                  <select name="" id="" class="skinny inline">
                    <option value="" disabled="">Month</option>
                  </select>
                  <select name="" id="" class="skinny inline">
                    <option value="" disabled="">Year</option>
                  </select>
                </div>
                <div class="sep"></div>
                <div class="control-group control-group-horizontal" >
                  <span class="num">6.2</span>
                  <label for="">Gross Revenue ($)</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Revenue before discounts, allowances, bad debt and write-offs.</p>
                </div>
                <div class="control-group control-group-horizontal" >
                  <span class="num">6.3</span>
                  <label for="">Net Revenue ($)</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">Revenue after discounts, allowances, bad debt and write-offs.  </p>
                </div>
                <div class="control-group control-group-horizontal" >
                  <span class="num">6.4</span>
                  <label for="">Medical Group Net Revenue ($)</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional last-year">(if medical group exists within your organization)</p>
                  <p class="additional">Revenue after discounts, allowances, bad debt and write-offs for the medical group only.</p>
                </div>

                <div class="control-group control-group-horizontal" >
                  <span class="num">6.5</span>
                  <label for="">Operating Expense ($)</label>
                  <input type="text" data-type="number" data-validate="int" data-required="true">
                  <p class="additional">All expenses related to organization operations including but not limited to labor, overhead, depreciation and amortization and selling, general and administrative expenses. (excludes capital expenses and income taxes).</p>
                </div>
                <div class="control-group control-group-horizontal" >
                  <span class="num">6.6</span>
                  <label for="">Operating Margin (%)</label>
                  <input type="text" data-type="number" data-validate="float" data-required="true">
                  <p class="additional">Net income divided by net revenue</p>
                </div>
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
