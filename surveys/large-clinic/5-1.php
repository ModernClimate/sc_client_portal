 

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
        <p><a href="5.php" class="placeholder">← Go back to New Hire Starting Salary overview without saving.</a></p>
        <h1 class="">Add individual new hire starting salary</h1>
        <fieldset>
          <div class="control-group numbered"><span class="num">1.</span><label>Physician ID&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Physician ID" data-modal-html="<p>  This code is used to identify each physician from year to year. Please provide a code that identifies the physician to your organization only. <strong>Do not use the physician’s full Social Security number.</strong></p>">(?)</a></label>
            <input type="text" />
          </div>
          <div class="control-group numbered"><span class="num">2.</span><label>Specialty Code&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Specialty Code" data-modal-html="<p>  This code is the specialty code for each physician related to the area of medicine the physician practices. A specialty listing can also be found in the electronic data submission file.</p>">(?)</a></label>
            <select name="" id="" class="chzn">
              <option value=""></option>
              <optgroup label="Physician Positions"><option value="1005">  Addictive Medicine</option>
                            <option value="1000">  Allergy and Immunology</option>
                            <option value="2000">  Anesthesiology</option>
                            <option value="2230">  Anesthesiology – Pain Clinic</option>
                            <option value="4005">  Anesthesiology – Pediatric*</option>
                            <option value="3000">  Audiology</option>
                            <option value="2005">  Bariatric Surgery</option>
                            <option value="2007">  Breast Surgery</option>
                            <option value="2008">  Burn Surgery</option>
                            <option value="2010">  Cardiac and Thoracic Surgery</option>
                            <option value="2241">  Cardiac and Thoracic Surgery – Pediatric</option>
                            <option value="1010">  Cardiology – Cath Lab (Invasive Interventional)</option>
                            <option value="1020">  Cardiology – Echo Lab and Nuclear</option>
                            <option value="1030">  Cardiology – Electrophysiology Pacemaker</option>
                            <option value="1040">  Cardiology – General</option>
                            <option value="1050">  Cardiology – General – Branch</option>
                            <option value="2003">  Cardiovascular Anesthesiology*</option>
                            <option value="2015">  Cardiovascular Surgery</option>
                            <option value="2017">  Cataract Surgeon*</option>
                            <option value="3025">  Certified Nurse Specialist</option>
                            <option value="3030">  Certified Registered Nurse Anesthetist</option>
                            <option value="3035">  Chiropractor</option>
                            <option value="1007">  Clinical Nutrition and Bariatric Medicine</option>
                            <option value="2020">  Colon and Rectal Surgery</option>
                            <option value="1443">  Consult Liaison Psychiatrist</option>
                            <option value="1060">  Critical Care and Intensivist</option>
                            <option value="3040">  Dentistry</option>
                            <option value="3041">  Dentistry – Pediatric</option>
                            <option value="1070">  Dermatology</option>
                            <option value="1080">  Dermatology – Branch</option>
                            <option value="1090">  Dermatology – Mohs</option>
                            <option value="4010">  Dermatopathology</option>
                            <option value="4045">  Diagnostic Radiology – Pediatric</option>
                            <option value="4030">  Diagnostic Radiology (MD Interventional)</option>
                            <option value="4020">  Diagnostic Radiology (MD Neuro-Interventional)</option>
                            <option value="4040">  Diagnostic Radiology (MD Non-Interventional)</option>
                            <option value="2030">  Emergency Medicine</option>
                            <option value="2035">  Emergency Medicine – Pediatrics</option>
                            <option value="1100">  Endocrinology</option>
                            <option value="2027">  Endovascular Surgery*</option>
                            <option value="3065">  Epidemiology</option>
                            <option value="1110">  Family Medicine</option>
                            <option value="1120">  Family Medicine – Branch</option>
                            <option value="1115">  Family Medicine With Obstetrics</option>
                            <option value="1125">  Family Medicine With Obstetrics – Branch</option>
                            <option value="1130">  Gastroenterology</option>
                            <option value="1140">  Gastroenterology – Branch</option>
                            <option value="2050">  General Surgery</option>
                            <option value="2060">  General Surgery – Branch</option>
                            <option value="1465">  Genetics</option>
                            <option value="1150">  Geriatrics</option>
                            <option value="1180">  Hematology and Medical Oncology</option>
                            <option value="1183">  Hepatology*</option>
                            <option value="1186">  Hospitalist – Family Medicine</option>
                            <option value="1185">  Hospitalist – Internal Medicine</option>
                            <option value="1260">  Hospitalist – Nocturnist</option>
                            <option value="1187">  Hospitalist – Pediatrics</option>
                            <option value="1190">  Hypertension and Nephrology</option>
                            <option value="1200">  Infectious Disease</option>
                            <option value="1210">  Internal Medicine</option>
                            <option value="1220">  Internal Medicine – Branch</option>
                            <option value="1223">  Internal Medicine – Medical Home*</option>
                            <option value="1215">  Internal Medicine – Office Only</option>
                            <option value="4085">  Interventional Neurology*</option>
                            <option value="4101">  Laboratory Hematology</option>
                            <option value="1175">  Mammography</option>
                            <option value="1181">  Medical Oncology*</option>
                            <option value="4070">  Microbiology (MD Only)</option>
                            <option value="3080">  Midwife</option>
                            <option value="1191">  Nephrology Only</option>
                            <option value="2090">  Neurological Surgery</option>
                            <option value="2095">  Neurological Surgery – Pediatrics</option>
                            <option value="1250">  Neurology</option>
                            <option value="1253">  Neurology – EMG Lab*</option>
                            <option value="1252">  Neurology – Epilepsy and EEG Lab*</option>
                            <option value="1255">  Neurology – Stroke</option>
                            <option value="1188">  Neuro-Oncology*</option>
                            <option value="1448">  Neuropsychiatry</option>
                            <option value="3090">  Nuclear Medicine – Non Radiologist (Dosimetrist)</option>
                            <option value="4080">  Nuclear Medicine (MD Only)</option>
                            <option value="3112">  Nurse Practitioner – Geriatric</option>
                            <option value="3113">  Nurse Practitioner – Medical Specialty</option>
                            <option value="3115">  Nurse Practitioner – Primary Care</option>
                            <option value="3117">  Nurse Practitioner – Surgical Specialty</option>
                            <option value="3118">  Nutritionist (Non-MD)</option>
                            <option value="2080">  OB/GYN – Branch</option>
                            <option value="2070">  OB/GYN – General</option>
                            <option value="1160">  OB/GYN – Gynecological Oncology</option>
                            <option value="1170">  OB/GYN – Gynecology Only</option>
                            <option value="1245">  OB/GYN – Laborist</option>
                            <option value="1420">  OB/GYN – Maternal Fetal Medicine and Perinatology</option>
                            <option value="1270">  OB/GYN – Obstetrics </option>
                            <option value="2075">  OB/GYN – Urogynecology</option>
                            <option value="1280">  Occupational and Environmental Medicine</option>
                            <option value="3120">  Occupational Therapist</option>
                            <option value="2097">  Oculo-Facial and Oculoplastic</option>
                            <option value="2098">  Oncology – Surgical</option>
                            <option value="2100">  Ophthalmology</option>
                            <option value="2110">  Ophthalmology – Branch</option>
                            <option value="1315">  Ophthalmology – Medical</option>
                            <option value="1230">  Ophthalmology – Medical Retinal</option>
                            <option value="2120">  Ophthalmology – Orbital</option>
                            <option value="2250">  Ophthalmology – Pediatrics</option>
                            <option value="2105">  Ophthalmology – Refractive</option>
                            <option value="2130">  Ophthalmology – Retinal Surgery</option>
                            <option value="3130">  Optometrist</option>
                            <option value="2140">  Oral Surgery</option>
                            <option value="2135">  Oral-Maxillofacial Surgery*</option>
                            <option value="3042">  Orthodontics</option>
                            <option value="1310">  Orthopedic – Medical</option>
                            <option value="2145">  Orthopedic Oncology</option>
                            <option value="2280">  Orthopedic Sports Medicine</option>
                            <option value="2150">  Orthopedic Surgery</option>
                            <option value="2160">  Orthopedic Surgery – Branch</option>
                            <option value="2175">  Orthopedic Surgery – Foot and Ankle</option>
                            <option value="2170">  Orthopedic Surgery – Hand</option>
                            <option value="2180">  Orthopedic Surgery – Joint Replacement</option>
                            <option value="2200">  Orthopedic Surgery – Pediatrics</option>
                            <option value="2185">  Orthopedic Surgery – Shoulder*</option>
                            <option value="2190">  Orthopedic Surgery – Spine</option>
                            <option value="2285">  Orthopedic Surgery – Trauma</option>
                            <option value="2210">  Otolaryngology</option>
                            <option value="2220">  Otolaryngology – Branch</option>
                            <option value="2215">  Otolaryngology – Head and Neck Surgery</option>
                            <option value="2205">  Otolaryngology – Pediatrics*</option>
                            <option value="1437">  Pain Management – Non-Anesthesiology</option>
                            <option value="1317">  Palliative Care </option>
                            <option value="2270">  Pathology – Anatomic (MD Only)</option>
                            <option value="4103">  Pathology – Clinical (MD Only)</option>
                            <option value="4100">  Pathology – Combined (MD Only)</option>
                            <option value="4105">  Pathology – Pediatric*</option>
                            <option value="4107">  Pathology – Surgical*</option>
                            <option value="2240">  Pediatric Surgery</option>
                            <option value="1320">  Pediatrics – General</option>
                            <option value="1325">  Pediatrics and Adolescent – Adolescent Medicine</option>
                            <option value="1330">  Pediatrics and Adolescent – Allergy</option>
                            <option value="1340">  Pediatrics and Adolescent – Branch</option>
                            <option value="1350">  Pediatrics and Adolescent – Cardiology</option>
                            <option value="1085">  Pediatrics and Adolescent – Dermatology</option>
                            <option value="1355">  Pediatrics and Adolescent – Developmental-Behavioral</option>
                            <option value="1360">  Pediatrics and Adolescent – Endocrinology</option>
                            <option value="1370">  Pediatrics and Adolescent – Gastroenterology</option>
                            <option value="1375">  Pediatrics and Adolescent – Genetics</option>
                            <option value="1380">  Pediatrics and Adolescent – Hematology and Oncology</option>
                            <option value="1382">  Pediatrics and Adolescent – Infectious Disease</option>
                            <option value="1384">  Pediatrics and Adolescent – Intensive Care</option>
                            <option value="1386">  Pediatrics and Adolescent – Internal Medicine</option>
                            <option value="1240">  Pediatrics and Adolescent – Neonatology</option>
                            <option value="1390">  Pediatrics and Adolescent – Nephrology</option>
                            <option value="1400">  Pediatrics and Adolescent – Neurology</option>
                            <option value="4108">  Pediatrics and Adolescent – Physical Medicine and Rehabilitation*</option>
                            <option value="1410">  Pediatrics and Adolescent – Pulmonary</option>
                            <option value="1415">  Pediatrics and Adolescent – Rheumatology</option>
                            <option value="1417">  Pediatrics and Adolescent – Urgent Care</option>
                            <option value="3155">  Perfusionist*</option>
                            <option value="3020">  PhD Only: Biochemistry</option>
                            <option value="3050">  PhD Only: Diagnostic Radiology</option>
                            <option value="3055">  PhD Only: Imaging (Physicist)</option>
                            <option value="3060">  PhD Only: Immunology</option>
                            <option value="3070">  PhD Only: Microbiology</option>
                            <option value="3075">  PhD Only: Neurophysiology</option>
                            <option value="3215">  PhD Only: Neuropsychology</option>
                            <option value="3100">  PhD Only: Nuclear Medicine</option>
                            <option value="3140">  PhD Only: Other Laboratory</option>
                            <option value="3150">  PhD Only: Pathology</option>
                            <option value="3210">  PhD Only: Psychology</option>
                            <option value="3211">  PhD Only: Psychology – Child</option>
                            <option value="3220">  PhD Only: Radiation Therapy</option>
                            <option value="3160">  Pharmacist</option>
                            <option value="1430">  Physical Medicine and Rehabilitation</option>
                            <option value="3170">  Physical Therapist</option>
                            <option value="3180">  Physician Assistant – Medical</option>
                            <option value="3182">  Physician Assistant – Primary Care</option>
                            <option value="3185">  Physician Assistant – Surgical</option>
                            <option value="2260">  Plastic and Reconstruction</option>
                            <option value="2265">  Plastic and Reconstruction – Pediatrics</option>
                            <option value="3195">  Podiatry – Medical</option>
                            <option value="3205">  Podiatry – Medical – Branch</option>
                            <option value="3190">  Podiatry – Surgical</option>
                            <option value="3200">  Podiatry – Surgical – Branch</option>
                            <option value="1440">  Psychiatry</option>
                            <option value="1445">  Psychiatry – Child</option>
                            <option value="1446">  Psychiatry – Geriatric</option>
                            <option value="1441">  Psychiatry – Inpatient</option>
                            <option value="1442">  Psychiatry – Outpatient</option>
                            <option value="3212">  Psychology (Master's Level)</option>
                            <option value="1451">  Pulmonary Disease (With Critical Care)</option>
                            <option value="1450">  Pulmonary Disease (Without Critical Care)</option>
                            <option value="1452">  Pulmonary Intensivist</option>
                            <option value="4130">  Radiation Therapy (MD Only)</option>
                            <option value="1460">  Reproductive Endocrinology</option>
                            <option value="1470">  Rheumatologic Disease</option>
                            <option value="1475">  Sleep Lab</option>
                            <option value="3230">  Social Worker</option>
                            <option value="3235">  Speech Pathology</option>
                            <option value="1480">  Sports Medicine</option>
                            <option value="2099">  Thoracic Oncological Surgery*</option>
                            <option value="2275">  Thoracic Surgery</option>
                            <option value="1485">  Transplant Nephrology*</option>
                            <option value="2300">  Transplant Surgery – Kidney</option>
                            <option value="2310">  Transplant Surgery – Liver</option>
                            <option value="2292">  Transplant Surgery – Medical</option>
                            <option value="2290">  Transplant Surgery – Thoracic</option>
                            <option value="2295">  Trauma Surgery</option>
                            <option value="1490">  Urgent Care</option>
                            <option value="3001">  Urological Oncology*</option>
                            <option value="2320">  Urology</option>
                            <option value="2330">  Urology – Branch</option>
                            <option value="2335">  Urology – Pediatrics</option>
                            <option value="2340">  Vascular Surgery</option>
                            <option value="1500">  Wound Care and Hyperbaric</option></optgroup>

              <optgroup label="Administrative Positions"><option value="5075">  Associate Medical Director</option>
                            <option value="5150">  Business Office Manager</option>
                            <option value="5170">  Chief Compliance Officer</option>
                            <option value="5000">  Chief Financial Officer</option>
                            <option value="5010">  Chief Information Officer</option>
                            <option value="5017">  Chief Medical Informatics Officer</option>
                            <option value="5015">  Chief Medical Officer</option>
                            <option value="5025">  Chief Nursing Officer</option>
                            <option value="5035">  Chief of Medical Staff</option>
                            <option value="5140">  Chief Operating Officer</option>
                            <option value="5130">  Clinical Research Director</option>
                            <option value="5110">  Contracting Director</option>
                            <option value="5045">  Dean, School of Medicine</option>
                            <option value="5085">  Director of Development</option>
                            <option value="5180">  Division Operations Director</option>
                            <option value="5185">  Division or Section Chair</option>
                            <option value="5190">  Finance Director</option>
                            <option value="5030">  Head of Facilities</option>
                            <option value="5055">  Head of Faculty Practice Plan</option>
                            <option value="5068">  Head of Graduate Medical Education</option>
                            <option value="5050">  Health Plan Director</option>
                            <option value="5060">  Hospital Administrator</option>
                            <option value="5040">  Human Resources Director</option>
                            <option value="5160">  In-House Lead Counsel</option>
                            <option value="5070">  Medical Director</option>
                            <option value="5064">  Medical Director – Accountable Care Organization*</option>
                            <option value="5071">  Medical Director – Behavioral Medicine</option>
                            <option value="5072">  Medical Director – Cancer Center</option>
                            <option value="5073">  Medical Director – Cardiology</option>
                            <option value="5074">  Medical Director – Hospice</option>
                            <option value="5065">  Medical Director – Long Term Care</option>
                            <option value="5076">  Medical Director – Multispecialty</option>
                            <option value="5077">  Medical Director – Primary Care</option>
                            <option value="5078">  Medical Director – Surgery</option>
                            <option value="5079">  Medical Director – Utilization Review</option>
                            <option value="5080">  Medical Education Director</option>
                            <option value="5200">  Medical Records Director</option>
                            <option value="5205">  Medical Staff Services and Physician Services Director</option>
                            <option value="5090">  Non-Physician Administrator – President (CEO)</option>
                            <option value="5020">  Nursing Director</option>
                            <option value="5105">  Office Manager</option>
                            <option value="5100">  Physician Administrator (CEO)</option>
                            <option value="5210">  Physician Recruiter – Manager</option>
                            <option value="5215">  Physician Recruiter – Senior</option>
                            <option value="5220">  Physician Recruiter – Staff Level</option>
                            <option value="5095">  President and Chancellor</option>
                            <option value="5120">  Public Affairs and Marketing Director</option>
                            <option value="5221">  Quality Improvement Director</option></optgroup>
            </select>
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group control-group-horizontal numbered"><span class="num">3.</span><label>Clinical FTE&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Clinical FTE" data-modal-html="<p>  Clinical FTE is the full-time equivalent percentage of the individual physician. Full-time clinical (1.0 FTE) is defined as a physician fulfilling your organization’s minimum requirements for classification as a full-time patient care employee (e.g., 36 hours of patient care activities per week). The FTE should not be adjusted based on the physician’s hire date. The reported FTE will not exceed 1.0.</p>">(?)</a></label>
            <input type="text" data-validate="float" data-validate-min="0.00" data-validate-max="1.00" />
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group numbered"><span class="num">4.</span><p class="label">New Resident or Fellow (N) or Experienced (E) Hire&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="New Resident or Fellow (N) or Experienced (E) Hire" data-modal-html="<p> Indicate whether the physicians are new residents or fellows with an N or experienced hires with an E. New residents or fellows will just have completed their residency or a fellowship program. Experienced hires will have worked in the medical field at another facility and are now recently employed by your facility.</p>">(?)</a></p>
            <ul class="checklist">
              <li><label><input name="4-0" type="radio" data-dependency-trigger="true" data-dependency-target="#4-1" />New Resident or Fellow</label></li>
              <li><label><input name="4-0" type="radio" data-dependency-trigger="false"/>Experienced Hire</label></li>

            </ul>
             <div id="4-1" class="control-group control-group-disabled control-group-horizontal numbered"><span class="num">4.1</span><label>If Experienced Hire (E), Years of Experience&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="If Experienced Hire (E), Years of Experience." data-modal-html="<p> If you indicated that the physician was an experienced hire in Column 4, please indicate the number of years the physician has practiced in the physician’s primary specialty. Experience begins at the time the physician completes the latter of the physician’s residency or fellowship.</p>">(?)</a></label>
              <input disabled="" type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="100" />
            </div>
          </div>
        </fieldset> 
        <fieldset>
          <div class="control-group control-group-horizontal numbered"><span class="num">5.</span><label>Starting Salary&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Starting Salary" data-modal-html="<p>  The total starting annual base compensation of the individual physician.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999999" />
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">6.</span><label>Forgivable Loan: Total Amount&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Forgivable Loan: Total Amount" data-modal-html="<p>  If the physician received a forgivable loan, indicate the full amount here. A forgivable loan is a loan made with the understanding that if the borrower meets certain requirements, repayment of the loan will not be required. If requirements are not met, the remaining amount is to be paid back to the organization plus interest.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">7.</span><label>Forgivable Loan: Number of Years &nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Forgivable Loan: Number of Years" data-modal-html="<p>   If the physician received a forgivable loan, indicate the number of years over which the loan was forgivable. A forgivable loan is a loan made with the understanding that if the borrower meets certain requirements, repayment of the loan will not be required. If requirements are not met, the remaining amount is to be paid back to the organization plus interest.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">8.</span><label>Retention Bonus: Total Amount&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Retention Bonus: Total Amount" data-modal-html="<p>  If the physician received a retention bonus, indicate the full amount here. A retention bonus is an incentive paid to an employee to retain the employee through a stated length of time or business cycle.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">9.</span><label>Retention Bonus: Number of Years &nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Retention Bonus: Number of Years" data-modal-html="<p> If the physician received a retention bonus over a number of years, indicate the number of years. A retention bonus is an incentive paid to an employee to retain the employee through a stated length of time or business cycle.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">10.</span><label>Signing Bonus Amount&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Signing Bonus Amount" data-modal-html="<p> If the physician received a signing bonus, indicate the full amount here. A signing bonus or sign-on bonus is a one-time sum paid upfront to a new employee as an incentive to join the organization.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">11.</span><label>First Year Compensation Total&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="First Year Compensation Total" data-modal-html="<p> Indicate the total compensation the physician will receive in the first year of employment. If the physician receives a forgivable loan for five years, only include the amount of the forgivable loan recognized or earned during the first year. This also applies to retention, signing or other bonus amounts.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999999"/>
          </div>
          <div class="control-group control-group-horizontal numbered"><span class="num">12.</span><label>Total Compensation Package&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Total Compensation Package" data-modal-html="<p> Indicate the total compensation the physician will receive. Include the total amount of all bonuses and forgivable loans here.</p>">(?)</a></label>
            <input type="text" data-type="number" data-validate="int" data-validate-min="0" data-validate-max="999999999"/>
          </div>
          
        </fieldset>
        
        <footer class="submit-group">          
          <a href="" class="btn btn-yellow">Save Data</a>
        </footer>
      </section>
      <!-- island End -->
    </div>
    <!-- Col9 end -->
    <?php include ( '../includes/_sidebar-individual.php'); ?>
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
  

    </div>
    <div class="modal-footer">
      <button class="btn btn-blue fr" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
  </form>
</div>
<!-- Modal End -->     

<?php include ( '../includes/_footer.php'); ?>
