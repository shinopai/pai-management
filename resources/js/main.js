$(function(){
  // logout button
  logoutForm = $('.header__form');
  logoutForm.hide();

  $('.header__btn').hover(function(){
    logoutForm.slideDown();
  }, function(){
    logoutForm.slideUp();
  })
})
