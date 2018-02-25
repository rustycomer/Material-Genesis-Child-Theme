// Targeting elements to add custom classes for md bootstrap

jQuery(document).ready(function() {
    jQuery('.widget').addClass('z-depth-3');
    jQuery('.footer-widget-area').children().removeClass('z-depth-3');
    jQuery('.widget_nav_menu').removeClass('z-depth-3');
    jQuery('.gform_widget').removeClass('z-depth-3');
    // TODO
    // Fix Inputs
    jQuery('input').addClass('form-control');
    jQuery('.form-control').wrap("<div class='md-form'></div>");
    
 });
