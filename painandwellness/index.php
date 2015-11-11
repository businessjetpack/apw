<?php get_header(); ?>

<style>
	@media screen and (max-width:500px) {
		.section-doctors .columns {
			width:100% !important;
		}
	}	
</style>	
	
	<div class="intro">
		<div class="intro-slider">
			<div class="slider-clip">
				<ul class="slides">
				<?php $args = array( 'post_type' => 'slider_config', 'posts_per_page' => -1); 
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
					<li class="slide fullsize-image-container">
						<div class="slide-image">
							<img src="<?php the_field( 'home_slider_image' ); ?>" width="2560" height="1200" class="fullsize-image" alt="" />
						</div><!-- /.slide-image -->
						<div class="slide-caption">
							<h5>Welcome!</h5>
							<div class="slide-caption-inner">
								<h1>
									<?php the_title();?>
								</h1>
								<p class="mobile-hidden"><?php the_content();?></p>								
								<!--
								<a href="<?php echo get_post_meta($post->ID, "home_sliderlink", true); ?>">
									<i class="fa fa-plus"></i>
									Know More
								</a>
								-->
								<a href="#homeaboutus">
									<i class="fa fa-plus"></i>
									Know More
								</a>
							</div><!-- /.slide-caption-inner -->
						</div><!-- /.slide-caption -->
					</li><!-- /.slide -->
				<?php endwhile; ?>
				</ul><!-- /.slides -->
			</div><!-- /.slider-clip -->
		</div><!-- /.intro-slider -->
	</div><!-- /.intro -->
	
	<div class="main">
		
		
		<!-- Half width home page widget area -->
		<section class="section section-information">
			<!-- slider link --><a name="homeaboutus"></a><!-- end slider link -->
			<div class="row">
				<div id="wplook_about_widget-3" class="wplook_about_widget-3 front-page-widget">		<div class="columns large-6 medium-12 grey">
			<section class="section-about-us fullsize-image-container">
				<h6>OUR STORY</h6>
				<h2>A Little About Us</h2>
				<h3>Guiding you every step of the way on your journey to a healthier, more active life.</h3>
				<p>Welcome to American Pain & Wellness of Plano, TX.  At APW, we believe that combining a holistic, active approach along with medicinal care will aide in your path to wellness and healing.</p>
				
				<a href="/our-physicians" class="button btn-light-blue btn-small">Know More</a>

									<div class="image">
						<img src="<?php bloginfo('template_url'); ?>/images/doctor3.png" alt="About the Author" class="fullsize-image">
					</div><!-- /.about-image -->
							</section><!-- /.section-about-us -->
		</div><!-- /.columns .large-6 -->
	</div>		
				
							
				<div id="wplook_services_widget-3" class="wplook_services_widget-3 front-page-widget">
					<div class="columns large-6 medium-12 blue">
						<section class="section-features">
							<h6>WHAT WE OFFER</h6>
							<h2>Our services</h2>
							<h3>Helping people everyday to get back to optimal health, function and a better quality of life.</h3>
							<p>Back pain is one of the most common medical problems in the United States. At APW, our specialist's strive to help people achieve a pain-free life without the use of medication so our chiropractic patients can have a better quality of life.</p>
											
							<a href="/about-pain-procedures" class="button btn-white btn-small">Find out more</a>

						</section><!-- /.section-features -->
					</div><!-- /.columns .large-6 -->

			</div>
								</div><!-- /.row -->
		</section><!-- /.section-information -->
		
		
		<!-- Top home page widget area -->
		
		<!-- media tabs -->
		
		<div id="wplook_departments_widget_home-6" class="wplook_departments_widget_home-6 front-page-widget">
		<!-- Services -->
		<section class="section section-services section-departments">
			<div class="section-ribbon">
				<i class="icon-hospital white"></i>
			</div><!-- /.section-ribbon -->
	
			<header class="section-head">
				<h2>Back and Neck Pain Information</h2>
	
				<h6>Learn more about the causes and treatment of back pain</h6>
			</header><!-- /.section-head -->
	
							
			<div class="tabs tabs-clickable tabs-services">
				<div class="tab-head">
					<div class="tabs-nav">
						<div class="row">
							<div class="columns large-12">
								<ul class="list-services" itemscope itemtype="http://schema.org/Product">
									<li class="current">
										<a href="#info-intro" itemprop="name">
											<span class="icon">
												<i class="icon-user-md"></i>
											</span>
											Introduction
										</a>
									</li>
									<li>
										<a href="#info-anatomy" itemprop="name">
											<span class="icon">
												<i class="fa fa-child"></i>
											</span>
											Anatomy
										</a>
									</li>
									<li>
										<a href="#info-painworks" itemprop="name">
											<span class="icon">
												<i class="fa fa-medkit"></i>
											</span>
											How Pain Works
										</a>
									</li>
									<li>
										<a href="#info-backpain" itemprop="name">
											<span class="icon">
												<i class="material-icons">&#xE633;</i>
											</span>
											Causes of Back Pain
										</a>
									</li>
									<li>
										<a href="#info-riskfactors" itemprop="name">
											<span class="icon">
												<i class="material-icons">&#xE87F;</i>
											</span>
											Risk Factors
										</a>
									</li>
									<li>
										<a href="#info-pain101" itemprop="name">
											<span class="icon">
												<!--<i class="fa fa-medkit"></i>-->
												<i class="material-icons">&#xE3F3;</i>
											</span>
											Pain Management 101
										</a>
									</li>
								</ul><!-- /.list-departments -->
							</div><!-- /.columns large-12 -->
						</div><!-- /.row -->
					</div><!-- /.tabs-nav -->
				</div><!-- /.tab-head -->
					
				<div class="tabs-body">
					<div class="tab-body current" id="info-intro">
						<div class="row">
							<div class="row grey" style="">
								<div class="large-4 columns" style="">
									<div class="service-description">
										<h1>Introduction</h1>
										<p>Back pain is one of the most common medical problems in the United States. Eight out of ten people will develop a back problem at some time during their lives.</p>
									</div>
								</div>
								<div class="large-4 columns" style="">
									<div class="service-description" style="border-left:0px;">
										<h1 style="color:#FFFFFF;">Introduction</h1>
										<p>It is the second most common cause of missed work days and is the leading cause of disability between the ages of 19-45. Approximately 80 billion dollars is spent because of back pain each year, and the cost keeps growing...</p>
									</div>
								</div>
								<div class="large-4 columns" style="">
									<a href="/back-and-neck-pain">
										<img src="<?php bloginfo('template_url'); ?>/images/tabs1.jpg" alt="shutterstock_73881016" width="640" height="427" class="alignnone size-large wp-image-69" />
									</a>
								</div>
							</div>
							<a href="/back-and-neck-pain" class="more-link">
								<span class="button btn-light-blue btn-small">Find out more</span>
							</a>
						</p>
					</div><!-- /.row -->
				</div><!-- /.tab-body -->
				<div class="tab-body " id="info-anatomy">
					<div class="row">
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1>Anatomy</h1>
									<p>Nerves connecting the brain to the body make up the spinal cord. The spinal cord runs through the center of each protective vertebra. Nerves branch off from the spinal cord to organs and muscles including the arms and legs.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;">Anatomy</h1>
									<p>The nerves carry messages from the brain to the organs, muscles, and limbs.  The soft tissue supporting structures of the spine, the muscles and ligaments, enable the spine to function in an upright position, and allow the trunk to move in a variety of positions...</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/back-and-neck-pain-anatomy/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs2.jpg" alt="shutterstock_142412293" width="640" height="408" class="alignnone size-large wp-image-282" />
								</a>
							</div>
						</div>
						<a href="/back-and-neck-pain-anatomy/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</p>
				</div><!-- /.row -->
			</div><!-- /.tab-body -->
			<div class="tab-body " id="info-backpain">
				<div class="row">
					<div class="row grey" style="">
						<div class="large-4 columns" style="">
							<div class="service-description">
								<h1><span style="display:inline;">Causes of</span> Back Pain</h1>
								<p>There are many causes of back pain, the most common of which is a sprain or strain of muscles or ligaments. Muscle spasm can occur after twisting or bending awkwardly, or from a simple sneeze or cough.</p>
							</div>
						</div>
						<div class="large-4 columns" style="">
							<div class="service-description" style="border-left:0px;">
								<h1 style="color:#FFFFFF;"><span style="display:inline;">Causes of</span> Back Pain</h1>
								<p>The majority of muscle spasms tend to get better over time. Severe cases of muscle spasms are treated with medication, physical therapy, or injections...</p>
							</div>
						</div>
						<div class="large-4 columns" style="">
							<a href="/back-and-neck-pain">
								<img class="alignnone size-large wp-image-175" src="<?php bloginfo('template_url'); ?>/images/tabs3.jpg" alt="shutterstock_31967302" width="640" height="452" />
							</a>
						</div>
					</div>
					<a href="/back-and-neck-pain" class="more-link"><span class="button btn-light-blue btn-small">Find out more</span></a></p>
				</div><!-- /.row -->
			</div><!-- /.tab-body -->
			<div class="tab-body " id="info-riskfactors">
				<div class="row">
					<div class="row grey" style="">
						<div class="large-4 columns" style="">
							<div class="service-description">
								<h1><span style="display:inline;">Risk</span> Factors</h1>
								<p>A risk factor is something that increases your odds of developing a disease or condition. The following are risk factors for developing back pain:</p>
							</div>
						</div>
						<div class="large-4 columns" style="">
							<div class="service-benefits" style="border-left:0px;">
								<h3>Top Risk Factors</h3>
								<ul class="list-checks">
									<li><i class="fa fa-check"></i>Smoking</li>
									<li><i class="fa fa-check"></i>Lack of regular excercise</li>
									<li><i class="fa fa-check"></i>Injury</li>
									<li><i class="fa fa-check"></i>Obesity</li>
									<li><i class="fa fa-check"></i>Pregnancy</li>
									<a href="/back-and-neck-pain-risk-factors-for-back-pain/"><li>see all risk factors...</li></a>
								</ul>
								<p><!-- /.list-checks --></p>
							</div>
						</div>
						<div class="large-4 columns" style="">
							<a href="/back-and-neck-pain-risk-factors-for-back-pain/">
								<img class="alignnone size-large wp-image-175" src="<?php bloginfo('template_url'); ?>/images/tabs4.jpg" alt="shutterstock_31967302" width="640" height="452" />
							</a>
						</div>
					</div>
					<a href="/back-and-neck-pain-risk-factors-for-back-pain/" class="more-link">
						<span class="button btn-light-blue btn-small">Find out more</span>
					</a>
				</p>
			</div><!-- /.row -->
		</div><!-- /.tab-body -->
		<div class="tab-body " id="info-pain101">
			<div class="row">
				
				<div class="indexpainslide-wrap">
					<div class="indexpainslide-title">10 Steps to <span>Pain Management</span></div>
					<div class="indexpainslide-listwrap">
						<ul class="indexpainslide-list">
							<li data-tab="tab-1">Step <span>1</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-2">Step <span>2</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-3">Step <span>3</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-4">Step <span>4</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-5">Step <span>5</span></li>
								<div class="indexpainslide-midline mobiledelete"></div>
							<li data-tab="tab-6">Step <span>6</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-7">Step <span>7</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-8">Step <span>8</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-9">Step <span>9</span></li>
								<div class="indexpainslide-midline"></div>
							<li data-tab="tab-10">Step <span>10</span></li>
						</ul>
					</div><!-- end indexpainslide-listwrap -->
					
					<div class="indexpainslide-hide">	
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Pain</span> Management 101</h1>
									<p>At some time in our lives, the vast majority of us will experience the agony of pain. If you are lucky, your pain will be short lived. If not, you will have to do battle with the monster known as chronic pain.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Pain</span> Management 101</h1>
									<p>Some of us will quickly learn how to adapt to this monster. For others, the battle with chronic pain will result in unnecessary suffering, sleeplessness, hopelessness, sadness, financial hardship, and divorce.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/self-help-pain-management-how-pain-works/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<a href="/self-help-pain-management-how-pain-works/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end .indexpainslide-hide -->	
					
					<div id="tab-1" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 1:</span> Accepting The Condition</h1>
									<p>The first step in controlling chronic pain is accepting that you have it. Chronic pain is a separate or at least an additional problem from the injury or disease that caused it. </p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 1:</span> Accepting The Condition</h1>
									<p>Coming to grips with this is often difficult for individuals to understand, however, grasping this concept will go a long way in helping to develop coping mechanisms for chronic pain.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-accepting-the-condition/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-accepting-the-condition/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 1 -->
					
					<div id="tab-2" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 2:</span> Positive Thinking</h1>
									<p>Are you an individual who approaches difficult situations with great negativity or do you try to look at the bright side? Is your cup half empty or half full?</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 2:</span> Positive Thinking</h1>
									<p>Unfortunately, even the most positive and enthusiastic individuals tend to dwell on the negative when experiencing chronic, unrelenting pain.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-positive-thinking/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-positive-thinking/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 2 -->
					
					<div id="tab-3" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 3:</span> Become Physically Fit</h1>
									<p>Often individuals with chronic pain stop being active and proactive; they let pain rule their lives. This leads to loss of independence, loss of self esteem, and loss of self confidence.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 3:</span> Become Physically Fit</h1>
									<p>Inactivity leads to weakening of muscles, loss of flexibility, loss of stamina, and weight gain. These symptoms are known as physical deconditioning and disuse syndrome.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-becoming-physically-fit-lose-it-or-lose-it/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-becoming-physically-fit-lose-it-or-lose-it/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 3 -->
					
					<div id="tab-4" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 4:</span> Taking control of your pain through diet</h1>
									<p>In these days of modern medicine, we seek out the newest pill or procedure to magically cure our ailments. Too frequently we fail to recognize our own abilities to affect our health and wellness. We all know that a healthy diet, moderate exercise and eliminating smoking lessen our risk of heart disease and cancer.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 4:</span> Taking control of your pain through diet</h1>
									<p>Did you know these same lifestyle choices affect pain as well? Yes, the cheeseburger and fries you ate yesterday did contribute to the exacerbation of your pain that ruined your sleep last night.  Most people, including doctors, don’t recognize the connection between diet and pain.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-taking-control-of-your-pain-through-diet/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-taking-control-of-your-pain-through-diet/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 4 -->
					
					<div id="tab-5" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 5:</span> Practice Relaxation Techniques Daily</h1>
									<p>Years of experience and research have taught us that with chronic pain comes muscle spasm. Muscle spasm is a reflex; it’s your body’s reaction to pain that you have no control over. Tense muscles can produce anxiety, depression, fear of more pain, bad posture, and immobility.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 5:</span> Practice Relaxation Techniques Daily</h1>
									<p>Many individuals with chronic pain do not recognize that they have muscle tension because they have had pain for so long. There are those people with chronic pain who strongly believe they have no need to learn relaxation techniques, but nothing could be further from the truth. </p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-understanding-thoughts-feelings-and-actions-as-they-relate-to-pain/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-understanding-thoughts-feelings-and-actions-as-they-relate-to-pain/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 5 -->
					
					<div id="tab-6" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 6:</span> Understanding Thoughts, Feelings, and Actions</h1>
									<p>The experience of pain is a complex event, involving an interaction between our physical state-nerves, the brain, and body chemicals-and our psychological state–our thoughts, attitudes, and history.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 6:</span> Understanding Thoughts, Feelings, and Actions</h1>
									<p>A person who focuses on the details of their pain often imagines that they have every last disease under the sun, stops seeing friends, thinks the future is bleak and will therefore suffer to a greater degree than someone who has more rational thoughts and actions.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-practice-relaxation-techniques-daily/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-practice-relaxation-techniques-daily/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 6 -->
					
					<div id="tab-7" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 7:</span> Establish Regular Goals</h1>
									<p>Setting realistic goals is an essential step in taking control over your pain. It is important to set regular targets in order to achieve results. Make your targets simple and realistic-something you know you can accomplish.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 7:</span> Establish Regular Goals</h1>
									<p>Being too optimistic and setting your goals too high will result in failure. Failure may trigger fear and depression.  Set short and long term goals.  If you would like to return to work within three months, identify what going back to work will entail.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-establish-regular-goals-to-take-control-of-your-pain/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-establish-regular-goals-to-take-control-of-your-pain/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 7 -->
					<div id="tab-8" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 8:</span> Get people to treat you the right way</h1>
									<p>Although people with chronic pain may not be aware of it, they either directly or indirectly send out signs that seek out attention from others. It may be a groan, a limp, or pained facial expression that tells others things are not well.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 8:</span> Get people to treat you the right way</h1>
									<p>Unfortunately, if you’re trying to break free of pain’s grip controlling your life, broadcasting your pain can be self-defeating. Family or friends usually react to your responses in two manners-both of which can be unhealthy.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-get-people-to-treat-you-the-right-way/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-get-people-to-treat-you-the-right-way/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 8 -->
					
					<div id="tab-9" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 9:</span> Working with your doctor</h1>
									<p>Suffering from pain can leave you irritable and frustrated. If you want to develop a good relationship with your doctor and his office, remember not to take out your frustration on your physician or his staff.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 9:</span> Working with your doctor</h1>
									<p>Your doctor has a limited time to evaluate your problem and discuss treatment options. Therefore, come on time to your appointments and make sure to fill out all paperwork as requested by the office.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-working-with-your-doctor/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-working-with-your-doctor/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 9 -->
					
					<div id="tab-10" class="indexpainslide-content">
						<!-- content -->
						<div class="row grey" style="">
							<div class="large-4 columns" style="">
								<div class="service-description">
									<h1><span style="display:inline;">Step 10:</span> Putting it all together</h1>
									<p>Taking control over your chronic pain is not easy. In fact, it may be one of the most difficult challenges you face in your lifetime. Some individuals will never take control over their pain because they expect that their doctor can and should take it all away.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<div class="service-description" style="border-left:0px;">
									<h1 style="color:#FFFFFF;"><span style="display:inline;">Step 10:</span> Putting it all together</h1>
									<p>They don’t take responsibility to change their thoughts and behaviors so that their pain can be controlled. Some individuals will eventually take action to control their pain only to relapse into the same poor habits they previously broke.</p>
								</div>
							</div>
							<div class="large-4 columns" style="">
								<a href="/pain-management-fighting-back-putting-it-all-together/">
									<img src="<?php bloginfo('template_url'); ?>/images/tabs5.jpg" alt="shutterstock_143386807" width="640" height="434" class="alignnone size-large wp-image-85" />
								</a>
							</div>
						</div>
						<!-- end content -->
						<a href="/pain-management-fighting-back-putting-it-all-together/" class="more-link">
							<span class="button btn-light-blue btn-small">Find out more</span>
						</a>
					</div><!-- end tab 10 -->
					
				</div><!-- END INDEXPAINSLIDE-WRAP -->
				
				</p>
			</div><!-- /.row -->
		</div><!-- /.tab-body -->
		<div class="tab-body " id="info-painworks">
			<div class="row">
				<div class="row grey" style="">
					<div class="large-4 columns" style="">
						<div class="service-description">
							<h1><span style="display:inline;">How Pain</span> Works</h1>
							<p>In most instances, painful sensations arise from tissue injury in the body. Sensitive nerve endings pick up pain signals and carry these messages along nerves to the spinal cord and then onto the brain. </p>
						</div>
					</div>
					<div class="large-4 columns" style="">
						<div class="service-description" style="border-left:0px;">
							<h1 style="color:#FFFFFF;"><span style="display:inline;">How Pain</span> Works</h1>
							<p>All along these complex pathways, there are biological “gates” that can be either opened or closed. When these gates are closed, pain is reduced or eliminated. When open, pain messages continue through the circuit. It is when these gates are jammed open that chronic pain cycles begin.</p>
						</div>
					</div>
					<div class="large-4 columns" style="">
						<a href="/self-help-pain-management-how-pain-works">
							<img src="<?php bloginfo('template_url'); ?>/images/tabs6.jpg" alt="shutterstock_73881016" width="640" height="427" class="alignnone size-large wp-image-69" />
						</a>
					</div>
				</div>
				<a href="/self-help-pain-management-how-pain-works" class="more-link">
					<span class="button btn-light-blue btn-small">Find out more</span>
				</a></p>
			</div><!-- /.row -->
		</div><!-- /.tab-body -->
	</div><!-- /.tabs-body -->
	</div><!-- /.tabs -->
	</section><!-- /.section-services -->
	</div>	
	<div id="wplook_testimonials_widget-3" class="wplook_testimonials_widget-3 front-page-widget">
		<section class="section section-testimonials">
			<header class="section-head">
				<i class="fa fa-quote-left"></i>
			</header><!-- /.section-head -->
				<div class="row">
					<div class="slider-testimonials">
						<div class="slider-clip">
							<ul class="slides">
								<li class="slide">
									<div class="slide-caption">
										<blockquote>
											<p>What an amazing group of people thank you Dr Remer for taking my pain away but more importantly taking the time to educate me you have a great staff may god bless you all.</p>
										</blockquote>
	
										<div class="user">
											<div class="user-meta">
												<h6>~ D. Boyce</h6>
											</div><!-- /.user-meta -->
										</div><!-- /.user -->
									</div><!-- /.slide-caption -->
								</li><!-- /.slide -->
								<li class="slide">
									<div class="slide-caption">
										<blockquote>
											<p>I have had a bad back for 12 years and made worse in 2011 when I broke and shattered some vertebrates. Doc Remer has gone all out for me. Not only was I treated short term with mecation but the procedures he has performed have me almost 100% pain free. Just yesterday he performed a Rhizotomy on my back for the second time in about a year and a half. I woke up this morning pain free and have been so all day.... I have been his patien for 2 1/2 yrs. Doc Remer is not a pill slinger he will help you long term he is a artist who is compassionate with a amazing staff through and through. If given a chance Doc Remer will change your life for the better.... Thanks Doc.</p>
										</blockquote>
	
										<div class="user">
											<div class="user-meta">
												<h6>~ Matthew K.</h6>
											</div><!-- /.user-meta -->
										</div><!-- /.user -->
									</div><!-- /.slide-caption -->
								</li><!-- /.slide -->
								<li class="slide">
									<div class="slide-caption">
										<blockquote>
											<p>Dr. Remer is a very compassionate doctor. His staff is so great. They understand that you are in pain and they work hard to get you in for your procedures quickly. Dr. Remer always takes his time to answer all of your questions and he cares about treating you and taking away your pain. I would recommend Dr. Remer to anyone that is looking for a pain doctor.</p>
										</blockquote>
	
										<div class="user">
											<div class="user-meta">
												<h6>~ S. Brooks</h6>
											</div><!-- /.user-meta -->
										</div><!-- /.user -->
									</div><!-- /.slide-caption -->
								</li><!-- /.slide -->
							</ul><!-- /.slides -->
						</div><!-- /.slider-clip -->
					</div><!-- /.slider-testimonials -->
				</div><!-- /.row -->
			</section><!-- /.section-testimonials -->
		</div>

		<div id="wplook_doctors_widget-3" class="wplook_doctors_widget-3 front-page-widget">
	<!-- Doctors -->
	<section class="section section-doctors">
		<header class="section-head">
			<h2>Qualified Physicians<h2>
			<h6>friendly, reliable, and trusted</h6>
		</header><!-- /.section-head -->
		<div class="row">
			<div class="columns large-4 medium-4" style="width:25%;">
				<div class="doctor">
					<h5 class="doctor-name">Steven L. Remer, M.D.</h5><!-- /.doctor-name -->
	
					<div class="doctor-box">
						<div class="doctor-image">
							<a href="/our-physicians/">
								<img width="567" height="390" src="<?php bloginfo('template_url'); ?>/images/doc1v2.jpg" class="attachment-doctorthumb-image wp-post-image" alt="Steven Remer Pain Medicine" />
							</a>	
						</div><!-- /.event-image -->
						
						<div class="doctor-body">
							
							<p>Steven L. Remer, M.D., is a graduate of the University of Michigan and completed his medical training at Wayne State University School of Medicine in Detroit. He completed his Residency in Anesthesiology at Ohio State University and was awarded a Fellowship in Pain Management at the University of Texas Southwestern Medical Center at Dallas.</p>
	
							<a href="/our-physicians/" class="link-more">
								<i class="fa fa-plus"></i>
								learn more
							</a>
						</div><!-- /.doctor-body -->
					</div><!-- /.doctor-box -->
				</div><!-- /.doctor -->
			</div><!-- /.columns large-4 -->
			<div class="columns large-4 medium-4" style="width:25%;">
				<div class="doctor">
					<h5 class="doctor-name">Jil Rice, RN, MSN, FNP-C</h5><!-- /.doctor-name -->

					<div class="doctor-box">
						<div class="doctor-image">
							<a href="/our-physicians/">
								<img width="640" height="440" src="<?php bloginfo('template_url'); ?>/images/dov4.jpg" class="attachment-doctorthumb-image wp-post-image" alt="Jil Rice Pain Medicine" />
							</a>	
						</div><!-- /.event-image -->
						
						<div class="doctor-body">
							
							<p>Jill Rice, RN, MSN, FNP-C received her Masters in Science in Nursing from Vanderbilt University, graduating with honors. She completed both an Associate’s Degree in Nursing and a Bachelor of Science in Nursing from Eastern Kentucky University, as well as a Bachelor of Arts in Biology and Psychology from Transylvania University.</p>

							<a href="/our-physicians/" class="link-more">
								<i class="fa fa-plus"></i>
								learn more
							</a>
						</div><!-- /.doctor-body -->
					</div><!-- /.doctor-box -->
				</div><!-- /.doctor -->
			</div><!-- /.columns large-4 -->
			<div class="columns large-4 medium-4" style="width:25%;">
				<div class="doctor">
					<h5 class="doctor-name">Chun M. Lin MD</h5><!-- /.doctor-name -->

					<div class="doctor-box">
						<div class="doctor-image">
							<a href="/our-physicians/">
								<img width="640" height="440" src="<?php bloginfo('template_url'); ?>/images/drlin.jpg" class="attachment-doctorthumb-image wp-post-image" alt="Dr. Lin Pain Medicine" />
							</a>	
						</div><!-- /.event-image -->
						
						<div class="doctor-body">
							
							<p>Dr. Lin is board certified by the American Board of Physical Medicine and Rehabilitation and subspecialty board certified in Pain Medicine. He received his medical doctorate from Northwestern University Medical School in 2002.  followed by residency at the Rehabilitation Institute of Chicago. He then went on to complete a fellowship in Pain Medicine.</p>

							<a href="/our-physicians/" class="link-more">
								<i class="fa fa-plus"></i>
								learn more
							</a>
						</div><!-- /.doctor-body -->
					</div><!-- /.doctor-box -->
				</div><!-- /.doctor -->
			</div><!-- /.columns large-4 -->
			<div class="columns large-4 medium-4" style="width:25%;">
				<div class="doctor">
					<h5 class="doctor-name">Jacqueline Moore Evans</h5><!-- /.doctor-name -->

					<div class="doctor-box">
						<div class="doctor-image">
							<a href="/our-physicians/">
								<img width="640" height="440" src="<?php bloginfo('template_url'); ?>/images/jacmooreevans.jpg" class="attachment-doctorthumb-image wp-post-image" alt="Dr. Lin Pain Medicine" />
							</a>	
						</div><!-- /.event-image -->
						
						<div class="doctor-body">
							
							<p>Jacqueline Moore Evans, BS, DC, CCSP received her Doctorate of Chiropractic from Texas Chiropractic College in Pasadena, Texas. She completed her Bachelors of Science Degree from Texas Southern University in Houston, Texas. Dr. Evans is licensed and certified by the Texas Board of Chiropractic Examiners. </p>

							<a href="/our-physicians/" class="link-more">
								<i class="fa fa-plus"></i>
								learn more
							</a>
						</div><!-- /.doctor-body -->
					</div><!-- /.doctor-box -->
				</div><!-- /.doctor -->
			</div><!-- /.columns large-4 -->
			
		</div><!-- /.row -->
		<div class="section-actions">
			<div class="awardsimage-home">
				<p class="MsoNoSpacing" style="margin: 0in 0in 0pt;" align="center">
					<img src="<?php bloginfo('template_url'); ?>/images/award1.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award2.jpg" border="0" style="vertical-align:bottom;">
					<img src="<?php bloginfo('template_url'); ?>/images/award3.jpg" border="0" style="vertical-align:bottom;">
					<img src="<?php bloginfo('template_url'); ?>/images/award4.jpg" border="0" style="vertical-align:bottom;">
					<img src="<?php bloginfo('template_url'); ?>/images/award5.jpg" border="0" style="vertical-align:bottom;">
					<img src="<?php bloginfo('template_url'); ?>/images/award6.jpg" border="0">
				</p>
				<p class="MsoNoSpacing" style="margin: 0in 0in 0pt;" align="center">
					<img src="<?php bloginfo('template_url'); ?>/images/award7.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award8.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award9.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award10.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award11.jpg" border="0">
					<img src="<?php bloginfo('template_url'); ?>/images/award12.jpg" border="0">
				</p>
			</div>
			<a href="/our-physicians" class="button btn-grey btn-small">Click to view all physicians</a>
		</div><!-- /.section-actions -->
	</section><!-- /.section-doctors -->
