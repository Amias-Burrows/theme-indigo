		<footer>
			<a class='socialtree' href='https://socialtree.indigobay.uk'>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><title>Visit Our SocialTree</title><path d="M384,336a63.78,63.78,0,0,0-46.12,19.7l-148-83.27a63.85,63.85,0,0,0,0-32.86l148-83.27a63.8,63.8,0,1,0-15.73-27.87l-148,83.27a64,64,0,1,0,0,88.6l148,83.27A64,64,0,1,0,384,336Z"/></svg>
			</a>
			<?php 
			wp_nav_menu(
				array(
					'menu' => 'social',
					'menu_class' => 'socials',
					'container' => 'ul',
					'theme_location' => 'social'
				)
			);
			?>
			<div class='copyright'>
			<span><?php echo get_theme_mod('indigo_footer_copy'); ?></span>
			</div>
		</footer>
	</body>
</html>
