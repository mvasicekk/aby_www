jQuery(document).ready(function($) {

  // Code that uses jQuery's $ can follow here.
// pohybujici se link iamge "volna_mista"
var foo_width = $('body').width();
if ( foo_width > 736 ) {
  var baseTop = $("div.field.field-name-field-volna-mista-menu").offset().top;
  $(window).scroll(function () {
      var top = $(window).scrollTop();
      if (top >= baseTop) {
          $("div.field.field-name-field-volna-mista-menu").css({
              "position": "fixed",
                  "top": "2px",
                  "z-index": "450",
                  "margin-top":"0px"
          });
      } else if (top < baseTop) {
          $("div.field.field-name-field-volna-mista-menu").css({
              "position": "",
                  "top": ""
          });
      }
  });
}
// ***************** //
// vzv pohyb dolu a nahoru
var x = $(".vzv_vozik").offset();
   //console.log("Top: " + x.top + " Left: " + x.left);
  var lastScrollTop = 0;
  $(window).scroll(function(event){

   var st = $(this).scrollTop();
   //console.log(st);
   // fuck it works !
   if(st >= 500){
     if (st > lastScrollTop){
       $(".vzv_vozik").addClass('move');
         // downscroll code
         //console.log('down');
         $(".vzv_vozik").removeClass('rotated');
     } else {
        // upscroll code
        //console.log('up');
        // roatce obrazku
        $(".vzv_vozik").addClass('rotated');

     }
     lastScrollTop = st;
   }else{
      $(".vzv_vozik").removeClass('move');
   }
   if(st >= 1700){
     $(".vzv_vozik").css({
         "display": "none"
     });
   }else{
     $(".vzv_vozik").css({
         "display": ""
     })
   }

  });
// ********************
$(".mMenu > ul > li > a").filter(function(){
    return this.href == location.href.replace(/#.*/, "");
}).addClass("active");

// end
});
