function googleTranslateElementInit() {
  new google.translate.TranslateElement(
    { pageLanguage: 'en' },
    'google_translate_element'
  );
}
$(document).ready(function () {
  var w = window.innerWidth;

  if (w > 767) {
    $('#menu-jk').scrollToFixed();
  } else {
    // $('#menu-jk').scrollToFixed();
  }
});

$(document).ready(function () {
  $('.owl_banner').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    autoplay: true,
    dots: true,
    autoplayTimeout: 5000,
    navText: [
      '<i class="fa fa-angle-left"></i>',
      '<i class="fa fa-angle-right"></i>',
    ],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  $('.company_slide').owlCarousel({
    loop: true,
    margin: 60,
    nav: false,
    autoplay: true,
    dots: true,
    autoplayTimeout: 5000,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 2,
      },
      1000: {
        items: 4,
      },
    },
  });
});
