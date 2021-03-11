jQuery(document).ready($ => {
  
  var c =   $('.site-header .menu-principal .menu').slicknav({
      label : "",
      appendTo: ".site-header"
  });
  $('.listado-testimoniales').bxSlider({
        auto: true,
        mode: 'fade',
        controls : false
  });
});