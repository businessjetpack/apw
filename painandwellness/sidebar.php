<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<div class="sidebar">
			<div class="widgets">
		
		<!-- OPTIONS NAV -->
		<?php if(get_field('sidebar_menu') == "about-us") { ?>
			<aside id="categories-4" class="widget widget-sidebar widget_categories"><div class="widget-title"><h3 class="widgettitle">Information</h3></div>
				<?php wp_nav_menu( array( 'theme_location' => 'aboutus-menu' ) ); ?>
			</aside>	
		<?php } else if(get_field('sidebar_menu') == "back-pain") { ?>
			<aside id="categories-4" class="widget widget-sidebar widget_categories"><div class="widget-title"><h3 class="widgettitle">Information</h3></div>
				<?php wp_nav_menu( array( 'theme_location' => 'aboutpain-menu' ) ); ?>
			</aside>	
		<?php } else if(get_field('sidebar_menu') == "self-help") { ?>
			<aside id="categories-4" class="widget widget-sidebar widget_categories"><div class="widget-title"><h3 class="widgettitle">Information</h3></div>
				<?php wp_nav_menu( array( 'theme_location' => 'selfhelp-menu' ) ); ?>
			</aside>	
		<?php } else '';?>
		
		<!-- BOOK APPOINTMENT -->		
		<aside id="wplook_contact_form_widget-9" class="widget widget-sidebar widget_wplook_contact_form_widget">
			<!-- Book appointment -->
			<h4>It&#039;s easy and fast</h4>			<h3>Request Your Appointment</h3>
			
						
<div class="from-appointment" >
	<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
	<a id='gf_1' name='gf_1' class='gform_anchor' ></a>
	<form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1"  action="/#gf_1">
		<div class="form-row">
			<div id="field_1_1" class="form-controls gfield">
				<input type="text" class="field medium" required name="input_1" id="field-fname" value="" placeholder="Full Name" tabindex="1"/>
			</div><!-- /.form-controls -->
		</div><!-- /.form-row -->

		<div class="form-row">
			<div class="form-controls">
				<input type="email" class="field" required name="input_2" id="field-email" value="" placeholder="Your Email Address" tabindex="2"/>
			</div><!-- /.form-controls -->
		</div><!-- /.form-row -->

		<div class="form-row">
			<div class="form-controls">
				<input type="tel" class="field" required name="input_3" id="field-tel" value="" placeholder="Phone Number" tabindex="3"/>
			</div><!-- /.form-controls -->
		</div><!-- /.form-row -->

		<div class="form-row">
			<div class="form-controls form-controls-data-field">
				<input name="input_5" type="text" class="field field-date" id="field-date" value="<?php echo date('m/d/Y');?>" placeholder="Booking Date" tabindex="4"/>
			</div><!-- /.form-controls -->
		</div><!-- /.form-row -->

		<div class="form-row">
			<div class="form-controls">
				<textarea class="textarea" name='input_4' id="field-message" placeholder="Please include anything that will help us better understand your needs." tabindex="5"></textarea>
			</div><!-- /.form-controls -->
		</div><!-- /.form-row -->
		<div class="form-row">
			<div id='field_1_6' class='gfield gfield_contains_required field_sublabel_below field_description_below' >
				<label class='gfield_label'>Are You a New Patient? (required)<span class='gfield_required'>*</span></label>
				<div class='ginput_container'>
					<ul class='gfield_checkbox' id='input_1_6'>
						<li class='gchoice_1_6_1'>
							<input name='input_6.1' type='checkbox' value='I am a New Patient' id='choice_1_6_1' class="iamnew unique" tabindex='6' required/>
							<label for='choice_1_6_1' id='label_1_6_1'>Yes I Am</label>
						</li>
						<li class='gchoice_1_6_2'>
							<input name='input_6.2' type='checkbox' value='I am not a New Patient' id='choice_1_6_2' class="iamnew unique" tabindex='6' required/>
							<label for='choice_1_6_2' id='label_1_6_2'>No</label>
						</li>
					</ul>
				</div>
			</div>		
		</div>

		<input type="text" style="display: none;" name="field-spamcheck" id="field-spamcheck" value="" />

		<div class="form-actions">
			<input type='submit' id='gform_submit_button_1' class='button btn-white btn-small' value='Submit' tabindex='6' onclick='if(window["gf_submitting"]){return false;} window["gf_submitting"]=true;' disabled/>
		</div><!-- /.form-actions -->
		<div class='gform_footer top_label'>
			<input type='hidden' name='gform_ajax' value='form_id=1&amp;title=&amp;description=' />
            <input type='hidden' class='gform_hidden' name='is_submit_1' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_submit' value='1' />
            <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
            <input type='hidden' class='gform_hidden' name='state_1' value='WyJhOjA6e30iLCJhOWE1YTI1OTliNWJiOTllYjM0M2VhYThmYWNkZGViZSJd' />
            <input type='hidden' class='gform_hidden' name='gform_target_page_number_1' id='gform_target_page_number_1' value='0' />
            <input type='hidden' class='gform_hidden' name='gform_source_page_number_1' id='gform_source_page_number_1' value='1' />
            <input type='hidden' name='gform_field_values' value='' />
        </div>
	</form>
	</div>
