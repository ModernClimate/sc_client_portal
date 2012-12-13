 

<?php include ( '../includes/_header.php'); ?>
<?php include ('_nav.php'); ?>
    <div class="container">
      <!-- Row Start -->
      <div class="row">
        <!-- Col9 start -->
        <div class="col9">
          <!-- island start -->
          <section class="island outset">
            <h1>Compensation Profile</h1>
            <fieldset>
              <div class="control-group numbered" id="1">
                <span class="num">1.</span>
                <p class="label">What percentage of the physician revenue is paid to physicians for compensation?</p>
                <div class="control-group control-group-horizontal" id="1-1"><label >At the clinic level:</label><input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></div>
                <div class="control-group control-group-horizontal" id="1-2"><label >At the health system level (if applicable):</label><input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group control-group-horizontal numbered" id="2">
                <span class="num">2.</span>
                <label>What percentage of the net revenue is derived from capitated contracts?</label>
                <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100">
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group numbered" id="3">
                <span class="num">3.</span>
                <p class="label">Please indicate the total number of full-time equivalent (FTE) physicians practicing in your clinic.</p>
                <div class="control-group control-group-horizontal" ><label >Primary Care</label><input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="9999"></div>
                <div class="control-group control-group-horizontal" ><label >Specialists</label><input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="9999"></div>
                <div class="control-group control-group-horizontal" ><label >Radiology, Anesthesia and Pathology </label><input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="9999"></div>
                <div class="control-group control-group-horizontal" ><label >Teaching</label><input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="9999"></div>
                <div class="control-group control-group-horizontal" ><label >Administrative</label><input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="9999"></div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group numbered" id="4">
                <span class="num">4.</span>
                <p class="label">How many clinical hours per week must a physician work in order to be considered a 1.0 FTE?</p>
                <ul class="checklist">
                  <li><label ><input type="radio" name="4">No answer</label></li>
                  <li><label ><input type="radio" name="4">25-30 hours per week</label></li>
                  <li><label ><input type="radio" name="4">31-35 hours per week</label></li>
                  <li><label ><input type="radio" name="4">36-40 hours per week</label></li>
                  <li><label ><input type="radio" name="4">41-45 hours per week</label></li>
                  <li><label ><input type="radio" name="4">46-50 hours per week</label></li>
                  <li><label ><input type="radio" name="4">More than 50 hours per week</label></li>
                </ul>
              </div>
              <div class="control-group control-group-horizontal numbered" id="5">
                <span class="num">5.</span>
                <label>How many weeks per year must a physician work in order to be considered a 1.0 FTE?</label>
                <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="52">
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group numbered" id="6">
                <span class="num">6.</span>
                <p class="label">Do you have standards for physician office hours (e.g., X number of patients per week or X number of hours per week)?</p>
                <ul class="checklist">
                  <li><label ><input type="radio" name="6" data-dependency-trigger="true" data-dependency-target="[id^=6-]">Yes</label></li>
                  <li><label ><input type="radio" name="6" data-dependency-trigger="false">No</label></li>
                  <li><label ><input type="radio" name="6" data-dependency-trigger="false">No answer</label></li>
                </ul>
                <div class="control-group control-group-disabled" id="6-0">
                  <p class="group-title">If YES, what are your standards?</p>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-1"><label >Clinic-wide patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-2"><label >Clinic-wide days per week in office  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-3"><label >Primary care patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-4"><label >Primary care days per week in office  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-5"><label >Specialty care patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-6"><label >Specialty care days per week in office</label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-7"><label >Hospitalists patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-8"><label >Hospitalists days per week in office  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-9"><label >Emergency medicine patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-10"><label >Emergency medicine days per week in office  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-11"><label >Anesthesiology patient hours per week  </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999"></div>
                  <div class="control-group control-group-horizontal control-group-disabled" id="6-12"><label >Anesthesiology days per week in office    </label><input type="text" disabled="" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="7"></div>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group full-width numbered">
                <span class="num">7.</span>
                <p class="label"> Indicate all methods that apply to your medical group's 2012 standard income distribution plan by completing the percentage of compensation attributed to that option.</p>
                <table class="data">
                  <thead>
                    <th></th>
                    <th>MDs Hired Within 1 Year&nbsp;(%)</th>
                    <th>PC MDs (Exper.)&nbsp;(%)</th>
                    <th>Specialty MDs (Exper.)&nbsp;(%)</th>
                    <th>RAP Physicians&nbsp;(%)</th>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Work RVUs</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Total RVUs</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Gross Production</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Net Production</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Cost Accounting</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Base and Guaranteed Salary</td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#9" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#9" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#9" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#9" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Equal Share</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Panel Size</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Financial Incentives</td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Quality Incentives</td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-dependency-trigger="true" data-dependency-target="#11,#12,#13" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Discretionary (e.g., seniority)</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Administrative Stipends</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>APC Supervision</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Call Pay</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td>Other (please specify below)</td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-1" data-sum-target="#sum-1" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-2" data-sum-target="#sum-2" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-3" data-sum-target="#sum-3" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                      <td class="t16 control-group"><input type="text" data-sum-inputs="table-col-4" data-sum-target="#sum-4" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr>
                      <td class=""><strong>Totals</strong> (Must equal 100%)</td>
                      <td class="aligncenter"><strong id="sum-1" data-sum-max="100">0</strong>%</td>
                      <td class="aligncenter"><strong id="sum-2" data-sum-max="100">0</strong>%</td>
                      <td class="aligncenter"><strong id="sum-3" data-sum-max="100">0</strong>%</td>
                      <td class="aligncenter"><strong id="sum-4" data-sum-max="100">0</strong>%</td>
                    </tr>
                  </tfoot>
                </table>                
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group numbered" id="8">
                <span class="num">8.</span>
                <p class="label">Does your clinic utilize salary ranges to administer your physician compensation program?</p>
                <ul class="checklist">
                  <li><label ><input type="radio" name="8" data-dependency-trigger="true" data-dependency-target="[id^=8-]">Yes</label></li>
                  <li><label ><input type="radio" name="8" data-dependency-trigger="false">No</label></li>
                  <li><label ><input type="radio" name="8" data-dependency-trigger="false">No answer</label></li>
                </ul>
                <div class="control-group control-group-disabled" id="8-0">
                  <label>If YES, please indicate the month and average percentage adjustment to your current salary ranges.?</label>
                  <select name="" id="" disabled="">
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="Novemeber">Novemeber</option>
                    <option value="December">December</option>
                  </select>
                </div>
                <div class="control-group control-group-disabled" id="8-1">
                  <label>Percentage Adjustment (%)</label>
                  <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100">
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group control-group-disabled numbered" id="9">
                <span class="num">9.</span>
                <p class="label"> If you completed base salary in Question 7, which of the following methodologies determine physician salaries? (Check all that apply.)</p>
                <ul class="checklist">
                  <li><label><input type="radio" name="9"> Percentage of last year's salary</label> </li>
                  <li><label><input type="radio" name="9"> Percentage of concurrent production</label> </li>
                  <li><label><input type="radio" name="9"> Market salary data</label> </li>
                  <li><label><input type="radio" name="9"> Percentage of expected future compensation</label> </li>
                  <li><label><input type="radio" name="9"> Defined salary range</label> </li>
                  <li><label><input type="radio" name="9"> Panel size of work units</label> </li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered" name="9" type="radio" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
                
              </div>
            </fieldset>
                        <fieldset>
              <div class="control-group numbered" id="10">
                <span class="num">10.</span>
                <p class="label">For all physicians who received increases, please indicate the average base salary increase granted for the past fiscal year.</p>
                <table class="data">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Percentage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="t90">Merit</td>
                      <td class="t90 control-group" ><input type="text" data-sum-inputs="table-col-5" data-sum-target="#sum-5" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                    <tr>
                      <td class="t10">Across-The-Board</td>
                      <td class="t10 control-group"><input type="text" data-sum-inputs="table-col-5" data-sum-target="#sum-5" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100"></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <td class="t90">Total</td>
                    <td class="t10"><strong id="sum-5"></strong>%</td>
                  </tfoot>
                </table>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group control-group-disabled numbered" id="11">
                <span class="num">11.</span>
                <p class="label">If you completed incentives in Question 7, what criteria are used in determining incentives? (Check all that apply.)</p>
                <ul class="checklist">
                  <li class="label group-title">Production Performance</li>
                  <li><label><input type="checkbox" disabled="">Individual production and profitability (PPS and cap)</label></li>
                  <li><label><input type="checkbox" disabled="">Department profitability</label></li>
                  <li><label><input type="checkbox" disabled="">Institutional contribution</label></li>
                  <li><label><input type="checkbox" disabled="">Patient Satisfaction</label></li>
                  <li><label><input type="checkbox" disabled="">Department or group relative value units</label></li>
                  <li><label><input type="checkbox" disabled="">Other</label></li>
                  <li class="label group-title">Utilization Management</li>
                  <li><label><input type="checkbox" disabled="">Hospital utilization</label></li>
                  <li><label><input type="checkbox" disabled="">Controlling outside referrals</label></li>
                  <li><label><input type="checkbox" disabled="">Internal referrals</label></li>
                  <li><label><input type="checkbox" disabled="">Cost containerment and effectiveness</label></li>
                  <li><label><input type="checkbox" disabled="">Controlling acillary utilization</label></li>
                  <li class="label group-title">Qualitative Measures</li>
                  <li><label><input type="checkbox" disabled="">Peer and chart review</label></li>
                  <li><label><input type="checkbox" disabled="">Board Certification</label></li>
                  <li><label><input type="checkbox" disabled="">HEDIS</label></li>
                  <li><label><input type="checkbox" disabled="">Outcomes</label></li>
                  <li><label><input type="checkbox" disabled="">Access</label></li>
                </ul>
              </div>
              <div class="control-group control-group-disabled numbered" id="12">
                <span class="num">12.</span>
                <p class="label">If you completed discretionary items in Question 7, what criteria are used in determining the discretionary component? (Check all that apply.)</p>
                <ul class="checklist">
                  <li><label><input type="checkbox" disabled="">Citizenship (call, meetings, etc.)</label></li>
                  <li><label><input type="checkbox" disabled="">Seniority</label></li>
                  <li><label><input type="checkbox" disabled="">Clinic administrative duties</label></li>
                  <li><label><input type="checkbox" disabled="">Adjusting physicians to market salaries</label></li>
                  <li><label><input type="checkbox" disabled="">Accessibility and availability</label></li>
                  <li><label><input type="checkbox" disabled="">Accepting call and hospital duties</label></li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
              </div>
              <div class="control-group control-group-disabled numbered" id="13">
                <span class="num">13.</span>
                <p class="label">If you completed incentives or discretionary items in Question 7, who decides how the incentives or discretionary items are awarded? (Check all that apply.)</p>
                <ul class="checklist">
                  <li><label><input type="checkbox" disabled="">Board of directors</label></li>
                  <li><label><input type="checkbox" disabled="">Compensation committee</label></li>
                  <li><label><input type="checkbox" disabled="">Medical director</label></li>
                  <li><label><input type="checkbox" disabled="">Department chair</label></li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group numbered">
                <span class="num">14.</span>
                <label>What percentage of total physician compensation is paid out for all types of leadership positions?</label>
                <input type="text" class="skinny" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100">
              </div>
              <div class="control-group numbered">
                <span class="num">15.</span>
                <label for="">What is the approximate percentage of fringe benefits of total compensation (i.e., fringe benefits divided by compensation plus fringe benefits)? Fringe benefits include employer share of FICA, payroll and unemployment taxes; health, disability, life and workers compensation insurance; and all employer contributions to retirement plans, including defined benefits and contribution plans, 401(k), 403(b) and Keogh plans and any nonqualified funded retirement plan.                         </label>
                <input type="text" class="skinny" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100">
              </div>
              <div class="control-group numbered">
                <span class="num">16.</span>
                <p class="label">If your organization has a short-term incentive plan, what are the executives measured against? (Check all that apply.)</p>
                <ul class="checklist">
                  <li><label><input type="checkbox">Merit</label></li>
                  <li><label><input type="checkbox">Overall oranizational financial goals</label></li>
                  <li><label><input type="checkbox">Non-financial operational goals</label></li>
                  <li><label><input type="checkbox">Department goals</label></li>
                  <li><label><input type="checkbox">Individual goals</label></li>
                  <li><label><input type="checkbox">Project goals</label></li>
                  <li>
                    <label> 
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
              </div>
              <div class="control-group numbered">
                <span class="num">17.</span>
                <p class="label">If your organization has a long-term incentive plan, what are the executives measured against? (Check all that apply.)</p>
                <ul class="checklist">
                  <li><label><input type="checkbox">Merit</label></li>
                  <li><label><input type="checkbox">Overall oranizational financial goals</label></li>
                  <li><label><input type="checkbox">Non-financial operational goals</label></li>
                  <li><label><input type="checkbox">Department goals</label></li>
                  <li><label><input type="checkbox">Individual goals</label></li>
                  <li><label><input type="checkbox">Project goals</label></li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered"  type="checkbox" />
                      <input class="mid" type="text" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
              </div>
              
            </fieldset>
            <fieldset>
              <div class="control-group numbered full-width">
                <span class="num">18.</span>
                <p class="label"> If your organization pays for call coverage, please fill in the following table.</p>
                <table class="data">
                  <thead>
                    <tr>
                      <th>Specialty</th>
                      <th>Pay Separately for Call?</th>
                      <th>Average Weekday Pay Rate?</th>
                      <th>Rate Description</th>
                      <th>Average Weekday Pay Rate</th>
                      <th>Rate Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Family Medicine and Internal Medicine</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Hospitalist</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Cardiology (General)</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Gastroenterology</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>General Surgery</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Neurosurgery</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>OB/GYN – General</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Orthopedic Surgery</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                    <tr>
                      <td>Plastic Surgery</td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option></option>n value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                      <td class="t18 control-group">
                        <input type="text" data-type="number" data-validate="float" data-validate-min="0" data-validate-max="999">
                      </td>
                      <td class="t18 control-group">
                        <select name="" id="">
                          <option value="Hourly">Hourly</option>
                          <option value="Daily">Daily</option>
                          <option value="Weekly">Weekly</option>
                          <option value="Monthly">Monthly</option>
                        </select>
                      </td>
                    </tr>
                  </tbody>
                </table>

              </div>

            </fieldset>
            <fieldset>
              <div class="control-group numbered" id="19">
                <span class="num">19.</span>
                <p class="label">If your organization calculates panel sizes for your providers, how do you assign patients to calculate panel size?</p>
                <ul class="checklist">
                  <li><label for=""><input type="radio" name="19">Patients are only assigned to physicians</label></li>
                  <li><label for=""><input type="radio" name="19">Patients are assigned to physicians and APCS</label></li>
                </ul>
              </div>
              <div class="control-group numbered">
                <span class="num">20.</span>
                <p class="label">If your organization's definition of panel or how you calculate panel size differs from SullivanCotter's definition, please explain your definition below:                         </p>
                <textarea name="" id="" ></textarea>
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
        <?php include ( '../includes/_sidebar.php'); ?>
      <!-- Row End -->
      </div>
    </div>
    <!-- Container End -->
<?php include ( '../includes/_footer.php'); ?>
