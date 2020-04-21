$(document).ready( function() {

  var iconsMobile = $('#navToggle');

  iconsMobile.on('click', function () {
    var classIcons = this.className;
    var navigation = $('#navigation');
    var body = $('body');
    if ( classIcons === 'toggle') {
      $(this).addClass('open');
      navigation.addClass('open');
      body.addClass('menu-open');
    } else {
      $(this).removeClass('open');
      navigation.removeClass('open');
      body.removeClass('menu-open');
    }
  });

  galeri();
  
})

function galeri () {
  var imageGaleri = $('.galeriaimagen2');
  var widthImage = imageGaleri.width();

  var containerImages = $('.galeria div');
  containerImages.height(widthImage);
}