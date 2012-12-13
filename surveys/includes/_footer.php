  
  <!-- Javascript Calls -->
  <script src="../../assets/js/jquery.js"></script>
  <script src="../../assets/js/bootstrap-dropdown.js"></script>
  <script src="../../assets/js/bootstrap-tabs.js"></script>
  <script src="../../assets/js/bootstrap-collapse.js"></script>
  <script src="../../assets/js/bootstrap-tooltip.js"></script>
  <script src="../../assets/js/bootstrap-modal.js"></script>
  <script src="../../assets/js/chosen.jquery.min.js"></script>
  <script src="../../assets/js/jquery.affix.js"></script>
  <script src="../../assets/js/jquery.input-dependencies.js"></script>
  <script src="../../assets/js/jquery.validation.js"></script>
  

  
  <script>
    $(document).ready(function(){
      $('a[rel="tooltip"]').tooltip();
      $('select.chzn').chosen();
      $('[data-toggle="modal"]').on('click', function (e) {
        // e.stopPropagation();
        var $this = $(this);
        var $target = $($this.attr('href'));
        if($this.attr('data-modal-title')){
          $target.find('.modal-title').text($this.attr('data-modal-title'));
        }
        if($this.attr('data-modal-html')){
          $target.find('.modal-body').html($this.attr('data-modal-html'));
        }
        // do something…
      });
    });
  </script>
 </body>
</html>