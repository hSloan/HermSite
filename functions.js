$(document).ready(function() {

$('.content').hide();

$(".link").click(function(){$('.content').show();});

$(".close-classic").click(function(){
  $(".content").slideUp("slow");
  $('.close-box').hide("slow");
});


$(".link").click(function() {
$(".content-container").css({"top":"20%"});
});


$("#link-1").click(function(){
  $("#content-1").slideToggle("slow");
  $('.close-box').show("slow");
  $("#content-2").slideUp("slow");
  $("#content-3").slideUp("slow");
  $("#content-4").slideUp("slow");
  $("#content-5").slideUp("slow");
  });

$("#link-2").click(function(){
  $("#content-2").slideToggle("slow");
  $('.close-box').show("slow");
  $("#content-1").slideUp("slow");
  $("#content-3").slideUp("slow");
  $("#content-4").slideUp("slow");
  $("#content-5").slideUp("slow");
  });

$("#link-3").click(function(){
  $("#content-3").slideToggle("slow");
  $('.close-box').show("slow");
  $("#content-2").slideUp("slow");
  $("#content-1").slideUp("slow");
  $("#content-4").slideUp("slow");
  $("#content-5").slideUp("slow");
  });

$("#link-4").click(function(){
  $("#content-4").slideToggle("slow");
  $('.close-box').show("slow");
  $("#content-2").slideUp("slow");
  $("#content-3").slideUp("slow");
  $("#content-1").slideUp("slow");
  $("#content-5").slideUp("slow");
  });

$("#link-5").click(function(){
  $("#content-5").slideToggle("slow");
  $('.close-box').show("slow");
  $("#content-2").slideUp("slow");
  $("#content-3").slideUp("slow");
  $("#content-4").slideUp("slow");
  $("#content-1").slideUp("slow");
  });

});
