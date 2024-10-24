// owl carousel
$(document).ready(function () {
  $(function () {
    // Owl Carousel
    var owl = $('.owl-carousel')
    owl.owlCarousel({
      items: 1,
      margin: 20,
      autoplay: true,
      autoplayTimeOUt: 500,
      autoplayHOverPause: true,
      smartSpeed: 500,
      loop: true,
      nav: false,
      // responsive: {
      //     0: {
      //         items: 1,
      //         nav: false
      //     },
      //     767: {
      //         items: 2,
      //         nav: false
      //     }
      // }
    })
  })
})

$('.slider').owlCarousel({
  loop: true,
  autoplay: true,
  autoplayHoverPause: true,
  slideTransition: '',
  autoplayTimeout: 3000,
  autoplaySpeed: 3000,
  smartSpeed: 1500,
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    767: {
      items: 2,
      nav: false,
    },
    1024: {
      items: 3,
      nav: false,
    },
  },
})

$('.slider-team').owlCarousel({
  loop: true,
  autoplay: true,
  autoplayHoverPause: true,
  slideTransition: '',
  autoplayTimeout: 3000,
  autoplaySpeed: 3000,
  smartSpeed: 1500,
  responsive: {
    0: {
      items: 1,
      nav: false,
    },
    1024: {
      items: 2,
      nav: false,
    },
    1080: {
      items: 3,
      nav: false,
    },
  },
})

// owl carousel end

// nav js start

// define all UI variable
const navToggler = document.querySelector('.nav-toggler')
const navMenu = document.querySelector('.site-navbar ul')
const navLinks = document.querySelectorAll('.site-navbar a')

// load all event listners
allEventListners()

// functions of all event listners
function allEventListners() {
  navToggler.addEventListener('click', togglerClick)
  navLinks.forEach((elem) => elem.addEventListener('click', navLinkClick))
}

// togglerClick function
function togglerClick() {
  navToggler.classList.toggle('toggler-open')
  navMenu.classList.toggle('open')
}

// navLinkClick function
function navLinkClick() {
  if (navMenu.classList.contains('open')) {
    navToggler.click()
  }
}

// color changes js
function swapStyleSheet(sheet) {
  document.getElementById('pagestyle').setAttribute('href', sheet)
}

function colorButton() {
  const tColor = document.getElementById('color-options')
  if (tColor.style.display === 'block') {
    tColor.style.display = 'none'
  } else {
    tColor.style.display = 'block'
  }
}
