<?php
$speaks = SCF::get('speaks');
if ($speaks) {
 ?>
<!-- begin speaks -->
<section id="speaks" class="speaks section">
	<div class="container_center">
		<div class="speaks__list">
			<div class="speaks__item">
				<h2 class="section__title"><?php echo SCF::get( 'speaks__title' ); ?></h2>
			</div>
			<?php
				$speaks = SCF::get('speaks');

				foreach ($speaks as $item) {
					$image = $item['speaks__img'];
					$text = $item['speaks__text'];
					?>
					<div class="speaks__item">
					<?php
					if ($image) {
						?>
						<div class="speaks__img">
							<?php echo wp_get_attachment_image($item['speaks__img'], 'full'); ?>
						</div>

						<?php
					}
					if ($text !== '') {
						?>
						<div class="speaks__text">
							<?php echo $text; ?>
						</div>
						<?php
					}
					?></div><?php
				};
			?>
			<div class="speaks__item">
				<a href="<?php echo SCF::get( 'speaks__btn_link' ); ?>" class="btn btn_round btn_border"><?php echo SCF::get( 'speaks__btn' ); ?></a>
			</div>
		</div>
	</div>
</section>
<!-- end speaks -->
<?php
}
