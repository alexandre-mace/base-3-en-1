$(function () { // wait for document ready
  // init
  var controller = new ScrollMagic.Controller();

  let firstAnim = new TimelineMax()
    .fromTo("p.number.one", 1, {x: '50%',scaleX: 1, scaleY: 5}, {x: '0%', scaleY: 1, scaleY: 1, ease: Linear.easeNone}, 0)
    .fromTo("img.number.one", 1, {x: '50%',scaleX: 1, scaleY: 5}, {x: '0%', scaleY: 1, scaleY: 1, ease: Linear.easeNone}, 0)
    .fromTo("p.number.two", 1, {x: '0%'}, {x: '-10%', ease: Linear.easeNone}, 0);

  let secondAnim = new TimelineMax()
    .fromTo("p.number.two", 1, {x: '-10%',scaleX: 1, scaleY: 1}, {x: '50%', scaleY: 1, scaleY: 5, ease: Linear.easeNone}, 0)
    .fromTo("img.number.two", 1, {x: '0%',scaleX: 1, scaleY: 1}, {x: '50%', scaleY: 5, scaleY: 5, ease: Linear.easeNone}, 0);


  // define movement of panels
  var wipeAnimation = new TimelineMax()
    .fromTo("section.content.two", 1, {x:  "100%"}, {x: "0%", ease: Linear.easeNone})
    .fromTo("section.content.three", 1, {x: "100%"}, {x: "0%", ease: Linear.easeNone});

  // create scene to pin and link animation
  new ScrollMagic.Scene({
    triggerElement: "#pinContainer",
    triggerHook: "onLeave",
    duration: "300%"
  })
    .setPin("#pinContainer")
    .setTween(wipeAnimation)
    .addTo(controller);
});
