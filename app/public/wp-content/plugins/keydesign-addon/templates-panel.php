<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}


class KeyDesign_Vc_Templates_Panel_Editor {

	protected $keydesign_templates = false;

	public function init() {
		add_filter( 'vc_templates_render_category', array(
			$this,
			'renderTemplateBlock',
		), 10 );
		add_filter( 'vc_templates_render_template', array(
			$this,
			'renderTemplateWindow',
		), 10, 2 );
		add_filter( 'vc_get_all_templates', array(
			$this,
			'LeadEngineTemplates',
		) );

	}

	public function LeadEngineTemplates( $data ) {
				$TemplatesCategory = array(
					'category'        => 'keydesign_templates',
					'category_name'   => esc_html__( 'LeadEngine Templates', 'keydesign' ),
					'category_weight' => 1,
					'templates'       => $this->getAllTemplates(),
				);
				$data[] = $TemplatesCategory;
				return $data;
	}

	public function getKeyDesignTemplates() {
		$templates = getTemplatesFile();
		return $templates;
	}

	public function filters_list() {
		    $output = '';
			$output .= '<ul class="templates-filter-list">';
			$output .= '<li class="filter active" id="all">All</li>';
				$output .= '<li class="filter" id="IntroSections">Intro Section <span class="block-counter">16</span></li>';
				$output .= '<li class="filter" id="Contentblocks">Content Block <span class="block-counter">38</span></li>';
				$output .= '<li class="filter" id="ContentSidebar">Content + Sidebar<span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Banners">Banners <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="BlogPosts">Blog Posts <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Cta">Call to Action <span class="block-counter">8</span></li>';
				$output .= '<li class="filter" id="Cards">Cards <span class="block-counter">10</span></li>';
				$output .= '<li class="filter" id="Charts">Charts <span class="block-counter">12</span></li>';
				$output .= '<li class="filter" id="Clients">Clients <span class="block-counter">5</span></li>';
				$output .= '<li class="filter" id="ContactForms">Contact Form <span class="block-counter">17</span></li>';
				$output .= '<li class="filter" id="Counters">Counters <span class="block-counter">5</span></li>';
				$output .= '<li class="filter" id="Faq">Faq <span class="block-counter">11</span></li>';
				$output .= '<li class="filter" id="Gallery">Gallery <span class="block-counter">2</span></li>';
				$output .= '<li class="filter" id="IconBoxes">Icon Boxes <span class="block-counter">16</span></li>';
				$output .= '<li class="filter" id="Maps">Map <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="MobileApp">Mobile App <span class="block-counter">5</span></li>';
				$output .= '<li class="filter" id="Processes">Process <span class="block-counter">8</span></li>';
				$output .= '<li class="filter" id="Pricing">Pricing <span class="block-counter">12</span></li>';
				$output .= '<li class="filter" id="Portfolio">Portfolio <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Shop">Shop <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Tabs">Tabs <span class="block-counter">6</span></li>';
				$output .= '<li class="filter" id="Team">Team <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Testimonials">Testimonials <span class="block-counter">13</span></li>';
				$output .= '<li class="filter" id="Timeline">Timeline <span class="block-counter">3</span></li>';
				$output .= '<li class="filter" id="TitleBlocks">Title <span class="block-counter">4</span></li>';
				$output .= '<li class="filter" id="Video">Video <span class="block-counter">6</span></li>';
			$output .= '</ul>';
			return $output;
	}



	public function renderTemplateBlock( $category ) {

		if ( 'keydesign_templates' === $category['category'] ) {
			$category['output'] = '';
			$category['output'] .= $this->filters_list();
			$category['output'] .= '
			<div class="vc_column vc_col-sm-12 keydesign_templates_list">
				<div class="vc_ui-template-list vc_templates-list-my_templates vc_ui-list-bar" data-vc-action="collapseAll" id="KeydesignTemplates">';
			if ( ! empty( $category['templates'] ) ) {
				foreach ( $category['templates'] as $template ) {
					$category['output'] .= $this->renderTemplateListItem( $template );
				}
			}
			$category['output'] .= '
				</div>
			</div>';
		}

		return $category;
	}


