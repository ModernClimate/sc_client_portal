 

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
        <p><a href="4.php" class="placeholder">← Go back to individual compensation and productivity data overview without saving.</a></p>
        <h1 class="">Add individual compensation</h1>
        <fieldset>
          <div class="control-group numbered">
            <span class="num">1.</span>
            <label>Physician ID&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Physician ID" data-modal-html="<p>This code is used to identify each physician from year to year. Please provide a code that identifies the physician to your organization only. <strong>Do not use the physician's full Social Security number.</strong></p>">(?)</a></label>
            <input type="text"  data-required="true"/>
          </div>
          <div class="control-group numbered">
            <span class="num">2.</span>
            <label>Specialty&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Specialty" data-modal-html=" This is the specialty code for each physician related to the area of medicine the physician practices. Refer to the specialty code listing that follows these instructions. <strong>Please remember to review these physician assignments to ensure an accurate submission.</strong>">(?)</a></label>
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
          <div class="control-group numbered"  data-required="true">
            <span class="num">3.</span>
            <p class="label" >Position Level&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Position Level" data-modal-html="<h3>Staff.</h3> <p>Staff members provide medical care to patients the majority of the time. Staff members may engage in teaching and research and may have responsibilities for residents. Typically, staff members devote at least 75% of work time to direct or indirect patient care.</p><h3>Department Chair.</h3> <p>A department chair is a provider who is considered the chair of the department for each specialty. Within large departments, there may be more than one identified department chair. Department chairs are responsible for the financial and operating results achieved by the department. This is not a section head position or any other position that has broader-level responsibilities and that may oversee an entire set of departments or a set of specialties. Section head can be reported in the administrative compensation Section III Position 5185.</p>">(?)</a></p>
            <ul class="checklist">
              <li><label>Staff <input type="radio" name="3"></label></li>
              <li><label>Department Chair <input type="radio" name="3"></label></li>
            </ul>
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">4.</span>
            <label>Clinical FTE&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Clinical FTE" data-modal-html="<p>  Clinical FTE is the full-time equivalent percentage of the individual physician. Full-time clinical (1.0 FTE) is defined as a physician fulfilling your organization’s minimum requirements for classification as a full-time patient care employee (e.g., 36 hours of patient care activities per week). Many physicians work above this minimum level, but the reported FTE will not exceed 1.0. Other adjustments to this FTE status will not be common, but include the following:</p><ul><li>Physicians receiving more than four weeks of short-term disability, maternity, sabbatical, military level, etc. Vacation, holidays, allowed sick days and other normal benefits for time off will affect the FTE status.</li><li>A physician working in an operational administrative role that affects the clinical FTE status to be below 1.0 FTEs. This adjustment is intended for physician administrators with organizational or possibly section-wide administrative responsibilities, and who typically have a separate salary identified. No adjustments are to be made for department chairs or for physicians serving on committees that do not materially affect clinical expectations. For example, a physician administrator who is 50% clinical and 50% administrative would be 0.5 clinical FTE.</li><li>Physicians performing specific research activities, funded separately by the medical practice, that affect the clinical FTE status to be below 1.0. These physicians have clear, separate material research responsibilities outside of their clinical expectations.</li><li>A physician performing specific administrative teaching activities, such as tutoring or lecturing, which are not performed during patient care activities, and that affect the clinical FTE status to be below 1.0. These activities are funded separately by the medical practice. These adjustments are not for typical supervision and resident training while performing patient care activities.</li></ul><p>  Keep in mind there are many organizations that inherently have less intensive administrative committee work, research or teaching responsibilities blended in with their physician’s role and salary, while still expecting 1.0 clinical performance. Our intent is not to try to break out such fine detail, but to capture the clear, material instances for certain individual physicians. <strong>It is our expectation that participants report the clinical FTE in the same manner as prior years.</strong></p>">(?)</a></label>
            <input type="text" data-validate="float" data-validate-min="0.00" data-validate-max="1.00"  data-required="true" />
          </div>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">5.</span>
            <label>Total FTE&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Total FTE" data-modal-html="<p>Record the total full-time equivalent status of the provider that corresponds with time spent performing all duties. Only report providers with a 0.5 FTE or greater. For example, if the provider works full-time, record 1.0; if the provider works 75% of the time, record 0.75. Please note that in some cases if the provider is performing all clinically related duties expected of a 1.0 clinical FTE at your organization, the FTE listed in this column could add up to more than a 1.0 total FTE.</p>">(?)</a></label>
            <input type="text" data-validate="float" />
          </div>
        </fieldset>
        <fieldset>
          <h3 class="">Note of purpose for Questions 6 through 9:</h3><p>Interest in breaking out various compensation components came from several participating organizations. It is important that all clinics report data in Question 10 as they have in the past. Questions 6 through 9 are optional, and the data will be reviewed once results are analyzed.</p>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">6.</span>
            <label>Call Pay (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Call Pay" data-modal-html="  If your organization compensates for call as a separate component, provide the amount paid here. This would include any call duties, standard or abnormal. This compensation is not separate from the clinical FTE as reported in Column 4 <strong>and is included in the Column 10 clinical compensation amount.</strong> Column 6 is optional and the data will be reviewed once results are analyzed.">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">7.</span>
            <label>Medical Directorship Pay (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Medical Directorship Pay" data-modal-html="  Medical directorship pay is all compensation paid for medical directorship duties. Medical directorship duties would include performing clinical responsibilities for other areas such as ASCs, home care services, hospice, hospital service lines (labs, imaging centers, etc.) and long-term care facilities. This compensation is not separate from the clinical FTE as reported in Column 4 <strong>and is included in the Column 10 Clinical Compensation amount.</strong> Medical directorship duties could include the following: attending meetings, clinical peer reviews, monitoring quality, technical and supervisory oversight, strategic development and clinical patient complaints. Column 7 is optional and the data will be reviewed once results are analyzed.">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">8.</span>
            <label>APC Supervisory Pay (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Supervisory Pay" data-modal-html="  If your organization compensates for APC supervisory duties as a separate component, provide the amount paid here. This amount could include flat stipends, a portion of APC productivity or production net of cost methods. This compensation is not separate from the clinical FTE as reported in Column 4 <strong>and is included in the Column 10 clinical compensation amount.</strong> Column 8 is optional and the data will be reviewed once results are analyzed.">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group numbered control-group-horizontal">
            <span class="num">9.</span>
            <label>Other Non-CPT Code Patient Care Compensation (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Other Non-CPT Code Patient Care Compensation" data-modal-html="  Report any other amounts that your organization pays for non-billable patient care services. The following are examples of non-billable patient care services: stipends for travel, contract compensation for occupational health services, etc. Many organizations are now incorporating a formula-based compensation system and would like to know what compensation amount, included in Column 10, is not attributed directly to billable, patient care activities (CPT codes). This amount <strong>should be included in the Column 10 clinical compensation amount.</strong> Most organizations with a salary-based system will not be able to break out the data for this column.">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">10.</span>
            <label>Clinical Compensation&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Clinical Compensation" data-modal-html="  <p>Clinical compensation is the total annual clinical compensation of the individual physician, including base and variable compensation plus all voluntary salary reductions. Examples of clinical compensation would include, but are not limited to, compensation paid as salary- or production-based compensation plans, any type of additional bonuses or incentives, clinically related medical directorships, call coverage or ancillary or APC supervision stipends.</p><p><strong>Excluded are any fringe benefits and employer payments to any type of retirement, pension, SERP or tax-deferred profit-sharing plan.</strong></p><p>Although the reported compensation should be all-inclusive for most physicians, participants should also exclude specific instances of the following:</p>   <ul><li>Specific compensation for administrative physicians whose clinical FTE status was adjusted, as defined in Column 4. The excluded amount should relate to the amount of the clinical FTE adjustment.</li>  <li>Specific compensation for research physicians whose clinical FTE status was adjusted, as defined in Column 4. The excluded amount should relate to the amount of the clinical FTE adjustment.</li>  <li>Specific compensation for teaching physicians whose clinical FTE status was adjusted, as defined in Column 4. The excluded amount should relate to the amount of the clinical FTE adjustment.</li>  <li>Do not include any signing bonuses recognized from a prior year hire.</li>  <li>A specific instance where the physician performs “moonlighting.” Moonlighting duties include duties not related to the physician’s specialty or department, duties performed outside of normal clinical hours and duties for which the physician is compensation outside of the medical group’s compensation plan. For example, a family practitioner works nights or weekends in the urgent care at a hospital for an hourly rate and production is not captured. There should be no FTE adjustment because this is done outside of the family practitioner’s practice. Please feel free to call SullivanCotter with any questions.</li></ul<p>Do not annualize any physician reported as greater than 1.0 <strong>clinical</strong> FTE. <strong>It is our expectation that participants report the clinical compensation in the same manner as prior years.</strong></p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="1" data-validate-max="999999" data-type="number"  data-required="true"/>
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">11.</span>
            <label>Administrative Pay (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Administrative Pay" data-modal-html="<p>Report the actual annual salary or stipend paid to each provider for time spent performing administrative duties. Examples of administrative duties would be the duties of physician administrators, the group’s overall medical director, possible extensive committees requiring significant time, etc. Do not include compensation for clinic-expected meetings that may have some monetary awards for attendance, but does not materially change clinical FTE expectations, as this is included in the clinical compensation Column 10.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">12.</span>
            <label>Research and Teaching Pay (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Research and Teaching Pay" data-modal-html="<p>Report the actual annual salary or stipend paid to each provider for time spent performing research or teaching duties.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">13.</span>
            <label>Total Compensation&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Total Compensation" data-modal-html="<p> Total compensation is the total annual compensation of the individual provider, including base and variable compensation plus all voluntary salary reductions. Examples of total compensation would include, but are not limited to, the following: compensation paid as salary- or production-based compensation plans, any type of additional bonuses or incentives, clinically related medical directorships, administrative stipends, research or teaching stipends, call coverage, ancillary or APC supervision stipends, moonlighting stipends and other unidentified compensation. The compensation reported in this column should equal reported W2 wages. Exclude any fringe benefits and employer payments to any type of retirement, pension, SERP or tax-deferred profit-sharing plan. Do not FTE annualize any physician data.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999999" data-type="number" />
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">14.</span>
            <label>Fringe Benefits&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Fringe Benefits" data-modal-html="<p> Fringe benefits include the employer’s share of FICA, payroll and unemployment taxes; health, disability, life and workers’ compensation insurance; dues and memberships to professional organizations; professional development; state and local license fees; and employer payment to defined benefits and contribution, 401(k), 403(b) and unqualified retirement plans. Malpractice liability insurance should be excluded.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">15.</span>
            <label>Gross Charges&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Gross Charges" data-modal-html="  <p>Gross charges are the total charges reported for services produced by the physician before such charges are reduced by courtesy allowances, employee discounts or non-collected accounts. Total charges are defined as the full dollar value, at the medical group’s established non-discounted rates, for services provided for all patients. Gross productivity should include the medical group’s full, non-discounted charges. Medicare charges should also be grossed up and not reported at the allowable charge. <strong>These charges are for professional activities only, and thus should exclude retail income (e.g., optical, pharmacy), drugs, vaccines, etc. Productivity by various categories of physician extenders, such as nurse practitioners, nurse midwives, CRNAs, etc., should also be excluded from the data.</strong> Charges should not include credits for the technical component of ancillary services. <strong>Technical procedures supervised, but not performed, by the physician should be excluded.</strong> Charges for codes with modifiers should be adjusted to reflect the modified amount. Report physicians with at least a 0.5 <strong><u>clinical</u></strong> FTE at their actual production amount. Guidelines for specific specialties are included below:</p><table><thead><tr><th>Specialty</th><th>Guideline</th></tr></thead><tbody ><tr><td>Allergy</td><td>Do not include antigen billings for the following CPT codes: 95144, 95145, 95146, 95147, 95148, 95149, 95165 and 95170.</td></tr><tr><td>Anesthesiology</td><td>Do not include CRNA-only performed activity. Production from cases performed as a team should be reported as 50% credit to thephysician.</td></tr><tr><td>Audiology</td><td>Do not include hearing aid sales.</td></tr><tr><td>Cardiology</td><td>Do not include technical component fees or technical components of global fees for EKGs, GXTs, echos, etc.</td></tr><tr><td>GI Medicine</td><td>Do not include technical component fees.</td></tr><tr><td>Medical Oncology</td><td>Do not include billings for drugs.</td></tr><tr><td>Neurology</td><td>Do not include technical component fees or technical components of global fees for EEGs, EMGs or sleep studies.</td></tr><tr><td>OB/GYN</td><td>Do not include technical component fees or technical components of global fees for ultrasound tests.</td></tr><tr><td>Optometry and Ophthalmology</td><td>Do not include eyewear or contact sales.</td></tr><tr><td>Otolaryngology</td><td>Do not include production related to audiology services.</td></tr><tr><td>Pathology</td><td>Do not include technical component fees or technical components of global fees for pathology exams.</td></tr><tr><td>Pulmonary Disease</td><td>Do not include technical component fees or technical components of global fees for pulmonary tests.</td></tr><tr><td>Radiology</td><td>Do not include technical component fees or technical components of global fees for radiological exams.</td></tr><tr><td>Radiation Oncology</td><td>Do not include technical component fees or technical components of global fees for oncology services.</td></tr></tbody></table>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">16.</span>
            <label>Collected Charges&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Collected Charges" data-modal-html="<p>  Indicate the actual dollar amount collected of gross productivity. This will be the net of contractual arrangements, discounts and bad debts.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999999" data-type="number" />
          </div>
        </fieldset>
        <fieldset>
          <h3>Note for visits:</h3> 
          <p>Visits are the total number of patient visits during the calendar or most recent fiscal year. Patient visits are recorded as a face-to-face patient encounter. If a patient has only an ancillary service, as ordered by a physician, but has no personal physician contact, this should not be recorded as a physician patient visit (examples would be lab tests, imaging, etc.). Some exceptions are outlined in Column 21.</p>
          <p>If the patient was only seen by staff (a nurse or a technician), then no visit should be recorded. Multiple visits by a single patient to a single physician during the same day are counted as only one visit. <strong>Columns 17 and 18 should include the following types of visits depending on the place of service:</strong></p>
          <ul>
            <li>Only procedures from evaluation and management codes (CPT codes 99201 to 99499) or medicine codes (CPT codes 90800 to 99199). Some of the medicine codes contain the administration of injections and chemotherapy. Also, please include G codes. As described above, if no physician personal interaction with the patient is performed, no visit is recorded.</li>
            <li>Preoperative and postoperative visits and other visits associated with a global charge (e.g., CPT code 99024).</li>

            <li>For obstetrical care, if a single CPT-4 code is used for a global service, count each ambulatory contact separately. Each prenatal and postnatal visit is an ambulatory encounter. The delivery is counted as a single surgical case (CPT codes 0500F, 0502F and 0503F).</li>
          </ul>
        <p>If your organization cannot exclude visits by staff, then please exclude all visit information. Report physicians and APC providers with at least 0.5 FTE at their actual visit or consultation amount.</p>

          <div class="control-group control-group-horizontal numbered">
            <span class="num">17.</span>
            <label>Inpatient Visits&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Inpatient Visits" data-modal-html="<p>  <strong>Use the above definition for E&M codes and medicine codes depending on place of service.</strong> Also include inpatient hospital CMS service codes (CPT codes 99221 to 99239, 99251 to 99255, 99356 to 99359, 99465, 99469 and 99471).</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">18.</span>
            <label>Outpatient Visits&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Outpatient Visits" data-modal-html="<p><strong>  Use the above definition for E&M codes and medicine codes depending on place of service.</strong> Also include office, urgent care facility, ambulatory surgical center, nursing home and emergency room CMS service codes (CPT codes 99201 to 99220, 99281 to 99355, 99360 to 99464, 99466 to 99465, 99470 and 99472 to 99499).</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">19.</span>
            <label>Surgery Visits&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Surgery Visits" data-modal-html="<p>  For surgical procedures, record the case as one visit and not the number of procedures performed, as multiple procedures may be performed during once case. Surgery encounters include cases performed on both an inpatient and outpatient basis (CPT codes 10000 to 69999).</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">20.</span>
            <label>Total Visits&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Total Visits" data-modal-html="<p>  Total visits are the total number of patient visits during the calendar or most recent fiscal year. Patient visits are recorded as a face-to-face patient encounter. For surgical and anesthesia procedures, record the case as one visit and not the number of procedures performed. For global codes, such as deliveries, a visit should be recorded for each patient encounter in the global code. In the event that a patient visits two or more separate departments during the day and sees a physician in each department, this is recorded as a patient visit at each department. If a patient has only an ancillary service, as ordered by a physician, but has no personal physician contact, this should not be recorded as a physician patient visit (examples would be lab tests, EKGs, EEGs, injections, etc.). If the patient was seen only by a non-physician provider or technician, no visit should be recorded. Multiple visits by a single patient to a single physician during the same day are counted as only one visit. If your organization cannot exclude these types of visits, then please exclude all visit information. Report physicians with at least a 0.5 FTE at their actual visit or consultation amount.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">21.</span>
            <label>Other Encounters&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Other Encounters" data-modal-html="<p>  Other encounters are other types of physician-performed procedures. Guidelines for specific specialties are included below:</p><table><thead>   <tr><th>Specialty</th><th>Guidelines</th><tr><thead><tbody><tr><td>Anesthesiology</td><td>  Cases: CPT codes 00100-01999</td></tr><tr><td>Pathology</td><td> Tissue exams: CPT codes 88302-88309</td></tr><tr><td>Radiology</td><td> Reads: 70000 CPT codes</td></tr></tbody></table">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">22.</span>
            <label>Work RVUs&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Work RVUs" data-modal-html="<p>  Report calculated work relative value units (RVUs) as measured by the work resource based relative value scale (RBRVS), not weighted by a conversion factor attributed to ambulatory care, inpatient care or other professional services performed by each physician in the medical group, using the 2012 Centers for Medicare & Medicaid Services (CMS) scale. A work relative value unit is a non-monetary unit of measure that indicates the professional value of services provided by a physician or allied health care professional. Report FTE physicians with at least a 0.5 <strong><u>clinical</u></strong> FTE at their actual RVU amount. In order to make your work RVUs more compatible, all code frequencies with the modifiers described below should be adjusted by the indicated percentage. For example, a modifier of 80 (99210-80) indicates that the procedure was recorded as a surgery assist and therefore the department only received approximately 16.0% of the original RVU value. For occupational health physicians performing corporate or contracted services, either report RVU production for these services or indicate that they cannot be reported. If multiple modifiers are used, report work RVUs calculated using multiple modifiers.</p><h3>  Note for anesthesiologists: please report ASA values in this column as opposed to RVUs. The ASA values should include base units and time components.</h3><p> <em>Note regarding modifier 50: SullivanCotter requests that participants adjust volume of CPT codes based on any modifiers attached to the individual codes. There is a special circumstance with modifier 50. Medicare reimburses the code with the modifier at 150%. Many other payers reimburse by a two-code combination: one code without the modifier at 100%, another code with the modifier at 50%. When reporting bilateral data, please adjust the Medicare volume appropriately to reflect proper volume (e.g., multiplying Medicare volume by three).</em></p><table><thead><tr><th>Modifier</th><th>Brief Description</th><th colspan='2'>Percentage Adjusted</th></tr></thead><tbody><tr><td>22</td><td>Unusual Procedural Services</td><td colspan='2'>125.0%</td></tr><tr><td>50</td><td>Bilateral</td><td>50.0%</td><td>100.0%</td></tr><tr><td>51</td><td>Multiple</td><td colspan='2'>50.0%</td></tr><tr><td>52</td><td>Reduced Values</td><td colspan='2'>50.0%</td></tr><tr><td>53</td><td>Discontinued Procedure</td><td colspan='2'>70.0%</td></tr><tr><td>54</td><td>Surgical Care Only</td><td colspan='2'>20.0%</td></tr><tr><td>55</td><td>Postoperative Only</td><td colspan='2'>10.0%</td></tr><tr><td>56</td><td>Preoperative Only</td><td colspan='2'>62.5%</td></tr><tr><td>62</td><td>Two Surgeons</td><td colspan='2'>50.0%</td></tr><tr><td>74</td><td>Discontinued ASC Procedure</td><td colspan='2'>70.0%</td></tr><tr><td>76</td><td>Repeat Procedure</td><td colspan='2'>70.0%</td></tr><tr><td>78</td><td>Return to OR During Postoperative</td><td colspan='2'>16.0%</td></tr><tr><td>80</td><td>Assistant Surgeon</td><td colspan='2'>16.0%</td></tr><tr><td>81</td><td>Minimum Surgery Assist</td><td colspan='2'>16.0%</td></tr><tr><td>82</td><td>Assistant Surgeon – No Resident Available</td><td colspan='2'>16.0%</td></tr><tr><td>AS</td><td>Surgery Assist</td><td colspan='2'>16.0%</td></tr><tr><td>TC</td><td>Technical Component</td><td colspan='2'>0.0%</td></tr></tbody></table>">(?)</a></label>
            <input type="text" data-validate="float" data-validate-min="0" data-validate-max="999999" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">23.</span>
            <label>Primary Care Panel Size (Optional)&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Primary Care Panel Size" data-modal-html="<p>  <em>This column is a pilot for the collection of panel size for primary care providers only: family medicine, family medicine – branch, internal medicine, internal medicine – branch, internal medicine – office only, pediatrics and adolescent – general and pediatrics – branch. If you cannot provide this data, please leave blank.</em> Panel size is the number of patients served by a physician or physician group. A provider’s panel is a provider’s population of living patients, based on a count of unique patients seen within the last 18 months. Patients are assigned to a provider by the following:</p><ul><li>Patients who have seen only one provider for all visits, verified within the last three years, are assigned to that provider.</li><li>If a patient does not have a personal provider identified, the patient is assigned to a provider based on whom the patient saw the most often.</li><li>If the patient has seen multiple doctors the same number of times, the patient is assigned to the provider seen most recently.</li></ul><p>Based on compensation committee discussion, the following weights should be applied to the panel sizes reported. If your organization adjusts for weight in a similar fashion, and the adjustment is not materially different, please report those numbers and provide an explanation in Question 20 of the compensation profile.</p><h3>Age and Gender Panel Adjustment Table</h3><table><thead style='text-align: center'><tr><th style='border: none'>Age</th><th colspan='2' style='border: none'>Relative Weight</th></tr><tr><th>Years</th><th>Male</th><th>Female</th></tr></thead><tbody><tr><td>0-1</td><td>5.02</td><td>4.66</td></tr><tr><td>1</td><td>3.28</td><td>2.99</td></tr><tr><td>2</td><td>2.05</td><td>1.97</td></tr><tr><td>3</td><td>1.72</td><td>1.62</td></tr><tr><td>4</td><td>1.47</td><td>1.46</td></tr><tr><td>5-9</td><td>0.98</td><td>1.00</td></tr><tr><td>10-14</td><td>0.74</td><td>0.79</td></tr><tr><td>15-19</td><td>0.54</td><td>0.72</td></tr><tr><td>20-24</td><td>0.47</td><td>0.70</td></tr><tr><td>25-29</td><td>0.60</td><td>0.82</td></tr><tr><td>30-34</td><td>0.63</td><td>0.84</td></tr><tr><td>35-39</td><td>0.66</td><td>0.86</td></tr><tr><td>40-44</td><td>0.69</td><td>0.89</td></tr><tr><td>45-49</td><td>0.76</td><td>0.98</td></tr><tr><td>50-54</td><td>0.87</td><td>1.10</td></tr><tr><td>55-59</td><td>1.00</td><td>1.20</td></tr><tr><td>60-64</td><td>1.17</td><td>1.31</td></tr><tr><td>65-69</td><td>1.36</td><td>1.46</td></tr><tr><td>70-74</td><td>1.55</td><td>1.60</td></tr><tr><td>75-79</td><td>1.68</td><td>1.70</td></tr><tr><td>80-84</td><td>1.70</td><td>1.66</td></tr><tr><td>85+</td><td>1.57</td><td>1.39</td></tr></tbody></table>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="0" data-validate-max="999999" data-type="number" />
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">24.</span>
            <label>Physician's Years Since Residency&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Physician's Years Since Residency" data-modal-html="<p> The total number of years the physician has been working in that particular specialty since completing their residency program.</p>">(?)</a></label>
            <input type="text" data-validate="float" data-validate-min="1" data-validate-max="100" data-type="number" />
          </div>
        </fieldset>
        <fieldset>
          <div class="control-group numbered">
            <span class="num">25.</span>
            <label>Date of Hire&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Date of Hire" data-modal-html="<p>The date of hire for the physician.</p>">(?)</a></label>
            <select name="" id="" class="skinny inline">
              <option value="">Day</option>
            </select>
            <select name="" id="" class="skinny inline">
              <option value="">Month</option>
            </select>
            <select name="" id="" class="skinny inline">
              <option value="">Year</option>
            </select>
          </div>
          <div class="control-group control-group-horizontal numbered">
            <span class="num">26.</span>
            <label>Provider's Age&nbsp;<a tabindex="-1" href="#modal" data-toggle="modal" data-modal-title="Provider's Age" data-modal-html="<p> The age of the physician.</p>">(?)</a></label>
            <input type="text" data-validate="int" data-validate-min="1" data-validate-max="100" />
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
