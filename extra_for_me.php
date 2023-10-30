	<title><?php if (is_single() || is_page()) { wp_title('',true); } elseif(is_front_page()) { bloginfo('description'); } else { bloginfo('description'); } ?> | <?php bloginfo('name');?></title> <!--for SEO optimization dynamic title-->

	add_image_size(); <!-- forimage size php function. this not useful for responsive site,so it is minorly used. css diye image size deya uchit -->