$(document).foundation();

$('.top-bar').on('sticky.zf.stuckto:top', function(){
  $(this).addClass('shrink');
}).on('sticky.zf.unstuckfrom:top', function(){
  $(this).removeClass('shrink');
});

$(window).scroll(function(){

  var wScroll = $(this).scrollTop();


  if (wScroll >= 150) {
    $('.sticky').addClass('is-stuck');
  }


  if (wScroll >= 150) {
    $("#top").css({"opacity": 1});
  }else{
    $("#top").css({"opacity": 0});
  }

});

$("#top").click(function(){
  $('html, body').animate({
    scrollTop: 0
  },1500);
});
