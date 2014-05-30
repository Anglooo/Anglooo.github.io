

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

blueimp.Gallery(
    document.getElementById('links').getElementsByTagName('a'),
    {
        container: '#blueimp-gallery-carousel',
        carousel: true
    }
);


