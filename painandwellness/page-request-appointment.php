<?php get_header();?>

<div class="intro intro-small no-bg-img">
					<div class="intro-image fullsize-image-container" data-stellar-background-ratio="0.54">
						<?php if (has_post_thumbnail( $post->ID ) ): ?>
							<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
							<img src="<?php echo $image[0]; ?>" class="fullsize-image header-image-post-specific" alt="" />
						<?php endif; ?>
					</div><!-- /.intro-image -->
		
		<div class="row">
			<div class="intro-caption">
				<h2><?php the_title();?></h2>
			</div><!-- /.intro-caption -->
		</div><!-- /.row -->
	</div><!-- /.intro intro-small -->

	<div class="main grey">
		<div class="row">
			<div class="columns large-12">
				<div class="breadcrumbs">
					<?php if(function_exists(simple_breadcrumb)) {simple_breadcrumb();} ?>
				</div>	
			</div><!-- /.columns large-12 -->
		</div><!-- /.row -->

		<div class="row">
			<div class="columns large-12">
				<div class="content">
					
						<article id="post-31" class="event article-single-event post-31 page type-page status-publish hentry" itemscope itemtype="https://schema.org/BlogPosting">
							<div class="entry-content">
								<div class="event-body" itemprop="articleBody">

										<div class="form-appointment">
										<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
											<a id='gf_1' name='gf_1' class='gform_anchor' ></a>
											<form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1"  action="/#gf_1">
												
												<p style="text-align:center;">Please Request your appointment and we will get back to you as soon as possible.</p>
												<div class="form-body gform_body">
													<div id="gform_fields_1" class="row gform_fields top_label description_below">
														<div class="form-row">
															<div class="form-cols clearfix">
																<div class="form-col form-col-1of4">
																	<div id="field_1_1" class="form-controls gfield">
																		<input type="text" class="field" required name="input_1" id="field-fname" value="" placeholder="Full Name" tabindex="1"/>
																	</div><!-- /.form-controls -->
																</div><!-- /.form-col form-col-1of4 -->
																
																<div class="form-col form-col-1of4">
																	<div class="form-controls">
																		<input type="email" class="field" required name="input_2" id="field-email" value="" placeholder="Your Email Address" tabindex="2"/>
																	</div><!-- /.form-controls -->
																</div><!-- /.form-col form-col-1of4 -->
																
																<div class="form-col form-col-1of4">
																	<div class="form-controls">
																		<input type="tel" class="field" required name="input_3" id="field-tel" value="" placeholder="Phone Number" tabindex="3"/>
																	</div><!-- /.form-controls -->
																</div><!-- /.form-col form-col-1of4 -->
																
																<div class="form-col form-col-1of4">
																	<div class="form-controls form-controls-data-field">
																		<input name="input_5" type="text" class="field field-date" id="field-date" value="<?php echo date('m/d/Y');?>" placeholder="Ideal Booking Date" tabindex="4" style="font-size:14px;"/>
																	</div><!-- /.form-controls -->
																</div><!-- /.form-col form-col-1of4 -->
															</div><!-- /.form-cols -->
														</div><!-- /.form-row -->
														
														<div class="form-row">
															<div class="form-controls">
																<textarea class="textarea" name='input_4' id="field-message" placeholder="Please include anything that will help us better understand your needs." tabindex="5"></textarea>
															</div><!-- /.form-controls -->
														</div><!-- /.form-row -->
														<div class="form-row">
															<div id='field_1_6' class='gfield gfield_contains_required field_sublabel_below field_description_below' >
																<label class='gfield_label'>Are You a New Patients? (required)<span class='gfield_required'>*</span></label>
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
														
														<div class="form-actions">
															<input type='submit' id='gform_submit_button_1' class='button btn-light-blue btn-smallgform_button' value='Submit' tabindex='6' onclick='if(window["gf_submitting"]){return false;} window["gf_submitting"]=true;' disabled/>
														</div><!-- /.form-actions -->
										
														<input type="text" style="display: none;" name="field-spamcheck" id="field-spamcheck" value="" />
													</div><!-- /.row -->
												</div><!-- /.form-body -->
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
											</div><!-- / gform-wrapper -->
										</div><!-- /.form-appoitment -->
										<iframe style='display:none;width:0px; height:0px;' src='about:blank' name='gform_ajax_frame_1' id='gform_ajax_frame_1'></iframe>
<script type='text/javascript'>
	function gformInitSpinner_1(){jQuery('#gform_1').submit(function(){if(jQuery('#gform_ajax_spinner_1').length == 0){jQuery('#gform_submit_button_1, #gform_wrapper_1 .gform_next_button, #gform_wrapper_1 .gform_image_button').after('<' + 'img id="gform_ajax_spinner_1"  class="gform_ajax_spinner" src="http://www.painandwellness.com/wp-content/plugins/gravityforms-master/images/spinner.gif" alt="" />'); }} );}jQuery(document).ready(function($){gformInitSpinner_1();jQuery('#gform_ajax_frame_1').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = !(form_content.length <= 0 || is_redirect);if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top);/*if(window['gformInitDatepicker']) {gformInitDatepicker();}*/if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner_1();jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith('<' + 'div id=\'gforms_confirmation_message\' class=\'gform_confirmation_message_1\'' + '>' + confirmation_content + '<' + '/div' + '>');jQuery(document).scrollTop(jQuery('#gforms_confirmation_message').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting'] = false;}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } );
	
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
									
								</div><!-- /.event-body -->
							</div><!-- /.event-box -->
											</article><!-- /.event article-single-event -->

				</div><!-- /.content -->
			</div><!-- /.columns large-8 -->

			

		</div><!-- /.row -->
	</div><!-- /.main -->

<?php get_footer();?>