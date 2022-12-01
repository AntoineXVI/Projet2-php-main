$(document).ready(function(){
    $('.sidenav').sidenav();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
   
  $('.carousel.carousel-slider').carousel({
      fullWidth: true,
  });
 
 
    $("#black").click(function(){
      $("#color").css("background-color", "black");
  })
 
 
    $("#white").click(function(){
      $("#color").css("background-color", "white");
  })
 
   
    $("#grey").click(function(){
      $("#color").css("background-color", "grey");
  })
});
