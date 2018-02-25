jQuery(document).ready(function() {
  // Fix log in Form

  jQuery('#user_login').addClass('form-control');
  jQuery('#user_pass').addClass('form-control');
  jQuery('.form-control').wrap("<div class='md-form'></div>");
  jQuery('#loginform, .message').wrap('<div class="z-depth-3"></div>');
  jQuery('#wp-submit').removeClass('button button-primary button-large');
  jQuery('#wp-submit').addClass('btn btn-outline-primary waves-effect');
});
