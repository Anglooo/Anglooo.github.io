

$(document).ready(function() {
    
    $('.carousel').each(function(){
    $(this).carousel({
        pause: 'hover',
            interval: 2500
        });
     });
});


 $("#penCarousel").hover(
    function(){
        $("#penCarousel").carousel('pause');
     },
    function() {
      $("#penCarousel").carousel('cycle');
    }
  );


$('#cookieAgreed').on('click', function (e) {

     alert("I am an alert box!");

})

