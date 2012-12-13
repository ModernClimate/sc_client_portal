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
      return true;
    }

    if(type !== 'checkbox' && $this.val() !== ''){
      console.log('oi');
      enableElements($($this.attr('data-dependency-target')));
      return true;
    }
    
    disableElements($($this.attr('data-dependency-target')));
  }

  function enableElements($target){
    console.log($target);
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
    $('[data-dependency-trigger]').on('change keyup', function(){  
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

