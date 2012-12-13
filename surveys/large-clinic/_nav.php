<?php
    $pageName = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
?>
<!-- Container Start -->
<div class="container">
  <div class="survey-header">
    <ol class="nav with-separator breadcrumbs">
      <li class="logo-360"></li>
      <li><a href="#">Surveys</a></li>
      <li><a href="">Large Clinic Physician Compensation and Productivity Survey</a></li>
      <li>Participate</li>
    </ol>
  </div>
</div>
<!-- Container End -->
<div class="container">
  <nav class="btn-group survey-nav section-6">
    <?= $pageName == 1 ? '<span href="" class="btn btn-grey btn-small btn-prev btn-disabled">prev<span class="icon icon-prev"></span></span>' : '<a href="'.($pageName + 1).'.php" class="btn btn-grey btn-small btn-prev">Next<span class="icon icon-prev"></span></a>' ?>
    
    <div class="btn-section btn-3">
      <div class="btn-section-label <?= $pageName < 4 ? 'active' : '' ?>">Pre-Survey</div>
      <a href="1.php" rel="tooltip" title="Survey Participation" class="btn btn-grey btn-small <?= $pageName == 1 ? 'active' : '' ?>">Survey Participation <span class="icon <?= $pageName > 1 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="2.php" rel="tooltip" title="Assignments" class="btn btn-grey btn-small <?= $pageName == 2 ? 'active' : '' ?>">Assignments <span class="icon <?= $pageName > 2 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="3.php" rel="tooltip" title="Characteristics" class="btn btn-grey btn-small <?= $pageName == 3 ? 'active' : '' ?>">Characteristics <span class="icon <?= $pageName > 3 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <div class="btn-section btn-3">
      <div class="btn-section-label <?= $pageName < 7 && $pageName > 3 ? 'active' : '' ?>">Compensation</div>
      <a href="4.php" rel="tooltip" title="Individual" class="btn btn-grey btn-small <?= $pageName == 4 ? 'active' : '' ?>">Individual <span class="icon <?= $pageName > 4 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="5.php" rel="tooltip" title="New Hire" class="btn btn-grey btn-small <?= $pageName == 5 ? 'active' : '' ?>">New Hire <span class="icon <?= $pageName > 5 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="6.php" rel="tooltip" title="Administrative" class="btn btn-grey btn-small <?= $pageName == 6 ? 'active' : '' ?>">Administrative <span class="icon <?= $pageName > 6 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
     <div class="btn-section btn-1">
      <div class="btn-section-label <?= $pageName == 7 ? 'active' : '' ?>">Profile</div>
      <a href="7.php" rel="tooltip" title="Compensation" class="btn btn-grey btn-small <?= $pageName == 7 ? 'active' : '' ?>">Compensation <span class="icon <?= $pageName > 7 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
     <div class="btn-section btn-1">
      <div class="btn-section-label <?= $pageName == 8 ? 'active' : '' ?>">Contact Hours</div>
      <a href="8.php" rel="tooltip" title="Patient" class="btn btn-grey btn-small <?= $pageName == 8 ? 'active' : '' ?>">Patient <span class="icon <?= $pageName > 8 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
     <div class="btn-section btn-2">
      <div class="btn-section-label <?= $pageName < 11 && $pageName > 8 ? 'active' : '' ?>">Order</div>
      <a href="9.php" rel="tooltip" title="Summary" class="btn btn-grey btn-small <?= $pageName == 9 ? 'active' : '' ?>">Summary <span class="icon <?= $pageName > 9 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="10.php" rel="tooltip" title="Processing" class="btn btn-grey btn-small <?= $pageName == 10 ? 'active' : '' ?>">Processing <span class="icon <?= $pageName > 10 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <div class="btn-section btn-1">
      <div class="btn-section-label <?= $pageName == 11 ? 'active' : '' ?>">Review</div>
      <a href="11.php" rel="tooltip" title="Review" class="btn btn-grey btn-small <?= $pageName == 11 ? 'active' : '' ?>">Review <span class="icon <?= $pageName > 11 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <?= $pageName == 11 ? '<span href="" class="btn btn-grey btn-small btn-next btn-disabled">next<span class="icon icon-next"></span></span>' : '<a href="'.($pageName + 1).'.php" class="btn btn-grey btn-small btn-next">Next<span class="icon icon-next"></span></a>' ?>
  </div>
</nav>
