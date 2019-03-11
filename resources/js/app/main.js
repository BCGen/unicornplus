AOS.init()

// 點擊nav連結時 隱藏indexModal
document.querySelectorAll('#indexModal a').forEach(element => {
  element.onclick = () => {
    $('#indexModal').modal('hide')
  }
})

// 點擊nav連結時 隱藏phoneModal
document.querySelectorAll('#phoneModal a').forEach(element => {
  element.onclick = () => {
    $('#phoneModal').modal('hide')
  }
})
// ************card**************
var swiper = new Swiper('.swiper-cards-container', {
  loop: true,
  slidesPerView: 2,
  centeredSlides: true,
  spaceBetween: 50,
  pagination: {
    el: '.swiper-cards-pagination',
    clickable: true
  }
})
// ************cards-m***********
var swiper = new Swiper('.m-cards-container', {
  loop: true,
  slidesPerView: 1.4,
  centeredSlides: true,
  spaceBetween: 30,
  pagination: {
    el: '.m-cards-pagination',
    dynamicBullets: true
  }
})
// ************cards-m************
var swiper1 = new Swiper('.swiper-school-img', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  // autoHeight: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
})

var swiper2 = new Swiper('.swiper-school-content', {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: '.swiper-school-pagination',
    dynamicBullets: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
})
swiper2.on('slideNextTransitionStart', function() {
  swiper1.slideNext(300)
})

swiper2.on('slidePrevTransitionStart', function() {
  swiper1.slidePrev(300)
})
// *********min-school**********
var swiper1Min = new Swiper('.swiper-school-img-min', {
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  // autoHeight: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
})

var swiper2Min = new Swiper('.swiper-school-content-min', {
  slidesPerView: 1,
  loop: true,
  pagination: {
    el: '.swiper-school-pagination',
    dynamicBullets: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
})
swiper2Min.controller.control = swiper1Min;
swiper1Min.controller.control = swiper2Min;
// swiper2Min.on('slideNextTransitionStart', function() {
//   swiper1Min.slideNext(300)
// })

// swiper2Min.on('slidePrevTransitionStart', function() {
//   swiper1Min.slidePrev(300)
// })

// swiper1Min.on('slideNextTransitionStart', function() {
//   swiper2Min.slideNext(300)
// })

// swiper1Min.on('slidePrevTransitionStart', function() {
//   swiper2Min.slidePrev(300)
// })
// ********min-school********
var swiperVerticalBall = new Swiper('.swiper-vertical-ball', {
  direction: 'vertical',
  slidesPerView: 2.2,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0,
  pagination: {
    el: '.swiper-vertical-pagination',
    dynamicBullets: true,
    clickable: true
  }
})

var swiperVerticalContent = new Swiper('.swiper-vertical-content', {
  effect: 'fade',
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0
})

swiperVerticalBall.on('slideChange', function() {
  swiperVerticalContent.slideToLoop(swiperVerticalBall.realIndex, 300)
})

// *************vertical-m********************
var mVerticalBall = new Swiper('.m-vertical-ball', {
  // direction: "vertical",
  slidesPerView: 3.7,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0
  // mousewheel: true,
  // pagination: {
  //   el: '.m-vertical-pagination',
  //   dynamicBullets: true
  //   // clickable: true,
  // }
})

var mVerticalContent = new Swiper('.m-vertical-content', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0,
  // autoHeight:true,
  pagination: {
    el: '.m-vertical-content-pagination',
    dynamicBullets: true,
    clickable: true
  }
})

mVerticalBall.on('slideChange', function() {
  mVerticalContent.slideToLoop(mVerticalBall.realIndex, 300)
})
mVerticalContent.on('slideChange', function() {
  mVerticalBall.slideToLoop(mVerticalContent.realIndex, 300)
})

var mVerticalBallMin = new Swiper('.m-vertical-ball-min', {
  // direction: "vertical",
  slidesPerView: 2.1,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0
})
var mVerticalContentMin = new Swiper('.m-vertical-content-min', {
  slidesPerView: 1,
  centeredSlides: true,
  loop: true,
  spaceBetween: 0,
  // autoHeight:true,
  pagination: {
    el: '.m-vertical-content-pagination',
    dynamicBullets: true,
    clickable: true
  }
})

mVerticalBallMin.on('slideChange', function() {
  mVerticalContentMin.slideToLoop(mVerticalBallMin.realIndex, 300)
})
mVerticalContentMin.on('slideChange', function() {
  mVerticalBallMin.slideToLoop(mVerticalContentMin.realIndex, 300)
})

// ****************vertical-m********************

// ************message*************
let messageSwiperList = []

$('.MessageReadMore').each(function() {
  $(this).on('shown.bs.modal', function() {
    const id = $(this).attr('id')

    if (messageSwiperList.indexOf(id) === -1) {
      new Swiper(`#${id} .swiper-message-container`, {
        pagination: {
          el: `#${id} .swiper-message-pagination`,
          clickable: true
        }
      })
      messageSwiperList.push(id)
    }
  })
})

// ************message*************

// *****************************************************************************************************************11-30-整合
var swiper = new Swiper('.swiper-banner-container', {
  loop: true,
  spaceBetween: 30,
  effect: 'fade',
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
})

//* *********************navbar捲軸事件*********************************/
var nav = document.getElementById('navBar')

window.onscroll = function() {
  var screenTop = document.documentElement.scrollTop
  if (screenTop > 62) {
    nav.classList.add('fixed')
  } else {
    nav.classList.remove('fixed')
  }
}
// **************google maps*************

var tableMap

function initMap() {
  tableMap = new google.maps.Map(document.getElementById('gooMapTable'), {
    center: {
      lat: 35.658276,
      lng: 139.728525
    },
    zoom: 18,
    styles: [
      {
        stylers: [
          {
            saturation: -100
          },
          {
            gamma: 0.8
          },
          {
            lightness: 4
          },
          {
            visibility: 'on'
          }
        ]
      },
      {
        featureType: 'landscape.natural',
        stylers: [
          {
            visibility: 'on'
          },
          {
            color: '#5dff00'
          },
          {
            gamma: 4.97
          },
          {
            lightness: -5
          },
          {
            saturation: 100
          }
        ]
      }
    ]
  })
  var marker = new google.maps.Marker({
    position: {
      lat: 35.658276,
      lng: 139.728525
    },
    map: tableMap,
    title: 'Unicorn Kids International School'
  })

  initMap2()
}

// **************************手機板maps*************************

var phoneMap

function initMap2() {
  phoneMap = new google.maps.Map(document.getElementById('gooMapPhone'), {
    center: {
      lat: 35.658276,
      lng: 139.728525
    },
    zoom: 18,
    styles: [
      {
        stylers: [
          {
            saturation: -100
          },
          {
            gamma: 0.8
          },
          {
            lightness: 4
          },
          {
            visibility: 'on'
          }
        ]
      },
      {
        featureType: 'landscape.natural',
        stylers: [
          {
            visibility: 'on'
          },
          {
            color: '#5dff00'
          },
          {
            gamma: 4.97
          },
          {
            lightness: -5
          },
          {
            saturation: 100
          }
        ]
      }
    ]
  })
  var marker = new google.maps.Marker({
    position: {
      lat: 35.658276,
      lng: 139.728525
    },
    map: phoneMap,
    title: 'Unicorn Kids International School'
  })
}

// ========================modal滾軸頁面修正=========================

$('#indexModal').on('hidden.bs.modal', function (e) {
  location.href = "#" + hash;
})

$('#phoneModal').on('hidden.bs.modal', function (e) {
  location.href = "#" + hash;
})
