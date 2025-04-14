<?php
/*
女性詳細ページ
*/
?>
<?php get_header('woman'); ?>

 <div class="page-wrap">
      <section class="lowerHeader">
          <ul class="lowerHeader__breadcrumbs">
              <li ><a class="lowerHeader__breadcrumbs__home" href="/woman/"><img src="/wp-content/themes/ginzarepro_0.1/img/breadcrumbs__home.png" alt="銀座リプロ外科 HOME"/></a></li>
              <!--<li><a class="lowerHeader__breadcrumbs__link" href="/woman/">女性向け一覧</a></li>-->
              <li class="lowerHeader__breadcrumbs__current"><?php the_title(); ?></li></ul>
        <!--<?php breadcrumb(); ?>-->

<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php remove_filter('the_content', 'wpautop');

remove_filter('the_content','brBrbr');

the_content(); ?>
<?php endwhile;endif; ?>

      <section class="contents">
        <?php get_template_part('includes/sns-woman'); ?>
        <article class="contents__article">
        <?php get_template_part('includes/link-woman'); ?>
        <?php get_template_part('includes/banner'); ?>
        </article>
      </section>
    </div>

<?php get_footer('woman'); ?>
