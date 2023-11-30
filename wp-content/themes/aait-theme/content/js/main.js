$(document).ready(function () {
  var dir = $('html').attr('dir');
  // LOADING
  setTimeout(function () {
    $('.page-loading').fadeOut();
  }, 4000);

  // START NAV BAR

  $('.menu-btn').on('click', function () {
    // MOBILE NAVBAR
    $('.navbar-mobile').addClass('active');
    $('.overlay-all').addClass('active');
  });

  $('.close-menu-btn').on('click', function () {
    // MOBILE NAVBAR
    $('.contact-menu').removeClass('active');
    $('.overlay-all').removeClass('active');
  });

  // START FORM MODAL
  $('.form-close-btn').on('click', function () {
    $('.form-modal').removeClass('active');
    $('.overlay-all').removeClass('active');
  });
  $('.video-modal').on('click', function (e) {
    if ($(this)[0] == e.target) {
      $(this).removeClass('active');
    }
  });
  // USING OVERLAY ALL TO CLOSE ANY OPEN EVENT
  $('.overlay-all').on('click', function () {
    $(this).removeClass('active');
    $('.nav-bar .nav-flex .navbar-links').toggleClass('active');
    $('.navbar-links').removeClass('active');
    $('.navbar-mobile').removeClass('active');
    $('.menu-btn').removeClass('open');
    $('.contact-menu').removeClass('active');
    $('.form-modal').removeClass('active');
  });

  // CLOSE NAVBAR MOBILE
  $('.close-btn').on('click', function () {
    $('.navbar-mobile').removeClass('active');
    $('.overlay-all').removeClass('active');
  });

  // INPUT TYPE FILE MANIPULATE

  $('.form-wrapper form .input-wrap .file-wrap input[type=file]').on(
    'change',
    function () {
      $(this).addClass('show');
      $(this).parents('.input-wrap').find('.fake-file').addClass('hide');
    }
  );
  $('input[type="date"]').on('change', function () {
    $(this).addClass('show');
    $(this).parents('p').next().addClass('hide');
  });

  // USE MORE BUTTON TO MOVE TO SECTION WITHIUT CHANGE URL

  $('.home-header .main-slider .item .info .main-btn').click(function (e) {
    e.preventDefault();
    var h = $(this).attr('href');
    $('html, body').animate({
      scrollTop: $(h).offset().top,
    });
  });

  // NAVBAR MOBILE SUBMENU CONTROL
  $('.navbar-mobile .mobile-links .menu-item-has-children a').click(function (
    e
  ) {
    if ($(this).parent('li').hasClass('menu-item-has-children')) {
      e.preventDefault();
      $(this).next('.sub-menu').toggleClass('show');
      $(this).parent().toggleClass('clicked');
      $(this).toggleClass('arrow');
    }
  });

  // START NAVBAR LINKS ACTIVE
  // ADD ACTIVE LINK IN NAVBAR
  const currentLocation = location.href;
  const menuItem = document.querySelectorAll(
    '.nav-bar .nav-flex .navbar-links li a ',
    '.navbar-mobile .mobile-links > li a'
  );
  const menuLength = menuItem.length;
  for (let i = 0; i < menuLength; i++) {
    if (menuItem[i].href === currentLocation) {
      menuItem[i].className = 'active';
    }
  }
  // END NAVBAR LINKS ACTIVE

  // SLIDERS

  // MAIN SLIDER
  $('.main-slider').owlCarousel({
    loop: true,
    margin: 10,
    // rtl: true,
    rtl: dir == 'rtl' ? true : false,
    autoplay: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: [
      "<i class='owl-btn  fa-solid fa-arrow-right'></i>",
      "<i class='owl-btn  fa-solid fa-arrow-left '></i>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 1,
        nav: false,
        dots: false,
      },
      1000: {
        items: 1,
        nav: false,
        dots: false,
      },
    },
  });

  // TESTIMONIALS SLIDER
  $('.partners-slider').owlCarousel({
    loop: true,
    margin: 30,
    rtl: dir == 'rtl' ? true : false,
    autoplay: true,
    animateIn: 'fadeIn',
    animateOut: 'fadeOut',
    navText: [
      "<i class='owl-btn  fa-solid fa-arrow-right'></i>",
      "<i class='owl-btn  fa-solid fa-arrow-left '></i>",
    ],
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,
        nav: false,
        dots: false,
      },
      600: {
        items: 3,
        nav: true,
        dots: false,
      },
      1000: {
        items: 6,
        nav: true,
        dots: false,
      },
    },
  });

  // START WOW JS
  new WOW().init();

  // START SCROLL TO TOP
  let span = document.querySelector('.up');
  window.onscroll = () => {
    if (scrollY >= 400) {
      span.classList.add('active');
      // $('.fixed-nav').addClass('fixed');
    } else {
      span.classList.remove('active');
    }
  };
  span.onclick = () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth',
    });
  };

  // DISABLE FIRST OPTION IN SELECT

  // $('select option:first-child').prop('disabled', true);

  // // ==================TABS=======================
  $('.projects-section .filter-btns .filter-btn').click(function () {
    var idEle = $(this).attr('data-id');
    $(this).addClass('active').siblings().removeClass('active');
    $('.projects-section .wrapper .box').hide(0);
    $('.projects-section .wrapper .box.' + idEle).fadeIn(500);
  });

  const logo = document.querySelectorAll('.page-loading svg path');
  for (let i = 0; i < logo.length; i++) {
    console.log(`letter ${i} is ${logo[i].getTotalLength()} `);
  }

  // ACCORDION
  $('.accordion .heaad').on('click', function () {
    $('.accordion .accordion-body').slideUp(300);
    if ($(this).parent().hasClass('active')) {
      $(this).parent().removeClass('active');
      $(this).next('.accordion-body').slideUp(500);
      // $(this).slideUp(500);
    } else {
      $(this).parent().addClass('active').siblings().removeClass('active');
      $(this).next('.accordion-body').slideDown(500);
      // $(this).slideDown(500);
    }
  });

  // START LIGHT LIGHTGALLERY

  lightGallery(document.getElementById('bussiness-gallery'), {
    selector: '.image-wrap',
    plugins: [lgZoom, lgThumbnail],
  });
});
