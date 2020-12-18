<?php
add_action('woocommerce_product_thumbnails','add_product_thumbnail_carousel');
function add_product_thumbnail_carousel()
{
	global $post, $product, $woocommerce;
	$attachment_ids = $product->get_gallery_attachment_ids();
	if($attachment_ids):
		?>
		<div id="similar-product" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
		<?php 
		$i = 0;
		foreach($attachment_ids as $attachment_id):
			$image_link = wp_get_attachment_url($attachment_id);?>
			<div class="item <?php if($i == 0) echo 'active';?>">
			<a href=""><img src="<?php echo $image_link; ?>" alt=""></a>
			</div>
			<?php $i++; endforeach; ?>
		</div>
		</div>
	<?php endif; 
}