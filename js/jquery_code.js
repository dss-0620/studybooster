$(document).ready(function(){
 $('.js--mobile-icon').click(function(){
  var nav=$('.js--navi');
  nav.slideToggle(300);
  if($('.js--mobile-icon i').hasClass('ion-md-menu'))
  { 
    nav.css('display','inline-block');
    $('.js--mobile-icon i').removeClass('ion-md-menu');
    $('.js--mobile-icon i').addClass('ion-md-close');
    $('.logo').css('display','none');
  }
  else{
    {
      nav.css('display','none');
      $('.js--mobile-icon i').removeClass('ion-md-close');
      $('.js--mobile-icon i').addClass('ion-md-menu');
      $('.logo').css('display','block');
    }
    
  }
 })
});