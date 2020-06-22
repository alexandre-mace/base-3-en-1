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

$('document').ready(() => {
  const historyButton = document.getElementById('historyOpen');
  const historyClose = document.getElementById('historyClose');

  historyButton.addEventListener('click', () => {
    $('.history__container').fadeIn();
  });

  historyClose.addEventListener('click', () => {
    $('.history__container').fadeOut();
  })

});


