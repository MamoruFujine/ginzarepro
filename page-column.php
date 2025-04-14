<?php get_header(); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">COLUMN</span>
                <span class="lowerHeader__title--jp">基礎知識</span>
            </h1>

        </div>
    </section>
    <section class="contents--lower">
        <div class="column_post_list">
            <?php
            function column_excerpt_more($more)
            {
                global $post;
                return;
            }
            add_filter('excerpt_more', 'column_excerpt_more');
            ?>
            <div class="wrap flex-box">
                <?php
                //$paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    //'paged' => $paged,
                );
                $myposts = new WP_Query($args);
                if ($myposts->have_posts()) : while ($myposts->have_posts()) : $myposts->the_post();
                ?>
                        <div class="item">
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="link_box">
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="contents--lower__thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="content__box">
                                    <ul class="contents--lower__category">
                                        <?php
                                        $terms = get_the_terms($post->ID, 'column_category');
                                        if ($terms) {
                                            foreach ($terms as $term) {
                                                //echo '<li><a href="' . get_term_link($term->slug, 'column_category') . '">' . $term->name . '</a></li>';
                                                echo '<li><span>' . $term->name . '</span></li>';
                                            }
                                        }
                                        ?>
                                    </ul>
                                    <div class="contents--lower__heading">
                                        <h2 class="contents--lower__heading--text"><?php the_title(); ?></h2>
                                    </div>
                                    <article class="contents__article">
                                        <div class="contents__article__post">
                                            <div class="contents__text">
                                                <p><?php echo mb_strimwidth(get_the_excerpt(), 0, 80, "…", "UTF-8"); ?></p>
                                                <!-- <a class="contents__item__permalink" href="<?php echo esc_url(get_permalink()); ?>">続きを読む</a> -->
                                            </div>
                                        </div>
                                    </article>
                                </div><!-- /.content__box -->
                            </a>
                        </div><!-- /.item -->
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>
            </div>

            <?php
            $categories = get_terms('column_category', array('include' => array(9, 10, 13)));
            foreach ($categories as $value) :
            ?>
                <h3 class="contents__heading"><span class="contents__heading--text"><?php echo $value->name; ?></span></h3>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    //'meta_key' => 'views', //閲覧数を取得
                    //'orderby' => 'meta_value_num', //取得した閲覧数の順番に並べる
                    'meta_key' => 'views', //閲覧数を取得
                    'orderby' => 'meta_value_num', //閲覧数でソート
                    'order' => 'DESC',
                    'tax_query' => array( // タクソノミーパラメーターを使用
                        array(
                            'taxonomy' => 'column_category', // タームを取得タクソノミーを指定
                            'field' => 'term_id', // スラッグに一致するタームを返す
                            'terms' => $value->term_id // タームの配列を指定
                        )
                    )
                );
                $termposts = new WP_Query($args);
                if ($termposts->have_posts()) : ?>

                    <div class="wrap flex-box">
                        <?php while ($termposts->have_posts()) : $termposts->the_post();
                        ?>
                            <div class="item">
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="link_box">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div class="contents--lower__thumbnail">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="content__box">
                                        <ul class="contents--lower__category">
                                            <?php
                                            $terms = get_the_terms($post->ID, 'column_category');
                                            if ($terms) {
                                                foreach ($terms as $term) {
                                                    //echo '<li><a href="' . get_term_link($term->slug, 'column_category') . '">' . $term->name . '</a></li>';
                                                    echo '<li><span>' . $term->name . '</span></li>';
                                                }
                                            }
                                            ?>
                                        </ul>
                                        <div class="contents--lower__heading">
                                            <h2 class="contents--lower__heading--text"><?php the_title(); ?></h2>
                                        </div>
                                        <article class="contents__article">
                                            <div class="contents__article__post">
                                                <div class="contents__text">
                                                    <p><?php echo mb_strimwidth(get_the_excerpt(), 0, 80, "…", "UTF-8"); ?></p>
                                                    <!-- <a class="contents__item__permalink" href="<?php echo esc_url(get_permalink()); ?>">続きを読む</a> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div><!-- /.content__box -->
                                </a>
                            </div><!-- /.item -->
                        <?php
                        endwhile; ?>
                    </div>
                <?php endif;
                wp_reset_postdata();
                ?>
                <a href="<?php echo get_category_link($value->term_id); ?>" class="contents__item__permalink">もっと見る</a>
            <?php endforeach; ?>
        </div>
        <!-- <?php
                if (function_exists('wp_pagenavi')) {
                    // サブクエリを引数で渡してあげる
                    echo '<div class="page-nav">';
                    wp_pagenavi(array('query' => $myposts));
                    echo '</div>';
                }
                ?> -->
</div><!-- /.column_post_list -->
</section>
</div>
<?php get_footer(); ?>
