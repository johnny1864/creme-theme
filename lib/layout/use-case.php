<?php

if (strpos($_SERVER['REQUEST_URI'], 'styleguide') !== false) {
	$typeOrID = 'option';
} elseif (!is_home() && !is_category() && !is_post_type_archive() && !is_tax()) {
	$typeOrID = get_the_ID();
} elseif (is_post_type_archive()) {
	$post_type = get_queried_object()->name;
	$typeOrID = 'cpt_' . $post_type;
	//check if WPML is installed, if so load the content for that language
	if (defined("ICL_LANGUAGE_CODE")) {
		$typeOrID .= '_' . ICL_LANGUAGE_CODE;
	}
} elseif (is_category()) {
	$typeOrID = get_queried_object();
} elseif (is_tax()) {
	$typeOrID = get_queried_object();
} else {
	$typeOrID = get_option('page_for_posts');
}

$section_counter = 1;

if (have_rows('blocks', $typeOrID)) {
	while (have_rows('blocks', $typeOrID)) {
		the_row();
		$id = null;
		$layout = get_row_layout();
		$modifiers = get_sub_field('modifiers');
		$section_attrs = array();
		$section_attrs['style'] = array();
        

		$classList = array(str_replace('_', '-', $layout));


		if (!empty($modifiers)) {

			$section_attrs['id'] = $modifiers['id'];
			$section_attrs['class'] = explode(' ', $modifiers['classes']);

			if ($modifiers['bg_color']) {
				$section_attrs['style']['background-color'] = $modifiers['bg_color'];
				$section_attrs['class'][] = 'section-bg';
			}
			if ($modifiers['text_color']) $section_attrs['style']['color'] = $modifiers['text_color'];

			$section_attrs['style'] = buildStyles($section_attrs['style']);


			$id = $modifiers['id'];
			$classes = explode(' ', $modifiers['classes']);
			$classList = array_merge($classList, $classes);
		}

		
		
		include locate_template('lib/use-case/' . $layout . '.php', false, false);
		$section_counter++;
	}
}