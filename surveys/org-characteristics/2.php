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
            <header>
              <h1 class="borderless">Organization Structure</h1>
              <p class="bordered">Please answer the following questions regarding your organization’s characteristics. If you are a hospital system and providing data for multiple hospitals, a separate organization characteristics survey should be submitted for each hospital.  </p>
            </header>
            <fieldset>
              <div class="control-group numbered" id="1" data-required="true">
                <p class="label">
                  <span class="num">1.</span>
                  Please select the classification that best describes the organization for which you are providing data (select one).
                </p>
                
                <ul class="checklist">
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-1,#1-1-1,#1-1-2,#1-1-3,#1-1-4,#1-1-5,#1-1-6,#1-1-7,#1-1-8" />
                      <strong>Multiple hospital system</strong> (central system that owns, leases, sponsors or contract manages two or more acute care hospitals and may own or operate other health care related entities [e.g., long-term care or assisted living, physician group practice, outpatient or ambulatory care, home health or hospice])
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-1,#1-1-1,#1-1-2,#1-1-3,#1-1-4,#1-1-5,#1-1-6,#1-1-7,#1-1-8" />
                      <strong>Single hospital system</strong> (single, freestanding hospital bringing into membership three or more, and at least 25 percent, of their owned or leased non-hospital health care related entities [e.g., long-term care or assisted living, physician group practice, outpatient or ambulatory care, home health or hospice])
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-1,#1-1-1,#1-1-2,#1-1-3,#1-1-4,#1-1-5,#1-1-6,#1-1-7,#1-1-8" />
                      <strong>Regional subsidiary hospital system</strong> (operates two or more acute care hospitals in a region or division of a multiple hospital system)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-1,#1-1-1,#1-1-2,#1-1-3,#1-1-4,#1-1-5,#1-1-6,#1-1-7,#1-1-8" />
                      <strong>Non-hospital health care provider system</strong> (not hospital related, which owns or operates two or more health care related entities [e.g., long-term care or assisted living, physician group practice, outpatient or ambulatory care, home health or hospice])
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-2,#1-2-1,#1-2-2,#1-2-3,#1-2-4" />
                      <strong>Freestanding, stand-alone hospital</strong> (single independent hospital where the chief executive officer reports to a board of directors of the hospital and the hospital is not owned, leased or operated by a health system)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-2,#1-2-1,#1-2-2,#1-2-3,#1-2-4,#1-3" />
                      <strong>Freestanding, system-affiliated hospital</strong> (single independent hospital where the chief executive officer reports to a board of directors of the hospital; although the hospital is affiliated with one or more health systems)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-2,#1-2-1,#1-2-2,#1-2-3,#1-2-4, #1-3" />
                      <strong>System-owned hospital</strong> (single hospital entity that is owned, leased or operated by a health system where a board of directors exists at the system or local level and the hospital chief executive officer reports to the health system chief executive officer or chief operating officer)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-4,#1-4-1,#1-4-2,#1-4-3,#1-4-4" />
                      <strong>Medical group – Single-specialty</strong> (a group of two or more physicians and non-physician practitioners legally organized in a partnership, professional corporation, foundation, not-for-profit corporation, faculty practice plan, or similar association that provides patients with a specific type of care (i.e., primary care or subspecialty practice).
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="1-1" id="" data-dependency-trigger="true" />
                      <strong>Medical group – Multi-specialty</strong> (a group of two or more physicians and non-physician practitioners legally organized in a partnership, professional corporation, foundation, not-for-profit corporation, faculty practice plan, or similar association that provides patients a variety of subspecialty care.
                    </label>
                  </li>
                  <li>
                    <label>
                      Other
                      <input class="vertically-centered" name="1-1" type="radio" disabled="" data-dependency-trigger="true" />
                      <input class="mid" type="text" disabled="" id="other" name="other" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>
                <div class="sep"></div>
                <div class="control-group control-group-disabled" id="1-1">

                  <p class="label group-title">
                    <span class="num">1.1</span>
                    If a multiple, single, regional subsidiary or non-hospital health care provider hospital system,
                  </p>
                </div>
                <div class="control-group control-group-disabled" id="1-1-1">
                  <p class="label">
                    <span class="num">1.1.1</span>
                    Are you a subsidiary system within a larger health care system?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-1-1" id="" data-dependency-trigger="true" data-dependency-target="#1-1-1-1" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-1-1" id="" data-dependency-trigger="false" />
                        No
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-1-1" id="" data-dependency-trigger="false" />
                        Unknown
                      </label>
                    </li>
                  </ul>
                  <div class="control-group control-group-disabled" id="1-1-1-1">
                    <p class="label">
                      <span class="num">1.1.1.1</span>
                      If yes, please provide the parent organization’s information.
                    </p>
                    <label for="">System Name:</label>
                    <input type="text" disabled="" placeholder="" />
                    <label for="">City:</label>
                    <input type="text" disabled="" placeholder="" />
                    <label for="">State:</label>
                    <select disabled="" name="" id=""></select>
                  </div>
                </div>

                <div class="control-group control-group-horizontal control-group-disabled" id="1-1-2">
                  <span class="num">1.1.2</span>
                  <label>
                    How many acute care hospitals does your organization own and operate?
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-horizontal control-group-disabled" id="1-1-3">
                  <span class="num">1.1.3</span>
                  <label>
                    How many acute care hospitals does your organization lease and operate?
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-horizontal control-group-disabled" id="1-1-4">
                  <span class="num">1.1.4</span>
                  <label>
                    How many acute care hospitals does your organization contract manage?
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-horizontal control-group-disabled" id="1-1-5">
                  <span class="num">1.1.5</span>
                  <label>
                    How many long-term care facilities does your organization own and operate?
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-horizontal control-group-disabled" id="1-1-6">
                  <span class="num">1.1.6</span>
                  <label>
                    How many medical groups does your organization own and operate?
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-disabled" id="1-1-7">
                  <p class="label">
                    <span class="num">1.1.7</span>
                    Has your organization formed an Accountable Care Organization (ACO)?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        No
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="control-group control-group-disabled" id="1-1-8">
                  <p class="label">
                    <span class="num">1.1.8</span>
                    Is your organization an Integrated Delivery System?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        No
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Unknown
                      </label>
                    </li>
                  </ul>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group" id="">
                <div class="control-group  control-group-disabled" id="1-2">
                  <p class="label group-title">
                    <span class="num">1.2</span>
                    If a freestanding, stand-alone or system affiliated hospital or system-owned hospital,
                  </p>
                </div>
                <div class="control-group control-group-disabled" id="1-2-1">
                  <p class="label">
                    <span class="num">1.2.1</span>
                    Please select all organization categories that describe your organization (select all that apply).
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="1-2-1" data-dependency-trigger="false" id="" />
                        General acute care hospital
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="1-2-1" data-dependency-trigger="true" data-dependency-target="#1-2-1-1" id="" />
                        Specialized acute care hospital
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="1-2-1" data-dependency-trigger="false" id="" />
                        Flagship hospital
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="1-2-1" data-dependency-trigger="false" id="" />
                        Critical access hospital
                      </label>
                    </li>
                    <li>
                      <label>
                        Other
                        <input class="vertically-centered" disabled="" name="1-2-1" data-dependency-trigger="false" type="checkbox" disabled="" />
                        <input class="mid" type="text" disabled="" id="other" name="other" placeholder="Please describe..." />
                      </label>
                    </li>
                  </ul>
                  <div class="control-group control-group-disabled" id="1-2-1-1">
                    <p class="label">
                      <span class="num">1.2.1.1</span>
                      If a specialized acute care hospital, please select the primary type of service provided.
                    </p>
                    <ul class="checklist">
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Cancer
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Heart
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Long-term care
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="true" data-dependency-target="#1-2-1-1-1" id="" />
                          Pediatric
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Psychiatric
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Rehabilitation
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="1-2-1-1" data-dependency-trigger="false" id="" />
                          Women’s
                        </label>
                      </li>
                      <li>
                        <label>
                          Other
                          <input class="vertically-centered" disabled="" name="1-2-1-1" data-dependency-trigger="false" type="radio" disabled="" />
                          <input class="mid" type="text" disabled="" id="other" name="other" placeholder="Please describe..." />
                        </label>
                      </li>
                    </ul>
                    <div class="control-group control-group-disabled" id="1-2-1-1-1">
                      <p class="label">                    
                        <span class="num">1.2.1.1.1</span>
                        If pediatric, please select the organizational structure.
                      </p>
                      <ul class="checklist">
                        <li>
                          <label>
                            <input type="checkbox" disabled="" name="" id="" />
                            Independent, stand-alone hospital
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" disabled="" name="" id="" />
                            Hospital within a hospital
                          </label>
                        </li>
                        <li>
                          <label>
                            <input type="checkbox" disabled="" name="" id="" />
                            Subsidiary of an adult hospital
                          </label>
                        </li>
                        <li>
                          <label>                            
                            Other
                            <input class="vertically-centered" disabled="" name="" type="checkbox" disabled="" />
                            <input class="mid" type="text" disabled="" id="other" name="other" placeholder="Please describe..." />
                          </label>
                        </li>
                      </ul>
                    </div>
                   </div>
                </div>
                <div class="control-group control-group-disabled" id="1-2-2">
                  <p class="label">
                    <span class="num">1.2.2</span>
                    Has your organization formed an Accountable Care Organization (ACO)?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        No
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="control-group control-group-disabled" id="1-2-3">
                  <span class="num">1.2.3
                  </span>
                  <label for="">How many medical groups does your hospital own and operate?</label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-disabled" id="1-2-4">
                  <p class="label">
                    <span class="num">1.2.4</span>
                    Is your organization a trauma center?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-2-4" data-dependency-trigger="true" data-dependency-target="#1-2-4-1" id="" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-2-4" data-dependency-trigger="false" id="" />
                        No
                      </label>
                    </li>
                  </ul>
                  <div class="control-group control-group-disabled" id="1-2-4-1">
                    <p class="label">
                      <span class="num">1.2.4.1</span>
                      If yes, what is the designation level (if a system, provide the highest trauma level designation)?
                    </p>
                    <ul class="checklist">
                      <li>
                        <label>
                          <input type="radio" disabled="" name="" id="" />
                          Level I
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="" id="" />
                          Level II
                        </label>
                      </li>
                      <li>
                        <label>
                          <input type="radio" disabled="" name="" id="" />
                          Level III
                        </label>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group" id="">
                <div class="control-group control-group-disabled" id="1-3">
                  <p class="label group-title">
                  <span class="num">1.3</span>
                  If an affiliated or system-owned hospital, please provide your affiliate or parent organization information.
                  </p>
                  <label for="">System Name:</label>
                  <input type="text" disabled="" placeholder="" />
                  <label for="">City:</label>
                  <input type="text" disabled="" placeholder="" />
                  <label for="">State:</label>
                  <select disabled="" name="" id=""></select>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <div class="control-group" id="">
                <div class="control-group control-group-disabled" id="1-4">
                <p class="label group-title">
                  <span class="num">1.4</span>
                  If a single- or -specialty medical group,
                  </p>
                </div>
                <div class="control-group control-group-disabled" id="1-4-1">
                  <p class="label">
                  <span class="num">1.4.1</span>
                  Please select the legal organization that best describes your group.
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Business corporation
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Professional corporation
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Partnership, general
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Partnership, limited liability
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Not-for-profit corporation or foundation
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="checkbox" disabled="" name="" id="" />
                        Other (specify):
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="control-group control-group-disabled" id="1-4-2">
                  <p class="label">
                  <span class="num">1.4.2</span>
                  Please select the majority owner of your medical group.
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Physicians
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Hospital
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        University or medical school
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Health system
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Physician practice management company
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="" id="" />
                        Insurance company or managed care organization
                      </label>
                    </li>
                    <li>
                      <label>
                        Other
                        <input class="vertically-centered" disabled="" name="" type="radio" disabled="" />
                        <input class="mid" type="text" disabled="" id="other" name="other" placeholder="Please describe..." />
                      </label>
                    </li>
                  </ul>
                </div>
                <div class="control-group control-group-disabled" id="1-4-3">
                  <span class="num">1.4.3</span>
                  <label for="">
                  Please provide the number of branch or satellite offices in your medical group:
                  </label>
                  <input type="text" disabled="" data-type="number" data-validate="int" />
                </div>
                <div class="control-group control-group-disabled" id="1-4-4">
                  <p class="label">
                  <span class="num">1.4.4</span>
                  Is your group a faculty practice plan?
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-4-4" data-dependency-trigger="true" data-dependency-target="#1-4-4-1" id="" />
                        Yes
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" disabled="" name="1-4-4" data-dependency-trigger="false" id="" />
                        No
                      </label>
                    </li>
                  </ul>
                  <div class="control-group control-group-disabled" id="1-4-4-1">
                    <p class="label">
                    <span class="num">1.4.4.1</span>
                    If yes, please provide the information of the medical school(s) with which your group is affiliated.
                    </p>
                    <label for="">Name:</label><input type="text" disabled=""/>
                    <label for="">City:</label><input type="text" disabled=""/>
                    <label for="">State:</label><select disabled=""></select>
                    <div class="sep"></div>
                    <label for="">Name:</label><input type="text" disabled=""/>
                    <label for="">City:</label><input type="text" disabled=""/>
                    <label for="">State:</label><select disabled=""></select>
                    <div class="sep"></div>
                    <label for="">Name:</label><input type="text" disabled=""/>
                    <label for="">City:</label><input type="text" disabled=""/>
                    <label for="">State:</label><select disabled=""></select>
              </div>
            </div>
          </fieldset>
          <fieldset>

              <div class="control-group numbered" id="2" data-required="true">
                <p class="label">
                <span class="num">2.</span>
                Please select the tax classification that best describes your organization.
                </p>
                <ul class="checklist">
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      For-profit
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      Not-for-profit
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      Tax district
                    </label>
                  </li>
                </ul>
              </div>
              <div class="control-group numbered" id="3" data-required="true">
                <p class="label">
                <span class="num">3.</span>
                Please select your organization’s ownership.
                </p>
                <ul class="checklist">
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      Non-government
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      Government, non-federal (state, county, city, hospital district, hospital authority or public university)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio"  name="" id="" />
                      Government, federal
                    </label>
                  </li>
                </ul>
              </div>
              <div class="control-group numbered" id="4" data-required="true">
                <p class="label">
                <span class="num">4.</span>
                Please select your organization’s sponsorship.
                </p>
                <ul class="checklist">
                  <li>
                    <label>
                      <input type="radio" name="4" id="" data-dependency-trigger="false" />
                      Secular (not sponsored or owned by a religious order, group or entity)
                    </label>
                  </li>
                  <li>
                    <label>
                      <input type="radio" name="4" id="" data-dependency-trigger="true" data-dependency-target="#4-1" />
                      Religious
                    </label>
                  </li>
                  <li>
                    <label>                      
                      Other
                      <input class="vertically-centered" name="4" type="radio" data-dependency-trigger="false" />
                      <input class="mid" type="text" id="other" name="other" placeholder="Please describe..." />
                    </label>
                  </li>
                </ul>              
                <div class="control-group control-group-disabled" id="4-1">
                  <p class="label">
                  <span class="num">4.1</span>
                  If religious, please select your affiliation.
                  </p>
                  <ul class="checklist">
                    <li>
                      <label>
                        <input type="radio" name="" id="" />
                        Baptist
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="" id="" />
                        Catholic
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="" id="" />
                        Lutheran
                      </label>
                    </li>
                    <li>
                      <label>
                        <input type="radio" name="" id="" />
                        Presbyterian
                      </label>
                    </li>
                    <li>
                      <label>                      
                        Other
                        <input class="vertically-centered" name="" type="radio" />
                        <input class="mid" type="text" id="other" name="other" placeholder="Please describe..." />
                      </label>
                    </li>
                  </ul>
                </div>
                </div>
              </fieldset>
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
