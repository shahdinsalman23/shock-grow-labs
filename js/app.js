// Initialize Wow
new WOW().init();



$('.shape-body-slider').slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    speed: 200,
    dots: true,
    arrows: true,
    fade: true
  });


  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


//   const scroll = new LocomotiveScroll({
//     el: document.querySelector('#main'),
//     smooth: true
// });