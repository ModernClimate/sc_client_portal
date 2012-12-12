var Affix = (function() {
  var didScroll = false;
  var didResize = false;
  var $window = $(window);

  function calculateOriginalY($this, offset){
    $this.attr({
      'data-original-y': offset.top
    });
  }
  function calculateOriginalX($this, offset, width){
    $this.attr({
      'data-original-x': $window.width() - $this.width() - offset.left
    });
  }
  function calculateOriginalWidth($this, width){
    $this.attr({
      'data-original-width': width
    });
  }
  function calculateOriginalWindowWidth($this){
    $this.attr({
      'data-original-window-width': $window.width()
    });
  }

  function recalculateOriginals(){
    var $this = $(this);
    var windowWidth = $window.width();
    var widthRatio = $window.width() / $this.attr('data-original-window-width');
    $this.attr({
      'data-original-width': $this.attr('data-original-width') * widthRatio,
      'data-original-window-width': windowWidth
    });

  }

  function testPosition(winY){
    $('[data-affix]').each(function(){
      var $this = $(this);
      if(winY > $this.attr('data-original-y')){
        $this.addClass('affixed');
        $this.css({
          'right' : $this.attr('data-original-x') + 'px',
          'width' : $this.attr('data-original-width') + 'px'
        });
      }else{
        $this.removeClass('affixed');
        $this.attr('style', '');
      }
    });
  }
  //
  // Sets up the event handlers
  //
  function initUIBindings() {
    $('[data-affix]').each(function(){
      var $this = $(this);
      var offset = $this.offset();
      var width = $this.width();
      calculateOriginalY($this, offset);
      calculateOriginalX($this, offset, width);
      calculateOriginalWidth($this, width);
      calculateOriginalWindowWidth($this);
    });

    $(window).on('scroll', function(){
      didScroll = true;
    });
     $(window).on('resize', function(){
      didResize = true;
    });

    setInterval(function(){
      if (didScroll === false) {
        return false;
      }
      testPosition($window.scrollTop());
      didScroll = false;
    }, 33);
    setInterval(function(){
      if (didResize === false) {
        return false;
      }
      $('[data-affix]').each(recalculateOriginals);
      testPosition($window.scrollTop());
      didResize = false;
    }, 33);
  }

  //
  // Runs on init
  //

  return {

    init: function() {
      console.log('oi');
      if($('[data-affix]').length < 1){
        return false;
      }
      initUIBindings();
    }
  };
})();
$(document).ready(function(){
  Affix.init();
});

