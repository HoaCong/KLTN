<?php get_header(); ?>
<div id="content">
	<div class="container">
		<?php get_template_part('slider'); ?>
	</div>
	<div class="product-box">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 order-lg-0 order-1">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 order-lg-1 order-0">
					<div class="product-section spacing-bottom">
						<!---category--->
						<div class="row">
							<?php
							$args = array(
								'type'      => 'product',
								'child_of'  => 0,
								'parent'    => 0,
								'hide_empty' => 0,
								'taxonomy' => 'product_cat',
								'number' => 3
							);
							$categories = get_categories($args);
							foreach ($categories as $category) { ?>
								<div class="col-12 col-sm-4">
									<div class="category_row text-center">
										<h2><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></h2>
										<a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>">
											<?php
											global $wp_query;
											$cat = $wp_query->get_queried_object();
											$thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
											$image = wp_get_attachment_url($thumbnail_id);
											if ($image) {
												echo '<img class="r-img text-center" src="' . $image . '" title="' . $category->name . '" />';
											}
											?>
										</a>
										<h4>TOTAL</h4>
										<label><?php echo $category->count; ?> PRODUCTS</label>
										<div class="list_cat">
											<img src="<?php bloginfo('stylesheet_directory') ?>/images/list-icon.png" title="list" />
											<ul class="child_cat">
												<?php
												$id = $category->term_id;
												$args = array(
													'type'      => 'product',
													'child_of'  => 0,
													'parent'    => $id,
													'hide_empty' => 0,
													'taxonomy' => 'product_cat',
													'number' => 5

												);
												$categories = get_categories($args);
												foreach ($categories as $category) { ?>
													<li>
														<a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a>
													</li>
												<?php } ?>
											</ul>
										</div>

									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="product-section">
						<h2 class="title-product">
							<a href="#" class="title">Sản phẩm nổi bật</a>
							<div class="bar-menu"><i class="fa fa-bars"></i></div>
							<div class="list-child">
								<ul>
									<?php
									$args = array(
										'type'      => 'product',
										'child_of'  => 0,
										'parent'    => 0,
										'hide_empty' => 0,
										'taxonomy' => 'product_cat',
										'number' => 5
									);
									$categories = get_categories($args);
									foreach ($categories as $category) { ?>
										<li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<div class="clear"></div>
						</h2>
						<div class="content-product-box">
							<div class="row">
								<?php
								$tax_query[] = array(
									'taxonomy' => 'product_visibility',
									'field'    => 'name',
									'terms'    => 'featured',
									'operator' => 'IN',
								);
								?>
								<?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query;
								$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<?php get_template_part('content/items_product'); ?>
									</div>
								<?php endwhile;
								wp_reset_postdata(); ?>

								<style>
									#content .item-product .thumb img {
										height: 200px;
										object-fit: contain;
									}

									#content .item-product .info-product .price del * {
										color: #2d2d2d;
										text-decoration: line-through;
									}
								</style>
							</div>
						</div>
					</div>
					<a class="sale-banner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sale_nu.jpg" alt=""></a>
					<br>
					<br>
					<div class="product-section">
						<h2 class="title-product">
							<?php $cat = get_term_by('id', 16, 'product_cat'); ?>
							<a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="title"><?php echo $cat->name; ?></a>
							<div class="bar-menu"><i class="fa fa-bars"></i></div>
							<div class="list-child">
								<ul>
									<?php
									$args = array(
										'type'      => 'product',
										'child_of'  => 0,

										'hide_empty' => 0,
										'taxonomy' => 'product_cat',
										'number' => 5,
										'parent' => $cat->term_id
									);
									$categories = get_categories($args);
									foreach ($categories as $category) { ?>
										<li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<div class="clear"></div>
						</h2>
						<div class="content-product-box">
							<div class="row">
								<?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query;
								$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<?php get_template_part('content/items_product'); ?>
									</div>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
					<a class="sale-banner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sale_man.jpg" alt=""></a>
					<br>
					<br>
					<div class="product-section">
						<h2 class="title-product">
							<?php $cat = get_term_by('id', 15, 'product_cat'); ?>
							<a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="title"><?php echo $cat->name; ?></a>
							<div class="bar-menu"><i class="fa fa-bars"></i></div>
							<div class="list-child">
								<ul>
									<?php
									$args = array(
										'type'      => 'product',
										'child_of'  => 0,

										'hide_empty' => 0,
										'taxonomy' => 'product_cat',
										'number' => 5,
										'parent' => $cat->term_id
									);
									$categories = get_categories($args);
									foreach ($categories as $category) { ?>
										<li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<div class="clear"></div>
						</h2>
						<div class="content-product-box">
							<div class="row">
								<?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query;
								$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<?php get_template_part('content/items_product'); ?>
									</div>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
					<a class="sale-banner" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/sale_kid.jpg" alt=""></a>
					<br>
					<br>
					<div class="product-section">
						<h2 class="title-product">
							<?php $cat = get_term_by('id', 17, 'product_cat'); ?>
							<a href="<?php echo get_term_link($cat->slug, 'product_cat'); ?>" class="title"><?php echo $cat->name; ?></a>
							<div class="bar-menu"><i class="fa fa-bars"></i></div>
							<div class="list-child">
								<ul>
									<?php
									$args = array(
										'type'      => 'product',
										'child_of'  => 0,

										'hide_empty' => 0,
										'taxonomy' => 'product_cat',
										'number' => 5,
										'parent' => $cat->term_id
									);
									$categories = get_categories($args);
									foreach ($categories as $category) { ?>
										<li><a href="<?php echo get_term_link($category->slug, 'product_cat'); ?>"><?php echo $category->name; ?></a></li>
									<?php } ?>
								</ul>
							</div>
							<div class="clear"></div>
						</h2>
						<div class="content-product-box">
							<div class="row">
								<?php $args = array('post_type' => 'product', 'posts_per_page' => 8, 'ignore_sticky_posts' => 1, 'product_cat' => $cat->slug); ?>
								<?php $getposts = new WP_query($args); ?>
								<?php global $wp_query;
								$wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>


									<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
										<?php get_template_part('content/items_product'); ?>
									</div>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>