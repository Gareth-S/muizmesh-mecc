$(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('[data-toggle="popover"]').popover();
  $('[data-toggle="collapse"]').collapse(); 				  	  
})
// Couleur de police suivant le fond de la navbar.
var rgb = $('.navbar').css('background-color').replace('rgb(', '').replace(')','' ).split(',').map(Number);
var o = Math.round(((rgb[0] * 299) + (rgb[1] * 587) + (rgb[2] * 114)) /1000);
if(o > 125) {
  $('.navbar .navbar-brand').css('color', 'black');
  $('.navbar .navbar-nav > li > a').css('color', 'black');
  $('.navbar-toggler .navbar-toggler-icon').css('color', 'black');
} else {
  $('.navbar .navbar-brand').css('color', 'white');
  $('.navbar .navbar-nav > li > a').css('color', 'white');
  $('.navbar-toggler .navbar-toggler-icon').css('color', 'white','important');
}
// Couleur du fond des catégories.
var rgbCat = $('#cat').css('background-color').replace('rgb(', '').replace(')','' ).split(',').map(Number);
var cat = Math.round(((rgbCat[0] * 299) + (rgbCat[1] * 587) + (rgbCat[2] * 114)) /1000);
if(cat > 125) {
  $('.jumbotron').css('color', 'black');
} else {
  $('.jumbotron').css('color', 'white');
}					
window.Noty = require('noty');