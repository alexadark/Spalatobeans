<?php
$thumbnail = get_the_post_thumbnail_url();
if ($thumbnail){ ?>
<div class="tm-hero-area uk-cover-background uk-flex uk-flex-center uk-flex-middle"
     style="background-image: url(<?php echo $thumbnail;?>)">
	<?php if(!is_page()){
		beans_post_title();
	} ?>

</div>
<?php }