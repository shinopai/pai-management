$(function(){
  // logout button
  logoutForm = $('.header__form');
  logoutForm.hide();

  $('.header__btn').hover(function(){
    logoutForm.fadeIn();
  }, function(){
    logoutForm.fadeOut();
  })
})