</div>
		
		<!-- end media tabs -->
				
		<div id="wplook_contact_home_widget-3" class="wplook_contact_home_widget-3 front-page-widget">
			<!-- Book appointment -->
			<section class="section section-book-appointment" id="section-book-appointment" style="background-color:#f0f5fa;">
				<style>
					#section-book-appointment .section-ribbon:before {
						border-color: transparent transparent #f0f5fa transparent;
					}
				</style>
				<div class="section-ribbon" style="background-color:#f0f5fa;">
					<i class="icon-medical-checklist" style="color:#51b8f2 !important;"></i>
				</div><!-- /.section-ribbon -->

				<div class="section-body">
					
	<div class="form-appointment">
	<div class='gf_browser_chrome gform_wrapper' id='gform_wrapper_1' >
	<a id='gf_1' name='gf_1' class='gform_anchor' ></a>
	<form method="post" enctype="multipart/form-data" target="gform_ajax_frame_1" id="gform_1"  action="/#gf_1">
		<header class="form-head row">
			<div class="columns large-12 medium-12">
				<h2>Request Your Appointment</h2>
				<h6>It&#039;s easy and fast</h6>
			</div><!-- /.columns large-12 -->
		</header><!-- /.form-head -->
							
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
								<input name="input_5" type="text" class="field field-date" id="field-date" value="<?php echo date('m/d/Y');?>" placeholder="Ideal Booking Date" tabindex="4"/>
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
	function gformInitSpinner_1(){jQuery('#gform_1').submit(function(){if(jQuery('#gform_ajax_spinner_1').length == 0){jQuery('#gform_submit_button_1, #gform_wrapper_1 .gform_next_button, #gform_wrapper_1 .gform_image_button').after('<' + 'img id="gform_ajax_spinner_1"  class="gform_ajax_spinner" src="http://www.painandwellness.com/wp-content/plugins/gravityforms_1.7.7/images/spinner.gif" alt="" />'); }} );}jQuery(document).ready(function($){gformInitSpinner_1();jQuery('#gform_ajax_frame_1').load( function(){var contents = jQuery(this).contents().find('*').html();var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;if(!is_postback){return;}var form_content = jQuery(this).contents().find('#gform_wrapper_1');var is_redirect = contents.indexOf('gformRedirect(){') >= 0;var is_form = !(form_content.length <= 0 || is_redirect);if(is_form){jQuery('#gform_wrapper_1').html(form_content.html());jQuery(document).scrollTop(jQuery('#gform_wrapper_1').offset().top);/*if(window['gformInitDatepicker']) {gformInitDatepicker();}*/if(window['gformInitPriceFields']) {gformInitPriceFields();}var current_page = jQuery('#gform_source_page_number_1').val();gformInitSpinner_1();jQuery(document).trigger('gform_page_loaded', [1, current_page]);window['gf_submitting'] = false;}else if(!is_redirect){var confirmation_content = jQuery(this).contents().find('#gforms_confirmation_message').html();if(!confirmation_content){confirmation_content = contents;}setTimeout(function(){jQuery('#gform_wrapper_1').replaceWith('<' + 'div id=\'gforms_confirmation_message\' class=\'gform_confirmation_message_1\'' + '>' + confirmation_content + '<' + '/div' + '>');jQuery(document).scrollTop(jQuery('#gforms_confirmation_message').offset().top);jQuery(document).trigger('gform_confirmation_loaded', [1]);window['gf_submitting'] = false;}, 50);}else{jQuery('#gform_1').append(contents);if(window['gformRedirect']) {gformRedirect();}}jQuery(document).trigger('gform_post_render', [1, current_page]);} );} );</script><script type='text/javascript'> jQuery(document).ready(function(){jQuery(document).trigger('gform_post_render', [1, 1]) } ); 
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
					
					
				</div><!-- /.section-body -->
			</section><!-- /.section-book-appointment -->

		</div>

		<!-- Bottom home page widget area -->

	</div><!-- /.main -->

<?php get_footer(); ?>
