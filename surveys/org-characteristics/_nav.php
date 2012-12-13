<?php $pageName = str_replace('.php', '', basename($_SERVER['PHP_SELF'])); ?>
<!-- Container Start -->
<div class="container">
  <div class="survey-header">
    <ol class="nav with-separator breadcrumbs">
      <li class="logo-360"></li>
      <li><a href="#">Surveys</a></li>
      <li><a href="">Survey of Organization Characteristics</a></li>
      <li>Participate</li>
    </ol>
  </div>
</div>
<!-- Container End -->
<div class="container">
  <nav class="btn-group survey-nav section-3">
    <?= $pageName == 1 ? '<span href="" class="btn btn-grey btn-small btn-prev btn-disabled">prev<span class="icon icon-prev"></span></span>' : '<a href="'.($pageName + 1).'.php" class="btn btn-grey btn-small btn-prev">Next<span class="icon icon-prev"></span></a>' ?>
    
    <div class="btn-section btn-1">
      <div class="btn-section-label <?= $pageName == 1 ? 'active' : '' ?>">Pre-Survey</div>
      <a href="1.php" rel="tooltip" title="Assignments" class="btn btn-grey btn-small <?= $pageName == 1 ? 'active' : '' ?>">Assignments <span class="icon <?= $pageName > 1 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <div class="btn-section btn-4">
      <div class="btn-section-label <?= $pageName < 6 && $pageName > 1 ? 'active' : '' ?>">Characteristics</div>
      <a href="2.php" rel="tooltip" title="Structure" class="btn btn-grey btn-small <?= $pageName == 2 ? 'active' : '' ?>">Structure <span class="icon <?= $pageName > 2 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="3.php" rel="tooltip" title="Teaching Programs" class="btn btn-grey btn-small <?= $pageName == 3 ? 'active' : '' ?>">Teaching Programs <span class="icon <?= $pageName > 3 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="4.php" rel="tooltip" title="Financial Data" class="btn btn-grey btn-small <?= $pageName == 4 ? 'active' : '' ?>">Financial Data <span class="icon <?= $pageName > 4 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
      <a href="5.php" rel="tooltip" title="Operating Data" class="btn btn-grey btn-small <?= $pageName == 5 ? 'active' : '' ?>">Operating Data <span class="icon <?= $pageName > 5 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <div class="btn-section btn-1">
      <div class="btn-section-label <?= $pageName == 6 ? 'active' : '' ?>">Review</div>
      <a href="6.php" rel="tooltip" title="Review" class="btn btn-grey btn-small <?= $pageName == 6 ? 'active' : '' ?>">Review <span class="icon <?= $pageName > 6 ? 'icon-ok' : 'icon-empty' ?>"></span></a>
    </div>
    <?= $pageName == 14 ? '<span href="" class="btn btn-grey btn-small btn-next btn-disabled">next<span class="icon icon-next"></span></span>' : '<a href="'.($pageName + 1).'.php" class="btn btn-grey btn-small btn-next">Next<span class="icon icon-next"></span></a>' ?>
  </div>
</nav>
