<!DOCTYPE html>

<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<svg class='svg-1' viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M19.3,-33.3C23.6,-30.9,24.9,-23,26.9,-16.5C28.9,-10.1,31.6,-5,32,0.2C32.4,5.5,30.6,11.1,27.6,15.7C24.5,20.3,20.2,23.9,15.4,22.4C10.6,20.8,5.3,14.1,-0.2,14.3C-5.6,14.6,-11.3,22,-14.5,22.6C-17.7,23.3,-18.4,17.2,-19.3,12.3C-20.2,7.4,-21.3,3.7,-18.2,1.8C-15.1,-0.1,-7.8,-0.2,-5.6,-2.9C-3.4,-5.5,-6.3,-10.8,-6.2,-15.7C-6.2,-20.6,-3.1,-25.3,2.2,-29.1C7.5,-32.9,14.9,-35.8,19.3,-33.3Z" width="100%" height="100%" transform="translate(50 50)" style="transition: all 0.3s ease 0s;" stroke-width="1" ></path></svg>
			<svg class='svg-2' viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg" version="1.1"><path d="M17.1,-25.3C22.4,-23.1,27.2,-18.9,28.9,-13.6C30.7,-8.4,29.4,-2.2,28.5,4.1C27.6,10.4,27.1,16.7,24.4,22.8C21.7,29,16.8,34.9,11.6,33.9C6.3,33,0.6,25.2,-5.4,21.8C-11.4,18.5,-17.7,19.6,-25.1,17.9C-32.5,16.2,-41,11.7,-44,5C-47,-1.7,-44.5,-10.4,-38.2,-14.6C-31.9,-18.8,-21.8,-18.5,-14.8,-19.9C-7.8,-21.2,-3.9,-24.4,1,-25.9C5.9,-27.5,11.7,-27.4,17.1,-25.3Z" width="100%" height="100%" transform="translate(50 50)" style="transition: all 0.3s ease 0s;" stroke-width="0"></path></svg>
			<div class='content'>
				<h1><?php get_bloginfo('name'); ?></h1>
				<iframe src='<?php echo get_theme_mod('iframe_link'); ?>' frameborder='0'></iframe>
			</div>
		</header>
