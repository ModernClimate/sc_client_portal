var Validation = (function() {

   function isNumeric (n){
    n = n.replace(/,/g, "");
    return !isNaN(parseFloat(n)) && isFinite(n);
   }   

   function addCommas(nStr){

    nStr += '';
    nStr = nStr.replace(/,/g, "");

      var x = nStr.split('.');
      var x1 = x[0];
      var x2 = x.length > 1 ? '.' + x[1] : '';
      var rgx = /(\d+)(\d{3})/;
      while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
      }
      
      if(x2.length === 2){
        x2 = x2+ 0;
      } 
    //return(nStr);  
    return(x1 + x2);
  }  

  function niceNumbers (e){
    var $this = $(this);
    var val = $this.val();
    if(e.keyCode === 8 || e.keyCode === 91 || e.keyCode === 65 || e.keyCode === 188 || e.keyCode === 37 || e.keyCode === 38 || e.keyCode === 39 || e.keyCode === 40 || e.keyCode === 16){
      return false;
    }
    if(val.length < 3){
      return false;
    }

    if(!isNumeric(val.replace(/,/g, ""))){
      return false;
    }

    $this.val(addCommas(val));
       
  }

  function validateInput(){
    var $this = $(this);
    var $parent = $this.parent('.control-group');
    var type = $this.attr('data-validate');
    var isValid = true;
    var message = '';
    
    $parent.removeClass('control-group-error').find('.error-message').remove();

    if($this.val() === ''){
      return false;
    }
    switch (type){
      case 'float':
        isValid = isNumeric($this.val());
        message = 'Entry must be a number';
      break;
      case 'int' :
        isValid = validateInt($this.val());
        message = 'Entry must be a whole number';
      break;
      case 'string' :
        if(validateInt($this.val())){
          isValid = false;
        }
        message = 'Entry cannot be a number';
      break;

    }

    if(!isValid){
      $parent.addClass('control-group-error');
      if($parent.hasClass('control-group-horizontal')){
        $this.after('<span class="error-message">'+message+'</span>');
      }else{
        $this.before('<span class="error-message">'+message+'</span>');
      }
    }    
  }

  function validateInt (n){
    if(!isNumeric(n)){
      return false;
    }
    if(n.indexOf('.') !== -1){
      return false;
    }
    return true;
  }

  function requiredCounter(){
    console.log('test');
    var counter = $('[data-required]').length;
    $('[data-required]').each(function(){
      var $this = $(this);
      if($this.find('input:checked').length > 0){
        counter --;
        return true;
      }

      if($this.val() !== ''){
        counter --;
        return true;
      }
    });
    $('[data-required-display]').text(counter);
    
    if(counter === 1){
      $('[data-required-display]').html('<strong>' +counter + '</strong> required question remaining.');
    }else{
      $('[data-required-display]').html('<strong>' +counter + '</strong> required questions remaining.');
    }
  }

  //
  // Sets up the event handlers
  //
  function initUIBindings() {
    $('[data-type="number"]').on('keyup change', niceNumbers); 
    $('[data-validate]').on('keyup change', validateInput);
    $('[data-required] input').on('change', requiredCounter);
    $('input[data-required]').on('keyup', requiredCounter);
  }

  //
  // Runs on init
  //

  return {
    init: function() {
      initUIBindings();
      requiredCounter();
    }
  };
})();
Validation.init();