	function renderTemplateWindow( $template_name, $template_data ) {

		if ( 'keydesign_templates' === $template_data['type'] ) {
			return $this->renderTemplateWindowKeydesign( $template_name, $template_data );
		}

		return $template_name;
	}

	public function renderTemplateWindowKeydesign( $template_name, $template_data ) {
		ob_start();
		$template_id = esc_attr( $template_data['unique_id'] );
		$template_id_hash = md5( $template_id ); // needed for jquery target for TTA
		$template_name = esc_html( $template_name );
		$preview_template_title = esc_attr__( 'Preview template', 'keydesign' );
		$add_template_title = esc_attr__( 'Add template', 'keydesign' );
		echo <<<HTML
			<button type="button" class="vc_ui-list-bar-item-trigger" title="$add_template_title"
					 	data-template-handler=""
						data-vc-ui-element="template-title">$template_name</button>
			<div class="vc_ui-list-bar-item-actions">
				<button type="button" class="vc_general vc_ui-control-button" title="$add_template_title"
					 	data-template-handler="">
					<i class="vc-composer-icon vc-c-icon-add"></i>
				</button>
			</div>
HTML;

		return ob_get_clean();
	}


	public function renderUITemplate() {
		vc_include_template( 'editors/popups/vc_ui-panel-templates.tpl.php', array(
			'box' => $this,
		) );

		return '';
	}


	public function renderBackendTemplate() {

		$template_id = vc_post_param( 'template_unique_id' );
		$template_type = vc_post_param( 'template_type' );

		if ( ! isset( $template_id, $template_type ) || '' === $template_id || '' === $template_type ) {
			die( 'Error: Vc_Templates_Panel_Editor::renderBackendTemplate:1' );
		}
		WPBMap::addAllMappedShortcodes();
		$this->getBackendDefaultTemplate();
		die();
	}


    public function loadDefaultTemplatesLimit( $templates ) {
		$start_index = 0;
		$total_templates_to_show = apply_filters( 'vc_load_default_templates_limit_total', 6 );

		return array_slice( $templates, $start_index, $total_templates_to_show );
	}

	public function getUserTemplates() {
		return apply_filters( 'vc_get_user_templates', get_option( $this->option_name ) );
	}

	public function getAllTemplates() {
			$data = array();
			$keydesign_templates = $this->getKeyDesignTemplates();
			$category_templates = array();
			if ( ! empty( $keydesign_templates ) ) {
				foreach ( $keydesign_templates as $template_id => $template_data ) {
					$category_templates[] = array(
						'unique_id' => $template_id,
						'name' => $template_data['name'],
						'weight' => $template_data['weight'],
						'content' => $template_data['content'],
						'custom_class' => $template_data['custom_class'],
						'type' => 'keydesign_templates',
						'image_path' => $template_data['image_path'],
					);
					$data = $category_templates;
				}
			}
			return $data;
	}


	public function loadDefaultTemplates() {
		return $this->keydesign_templates;
	}

	public function getDefaultTemplates() {
		return $this->loadDefaultTemplates();
	}

	public function getDefaultTemplate( $template_index ) {
		$this->loadDefaultTemplates();
		if ( ! is_numeric( $template_index ) || ! is_array( $this->keydesign_templates ) || ! isset( $this->keydesign_templates[ $template_index ] ) ) {
			return false;
		}
		return $this->keydesign_templates[ $template_index ];
	}

	public function addDefaultTemplates( $data ) {
		if ( is_array( $data ) && ! empty( $data ) && isset( $data['name'], $data['content'] ) ) {
			if ( ! is_array( $this->keydesign_templates ) ) {
				$this->keydesign_templates = array();
			}
			$this->keydesign_templates[] = $data;

			return true;
		}

		return false;
	}

	public function getBackendDefaultTemplate( $return = false ) {
		$template_index = (int) vc_request_param( 'template_unique_id' );
		$data = $this->getDefaultTemplate( $template_index );
		if ( ! $data ) {
			die( 'Error: Vc_Templates_Panel_Editor::getBackendDefaultTemplate:1' );
		}
		if ( $return ) {
			return trim( $data['content'] );
		} else {
			echo trim( $data['content'] );
			die();
		}
	}

