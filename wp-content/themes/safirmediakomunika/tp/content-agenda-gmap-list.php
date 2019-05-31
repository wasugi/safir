<?php 
$tours = get_posts( array(
   'post_type' => 'agenda', 
   'posts_per_page' => -1
));

if( !empty($tours) ): ?>


<div id="map" class="acf-map">

  <?php foreach($tours as $tour): ?>
    <?php
		if ( has_post_thumbnail() ) {
		$thumbImg = wp_get_attachment_image_src( get_post_thumbnail_id($tour->ID), 'thumbnail');
		$thumbImgUrl = $thumbImg['0'];
		}
		$location = get_field('gmap',$tour->ID);
		$title = get_the_title( $tour->ID );
     if( !empty($location) ): ?>

     <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
		<img src="<?php echo $thumbImgUrl; ?>">
		<h4>
		<a href="<?php the_permalink(); ?>" rel="bookmark"> <?php echo $title; ?></a></h4> <!-- Output the title -->
        <p class="address"><?php echo $location['address']; ?></p> <!-- Output the address -->
       
	 
	 </div>

    <?php endif; ?>
  <?php endforeach; ?> 

</div> 

<?php endif; ?>