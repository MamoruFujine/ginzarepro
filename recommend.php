<style type="text/css">
.wrap {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.item {
    padding: 10px;
    width: 50%;
    background-color: #fff;
    border-bottom: solid 1px #f0f0ee;
}

.contents--lower__heading--text {
    font-size: 2.6rem;
}

@media not all and (min-width: 768px) {
    .item {
        width: 100%;
    }

    .item:not(:last-child) {
        margin-bottom: 30px;
    }

}
</style>
<?php
$post_terms = wp_get_object_terms($post->ID, 'column_category');
$terms_slug = array(); // 配列のセット
if ($post_terms && !is_wp_error($post_terms)) { // 値があるときに作動
    foreach ($post_terms as $value) { // 配列の作成
        $terms_slug[] = $value->slug; // タームのスラッグを配列に追加
    }
}
$id = get_the_ID();
$args = array(
    'posts_per_page' => 4,
    'post_type' => 'post',
    'tax_query' => array( // タクソノミーパラメーターを使用
        array(
            'taxonomy' => 'column_category', // タームを取得タクソノミーを指定
            'field' => 'slug', // スラッグに一致するタームを返す
            'terms' => $terms_slug // タームの配列を指定
        )
    ),
    'post__not_in' => array($id),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
<div class="recommend">
    <h2 class="recommend__ttl"><span class="contents__heading--text">この記事を見た人はこんな記事も見ています</span></h2>
    <div class="wrap">
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

        <div class="item">
            <div class="contents--lower__heading">
                <h2 class="contents--lower__heading--text">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                </h2>
            </div>
            <ul class="contents--lower__category">
                <?php
                        $terms = get_the_terms($post->ID, 'column_category');
                        if ($terms) {
                            foreach ($terms as $term) {
                                echo '<li><a href="' . get_term_link($term->slug, 'column_category') . '">' . $term->name . '</a></li>';
                            }
                        }
                        ?>
            </ul>
            <div class="contents--lower__thumbnail">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                </a>
            </div>
            <article class="contents__article">
                <div class="contents__article__post">
                    <div class="contents__text">
                        <p><?php echo mb_strimwidth(get_the_excerpt(), 0, 200, "…", "UTF-8"); ?></p>
                        <a class="contents__item__permalink" href="<?php echo esc_url(get_permalink()); ?>">続きを読む</a>
                    </div>
                </div>
            </article>
        </div>
        <?php endwhile; ?>


    </div>
</div>
<?php
endif;
wp_reset_postdata();
?>