</div><!-- /.from-appointment -->
<iframe style='display:none;width:0px; height:0px;' src='about:blank' name='gform_ajax_frame_1' id='gform_ajax_frame_1'></iframe>
<script type='text/javascript'>
	function gformInitSpinner_1(){jQuery('#gform_1').submit(function(){if(jQuery('#gform_ajax_spinner_1').length == 0){jQuery('#gform_submit_button_1, #gform_wrapper_1 .gform_next_button, #gform_wrapper_1 .gform_image_button').after('<' + 'img id="gform_ajax_spinner_1"  class="gform_ajax_spinner" src="http://www.painandwellness.com/wp-content/plugins/gravityforms_master/images/spinner.gif" alt="" />'); }} );}jQuery(document).ready(function($){gformInitSpinner_1();jQuery('#gform_ajax_frame_1').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = !(form_content.length <= 0 || is_redirect);if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top);/*if(window['gformInitDatepicker']) {gformInitDatepicker();}*/if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner_1();jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith('<' + 'div id=\'gforms_confirmation_message\' class=\'gform_confirmation_message_1\'' + '>' + confirmation_content + '<' + '/div' + '>');jQuery(document).scrollTop(jQuery('#gforms_confirmation_message').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting'] = false;}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); 
jQuery(function($){
    var requiredCheckboxes = $(':checkbox[required]');
    requiredCheckboxes.change(function(){
        if(requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        }
        else {
            requiredCheckboxes.attr('required', 'required');
        }
    });
    if(requiredCheckboxes.length<0){
	    console.log('length: '+length);
    }
    var $unique = $('input.unique');
	$unique.click(function() {
	    $unique.filter(':checked').not(this).removeAttr('checked');
	});
	
	var the_terms = $(".iamnew");
    the_terms.click(function() {
        if ($(this).is(":checked")) {
            $("#gform_submit_button_1").removeAttr("disabled");
        } else {
            $("#gform_submit_button_1").attr("disabled", "disabled");
        }
    });
});	
</script>
<style>
	.gfield_checkbox li {
		float: left;
		margin-right: 15px !important;
	}
</style>

		</aside>
		<aside id="nav_menu-7" class="widget widget-sidebar widget_nav_menu">
			<div class="widget-title">
			<h3 class="widgettitle">Our Location</h3></div><div class="menu-services-menu-container">
				<ul id="menu-services-menu" class="menu">
					<div class="sidebar-addresstitle">American Pain and Wellness</div>
					<div class="sidebar-address" style="margin-bottom:15px;">
						6020 W. Parker Rd, Suite #300<br>
						Plano, Tx 75093
					</div>
				</ul>
			</div>
		</aside>
			
	</div><!-- /.widgets -->
</div><!-- /.sidebar -->