import './assets/styles/style.scss';
import './bootstrap/bootstrap';

$(document).ready(function ($) {
  $('.services__tabs a').on('click', function (e) {
    e.preventDefault();
    let service_link = $(this).data('service-link');
    // Get all elements with class='services__tab_content_item' and hide them
    $('.services__tab_content_item').hide();
    // Get all a elements with class="services__tab_link" and remove the class 'active'
    $('a.services__tab_link').removeClass('active');
    // Show the current tab, and add an 'active' class to the link that opened the tab
    $(this).addClass('active');
    $('#' + service_link).show();
  });

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