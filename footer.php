			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
						'container' => 'div',							// enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
						'container_class' => 'footer-links cf',			// class of container (should you choose to use it)
						'menu' => __( 'Footer Links', 'bonestheme' ),	// nav name
						'menu_class' => 'nav footer-nav cf',			// adding custom nav class
						'theme_location' => 'footer-links',				// where it's located in the theme
						'before' => '',									// before the menu
						'after' => '',									// after the menu
						'link_before' => '',							// before each link
						'link_after' => '',								// after each link
						'depth' => 0,									// limit the depth of the nav
						'fallback_cb' => 'bones_footer_links_fallback'	// fallback function
						)); ?>
					</nav>
					<div class="web-info">
						<?php
							$langs = array("cs"=>0,"en"=>1,"fr"=>2,"de"=>3);
            				$localeSubstr = substr(get_locale(), 0,2);
							$langIndex = isset($langs[$localeSubstr]) ? $langs[$localeSubstr] : 0;

							$description = get_bloginfo( 'description', 'display' );
							$descriptionArray = explode(" / ", $description);
							$descriptionTranslated = isset($descriptionArray[$langIndex]) ? $descriptionArray[$langIndex] : $descriptionArray;
							
							$stringArray = array("Webové stránky vytvořil", "This website was created by", "Les pages web ont été créées par", "Website erstellt von");
						?>
						<p><a href="/"><?php bloginfo( 'name' ); ?> – <?= $descriptionTranslated; ?></a></p>
						<p class="last-p"><?= $stringArray[$langIndex] ?> <a href="https://www.kolos.ga" target="_blank">Vít Kološ</a>.</p>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
