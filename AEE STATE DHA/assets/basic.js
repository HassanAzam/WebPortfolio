/*
 * SimpleModal Basic Modal Dialog
 * http://www.ericmmartin.com/projects/simplemodal/
 * http://code.google.com/p/simplemodal/
 *
 * Copyright (c) 2009 Eric Martin - http://ericmmartin.com
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Revision: jQueryId: basic.js 212 2009-09-03 05:33:44Z emartin24 jQuery
 *
 */

jQuery.noConflict();
jQuery(document).ready(function () {
	jQuery('a.sendtofriend').click(function (e) {
		e.preventDefault();
		jQuery('#basic-modal-content').modal();
		// Duplicate our reCapcha 
		var captcha = jQuery('#capsaved').val();
		jQuery('#send_to_captcha').html(captcha);
		jQuery('#myrecap').html('');
		jQuery('#inquiry_frm_popup').html('');

	});
	jQuery('a.sendinquiry').click(function (e) {
		e.preventDefault();
		jQuery('#basic-modal-content2').modal();
		// Duplicate our reCapcha 
		var captcha = jQuery('#capsaved').val();
		jQuery('#inquiry_frm_popup').html(captcha);
		jQuery('#myrecap').html('');
		jQuery('#send_to_captcha').html('');

	});
		jQuery('p.propertylistinglinks span.emailagent a, p.links a.i_email_agent' ).click(function (e) {
		e.preventDefault();
		jQuery('#basic-modal-content2').modal();
		var captcha = jQuery('#capsaved').val();
		jQuery('#inquiry_frm_popup').html(captcha);
		jQuery('#myrecap').html('');
		jQuery('#send_to_captcha').html('');

	});
		jQuery('p.links a.a_image_sort').click(function (e) {
		e.preventDefault();
		jQuery('#basic-modal-content3').modal();
	});
});

function toggle(){
	var div1 = document.getElementById('toggleID');
	if (div1.style.display == 'none') {
		div1.style.display = 'block';
	} else {
		div1.style.display = 'none';
	}
	if(document.getElementById('toggle').getAttribute('class') == 'toggleoff'){
		document.getElementById('toggle').setAttribute('class','toggleon');
	} else {
		document.getElementById('toggle').setAttribute('class','toggleoff');
	}
}