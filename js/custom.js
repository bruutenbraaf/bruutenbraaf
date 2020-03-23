

var controller = new ScrollMagic.Controller();
jQuery('.pro').each(function () {
  var tween = TweenMax.to(jQuery('.bg', this), 5, { className: "+=active" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "100%" })
    .setTween(tween)
    .addTo(controller)
    .offset(-400)
});

var controller = new ScrollMagic.Controller();
jQuery('.pro').each(function () {
  var tween = TweenMax.to(jQuery('.lined', this), 5, { className: "+=smxs" });
  var scene = new ScrollMagic.Scene({ triggerElement: this, duration: "100%" })
    .setTween(tween)
    .addTo(controller)
    .offset(500)
});


jQuery('.burger').click(function (e) {
  jQuery('.burger').toggleClass('is--open');
  jQuery('nav').toggleClass('open');
});



var ua = navigator.userAgent.toLowerCase(); 
if (ua.indexOf('safari') != -1) { 
  if (ua.indexOf('chrome') > -1) {
  } else {
    jQuery('.fw').addClass('is--saf');
  }
}