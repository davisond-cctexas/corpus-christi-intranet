/**
 * Theme JS
 */

'use strict';

jQuery(document).ready(function(){
  jQuery('.navbar-nav.mr-auto').hide();

  jQuery('.navbar-nav.mr-auto').parent('li.nav-item').hover(function(){
    jQuery(this).children('.navbar-nav.mr-auto').show();
  }, function(){
    jQuery(this).children('.navbar-nav.mr-auto').hide();
  });

  if (jQuery('body.page-node-type-department div.headlines').length > 0) {
    jQuery('div.mission').addClass('col-xl-8');
  }  
});