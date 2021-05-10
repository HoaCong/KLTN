<!DOCTYPE html>
<html lang="vi">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/main.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/child.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/responsive.css">

</head>

<body <?php body_class(); ?>>
	<div id="wallpaper">
		<header>
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<p>Hotline: 0839117563</p>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
							<div class="top-menu">
								<!-- lay menu -->
								<?php wp_nav_menu(
									array(
										'theme_location' => 'header-top',
										'container' => 'false',
										'menu_id' => 'header-top',
										'menu_class' => 'header-top'
									)
								);
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main-header">
				<div class="container">
					<div class="row">
						<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
							<div class="logo">
								<a href="<?php bloginfo('url'); ?>">
									<img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo1.png" alt="<?php bloginfo('name'); ?>">
									<label class="nameshop" for=""><?php bloginfo('name'); ?></label>
								</a>
								<h1><?php bloginfo('name'); ?></h1>
							</div>
						</div>
						<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
							<div class="form-seach-product">
								<form action="<?php bloginfo('url'); ?>/" method="GET" role="form" style="display: flex;">
									<input type="hidden" name="post_type" value="product">
									<div class="form-group list-cat">
										<?php $args = array(
											'show_option_all'    => '',
											'parent'    => 0,
											'show_option_none' 	 => __('Danh mục'),
											'option_none_value'  => '',
											'orderby'            => 'ID',
											'order'              => 'ASC',
											'show_count'         => 0,
											'hide_empty'         => 0,
											'child_of'           => 0,
											'include'            => '',
											'echo'               => 1,
											'selected'           => 0,
											'hierarchical'       => 1,
											'name'               => 'product_cat',
											'id'                 => 'product_cat',
											'class'              => 'form-control',
											'depth'              => 0,
											'tab_index'          => 0,
											'taxonomy'           => 'product_cat',
											'hide_if_empty'      => false,
											'value_field'	     => 'slug',
										); ?>
										<?php wp_dropdown_categories($args); ?>
									</div>
									<div class="input-seach">
										<input type="text" name="s" id="s" class="form-control" placeholder="Từ khóa">
										<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
									</div>

								</form>
							</div>
						</div>
						<?php global $woocommerce; ?>
						<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
							<a href="<?php bloginfo('url'); ?>/gio-hang" class="icon-cart">
								<div class="icon">
									<i class="fa fa-shopping-cart" aria-hidden="true"></i>
									<span><?php echo $woocommerce->cart->cart_contents_count;  ?></span>
								</div>
								<div class="info-cart">
									<p>Giỏ hàng</p>
									<span><?php echo $woocommerce->cart->get_cart_total(); ?></span>
								</div>
								<span class="clear"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="main-menu-header">
				<div class="container">
					<div id="nav-menu">
						<!-- lay menu -->
						<?php wp_nav_menu(
							array(
								'theme_location' => 'header-main',
								'container' => 'false',
								'menu_id' => 'header-main',
								'menu_class' => 'header-main'
							)
						);
						?>

						<div class="clear"></div>
					</div>
				</div>
			</div>
		</header>