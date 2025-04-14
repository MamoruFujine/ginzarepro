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