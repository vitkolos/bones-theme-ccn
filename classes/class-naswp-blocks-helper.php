<?php
/**
 * Načte do Gutnebergu styly ohraničující skupiny a sloupce pro lepší orientaci
 *
 * @author Vladimír Smitka, Lynt.cz
 *
 */
if (!class_exists('NasWP_Blocks_Helper')) {

	class NasWP_Blocks_Helper
	{

		public function init()
		{
			add_action('enqueue_block_editor_assets', array($this, 'load_css'));
		}

		public function load_css(){
			wp_enqueue_style('naswp-editor-styles', get_stylesheet_directory_uri() . "/library/css-lib/gutenberg-blocks-helper.css", array(), '1.0', 'screen');
		}
	}
}
