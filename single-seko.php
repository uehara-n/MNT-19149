<?php get_header(); ?>


<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div id="contents_wrap">

<div class="main_bg_box2 pt5">
<div class="inner">


<section id="seko">
<h3><img src="/wp/wp-content/themes/shinchiku/page_image/seko/seko_tit.png" alt="施工事例" /></h3>
<div class="inner">
<h4><?php the_title(); ?></h4>


<!-- ==========▼▼▼スライドショー本体▼▼▼========== -->
<div class="seko-img">

<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img01', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img01',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img02', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img02',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img03', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img03',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img04', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img04',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img05', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img05',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img06', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img06',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img07', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img07',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img08', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img08',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img09', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img09',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img10', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img10',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img11', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img11',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img12', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img12',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img13', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img13',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img14', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img14',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img15', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img15',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img16', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img16',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img17', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img17',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img18', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img18',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img19', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img19',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img20', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img20',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img21', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img21',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img22', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img22',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img23', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img23',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img24', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img24',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img25', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img25',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img26', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img26',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img27', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img27',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img28', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img28',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<!-- //========== -->


<!-- ========== -->
<?php endif;?>
<?php $ccc = get_post_meta($post->ID, 'seko_img29', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img29',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img30', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img30',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->

</div>
<!-- ==========//▲▲▲スライドショー本体▲▲▲========== -->



<!-- ==========▼▼▼スライドショーナビ▼▼▼========== -->
<div class="seko-img-nav">
<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img01', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img01',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img02', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img02',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img03', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img03',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img04', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img04',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img05', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img05',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img06', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img06',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img07', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img07',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img08', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img08',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img09', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img09',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img10', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img10',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img11', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img11',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img12', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img12',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img13', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img13',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img14', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img14',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img15', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img15',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img16', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img16',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img17', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img17',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img18', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img18',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img19', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img19',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img20', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img20',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img21', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img21',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img22', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img22',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->

<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img23', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img23',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img24', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img24',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img25', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img25',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img26', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img26',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img27', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img27',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img28', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img28',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<!-- //========== -->


<!-- ========== -->
<?php endif;?>
<?php $ccc = get_post_meta($post->ID, 'seko_img29', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img29',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->


<!-- ========== -->
<?php $ccc = get_post_meta($post->ID, 'seko_img30', true);?>
<?php if(empty($ccc)):?>
<?php else:?>
<div>
<?php printf(
	'%s',
	gr_get_image('seko_img30',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
</div>
<?php endif;?>
<!-- //========== -->
</div>
<!-- ==========//▲▲▲スライドショーナビ▲▲▲========== -->

<div id="m_d">
<div id="model">


<?php if ( is_object_in_term($post->ID, 'seko_cat','') ): ?>
<?php
$terms = get_the_terms($post->ID,'seko_cat');
foreach($terms as $term1) :
echo '<a href="https://www.sanan-home.com/lineup/'.$term1->slug.'">' ;
if ($term1 !== end($terms)) {
}
endforeach;
?>
<?php endif; ?>
    
   
    
<?php if ( is_object_in_term($post->ID, 'seko_cat','jupiter') ): ?>    
<img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/lineup_01.jpg" width="200" height="200" alt="ジュピターキューブ">

<?php elseif ( is_object_in_term($post->ID, 'seko_cat','symphony') ): ?>    
<img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/lineup_02.jpg" width="200" height="200" alt="シンフォニー">

<?php elseif ( is_object_in_term($post->ID, 'seko_cat','just') ): ?>    
<img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/lineup_03.jpg" width="200" height="200" alt="ジャスト">

<?php elseif ( is_object_in_term($post->ID, 'seko_cat','fc003') ): ?>    
<img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/lineup_04.jpg" width="200" height="200" alt="FC003">

<?php elseif ( is_object_in_term($post->ID, 'seko_cat','hiraya') ): ?>    
<img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/lineup_05.jpg" width="200" height="200" alt="HIRAYA">
    
<?php else: ?>

    <?php printf(
	'%s',
	gr_get_image('seko_img01',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>
    
<?php endif; ?>  

    
</a>
</div>
<div id="data">
<h5>お客様情報</h5>
<p><?php echo post_custom( 'seko_name' ); ?>邸</p>
<p>場　　所：<?php echo post_custom( 'seko_place' ); ?></p>
<p>延床面積：<?php echo post_custom( 'seko_menseki' ); ?></p>
<p>家族構成：<?php echo post_custom( 'seko_family' ); ?></p>
</p></div>
</p></div>
</p></div>
</section>


<!-- ページネーション -->
<div class="clearfix">
<div id="single_navi">
<div class="post_previous">
<?php previous_post_link('%link','<< 前の施工事例へ',false) ?>
</div>
    
<div class="archive_link">
<?php 
    $post_type = get_post_type();   
?>
    <a href="/<?php echo $post_type; ?>">一覧に戻る</a>    
</div>  
    
<div class="post_next">
<?php next_post_link('%link','次の施工事例へ >>',false) ?>
</div>
</div>
</div>
<!-- //ページネーション -->

<h2 class="icon_camera"><img src="https://www.sanan-home.com/wp/wp-content/themes/shinchiku/img/common/icon_camera.png">施工事例<span>―弊社でお手伝いさせていただいた施工実績をご覧いただけます！</span></h2>
<section>
<div id="sekou_list" class="clearfix">

<ul class="slider multiple-item sp_sekou_list">
<?php
  // ページ数
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  // カスタム投稿タイプ「施工事例」
  query_posts( array(
    'post_type' => 'seko',
    'posts_per_page' => 3,
    'paged' => $paged,
    )
  );
?>
<?php if (have_posts()) :while (have_posts()) : the_post(); ?>

<li>
<a href="<?php echo get_permalink(); ?>" class="go_sekou_single">
	<div class="pict">

<?php printf(
	'%s',
	gr_get_image('seko_img01',
		array(
			'width' => 500,
			'alt' => get_the_title(),
		      )
		     )
	     );
?>

</div>
	<div class="inner">
	<h3><?php echo post_custom( 'seko_name' ); ?>邸</h3>
	<p><?php the_title(); ?></p>
	<div class="go_sekou_single"><?php echo post_custom( 'seko_place' ); ?><?php echo post_custom( 'seko_name' ); ?>邸　<span>▲</span></div>
	</div>
	</a>
</li>

<?php endwhile; ?>
<?php else : ?>
<p>ただいま準備中です。</p>
<?php endif; ?>

<?php wp_reset_query(); ?>
</ul>
</div>
</section>


</div><!-- //end .main_bg_box .inner -->
</div><!-- //end .main_bg_box -->

<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

<!-- ==========バナーその1========== -->
<?php banner_one(); ?>
<!-- ==========//end バナーその1========== -->

<!-- ==========商品ラインナップ========== -->
<?php lineup_banner(); ?>
<!-- ==========//end 商品ラインナップ========== -->

<!-- ==========回遊バナー========== -->
<?php kaiyu_banner(); ?>
<!-- ==========//end 回遊バナー========== -->

<!-- ==========PC版問い合わせバナー========== -->
<?php if(!wp_is_mobile()): ?>
<?php pc_contact_banner(); ?>
<?php endif; ?>
<!-- ==========//end PC版問い合わせバナー========== -->

</div><!-- //end #contents_wrap -->

<?php get_footer(); ?>