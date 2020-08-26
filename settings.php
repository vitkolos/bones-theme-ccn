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
				'main-nav' => 3,
			),
			'fr' => array(
				'main-nav' => 4,
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

		public $colors = array(
			'Primary' => '#ffcb23',
			'Contrast' => 'rgba(0, 0, 0, .9)',
			// 'Primary' => '#70543D',
			// 'Contrast' => 'rgba(255, 255, 255, .9)',
		);

		public $gradients = array(
			// 'Light' => 'linear-gradient(90deg, rgba(0,183,255,1) 0%, rgba(4,89,170,1) 100%)',
			// 'Dark' => 'linear-gradient(90deg, rgba(4,89,170,1) 0%, rgba(0,33,64,1) 100%)',
		);

	}
}
