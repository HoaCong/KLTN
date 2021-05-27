<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin liên hệ</h3>
					<div class="content-contact">
						<p>Website chuyên cung cấp các mẫu giày thời trang, phong cách</p>
						<p>
							<strong>Địa chỉ:</strong> 77 Nguyễn Huệ, Phú Nhuận, Thành phố Huế, Thừa Thiên Huế
						</p>
						<p>
							<strong>Email: </strong> leconghoa11a1@gmail.com
						</p>
						<p>
							<strong>Điện thoại: </strong> 0839117563
						</p>
						<p>
							<strong>Website: </strong> https://www.facebook.com/lecong.hoa.7/
						</p>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Thông tin khác</h3>
					<div class="content-list">
						<!-- lay menu -->
						<?php wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'container' => 'false',
								'menu_id' => 'footer-menu',
								'menu_class' => 'footer-menu'
							)
						);
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
				<div class="box-footer info-contact">
					<h3>Form liên hệ</h3>
					<div class="content-contact">
						<?php echo do_shortcode('[contact-form-7 id="137" title="form lien he widget"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<p>Copyright © 2021 HSHOP All Rights Reserved - Design by HoaLC-K41BCNTT</p>
	</div>
</footer>
</div>
<script src="<?php bloginfo('template_directory'); ?>/libs/jquery-3.4.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
</body>

<?php wp_footer(); ?>

</html>