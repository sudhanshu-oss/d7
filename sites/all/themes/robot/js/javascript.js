//(function($){
//  $(document).ready(function(){
//  $('#search-block-form input:text').autofill({
//    value: "Search..."
//  });
//});  
//})(jQuery)


(function($){
Drupal.behaviors.robot = {
  attach: function(context){
    $('#search-block-form input:text', context).autofill({
    value: "Search..."
  }); 
  }  
};
})(jQuery);