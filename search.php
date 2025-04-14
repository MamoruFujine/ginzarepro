<?php get_header(); ?>
    <div class="page-wrap">
      <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            <span class="lowerHeader__title--en">SEARCH</span>
            <p class="lowerHeader__title--jp">検索</p>
          </h1>
          <p class="lowerHeader__description"><?php the_search_query(); ?>の検索結果 : <?php echo $wp_query->found_posts; ?>件</p>
        </div>
      </section>
      <section class="contents--lower">
        <ul class="contents__list">

<?php $thisPageUrl = get_the_permalink(); ?>
 

<?php if(have_posts()) : ?>
    <?php while(have_posts()):the_post() ?>
          <li class="contents__item">
            <div class="contents--lower__heading">
              <h2 class="contents--lower__heading--text">
                <?php the_title(); ?>
              </h2>
            </div>
            <article class="contents__article">
              <div class="contents__article__post">
                <div class="contents__text">
                  <?php the_content(); ?>
                  <a
                    class="contents__item__permalink"
                    href="<?php the_permalink(); ?>"
                    >続きを読む</a
                  >
                </div>
              </div>
            </article>
          </li>
    <?php endwhile; ?>

<?php else: ?>
          <li class="contents__item">
            <article class="contents__article">
              <p class="contents__text">申し訳ございません。<br />該当する記事がございません。</p>
            </article>
          </li>
<?php endif; ?>
        </ul>
      </section>
      <section class="contents">
        <article class="contents__article">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
        </article>
      </section>
    </div>
<?php get_footer(); ?>
