<?php
/*
女性一覧ページ
*/
?>
<?php get_header('woman'); ?>

<div class="page-wrap womancont link-wrap">

<?php
$args = array(
        'post_type' => 'woman',
        'post_status' => 'private',
        'p' => 2658,
);
$set_query = new WP_Query( $args );
?>
<?php if ( $set_query->have_posts() ): ?>
        <?php while ( $set_query->have_posts() ) : $set_query->the_post(); ?>

<?php remove_filter('the_content', 'wpautop');

remove_filter('the_content','brBrbr');

the_content(); ?>

        <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
    <?php get_template_part('includes/sns-woman'); ?>

    <section class="linkArea">
        <?php get_template_part('includes/link-woman'); ?>
        <?php get_template_part('includes/banner'); ?>
    </section>
  </div>


<?php get_footer('woman'); ?>
