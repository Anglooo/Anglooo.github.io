

$(document).ready(function() {

    if (document.cookie.indexOf("hasAccessedBefore") >= 0) {
      alert("cookie found")
      document.getElementById('cookieWarning').style.display = 'none';
    }
    
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

