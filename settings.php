<?php
/**
 * Třída s proměnnými, které lze využít v helperech i jinde
 * Počítá se s přidáváním dalších proměnných uživatelem
 *
 * @author Vladimír Smitka, Lynt.cz
 *
 */
if (!class_exists('NasWP_Settings')) {
	class NasWP_Settings
	{

		public $languages = array(
			'en' => 'en_US',
			'fr' => 'fr_FR',
			'de' => 'de_DE',
		);

		public $menus = array(
			'en' => array(
				'main-nav' => 5,
			),
			'fr' => array(
				'main-nav' => 2,
			),
			'de' => array(
				'main-nav' => 2,
			),
		);

		public $sidebars = array(
			'sidebar1' => 'Sidebar 1',
		);

		public $mimes = array(
			'svg' => 'image/svg+xml'
		);


		// public $colors = array(
		// 	'Light' => '#EAF7FF',
		// 	'Blue Light' => '#96D8FF',
		// 	'Blue Dark' => '#0459AA',
		// 	'Dark' => '#002140',
		// 	'Blue Bright' => '#00B7FF',
		// );

		// public $gradients = array(
		// 	'Light' => 'linear-gradient(90deg, rgba(0,183,255,1) 0%, rgba(4,89,170,1) 100%)',
		// 	'Dark' => 'linear-gradient(90deg, rgba(4,89,170,1) 0%, rgba(0,33,64,1) 100%)',
		// );

	}
}
