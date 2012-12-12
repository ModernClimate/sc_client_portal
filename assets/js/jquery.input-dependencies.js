var Dependencies = (function() {


  function toggle($this){
    var target = [];
    var type = $this.attr('type');
    var $siblingsWithTargets = $('[name=' + $this.attr('name') + '][data-dependency-target]');
    
    $siblingsWithTargets.each(function(){
      target.push($(this).attr('data-dependency-target'));
    });

    if(type !== 'checkbox'){
      disableElements($(target.join(',')));
    }

    if($this.attr('data-dependency-trigger') === 'true' && $this.prop('checked') === true){
      enableElements($($this.attr('data-dependency-target')));
    }else{
      disableElements($($this.attr('data-dependency-target')));
    }
  }

  function enableElements($target){
    $target.removeClass('control-group-disabled');
    $target.find('input,select,textarea').prop('disabled', false);
  }

  function disableElements($target){
    $target.addClass('control-group-disabled');
    $target.find('input,select,textarea').prop('disabled', true);
  }

  //
  // Sets up the event handlers
  //
  function initUIBindings() {
    $('[data-dependency-trigger]').on('change', function(){  
      var $this = $(this);
      toggle($this);
    });

    
  }

  //
  // Runs on init
  //

  return {
    init: function() {
      initUIBindings();
    }
  };
})();
Dependencies.init();

