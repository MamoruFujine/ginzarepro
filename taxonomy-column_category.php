<?php 
$ex_tax = 'column_category';
$ex_term = 'lva';
$ex_term_id = get_term_by( 'slug', $ex_term, $ex_tax )->term_id;
$ex_term_child_id = get_term_children( $ex_term_id , $ex_tax );
$disp_lva = 0;
if( is_tax('column_category','lva') || has_term( array($ex_term_child_id,$ex_term_id), $ex_tax ) ){
    $disp_lva = 1;
}
/*
if(has_term( $ex_term, $ex_tax )){
    $disp = 1;
}
*/
if($disp_lva){
    get_header('woman');
}else{
    get_header();
}
?>

<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">COLUMN</span>
                <span class="lowerHeader__title--jp">基礎知識 <br class="sp"><?php single_term_title(); ?>について</span>
            </h1>

        </div>
    </section>



    <section class="contents--lower">

        <!-- 横並び -->
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

        .footer {
            margin: 0px;
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

            .tho:not(iconv) {}
        }
        </style>
        <?php
        function column_excerpt_more($more)
        {
            global $post;
            return;
        }
        add_filter('excerpt_more', 'column_excerpt_more');
        ?>
        <div class="wrap">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="item">
                <div class="contents--lower__heading">
                    <h2 class="contents--lower__heading--text">
                        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
                <ul class="contents--lower__category">
                    <?php
                            $terms = get_the_terms($post->ID, 'column_category');
                            foreach ($terms as $term) {
                                echo '<li><a href="' . get_term_link($term->slug, 'column_category') . '">' . $term->name . '</a></li>';
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

            <?php endwhile;
            endif; ?>
        </div>

        <?php wp_pagenavi(); ?>

        
        <?php 
        if( $disp_lva ){
            get_template_part('includes/sns-woman');
        }
        ?>
        
        <?php 
if( $disp_lva ){
    get_footer('woman');
}else{
    get_footer();
}
?>