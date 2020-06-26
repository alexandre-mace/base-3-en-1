$(function () { // wait for document ready
  // init
  var isMobile = (function(a){return /(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4));})(navigator.userAgent||navigator.vendor||window.opera);

  // we'd only like to use iScroll for mobile...
  if (!isMobile) {
    var controller = new ScrollMagic.Controller();
    // define movement of panels
    var wipeAnimation = new TimelineMax()
      .fromTo(".content__image.one", 1, {opacity: 1}, {opacity: 0, ease: Linear.easeNone}, 0)
      .fromTo(".content__logo.one", 1, {opacity: 1}, {opacity: 0, ease: Linear.easeNone}, 0)
      .fromTo(".content__text-wrapper.one", 1, {opacity: 1}, {opacity: 0, ease: Linear.easeNone}, 0)
      .fromTo(".numbers.one", 1, {left: '55%', top: 50}, {left: -100, top: '25%', ease: Linear.easeNone}, 0)
      .fromTo(".numbers__image.one", 1, {height: 350, width: 172, opacity: 1}, {height: 100, width: 50, opacity: 0.25, ease: Linear.easeNone}, 0)
      .fromTo(".numbers__reflect.one", 1, {height: 350, width: 172, opacity: 1}, {height: 100, width: 50, opacity: 0, ease: Linear.easeNone}, 0)
      .fromTo(".arrow.one", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 0)

      .fromTo(".content.two", 1, {pointerEvents: 'none'}, {pointerEvents: 'initial', ease: Linear.easeNone}, 1)
      .fromTo(".content__image.two", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".content__logo.two", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".content__text-wrapper.two", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".numbers.two", 1, {left: 'calc(200% + 20px)', top: '25%'}, {left: '55%', top: 50, ease: Linear.easeNone}, 1)
      .fromTo(".numbers__image.two", 1, {height: 100, opacity: 0.25}, {height: 350, opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".numbers__reflect.two", 1, {height: 100, opacity: 0}, {height: 350, opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".arrow.next.two", 1, {opacity: 1}, {opacity: 0, ease: Linear.easeNone}, 1)
      .to(".numbers.twocheh", 0, {opacity: 1, ease: Linear.easeNone}, 2)
      .fromTo(".numbers.three", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 1)
      .fromTo(".numbers__image.three", 1, {opacity: 0}, {opacity: 0.25, ease: Linear.easeNone}, 1)
      .fromTo(".arrow.three", 1, {pointerEvents: 'none', opacity: 0}, {pointerEvents: 'visible', opacity: 1, ease: Linear.easeNone}, 1)


      .to(".content__image.two", 1, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".content__logo.two", 1, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".content__text-wrapper.two", 1, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".numbers__image.one", 1, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".arrow.one", 1, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".numbers.two", 0, {opacity: 0, ease: Linear.easeNone}, 2)
      .to(".numbers.twocheh", 1, {left: -100, top: '25%', ease: Linear.easeNone}, 2)
      .fromTo(".numbers__image.twocheh", 1, {height: 350}, {height: 100, opacity: 0.25, ease: Linear.easeNone}, 2)
      .fromTo(".numbers__reflect.twocheh", 1,{height: 350}, {height: 100, opacity: 0, ease: Linear.easeNone}, 2)
      .fromTo(".arrow.prev.two", 1, {opacity: 0, pointerEvents: 'none'}, {opacity: 1, pointerEvents:'visible', ease: Linear.easeNone}, 2)


      .fromTo(".content.three", 1, {pointerEvents: 'none'}, {pointerEvents: 'initial', ease: Linear.easeNone}, 3)
      .fromTo(".content__image.three", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 3)
      .fromTo(".content__logo.three", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 3)
      .fromTo(".content__text-wrapper.three", 1, {opacity: 0}, {opacity: 1, ease: Linear.easeNone}, 3)
      .fromTo(".numbers.three", 1, {left: 'calc(200% + 20px)', top: '25%'}, {left: '55%', top: 50, ease: Linear.easeNone}, 3)
      .fromTo(".numbers__image.three", 1, {height: 100, opacity: 0.25}, {height: 350, opacity: 1, ease: Linear.easeNone}, 3)
      .fromTo(".numbers__reflect.three", 1, {height: 100, opacity: 0}, {height: 350, opacity: 1, ease: Linear.easeNone}, 3)
      .to(".arrow.three", 1, {opacity: 0, ease: Linear.easeNone}, 3)


    // create scene to pin and link animation
    new ScrollMagic.Scene({
      triggerElement: "#pinContainer",
      triggerHook: "onLeave",
      duration: "300%"
    })
      .setPin("#pinContainer")
      .setTween(wipeAnimation)
      .addTo(controller)

    // change behaviour of controller to animate scroll instead of jump
    // controller.scrollTo(function (newpos) {
    //   TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
    // });

    //  bind scroll to anchor links
    $(document).on("click", "a[href^='#']", function (e) {
      var id = $(this).attr("href");
      console.log('id', id)
      if ($(id).length > 0) {
        e.preventDefault();

        // trigger scroll
        controller.scrollTo(id);

        // if supported by the browser we can even update the URL.
        if (window.history && window.history.pushState) {
          history.pushState("", document.title, id);
        }
      }
    });
  } else {
    $('.wrapper').slick({
      dotsClass: 'dots',
      mobileFirst: true,
      centerMode: false,
      infinite: false,
      dots: true,
      arrows: false,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            centerMode: false,
            dots: false,
            centerPadding: '200px',
          }
        },
      ],
    });
  }
});
