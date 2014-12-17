/**
 * My jquery.js
 *
 * Michael Filbey
 */
(function($) {
    // Inside of this function, $() will work as an alias for jQuery()
    // and other libraries also using $ will not be accessible under this shortcut

// Equal height columns
  equalheight = function(container){

  var currentTallest = 0,
       currentRowStart = 0,
       rowDivs = new Array(),
       $el,
       topPosition = 0;
   $(container).each(function() {

     $el = $(this);
     $($el).height('auto')
     topPostion = $el.position().top;

     if (currentRowStart != topPostion) {
       for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
         rowDivs[currentDiv].height(currentTallest);
       }
       rowDivs.length = 0; // empty the array
       currentRowStart = topPostion;
       currentTallest = $el.height();
       rowDivs.push($el);
     } else {
       rowDivs.push($el);
       currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
     for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
       rowDivs[currentDiv].height(currentTallest);
     }
   });
  }

  $(document).ready(function(){
    equalheight('.service-list li');
  });


  $(window).resize(function(){
    equalheight('.service-list li');
  });

  //mailto

 $(document).ready(function(){
  mailto = $("a[href^='mailto:']").attr('href');
  $("a[href^='mailto:']").attr('href',mailto.replace(/_\[\at\]\_/gi,"@"));
  email = $('.mail').html();
  $('.mail').html(email.replace(/_\[\at\]\_/gi,"@"));

});

})(jQuery);