<?php




function getTemplatesFile() {
	$templates = array();

// 1. Intro Sections - 16
// 2. Content blocks - 37
// 3. Blog Posts - 4
// 4. Cta - 8
// 5. Cards - 8
// 6. Charts - 12
// 7. Clients - 5
// 8. Contact forms - 16
// 9. Counters - 8
// 10. Faq - 11
// 10.1 Gallery - 2
// 11. Icon boxes - 16
// 12. Mobile app - 5
// 13 .Maps - 4
// 14 .Processes - 8
// 15. Pricing - 12
// 16. Portfolio - 4
// 17. Shop - 4
// 18.Tabs - 6
// 19. Team - 4
// 20. Testimonials - 13
// 21. Timeline - 3
// 22. Title blocks - 4
// 23. Video - 6



// INTRO SECTIONS
// INTRO SECTIONS
// INTRO SECTIONS

   $data               = array();
    $data['name']       = __( 'Intro with icon boxes', 'keydesign' );
    $data['weight']     = 1;
    $data['image_path'] = plugins_url( 'images/Intro-sections/1.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516121853045{padding-top: 200px !important;padding-bottom: 130px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax1-1.jpg?id=6016) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center; color: #fff;">Learn more about LeadEngine’s unique features.</h6>
<p>[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="Get all the essentials you're looking for in a lightweight package. Join today!" st_title_color="#ffffff" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516120728801{padding-top: 30px !important;padding-right: 150px !important;padding-left: 150px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1513708828972{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Cutting edge solutions" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.3)" icon_iconsmind="iconsmind-Jet"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513708833716{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Technology trends" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.3)" icon_iconsmind="iconsmind-Laptop-3"]Char[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513708838261{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Industry experts" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.3)" icon_iconsmind="iconsmind-Target-Market"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with sliding boxes', 'keydesign' );
    $data['weight']     = 2;
    $data['image_path'] = plugins_url( 'images/Intro-sections/2.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516122593414{border-bottom-width: 1px !important;padding-top: 200px !important;padding-bottom: 150px !important;background: #f7f9fb url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/hero2.jpg?id=5093) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column css=".vc_custom_1515153588210{padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515153344530{padding-bottom: 15px !important;}"][vc_column_inner width="1/2"][vc_column_text]</p>
<h6><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
<p>[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="There are endless possibilities in building your own business. It all starts with an idea." st_subtitle="LeadEngine is meant to simplify the website building experience. One of the fastest themes available on the market." st_title_size="42px" st_separator_enable="separator_on" st_separator_position="above_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/2"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513007339822{margin-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1513002784343{padding-right: 5px !important;}"][tek_button button_text="Sign up now" button_position="pull-left"][tek_button button_text="Discover more" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row css=".vc_custom_1516120505557{margin-top: -150px !important;margin-bottom: 100px !important;padding-left: 15px !important;}"][vc_column css=".vc_custom_1516120515506{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][tek_sliding_box][tek_sliding_box_single sb_title="Pay as you go" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/square1.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_no"][tek_sliding_box_single sb_title="No start-up costs" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/square2.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_yes"][tek_sliding_box_single sb_title="Premium support" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/suqare3.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_no"][/tek_sliding_box][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with video & image carousel', 'keydesign' );
    $data['weight']     = 3;
    $data['image_path'] = plugins_url( 'images/Intro-sections/3.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516120216760{padding-top: 200px !important;padding-bottom: 310px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax1.jpg?id=5306) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1513003956648{padding-top: 0px !important;}"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1513004658055{padding-top: 50px !important;padding-left: 0px !important;}"][/vc_column_inner][vc_column_inner width="6/12" css=".vc_custom_1513008591637{padding-right: 0px !important;padding-left: 0px !important;}"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20experience.%22%7D%5D" tr_text_align="text-center" tr_text_color="#ffffff" tr_font_size="42px"][vc_empty_space height="25px"][tek_video video_url="#" video_image_source="media_library" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1516119963013{margin-top: -246px !important;padding-bottom: 50px !important;}"][vc_column css=".vc_custom_1513009442654{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photocarousel pbc_elements="3" pbc_nav_style="nav-dots" pbc_autoplay="auto_on" pbc_autoplay_speed="10000" pbc_stoponhover="hover_off"][tek_photocarousel_single phb_title="Monitor your brand" phb_description="Quia neque amet lobortis nec habitasse justo purus lacus. Suspendisse donec pede. Libero ac dolor maecenas ante accumsan." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2015/02/another-standard-post-with-demo-data.jpg" phb_custom_link="box-button-link" phb_button_text="Read More"][tek_photocarousel_single phb_title="Digital marketing" phb_description="Quia neque amet lobortis nec habitasse justo purus lacus. Suspendisse donec pede. Libero ac dolor maecenas ante accumsan." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2015/01/standard-post-format-with-text-markup.jpg" phb_custom_link="box-button-link" phb_button_text="Read More"][tek_photocarousel_single phb_title="Measure results" phb_description="Quia neque amet lobortis nec habitasse justo purus lacus. Suspendisse donec pede. Libero ac dolor maecenas ante accumsan." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/01/blog-video.jpg" phb_custom_link="box-button-link" phb_button_text="Read More"][tek_photocarousel_single phb_title="Tailored graphics" phb_description="Quia neque amet lobortis nec habitasse justo purus lacus. Suspendisse donec pede. Libero ac dolor maecenas ante accumsan." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/01/embed-audio-files-into-your-posts.jpg" phb_custom_link="box-button-link" phb_button_text="Read More"][tek_photocarousel_single phb_title="Advanced customization" phb_description="Quia neque amet lobortis nec habitasse justo purus lacus. Suspendisse donec pede. Libero ac dolor maecenas ante accumsan." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2015/01/standard-post-format-with-text-markup.jpg" phb_custom_link="box-button-link" phb_button_text="Read More"][/tek_photocarousel][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with wide image', 'keydesign' );
    $data['weight']     = 4;
    $data['image_path'] = plugins_url( 'images/Intro-sections/4.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1516118984308{padding-top: 200px !important;background-color: #f7f9fb !important;}"][vc_column][vc_row_inner el_class="container" css=".vc_custom_1515607826095{margin-bottom: 10px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="Create a fast-loading website and offer the best experience" st_subtitle="LeadEngine is meant to simplify the website building process. One of the fastest themes available." st_title_size="42px" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516119068482{margin-bottom: 80px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513002784343{padding-right: 5px !important;}"][tek_button button_text="Sign up now" button_position="pull-right"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513002788695{padding-left: 5px !important;}"][tek_button button_text="Discover more" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/promo.png"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( ' Intro with tabs', 'keydesign' );
    $data['weight']     = 5;
    $data['image_path'] = plugins_url( 'images/Intro-sections/5.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1516119747303{padding-top: 200px !important;}"][vc_column][vc_row_inner el_class="container"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="6/12" css=".vc_custom_1513006484358{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="LeadEngine, a website experience" st_title_size="41px" st_text_align="text-center" st_width="st_fullwidth"][vc_custom_heading text="LeadEngine is meant to simplify the website building experience. One of the fastest themes available on the market." font_container="tag:h6|text_align:center" use_theme_fonts="yes" css=".vc_custom_1513006435473{margin-bottom: 30px !important;}"][tek_button button_text="Get Started" button_position="button-center"][vc_empty_space height="60px"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_tta_tabs][vc_tta_section title="Advanced Statistics" tab_id="1513006564067-42ece83e-c5f4"][vc_empty_space height="60px"][vc_single_image source="external_link" alignment="center" el_class="admin-image" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/admin1.jpg"][/vc_tta_section][vc_tta_section title="Powerfull Admin &amp; CRM" tab_id="1513006708781-b87fc080-c71d"][vc_empty_space height="60px"][vc_single_image source="external_link" alignment="center" el_class="admin-image" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/admin2.jpg"][/vc_tta_section][vc_tta_section title="Great User Experience" tab_id="1513006725171-7e86f292-2113"][vc_empty_space height="60px"][vc_single_image source="external_link" alignment="center" el_class="admin-image" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/admin3.jpg"][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with hover boxes', 'keydesign' );
    $data['weight']     = 6;
    $data['image_path'] = plugins_url( 'images/Intro-sections/6.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516119679614{padding-top: 200px !important;padding-bottom: 230px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/coming-soon.jpg?id=4364) !important;}"][vc_column css=".vc_custom_1513003956648{padding-top: 0px !important;}"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1513004658055{padding-top: 50px !important;padding-left: 0px !important;}"][/vc_column_inner][vc_column_inner width="6/12" css=".vc_custom_1513008591637{padding-right: 0px !important;padding-left: 0px !important;}"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20experience.%22%7D%5D" tr_text_align="text-center" tr_text_color="#ffffff" tr_font_size="42px"][tek_button button_text="Get Started" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1516119581950{margin-top: -100px !important;margin-bottom: 70px !important;}"][vc_column width="1/3"][tek_contentbox cb_title="Responsive designs that will fit in with any type of website design" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Laptop-3"][/vc_column][vc_column width="1/3"][tek_contentbox cb_title="Create a fast-loading website and offer the best experience" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Thunder"][/vc_column][vc_column width="1/3"][tek_contentbox cb_title="Get started with this mind-blowing theme filled of options" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Diamond"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with video modal', 'keydesign' );
    $data['weight']     = 7;
    $data['image_path'] = plugins_url( 'images/Intro-sections/7.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516118925643{padding-top: 230px !important;padding-bottom: 130px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1513003956648{padding-top: 0px !important;}"][vc_row_inner][vc_column_inner width="5/12" css=".vc_custom_1515605719516{padding-top: 30px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Setting up is easy. Sit back and watch the magic happen." st_subtitle="LeadEngine is meant to simplify the website building experience. One of the fastest themes available." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_title_size="42px" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="20px"][tek_button button_text="Get Started" button_position="pull-left"][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516118904697{padding-right: 0px !important;}"][tek_video video_url="https://www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video-modal1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with testimonials', 'keydesign' );
    $data['weight']     = 8;
    $data['image_path'] = plugins_url( 'images/Intro-sections/8.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516118654143{padding-top: 200px !important;padding-bottom: 120px !important;background-color: #f7f9fb !important;}"][vc_column css=".vc_custom_1516118701750{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1513002770248{margin-bottom: 20px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="2/3"][tek_sectiontitle st_title="Create the look you want on your website. Increase conversion and build loyalty." st_title_size="42px" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516118673995{margin-bottom: 60px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516118783546{padding-right: 5px !important;}"][tek_button button_text="Sign up now" button_position="pull-right"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513002788695{padding-left: 5px !important;}"][tek_button button_text="Discover more" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][tek_testimonials tt_image_layout="with-image" tt_nav_style="nav-dots" tt_autoplay="auto_on" tt_autoplay_speed="10000" tt_stoponhover="hover_off" tt_content_align="content-center"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial1.jpg" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Joe Ellis" tt_position="Managing Partner"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial2.jpg" tt_quote="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. One of the fastest multi-purpose themes available on the market. " tt_title="Neal Leyton" tt_position="Web Developer"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial3.jpg" tt_quote="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. " tt_title="Vanessa Gibbs" tt_position="Marketing Manager"][/tek_testimonials][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with subscribe form', 'keydesign' );
    $data['weight']     = 9;
    $data['image_path'] = plugins_url( 'images/Intro-sections/9.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row parallax="content-moving" css=".vc_custom_1516118481015{padding-top: 230px !important;padding-bottom: 130px !important;}"][vc_column][vc_custom_heading text="The best way to launch your startup" font_container="tag:h2|font_size:42px|text_align:center" use_theme_fonts="yes" css=".vc_custom_1516029732151{margin-bottom: 10px !important;}"][vc_custom_heading text="Get started with this mind-blowing theme filled of options. Get LeadEngine!" font_container="tag:p|font_size:18px|text_align:center" use_theme_fonts="yes" css=".vc_custom_1516029859582{margin-bottom: 40px !important;}"][vc_row_inner css=".vc_custom_1516118473562{margin-bottom: 30px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511266572685{padding-right: 50px !important;padding-left: 50px !important;}"][tek_contactform contact_form_id="6" contact_form_style="inline-cf"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][tek_button button_text="Watch video" button_style="tt_third_button tt_secondary_button" button_icon_bool="yes" button_link="url:%23|||" button_position="button-center" icons="fa fa-play-circle-o"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with contact form ( background )', 'keydesign' );
    $data['weight']     = 10;
    $data['image_path'] = plugins_url( 'images/Intro-sections/10.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1516117747928{padding-top: 230px !important;padding-bottom: 130px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/hero3.jpg?id=5258) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" css=".vc_custom_1522312130885{padding-right: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_empty_space height="40px"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20building%20experience.%22%7D%5D" tr_text_align="text-left" tr_text_color="#ffffff" tr_font_size="42px"][vc_empty_space height="20px"][vc_custom_heading text="Understanding your requirements and objectives is important to us. We listen and work together to create a truly unique and unforgettable experience." font_container="tag:h4|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516030028118{margin-bottom: 30px !important;}"][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12"][vc_custom_heading text="Try Premium free for 30 days." font_container="tag:h4|text_align:left|color:%23ffffff" use_theme_fonts="yes"][tek_contactform contact_form_id="3904" contact_form_style="light_background" contact_form_bg=""][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with right image', 'keydesign' );
    $data['weight']     = 11;
    $data['image_path'] = plugins_url( 'images/Intro-sections/11.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515603897450{padding-top: 100px !important;padding-bottom: 0px !important;background-color: #f7f9fb !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" css=".vc_custom_1516117445722{padding-top: 150px !important;padding-right: 50px !important;}"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20building%20experience.%22%7D%5D" tr_text_align="text-left" tr_font_size="42px"][vc_empty_space height="20px"][vc_custom_heading text="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility and center the world around your website!" font_container="tag:p|font_size:16px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1516030076972{margin-bottom: 30px !important;}"][tek_button button_text="Get Started" button_position="pull-left"][tek_button button_text="Chat with us" button_style="tt_secondary_button" button_position="pull-left"][/vc_column][vc_column width="1/2"][vc_single_image source="external_link" alignment="right" css=".vc_custom_1515603816324{margin-bottom: 0px !important;}" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/quote2.png"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with video & contact form', 'keydesign' );
    $data['weight']     = 12;
    $data['image_path'] = plugins_url( 'images/Intro-sections/12.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516116717629{margin-right: 15px !important;padding-top: 230px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/intro-bg2.jpg?id=5194) !important;}"][vc_column width="1/2" css=".vc_custom_1522312378754{padding-top: 95px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="With tons of features at your fingertips, let your creativity loose. Welcome to LeadEngine!" st_title_tag="" st_subtitle_decoration="" st_title_color="#ffffff" st_title_size="42px" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="30px"][tek_video video_url="#" video_image_source="media_library" video_play_align="play-button-left" video_location=""][/vc_column][vc_column width="2/12"][/vc_column][vc_column width="1/3" css=".vc_custom_1522312403311{padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background-color: #ffffff !important;border-radius: 4px !important;}" el_id="contact-form-box" offset="vc_col-lg-4 vc_col-md-12"][tek_sectiontitle st_title="Try Premium for free!" st_title_tag="" st_subtitle="Everything you need to grow your business. Order our services today!" st_subtitle_decoration="" st_title_size="28px" st_separator_enable="separator_off" st_text_align="text-center" st_width="st_fullwidth"][vc_empty_space height="20px"][tek_contactform contact_form_id="3904" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with contact form ( particles )', 'keydesign' );
    $data['weight']     = 13;
    $data['image_path'] = plugins_url( 'images/Intro-sections/13.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516116342846{padding-top: 200px !important;padding-bottom: 114px !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}"][vc_column width="1/2" css=".vc_custom_1522312576246{padding-right: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_empty_space height="55px"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20building%20experience.%22%7D%5D" tr_text_align="text-left" tr_font_size="42px"][vc_empty_space height="20px"][vc_custom_heading text="Get all the essentials you're looking for in a lightweight package. Sign up today!" font_container="tag:h4|text_align:left" use_theme_fonts="yes" css=".vc_custom_1516030468895{margin-bottom: 30px !important;}"][/vc_column][vc_column width="1/6" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12"][vc_custom_heading text="Sign up for a free trial" font_container="tag:h4|text_align:left" use_theme_fonts="yes"][tek_contactform contact_form_id="3904" contact_form_style="light_background" contact_form_bg=""][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with video & 4 icon boxes', 'keydesign' );
    $data['weight']     = 14;
    $data['image_path'] = plugins_url( 'images/Intro-sections/14.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516115289454{padding-top: 250px !important;padding-bottom: 80px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/intro-bg3.jpg?id=5488) !important;}"][vc_column css=".vc_custom_1516115464846{padding-left: 0px !important;}"][vc_row_inner][vc_column_inner width="2/3"][vc_custom_heading text="Create the look you want on your website." font_container="tag:h6|font_size:16px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516031073687{margin-top: 0px !important;}"][vc_custom_heading text="Promote products and online services<br />
without losing the essence of your business" font_container="tag:h2|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516115512519{margin-top: 10px !important;margin-bottom: 30px !important;padding-right: 180px !important;}"][tek_button button_text="Get Started" button_link="url:%23|||" button_position="pull-left" button_extra_class="demo-button"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515500370465{padding-top: 40px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="media_library" video_play_align="play-button-center" video_location="" video_image="4089"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1515499882195{padding-top: 150px !important;}"][vc_column_inner width="1/4"][tek_iconbox title="Cutting edge solutions" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Animi reiciendis amet magni placeat." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Jet"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tek_iconbox title="Technology trends" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Vitae ratione iure blanditiis ipsa harum." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Laptop-3"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tek_iconbox title="Industry experts" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Animi reiciendis amet magni placeat." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Target-Market"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tek_iconbox title="Get more for less" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Vitae ratione iure blanditiis ipsa harum." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Money-Bag"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with countdown', 'keydesign' );
    $data['weight']     = 15;
    $data['image_path'] = plugins_url( 'images/Intro-sections/15.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1522312880624{border-bottom-width: 1px !important;padding-top: 200px !important;padding-bottom: 200px !important;background: #f7f9fb url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/bg2.jpg?id=5281) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column css=".vc_custom_1513003956648{padding-top: 0px !important;}"][vc_row_inner][vc_column_inner width="1/4" css=".vc_custom_1522312802853{padding-top: 50px !important;padding-left: 0px !important;}" offset="vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/12" css=".vc_custom_1522312798158{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12 vc_col-xs-12"][tek_sectiontitle st_title="Get this deal today. Thank us later." st_title_tag="" st_subtitle_decoration="" st_title_color="#4f6df5" st_subtitle_color="#ffffff" st_title_size="30px" st_separator_enable="separator_off" st_text_align="text-center" st_width="st_fullwidth"][tek_countdown starting_year="2018" starting_month="8" starting_day="15" cd_text_days="Days" cd_text_hours="Hours" cd_text_minutes="Minutes" cd_text_seconds="Seconds" cd_text_color="#1f1f1f"][vc_empty_space height="50px"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers. " font_container="tag:h6|text_align:center" use_theme_fonts="yes"][vc_empty_space height="30px"][tek_button button_text="Purchase now" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1516115105081{margin-top: -100px !important;margin-bottom: 120px !important;}"][vc_column width="1/3"][tek_contentbox cb_title="Responsive designs that will fit in with any type of website design." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Laptop-3"][/vc_column][vc_column width="1/3"][tek_contentbox cb_title="Create a fast-loading website and offer the best experience." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Thunder"][/vc_column][vc_column width="1/3"][tek_contentbox cb_title="Get started with this mind-blowing theme filled of options." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Diamond"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Intro with video & subscribe form', 'keydesign' );
    $data['weight']     = 16;
    $data['image_path'] = plugins_url( 'images/Intro-sections/16.png', __FILE__ );
    $data['custom_class'] = 'IntroSections';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1516114022412{margin-top: -50px !important;padding-top: 280px !important;padding-bottom: 150px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/slide1.jpg?id=5247) !important;}"][vc_column][vc_row_inner css=".vc_custom_1513001355456{margin-bottom: 20px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515501905560{padding-right: 0px !important;padding-left: 0px !important;}"][vc_custom_heading text="Work smart and get more for less" font_container="tag:h2|font_size:42px|text_align:center|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516031967874{margin-bottom: 10px !important;}"][vc_custom_heading text="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility." font_container="tag:p|font_size:18px|text_align:center|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516032023524{margin-bottom: 50px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="media_library" video_play_align="play-button-center" video_location="" video_image="4089"][vc_empty_space height="50"][tek_contactform contact_form_id="6" contact_form_style="inline-cf"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// INTRO SECTIONS
// INTRO SECTIONS
// INTRO SECTIONS


// CONTENT BLOCKS
// CONTENT BLOCKS
// CONTENT BLOCKS

		$data               = array();
		$data['name']       = __( 'Sticky navbar with featured sections', 'keydesign' );
		$data['weight']     = 200;
		$data['image_path'] = plugins_url( 'images/Content-blocks/Sticky-navbar-with-featured-sections.png', __FILE__ );
		$data['custom_class'] = 'Contentblocks';
		$data['disabled'] = true;
		$data['content']    = <<<CONTENT
		[vc_row][vc_column][tek_featuresections][tek_featuresections_single fss_section_template="side_photo" fss_title="Create the look you want on your website." fss_title_tag="" fss_nav_label="Create a website" fss_subtitle="Create a clean cut, modern and responsive website for your business. LeadEngine is perfect for building your dream landing page website without any coding whatsoever." fss_icon_type="icon_browser" fss_custom_link="1" fss_primary_button_action="button-action-link" fss_section_link="url:%23|title:Get%20started||" fss_link_style="solid_button" fss_button_color_scheme="btn_primary_color" fss_secondary_button="disable-secondary-btn" featured_image_source="external_link" featured_ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card2.jpg" fss_image_align="img-align-right" css_animation_content="" css_animation_image="" fss_bg_color="#f7f7f7" link_text="Browse our template gallery" icon_iconsmind="iconsmind-Idea"]
		<ul>
		<li>Give your website a name</li>
		<li>Add your unique content</li>
		<li>Add your stunning images</li>
		</ul>
		[/tek_featuresections_single][tek_featuresections_single fss_section_template="side_photo" fss_title="Drive traffic to your website." fss_title_tag="" fss_nav_label="Boost traffic" fss_subtitle="There are many ways you can increase traffic. Welcome your visitors with elegance and flexibility and center the world around your website!" fss_icon_type="icon_browser" fss_custom_link="1" fss_primary_button_action="button-action-link" fss_section_link="url:%23|title:Find%20out%20now||" fss_link_style="outline_button" fss_button_color_scheme="btn_primary_color" fss_secondary_button="disable-secondary-btn" featured_image_source="external_link" featured_ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" fss_image_align="img-align-left" css_animation_content="" css_animation_image="" link_text="Browse our template gallery" icon_iconsmind="iconsmind-Business-ManWoman"][/tek_featuresections_single][tek_featuresections_single fss_section_template="side_video" fss_title="Increase conversion and build loyalty." fss_title_tag="" fss_nav_label="Build loyalty" fss_subtitle="Investing in loyalty is as important as investing in usability and conversion optimization. It only takes a few clicks. Watch the video to see how." fss_icon_type="icon_browser" fss_custom_link="1" fss_primary_button_action="button-action-link" fss_section_link="url:%23|title:Discover%20more||" fss_link_style="solid_button" fss_button_color_scheme="btn_primary_color" fss_secondary_button="disable-secondary-btn" fss_video_url="https://www.youtube.com/watch?v=nrJtHemSPW4" video_image_source="external_link" video_ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" fss_play_button="light-style" fss_video_align="video-align-right" css_animation_content="" css_animation_image="" link_text="Browse our template gallery" icon_iconsmind="iconsmind-Video-4"][/tek_featuresections_single][tek_featuresections_single fss_section_template="side_gallery" fss_title="Generate leads and drive sales." fss_title_tag="" fss_nav_label="Drive sales" fss_subtitle="A website is an essential business tool and LeadEngine is meant to simplify the website building experience. Identify and turn your leads into customers." fss_icon_type="icon_browser" fss_custom_link="#" fss_secondary_button="disable-secondary-btn" gallery_image_source="external_link" gallery_ext_image="#E-8_aHR0cHMlM0ElMkYlMkZ3d3cubGVhZGVuZ2luZS13cC5jb20lMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnZpZGVvMy5qcGclMkNodHRwcyUzQSUyRiUyRnd3dy5sZWFkZW5naW5lLXdwLmNvbSUyRndwLWNvbnRlbnQlMkZ1cGxvYWRzJTJGMjAxOCUyRjAxJTJGdmlkZW8xLTEuanBn" fss_loop="loop_off" fss_nav_style="nav-dots" fss_autoplay="auto_off" fss_gallery_align="gallery-align-left" css_animation_content="" css_animation_image="" fss_bg_color="#f7f7f7" link_text="Browse our template gallery" icon_iconsmind="iconsmind-File-ClipboardTextImage"]
		<ul>
		<li>Give your website a name</li>
		<li>Add your unique content</li>
		<li>Add your stunning images</li>
		</ul>
		[/tek_featuresections_single][tek_featuresections_single fss_section_template="side_gallery" fss_title="Sit back and watch the magic happen." fss_title_tag="" fss_nav_label="Get started" fss_subtitle="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. With tons of features at your fingertips, let your creativity loose." fss_icon_type="icon_browser" fss_custom_link="1" fss_primary_button_action="button-action-link" fss_section_link="url:%23|title:Get%20started||" fss_link_style="solid_button" fss_button_color_scheme="btn_primary_color" fss_secondary_button="disable-secondary-btn" gallery_image_source="external_link" gallery_ext_image="#E-8_aHR0cHMlM0ElMkYlMkZ3d3cubGVhZGVuZ2luZS13cC5jb20lMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnZpZGVvMS0xLmpwZyUyQ2h0dHBzJTNBJTJGJTJGd3d3LmxlYWRlbmdpbmUtd3AuY29tJTJGd3AtY29udGVudCUyRnVwbG9hZHMlMkYyMDE4JTJGMDElMkZ2aWRlbzIuanBn" fss_loop="loop_on" fss_nav_style="nav-arrows" fss_autoplay="auto_off" fss_gallery_align="gallery-align-right" css_animation_content="" css_animation_image="" link_text="Browse our template gallery" icon_iconsmind="iconsmind-Magic-Wand"][/tek_featuresections_single][/tek_featuresections][/vc_column][/vc_row]
CONTENT;
		$templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Photobox with text ( background )', 'keydesign' );
    $data['weight']     = 201;
    $data['image_path'] = plugins_url( 'images/Content-blocks/photobox-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516103035209{padding-top: 105px !important;padding-bottom: 100px !important;background: #f7f9fb url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/intro-bg2.jpg?id=5194) !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12 vc_col-xs-12"][tek_sectiontitle st_title="Get the ultimate tool and learn how to grow your audience and build an online business." st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth" css=".vc_custom_1516103023384{margin-top: 30px !important;}"][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12 vc_col-xs-12" css=".vc_custom_1516103198991{padding-right: 0px !important;}"][tek_photobox phb_title="We provide the exceptional service we'd want to experience ourselves!" phb_description="Want to work with us?" phb_text_align="text-left" image_source="media_library" phb_custom_link="box-button-link" phb_button_text="Get in touch" css_animation="kd-animated fadeInUp" elem_animation_delay="200" phb_image_effect="no-effect"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Photobox with text', 'keydesign' );
    $data['weight']     = 202;
    $data['image_path'] = plugins_url( 'images/Content-blocks/photobox-with-text.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516102874484{padding-top: 105px !important;padding-bottom: 100px !important;background-color: #f7f9fb !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12 vc_col-xs-12"][tek_sectiontitle st_title="Get the ultimate tool and learn how to grow your audience and build an online business." st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth" css=".vc_custom_1516102934351{margin-top: 30px !important;}"][/vc_column][vc_column width="1/6"][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12 vc_col-xs-12" css=".vc_custom_1516103212671{padding-right: 0px !important;}"][tek_photobox phb_title="We provide the exceptional service we'd want to experience ourselves!" phb_description="Want to work with us?" phb_text_align="text-left" image_source="media_library" phb_custom_link="box-button-link" phb_button_text="Get in touch" css_animation="kd-animated fadeInUp" elem_animation_delay="200" phb_image_effect="no-effect"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'List with image ( background )', 'keydesign' );
    $data['weight']     = 203;
    $data['image_path'] = plugins_url( 'images/Content-blocks/lists-with-image-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515596829066{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax2.jpg?id=5309) !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516106207908{margin-top: 70px !important;}"][vc_column_inner width="5/6" css=".vc_custom_1522313292534{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1"][tek_sectiontitle st_title="Order our services today" st_title_tag="" st_subtitle="Get the ultimate tool and learn how to grow your audience and build an online business." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_hidden-md vc_hidden-sm"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513613877158{margin-top: 10px !important;margin-bottom: 35px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522313498718{padding-left: 0px !important;}" offset="vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-1 vc_col-md-4 vc_col-xs-12"][vc_column_text]
<ul style="color: #fff;">
    <li>Web Design</li>
    <li>UI/UX Design Trends</li>
    <li>Digital Solutions</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-offset-0 vc_col-md-6 vc_col-xs-12" css=".vc_custom_1522313398399{margin-left: -50px !important;}"][vc_column_text]
<ul style="color: #fff;">
    <li>Workflow Automation</li>
    <li>Easy Setup</li>
    <li>Testing &amp; Support</li>
</ul>
[/vc_column_text][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1522313185208{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_single_image source="external_link" alignment="center" external_style="vc_box_shadow" css=".vc_custom_1515596912581{margin-bottom: 0px !important;}" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/img7.jpg"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Lists with image & button', 'keydesign' );
    $data['weight']     = 204;
    $data['image_path'] = plugins_url( 'images/Content-blocks/lists-with-image-button.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515593633102{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1513616990957{margin-top: 20px !important;}"][vc_column_inner width="5/6" css=".vc_custom_1522313763149{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-offset-0 vc_col-lg-10 vc_col-md-offset-1 vc_col-md-10 vc_col-sm-offset-1"][tek_sectiontitle st_title="Order our services today" st_title_tag="" st_subtitle="Get the ultimate tool and learn how to grow your audience and build an online business." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513613877158{margin-top: 10px !important;margin-bottom: 35px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522313756272{padding-left: 0px !important;}" offset="vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-1 vc_col-md-4 vc_col-xs-12"][vc_column_text]
<ul>
    <li>Web Design</li>
    <li>UI/UX Design Trends</li>
    <li>Digital Solutions</li>
</ul>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-6 vc_col-xs-12" css=".vc_custom_1522313619560{margin-left: -50px !important;}"][vc_column_text]
<ul>
    <li>Workflow Automation</li>
    <li>Easy Setup</li>
    <li>Testing &amp; Support</li>
</ul>
[/vc_column_text][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1522314825805{padding-left: 0px !important;}"][vc_column_inner css=".vc_custom_1522314875519{padding-left: 0px !important;}" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-0"][tek_button button_text="Contact us" button_link="url:http%3A%2F%2Fkeydesign-themes.com%2Fetalon%2Fdentist%2Fcontact-us%2F|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1522313600017{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_single_image source="external_link" alignment="center" external_style="vc_box_shadow" css=".vc_custom_1515593353352{margin-bottom: 0px !important;}" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/img3.jpg"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Vertical image with icon boxes', 'keydesign' );
    $data['weight']     = 205;
    $data['image_path'] = plugins_url( 'images/Content-blocks/vertical-image-with-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1516106309047{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][tek_sectiontitle st_title="Premium features" st_subtitle="Surrounded by smart, passionate people and with the best tools and approaches at your disposal" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row css=".vc_custom_1516106273653{padding-bottom: 100px !important;}"][vc_column width="1/3" css=".vc_custom_1513616340419{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Custom design" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Brush"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Tight security" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Security-Block"][/tek_iconbox][/vc_column][vc_column width="1/3"][vc_single_image source="external_link" alignment="center" external_style="vc_box_shadow" css_animation="appear" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/img2.jpg"][/vc_column][vc_column width="1/3" css=".vc_custom_1513616348927{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Powerful framework" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-Settings-Window"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="App manager" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-People-onCloud"][/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 4 icon boxes', 'keydesign' );
    $data['weight']     = 206;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-4-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516103282048{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #f7f9fb !important;}"][vc_column width="5/12" css=".vc_custom_1486646964506{padding-right: 90px !important;}"][tek_sectiontitle st_title="Creativity takes courage and determination" st_subtitle="Surrounded by smart, passionate people and with the best tools and approaches at your disposal, you’ll take giant leaps toward creating a business. Understanding your requirements, objectives and final scope is important to us. We listen and work together to create a trully unique and unforgettable experience." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Read our story" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column][vc_column width="7/12"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1486581251280{padding-right: 50px !important;}"][tek_iconbox title="Innovation" title_size="large-title" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Light-Bulb"]I[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1486581261636{padding-right: 50px !important;}"][tek_iconbox title="Branding" title_size="large-title" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" icon_iconsmind="iconsmind-Chrysler-Building"][/tek_iconbox][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1507473687462{margin-top: 40px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1486581257201{padding-right: 50px !important;}"][tek_iconbox title="Integrity" title_size="large-title" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Handshake"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1486581266026{padding-right: 50px !important;}"][tek_iconbox title="Planning" title_size="large-title" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" icon_iconsmind="iconsmind-Board"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Large iconbox with text', 'keydesign' );
    $data['weight']     = 207;
    $data['image_path'] = plugins_url( 'images/Content-blocks/large-icon-box-with-text.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513696303511{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/12"][/vc_column][vc_column width="5/12" css=".vc_custom_1515148652623{padding-top: 0px !important;}"][tek_iconbox title="Ask Us a Question" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis dolor sit amet, consectetur adipisicing elit?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis dolor sit amet, consectetur adipisicing elit?" icon_type="icon_browser" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Get in touch" iconbox_link="url:%23|||" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Speach-BubbleAsking"][/tek_iconbox][/vc_column][vc_column width="5/12" css=".vc_custom_1513696275590{padding-top: 10px !important;}"][tek_iconbox title="Lifetime updates" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel, velit itaque?" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][vc_empty_space height="40px"][tek_iconbox title="Optimized for speed" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel, velit itaque?" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][vc_empty_space height="40px"][tek_iconbox title="Elite author" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel, velit itaque?" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column][vc_column width="1/12"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 4 icon boxes ( background )', 'keydesign' );
    $data['weight']     = 208;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-4-icon-boxes-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516103322834{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax2.jpg?id=5309) !important;}"][vc_column width="5/12" css=".vc_custom_1486646964506{padding-right: 90px !important;}"][tek_sectiontitle st_title="Creativity takes courage and determination" st_subtitle="Surrounded by smart, passionate people and with the best tools and approaches at your disposal, you’ll take giant leaps toward creating a business. Understanding your requirements, objectives and final scope is important to us. We listen and work together to create a trully unique and unforgettable experience." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Read our story" button_link="url:%23|||" button_position="pull-left"][/vc_column][vc_column width="7/12"][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1486581251280{padding-right: 50px !important;}"][tek_iconbox title="Innovation" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Light-Bulb"]I[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1486581261636{padding-right: 50px !important;}"][tek_iconbox title="Branding" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Chrysler-Building"]IBranding[/tek_iconbox][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1507473687462{margin-top: 40px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1486581257201{padding-right: 50px !important;}"][tek_iconbox title="Integrity" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Handshake"]I[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1486581266026{padding-right: 50px !important;}"][tek_iconbox title="Planning" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" icon_iconsmind="iconsmind-Board"]I[/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Color switcher with icon boxes', 'keydesign' );
    $data['weight']     = 209;
    $data['image_path'] = plugins_url( 'images/Content-blocks/color-switcher-with-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1516103383379{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column width="1/4"][/vc_column][vc_column width="1/2"][tek_sectiontitle st_title="Choose your product type" st_subtitle="Surrounded by smart, passionate people and with the best tools and approaches at your disposal" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][/vc_column][vc_column width="1/4"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1513685831983{padding-bottom: 100px !important;}"][vc_column width="1/4" css=".vc_custom_1513617496083{padding-right: 40px !important;}" offset="vc_col-lg-3 vc_col-md-4"][tek_iconbox title="Performance" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit a socii." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" background="" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][vc_empty_space height="50"][tek_iconbox title="Sustainability" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" background="" icon_iconsmind="iconsmind-Leafs"][/tek_iconbox][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-4"][tek_color_swtich cs_autoplay="auto_off"][tek_color_swtich_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/watch-1.jpg" color_switch_color="#d6d6d6" color_switch_custom_link="enable-link" color_switch_link="url:https%3A%2F%2Fkeydesign-themes.com%2Fleadengine%2Fproduct%2Fsmart-watch%2F|||"][tek_color_swtich_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/watch-2.jpg" color_switch_color="#3f3f3f" color_switch_custom_link="enable-link" color_switch_link="url:https%3A%2F%2Fkeydesign-themes.com%2Fleadengine%2Fproduct%2Fsmart-watch%2F|||"][tek_color_swtich_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/watch-3.jpg" color_switch_color="#4f6df5" color_switch_custom_link="enable-link" color_switch_link="url:https%3A%2F%2Fkeydesign-themes.com%2Fleadengine%2Fproduct%2Fsmart-watch%2F|||"][/tek_color_swtich][/vc_column][vc_column width="1/4" css=".vc_custom_1467991254771{padding-right: 0px !important;padding-left: 40px !important;}" offset="vc_col-lg-3 vc_col-md-4"][tek_iconbox title="Compatibility" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit a socii." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" background="" icon_iconsmind="iconsmind-Link-2"][/tek_iconbox][vc_empty_space height="50"][tek_iconbox title="Accessibility" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" background="" icon_iconsmind="iconsmind-Satelite-2"][/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with left image ( fullwidth )', 'keydesign' );
    $data['weight']     = 210;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-left-image-full-width.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522315111993{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516103430822{padding-top: 275px !important;padding-bottom: 200px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img9.jpg?id=5446) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516106377980{padding-top: 130px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522315135741{padding-bottom: 50px !important;}"][tek_sectiontitle st_title="Website building made easy, simple &amp; fast. Build a startup with a small team." st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools. " st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_position="pull-left"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with right image ( fullwidth )', 'keydesign' );
    $data['weight']     = 211;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-right-image-full-width.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516106411180{padding-top: 130px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522315555118{padding-bottom: 50px !important;}"][tek_sectiontitle st_title="Everything you need to grow your business. Order our services today! " st_title_tag="" st_subtitle="Get started with this mind-blowing theme filled of options. Welcome your visitors with elegance and flexibility." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_position="pull-left"][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1522315574795{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516103466014{padding-top: 275px !important;padding-bottom: 200px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img8.jpg?id=5445) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Masonry gallery with text', 'keydesign' );
    $data['weight']     = 212;
    $data['image_path'] = plugins_url( 'images/Content-blocks/masonry-gallery-with-text.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516106446968{padding-top: 100px !important;padding-bottom: 84px !important;}"][vc_column width="5/12" css=".vc_custom_1522315715352{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-5 vc_col-md-12"][vc_row_inner css=".vc_custom_1515598352605{margin-bottom: 10px !important;padding-top: 130px !important;padding-right: 80px !important;}"][vc_column_inner][tek_sectiontitle st_title="Simplicity is the ultimate sophistication." st_title_tag="" st_subtitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513696917177{margin-left: -15px !important;}"][vc_column_inner css=".vc_custom_1515148903950{margin-bottom: 0px !important;padding-bottom: 0px !important;}"][tek_contentbox cb_title="Get started with this mind-blowing theme filled of options." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci." icon_type="icon_browser" cb_custom_link="box-link" icon_iconsmind="iconsmind-Diamond"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_masonrygallery_elem][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/6.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/10.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/8.jpg" mg_size="mg-big"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/6.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/2.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2016/11/11.jpg" mg_size="mg-small"][/tek_masonrygallery_elem][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 6 icon boxes ( background )', 'keydesign' );
    $data['weight']     = 213;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-6-icon-boxes-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515599718776{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-12"][vc_empty_space height="50px"][tek_sectiontitle st_title="We create unique experiences" st_title_tag="" st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-6"][vc_custom_heading text="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna." font_container="tag:h6|font_size:16px|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-6"][vc_custom_heading text="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna." font_container="tag:h6|font_size:16px|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513699863225{margin-top: 50px !important;border-top-width: 1px !important;padding-top: 30px !important;border-top-color: rgba(255,255,255,0.2) !important;border-top-style: solid !important;}"][vc_column_inner width="1/6"][tek_iconbox title="Build anything" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Unlock your creativity" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Leo-2"]
<h4 class="service-heading">Unlock your creativity</h4>
[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Premium design" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Block builder" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Enhanced speed" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Lifetime updates" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Cras mattis iudicium" text_color="rgba(255,255,255,0.8)" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Life-Safer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 6 icon boxes', 'keydesign' );
    $data['weight']     = 214;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-6-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" parallax="content-moving" css=".vc_custom_1513700438128{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-12"][vc_empty_space height="50px"][tek_sectiontitle st_title="We create unique experiences" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-6"][vc_custom_heading text="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna." font_container="tag:h6|font_size:16px|text_align:left" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_col-lg-4 vc_col-md-6"][vc_custom_heading text="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi concilium totius Galliae in diem sed eius mod tempor incidunt ut labore et dolore magna aliqua. Pellentesque habitant morbi tristique senectus et netus piros labore et dolore magna." font_container="tag:h6|font_size:16px|text_align:left" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513700480172{margin-top: 50px !important;border-top-width: 1px !important;padding-top: 30px !important;border-top-color: #e5e7f2 !important;border-top-style: solid !important;}"][vc_column_inner width="1/6"][tek_iconbox title="Build anything" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Unlock your creativity" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Leo-2"]Unlock[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Premium design" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Block builder" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Enhanced speed" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Lifetime updates" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Life-Safer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Accordions with right image', 'keydesign' );
    $data['weight']     = 215;
    $data['image_path'] = plugins_url( 'images/Content-blocks/accordions-with-right-image.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516103626504{padding-top: 120px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522316169853{padding-bottom: 50px !important;}"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="20px"][vc_toggle title="1. Lifetime updates"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Optimized for speed"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Elite author"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-sm vc_hidden-xs"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1522316040157{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12 vc_hidden-sm vc_hidden-xs"][vc_row_inner css=".vc_custom_1516103593070{padding-top: 275px !important;padding-bottom: 200px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/drone.jpg?id=4487) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Process steps with button', 'keydesign' );
    $data['weight']     = 216;
    $data['image_path'] = plugins_url( 'images/Content-blocks/process-steps-with-button.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1516103691991{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="LeadEngine is a fully packed practical tool of premium built and design!" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513705144894{padding-top: 60px !important;}"][vc_column_inner][tek_process ps_template_style="process-checkbox-template" ps_elements="process_three_elem"][tek_process_single pss_title="Developing an effective strategy for your web project" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="1" pss_icon_type="no_icon" pss_background_type="custom_bg_color" pss_custom_link="#"][tek_process_single pss_title="Software development process and integration" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="2" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="#"][tek_process_single pss_title="Automated testing and professional support" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="3" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="#"][/tek_process][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513705135678{padding-top: 50px !important;}"][vc_column_inner width="1/3" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/3"][tek_button button_text="View more details" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text rotator & single product', 'keydesign' );
    $data['weight']     = 217;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-rotator-single-product.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" el_class="woo-minimal-style" css=".vc_custom_1522316516024{padding-top: 100px !important;padding-bottom: 50px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/apple-bg.jpg?id=4532) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="1/2" css=".vc_custom_1522316496605{padding-top: 140px !important;padding-right: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_textrotator tr_text_fields="%5B%7B%22tr_text_item%22%3A%22Get%20ready%20to%20impress.%22%7D%2C%7B%22tr_text_item%22%3A%22Keep%20your%20audience%20engaged.%22%7D%2C%7B%22tr_text_item%22%3A%22Build%20your%20dream%20website.%22%7D%2C%7B%22tr_text_item%22%3A%22LeadEngine%20is%20meant%20to%20simplify%20the%20website%20building%20experience.%22%7D%5D" tr_text_align="text-left" tr_text_color="#ffffff" tr_font_size="42px"][/vc_column][vc_column width="1/6" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1 vc_hidden-xs"][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-6"][products columns="1" orderby="title" order="" ids="3220"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( '3 Icon boxes with testimonials', 'keydesign' );
    $data['weight']     = 218;
    $data['image_path'] = plugins_url( 'images/Content-blocks/3-icon-boxes-with-testimonials.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513709138743{padding-top: 100px !important;padding-bottom: 90px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="Our app offers all the essentials you're looking for in a lightweight package" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513708990909{padding-top: 40px !important;padding-right: 150px !important;padding-left: 150px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1513708828972{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Skype" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Skype"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513708833716{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Twitter" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Twitter"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513708838261{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Instagram" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. " icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Instagram"][/tek_iconbox][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513705144894{padding-top: 60px !important;}"][vc_column_inner][tek_testimonials tt_image_layout="without-image" tt_nav_style="nav-dots" tt_autoplay="auto_on" tt_autoplay_speed="10000" tt_stoponhover="hover_off" tt_content_align="content-center"][tek_testimonials_single image_source="media_library" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Joel Ellis" tt_position="Executive Director"][tek_testimonials_single image_source="media_library" tt_quote="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. One of the fastest multi-purpose themes available on the market." tt_title="Neal Leyton" tt_position="Web Developer"][tek_testimonials_single image_source="media_library" tt_quote="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. " tt_title="Vanessa Gibbs" tt_position="Marketing Manager"][/tek_testimonials][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Fullwidth image with 2 icon boxes', 'keydesign' );
    $data['weight']     = 219;
    $data['image_path'] = plugins_url( 'images/Content-blocks/fullwidth-image-with-2-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content" css=".vc_custom_1522316697423{padding-bottom: 100px !important;background: #f7f9fb url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img11.jpg?id=5459) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column width="5/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][vc_row_inner css=".vc_custom_1513703630566{padding-top: 275px !important;}"][vc_column_inner css=".vc_custom_1522316735505{padding-top: 0px !important;padding-bottom: 0px !important;}" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1522316706193{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1513704206494{padding-top: 100px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="Everything you need to grow your business. Get started today!" st_title_tag="" st_subtitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus Lorem ipsum dolor sit ." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/4" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/4"][tek_iconbox title="Block builder" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Duplicate-Window"]lock[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4"][tek_iconbox title="Premium quality" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Video modal with 3 icon boxes', 'keydesign' );
    $data['weight']     = 220;
    $data['image_path'] = plugins_url( 'images/Content-blocks/video-modal-with-3-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513709897846{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="Best tool for building a startup" st_subtitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516103909934{margin-top: 40px !important;margin-bottom: 60px !important;}"][vc_column_inner css=".vc_custom_1516103868726{padding-right: 0px !important;padding-left: 0px !important;}"][tek_video video_url="#" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/img12.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3"][tek_iconbox title="Your vision is now a reality" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Idea"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Watch the magic happen" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Do even more with LeadEngine" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Mixer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Left image with 3 icon boxes', 'keydesign' );
    $data['weight']     = 221;
    $data['image_path'] = plugins_url( 'images/Content-blocks/left-image-with-3-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522316929719{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516104039646{padding-top: 300px !important;padding-bottom: 225px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/login-bg-3.jpg?id=4252) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516103984431{padding-top: 100px !important;}"][vc_column_inner width="1/6" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1" css=".vc_custom_1522316986270{padding-bottom: 50px !important;}"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="30px"][tek_iconbox title="Easy install" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Cursor-Click2"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Block builder" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Solid code" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 3 icon boxes', 'keydesign' );
    $data['weight']     = 222;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-3-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1513720369567{padding-top: 100px !important;padding-bottom: 95px !important;}"][vc_column width="1/2" css=".vc_custom_1513768563230{padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1513720363947{padding-top: 105px !important;}"][vc_column_inner width="5/6"][tek_sectiontitle st_title="LeadEngine offers all the essentials you're looking for in a lightweight package" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1516104064807{padding-right: 0px !important;}"][tek_iconbox title="Ready to launch websites" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Magic-Wand"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Premium plugins included" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Flash-2"]Premium plugins included[/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Custom made elements" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Atom"][/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Text with 3 icon boxes ( background )', 'keydesign' );
    $data['weight']     = 223;
    $data['image_path'] = plugins_url( 'images/Content-blocks/text-with-3-icon-boxes-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515600504802{padding-top: 100px !important;padding-bottom: 95px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column width="1/2" css=".vc_custom_1513768559419{padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1513720363947{padding-top: 105px !important;}"][vc_column_inner width="5/6"][tek_sectiontitle st_title="LeadEngine offers all the essentials you're looking for in a lightweight package" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1516104080343{padding-right: 0px !important;}"][tek_iconbox title="Ready to launch websites" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Magic-Wand"]Ready to launch websites[/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Premium plugins included" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Thunder"]vanced typography[/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Custom made elements" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="48px" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Atom"]Eli[/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Vertical images with text', 'keydesign' );
    $data['weight']     = 224;
    $data['image_path'] = plugins_url( 'images/Content-blocks/vertical-images-with-text.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1513720913586{padding-top: 100px !important;padding-right: 100px !important;padding-bottom: 80px !important;padding-left: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513720826556{padding-right: 40px !important;}"][tek_sectiontitle st_title="Your vision is now a reality. Get started today!" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi." st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="40px"][vc_single_image source="external_link" alignment="center" external_style="vc_box_shadow" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square6.jpg"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513720831030{padding-left: 40px !important;}"][vc_single_image source="external_link" alignment="center" external_style="vc_box_shadow" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square5.jpg"][vc_empty_space height="60px"][tek_sectiontitle st_title="Sit back and watch the magic happen" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt uti sibi." st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Sliding images with 6 icon boxes', 'keydesign' );
    $data['weight']     = 225;
    $data['image_path'] = plugins_url( 'images/Content-blocks/sliding-images-with-6-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" parallax="content-moving" css=".vc_custom_1513700438128{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column css=".vc_custom_1516106070544{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516104208262{padding-bottom: 40px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="Create the look you want on your website. Keep it simple." st_separator_enable="separator_on" st_separator_position="above_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner css=".vc_custom_1516106746836{padding-right: 0px !important;}"][tek_sliding_box][tek_sliding_box_single sb_title="Digital Solutions" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square1.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_no"][tek_sliding_box_single sb_title="Workflow Automation" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square4.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_yes"][tek_sliding_box_single sb_title="Testing &amp; Support" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square3.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read More" sb_button_style="tt_secondary_button" sb_background_type="none" sb_box_active="active_no"][/tek_sliding_box][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516105969108{margin-top: 70px !important;border-top-width: 1px !important;padding-top: 50px !important;border-top-color: #e5e7f2 !important;border-top-style: solid !important;}"][vc_column_inner width="1/6"][tek_iconbox title="Build anything" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Unlock your creativity" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Leo-2"]Unlock your creativity[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Premium design" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Block builder" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Duplicate-Window"]Block builder[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Enhanced speed" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/6"][tek_iconbox title="Lifetime updates" title_size="small-title" box_content_type="simple_text" text_box="Cras mattis iudicium" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Life-Safer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Left image with 2 icon boxes', 'keydesign' );
    $data['weight']     = 226;
    $data['image_path'] = plugins_url( 'images/Content-blocks/left-image-with-2-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/3" css=".vc_custom_1522317462469{padding-top: 0px !important;}" offset="vc_col-lg-4 vc_col-md-12"][vc_row_inner css=".vc_custom_1516105424804{padding-top: 265px !important;padding-bottom: 235px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img2.jpg?id=5385) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3" offset="vc_col-lg-8 vc_col-md-12"][vc_row_inner css=".vc_custom_1516105376686{padding-top: 100px !important;padding-bottom: 40px !important;}"][vc_column_inner width="1/6" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-md-offset-1 vc_col-sm-offset-1"][tek_sectiontitle st_title="We use our focused set of capabilities to build great experiences" st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1522317533878{padding-bottom: 50px !important;}"][vc_column_inner width="1/6" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1522317505820{padding-right: 30px !important;}" offset="vc_col-md-offset-1 vc_col-sm-offset-1"][tek_iconbox title="Target market" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Target-Market"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513761792468{padding-right: 30px !important;}"][tek_iconbox title="Consulting" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Consulting"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Video modal with counters', 'keydesign' );
    $data['weight']     = 227;
    $data['image_path'] = plugins_url( 'images/Content-blocks/video-modal-with-counters.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513766984124{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video-counter.jpg" video_play_align="play-button-center" video_location=""][/vc_column][vc_column width="1/2" css=".vc_custom_1522317653324{padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth" css=".vc_custom_1516106681588{margin-top: 15px !important;}"][vc_row_inner css=".vc_custom_1516105460884{padding-top: 20px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513764336004{padding-left: 0px !important;}"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="50" count_units="+" count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513764340691{padding-left: 0px !important;}"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="95" count_units="%" count_alignment="count_left"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1513767113098{padding-right: 30px !important;padding-left: 0px !important;}"][tek_iconbox title="Custom Shortcodes" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur " icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513767117242{padding-right: 30px !important;padding-left: 0px !important;}"][tek_iconbox title="Customer Satisfaction" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur " icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Video modal with counters ( background )', 'keydesign' );
    $data['weight']     = 228;
    $data['image_path'] = plugins_url( 'images/Content-blocks/video-modal-with-counters-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515600920567{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/video-bg1.jpg?id=4596) !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video-counter.jpg" video_play_align="play-button-center" video_location=""][/vc_column][vc_column width="1/2" css=".vc_custom_1522317712007{padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros" st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth" css=".vc_custom_1516106670156{margin-top: 15px !important;}"][vc_row_inner css=".vc_custom_1516105488077{padding-top: 20px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513764336004{padding-left: 0px !important;}"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="50" count_number_color="#ffffff" count_units="+" count_units_color="rgba(255,255,255,0.6)" count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513764340691{padding-left: 0px !important;}"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="95" count_number_color="#ffffff" count_units="%" count_units_color="rgba(255,255,255,0.6)" count_alignment="count_left"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/2" css=".vc_custom_1513767113098{padding-right: 30px !important;padding-left: 0px !important;}"][tek_iconbox title="Custom Shortcodes" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur " text_color="#ffffff" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1513767117242{padding-right: 30px !important;padding-left: 0px !important;}"][tek_iconbox title="Customer Satisfaction" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur " text_color="#ffffff" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Pricing table with 4 icon boxes', 'keydesign' );
    $data['weight']     = 229;
    $data['image_path'] = plugins_url( 'images/Content-blocks/pricing-table-with-4-icon-boxes.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1513786697533{padding-top: 100px !important;background-color: #f7f9fb !important;}"][vc_column][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="LeadEngine offers all the essentials you're looking for in a lightweight package" st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="above_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1513786781228{padding-top: 50px !important;padding-bottom: 100px !important;background-color: #f7f9fb !important;}"][vc_column width="1/3" css=".vc_custom_1522317798180{padding-top: 5px !important;padding-right: 50px !important;}" offset="vc_col-lg-4 vc_col-md-6"][tek_iconbox title="Unlimited options" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Android-Store"][/tek_iconbox][vc_empty_space height="40px"][tek_iconbox title="Premium design" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column][vc_column width="1/3" css=".vc_custom_1522317804696{padding-top: 5px !important;padding-right: 50px !important;}" offset="vc_col-lg-4 vc_col-md-6"][tek_iconbox title="Time saver" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Alarm"][/tek_iconbox][vc_empty_space height="40px"][tek_iconbox title="User experience" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" icon_iconsmind="iconsmind-Administrator"][/tek_iconbox][/vc_column][vc_column width="1/3" css=".vc_custom_1522317788616{padding-top: 0px !important;}" offset="vc_col-lg-4 vc_col-md-12"][tek_pricing pricing_title="Build better business software a lot quicker with LeadEngine" pricing_price="25" pricing_time="/month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%5D" pricing_scheme="DetailedStyle" highlight_plan="" css_animation="no_animation"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( '3 Content boxes with text', 'keydesign' );
    $data['weight']     = 230;
    $data['image_path'] = plugins_url( 'images/Content-blocks/3-content-boxes-with-text.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513787886833{padding-top: 100px !important;padding-bottom: 90px !important;}"][vc_column][vc_row_inner css=".vc_custom_1513787864706{padding-bottom: 50px !important;}"][vc_column_inner][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine’s unique features.</h6>
[/vc_column_text][vc_empty_space height="25px"][tek_sectiontitle st_title="Create the look you want on your website with plentiful shortcodes to ease your workflow." st_separator_enable="separator_on" st_separator_position="above_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_8_columns" css=".vc_custom_1516105718310{margin-bottom: 0px !important;}"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513787881546{padding-right: 0px !important;padding-bottom: 20px !important;padding-left: 0px !important;}"][vc_column_inner width="1/3"][tek_contentbox cb_title="Easy setup" cb_content_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet." icon_type="icon_browser" cb_custom_link="#" icon_iconsmind="iconsmind-Refresh"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox cb_title="Time saver" cb_content_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet." icon_type="icon_browser" cb_custom_link="#" icon_iconsmind="iconsmind-Alarm"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox cb_title="Grow your brand" cb_content_text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet." icon_type="icon_browser" cb_custom_link="#" icon_iconsmind="iconsmind-Apple-Bite"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/3" css=".vc_custom_1513787871322{padding-right: 50px !important;}"][vc_custom_heading text="Build your dream website now!" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="2/3"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut optio laboriosam vitae ratione iure blanditiis ipsa harum delectus praesentium soluta autem, repellat voluptatem illum libero earum tempore eius nemo! Animi reiciendis amet magni, placeat vitae quisquam" font_container="tag:h6|text_align:left" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Left image with counters', 'keydesign' );
    $data['weight']     = 231;
    $data['image_path'] = plugins_url( 'images/Content-blocks/left-image-with-counters.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522317894944{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516105848221{padding-top: 300px !important;padding-bottom: 200px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2017/12/bg6.jpg?id=4677) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12" css=".vc_custom_1522317922459{padding-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516105791092{padding-top: 100px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/6" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1"][tek_sectiontitle st_title="Get the ultimate tool and learn how to grow your audience" st_title_tag="" st_subtitle="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut optio laboriosam vitae ratione iure blanditiis ipsa harum delectus praesentium soluta autem." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][vc_row_inner][vc_column_inner width="1/6" offset="vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1522317942663{padding-right: 30px !important;}" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="50" count_units="+" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513761792468{padding-right: 30px !important;}"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="95" count_units="+" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." count_alignment="count_left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Simple text block', 'keydesign' );
    $data['weight']     = 232;
    $data['image_path'] = plugins_url( 'images/Content-blocks/simple-text-block.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1513686775348{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column css=".vc_custom_1513687155962{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner][vc_column_inner width="1/3"][vc_custom_heading text="Watch the magic happen!" font_container="tag:h2|font_size:36px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1515770864072{padding-right: 50px !important;}"][/vc_column_inner][vc_column_inner width="2/3"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut optio laboriosam vitae ratione iure blanditiis ipsa harum delectus praesentium soluta autem, repellat voluptatem illum libero earum tempore eius nemo! Animi reiciendis amet magni, placeat vitae quisquam" font_container="tag:h6|text_align:left" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513687172447{padding-top: 50px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1513687148559{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Administrator"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513687221712{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513687225918{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Apple-Bite"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



       $data               = array();
    $data['name']       = __( 'Simple text block ( background )', 'keydesign' );
    $data['weight']     = 233;
    $data['image_path'] = plugins_url( 'images/Content-blocks/simple-text-block-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515516850571{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax1.jpg?id=5306) !important;}"][vc_column css=".vc_custom_1513687155962{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner][vc_column_inner width="1/3"][vc_custom_heading text="Watch the magic happen!" font_container="tag:h2|font_size:36px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1515770873084{padding-right: 50px !important;}"][/vc_column_inner][vc_column_inner width="2/3"][vc_custom_heading text="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ut optio laboriosam vitae ratione iure blanditiis ipsa harum delectus praesentium soluta autem, repellat voluptatem illum libero earum tempore eius nemo! Animi reiciendis amet magni, placeat vitae quisquam" font_container="tag:h6|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513687172447{padding-top: 50px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1513687148559{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Administrator"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513687221712{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Air-Balloon"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1513687225918{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)" icon_iconsmind="iconsmind-Alarm"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



       $data               = array();
    $data['name']       = __( '2 Columns text block', 'keydesign' );
    $data['weight']     = 234;
    $data['image_path'] = plugins_url( 'images/Content-blocks/2-columns-text-block.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516112546299{padding-top: 100px !important;padding-bottom: 80px !important;background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1513687960231{padding-right: 40px !important;}"][tek_sectiontitle st_title="LeadEngine is meant to simplify the website building experience for ever" st_title_tag="" st_subtitle_decoration="" st_title_color="#4f6df5" st_title_size="42px" st_subtitle_size="LeadEngine uses artificial intelligence to instantly generate beautiful, unique logo ideas for your business." st_separator_enable="separator_off" st_text_align="text-right" st_width="st_fullwidth"][vc_row_inner css=".vc_custom_1513688171222{margin-top: 10px !important;}"][vc_column_inner width="5/12" offset="vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="7/12"][vc_custom_heading text="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility." font_container="tag:h5|font_size:16px|text_align:right|line_height:1.6" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1513687965157{padding-left: 40px !important;}"][vc_custom_heading text="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque." font_container="tag:h5|font_size:18|text_align:left|line_height:1.6" use_theme_fonts="yes" css=".vc_custom_1516112516633{margin-top: 5px !important;}"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



       $data               = array();
    $data['name']       = __( '2 Columns text block ( style 2 )', 'keydesign' );
    $data['weight']     = 235;
    $data['image_path'] = plugins_url( 'images/Content-blocks/2-columns-text-block-style-2.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516112571971{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" css=".vc_custom_1513688900815{padding-right: 40px !important;padding-left: 30px !important;}"][tek_sectiontitle st_title="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. Welcome your visitors with elegance and flexibility." st_title_tag="" st_subtitle_decoration="" st_subtitle_size="LeadEngine uses artificial intelligence to instantly generate beautiful, unique logo ideas for your business." st_separator_enable="separator_off" st_text_align="text-right" st_width="st_fullwidth"][vc_row_inner css=".vc_custom_1513689128077{margin-top: 30px !important;}"][vc_column_inner width="5/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="7/12" offset="vc_col-lg-7 vc_col-md-12"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market." font_container="tag:h5|font_size:16px|text_align:right|line_height:1.6" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1513688808580{padding-right: 50px !important;padding-left: 30px !important;}"][tek_iconbox title="Ready to launch websites" title_size="small-title" box_content_type="simple_text" text_box="With an all-new look and powerful features, LeadEngine is the best way to ensure success for your business." icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color"]With an all-new look and powerful features, LeadEngine is the best way to ensure success for your business.[/tek_iconbox][vc_empty_space height="20px"][tek_iconbox title="Premium plugins included" title_size="small-title" box_content_type="simple_text" text_box="Save money and start building your website using the best tools available on the market today." icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color"][/tek_iconbox][vc_empty_space height="20px"][tek_iconbox title="Custom made elements" title_size="small-title" box_content_type="simple_text" text_box="Each content element has been carefully crafted and offers multiple options. There is a shortcode for anything you need." icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color"][/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



       $data               = array();
    $data['name']       = __( '2 Columns text block ( background )', 'keydesign' );
    $data['weight']     = 236;
    $data['image_path'] = plugins_url( 'images/Content-blocks/2-columns-text-block-background.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516112588587{padding-top: 100px !important;padding-bottom: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax2.jpg?id=5309) !important;}"][vc_column width="1/2" css=".vc_custom_1513688900815{padding-right: 40px !important;padding-left: 30px !important;}"][tek_sectiontitle st_title="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. Welcome your visitors with elegance and flexibility." st_title_tag="" st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_subtitle_size="LeadEngine uses artificial intelligence to instantly generate beautiful, unique logo ideas for your business." st_separator_enable="separator_off" st_text_align="text-right" st_width="st_fullwidth"][vc_row_inner css=".vc_custom_1513689128077{margin-top: 30px !important;}"][vc_column_inner width="5/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="7/12" offset="vc_col-lg-7 vc_col-md-12"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market." font_container="tag:h5|font_size:16px|text_align:right|color:%23ffffff|line_height:1.6" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" css=".vc_custom_1513688808580{padding-right: 50px !important;padding-left: 30px !important;}"][tek_iconbox title="Ready to launch websites" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="With an all-new look and powerful features, LeadEngine is the best way to ensure success for your business." text_color="#ffffff" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)"][/tek_iconbox][vc_empty_space height="20px"][tek_iconbox title="Premium plugins included" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Save money and start building your website using the best tools available on the market today." text_color="#ffffff" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)"][/tek_iconbox][vc_empty_space height="20px"][tek_iconbox title="Custom made elements" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Each content element has been carefully crafted and offers multiple options. There is a shortcode for anything you need." text_color="#ffffff" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.25)"][/tek_iconbox][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   	$data               = array();
    $data['name']       = __( 'Portfolio text block', 'keydesign' );
    $data['weight']     = 237;
    $data['image_path'] = plugins_url( 'images/Content-blocks/Portfolio-text-block.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row css=".vc_custom_1516293685827{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/4"][tek_iconbox title="Client" title_size="small-title" box_content_type="simple_text" text_box="KeyDesign" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][vc_empty_space height="36px"][tek_iconbox title="Project" title_size="small-title" box_content_type="simple_text" text_box="Small white chair" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column][vc_column width="1/2"][tek_iconbox title="Project" title_size="small-title" box_content_type="simple_text" text_box="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat." icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][/vc_column][vc_column width="1/12"][/vc_column][vc_column width="1/6"][tek_iconbox title="Categories" title_size="small-title" box_content_type="simple_text" icon_type="no_icon" content_alignment="content_left" custom_link="#" background_type="none"][/tek_iconbox][vc_empty_space height="20px"][vc_column_text]
<ul>
<li>Branding</li>
<li>Software</li>
<li>Technology</li>
</ul>
[/vc_column_text][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;

	$data               = array();
    $data['name']       = __( 'Image Comparison', 'keydesign' );
    $data['weight']     = 238;
    $data['image_path'] = plugins_url( 'images/Content-blocks/image-comparison.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
	[vc_row kd_background_image_position="vc_row-bg-position-top" css=".vc_custom_1634129137074{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][tek_image_comparison original_image_source="external_link" original_image_ext="http://www.swaytheme.com/wp-content/uploads/sites/3/2021/10/img-original.jpg" modified_image_source="external_link" modified_image_ext="http://www.swaytheme.com/wp-content/uploads/sites/3/2021/10/img-modified.jpg" css_animation=""][/vc_column][/vc_row]
	CONTENT;
    $templates[] = $data;

	$data               = array();
    $data['name']       = __( 'Title - List - Image Comparison', 'keydesign' );
    $data['weight']     = 239;
    $data['image_path'] = plugins_url( 'images/Content-blocks/title-list-image-comparison.png', __FILE__ );
    $data['custom_class'] = 'Contentblocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
	<p>[vc_row kd_background_image_position="vc_row-bg-position-top" el_class="zindex" css=".vc_custom_1634213224039{padding-bottom: 100px !important;}"][vc_column][vc_row_inner kd_background_image_position="vc_row-bg-position-top" css=".vc_custom_1632753981881{background-color: #ffffff !important;}" el_class="with-shadow overflow-hidden"][vc_column_inner width="1/3" css=".vc_custom_1632819402187{padding-top: 115px !important;padding-bottom: 70px !important;padding-left: 85px !important;}" offset="vc_col-lg-offset-0 vc_col-lg-4 vc_col-md-offset-3 vc_col-md-6 vc_col-sm-offset-3" css_tablet_landscape=".vc_custom_1632819402187{padding-top: 60px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}" css_tablet_portrait=".vc_custom_1632819402188{padding-top: 60px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}" css_mobile=".vc_custom_1632819402188{padding-top: 60px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;}"][tek_sectiontitle st_title="The eyecare with all the<br />choices you could want" st_title_tag="h4" st_subtitle="We offer a complete range of eye<br />
	care services to all our patients." st_subtitle_decoration="" st_subtitle_size="16px" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth" css_animation="kd-animated fadeIn" css_animation_delay="200" st_subtitle_tag="" st_subtitle_position="subtitle-below-title" st_title_font_weight="" css=".vc_custom_1663846328029{margin-bottom: 25px !important;}"][vc_column_text css_animation="fadeIn" css=".vc_custom_1632819378348{margin-top: 35px !important;}"]</p>
	<div style="line-height: 30px;"><strong><a href="#">Prevention and Treatment</a></strong><br />
	<strong><a href="#">Paediatric Ophthalmology</a></strong><br />
	<strong><a href="#">Transitions Lenses</a></strong><br />
	<strong><a href="#">Refractive Nature</a></strong><br />
	<strong><a href="#">Lasik surgery</a></strong><br />
	<strong><a href="#">Eyeglasses</a></strong></div>
	<p>[/vc_column_text][/vc_column_inner][vc_column_inner css=".vc_custom_1634041085188{padding-right: 0px !important;padding-left: 0px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}" offset="vc_col-lg-8" css_tablet_portrait=".vc_custom_1634041085188{padding-top: 50px !important;}" css_mobile=".vc_custom_1634041085188{padding-top: 50px !important;}"][tek_image_comparison original_image_source="external_link" original_image_ext="http://www.swaytheme.com/wp-content/uploads/sites/3/2021/09/optometry_comparison2.jpg" modified_image_source="external_link" modified_image_ext="http://www.swaytheme.com/wp-content/uploads/sites/3/2021/09/optometry_comparison1.jpg" css_animation=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]</p>
	CONTENT;
    $templates[] = $data;


// CONTENT BLOCKS
// CONTENT BLOCKS
// CONTENT BLOCKS




// CONTENT SIDEBAR
// CONTENT SIDEBAR
// CONTENT SIDEBAR

   $data               = array();
    $data['name']       = __( '2/3 Content + 1/3 Right Sidebar', 'keydesign' );
    $data['weight']     = 246;
    $data['image_path'] = plugins_url( 'images/Content-sidebar/1.png', __FILE__ );
    $data['custom_class'] = 'ContentSidebar';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row][vc_column width="2/3" css=".vc_custom_1586188025175{padding-right: 25px !important;}" offset="vc_col-lg-8 vc_col-md-12 vc_col-xs-12"][tek_sectiontitle st_title="What is Lorem Ipsum?" st_title_tag="h2" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.[/vc_column_text][/vc_column][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12 vc_col-xs-12"][vc_widget_sidebar sidebar_id="page-sidebar"][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '3/4 Content + 1/4 Right Sidebar', 'keydesign' );
    $data['weight']     = 247;
    $data['image_path'] = plugins_url( 'images/Content-sidebar/2.png', __FILE__ );
    $data['custom_class'] = 'ContentSidebar';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row][vc_column width="3/4" css=".vc_custom_1586188150625{padding-right: 25px !important;}" offset="vc_col-lg-9 vc_col-md-12 vc_col-xs-12"][tek_sectiontitle st_title="What is Lorem Ipsum?" st_title_tag="h2" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.[/vc_column_text][/vc_column][vc_column width="1/4" offset="vc_col-lg-3 vc_col-md-12 vc_col-xs-12"][vc_widget_sidebar sidebar_id="page-sidebar"][/vc_column][/vc_row]



CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '2/3 Content + 1/3 Left Sidebar', 'keydesign' );
    $data['weight']     = 248;
    $data['image_path'] = plugins_url( 'images/Content-sidebar/3.png', __FILE__ );
    $data['custom_class'] = 'ContentSidebar';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row][vc_column width="1/3" offset="vc_col-lg-4 vc_col-md-12 vc_col-xs-12"][vc_widget_sidebar sidebar_id="page-sidebar"][/vc_column][vc_column width="2/3" offset="vc_col-lg-8 vc_col-md-12 vc_col-xs-12" css=".vc_custom_1586188817107{padding-left: 50px !important;}"][tek_sectiontitle st_title="What is Lorem Ipsum?" st_title_tag="h2" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.[/vc_column_text][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( '3/4 Content + 1/4 Left Sidebar', 'keydesign' );
    $data['weight']     = 249;
    $data['image_path'] = plugins_url( 'images/Content-sidebar/4.png', __FILE__ );
    $data['custom_class'] = 'ContentSidebar';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row][vc_column width="1/4" offset="vc_col-lg-3 vc_col-md-12 vc_col-xs-12"][vc_widget_sidebar sidebar_id="page-sidebar"][/vc_column][vc_column width="3/4" offset="vc_col-lg-9 vc_col-md-12 vc_col-xs-12" css=".vc_custom_1586189113814{padding-left: 50px !important;}"][tek_sectiontitle st_title="What is Lorem Ipsum?" st_title_tag="h2" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_column_text]Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.[/vc_column_text][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;


// CONTENT SIDEBAR
// CONTENT SIDEBAR
// CONTENT SIDEBAR



//BANNERS
//BANNERS
//BANNERS

   $data               = array();
    $data['name']       = __( '3 Banners with icons', 'keydesign' );
    $data['weight']     = 260;
    $data['image_path'] = plugins_url( 'images/Banners/1.png', __FILE__ );
    $data['custom_class'] = 'Banners';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1586362665981{background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516008830796{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1586363005393{padding-top: 150px !important;padding-bottom: 150px !important;}"][vc_column_inner width="1/3"][tek_iconbox title="Optimized for speed" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="ib-box-link" iconbox_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section4.jpg" hover_effect="ib-hover-1" css_animation="kd-animated fadeInUp" ib_animation_delay="" border_type="none" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Premium design" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="ib-box-link" iconbox_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section5.jpg" hover_effect="ib-hover-1" css_animation="kd-animated fadeInUp" ib_animation_delay="200" border_type="none" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Elite author" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="ib-box-link" iconbox_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section6.jpg" hover_effect="ib-hover-1" css_animation="kd-animated fadeInUp" ib_animation_delay="400" border_type="none" icon_iconsmind="iconsmind-Add-User"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '3 Banners with large text', 'keydesign' );
    $data['weight']     = 261;
    $data['image_path'] = plugins_url( 'images/Banners/2.png', __FILE__ );
    $data['custom_class'] = 'Banners';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1586694438458{margin-top: 100px !important;}"][vc_column css=".vc_custom_1516008622141{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1586694414928{padding-bottom: 150px !important;}"][vc_column_inner width="1/3"][tek_iconbox title="With LeadEngine you don't need to know any code to create a website." title_size="h3" title_color="#ffffff" box_content_type="simple_text" text_color="#ffffff" icon_type="no_icon" icon_library="iconsmind" content_alignment="content_center" custom_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section7.jpg" border_type="custom_border_color" css_animation="kd-animated fadeInUp" hover_effect="ib-no-effect"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Welcome your visitors with elegance and flexibility." title_size="h3" title_color="#ffffff" box_content_type="simple_text" text_color="#ffffff" icon_type="no_icon" icon_library="iconsmind" content_alignment="content_center" custom_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section8.jpg" border_type="custom_border_color" css_animation="kd-animated fadeInUp" hover_effect="ib-no-effect"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][tek_iconbox title="Change the colors to match your brand vision and add your logo." title_size="h3" title_color="#ffffff" box_content_type="simple_text" text_color="#ffffff" icon_type="no_icon" icon_library="iconsmind" content_alignment="content_center" custom_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section9.jpg" border_type="custom_border_color" css_animation="kd-animated fadeInUp" hover_effect="ib-no-effect"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( '3 Banners with animation', 'keydesign' );
    $data['weight']     = 262;
    $data['image_path'] = plugins_url( 'images/Banners/3.png', __FILE__ );
    $data['custom_class'] = 'Banners';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1586364907025{padding-top: 50px !important;padding-bottom: 50px !important;}"][vc_column css=".vc_custom_1515687105834{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778070981{padding-top: 100px !important;padding-bottom: 70px !important;}"][vc_column_inner width="1/3"][tek_contentbox cb_title="Responsive designs that will fit in with any type of website design layout." cb_title_color="#ffffff" cb_subtitle_color="#ffffff" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit." cb_content_text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" cb_custom_link="box-link" cb_box_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section6.jpg" css_animation="kd-animated fadeInUp" elem_animation_delay="" cb_hover_color="" icon_iconsmind="iconsmind-Laptop-3"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox cb_title="We design, build and support websites and apps for our clients worldwide." cb_title_color="#ffffff" cb_subtitle_color="#ffffff" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit." cb_content_text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" cb_custom_link="box-link" cb_box_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section8.jpg" css_animation="kd-animated fadeInUp" elem_animation_delay="200" cb_hover_color="" icon_iconsmind="iconsmind-Thunder"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox cb_title="Get started with this mind-blowing theme filled with tons of options." cb_title_color="#ffffff" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit." cb_content_text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" cb_custom_link="box-link" cb_box_link="#" background_type="custom_bg_image" background_image_source="external_link" background_ext_image="https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section9.jpg" css_animation="kd-animated fadeInUp" elem_animation_delay="400" cb_hover_color="" icon_iconsmind="iconsmind-Diamond"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'Horizontal Banner', 'keydesign' );
    $data['weight']     = 263;
    $data['image_path'] = plugins_url( 'images/Banners/4.png', __FILE__ );
    $data['custom_class'] = 'Banners';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1586694404958{margin-right: 15px !important;margin-bottom: 150px !important;margin-left: 15px !important;background-image: url(https://www.ekko-wp.com/static/wp-content/uploads/sites/3/2018/10/intro-section6.jpg?id=) !important;border-radius: 5px !important;}"][vc_column css=".vc_custom_1586364367847{padding-right: 150px !important;padding-left: 150px !important;}"][tek_calltoaction cta_icon_type="no_icon" cta_title="Interested? Let's get in touch!" cta_subtitle="LeadEngine is a fully packed practical<br />
tool of premium built and design." cta_text_color="#ffffff" cta_button_action="button-action-link" cta_button_text="Get Started" button_action="button-action-link" css_animation_text="" css_animation_button=""][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


//BANNERS
//BANNERS
//BANNERS


// BLOG POSTS
// BLOG POSTS
// BLOG POSTS

   $data               = array();
    $data['name']       = __( 'Blog Posts – 3 Columns – Detailed Style', 'keydesign' );
    $data['weight']     = 300;
    $data['image_path'] = plugins_url( 'images/Blog-posts/blog-posts-3-columns-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'BlogPosts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row][vc_column css=".vc_custom_1515677064675{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515672250148{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Latest blog posts" st_subtitle="Read more about our latest news posts and be informed" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515749824206{margin-bottom: 60px !important;}"][vc_basic_grid post_type="post" max_items="3" item="3729" grid_id="vc_gid:1515749580566-d7c515845bc80cc25640584fd8287126-10"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Blog Posts – 4 Columns – Detailed Style', 'keydesign' );
    $data['weight']     = 301;
    $data['image_path'] = plugins_url( 'images/Blog-posts/blog-posts-4-columns-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'BlogPosts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column css=".vc_custom_1515677064675{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Latest blog posts" st_subtitle="Read more about our latest news posts and be informed" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515749824206{margin-bottom: 60px !important;}"][vc_basic_grid post_type="post" max_items="4" element_width="3" item="3729" grid_id="vc_gid:1515749593576-5a818343d9d5d78902d4a77ae699d5d4-2"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Blog Posts – 3 Columns – Portfolio Style', 'keydesign' );
    $data['weight']     = 302;
    $data['image_path'] = plugins_url( 'images/Blog-posts/blog-posts-3-columns-portfolio-style.png', __FILE__ );
    $data['custom_class'] = 'BlogPosts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row][vc_column css=".vc_custom_1515677064675{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Latest blog posts" st_subtitle="Read more about our latest news posts and be informed" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515749824206{margin-bottom: 60px !important;}"][vc_basic_grid post_type="post" max_items="3" grid_id="vc_gid:1515749598212-14607c3876db270accd3b66135a6d92f-4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Blog Posts – 4 Columns – Portfolio Style', 'keydesign' );
    $data['weight']     = 303;
    $data['image_path'] = plugins_url( 'images/Blog-posts/blog-posts-4-columns-portfolio-style.png', __FILE__ );
    $data['custom_class'] = 'BlogPosts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column css=".vc_custom_1515677064675{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Latest blog posts" st_subtitle="Read more about our latest news posts and be informed" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515749791334{margin-bottom: 60px !important;}"][vc_basic_grid post_type="post" max_items="4" element_width="3" grid_id="vc_gid:1515749603719-a4d0a37b833e0ab67e4f178b061d6c29-0"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// BLOG POSTS
// BLOG POSTS
// BLOG POSTS



// CTA
// CTA
// CTA

   $data               = array();
    $data['name']       = __( 'Call to action box', 'keydesign' );
    $data['weight']     = 400;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-box.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][tek_calltoaction cta_icon_type="no_icon" cta_title="Interested? Let's get in touch!" cta_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." cta_button_text="Get Started"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action box (background)', 'keydesign' );
    $data['weight']     = 401;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-box-background.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][tek_calltoaction cta_icon_type="no_icon" cta_title="Interested? Let's get in touch!" cta_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." cta_text_color="#ffffff" cta_button_text="Get Started"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action – title , subtitle, button', 'keydesign' );
    $data['weight']     = 402;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-title-subtitle-button.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="Interested? Let's get in touch!" st_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." st_text_align="text-center"][vc_empty_space height="10px"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action – title , subtitle, button ( background )', 'keydesign' );
    $data['weight']     = 403;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-title-subtitle-button-background.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="Interested? Let's get in touch!" st_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_text_align="text-center"][vc_empty_space height="10px"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Call to action – title, button, link', 'keydesign' );
    $data['weight']     = 404;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-title-button-link.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="LeadEngine is a fully packed practical tool of premium built and design!" st_text_align="text-center"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][vc_empty_space height="25px"][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine's unique features.</h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action – title , button, link ( background )', 'keydesign' );
    $data['weight']     = 405;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-title-button-link-background.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][tek_sectiontitle st_title="LeadEngine is a fully packed practical tool of premium built and design!" st_title_color="#ffffff" st_text_align="text-center"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][vc_empty_space height="25px"][vc_column_text]
<h6 style="text-align: center; color: #fff;"><a href="#">Learn more</a> about LeadEngine's unique features.</h6>
[/vc_column_text][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action – link, title, button', 'keydesign' );
    $data['weight']     = 406;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-link-title-button.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center;"><a href="#">Learn more</a> about LeadEngine's unique features.</h6>
[/vc_column_text][vc_empty_space height="15px"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." font_container="tag:h3|text_align:center" use_theme_fonts="yes" css=".vc_custom_1513256278731{margin-bottom: 35px !important;}"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Call to action – link, title, button ( background )', 'keydesign' );
    $data['weight']     = 407;
    $data['image_path'] = plugins_url( 'images/Cta/call-to-action-link-title-button-background.png', __FILE__ );
    $data['custom_class'] = 'Cta';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_column_text]
<h6 style="text-align: center; color: #fff;"><a href="#">Learn more</a> about LeadEngine's unique features.</h6>
[/vc_column_text][vc_empty_space height="15px"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." font_container="tag:h3|text_align:center|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1513256310459{margin-bottom: 35px !important;}"][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// CTA
// CTA
// CTA

// CARDS
// CARDS
// CARDS

   $data               = array();
    $data['name']       = __( 'Cards Carousel – 3 Columns – Style 1', 'keydesign' );
    $data['weight']     = 501;
    $data['image_path'] = plugins_url( 'images/Cards/cards-3-columns-style-1.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686761275{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778968211{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515686674776{padding-right: 15px !important;}"][tek_photocarousel pbc_elements="3" pbc_loop="loop_off" pbc_nav_style="nav-dots" pbc_autoplay="auto_off"][tek_photocarousel_single phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card2.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Visual builder" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Clean code" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][/tek_photocarousel][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards Carousel – 4 Columns – Style 1', 'keydesign' );
    $data['weight']     = 502;
    $data['image_path'] = plugins_url( 'images/Cards/cards-carousel-4-columns-style-1.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686761275{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778968211{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515686674776{padding-right: 15px !important;}"][tek_photocarousel pbc_elements="4" pbc_nav_style="nav-dots" pbc_autoplay="auto_off"][tek_photocarousel_single phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card2.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Visual builder" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Clean code" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][/tek_photocarousel][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards Carousel – 1 Column – Style 1', 'keydesign' );
    $data['weight']     = 503;
    $data['image_path'] = plugins_url( 'images/Cards/cards-carousel-1-column-style-1.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686761275{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511782343979{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522247825607{padding-top: 100px !important;padding-right: 80px !important;padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools. Re-label anything and turn features." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="30px"][tek_button button_text="Start Free Trial" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522247842266{padding-right: 15px !important;padding-left: 60px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_photocarousel pbc_elements="1" pbc_nav_style="nav-dots" pbc_autoplay="auto_off"][tek_photocarousel_single phb_title="Your vision is now a reality" phb_description="Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae habitasse luctus." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial1.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Watch the magic happen" phb_description="Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae habitasse luctus." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial2.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][tek_photocarousel_single phb_title="Do even more with LeadEngine" phb_description="Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae habitasse luctus." phb_text_align="text-center" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial3.jpg" phb_custom_link="box-button-link" phb_button_text="Read More" phb_button_style="tt_secondary_button"][/tek_photocarousel][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards – 3 Columns – Style 2', 'keydesign' );
    $data['weight']     = 504;
    $data['image_path'] = plugins_url( 'images/Cards/cards-3-columns-style-2.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686965699{padding-right: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515686937192{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sliding_box][tek_sliding_box_single sb_title="Lightweight theme" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square1.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read more" sb_button_style="tt_secondary_button" sb_background_type="custom_bg_color" sb_box_active="active_no"][tek_sliding_box_single sb_title="Responsive design" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square4.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read more" sb_button_style="tt_secondary_button" sb_background_type="custom_bg_color" sb_box_active="active_yes"][tek_sliding_box_single sb_title="Amazing features" sb_description="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/square3.jpg" sb_link_type="1" sb_button_link="url:%23|||" sb_button_text="Read more" sb_button_style="tt_secondary_button" sb_background_type="custom_bg_color" sb_box_active="active_no"][/tek_sliding_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Cards – 4 Columns – Style 3', 'keydesign' );
    $data['weight']     = 505;
    $data['image_path'] = plugins_url( 'images/Cards/cards-4-columns-style-3.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515687105834{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778070981{padding-top: 100px !important;padding-bottom: 70px !important;}"][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Easy setup" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Cursor-Click2"][tek_contentbox icon_type="icon_browser" cb_title="Parallax scrolling" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Mouse-3"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Live editing" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Finger-DragFourSides"][tek_contentbox icon_type="icon_browser" cb_title="Browser support" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Chrome"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Custom shortcodes" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Gears"][tek_contentbox icon_type="icon_browser" cb_title="Fully responsive" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Laptop-Phone"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Speed performance" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Timer-2"][tek_contentbox icon_type="icon_browser" cb_title="Free updates" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Data-Refresh"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards – 4 Columns – Style 3 ( background )', 'keydesign' );
    $data['weight']     = 506;
    $data['image_path'] = plugins_url( 'images/Cards/cards-4-columns-style-3-background.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515687313019{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778070981{padding-top: 100px !important;padding-bottom: 70px !important;}"][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Easy setup" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Cursor-Click2"][tek_contentbox icon_type="icon_browser" cb_title="Parallax scrolling" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Mouse-3"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Live editing" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Finger-DragFourSides"][tek_contentbox icon_type="icon_browser" cb_title="Browser support" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Chrome"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Custom shortcodes" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Gears"][tek_contentbox icon_type="icon_browser" cb_title="Fully responsive" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Laptop-Phone"][/vc_column_inner][vc_column_inner width="1/4"][tek_contentbox icon_type="icon_browser" cb_title="Speed performance" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Timer-2"][tek_contentbox icon_type="icon_browser" cb_title="Free updates" cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Data-Refresh"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards – 3 Columns – Style 3', 'keydesign' );
    $data['weight']     = 507;
    $data['image_path'] = plugins_url( 'images/Cards/cards-3-columns-style-3.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515687105834{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778070981{padding-top: 100px !important;padding-bottom: 70px !important;}"][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Responsive designs that will fit in with any type of website design." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Laptop-3"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Create a fast-loading website and offer the best experience." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Thunder"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Get started with this mind-blowing theme filled of options." cb_content_text="Ensure your team is up-to-date on the latest comments. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Diamond"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Cards – 3 Columns – Style 3 ( background )', 'keydesign' );
    $data['weight']     = 508;
    $data['image_path'] = plugins_url( 'images/Cards/cards-3-columns-style-3-background.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515687338404{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515687313019{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511778070981{padding-top: 100px !important;padding-bottom: 70px !important;}"][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Responsive designs that will fit in with any type of website design." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Laptop-3"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Create a fast-loading website and offer the best experience." cb_content_text="Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Thunder"][/vc_column_inner][vc_column_inner width="1/3"][tek_contentbox icon_type="icon_browser" cb_title="Get started with this mind-blowing theme filled of options." cb_content_text="Ensure your team is up-to-date on the latest comments. Dolores sit ipsum velit purus aliquet, massa fringilla leo orci. " cb_custom_link="box-link" cb_hover_color="" icon_iconsmind="iconsmind-Diamond"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Cards 3 x 2 Grid – Style 1', 'keydesign' );
    $data['weight']     = 509;
    $data['image_path'] = plugins_url( 'images/Cards/cards-3x2-columns-style-1.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686533635{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1588087816449{padding-top: 100px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1515686553736{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515686561823{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515686569416{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1588087780359{padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1515686553736{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515686561823{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515686569416{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Cards 4 x 2 Grid – Style 1', 'keydesign' );
    $data['weight']     = 510;
    $data['image_path'] = plugins_url( 'images/Cards/cards-4x2-columns-style-1.png', __FILE__ );
    $data['custom_class'] = 'Cards';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515686533635{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1588087816449{padding-top: 100px !important;padding-bottom: 30px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1515686553736{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1515686561823{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1515686569416{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1588088310470{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/card1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1588087780359{padding-bottom: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1515686553736{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Business solutions" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1515686561823{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1515686569416{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Creative work" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1588088318141{padding-right: 0px !important;padding-left: 0px !important;}"][tek_photobox phb_title="Web design" phb_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi." phb_text_align="text-left" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" phb_custom_link="box-button-link" phb_box_link="url:%23|||" phb_button_text="Read more" phb_button_style="tt_secondary_button"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;


// CARDS
// CARDS
// CARDS


// CHARTS
// CHARTS
// CHARTS

   $data               = array();
    $data['name']       = __( 'Pie charts with numbers', 'keydesign' );
    $data['weight']     = 601;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-numbers.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516099622341{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_piechart pc_title="Customizable features" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_thickness="thin_solid" pc_value="75" pc_main_color="#4f6df5" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Plugin compatibility" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_thickness="thin_solid" pc_value="80" pc_main_color="#4f6df5" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="User experience" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_thickness="thin_solid" pc_value="85" pc_main_color="#4f6df5" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Pie charts with numbers ( background )', 'keydesign' );
    $data['weight']     = 602;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-numbers-background.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516099643290{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_piechart pc_title="Customizable features" pc_title_color="#ffffff" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="75" pc_main_color="#ffffff" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Plugin compatibility" pc_title_color="#ffffff" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="80" pc_main_color="#ffffff" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="User experience" pc_title_color="#ffffff" pc_description="Posuere elit sed porta eget justo duis sem nullam. Nibh orci felis. Sed consectetuer dis ac etiam amet." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="85" pc_main_color="#ffffff" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Pie charts with icons', 'keydesign' );
    $data['weight']     = 603;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-icons.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516099662253{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_piechart pc_title="Design" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_thickness="thin_solid" pc_value="75" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Chemical-2"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Web Development" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_thickness="thin_solid" pc_value="80" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Computer-2"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Performance" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_thickness="thin_solid" pc_value="85" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Running"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Pie charts with icons ( background )', 'keydesign' );
    $data['weight']     = 604;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-icons-background.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516099680378{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_piechart pc_title="Design" pc_title_color="#ffffff" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="75" pc_main_color="#ffffff" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Chemical-2"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Web Development" pc_title_color="#ffffff" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="80" pc_main_color="#ffffff" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Computer-2"][/vc_column_inner][vc_column_inner width="1/3"][tek_piechart pc_title="Performance" pc_title_color="#ffffff" pc_description="Porttitor lacus luctus accumsan tortor. Est ante in nibh mauris cursus mattis molestie. Rhoncus mattis rhoncus." pc_description_color="#ffffff" pc_thickness="thin_solid" pc_value="85" pc_main_color="#ffffff" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Running"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Pie charts with image', 'keydesign' );
    $data['weight']     = 605;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-image.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/3" css=".vc_custom_1522246710825{padding-top: 0px !important;}" offset="vc_col-lg-4 vc_col-md-12"][vc_row_inner css=".vc_custom_1516100609832{padding-top: 300px !important;padding-bottom: 270px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img2.jpg?id=5385) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3" offset="vc_col-lg-8 vc_col-md-12"][vc_row_inner css=".vc_custom_1516100390345{padding-top: 120px !important;}"][vc_column_inner width="1/6" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-0 vc_col-lg-6 vc_col-md-offset-0 vc_col-md-8 vc_col-sm-offset-1"][tek_sectiontitle st_title="Get started with this mind-blowing theme filled of options." st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1516100402592{margin-left: -25px !important;padding-top: 30px !important;}"][vc_column_inner width="1/6" css=".vc_custom_1522247002441{margin-right: -25px !important;}"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_col-lg-2 vc_col-md-12 vc_col-sm-offset-0"][tek_piechart pc_title="Design" pc_thickness="thin_solid" pc_value="75" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Air-Balloon"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_col-lg-2 vc_col-md-12"][tek_piechart pc_title="Development" pc_thickness="thin_solid" pc_value="80" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Laptop-3"][/vc_column_inner][vc_column_inner width="1/6" offset="vc_col-lg-2 vc_col-md-12"][tek_piechart pc_title="Performance" pc_thickness="thin_solid" pc_value="85" pc_main_color="#4f6df5" pc_center_content="center_icon" pc_custom_link="#" icon_iconsmind="iconsmind-Timer-2"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Pie charts with video', 'keydesign' );
    $data['weight']     = 606;
    $data['image_path'] = plugins_url( 'images/Charts/pie-charts-with-video.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row css=".vc_custom_1516100716341{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video-counter.jpg" video_play_align="play-button-center" video_location=""][/vc_column][vc_column width="1/2" css=".vc_custom_1522247254533{padding-top: 35px !important;padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="With tons of features at your fingertips, let your creativity loose." st_title_tag="" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_row_inner css=".vc_custom_1515091617790{margin-top: 50px !important;margin-left: -40px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515091306965{padding-left: 0px !important;}"][tek_piechart pc_title="Return rate" pc_thickness="thin_solid" pc_value="50" pc_main_color="#4f6df5" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515091696029{margin-left: -50px !important;}"][tek_piechart pc_title="Customer satisfaction" pc_thickness="thin_solid" pc_value="90" pc_main_color="#4f6df5" pc_center_content="percent_value" pc_custom_link="#"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Full width progress bars', 'keydesign' );
    $data['weight']     = 607;
    $data['image_path'] = plugins_url( 'images/Charts/fullwidth-progress-bars.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516100761283{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1514984926141{padding-top: 100px !important;padding-right: 15px !important;padding-bottom: 100px !important;padding-left: 15px !important;}"][vc_column_inner][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Full width progress bars ( background )', 'keydesign' );
    $data['weight']     = 608;
    $data['image_path'] = plugins_url( 'images/Charts/fullwidth-progress-bars-background.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516100788579{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1514984942515{padding-top: 100px !important;padding-right: 15px !important;padding-bottom: 100px !important;padding-left: 15px !important;}"][vc_column_inner][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Progress bars with text', 'keydesign' );
    $data['weight']     = 609;
    $data['image_path'] = plugins_url( 'images/Charts/progress-bars-with-text.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516100816144{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1514984833196{padding-top: 100px !important;padding-right: 15px !important;padding-bottom: 100px !important;padding-left: 15px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522247335888{padding-top: 25px !important;padding-right: 60px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae; habitasse luctus condimentum integer, cum vel. Euismod sociosqu morbi nulla malesuada sem nunc consectetuer proin rhoncus id. Purus pulvinar, potenti gravida class. Hac sociosqu. Quis netus lacinia varius mattis. Sociosqu a proin congue penatibus risus euismod mi.Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae; habitasse luctus " font_container="tag:p|text_align:left" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522247353832{padding-right: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Progress bars with text ( background )', 'keydesign' );
    $data['weight']     = 610;
    $data['image_path'] = plugins_url( 'images/Charts/progress-bars-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516100857475{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1514984833196{padding-top: 100px !important;padding-right: 15px !important;padding-bottom: 100px !important;padding-left: 15px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522247400483{padding-top: 25px !important;padding-right: 60px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae; habitasse luctus condimentum integer, cum vel. Euismod sociosqu morbi nulla malesuada sem nunc consectetuer proin rhoncus id. Purus pulvinar, potenti gravida class. Hac sociosqu. Quis netus lacinia varius mattis. Sociosqu a proin congue penatibus risus euismod mi.Nisi suscipit fermentum nisl duis commodo cum ornare rutrum imperdiet blandit lobortis, felis aliquam curae; habitasse luctus " font_container="tag:p|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522247405744{padding-right: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Progress bars with image', 'keydesign' );
    $data['weight']     = 611;
    $data['image_path'] = plugins_url( 'images/Charts/progress-bars-with-image.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/3" css=".vc_custom_1522247488208{padding-top: 0px !important;}" offset="vc_col-lg-4 vc_col-md-12"][vc_row_inner css=".vc_custom_1516100965568{padding-top: 300px !important;padding-bottom: 235px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/img1.jpg?id=5383) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_empty_space height="100px"][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="2/3" offset="vc_col-lg-8 vc_col-md-12"][vc_row_inner css=".vc_custom_1516100957528{padding-top: 145px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros. Lorem ipsum dolor sit amet, consectetur adipisici elit, petierunt" st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1515090159343{padding-bottom: 40px !important;}"][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-offset-0 vc_col-md-offset-1 vc_col-sm-offset-1"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Progress bars with video', 'keydesign' );
    $data['weight']     = 612;
    $data['image_path'] = plugins_url( 'images/Charts/progress-bars-with-video.png', __FILE__ );
    $data['custom_class'] = 'Charts';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row css=".vc_custom_1516101002548{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video-counter.jpg" video_play_align="play-button-center" video_location=""][/vc_column][vc_column width="1/2" css=".vc_custom_1522247679379{padding-top: 45px !important;padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="LeadEngine is meant to simplify the website building experience." st_title_tag="" st_subtitle="Cras mattis iudicium purus sit amet fermentum at nos hinc posthac, sitientis piros afros" st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_row_inner][vc_column_inner css=".vc_custom_1513764336004{padding-left: 0px !important;}"][tek_progress_bar pb_heading="static_text" pb_title="Customer satisfaction" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="80" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Web Development" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="75" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][tek_progress_bar pb_heading="static_text" pb_title="Performance" pb_icon_type="no_icon" pb_progress_marker="marker_yes" pb_progressbar_value="90" pb_progressbar_filltime="2" pb_thickness="thin-solid" pb_main_color="#4f6df5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


// CHARTS
// CHARTS
// CHARTS



// CLIENTS
// CLIENTS
// CLIENTS

   $data               = array();
    $data['name']       = __( 'Clients logo carousel', 'keydesign' );
    $data['weight']     = 700;
    $data['image_path'] = plugins_url( 'images/Clients/clients-logo-carousel.png', __FILE__ );
    $data['custom_class'] = 'Clients';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1511351930730{padding-top: 100px !important;padding-right: 100px !important;padding-bottom: 100px !important;padding-left: 100px !important;}"][vc_column_inner][tek_clients client_elements="5" client_loop="loop_on" client_autoplay="auto_off" client_image_animation="no-effect"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-3.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-6.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-2.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-4.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-5.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-7.png"][/tek_clients][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Clients logo carousel ( background )', 'keydesign' );
    $data['weight']     = 701;
    $data['image_path'] = plugins_url( 'images/Clients/clients-logo-carousel-background.png', __FILE__ );
    $data['custom_class'] = 'Clients';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515685688069{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511351930730{padding-top: 100px !important;padding-right: 100px !important;padding-bottom: 100px !important;padding-left: 100px !important;}"][vc_column_inner][tek_clients client_elements="5" client_loop="loop_on" client_autoplay="auto_off" client_image_animation="no-effect"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-3-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-1-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-6-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-2-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-4-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-5-1.png"][tek_clients_single client_image_source="external_link" client_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-7-1.png"][/tek_clients][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Clients logo grid', 'keydesign' );
    $data['weight']     = 702;
    $data['image_path'] = plugins_url( 'images/Clients/clients-logo-grid.png', __FILE__ );
    $data['custom_class'] = 'Clients';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1513266619375{padding-top: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1513266911032{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-3.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266915614{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266921847{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-6.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266927370{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-2.png"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513269030600{margin-bottom: 100px !important;border-top-width: 1px !important;border-top-color: rgba(10,10,10,0.07) !important;border-top-style: solid !important;}"][vc_column_inner width="1/4" css=".vc_custom_1513266931994{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-5.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266936444{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-7.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266941469{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(0,0,0,0.08) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-8.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266946243{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-4.png"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Clients logo grid ( background )', 'keydesign' );
    $data['weight']     = 703;
    $data['image_path'] = plugins_url( 'images/Clients/clients-logo-grid-background.png', __FILE__ );
    $data['custom_class'] = 'Clients';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515685688069{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1513266619375{padding-top: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1513268928994{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-3-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513268936844{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-1-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513268948810{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-6-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266927370{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-2-1.png"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1513269041656{margin-bottom: 100px !important;border-top-width: 1px !important;border-top-color: rgba(255,255,255,0.4) !important;border-top-style: solid !important;}"][vc_column_inner width="1/4" css=".vc_custom_1513268956022{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-5-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513268961583{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-7-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513268968477{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-8-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513266946243{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-4-1.png"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Clients logo grid with button', 'keydesign' );
    $data['weight']     = 704;
    $data['image_path'] = plugins_url( 'images/Clients/clients-logo-grid-with-button.png', __FILE__ );
    $data['custom_class'] = 'Clients';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content" css=".vc_custom_1515685237715{margin-bottom: -40px !important;padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/parallax1.jpg?id=5306) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1513696953563{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1513620643675{margin-bottom: 10px !important;}"][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][tek_sectiontitle st_title="Trusted by over 10,000 local businesses. Try LeadEngine today!" st_title_color="#ffffff" st_text_align="text-center"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][tek_button button_text="Get started" button_link="url:%23|||" button_position="button-center"][vc_separator color="custom" accent_color="rgba(255,255,255,0.4)" css=".vc_custom_1513697247390{margin-top: 80px !important;}"][/vc_column][vc_column css=".vc_custom_1513697385228{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner el_class="container" css=".vc_custom_1514993863597{padding-right: 0px !important;padding-left: 0px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1513697164691{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-1-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513697168864{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-7-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513697173773{border-right-width: 1px !important;padding-top: 40px !important;padding-bottom: 40px !important;border-right-color: rgba(255,255,255,0.4) !important;border-right-style: solid !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-5-1.png"][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1513697177942{padding-top: 40px !important;padding-bottom: 40px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2017/12/client-4-1.png"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// CLIENTS
// CLIENTS
// CLIENTS



// CONTACT FORM
// CONTACT FORM
// CONTACT FORM

   $data               = array();
    $data['name']       = __( 'Simple subscribe form', 'keydesign' );
    $data['weight']     = 800;
    $data['image_path'] = plugins_url( 'images/Contact-forms/simple-subscribe-form.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516094926734{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Don't miss out on our monthly newsletter" font_container="tag:h3|text_align:left|line_height:50px" use_theme_fonts="yes" css=".vc_custom_1515574871134{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_contactform contact_form_id="6" contact_form_style="inline-cf" contact_form_bg=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Simple subscribe form ( background )', 'keydesign' );
    $data['weight']     = 801;
    $data['image_path'] = plugins_url( 'images/Contact-forms/simple-subscribe-form-2.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516094947977{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348683940{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="Don't miss out on our monthly newsletter" font_container="tag:h3|text_align:left|color:%23ffffff|line_height:50px" use_theme_fonts="yes" css=".vc_custom_1515574887684{margin-bottom: 0px !important;}"][/vc_column_inner][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_contactform contact_form_id="6" contact_form_style="inline-cf" contact_form_bg=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Subscribe form with heading', 'keydesign' );
    $data['weight']     = 802;
    $data['image_path'] = plugins_url( 'images/Contact-forms/subscribe-form-with-heading.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516095014613{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516095068213{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." font_container="tag:h3|text_align:center" use_theme_fonts="yes" css=".vc_custom_1513256278731{margin-bottom: 35px !important;}"][tek_contactform contact_form_id="6" contact_form_style="inline-cf"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



       $data               = array();
    $data['name']       = __( 'Subscribe form with heading ( background )', 'keydesign' );
    $data['weight']     = 803;
    $data['image_path'] = plugins_url( 'images/Contact-forms/subscribe-form-with-heading-background.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2"][vc_custom_heading text="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website now." font_container="tag:h3|text_align:center|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1513256310459{margin-bottom: 35px !important;}"][tek_contactform contact_form_id="6" contact_form_style="inline-cf"][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



   $data               = array();
    $data['name']       = __( 'Subscribe form boxed', 'keydesign' );
    $data['weight']     = 804;
    $data['image_path'] = plugins_url( 'images/Contact-forms/subscribe-form-boxed.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1516095135001{background-color: #f7f9fb !important;}"][vc_column css=".vc_custom_1516095095104{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515169879926{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522244394151{padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background-color: #ffffff !important;border-radius: 4px !important;}" el_id="contact-form-box"][tek_sectiontitle st_title="LeadEngine keeps you informed!" st_title_tag="" st_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][vc_empty_space height="10px"][tek_contactform contact_form_id="6" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516095106348{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlimited options" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Add-Window"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Speed performance" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Over-Time2"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Free updates" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Data-Refresh"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Subscribe form boxed ( background )', 'keydesign' );
    $data['weight']     = 805;
    $data['image_path'] = plugins_url( 'images/Contact-forms/subscribe-form-boxed-background.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516095177672{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515165451872{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1522244307373{padding-top: 50px !important;padding-right: 50px !important;padding-bottom: 50px !important;padding-left: 50px !important;background-color: #ffffff !important;border-radius: 4px !important;}" el_id="contact-form-box"][tek_sectiontitle st_title="LeadEngine keeps you informed!" st_title_tag="" st_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building your website." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][vc_empty_space height="10px"][tek_contactform contact_form_id="6" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][vc_column_inner width="1/12" offset="vc_hidden-md vc_hidden-sm vc_hidden-xs"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522244223041{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlimited options" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.2)" icon_iconsmind="iconsmind-Add-Window"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Speed performance" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.2)" icon_iconsmind="iconsmind-Over-Time2"][/tek_iconbox][vc_empty_space height="30px"][tek_iconbox title="Free updates" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.2)" icon_iconsmind="iconsmind-Data-Refresh"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Call to action form with text', 'keydesign' );
    $data['weight']     = 806;
    $data['image_path'] = plugins_url( 'images/Contact-forms/call-to-action-form-with-text.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516095225433{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515166371656{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515166784808{padding-top: 50px !important;}"][tek_sectiontitle st_title="LeadEngine provides solutions customized to meet your needs" st_subtitle="Understanding your requirements and objectives is important to us. We listen and work together to create a truly unique and unforgettable experience." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Try Premium free for 30 days." font_container="tag:h4|text_align:left" use_theme_fonts="yes"][tek_contactform contact_form_id="3904" contact_form_style="full-width-cf"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Call to action form with text ( background )', 'keydesign' );
    $data['weight']     = 807;
    $data['image_path'] = plugins_url( 'images/Contact-forms/call-to-action-form-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516095249080{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515166371656{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515166784808{padding-top: 50px !important;}"][tek_sectiontitle st_title="LeadEngine provides solutions customized to meet your needs" st_subtitle="Understanding your requirements and objectives is important to us. We listen and work together to create a truly unique and unforgettable experience." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/6"][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Try Premium free for 30 days." font_container="tag:h4|text_align:left|color:%23ffffff" use_theme_fonts="yes"][tek_contactform contact_form_id="3904" contact_form_style="full-width-cf"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Call to action form with image', 'keydesign' );
    $data['weight']     = 808;
    $data['image_path'] = plugins_url( 'images/Contact-forms/call-to-action-form-with-image.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1516095444120{padding-top: 10px !important;}"][vc_column css=".vc_custom_1516095328768{padding-top: 0px !important;}"][vc_row_inner css=".vc_custom_1516095344693{border-bottom-width: 1px !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column_inner width="1/12"][/vc_column_inner][vc_column_inner width="5/12" css=".vc_custom_1516095420365{padding-top: 100px !important;padding-right: 25px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Try LeadEngine one month free!" st_subtitle="LeadEngine is a fully packed practical tool of premium built and design. Let your creativity loose and start building" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="25px"][tek_contactform contact_form_id="3904" contact_form_style="full-width-cf"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515589765854{padding-top: 0px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/quote2.png"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with map', 'keydesign' );
    $data['weight']     = 809;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-map.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1516096014816{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522244564559{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map2" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="670px" map_business_panel_settings="hidden_info_panel"][/vc_column][vc_column width="1/2" css=".vc_custom_1522244576873{padding-top: 100px !important;padding-bottom: 100px !important;padding-left: 130px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-10 vc_col-sm-offset-2"][tek_sectiontitle st_title="Ready to get started? Contact us!" st_title_tag="" st_subtitle="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="20px"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with map boxed', 'keydesign' );
    $data['weight']     = 810;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-map-boxed.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516095665984{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522244791629{padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map1" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="430px" map_business_panel_settings="hidden_info_panel"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522244799532{padding-right: 15px !important;padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Let's get in touch" st_title_tag="" st_subtitle="If you are interested to work with us, please contact us." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="20px"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with map boxed ( background )', 'keydesign' );
    $data['weight']     = 811;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-map-boxed-background.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516095677887{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522244863267{padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map1" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="430px" map_business_panel_settings="hidden_info_panel"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522244871070{padding-right: 15px !important;padding-left: 80px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Let's get in touch" st_title_tag="" st_subtitle="If you are interested to work with us, please contact us." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth" css=".vc_custom_1516095727469{margin-bottom: 20px !important;}"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with text', 'keydesign' );
    $data['weight']     = 812;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-text.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516095762744{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516095752620{padding-top: 40px !important;padding-right: 70px !important;padding-left: 100px !important;}"][vc_custom_heading text="49 Grand Street, Los Angeles" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Email: contact@leadengine.com" font_container="tag:h5|text_align:left" use_theme_fonts="yes" css=".vc_custom_1512990177357{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (200) 0760 0760" font_container="tag:h5|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." font_container="tag:h6|text_align:left" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515497653772{padding-right: 80px !important;padding-left: 50px !important;}"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with text ( background )', 'keydesign' );
    $data['weight']     = 813;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516095792496{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515497648972{padding-top: 50px !important;padding-right: 70px !important;padding-left: 100px !important;}"][vc_custom_heading text="49 Grand Street, Los Angeles" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Email: contact@leadengine.com" font_container="tag:h5|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1515497758319{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (200) 0760 0760" font_container="tag:h5|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." font_container="tag:h6|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515497653772{padding-right: 80px !important;padding-left: 50px !important;}"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Call to action form with video', 'keydesign' );
    $data['weight']     = 814;
    $data['image_path'] = plugins_url( 'images/Contact-forms/call-to-action-form-with-video.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522244987289{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516096226509{padding-top: 270px !important;padding-bottom: 270px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1.jpg?id=5172) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="media_library" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1516096238156{padding-top: 100px !important;padding-bottom: 50px !important;padding-left: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1522245040759{padding-right: 60px !important;}" offset="vc_col-lg-8 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools. " st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_contactform contact_form_id="3904" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with image', 'keydesign' );
    $data['weight']     = 815;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-image.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516095762744{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516095931524{padding-top: 80px !important;padding-bottom: 80px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515496499525{padding-top: 60px !important;padding-left: 120px !important;}"][tek_sectiontitle st_title="Let's get in touch" st_subtitle="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="20px"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515494364224{padding-right: 15px !important;padding-left: 80px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/chair.png"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Contact form with image fullwidth', 'keydesign' );
    $data['weight']     = 816;
    $data['image_path'] = plugins_url( 'images/Contact-forms/contact-form-with-image-fullwidth.png', __FILE__ );
    $data['custom_class'] = 'ContactForms';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1516095967751{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522245136492{padding-top: 650px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/contact1.jpg?id=5405) !important;}" offset="vc_col-lg-6 vc_col-md-12 vc_hidden-sm vc_hidden-xs"][/vc_column][vc_column width="1/2" css=".vc_custom_1522245146206{padding-top: 125px !important;padding-left: 130px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-10 vc_col-sm-offset-2"][tek_sectiontitle st_title="Let's get in touch" st_title_tag="" st_subtitle="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][tek_contactform contact_form_id="5208" contact_form_style="full-width-cf" contact_form_bg=""][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


// CONTACT FORM
// CONTACT FORM
// CONTACT FORM






// COUNTERS
// COUNTERS
// COUNTERS

   $data               = array();
    $data['name']       = __( 'Small counters with text', 'keydesign' );
    $data['weight']     = 901;
    $data['image_path'] = plugins_url( 'images/Counters/small-counters-with-text.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="normal-counter" count_number="30" count_units="Million subscribers" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur."][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="custom_icon" count_icon_position="icon_top" count_size="normal-counter" count_number="25" count_units="Happy customers" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur."][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="custom_icon" count_icon_position="icon_top" count_size="normal-counter" count_number="80" count_units="Completed projects" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur."][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( 'Small counters with text ( background )', 'keydesign' );
    $data['weight']     = 902;
    $data['image_path'] = plugins_url( 'images/Counters/small-counters-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="normal-counter" count_number="30" count_number_color="#ffffff" count_units="Million subscribers" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="custom_icon" count_icon_position="icon_top" count_size="normal-counter" count_number="25" count_number_color="#ffffff" count_units="Happy customers" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="custom_icon" count_icon_position="icon_top" count_size="normal-counter" count_number="80" count_number_color="#ffffff" count_units="Completed projects" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Small counters with icons', 'keydesign' );
    $data['weight']     = 903;
    $data['image_path'] = plugins_url( 'images/Counters/small-counters-with-icons.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_position="icon_top" count_size="normal-counter" count_number="30" count_number_color="#1f1f1f" count_units="Orders received" icon_iconsmind="iconsmind-Shopping-Cart"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_position="icon_top" count_size="normal-counter" count_number="125" count_number_color="#1f1f1f" count_units="Hours spent" icon_iconsmind="iconsmind-Clock-Forward"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_position="icon_top" count_size="normal-counter" count_number="500" count_number_color="#1f1f1f" count_units="Projects in progress" icon_iconsmind="iconsmind-Chemical"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_position="icon_top" count_size="normal-counter" count_number="70" count_number_color="#1f1f1f" count_units="Coffees consumed" icon_iconsmind="iconsmind-Coffee"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Small counters with icons ( background )', 'keydesign' );
    $data['weight']     = 904;
    $data['image_path'] = plugins_url( 'images/Counters/small-counters-with-icons-background.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_color="#ffffff" count_icon_position="icon_top" count_size="normal-counter" count_number="30" count_number_color="#ffffff" count_units="Orders received" count_units_color="#ffffff" icon_iconsmind="iconsmind-Shopping-Cart"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_color="#ffffff" count_icon_position="icon_top" count_size="normal-counter" count_number="125" count_number_color="#ffffff" count_units="Hours spent" count_units_color="#ffffff" icon_iconsmind="iconsmind-Clock-Forward"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_color="#ffffff" count_icon_position="icon_top" count_size="normal-counter" count_number="500" count_number_color="#ffffff" count_units="Projects in progress" count_units_color="#ffffff" icon_iconsmind="iconsmind-Chemical"][/vc_column_inner][vc_column_inner width="1/4"][tek_counter count_icon_type="icon_browser" count_icon_color="#ffffff" count_icon_position="icon_top" count_size="normal-counter" count_number="70" count_number_color="#ffffff" count_units="Coffees consumed" count_units_color="#ffffff" icon_iconsmind="iconsmind-Coffee"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Large counters with text', 'keydesign' );
    $data['weight']     = 905;
    $data['image_path'] = plugins_url( 'images/Counters/large-counters-with-text.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="50" count_units="+" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="95" count_units="%" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="15" count_units="x" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_alignment="count_left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Large counters with text ( background )', 'keydesign' );
    $data['weight']     = 906;
    $data['image_path'] = plugins_url( 'images/Counters/large-counters-with-text-background.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1513764983907{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="50" count_number_color="#ffffff" count_units="+" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff" count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="95" count_number_color="#ffffff" count_units="%" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff" count_alignment="count_left"][/vc_column_inner][vc_column_inner width="1/3"][tek_counter count_icon_type="no_icon" count_size="large-counter" count_number="15" count_number_color="#ffffff" count_units="x" count_units_color="#ffffff" count_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt suscipit perferendis ipsum, asperiores neque, aspernatur." count_description_color="#ffffff" count_alignment="count_left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Event countdown', 'keydesign' );
    $data['weight']     = 907;
    $data['image_path'] = plugins_url( 'images/Counters/event-countdown.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1514993359757{padding-top: 200px !important;padding-bottom: 200px !important;}"][vc_column_inner][tek_countdown starting_year="2019" starting_month="6" starting_day="1" cd_text_days="Days" cd_text_hours="Hours" cd_text_minutes="Minutes" cd_text_seconds="Seconds" cd_text_color="#1f1f1f"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Event countdown ( background )', 'keydesign' );
    $data['weight']     = 908;
    $data['image_path'] = plugins_url( 'images/Counters/event-countdown-background.png', __FILE__ );
    $data['custom_class'] = 'Counters';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1514993392581{padding-top: 200px !important;padding-bottom: 200px !important;}"][vc_column_inner][tek_countdown starting_year="2019" starting_month="4" starting_day="20" cd_text_days="Days" cd_text_hours="Hours" cd_text_minutes="Minutes" cd_text_seconds="Seconds"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


// COUNTERS
// COUNTERS
// COUNTERS



// FAQ
// FAQ
// FAQ

   $data               = array();
    $data['name']       = __( 'FAQ blocks with buttons - Style 1', 'keydesign' );
    $data['weight']     = 1000;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-buttons-style-1.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515752113308{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515146911247{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1513612085726{padding-right: 45px !important;}"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="6. Translation and localization services"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Questions?" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1513612100128{margin-top: 15px !important;}"][vc_column_text]Blandit justo vestibulum tincidunt, ipsum id non, volutpat neque pede eget donec.[/vc_column_text][tek_button button_text="Contact us" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][vc_empty_space height="50px"][vc_custom_heading text="About Us" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Etiam nisl cras, arcu dui, wisi aenean non sit quisque nulla, eget aut molestie. Rhoncus sociis, nulla luctus diam montes cubilia.[/vc_column_text][tek_button button_text="Learn More" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ blocks with buttons - Style 1 ( background )', 'keydesign' );
    $data['weight']     = 1001;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-buttons-style-1-background.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515752128493{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515146923391{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1513612085726{padding-right: 45px !important;}"][vc_toggle title="1. Before you get started" css_animation="none" el_id="1486465455111-0cc2408f-96b7"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing" el_id="1486465453596-eadb9024-1eec"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins" el_id="1486465455758-f524ec86-fb98"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents" el_id="1486465453143-15df7484-74ad"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options" el_id="1486465452619-85b1e9fd-d3e7"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="6. Translation and localization services"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Questions?" font_container="tag:h3|font_size:22px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1515146945169{margin-top: 15px !important;}"][vc_custom_heading text="Blandit justo vestibulum tincidunt, ipsum id non, volutpat neque pede eget donec." font_container="tag:p|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1515146990769{margin-top: 15px !important;}"][tek_button button_text="Contact us" button_link="url:%23|||" button_position="pull-left"][vc_empty_space height="50px"][vc_custom_heading text="About Us" font_container="tag:h3|font_size:22px|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Blandit justo vestibulum tincidunt, ipsum id non, volutpat neque pede eget donec." font_container="tag:p|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1515146990769{margin-top: 15px !important;}"][tek_button button_text="Learn More" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ blocks with buttons - Style 2', 'keydesign' );
    $data['weight']     = 1002;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-buttons-style-2.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515752142051{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515146911247{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1513612085726{padding-right: 45px !important;}"][vc_toggle title="1. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="6. How to get in touch?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Questions?" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1513612100128{margin-top: 15px !important;}"][vc_column_text]Blandit justo vestibulum tincidunt, ipsum id non, volutpat neque pede eget donec.[/vc_column_text][tek_button button_text="Contact us" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][vc_empty_space height="50px"][vc_custom_heading text="About Us" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Etiam nisl cras, arcu dui, wisi aenean non sit quisque nulla, eget aut molestie. Rhoncus sociis, nulla luctus diam montes cubilia.[/vc_column_text][tek_button button_text="Learn More" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks with video - Style 1', 'keydesign' );
    $data['weight']     = 1003;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-video-style-1.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515752078182{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515752153750{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751786516{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515752071032{padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515752163491{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511893195460{padding-right: 24px !important;padding-left: 24px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/faq-video.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks with video - Style 1 ( background )', 'keydesign' );
    $data['weight']     = 1004;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-video-style-1-background.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515752049031{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515752196860{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751902795{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515752042916{padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515752186379{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511893195460{padding-right: 24px !important;padding-left: 24px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/faq-video.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks with video - Style 2', 'keydesign' );
    $data['weight']     = 1005;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-video-style-2.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515752017685{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515752212406{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751786516{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515752010732{padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515752222939{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="1. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511893195460{padding-right: 24px !important;padding-left: 24px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/faq-video.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks 2 Columns - Style 1', 'keydesign' );
    $data['weight']     = 1006;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-2-columns-style-1.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515751968085{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515752234075{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751786516{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515751960340{padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515752244122{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515752251971{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="6. Translation and localization services" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="7. Connecting social media channels"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="8. Optimize theme speed &amp; performance"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="9. Live chat support"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="10. Developer documentation"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks 2 Columns - Style 1 ( background )', 'keydesign' );
    $data['weight']     = 1007;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-2-columns-style-1-background.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515751928287{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515752263244{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751902795{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515751919339{padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515752270546{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515752279514{padding-right: 0px !important;padding-left: 0px !important;}"][vc_toggle title="6. Translation and localization services" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="7. Connecting social media channels"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="8. Optimize theme speed &amp; performance"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="9. Live chat support"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="10. Developer documentation"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks 2 Columns - Style 2', 'keydesign' );
    $data['weight']     = 1008;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-2-columns-style-2.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515752294244{padding-top: 100px !important;padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Do You Have Questions?" st_subtitle="A list of frequently asked questions to help you understand how it works." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515751786516{margin-bottom: 60px !important;}"][vc_row_inner gap="30" css=".vc_custom_1515751859723{padding-bottom: 100px !important;}"][vc_column_inner width="1/2"][vc_toggle title="1. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/2"][vc_toggle title="6. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="7. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="8. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="9. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="10. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks with sidebar - Style 1', 'keydesign' );
    $data['weight']     = 1009;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-sidebar-style-1.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1515752309734{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner gap="30" css=".vc_custom_1511891381310{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1515752317419{padding-right: 10px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Got questions?" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="30px"][vc_toggle title="1. Before you get started" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. Versatile hosting plans and pricing"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. Compatibility with premium plugins"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. Install theme demo contents"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. Layout and design options"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="6. Translation and localization services" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="7. Connecting social media channels"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="8. Optimize theme speed &amp; performance"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="9. Live chat support"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="10. Developer documentation"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515752326963{padding-right: 0px !important;padding-left: 0px !important;}"][vc_widget_sidebar sidebar_id="blog-sidebar"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

       $data               = array();
    $data['name']       = __( 'FAQ Blocks with sidebar - Style 2', 'keydesign' );
    $data['weight']     = 1010;
    $data['image_path'] = plugins_url( 'images/Faq/faq-blocks-with-sidebar-style-2.png', __FILE__ );
    $data['custom_class'] = 'Faq';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row][vc_column css=".vc_custom_1515752336148{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner gap="30" css=".vc_custom_1511891381310{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1515752351187{padding-right: 30px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Got questions?" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="30px"][vc_toggle title="1. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="2. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="3. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="4. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="5. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="6. When can we get started?" style="simple" css_animation="none"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="7. How do I go about conducting market research?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="8. What do I need in order to start selling?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="9. How much does it cost?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="10. What other help is available?" style="simple"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515752345299{padding-right: 0px !important;padding-left: 0px !important;}"][vc_widget_sidebar sidebar_id="blog-sidebar"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


// FAQ
// FAQ
// FAQ



// GALLERY
// GALLERY
// GALLERY

   $data               = array();
    $data['name']       = __( 'Masonry gallery', 'keydesign' );
    $data['weight']     = 1050;
    $data['image_path'] = plugins_url( 'images/Gallery/masonry-gallery.png', __FILE__ );
    $data['custom_class'] = 'Gallery';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
  [vc_row full_width="stretch_row" css=".vc_custom_1516298952706{padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column css=".vc_custom_1516352543297{padding-right: 0px !important;}"][tek_masonrygallery_elem][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/2.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/7.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/5.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/8.jpg" mg_size="mg-big"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/3.jpg" mg_size="mg-small"][tek_masonrygallery_elem_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/6.jpg" mg_size="mg-small"][/tek_masonrygallery_elem][/vc_column][/vc_row]


CONTENT;
    $templates[] = $data;

   $data               = array();
    $data['name']       = __( 'Slider gallery', 'keydesign' );
    $data['weight']     = 1051;
    $data['image_path'] = plugins_url( 'images/Gallery/slider-gallery.png', __FILE__ );
    $data['custom_class'] = 'Gallery';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row][vc_column][tek_photogallery pg_image_source="external_link" pg_images_external="#E-8_aHR0cHMlM0ElMkYlMkZrZXlkZXNpZ24tdGhlbWVzLmNvbSUyRmxlYWRlbmdpbmUlMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnNsaWRlcjIuanBnJTJDaHR0cHMlM0ElMkYlMkZrZXlkZXNpZ24tdGhlbWVzLmNvbSUyRmxlYWRlbmdpbmUlMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnNsaWRlcjMuanBnJTJDaHR0cHMlM0ElMkYlMkZrZXlkZXNpZ24tdGhlbWVzLmNvbSUyRmxlYWRlbmdpbmUlMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnNsaWRlcjUuanBnJTJDaHR0cHMlM0ElMkYlMkZrZXlkZXNpZ24tdGhlbWVzLmNvbSUyRmxlYWRlbmdpbmUlMkZ3cC1jb250ZW50JTJGdXBsb2FkcyUyRjIwMTglMkYwMSUyRnNsaWRlcjQuanBn" enable_loop="loop_on" nav_style="nav-arrows-dots" nav_color="black-navigation"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// GALLERY
// GALLERY
// GALLERY



// ICON BOXES
// ICON BOXES
// ICON BOXES

   $data               = array();
    $data['name']       = __( '3 columns - left content', 'keydesign' );
    $data['weight']     = 1100;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-left-content.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008233239{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008242154{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy interface" title_size="small-title" box_content_type="simple_text" text_box="Create amazing websites in a flash." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Compass-Rose"]Easy interface[/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008258067{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Shortcode manager" title_size="small-title" box_content_type="simple_text" text_box="Each content element has been carefully crafted." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008267378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Solid code" title_size="small-title" box_content_type="simple_text" text_box="Carefully coded to deliver a fast loading speed." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns - left content ( background )', 'keydesign' );
    $data['weight']     = 1101;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-left-content-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008282686{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008289706{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy interface" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Create amazing websites in a flash." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read More" link_color="#f4f4f4" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Sidebar-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008295634{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Shortcode manager" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Each content element has been carefully crafted." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read More" link_color="#f4f4f4" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008302498{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Solid code" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Carefully coded to deliver a fast loading speed." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" link_color="#f4f4f4" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns - no title', 'keydesign' );
    $data['weight']     = 1102;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-no-title.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008378125{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008341146{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008349334{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Sidebar-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008354690{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" icon_type="icon_browser" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Add-User"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns - no title ( background )', 'keydesign' );
    $data['weight']     = 1103;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-no-title-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008398734{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008405811{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008411578{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Sidebar-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008418002{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nisi?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_left" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Add-User"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 x 2 columns - no border', 'keydesign' );
    $data['weight']     = 1104;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-2-columns-no-border.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008460883{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008489202{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Build anything" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][tek_iconbox title="Perfect grid system" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Align-JustifyRight"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008498930{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlock your creativity" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Light-Bulb"][/tek_iconbox][tek_iconbox title="Premium design" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008505683{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="High-quality fonts" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Aa"][/tek_iconbox][tek_iconbox title="Lifetime updates" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Data-Refresh"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 x 2 columns - no border ( background )', 'keydesign' );
    $data['weight']     = 1105;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-2-columns-no-border-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008527469{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516008565690{padding-top: 100px !important;padding-bottom: 75px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008535313{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Build anything" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][tek_iconbox title="Perfect grid system" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Align-JustifyRight"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008540714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlock your creativity" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Light-Bulb"][/tek_iconbox][tek_iconbox title="Premium design" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008545730{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="High-quality fonts" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Aa"][/tek_iconbox][tek_iconbox title="Lifetime updates" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque, velit itaque?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Data-Refresh"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns - large icon', 'keydesign' );
    $data['weight']     = 1106;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-large-icon.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008622141{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008627643{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Premium icons" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" icon_type="icon_browser" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Leo-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008633082{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Block builder" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" icon_type="icon_browser" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008639819{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy install" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" icon_type="icon_browser" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Cursor-Click2"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns - large icon ( background )', 'keydesign' );
    $data['weight']     = 1107;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-large-icon-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008663933{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516008670082{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Premium icons" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" link_color="#dddddd" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Leo-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008676387{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Block builder" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" link_color="#dddddd" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516008683170{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy install" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint ipsa voluptatibus, voluptates consequuntur quam nis?" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="64px" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read More" link_color="#dddddd" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Cursor-Click2"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '4 columns - no border', 'keydesign' );
    $data['weight']     = 1108;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/4-columns-no-border.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008777154{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1516008786386{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Optimized for speed" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008795521{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Premium design" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008801594{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Elite author" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Add-User"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008807690{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Lifetime updates" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Life-Safer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '4 columns - no border ( background ) ', 'keydesign' );
    $data['weight']     = 1109;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/4-columns-no-border-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008830796{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1516008837938{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Optimized for speed" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008848394{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Premium design" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Crown"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008854083{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Elite author" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Add-User"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516008860747{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Lifetime updates" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="none" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Life-Safer"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '2 columns - large icon', 'keydesign' );
    $data['weight']     = 1110;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/2-columns-large-icon.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516008924949{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516008934922{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Build anything" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_size="68px" icon_position="icon_left" content_alignment="content_left" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516008944282{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlock your creativity" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" icon_type="icon_browser" icon_size="68px" icon_position="icon_left" content_alignment="content_left" custom_link="1" link_text="Read More" background_type="custom_bg_color" border_type="custom_border_color" icon_iconsmind="iconsmind-Light-Bulb"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '2 columns - large icon ( background )', 'keydesign' );
    $data['weight']     = 1111;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/2-columns-large-icon-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516008965245{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516008973674{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Build anything" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="68px" icon_position="icon_left" content_alignment="content_left" custom_link="1" link_text="Read More" link_color="#d3d3d3" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Chemical-2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516008980074{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Unlock your creativity" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore!" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_size="68px" icon_position="icon_left" content_alignment="content_left" custom_link="1" link_text="Read More" link_color="#d3d3d3" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(63,63,63,0.01)" icon_iconsmind="iconsmind-Light-Bulb"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns centered - no border', 'keydesign' );
    $data['weight']     = 1112;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-centered-no-border.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516009024901{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516009006170{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy interface" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Compass-Rose"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516009012538{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Shortcode manager" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516009018730{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Solid code" title_size="large-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '3 columns centered - no border ( background )', 'keydesign' );
    $data['weight']     = 1113;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/3-columns-centered-no-border-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516009042213{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516009052786{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy interface" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Compass-Rose"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516009059306{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Shortcode manager" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Duplicate-Window"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516009066194{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Solid code" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis vel, ipsam repellendus, perferendis quos dolore! Incidunt vel doloremque." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="#" background_type="custom_bg_color" border_type="none" icon_iconsmind="iconsmind-Rock-andRoll"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '4 columns - large icon', 'keydesign' );
    $data['weight']     = 1114;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/4-columns-large-icon.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516009085636{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516009163625{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1516009093233{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy setup" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Cursor-Click2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009109505{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Live editing" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Finger-DragFourSides"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009124658{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Browser support" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Chrome"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009131818{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Speed performance" title_size="small-title" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." icon_type="icon_browser" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" background_type="custom_bg_color" border_type="custom_border_color" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


   $data               = array();
    $data['name']       = __( '4 columns - large icon ( background )', 'keydesign' );
    $data['weight']     = 1115;
    $data['image_path'] = plugins_url( 'images/Icon-boxes/4-columns-large-icon-background.png', __FILE__ );
    $data['custom_class'] = 'IconBoxes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516009188795{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516009201986{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4" css=".vc_custom_1516009213434{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Easy setup" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.15)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Cursor-Click2"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009221114{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Live editing" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.15)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Finger-DragFourSides"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009228825{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Browser support" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.15)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Chrome"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/4" css=".vc_custom_1516009236786{padding-right: 0px !important;padding-left: 0px !important;}"][tek_iconbox title="Speed performance" title_size="small-title" title_color="#ffffff" box_content_type="simple_text" text_box="Lorem ipsum dolor sit amet, consectetur adipisicing elit." text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_center" custom_link="1" link_text="Read more" link_color="#d6d6d6" background_type="custom_bg_color" border_type="custom_border_color" border_color="rgba(255,255,255,0.15)" ib_extra_class="custom-box" icon_iconsmind="iconsmind-Timer-2"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



// ICON BOXES
// ICON BOXES
// ICON BOXES


// MOBILE APP
// MOBILE APP
// MOBILE APP

   $data               = array();
    $data['name']       = __( 'Mobile app gallery', 'keydesign' );
    $data['weight']     = 1200;
    $data['image_path'] = plugins_url( 'images/Mobile-app/mobile-app-gallery.png', __FILE__ );
    $data['custom_class'] = 'MobileApp';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row css=".vc_custom_1515768983953{margin-top: 100px !important;margin-bottom: 100px !important;}"][vc_column][tek_appgallery ag_title="Create a fast-loading website and offer the best experience" ag_description="LeadEngine is fully customizable and features modern and responsive designs that will fit in with any type of website design. Because it’s automatically optimized for mobile, your images will look great no matter what device they’re being viewed on." ag_mockup_source="external_link" ag_mockup_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/gallery-mockup-1.png" ag_nav_style="nav-dots" ag_autoplay="auto_off"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen1.jpg"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen2.jpg"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen3.jpg"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen4.jpg"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen1.jpg"][tek_appgallery_single ag_screenshot_source="external_link" ag_screenshot_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/screen2.jpg"][/tek_appgallery][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'App showcase', 'keydesign' );
    $data['weight']     = 1201;
    $data['image_path'] = plugins_url( 'images/Mobile-app/app-showcase.png', __FILE__ );
    $data['custom_class'] = 'MobileApp';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1514988297744{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1514988280705{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Custom design" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Brush"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Tight security" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Security-Block"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Custom typography" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="400" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Aa"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image source="external_link" alignment="center" css_animation="appear" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/mockup2.png"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1514988285417{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Powerful framework" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-Settings-Window"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="App manager" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-People-onCloud"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Simple Contacts" title_size="large-title" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" icon_type="icon_browser" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="400" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-Mail-Outbox"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'App showcase ( background )', 'keydesign' );
    $data['weight']     = 1202;
    $data['image_path'] = plugins_url( 'images/Mobile-app/app-showcase-background.png', __FILE__ );
    $data['custom_class'] = 'MobileApp';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1514988297744{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1514988280705{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Custom design" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Brush"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Tight security" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Security-Block"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Custom typography" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_right" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="400" icon_style="icon_default" color="" icon_iconsmind="iconsmind-Aa"][/tek_iconbox][/vc_column_inner][vc_column_inner width="1/3"][vc_single_image source="external_link" alignment="center" css_animation="appear" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/mockup2.png"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1514988285417{padding-right: 70px !important;padding-left: 70px !important;}"][vc_empty_space height="50px"][tek_iconbox title="Powerful framework" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-Settings-Window"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="App manager" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="200" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-People-onCloud"][/tek_iconbox][vc_empty_space height="50px"][tek_iconbox title="Simple Contacts" title_size="large-title" title_color="#ffffff" box_content_type="simple_text" text_box="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque" text_color="#ffffff" icon_type="icon_browser" icon_color="#ffffff" icon_position="icon_top" content_alignment="content_left" custom_link="#" background_type="none" css_animation="kd-animated fadeInUp" ib_animation_delay="400" icon_style="icon_default" iconbox_animation_delay="400" icon_iconsmind="iconsmind-Mail-Outbox"][/tek_iconbox][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Mobile app call to action', 'keydesign' );
    $data['weight']     = 1203;
    $data['image_path'] = plugins_url( 'images/Mobile-app/mobile-app-call-to-action.png', __FILE__ );
    $data['custom_class'] = 'MobileApp';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1515086182402{padding-top: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Download mobile app" st_subtitle="A native app for every platform. With an all-new look and powerful features, LeadEngine is the best way to ensure success for your business." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_8_columns"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1515086800626{margin-top: 40px !important;padding-bottom: 20px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515086120634{padding-right: 10px !important;}"][tek_button button_text="AppStore" button_icon_bool="yes" button_position="pull-right" icons="fa fa-apple"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515086124425{padding-left: 10px !important;}"][tek_button button_text="PlayStore" button_icon_bool="yes" button_position="pull-left" icons="fa fa-android"][/vc_column_inner][/vc_row_inner][vc_single_image source="external_link" alignment="center" css=".vc_custom_1515601784603{margin-top: 50px !important;}" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/mockup3.png"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Mobile app call to action ( background )', 'keydesign' );
    $data['weight']     = 1204;
    $data['image_path'] = plugins_url( 'images/Mobile-app/mobile-app-call-to-action-background.png', __FILE__ );
    $data['custom_class'] = 'MobileApp';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1515086182402{padding-top: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Download mobile app" st_subtitle="A native app for every platform. With an all-new look and powerful features, LeadEngine is the best way to ensure success for your business." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_8_columns"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1515086800626{margin-top: 40px !important;padding-bottom: 20px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1515086120634{padding-right: 10px !important;}"][tek_button button_text="AppStore" button_icon_bool="yes" button_position="pull-right" icons="fa fa-apple"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1515086124425{padding-left: 10px !important;}"][tek_button button_text="PlayStore" button_icon_bool="yes" button_position="pull-left" icons="fa fa-android"][/vc_column_inner][/vc_row_inner][vc_single_image source="external_link" alignment="center" css=".vc_custom_1515601853602{margin-top: 50px !important;}" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/mockup3.png"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// MOBILE APP
// MOBILE APP
// MOBILE APP


// MAPS
// MAPS
// MAPS

   $data               = array();
    $data['name']       = __( 'Google map - boxed', 'keydesign' );
    $data['weight']     = 1300;
    $data['image_path'] = plugins_url( 'images/Maps/google-map-boxed.png', __FILE__ );
    $data['custom_class'] = 'Maps';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515764206388{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map1" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="360px" map_business_panel_settings="hidden_info_panel"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522242577622{padding-top: 80px !important;padding-right: 80px !important;padding-left: 60px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="49 Grand Street, Los Angeles" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Email: contact@leadengine.com" font_container="tag:h5|text_align:left" use_theme_fonts="yes" css=".vc_custom_1512990177357{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (200) 0760 0760" font_container="tag:h5|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." font_container="tag:h6|text_align:left" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]

CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Google map - boxed ( background )', 'keydesign' );
    $data['weight']     = 1301;
    $data['image_path'] = plugins_url( 'images/Maps/google-map-boxed-background.png', __FILE__ );
    $data['custom_class'] = 'Maps';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515764215594{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map6" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="360px" map_business_panel_settings="hidden_info_panel" map_icon="3781"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522242667293{padding-top: 80px !important;padding-right: 80px !important;padding-left: 60px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_custom_heading text="49 Grand Street, Los Angeles" font_container="tag:h3|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Email: contact@leadengine.com" font_container="tag:h5|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1512990408949{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (200) 0760 0760" font_container="tag:h5|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_custom_heading text="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." font_container="tag:h6|text_align:left|color:%23ffffff" use_theme_fonts="yes"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Google map - full width', 'keydesign' );
    $data['weight']     = 1302;
    $data['image_path'] = plugins_url( 'images/Maps/google-map-fullwidth.png', __FILE__ );
    $data['custom_class'] = 'Maps';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1515764273922{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522242793531{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_map map_name="LeadEngine Map2" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="500px" map_business_panel_settings="hidden_info_panel"][/vc_column][vc_column width="1/2" css=".vc_custom_1522242802313{padding-top: 150px !important;padding-left: 150px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner][vc_column_inner width="2/3" offset="vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-10 vc_col-sm-offset-2"][vc_custom_heading text="49 Grand Street, Los Angeles" font_container="tag:h3|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Email: contact@leadengine.com" font_container="tag:h5|text_align:left" use_theme_fonts="yes" css=".vc_custom_1512990177357{margin-bottom: 5px !important;}"][vc_custom_heading text="Phone: + (200) 0760 0760" font_container="tag:h5|text_align:left" use_theme_fonts="yes"][vc_custom_heading text="Give us a call or drop by anytime, we endeavour to answer all enquiries within 24 hours on business days." font_container="tag:h6|text_align:left" use_theme_fonts="yes"][/vc_column_inner][vc_column_inner width="1/3" offset="vc_hidden-sm vc_hidden-xs"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Google map with contact details', 'keydesign' );
    $data['weight']     = 1303;
    $data['image_path'] = plugins_url( 'images/Maps/google-map-with-contact-details.png', __FILE__ );
    $data['custom_class'] = 'Maps';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1512991305432{margin-bottom: -40px !important;}"][vc_column][tek_map map_name="LeadEngine Map3" map_latitude="34.058702" map_longitude="-118.272881" map_zoom="13" map_style="gmap_style_grayscale" image_source="external_link" ext_image="https://www.leadengine-wp.com/static/wp-content/uploads/sites/37/2018/02/map-marker-1.png" map_height="500px" map_business_panel_settings="left_info_panel" map_business_name="Contact Details" map_business_address="49 Grand Street, Los Angeles" map_business_email="contact@leadengine.com" map_business_phone="(222) 400-630" map_business_opening_hours="Opening Hours" map_business_schedule="%5B%7B%22map_schedule_day_name%22%3A%22Monday-Friday%22%2C%22map_schedule_day_hours%22%3A%2210%3A00%20-%2018%3A00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Saturday%22%2C%22map_schedule_day_hours%22%3A%2210%3A00%20-%2014%3A00%22%7D%2C%7B%22map_schedule_day_name%22%3A%22Sunday%22%2C%22map_schedule_day_hours%22%3A%22Closed%22%7D%5D"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// MAPS
// MAPS
// MAPS


// PROCESSES
// PROCESSES
// PROCESSES

   $data               = array();
    $data['name']       = __( 'Process - 3 Columns - Flowchart', 'keydesign' );
    $data['weight']     = 1401;
    $data['image_path'] = plugins_url( 'images/Processes/process-3-columns-flowchart.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767776335{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515766787287{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767747454{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767793045{padding-top: 0px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_process ps_template_style="process-checkbox-template" ps_elements="process_three_elem"][tek_process_single pss_title="Developing an effective strategy for your web project" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="1" pss_icon_type="no_icon" pss_background_type="custom_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Software development process and integration" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="2" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Automated testing and professional support" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="3" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Process - 3 Columns - Flowchart ( background )', 'keydesign' );
    $data['weight']     = 1402;
    $data['image_path'] = plugins_url( 'images/Processes/process-3-columns-flowchart-background.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767841720{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515766798945{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767850805{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767833637{padding-top: 0px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_process ps_template_style="process-checkbox-template" ps_elements="process_three_elem"][tek_process_single pss_title="Developing an effective strategy for your web project" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="1" pss_icon_type="no_icon" pss_background_type="custom_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Software development process and integration" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="2" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Automated testing and professional support" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="3" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Process - 3 Columns - Boxes', 'keydesign' );
    $data['weight']     = 1403;
    $data['image_path'] = plugins_url( 'images/Processes/process-3-columns-boxes.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767873713{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515766816225{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767747454{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767881237{padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515766834286{padding-right: 0px !important;padding-left: 0px !important;}"][tek_process ps_template_style="process-number-template" ps_elements="process_three_elem"][tek_process_single pss_title="Strategy" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="1." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Development" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="2." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Production" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_display_number="process_number_on" pss_number="3." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button" pss_button_color_scheme="btn_primary_color"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Process - 3 Columns - Boxes ( background )', 'keydesign' );
    $data['weight']     = 1404;
    $data['image_path'] = plugins_url( 'images/Processes/process-3-columns-boxes-background.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767959753{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515766842534{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767850805{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767969102{padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515766847709{padding-right: 0px !important;padding-left: 0px !important;}"][tek_process ps_template_style="process-number-template" ps_elements="process_three_elem"][tek_process_single pss_title="Strategy" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="1." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Development" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="2." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Production" pss_title_color="#ffffff" pss_description="Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="3." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

   $data               = array();
    $data['name']       = __( 'Process - 4 Columns - Flowchart', 'keydesign' );
    $data['weight']     = 1405;
    $data['image_path'] = plugins_url( 'images/Processes/process-4-columns-flowchart.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767904081{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515766855918{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767747454{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767912446{padding-bottom: 100px !important;}"][vc_column_inner][tek_process ps_template_style="process-checkbox-template" ps_elements="process_four_elem"][tek_process_single pss_title="Develop objectives" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="1" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Determine resources" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="2" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Create a timeline" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="3" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Finalize plan" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="4" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Process - 4 Columns - Flowchart ( background )', 'keydesign' );
    $data['weight']     = 1406;
    $data['image_path'] = plugins_url( 'images/Processes/process-4-columns-flowchart-background.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767984361{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515766865089{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767850805{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767993325{padding-bottom: 100px !important;}"][vc_column_inner][tek_process ps_template_style="process-checkbox-template" ps_elements="process_four_elem"][tek_process_single pss_title="Develop objectives" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="1" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Determine resources" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="2" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_color_scheme="btn_primary_color"][tek_process_single pss_title="Create a timeline" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="3" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_color_scheme="btn_primary_color"][tek_process_single pss_title="Finalize plan" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="4" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_color_scheme="btn_primary_color"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( 'Process - 4 Columns - Boxes', 'keydesign' );
    $data['weight']     = 1407;
    $data['image_path'] = plugins_url( 'images/Processes/process-4-columns-boxes.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515767930695{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515766873657{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767747454{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515767938622{padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515766878806{padding-right: 0px !important;padding-left: 0px !important;}"][tek_process ps_template_style="process-number-template" ps_elements="process_four_elem"][tek_process_single pss_title="Strategy" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="1." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Development" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="2." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][tek_process_single pss_title="Production" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="3." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button" pss_button_color_scheme="btn_primary_color"][tek_process_single pss_title="Maintenance" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_display_number="process_number_on" pss_number="4." pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||" pss_button_style="tt_secondary_button"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Process - 4 Columns - Boxes ( background )', 'keydesign' );
    $data['weight']     = 1408;
    $data['image_path'] = plugins_url( 'images/Processes/process-4-columns-boxes-background.png', __FILE__ );
    $data['custom_class'] = 'Processes';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515768011695{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1515766889376{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our process" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515767850805{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515768018805{padding-bottom: 100px !important;}"][vc_column_inner css=".vc_custom_1515766896230{padding-right: 0px !important;padding-left: 0px !important;}"][tek_process ps_template_style="process-number-template" ps_elements="process_four_elem"][tek_process_single pss_title="Strategy" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="1." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Development" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="2." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Production" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="3." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][tek_process_single pss_title="Maintenance" pss_title_color="#ffffff" pss_description="Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra." pss_description_color="#ffffff" pss_display_number="process_number_on" pss_number="4." pss_number_color="#ffffff" pss_icon_type="no_icon" pss_background_type="default_bg_color" pss_border_color="rgba(255,255,255,0.2)" pss_custom_link="1" pss_link_text="Read more" pss_link="url:%23|||"][/tek_process][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// PROCESSES
// PROCESSES
// PROCESSES


// PRICING
// PRICING
// PRICING

   $data               = array();
    $data['name']       = __( '3 Columns pricing - Minimal', 'keydesign' );
    $data['weight']     = 1501;
    $data['image_path'] = plugins_url( 'images/Pricing/3-columns-pricing-minimal.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1516027900284{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516026145598{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Pricing plans and options" st_title_tag="" st_subtitle="Simple, flexible, and predictable pricing. Choose which package is best suited for you." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1588177765003{margin-bottom: 50px !important;}"][tek_priceswitcher ps_default_variant="Billed Monthly" ps_secondary_variant="Billed Yearly" css_animation=""][vc_row_inner css=".vc_custom_1516027891923{padding-top: 0px !important;padding-right: 100px !important;padding-bottom: 100px !important;padding-left: 100px !important;}"][vc_column_inner width="1/3"][tek_pricing pricing_title="Starter" pricing_price="25" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="" secondary_plan_value="125" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Basic solution" list_title="Standard pack" icon_iconsmind="iconsmind-Business-Man"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="active" secondary_plan_value="500" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Business-ManWoman"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="" secondary_plan_value="1500" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack" icon_iconsmind="iconsmind-Business-Mens"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


     $data               = array();
    $data['name']       = __( '3 Columns pricing - Minimal ( background )', 'keydesign' );
    $data['weight']     = 1502;
    $data['image_path'] = plugins_url( 'images/Pricing/3-columns-pricing-minimal-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
   [vc_row full_width="stretch_row" css=".vc_custom_1588178322991{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516026241975{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Pricing plans and options" st_title_tag="" st_subtitle="Simple, flexible, and predictable pricing. Choose which package is best suited for you." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1588178326870{margin-bottom: 50px !important;}"][tek_priceswitcher ps_default_variant="Billed Monthly" ps_secondary_variant="Billed Yearly" ps_variant_color="#ffffff" css_animation=""][vc_row_inner css=".vc_custom_1588178335099{margin-top: -30px !important;padding-right: 100px !important;padding-bottom: 70px !important;padding-left: 100px !important;}"][vc_column_inner width="1/3"][tek_pricing pricing_title="Starter" pricing_price="25" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="active" pricing_text_color="#ffffff" pricing_border_color="rgba(255,255,255,0)" secondary_plan_value="125" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Basic solution" list_title="Standard pack" icon_iconsmind="iconsmind-Business-Man"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="active" pricing_text_color="#ffffff" pricing_border_color="rgba(255,255,255,0)" secondary_plan_value="250" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Business-ManWoman"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="MinimalStyle" highlight_plan="active" pricing_text_color="#ffffff" pricing_border_color="rgba(255,255,255,0)" secondary_plan_value="500" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack" icon_iconsmind="iconsmind-Business-Mens"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '3 Columns pricing - Detailed', 'keydesign' );
    $data['weight']     = 1503;
    $data['image_path'] = plugins_url( 'images/Pricing/3-columns-pricing-detailed.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1516028031544{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516026285495{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Pricing plans and options" st_title_tag="" st_subtitle="Simple, flexible, and predictable pricing. Choose which package is best suited for you." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1588178361875{margin-bottom: 50px !important;}"][tek_priceswitcher ps_default_variant="Billed Monthly" ps_secondary_variant="Billed Yearly" css_animation=""][vc_row_inner css=".vc_custom_1516028058868{padding-top: 20px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_pricing pricing_title="Starter" pricing_price="25" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="" secondary_plan_value="125" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Basic solution" list_title="Standard pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="active" secondary_plan_value="250" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="" secondary_plan_value="500" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '3 Columns pricing - Detailed ( background )', 'keydesign' );
    $data['weight']     = 1504;
    $data['image_path'] = plugins_url( 'images/Pricing/3-columns-pricing-detailed-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
   [vc_row full_width="stretch_row" css=".vc_custom_1516028135832{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516026311525{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Pricing plans and options" st_title_tag="" st_subtitle="Simple, flexible, and predictable pricing. Choose which package is best suited for you." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1588178466438{margin-bottom: 50px !important;}"][tek_priceswitcher ps_default_variant="Billed Monthly" ps_secondary_variant="Billed Yearly" ps_variant_color="#ffffff" css_animation=""][vc_row_inner css=".vc_custom_1588178462491{margin-top: -10px !important;padding-top: 30px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3"][tek_pricing pricing_title="Starter" pricing_price="25" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="" pricing_text_color="#ffffff" pricing_border_color="rgba(255,255,255,0.01)" secondary_plan_value="125" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Basic solution" list_title="Standard pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="active" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" secondary_plan_value="250" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_scheme="DetailedStyle" highlight_plan="" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" secondary_plan_value="500" secondary_plan_period="/ Per year" css_animation="no_animation" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '2 Columns pricing - Minimal', 'keydesign' );
    $data['weight']     = 1505;
    $data['image_path'] = plugins_url( 'images/Pricing/2-columns-pricing-minimal.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516027446913{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511358858580{padding-top: 100px !important;padding-right: 30px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1511359048885{padding-right: 130px !important;}"][vc_custom_heading text="Pricing plans and options" use_theme_fonts="yes" css=".vc_custom_1511359053966{margin-top: 75px !important;}"][vc_empty_space height="25px"][vc_custom_heading text="Simple, flexible, and predictable pricing. Choose which package is best suited for you." font_container="tag:p|font_size:16px|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][tek_button button_text="View All Plans" button_style="tt_secondary_button" button_position="pull-left"][vc_empty_space height="60px"][vc_custom_heading text="Need more? Let's get in touch!" font_container="tag:h4|font_size:14px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1511359099830{margin-top: 0px !important;}" link="url:%23get-in-touch|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Business-Man"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="active" pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack" icon_iconsmind="iconsmind-Business-Mens"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '2 Columns pricing - Minimal ( background )', 'keydesign' );
    $data['weight']     = 1506;
    $data['image_path'] = plugins_url( 'images/Pricing/2-columns-pricing-minimal-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516027464108{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511358858580{padding-top: 100px !important;padding-right: 30px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1511359048885{padding-right: 130px !important;}"][vc_custom_heading text="Pricing plans and options" font_container="tag:h2|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516027769750{margin-top: 100px !important;}"][vc_empty_space height="25px"][vc_custom_heading text="Simple, flexible, and predictable pricing. Choose which package is best suited for you." font_container="tag:p|font_size:16px|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="30px"][tek_button button_text="View All Plans" button_position="pull-left"][vc_empty_space height="60px"][vc_custom_heading text="Need more? Let's get in touch!" font_container="tag:h4|font_size:14px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1511359947551{margin-top: 0px !important;}" link="url:%23get-in-touch|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="active" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Business-Man"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="active" pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack" icon_iconsmind="iconsmind-Business-Mens"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '2 Columns pricing - Detailed', 'keydesign' );
    $data['weight']     = 1507;
    $data['image_path'] = plugins_url( 'images/Pricing/2-columns-pricing-detailed.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516027482005{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511435483049{padding-top: 100px !important;padding-right: 50px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1511359048885{padding-right: 130px !important;}"][vc_custom_heading text="Pricing plans and options" use_theme_fonts="yes" css=".vc_custom_1516027756518{margin-top: 100px !important;}"][vc_empty_space height="25px"][vc_custom_heading text="Simple, flexible, and predictable pricing. Choose which package is best suited for you." font_container="tag:p|font_size:16px|text_align:left" use_theme_fonts="yes"][vc_empty_space height="30px"][tek_button button_text="View All Plans" button_style="tt_secondary_button" button_position="pull-left"][vc_empty_space height="60px"][vc_custom_heading text="Need more? Let's get in touch!" font_container="tag:h4|font_size:14px|text_align:left" use_theme_fonts="yes" css=".vc_custom_1511435688427{margin-top: 0px !important;}" link="url:%23get-in-touch|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="active" pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '2 Columns pricing - Detailed ( background )', 'keydesign' );
    $data['weight']     = 1508;
    $data['image_path'] = plugins_url( 'images/Pricing/2-columns-pricing-detailed-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
   [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516027502454{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511435483049{padding-top: 100px !important;padding-right: 50px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1511359048885{padding-right: 130px !important;}"][vc_custom_heading text="Pricing plans and options" font_container="tag:h2|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1516027744910{margin-top: 100px !important;}"][vc_empty_space height="25px"][vc_custom_heading text="Simple, flexible, and predictable pricing. Choose which package is best suited for you." font_container="tag:p|font_size:16px|text_align:left|color:%23ffffff" use_theme_fonts="yes"][vc_empty_space height="30px"][tek_button button_text="View All Plans" button_position="pull-left"][vc_empty_space height="60px"][vc_custom_heading text="Need more? Let's get in touch!" font_container="tag:h4|font_size:14px|text_align:left|color:%23ffffff" use_theme_fonts="yes" css=".vc_custom_1511435715403{margin-top: 0px !important;}" link="url:%23get-in-touch|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][vc_column_inner width="1/3"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="active" pricing_title="Enterprise" pricing_price="75" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="rgba(63,63,63,0.01)" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20management%22%7D%2C%7B%22pricing_row%22%3A%22Monthly%20reporting%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option4_value="Monthly management" pricing_option5_value="Monthly reporting" icon_type="icon_browser" pricing_other_text="Customizable platform" list_title="Premium pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '1 Column pricing - Minimal', 'keydesign' );
    $data['weight']     = 1509;
    $data['image_path'] = plugins_url( 'images/Pricing/1-column-pricing-minimal.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516027525293{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511360221196{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513258614295{padding-right: 150px !important;}"][vc_empty_space height="150px"][tek_sectiontitle st_title="Services that fit your business and budget" st_subtitle="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility!" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511360981140{padding-right: 150px !important;}"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="icon_browser" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Android-Store"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '1 Column pricing - Minimal ( background )', 'keydesign' );
    $data['weight']     = 1510;
    $data['image_path'] = plugins_url( 'images/Pricing/1-column-pricing-minimal-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516027544918{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511360221196{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513258649879{padding-right: 150px !important;}"][vc_empty_space height="150px"][tek_sectiontitle st_title="Services that fit your business and budget" st_subtitle="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility!" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511360981140{padding-right: 150px !important;}"][tek_pricing pricing_scheme="MinimalStyle" highlight_plan="active" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="rgba(255,255,255,0.14)" pricing_button_text="Get Started" pricing_icon_type="icon_browser" pricing_icon_color="#ffffff" css_animation="no_animation" pricing_option="%5B%7B%22pricing_row%22%3A%22Marketing%20strategy%22%7D%2C%7B%22pricing_row%22%3A%22Competitive%20analysis%22%7D%2C%7B%22pricing_row%22%3A%22Social%20media%20audit%22%7D%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack" icon_iconsmind="iconsmind-Air-Balloon"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '1 Column pricing - Detailed', 'keydesign' );
    $data['weight']     = 1511;
    $data['image_path'] = plugins_url( 'images/Pricing/1-column-pricing-detailed.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516027563316{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511360221196{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513258785568{padding-right: 150px !important;}"][vc_empty_space height="65px"][tek_sectiontitle st_title="Services that fit your business and budget" st_subtitle="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility!" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511360981140{padding-right: 150px !important;}"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


       $data               = array();
    $data['name']       = __( '1 Column pricing - Detailed ( background )', 'keydesign' );
    $data['weight']     = 1512;
    $data['image_path'] = plugins_url( 'images/Pricing/1-column-pricing-detailed-background.png', __FILE__ );
    $data['custom_class'] = 'Pricing';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516027587616{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511360221196{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1513258800239{padding-right: 150px !important;}"][vc_empty_space height="65px"][tek_sectiontitle st_title="Services that fit your business and budget" st_subtitle="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility!" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511360981140{padding-right: 150px !important;}"][tek_pricing pricing_scheme="DetailedStyle" highlight_plan="" pricing_title="Professional" pricing_price="50" pricing_time="/ Per month" pricing_currency="currency-dollar" pricing_currency_position="currency-position-left" pricing_text_color="#ffffff" pricing_border_color="#3f3f3f" pricing_button_text="Get Started" pricing_icon_type="no_icon" css_animation="no_animation" pricing_option="%5B%5D" pricing_option1_value="Marketing strategy" pricing_option2_value="Competitive analysis" pricing_option3_value="Social media audit" pricing_option6_value="" pricing_option7_value="" pricing_option8_value="" pricing_option9_value="" pricing_option10_value="" pricing_option11_value="" pricing_option12_value="" pricing_option13_value="" pricing_option14_value="" pricing_option15_value="" icon_type="icon_browser" pricing_other_text="Advanced platform" list_title="Business pack"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;





// PRICING
// PRICING
// PRICING


// PORTFOLIO
// PORTFOLIO
// PORTFOLIO

   $data               = array();
    $data['name']       = __( 'Portfolio Masonry – Minimal Style', 'keydesign' );
    $data['weight']     = 1600;
    $data['image_path'] = plugins_url( 'images/Portfolio/portfolio-masonry-minimal-style.png', __FILE__ );
    $data['custom_class'] = 'Portfolio';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515688966903{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Our works" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750120206{margin-bottom: 60px !important;}"][vc_masonry_grid post_type="portfolio" max_items="10" style="lazy" items_per_page="4" show_filter="yes" orderby="title" filter_style="bordered" filter_align="right" item="masonryGrid_OverlayWithRotation" initial_loading_animation="fadeIn" grid_id="vc_gid:1515750069513-ad3942093b02dd9ee61162a2bb72a1ef-9" filter_source="portfolio-category"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Portfolio Masonry – Detailed Style', 'keydesign' );
    $data['weight']     = 1601;
    $data['image_path'] = plugins_url( 'images/Portfolio/portfolio-masonry-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'Portfolio';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515689025535{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Our works" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750120206{margin-bottom: 60px !important;}"][vc_masonry_grid post_type="portfolio" max_items="10" style="lazy" items_per_page="3" show_filter="yes" orderby="title" filter_style="bordered" filter_align="right" initial_loading_animation="fadeIn" grid_id="vc_gid:1515750088396-c9e982856434af0fef0dc11a44daf6ba-7" filter_source="portfolio-category"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Portfolio Grid – Minimal Style', 'keydesign' );
    $data['weight']     = 1602;
    $data['image_path'] = plugins_url( 'images/Portfolio/portfolio-grid-minimal-style.png', __FILE__ );
    $data['custom_class'] = 'Portfolio';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515689025535{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Our works" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750120206{margin-bottom: 60px !important;}"][vc_masonry_grid post_type="portfolio" max_items="9" style="lazy" items_per_page="3" show_filter="yes" orderby="title" filter_style="bordered" filter_align="right" item="basicGrid_ScaleInWithRotation" initial_loading_animation="fadeIn" grid_id="vc_gid:1515750092930-d5affd4bb1a227c6b1105368066a23f7-3" filter_source="portfolio-category"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Portfolio Grid – Detailed Style', 'keydesign' );
    $data['weight']     = 1603;
    $data['image_path'] = plugins_url( 'images/Portfolio/portfolio-grid-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'Portfolio';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515689025535{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner][tek_sectiontitle st_title="Our works" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750120206{margin-bottom: 60px !important;}"][vc_masonry_grid post_type="portfolio" max_items="9" style="lazy" items_per_page="3" show_filter="yes" orderby="title" filter_style="bordered" filter_align="right" item="none" initial_loading_animation="fadeIn" grid_id="vc_gid:1515750097590-76b74e3c3d6c8d530e7a5691a9e22339-10" filter_source="portfolio-category"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// PORTFOLIO
// PORTFOLIO
// PORTFOLIO

// SHOP
// SHOP
// SHOP

   $data               = array();
    $data['name']       = __( 'Shop – 3 Columns – Detailed Style', 'keydesign' );
    $data['weight']     = 1700;
    $data['image_path'] = plugins_url( 'images/Shop/shop-3-columns-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'Shop';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515750958823{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1512737455316{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column_inner css=".vc_custom_1515750948732{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our products" st_subtitle="We provide top quality products that are customized for each of our customers needs" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750819677{margin-bottom: 60px !important;}"][recent_products per_page="3" columns="3" orderby="" order=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Shop – 4 Columns – Detailed Style', 'keydesign' );
    $data['weight']     = 1701;
    $data['image_path'] = plugins_url( 'images/Shop/shop-4-columns-detailed-style.png', __FILE__ );
    $data['custom_class'] = 'Shop';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515750968862{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1512737460788{padding-top: 100px !important;padding-bottom: 50px !important;}"][vc_column_inner css=".vc_custom_1515750975948{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our products" st_subtitle="We provide top quality products that are customized for each of our customers needs" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750819677{margin-bottom: 60px !important;}"][recent_products per_page="4" columns="4" orderby="" order=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Shop – 3 Columns – Minimal Style', 'keydesign' );
    $data['weight']     = 1702;
    $data['image_path'] = plugins_url( 'images/Shop/shop-3-columns-minimal-style.png', __FILE__ );
    $data['custom_class'] = 'Shop';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515750995797{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1512737903964{padding-top: 100px !important;padding-bottom: 50px !important;}" el_class="woo-minimal-style"][vc_column_inner css=".vc_custom_1515750986980{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our products" st_subtitle="We provide top quality products that are customized for each of our customers needs" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750819677{margin-bottom: 60px !important;}"][recent_products per_page="3" columns="3" orderby="" order=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Shop – 4 Columns – Minimal Style', 'keydesign' );
    $data['weight']     = 1703;
    $data['image_path'] = plugins_url( 'images/Shop/shop-4-columns-minimal-style.png', __FILE__ );
    $data['custom_class'] = 'Shop';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row"][vc_column css=".vc_custom_1515751011637{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1512738595531{padding-top: 100px !important;padding-bottom: 50px !important;}" el_class="woo-minimal-style"][vc_column_inner css=".vc_custom_1515751003788{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Our products" st_subtitle="We provide top quality products that are customized for each of our customers needs" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515750819677{margin-bottom: 60px !important;}"][recent_products per_page="4" columns="4" orderby="" order=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// SHOP
// SHOP
// SHOP


// TABS
// TABS
// TABS

    $data               = array();
    $data['name']       = __( 'Content tabs with text', 'keydesign' );
    $data['weight']     = 1801;
    $data['image_path'] = plugins_url( 'images/Tabs/content-tabs-with-text.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row_content" css=".vc_custom_1515771469325{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][tek_sectiontitle st_title="Customized solutions" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1515771039429{margin-bottom: 60px !important;}"][vc_tta_tabs][vc_tta_section title="Financial Status" tab_id="1488725417825-2758920e-e7ef"][vc_row_inner css=".vc_custom_1513613104582{padding-top: 60px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1489503129699{padding-right: 50px !important;}"][vc_toggle title="Commercial Banking Services" css_animation="none" el_id="1486465455111-0cc2408f-96b7"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Personal Investment Services" css_animation="none" el_id="1489502905563-e29b0d23-e63e"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Foreign Currency Exchange" css_animation="none" el_id="1489502905062-f32a7618-e6e0"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Financial" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla nunc amet ultrices purus aliquet.[/vc_column_text][tek_button button_text="Read more" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Distribution Profiles" tab_id="1489503964921-3acbdde1-0dcf"][vc_row_inner css=".vc_custom_1513613110518{padding-top: 60px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1489503129699{padding-right: 50px !important;}"][vc_toggle title="Market Access and Import/Export" css_animation="none" el_id="1489503965078-f3a803ee-ee0e"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Customs Valuation and Niche Tradings" css_animation="none" el_id="1489503965135-7fd256e5-cb3a"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="State Trading and Regional Trading" css_animation="none" el_id="1489503965197-ebede312-68b5"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Distribution" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla nunc amet ultrices purus aliquet.[/vc_column_text][tek_button button_text="Read more" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Tourism Attractions" tab_id="1489503963784-5b2be039-5cee"][vc_row_inner css=".vc_custom_1513613114726{padding-top: 60px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1489503129699{padding-right: 50px !important;}"][vc_toggle title="Market Access and Import/Export" css_animation="none" el_id="1489503963926-38745a47-05f3"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Customs Valuation and Niche Tradings" css_animation="none" el_id="1489503963972-96e7f4c2-8a42"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="State Trading and Regional Trading" css_animation="none" el_id="1489503964017-d705c68b-2786"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Tourism" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla nunc amet ultrices purus aliquet.[/vc_column_text][tek_button button_text="Read more" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Health Organizations" tab_id="1489503962481-b1168d80-ea38"][vc_row_inner css=".vc_custom_1513613120470{padding-top: 60px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1489503129699{padding-right: 50px !important;}"][vc_toggle title="Market Access and Import/Export" css_animation="none" el_id="1489503962616-b8f0df0f-4a13"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Customs Valuation and Niche Tradings" css_animation="none" el_id="1489503962662-8b70f837-2bd6"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="State Trading and Regional Trading" css_animation="none" el_id="1489503962707-e4bca06c-3a0e"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Health" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla nunc amet ultrices purus aliquet.[/vc_column_text][tek_button button_text="Read more" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Education System" tab_id="1489503959261-4697954d-1d49"][vc_row_inner css=".vc_custom_1513613125382{padding-top: 60px !important;}"][vc_column_inner width="2/3" css=".vc_custom_1489503129699{padding-right: 50px !important;}"][vc_toggle title="Market Access and Import/Export" css_animation="none" el_id="1489503959376-c4b77c29-c522"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="Customs Valuation and Niche Tradings" css_animation="none" el_id="1489503959415-164a2dc0-d9c0"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][vc_toggle title="State Trading and Regional Trading" css_animation="none" el_id="1489503959452-9fd95a61-9c77"]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci.[/vc_toggle][/vc_column_inner][vc_column_inner width="1/3"][vc_custom_heading text="Education" font_container="tag:h3|font_size:22px|text_align:left" use_theme_fonts="yes"][vc_column_text]Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas. Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet elit magnis nulla nunc amet ultrices purus aliquet.[/vc_column_text][tek_button button_text="Read more" button_style="tt_secondary_button" button_link="url:%23|||" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Content tabs with video modal', 'keydesign' );
    $data['weight']     = 1802;
    $data['image_path'] = plugins_url( 'images/Tabs/content-tabs-with-video-modal.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
    [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1515771882606{padding-top: 100px !important;}"][vc_column][tek_sectiontitle st_title="Customized solutions" st_title_tag="" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1515771039429{margin-bottom: 60px !important;}"][vc_tta_tabs alignment="center" active_section="1"][vc_tta_section title="Professional Services" tab_id="1511787547945-91573c99-1afe"][vc_row_inner css=".vc_custom_1515772410235{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522237922141{padding-right: 45px !important;padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522237939819{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Extended Support" tab_id="1515088153889-ceeed939-3cde"][vc_row_inner css=".vc_custom_1515772419627{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522237995916{padding-right: 45px !important;padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522238004842{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Powerfull Admin Panel" tab_id="1515088152862-ec2683d6-85d3"][vc_row_inner css=".vc_custom_1515772427515{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522238014862{padding-right: 45px !important;padding-left: 15px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522238023637{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Content tabs with images', 'keydesign' );
    $data['weight']     = 1803;
    $data['image_path'] = plugins_url( 'images/Tabs/content-tabs-with-images.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1515771875614{padding-top: 100px !important;}"][vc_column][tek_sectiontitle st_title="Customized solutions" st_title_tag="" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_4_columns" css=".vc_custom_1515771039429{margin-bottom: 60px !important;}"][vc_tta_tabs alignment="center" active_section="1"][vc_tta_section title="Professional Services" tab_id="1515088440396-1b40f339-57ec"][vc_row_inner css=".vc_custom_1515772438971{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522238137536{padding-right: 45px !important;padding-left: 45px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_single_image source="external_link" external_style="vc_box_shadow" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video2.jpg"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522238145310{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Extended Support" tab_id="1515088440909-fd412287-d84e"][vc_row_inner css=".vc_custom_1515772446994{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522238153686{padding-right: 45px !important;padding-left: 45px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_single_image source="external_link" external_style="vc_box_shadow" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video3.jpg"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522238160794{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Powerfull Admin Panel" tab_id="1515088441507-05b0d74f-11d7"][vc_row_inner css=".vc_custom_1515772454075{padding-top: 70px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1522238170547{padding-right: 45px !important;padding-left: 45px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_single_image source="external_link" external_style="vc_box_shadow" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/video1-1.jpg"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1522238178987{padding-top: 60px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6 vc_col-md-12"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Extended tabs with right image', 'keydesign' );
    $data['weight']     = 1804;
    $data['image_path'] = plugins_url( 'images/Tabs/extended-tabs-with-right-image.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row css=".vc_custom_1515772013486{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515772123629{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Customized solutions" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515772025611{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515772037042{padding-bottom: 100px !important;}"][vc_column_inner][tek_extended_tabs services_tabs_alignment="tabs-image-right"][tek_extended_tabs_single services_title="Exclusive design" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/tab1.jpg" icon_type="" icon_iconsmind=""][tek_extended_tabs_single services_title="Powerful tools" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/tab2.jpg" icon_type="" icon_iconsmind=""][tek_extended_tabs_single services_title="Easy interface" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/tab2.jpg" icon_type="" icon_iconsmind=""][/tek_extended_tabs][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Extended tabs with left image', 'keydesign' );
    $data['weight']     = 1805;
    $data['image_path'] = plugins_url( 'images/Tabs/extended-tabs-with-left-image.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row css=".vc_custom_1515772069045{padding-top: 100px !important;}"][vc_column css=".vc_custom_1515772136157{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Customized solutions" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515772086147{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515772078211{padding-bottom: 100px !important;}"][vc_column_inner][tek_extended_tabs services_tabs_alignment="tabs-image-left"][tek_extended_tabs_single services_title="Exclusive design" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/tab1.jpg" icon_type="" icon_iconsmind=""][tek_extended_tabs_single services_title="Powerful tools" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/tab2.jpg" icon_type="" icon_iconsmind=""][tek_extended_tabs_single services_title="Easy interface" services_content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/12/tab2.jpg" icon_type="" icon_iconsmind=""][/tek_extended_tabs][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Event schedule tabs', 'keydesign' );
    $data['weight']     = 1806;
    $data['image_path'] = plugins_url( 'images/Tabs/event-schedule-tabs.png', __FILE__ );
    $data['custom_class'] = 'Tabs';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row css=".vc_custom_1515771524094{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column][tek_sectiontitle st_title="Event schedule" st_subtitle="We help businesses of all sizes to increase visibility, drive more traffic and improve commercial success" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515771220740{margin-bottom: 60px !important;}"][vc_tta_tabs][vc_tta_section title="Monday" tab_id="1465929924365-86a6e8da-68a2"][vc_row_inner][vc_column_inner][tek_eventsession es_session_time="10:00" es_session_title="Badge pick-up & breakfast" es_session_description="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse." es_speaker_name="Raymond Turner" es_speaker_position="CEO - KeySoft" es_speaker_photo="4932" es_custom_link="#" es_expanded="es_expand"][tek_eventsession es_session_time="13:00" es_session_title="Promote your mobile app" es_session_description="Etiam pellentesque, suscipit in pulvinar eget placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.

Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis." es_speaker_name="Bruce Sutton" es_speaker_position="CTO - Appsperia" es_speaker_photo="4931" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="14:00" es_session_title="Material design" es_session_description="Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Nullam aliquet velit ac velit tempus in semper neque auctor. Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis." es_speaker_name="Vincent Adams" es_speaker_position="CFO - KeyDesign" es_speaker_photo="4930" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="16:00" es_session_title="Grow your app user base" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.

Ex ea commodi consequatur. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis, ullamco laboris nisi ut aliquip ex ea commodo consequat." es_speaker_name="Mike Jackson" es_speaker_position="PR - Agata Inc" es_speaker_photo="4929" es_custom_link="#" es_expanded="es_collapsed"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Tuesday" tab_id="1465929924406-8f961dbd-f333"][vc_row_inner][vc_column_inner][tek_eventsession es_session_time="10:00" es_session_title="What's new in development tools" es_session_description="Etiam pellentesque, suscipit in pulvinar eget placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.

Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis." es_speaker_name="Pete Hugh" es_speaker_position="Design Director - Incubator" es_speaker_photo="2541" es_custom_link="#" es_expanded="es_expand"][tek_eventsession es_session_time="11:00" es_session_title="Smarter monetization" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.

Ex ea commodi consequatur. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis, ullamco laboris nisi ut aliquip ex ea commodo consequat." es_speaker_name="Chris Clark" es_speaker_position="Marketing Manager - KeySoft" es_speaker_photo="2550" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="14:00" es_session_title="Building a real-time app" es_session_description="Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Nullam aliquet velit ac velit tempus in semper neque auctor. Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis." es_speaker_name="Raymond Turner" es_speaker_position="CEO - KeySoft" es_speaker_photo="2552" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="15:00" es_session_title="Memory performance and tooling" es_session_description="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse." es_speaker_name="Bruce Sutton" es_speaker_position="CTO - Appsperia" es_speaker_photo="2538" es_custom_link="#" es_expanded="es_collapsed"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Wednesday" tab_id="1466436230358-3ebae445-c50d"][vc_row_inner][vc_column_inner][tek_eventsession es_session_time="10:00" es_session_title="The Gold Standard" es_session_description="Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Nullam aliquet velit ac velit tempus in semper neque auctor. Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis." es_speaker_name="Vincent Adams" es_speaker_position="CFO - KeyDesign" es_speaker_photo="2463" es_custom_link="#" es_expanded="es_expand"][tek_eventsession es_session_time="11:00" es_session_title="Building a successful business" es_session_description="Etiam pellentesque, suscipit in pulvinar eget placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.

Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis." es_speaker_name="Mike Jackson" es_speaker_position="PR - Agata Inc" es_speaker_photo="2464" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="13:00" es_session_title="What's new in design tools" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.

Ex ea commodi consequatur. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis, ullamco laboris nisi ut aliquip ex ea commodo consequat." es_speaker_name="Pete Hugh" es_speaker_position="Design Director - Incubator" es_speaker_photo="2465" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="15:00" es_session_title="Marketing online learning" es_session_description="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse." es_speaker_name="Chris Clark" es_speaker_position="Marketing Manager - KeySoft" es_speaker_photo="2466" es_custom_link="#" es_expanded="es_collapsed"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Thursday" tab_id="1466436242441-e34e97fb-f4ef"][vc_row_inner][vc_column_inner][tek_eventsession es_session_time="10:00" es_session_title="Kickstart your web app" es_session_description="Mus accumsan venenatis hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Sapien nunc amet ultrices, dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse." es_speaker_name="Raymond Turner" es_speaker_position="CEO - KeySoft" es_speaker_photo="2461" es_custom_link="#" es_expanded="es_expand"][tek_eventsession es_session_time="13:00" es_session_title="UI & UX for web apps" es_session_description="Etiam pellentesque, suscipit in pulvinar eget placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.

Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis." es_speaker_name="Pete Hugh" es_speaker_position="Design Director - Incubator" es_speaker_photo="2465" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="14:00" es_session_title="Smarter user acquisition" es_session_description="Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Nullam aliquet velit ac velit tempus in semper neque auctor. Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis." es_speaker_name="Vincent Adams" es_speaker_position="CFO - KeyDesign" es_speaker_photo="2463" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="15:00" es_session_title="Real-time analytics" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.

Ex ea commodi consequatur. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis, ullamco laboris nisi ut aliquip ex ea commodo consequat." es_speaker_name="Bruce Sutton" es_speaker_position="CTO - Appsperia" es_custom_link="#" es_expanded="es_collapsed"][/vc_column_inner][/vc_row_inner][/vc_tta_section][vc_tta_section title="Friday" tab_id="1466436253637-662f8fd5-98e7"][vc_row_inner][vc_column_inner][tek_eventsession es_session_time="10:00" es_session_title="Reach more users by going local" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid.

Ex ea commodi consequatur. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis, ullamco laboris nisi ut aliquip ex ea commodo consequat." es_speaker_name="Vincent Adams" es_speaker_position="CFO - KeyDesign" es_speaker_photo="2463" es_custom_link="#" es_expanded="es_expand"][tek_eventsession es_session_time="12:00" es_session_title="Material Design" es_session_description="Etiam pellentesque, suscipit in pulvinar eget placerat, leo leo consequat ante, non iaculis turpis augue ac ligula. Nunc blandit tincidunt consequat. Duis diam metus, suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse. Duis a enim vel mauris ultrices. Nullam aliquet velit ac velit tempus in semper neque auctor.

Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis dui maecenas lacinia qui adipiscing, evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis." es_speaker_name="Pete Hugh" es_speaker_position="Design Director - Incubator" es_speaker_photo="2465" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="14:00" es_session_title="Closing statement" es_session_description="Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Duis mollis, est non commodo luctus, nisi erat porttitor ligula. Evget purus morbi, pellentesque ipsum tortor ipsum. Tincidunt elit magnis nulla facilisis. Dolor sagittis maecenas.

Eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. Nullam aliquet velit ac velit tempus in semper neque auctor. Aenean ligula mi, auctor sed tempus ultrices, semper tempus diam. Hac curabitur per quis parturient vel ut a sit scelerisque a sociis posuere penatibus. Nunc risus est nulla morbi, egestas lobortis." es_speaker_name="Raymond Turner" es_speaker_position="CEO - KeySoft" es_speaker_photo="2461" es_custom_link="#" es_expanded="es_collapsed"][tek_eventsession es_session_time="15:00" es_session_title="After party" es_session_description="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec ullamcorper nulla non metus auctor fringilla. suscipit in pulvinar eget, egestas id arcu. Ullamco laboris nisi ut aliquip ex ea commodo consequat." es_custom_link="#" es_expanded="es_collapsed"][/vc_column_inner][/vc_row_inner][/vc_tta_section][/vc_tta_tabs][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// TABS
// TABS
// TABS


// TEAM
// TEAM
// TEAM

    $data               = array();
    $data['name']       = __( 'Team - Simple Style', 'keydesign' );
    $data['weight']     = 1901;
    $data['image_path'] = plugins_url( 'images/Team/team-simple-style.png', __FILE__ );
    $data['custom_class'] = 'Team';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515753541843{padding-top: 100px !important;background-color: #f7f9fb !important;}"][vc_column css=".vc_custom_1515753185470{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Meet the team" st_subtitle="Get to know the people behind Intact. Our creative and technical team." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515753310834{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515753290986{padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1515753194795{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="minimal" title="Raymond Turner" position="Cloud Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team2.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515753201195{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="minimal" title="Jena Lambert" position="Sales &amp; Marketing Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team1.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515753207107{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="minimal" title="Bruce Sutton" position="Senior Web Developer" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team3.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Team - Classic Style', 'keydesign' );
    $data['weight']     = 1902;
    $data['image_path'] = plugins_url( 'images/Team/team-classic-style.png', __FILE__ );
    $data['custom_class'] = 'Team';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row full_width="stretch_row" css=".vc_custom_1515753562803{padding-top: 100px !important;background-color: #f7f9fb !important;}"][vc_column css=".vc_custom_1515753185470{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Meet the team" st_subtitle="Get to know the people behind Intact. Our creative and technical team." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515753310834{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1515753290986{padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1515753194795{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="classic" title="Raymond Turner" position="Cloud Manager" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team2.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515753201195{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="classic" title="Jena Lambert" position="Sales &amp; Marketing Manager" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team1.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1515753207107{padding-right: 0px !important;padding-left: 0px !important;}"][tek_team design_style="classic" title="Bruce Sutton" position="Senior Web Developer" description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team3.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Team carousel style', 'keydesign' );
    $data['weight']     = 1903;
    $data['image_path'] = plugins_url( 'images/Team/team-carousel-style.png', __FILE__ );
    $data['custom_class'] = 'Team';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1515753654420{border-bottom-width: 1px !important;padding-top: 100px !important;padding-bottom: 0px !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column][vc_row_inner][vc_column_inner width="1/3"][/vc_column_inner][vc_column_inner width="1/3"][tek_sectiontitle st_title="Meet the team" st_subtitle="Get to know the people behind Intact. Our creative and technical team." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_fullwidth"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][tek_teamcarousel tc_elements="5" tc_autoplay="auto_on" tc_autoplay_speed="10000" tc_stoponhover="hover_off" tc_nav_style="nav-dots"][tek_teamcarousel_single title="Jena Lambert" position="Sales & Marketing Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team1.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" css_animation="kd-animated fadeInUp" elem_animation_delay="400" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][tek_teamcarousel_single title="Raymond Turner" position="Cloud Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team2.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][tek_teamcarousel_single title="Bruce Sutton" position="Senior Web Developer" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team3.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][tek_teamcarousel_single title="Pete Hugh" position="Design Director" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team4.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][tek_teamcarousel_single title="Claire Silva" position="PR Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team5.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][tek_teamcarousel_single title="David Banner" position="Senior Web Designer" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team6.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" google_url="url:%23|||" linkedin_url="url:%23|||" tm_title="Vincent Adams" tm_position="Network Engineer" tm_description="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore." tm_facebook="url:%23|||" tm_twitter="url:%23|||" tm_linkedin="url:%23|||" tm_image="4024"][/tek_teamcarousel][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Team - Creative Style', 'keydesign' );
    $data['weight']     = 1904;
    $data['image_path'] = plugins_url( 'images/Team/team-creative-style.png', __FILE__ );
    $data['custom_class'] = 'Team';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
     [vc_row css=".vc_custom_1515753465879{margin-top: 100px !important;}"][vc_column][tek_sectiontitle st_title="Meet the team" st_subtitle="Get to know the people behind Intact. Our creative and technical team." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515753498268{margin-bottom: 30px !important;}"][/vc_column][/vc_row][vc_row full_width="stretch_row" css=".vc_custom_1515612855471{margin-bottom: 50px !important;border-bottom-width: 1px !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column css=".vc_custom_1515612866550{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1515612912835{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}"][vc_column_inner width="1/3"][tek_team design_style="creative" title="Raymond Turner" position="Cloud Manager" description="Lorem ipsum dolor sit amet, consectetur " image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team2.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_team design_style="creative" title="Jena Lambert" position="Sales &amp; Marketing Manager" description="Lorem ipsum dolor sit amet, consectetur " image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team1.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][vc_column_inner width="1/3"][tek_team design_style="creative" title="Bruce Sutton" position="Senior Web Developer" description="Lorem ipsum dolor sit amet, consectetur " image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/team3.jpg" facebook_url="url:%23|||" twitter_url="url:%23|||" linkedin_url="url:%23|||"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// TEAM
// TEAM
// TEAM


// TESTIMONIALS
// TESTIMONIALS
// TESTIMONIALS

    $data               = array();
    $data['name']       = __( 'Testimonials Slider', 'keydesign' );
    $data['weight']     = 2001;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-slider.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row"][vc_column css=".vc_custom_1516029036131{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516030028553{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1516029043443{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonials tt_image_layout="without-image" tt_nav_style="nav-dots" tt_autoplay="auto_on" tt_autoplay_speed="10000" tt_stoponhover="hover_off" tt_content_align="content-center"][tek_testimonials_single image_source="media_library" tt_heading="" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Joel Ellis" tt_position="Executive Director"][tek_testimonials_single image_source="media_library" tt_heading="" tt_quote="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. One of the fastest multi-purpose themes available on the market. " tt_title="Neal Leyton" tt_position="Web Developer"][tek_testimonials_single image_source="media_library" tt_heading="" tt_quote="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. " tt_title="Vanessa Gibbs" tt_position="Marketing Manager"][/tek_testimonials][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Testimonials Slider ( background )', 'keydesign' );
    $data['weight']     = 2002;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-slider-background.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column css=".vc_custom_1516029053237{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner css=".vc_custom_1516030039209{padding-top: 100px !important;padding-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1516029059685{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonials tt_image_layout="without-image" tt_nav_style="nav-arrows" tt_navigation_color="white-navigation" tt_autoplay="auto_off" tt_content_align="content-center"][tek_testimonials_single tt_text_color="#ffffff" image_source="media_library" tt_heading="" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Joel Ellis" tt_position="Executive Director"][tek_testimonials_single tt_text_color="#ffffff" image_source="media_library" tt_heading="" tt_quote="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. " tt_title="Vanessa Gibbs" tt_position="Marketing Manager"][tek_testimonials_single tt_text_color="#ffffff" image_source="media_library" tt_heading="" tt_quote="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. One of the fastest multi-purpose themes available on the market. " tt_title="Neal Leyton" tt_position="Web Developer"][/tek_testimonials][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Testimonials Slider with image', 'keydesign' );
    $data['weight']     = 2003;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-slider-with-image.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516029722012{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029079179{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client testimonials" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029670419{margin-bottom: 60px !important;}"][vc_row_inner css=".vc_custom_1516029714962{padding-bottom: 120px !important;}"][vc_column_inner css=".vc_custom_1516029087146{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonials tt_image_layout="with-image" tt_nav_style="nav-dots" tt_autoplay="auto_off" tt_content_align="content-center"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial1.jpg" tt_heading="" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Joel Ellis" tt_position="Executive Director"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial2.jpg" tt_heading="" tt_quote="With over 40 custom built elements, LeadEngine is perfect for building your dream landing page website without any coding whatsoever. " tt_title="Vanessa Gibbs" tt_position="Marketing Manager"][tek_testimonials_single image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/testimonial3.jpg" tt_heading="" tt_quote="With plentiful shortcodes to ease your workflow, LeadEngine is meant to simplify the website building experience. One of the fastest multi-purpose themes available on the market. " tt_title="Neal Leyton" tt_position="Web Developer"][/tek_testimonials][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Testimonials carousel with bottom image', 'keydesign' );
    $data['weight']     = 2004;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-carousel-with-bottom-image.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516029748838{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029195606{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client testimonials" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029780451{margin-bottom: 40px !important;}"][vc_row_inner css=".vc_custom_1516030052905{padding-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1516029204083{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonialcards tcard_nav_style="nav-dots" tcard_autoplay="auto_off" tcard_loop="loop_on"][tek_testimonialcards_single tcards_author_name="Raymond Turner" tcards_author_job="Sales Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="Bruce Sutton" tcards_author_job="Marketing Expert" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="Pete Hugh" tcards_author_job="Design Director" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="David Banner" tcards_author_job="Web Developer" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom" tcards_testimonial_title="High professionalism"][/tek_testimonialcards][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Testimonials carousel with top image', 'keydesign' );
    $data['weight']     = 2005;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-carousel-with-top-image.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516029748838{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029195606{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client testimonials" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029780451{margin-bottom: 40px !important;}"][vc_row_inner css=".vc_custom_1516030052905{padding-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1516029204083{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonialcards tcard_nav_style="nav-dots" tcard_autoplay="auto_off" tcard_loop="loop_on"][tek_testimonialcards_single tcards_author_name="Raymond Turner" tcards_author_job="Sales Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-top" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="Bruce Sutton" tcards_author_job="Marketing Expert" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-top" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="Pete Hugh" tcards_author_job="Design Director" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-top" tcards_testimonial_title="High professionalism"][tek_testimonialcards_single tcards_author_name="David Banner" tcards_author_job="Web Developer" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-top" tcards_testimonial_title="High professionalism"][/tek_testimonialcards][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Single testimonial quote', 'keydesign' );
    $data['weight']     = 2006;
    $data['image_path'] = plugins_url( 'images/Testimonials/single-testimonial-quote.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1515572142197{border-bottom-width: 1px !important;background-color: #f7f9fb !important;border-bottom-color: #e5e7f2 !important;border-bottom-style: solid !important;}"][vc_column width="1/2" css=".vc_custom_1511454108554{padding-top: 0px !important;}"][vc_empty_space height="200"][tek_testimonials tt_image_layout="without-image" tt_nav_style="nav-dots" tt_autoplay="auto_off" tt_content_align="content-center"][tek_testimonials_single tt_text_color="#1f1f1f" image_source="media_library" tt_heading="" tt_quote="LeadEngine is a fully packed practical tool of premium built and design. Thus is great for rising undefined businesses looking for a specific customers market. " tt_title="Claire Silva" tt_position="Executive Director"][/tek_testimonials][/vc_column][vc_column width="1/2" css=".vc_custom_1515572210124{padding-top: 0px !important;}"][vc_single_image source="external_link" alignment="center" custom_src="https://www.leadengine-wp.com/wp-content/uploads/2018/01/quote2.png"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Reviews carousel', 'keydesign' );
    $data['weight']     = 2007;
    $data['image_path'] = plugins_url( 'images/Testimonials/reviews-carousel.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516029951749{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029502203{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client reviews" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029978131{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516030120585{padding-bottom: 80px !important;}"][vc_column_inner css=".vc_custom_1516029494833{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviewcarousel rwp_loop="loop_off" rwp_nav_style="nav-dots" rwp_autoplay="auto_off"][tek_reviewcarousel_single rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review1.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="Best purchase"][tek_reviewcarousel_single rw_author_name="Claire Silva" rw_author_desc="Kansas City, Missouri" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review2.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="Best purchase"][tek_reviewcarousel_single rw_author_name="Raymond Turner" rw_author_desc="Arlington, Washington" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review3.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="Best purchase"][tek_reviewcarousel_single rw_author_name="Elaine Sutton" rw_author_desc="Chicago, Illinois" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/img6.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="Best purchase"][tek_reviewcarousel_single rw_author_name="Peter Morten" rw_author_desc="Sky Valley, California" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review1.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="Best purchase"][/tek_reviewcarousel][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( ' Reviews grid with image', 'keydesign' );
    $data['weight']     = 2008;
    $data['image_path'] = plugins_url( 'images/Testimonials/reviews-grid-with-image.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516030085658{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029484868{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client reviews" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029978131{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516030112977{padding-bottom: 80px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516029474154{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review1.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Elaine Sutton" rw_author_desc="Chicago, Illinois" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/img6.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516029479458{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Claire Silva" rw_author_desc="Kansas City, Missouri" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review2.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Raymond Turner" rw_author_desc="Arlington, Washington" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review3.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Reviews grid with image ( background )', 'keydesign' );
    $data['weight']     = 2009;
    $data['image_path'] = plugins_url( 'images/Testimonials/reviews-grid-with-image-background.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516030406755{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516029484868{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client reviews" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516030306809{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516030112977{padding-bottom: 80px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1516029474154{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review1.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Elaine Sutton" rw_author_desc="Chicago, Illinois" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/img6.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1516029479458{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Claire Silva" rw_author_desc="Kansas City, Missouri" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review2.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Raymond Turner" rw_author_desc="Arlington, Washington" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2018/01/review3.jpg" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Reviews grid', 'keydesign' );
    $data['weight']     = 2010;
    $data['image_path'] = plugins_url( 'images/Testimonials/reviews-grid.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516030161901{padding-top: 100px !important;}"][vc_column css=".vc_custom_1516029443670{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client reviews" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516029978131{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516030189025{padding-bottom: 80px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Elaine Sutton" rw_author_desc="Chicago, Illinois" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Claire Silva" rw_author_desc="Kansas City, Missouri" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Peter Morten" rw_author_desc="Sky Valley, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Raymond Turner" rw_author_desc="Arlington, Washington" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;



    $data               = array();
    $data['name']       = __( 'Reviews grid ( background )', 'keydesign' );
    $data['weight']     = 2011;
    $data['image_path'] = plugins_url( 'images/Testimonials/reviews-grid-background.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516030397867{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516029443670{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client reviews" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1516030247666{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1516030189025{padding-bottom: 80px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Elaine Sutton" rw_author_desc="Chicago, Illinois" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Claire Silva" rw_author_desc="Kansas City, Missouri" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Peter Morten" rw_author_desc="Sky Valley, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_reviews rw_author_name="Raymond Turner" rw_author_desc="Arlington, Washington" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][tek_reviews rw_author_name="Tom Davis" rw_author_desc="San Francisco, California" image_source="media_library" rw_review_message="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." rw_show_review_rating="show_stars" rw_review_rating="five_stars" rw_star_color="#ffc662" rw_review_title="" rw_review_title_color=""][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Testimonials grid ( background )', 'keydesign' );
    $data['weight']     = 2012;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-grid-bg.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1516030397867{padding-top: 100px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516029443670{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client testimonials" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1588176784694{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1588176701249{padding-bottom: 10px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Raymond Turner" tcards_author_name_color="#ffffff" tcards_author_job="Marketing Expert" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Bruce Sutton" tcards_author_name_color="#ffffff" tcards_author_job="Sales Manager" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Pete Hugh" tcards_author_name_color="#ffffff" tcards_author_job="Design Director" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1588176432815{padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Raymond Turner" tcards_author_name_color="#ffffff" tcards_author_job="Marketing Expert" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Bruce Sutton" tcards_author_name_color="#ffffff" tcards_author_job="Sales Manager" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Pete Hugh" tcards_author_name_color="#ffffff" tcards_author_job="Design Director" tcards_author_job_color="#ffffff" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_author_details="author-bottom"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Testimonials grid', 'keydesign' );
    $data['weight']     = 2013;
    $data['image_path'] = plugins_url( 'images/Testimonials/testimonials-grid.png', __FILE__ );
    $data['custom_class'] = 'Testimonials';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" css=".vc_custom_1588176709188{padding-top: 100px !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}"][vc_column css=".vc_custom_1516029443670{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Client testimonials" st_title_tag="" st_subtitle="We are very proud of the service we provide and stand by every product we carry. Read our testimonials from our happy customers." st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1588176787888{margin-bottom: 50px !important;}"][vc_row_inner css=".vc_custom_1588176337782{padding-bottom: 30px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Raymond Turner" tcards_author_job="Marketing Expert" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Bruce Sutton" tcards_author_job="Sales Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Pete Hugh" tcards_author_job="Design Director" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][/vc_row_inner][vc_row_inner css=".vc_custom_1588176705400{padding-bottom: 100px !important;}"][vc_column_inner width="1/3" css=".vc_custom_1516029450106{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Raymond Turner" tcards_author_job="Marketing Expert" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team2.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029458714{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Bruce Sutton" tcards_author_job="Sales Manager" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team3.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][vc_column_inner width="1/3" css=".vc_custom_1516029464378{padding-right: 0px !important;padding-left: 0px !important;}"][tek_testimonial_card tcards_author_name="Pete Hugh" tcards_author_job="Design Director" image_source="external_link" ext_image="https://www.leadengine-wp.com/wp-content/uploads/2017/11/team1.jpg" tcards_testimonial_text="Dignissim per dis dignissim mi nibh a parturient habitasse suspendisse ut a feugiat morbi neque tortor.Tellus volutpat scelerisque tempor." tcards_testimonial_text_color="#ffffff" tcards_author_details="author-bottom" tcards_testimonial_bg_color="#4f6df5"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


// TESTIMONIALS
// TESTIMONIALS
// TESTIMONIALS

// TIMELINE
// TIMELINE
// TIMELINE

$data               = array();
$data['name']       = __( 'Timeline - ZigZag', 'keydesign' );
$data['weight']     = 2050;
$data['image_path'] = plugins_url( 'images/Timeline/1.png', __FILE__ );
$data['custom_class'] = 'Timeline';
$data['disabled'] = true;
$data['content']    = <<<CONTENT
[vc_row kd_background_image_position="vc_row-bg-position-top" css=".vc_custom_1634202578449{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column width="1/6"][/vc_column][vc_column offset="vc_col-lg-8" css=".vc_custom_1634204193188{padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Accelerate your startup today with LeadEngine" st_title_tag="" st_subtitle="Stay on the same page and make decisions faster by bringing<br />
all of your work communication into one place." st_subtitle_decoration="" st_title_size="38px" st_separator_enable="separator_off" st_text_align="text-center" st_width="st_fullwidth" st_subtitle_tag="" st_subtitle_position="subtitle-below-title" st_title_font_weight="" css=".vc_custom_1663846892884{margin-bottom: 75px !important;}"][tek_timeline card_alignment="timeline-align-zigzag"][tek_timeline_single date="February 10, 2010" title="Concept and Research" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-lightbulb"][tek_timeline_single date="March 20, 2012" title="Assembling Team" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-building"][tek_timeline_single date="April 15, 2015" title="Scaling or Growing" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-comment-alt"][tek_timeline_single date="June 25, 2022" title="Becoming Established" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-gem"][/tek_timeline][/vc_column][vc_column width="1/6"][/vc_column][/vc_row]
CONTENT;
$templates[] = $data;

$data               = array();
$data['name']       = __( 'Timeline - Right - List', 'keydesign' );
$data['weight']     = 2055;
$data['image_path'] = plugins_url( 'images/Timeline/2.png', __FILE__ );
$data['custom_class'] = 'Timeline';
$data['disabled'] = true;
$data['content']    = <<<CONTENT
[vc_row full_width="stretch_row" kd_background_image_position="vc_row-bg-position-top" kd_background_overlay="true" css=".vc_custom_1634213456380{padding-bottom: 100px !important;}"][vc_column css=".vc_custom_1597665991208{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner kd_background_image_position="vc_row-bg-position-top"][vc_column_inner css=".vc_custom_1634204149624{padding-top: 100px !important;padding-left: 100px !important;}" css_tablet_portrait=".vc_custom_1634204149624{padding-right: 0px !important;padding-left: 0px !important;}" css_mobile=".vc_custom_1634204149624{padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12" css_tablet_landscape=".vc_custom_1634204149624{padding-top: 0px !important;}"][tek_sectiontitle st_title="Create request processes so you always get the info you need to deliver results fast" st_title_tag="" st_subtitle="Our network of practitioners will provide you with the strategic guidance to make the right technology, business and commercial decisions, and our program managers will help you develop and implement the best operational framework and processes for your company." st_subtitle_decoration="" st_subtitle_color="#696969" st_title_size="38px" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth" css_animation="kd-animated fadeIn" css_animation_delay="200" st_subtitle_tag="" st_subtitle_position="subtitle-below-title" st_title_font_weight="" st_title_bottom_spacing="30px" css=".vc_custom_1663844341036{margin-bottom: 45px !important;}"][tek_list css_animation="kd-animated fadeIn" list_animation_delay="200"][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Early stage product mentorship[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Strong international ecosystem[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Seed investment &amp; incubation[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Strong company culture[/tek_list_single][/tek_list][vc_empty_space height="50px"][tek_button button_text="Our Services" button_style="tt_primary_button" button_icon_bool="yes" button_action="button-action-link" button_link="url:%23|||" button_position="pull-left" css_animation="kd-animated zoomIn" elem_animation_delay="200" button_icon_position="icon_right" button_icon_size="13px" icons="fas fa-chevron-right"][/vc_column_inner][vc_column_inner css=".vc_custom_1634204290064{padding-top: 100px !important;padding-right: 100px !important;padding-left: 100px !important;}" offset="vc_col-lg-6" css_tablet_portrait=".vc_custom_1634204290065{padding-top: 50px !important;padding-right: 0px !important;padding-left: 0px !important;}" css_mobile=".vc_custom_1634204290065{padding-top: 50px !important;padding-right: 0px !important;padding-left: 0px !important;}"][tek_timeline card_alignment="timeline-align-left"][tek_timeline_single date="February 10, 2010" title="Concept and Research" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-lightbulb"][tek_timeline_single date="April 15, 2015" title="Scaling or Growing" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-comment-alt"][tek_timeline_single date="June 25, 2022" title="Becoming Established" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-gem"][/tek_timeline][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
$templates[] = $data;

$data               = array();
$data['name']       = __( 'Timeline - Left - List', 'keydesign' );
$data['weight']     = 2060;
$data['image_path'] = plugins_url( 'images/Timeline/3.png', __FILE__ );
$data['custom_class'] = 'Timeline';
$data['disabled'] = true;
$data['content']    = <<<CONTENT
[vc_row kd_background_image_position="vc_row-bg-position-top" css=".vc_custom_1634203422279{padding-bottom: 100px !important;}"][vc_column css=".vc_custom_1597665991208{padding-right: 0px !important;padding-left: 0px !important;}"][vc_row_inner kd_background_image_position="vc_row-bg-position-top"][vc_column_inner width="1/2" css=".vc_custom_1634204356604{padding-top: 100px !important;padding-right: 100px !important;padding-left: 100px !important;}" css_tablet_portrait=".vc_custom_1634204356604{margin-bottom: 50px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}" css_mobile=".vc_custom_1634204356605{margin-bottom: 50px !important;padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12" css_tablet_landscape=".vc_custom_1634204356604{padding-top: 0px !important;}"][tek_timeline card_alignment="timeline-align-right"][tek_timeline_single date="February 10, 2010" title="Concept and Research" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-lightbulb"][tek_timeline_single date="April 15, 2015" title="Scaling or Growing" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-comment-alt"][tek_timeline_single date="June 25, 2022" title="Becoming Established" description="Everybody has (what they consider)<br />
a million-dollar idea, but making an idea<br />
into reality is very rare." link_settings="full-link" link_url="#" link_target="_self" icon_settings="icon_browser" css_animation="" icon_iconsmind="far fa-gem"][/tek_timeline][/vc_column_inner][vc_column_inner css=".vc_custom_1634204407780{padding-top: 100px !important;padding-right: 50px !important;padding-left: 50px !important;}" offset="vc_col-lg-6" css_tablet_portrait=".vc_custom_1634204407781{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}" css_mobile=".vc_custom_1634204407781{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][tek_sectiontitle st_title="Create request processes so you always get the info you need to deliver results fast" st_title_tag="" st_subtitle="Our network of practitioners will provide you with the strategic guidance to make the right technology, business and commercial decisions, and our program managers will help you develop and implement the best operational framework and processes for your company." st_subtitle_decoration="" st_subtitle_color="#696969" st_title_size="38px" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth" css_animation="kd-animated fadeIn" css_animation_delay="200" st_subtitle_tag="" st_subtitle_position="subtitle-below-title" st_title_font_weight="" st_title_bottom_spacing="30px" css=".vc_custom_1663844368280{margin-bottom: 45px !important;}"][tek_list css_animation=""][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Early stage product mentorship[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Early stage product mentorship[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Strong company culture[/tek_list_single][tek_list_single list_text_color="#696969" list_icon_settings="icon_browser" list_icon_color="#ffffff" list_icon_style="icon-circle" list_icon_bg_color="#4f6df5" list_icon="fas fa-check"]Seed investment &amp; incubation[/tek_list_single][/tek_list][vc_empty_space height="50px"][tek_button button_text="Our Services" button_style="tt_primary_button" button_icon_bool="yes" button_action="button-action-link" button_link="url:%23|||" button_position="pull-left" css_animation="kd-animated zoomIn" elem_animation_delay="200" button_icon_position="icon_right" button_icon_size="13px" icons="fas fa-chevron-right"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
$templates[] = $data;

// TIMELINE
// TIMELINE
// TIMELINE



// TITLE BLOCKS
// TITLE BLOCKS
// TITLE BLOCKS

    $data               = array();
    $data['name']       = __( 'Centered title with separator', 'keydesign' );
    $data['weight']     = 2101;
    $data['image_path'] = plugins_url( 'images/Title-blocks/centered-title-with-separator.png', __FILE__ );
    $data['custom_class'] = 'TitleBlocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][tek_sectiontitle st_title="Centered section title" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515748224871{margin-bottom: 60px !important;}"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Left sided title with separator', 'keydesign' );
    $data['weight']     = 2102;
    $data['image_path'] = plugins_url( 'images/Title-blocks/left-sided-title-with-separator.png', __FILE__ );
    $data['custom_class'] = 'TitleBlocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][tek_sectiontitle st_title="Centered section title" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_6_columns" css=".vc_custom_1515748352144{margin-bottom: 60px !important;}"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Simple centered title', 'keydesign' );
    $data['weight']     = 2103;
    $data['image_path'] = plugins_url( 'images/Title-blocks/simple-centered-title.png', __FILE__ );
    $data['custom_class'] = 'TitleBlocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][tek_sectiontitle st_title="Centered section title" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_text_align="text-center" st_width="st_6_columns" css=".vc_custom_1515748243455{margin-bottom: 60px !important;}"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

    $data               = array();
    $data['name']       = __( 'Simple left sided title', 'keydesign' );
    $data['weight']     = 2103;
    $data['image_path'] = plugins_url( 'images/Title-blocks/simple-left-sided-title.png', __FILE__ );
    $data['custom_class'] = 'TitleBlocks';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][tek_sectiontitle st_title="Centered section title" st_subtitle="We design, build and support websites and apps for clients worldwide. We make your business stand out. Interested? Let's chat." st_text_align="text-left" st_width="st_6_columns" css=".vc_custom_1515748328780{margin-bottom: 60px !important;}"][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;

// TITLE BLOCKS
// TITLE BLOCKS
// TITLE BLOCKS


// VIDEO BLOCKS
// VIDEO BLOCKS
// VIDEO BLOCKS

    $data               = array();
    $data['name']       = __( 'Simple video modal', 'keydesign' );
    $data['weight']     = 2200;
    $data['image_path'] = plugins_url( 'images/Video/simple-video-modal.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511786570969{padding-right: 30px !important;padding-left: 30px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Simple video modal (background)', 'keydesign' );
    $data['weight']     = 2201;
    $data['image_path'] = plugins_url( 'images/Video/simple-video-modal-background.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515673465042{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/4"][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511786570969{padding-right: 30px !important;padding-left: 30px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/4"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Simple video modal with text', 'keydesign' );
    $data['weight']     = 2202;
    $data['image_path'] = plugins_url( 'images/Video/simple-video-modal-with-text.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1511787843775{padding-right: 45px !important;padding-left: 15px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511787981233{padding-top: 30px !important;padding-right: 50px !important;padding-left: 50px !important;}"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools." st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Simple video modal with text (background)', 'keydesign' );
    $data['weight']     = 2203;
    $data['image_path'] = plugins_url( 'images/Video/simple-video-modal-with-text-background.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row" css=".vc_custom_1515674736182{background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/section-bg.jpg?id=5455) !important;}"][vc_column][vc_row_inner css=".vc_custom_1511348417220{padding-top: 100px !important;padding-bottom: 100px !important;}"][vc_column_inner width="1/2" css=".vc_custom_1511787843775{padding-right: 45px !important;padding-left: 15px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="external_link" video_image_ext="https://www.leadengine-wp.com/wp-content/uploads/2017/12/video1.jpg" video_play_align="play-button-center" video_location=""][/vc_column_inner][vc_column_inner width="1/2" css=".vc_custom_1511787981233{padding-top: 30px !important;padding-right: 50px !important;padding-left: 50px !important;}"][tek_sectiontitle st_title="Build better business software a lot quicker with LeadEngine" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools. Re-label anything and turn features on and off." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_color="#ffffff" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left"][tek_button button_text="Purchase now" button_position="pull-left"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


        $data               = array();
    $data['name']       = __( 'Fullwidth video modal with text', 'keydesign' );
    $data['weight']     = 2204;
    $data['image_path'] = plugins_url( 'images/Video/fullwidth-video-modal-with-text.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
      [vc_row full_width="stretch_row_content_no_spaces" css=".vc_custom_1511789167686{background-color: #f7f9fb !important;}"][vc_column width="1/2" css=".vc_custom_1522232960942{padding-top: 0px !important;}" offset="vc_col-lg-6 vc_col-md-12"][vc_row_inner css=".vc_custom_1515514750095{padding-top: 235px !important;padding-bottom: 235px !important;background-image: url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/video-img.jpg?id=5295) !important;}"][vc_column_inner css=".vc_custom_1511789291663{padding-top: 0px !important;padding-bottom: 0px !important;}"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="media_library" video_play_align="play-button-center" video_location=""][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/2" offset="vc_col-lg-6 vc_col-md-12 vc_col-xs-12"][vc_row_inner css=".vc_custom_1515674798994{padding-top: 100px !important;padding-left: 100px !important;}"][vc_column_inner width="2/3" offset="vc_col-lg-offset-0 vc_col-lg-8 vc_col-md-offset-0 vc_col-md-11 vc_col-sm-offset-2"][tek_sectiontitle st_title="Get started with this mind-blowing theme filled of options. Buy today!" st_title_tag="" st_subtitle="Customize the framework to match your small business processes using simple drag-and-drop tools. " st_subtitle_decoration="" st_separator_enable="separator_on" st_separator_position="below_title" st_separator_style="solid-line" st_separator_width="sep-border-width-2" st_text_align="text-left" st_width="st_fullwidth"][tek_sectiontitle st_title_tag="" st_subtitle="Simple, flexible, and predictable pricing. Choose which package is best suited for you. Simple, flexible, and predictable pricing. Choose which package is best suited for you." st_subtitle_decoration="" st_separator_enable="separator_off" st_text_align="text-left" st_width="st_fullwidth"][vc_empty_space height="15px"][tek_button button_text="Purchase now" button_style="tt_secondary_button" button_position="pull-left"][/vc_column_inner][vc_column_inner width="1/3"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row]
CONTENT;
    $templates[] = $data;


    $data               = array();
    $data['name']       = __( 'Parallax with video modal', 'keydesign' );
    $data['weight']     = 2205;
    $data['image_path'] = plugins_url( 'images/Video/parallax-with-video-modal.jpg', __FILE__ );
    $data['custom_class'] = 'Video';
    $data['disabled'] = true;
    $data['content']    = <<<CONTENT
        [vc_row full_width="stretch_row" content_placement="middle" css=".vc_custom_1515515116353{margin-bottom: -40px !important;padding-top: 180px !important;padding-bottom: 170px !important;background: #f7f9fb url(https://www.leadengine-wp.com/wp-content/uploads/2018/01/slide1.jpg?id=5247) !important;}"][vc_column width="1/4" css=".vc_custom_1511789287331{padding-top: 0px !important;}"][/vc_column][vc_column width="1/2"][tek_sectiontitle st_title="With tons of features at your fingertips, let your creativity loose. Welcome your visitors with elegance and flexibility." st_title_color="#ffffff" st_subtitle_color="#ffffff" st_text_align="text-center"][vc_empty_space height="30px"][tek_video video_url="//www.youtube.com/embed/nrJtHemSPW4" video_image_source="media_library" video_play_align="play-button-center" video_location=""][/vc_column][vc_column width="1/4"][/vc_column][/vc_row]
CONTENT;
	$templates[] = $data;

// VIDEO BLOCKS
// VIDEO BLOCKS
// VIDEO BLOCKS


	return $templates;
}
?>