	public function sortTemplatesByCategories( array $data ) {
		$buffer = $data;
		uasort( $buffer, array(
			$this,
			'cmpCategory',
		) );

		return $buffer;
	}

	public function sortTemplatesByNameWeight( array $data ) {
		$buffer = $data;
		uasort( $buffer, array(
			$this,
			'cmpNameWeight',
		) );

		return $buffer;
	}

	public function getAllCategoriesNames( array $categories ) {
		$categories_names = array();

		foreach ( $categories as $category ) {
			if ( isset( $category['category'] ) ) {
				$categories_names[ $category['category'] ] = isset( $category['category_name'] ) ? $category['category_name'] : $category['category'];
			}
		}

		return $categories_names;
	}

	public function getAllTemplatesSorted() {
		$data = $this->getAllTemplates();
		// firstly we need to sort by categories
		$data = $this->sortTemplatesByCategories( $data );
		// secondly we need to sort templates by their weight or name
		foreach ( $data as $key => $category ) {
			$data[ $key ]['templates'] = $this->sortTemplatesByNameWeight( $category['templates'] );
		}

		return $data;
	}

	protected function cmpCategory( $a, $b ) {
		$a_k = isset( $a['category'] ) ? $a['category'] : '*';
		$b_k = isset( $b['category'] ) ? $b['category'] : '*';
		$a_category_weight = isset( $a['category_weight'] ) ? $a['category_weight'] : 0;
		$b_category_weight = isset( $b['category_weight'] ) ? $b['category_weight'] : 0;

		return $a_category_weight == $b_category_weight ? strcmp( $a_k, $b_k ) : $a_category_weight - $b_category_weight;
	}

	protected function cmpNameWeight( $a, $b ) {
		$a_k = isset( $a['name'] ) ? $a['name'] : '*';
		$b_k = isset( $b['name'] ) ? $b['name'] : '*';
		$a_weight = isset( $a['weight'] ) ? $a['weight'] : 0;
		$b_weight = isset( $b['weight'] ) ? $b['weight'] : 0;

		return $a_weight == $b_weight ? strcmp( $a_k, $b_k ) : $a_weight - $b_weight;
	}

	public function frontendDoTemplatesShortcodes( $content ) {
		return do_shortcode( $content );
	}

	public function addFrontendTemplatesShortcodesCustomCss() {
		$output = $shortcodes_custom_css = '';
		$shortcodes_custom_css = visual_composer()->parseShortcodesCustomCss( vc_frontend_editor()->getTemplateContent() );
		if ( ! empty( $shortcodes_custom_css ) ) {
			$shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
			$output .= '<style type="text/css" data-type="vc_shortcodes-custom-css">';
			$output .= $shortcodes_custom_css;
			$output .= '</style>';
		}
		echo $output;
	}

	public function renderTemplateListItem( $template ) {
		$name = isset( $template['name'] ) ? esc_html( $template['name'] ) : esc_html( __( 'No title', 'keydesign' ) );
		$template_id = esc_attr( $template['unique_id'] );
		$template_id_hash = md5( $template_id ); // needed for jquery target for TTA
		$template_name = esc_html( $name );
		$template_name_lower = esc_attr( vc_slugify( $template_name ) );
		$template_type = esc_attr( isset( $template['type'] ) ? $template['type'] : 'custom' );
		$custom_class = esc_attr( isset( $template['custom_class'] ) ? $template['custom_class'] : '' );

		$output = <<<HTML
					<div class="vc_ui-template vc_templates-template-type-$template_type $custom_class"
						data-template_id="$template_id"
						data-template_id_hash="$template_id_hash"
						data-category="$template_type"
						data-template_unique_id="$template_id"
						data-template_name="$template_name_lower"
						data-template_type="default_templates"
						data-vc-content=".vc_ui-template-content">
						<div class="vc_ui-list-bar-item">
HTML;
		$output .= '<img src="' . esc_url( $template['image_path'] ) . '"/>';
		$output .= '<h5>'.$template['name'].'</h5>';
		$output .= apply_filters( 'vc_templates_render_template', $name, $template );
		$output .= <<<HTML
						</div>
						<div class="vc_ui-template-content" data-js-content>
						</div>
					</div>
HTML;

		return $output;
	}

	public function getOptionName() {
		return $this->option_name;
	}

}
