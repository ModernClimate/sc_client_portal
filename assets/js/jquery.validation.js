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
    var val = $this.val();
    
    $parent.removeClass('control-group-error').find('.error-message').remove();

    if(val === ''){
      return false;
    }


    switch (type){
      case 'float':
        isValid = isNumeric(val);
        message = isValid === false ? 'Entry must be a number' : '';
        
      break;
      case 'int' :
        isValid = validateInt(val);
        message = isValid === false ? 'Entry must be a whole number' : '';
      break;
      case 'string' :
        if(validateInt(val)){
          isValid = false;
        }
        message = isValid === false ? 'Entry cannot be a number' : '';
      break;
    }

    if(isValid && !isWithinRange(val.replace(/,/g, ""), $this.attr('data-validate-min'), $this.attr('data-validate-max'))){
      isValid = false;
      message = 'Entry must be between ' + addCommas($this.attr('data-validate-min')) + ' and ' + addCommas($this.attr('data-validate-max'));
    }        



    if(!isValid){
      $parent.addClass('control-group-error');
      if($parent.hasClass('control-group-horizontal')){
        $this.after('<span class="error-message">'+message+'</span>');
        return true;
      }
      if($parent.is('td')){
        $this.after('<span class="error-message">'+message+'</span>');
        return true;
      }

      $this.before('<span class="error-message">'+message+'</span>');
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

  function isWithinRange (n, min, max){
    if(!min && !max){
      return true;
    }
    if(parseFloat(n) < parseFloat(min) || parseFloat(n) > parseFloat(max)){
      return false;
    }
    return true;

  }

  function requiredCounter(){
    var emptyResponses = true;
    // console.log('test for empties');
    $('.control-group').not('.control-group-disabled').each(function(){
      var $this = $(this);
      var hasCheckRadios = $this.children('.checklist').length > 0 ? true : false;
      var hasTextInput= $this.children('input:text,textarea').length > 0 ? true : false;
      var hasSelect= $this.children('select').length > 0 ? true : false;
      if(hasCheckRadios){
        if($this.children('.checklist').find('input:checked').length < 1){
          // console.log('check: ' + $this.find('.num:first').text());
          // console.log($this.children('.checklist').find('input:checked'));
          emptyResponses = true;
          return false;
        }
      }

      if(hasTextInput){
        // console.log('text');
        if($this.children('input,textarea').val() === ''){
          // console.log('text: ' + $this.find('.num:first').text());
          // console.log($this.children('input[type=text],select,textarea'));
          emptyResponses = true;
          return false;

        }
      }
       emptyResponses = false;
    });
    if(emptyResponses){
      $('[data-remaining]').html('Required questions remaining.');
      $('#jump').removeClass('btn-disabled');
    }else{
      $('[data-remaining]').html('No questions remaining.');
      $('#jump').addClass('btn-disabled');


    }
    
  }

  function jumpToOpenControlGroup(e){
    e.preventDefault();

    $('.control-group:not(.control-group-disabled)').each(function(){
      var $this = $(this);
      var hasCheckRadios = $this.children('.checklist').length > 0 ? true : false;
      var hasTextInput= $this.children('input:text,textarea').length > 0 ? true : false;
      var hasSelect= $this.children('select').length > 0 ? true : false;

      if($this.children('.checklist,input,select,textarea').length < 1){
        return true;
      }
      if(hasCheckRadios){
        if($this.children('.checklist').find('input:checked').length > 0){
          return true;
        }
      }
      if(hasTextInput){
        // console.log('has input');
        if($this.children('input,textarea').val() !== ''){
          return true;
        }
      }
      if(hasSelect){
        if($this.children('select').val() !== ''){
          return true;
        }
      }
      var scrollPos = $this.offset().top;
      if($('html').hasClass('ie8')){
        scrollPos = scrollPos + $('html').scrollTop();

      }
      
      $('html, body').animate({scrollTop:scrollPos}, 'fast', function(){
        $this.find('input:first,select:first,textarea:first').focus();
      });
      
      return false;

    });
  }

  function sumInputs(){
    var $this = $(this);
    var total = 0;
    var id = $this.attr('data-sum-inputs');
    var $totalTarget = $($this.attr('data-sum-target'));
    $('input[data-sum-inputs='+id+']').each(function(){
      total += $.isNumeric($(this).val()) === true ? parseFloat($(this).val()) : 0
    });
    $totalTarget.parent().find('.error-message').remove();
    if(!$totalTarget.attr('data-sum-max')){
       $totalTarget.text(total);
       return true;
    }
    if(total !== parseFloat($totalTarget.attr('data-sum-max'))){
        message = 'Column Totals must equal '+$this.attr('data-validate-max');
        $totalTarget.after('<span class="error-message">'+message+'</span>');
    }
    $totalTarget.text(total);


  }
  //
  // Sets up the event handlers
  //
  function initUIBindings() {
    $('[data-type="number"]').on('keyup change', niceNumbers); 
    $('[data-validate]').on('keyup change', validateInput);
    $('input,select,textarea').on('change', requiredCounter);
    $('input[data-required]').on('keyup', requiredCounter);
    $('input[data-sum-inputs]').on('keyup', sumInputs);

    $('#jump').on('click', jumpToOpenControlGroup);

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
