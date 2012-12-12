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
            <h1 class="borderless">Confirm Survey Summary & Submission.</h1>
            <p class="bordered">Once you submit the survey you won’t be able to return to change responses.</p>
            <ol class="divided-overview">                          
              <li>
                <span class="overview-title">Characteristics</span>
                <ol class="">
                  <li><a href="">Org Structure</a>  <span class="fr status-errors">Errors!</span></li>
                  <li><a href="">Teaching Programs</a> <span class="fr status-in-progress">In Progess</span></li>
                  <li><a href="">Financial Data</a> <span class="fr status-complete">Marked as Complete</span></li>
                  <li><a href="">Operating Data</a> <span class="fr">Not completed</span></li>
                </ol>
              </li>
              <li>
                <span class="overview-title">Section Title</span>
                <ol class="">
                  <li><a href="">Org Structure</a>  <span class="fr">Not completed</span></li>
                  <li><a href="">Teaching Programs</a> <span class="fr status-in-progress">In Progess</span></li>
                </ol>
              </li>
              <li>
                <span class="overview-title">Section Title</span>
                <ol class="">
                  <li><a href="">Operating Data</a> <span class="fr">Not completed</span></li>
                </ol>
              </li>
            </ol>

            <footer class="submit-group">
              <a href="" class="fr btn btn-blue">submit survey</a>
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
