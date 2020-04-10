import './assets/styles/style.scss';
import './bootstrap/bootstrap';

$(document).ready(function ($) {
  /**
   *
   */
  function __top_header_show() {
    $(this).remove();
    $('.top_header').show();
    $('.header__logo, .header__banner nav').hide();
  }

  $('.top_header__block').hover(__top_header_show);

  $('.top_header').hover(function (e) {
    if (e.type === 'mouseleave') {
      $('body .container.wrapper').prepend('<div class="top_header__block"></div>');
      $('.top_header__block').hover(__top_header_show);
      $('.top_header').hide();
      $('.header__logo, .header__banner nav').show();
    }
  });
});