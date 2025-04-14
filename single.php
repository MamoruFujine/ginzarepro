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
        <ul class="lowerHeader__breadcrumbs">
            <li><a class="lowerHeader__breadcrumbs__home" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/breadcrumbs__home.png" alt="銀座リプロ外科 HOME" /></a></li>
            <li><a class="lowerHeader__breadcrumbs__link" href="/column/">コラム</a></li>
            <li class="lowerHeader__breadcrumbs__current"><?php the_title(); ?></li>
        </ul>
        <div class="lowerHeader--wrap">
            <div class="lowerHeader__title">
                <span class="lowerHeader__title--en">COLUMN</span>
                <h1>
                    <span class="lowerHeader__title--jp"><?php the_title(); ?></span>
                </h1>
                <ul class="contents--lower__category contents--lower__category--single">
                    <?php
                    $terms = get_the_terms($post->ID, 'column_category');
                    if ($terms) {
                        foreach ($terms as $term) {
                            echo '<li><a href="' . get_term_link($term->slug, 'column_category') . '">' . $term->name . '</a></li>';
                        }
                    }
                    ?>
                </ul>
                <?php if (is_single('4755')) : ?>
                <p class="Header__description">女性不妊症については「<a href="column/female-infertility/">女性不妊症の原因とは？原因になる疾患について</a>」の記事でご紹介していますので、合わせてご覧ください。</p>
                <?php endif; ?>

                <?php if (is_single('4748')) : ?>
                <p class="Header__description">女性不妊症については「<a href="column/female-infertility/">女性不妊症の原因とは？原因になる疾患について</a>」の記事でご紹介していますので、合わせてご覧ください。</p>
                <?php endif; ?>

                <?php if (is_single('4765')) : ?>
                <p class="Header__description">女性不妊症については「<a href="column/female-infertility/">女性不妊症の原因とは？原因になる疾患について</a>」の記事でご紹介していますので、合わせてご覧ください。</p>
                <?php endif; ?>

                <?php if (is_single('4745')) : ?>
                <p class="Header__description">女性不妊症については「<a href="column/female-infertility/">女性不妊症の原因とは？原因になる疾患について</a>」の記事でご紹介していますので、合わせてご覧ください。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <section class="contents--lower">
    <div class="contents__article">

            <?php
            $supervision_display = get_field('supervision_display');

            if (!in_array('監修医師・執筆医師表示を表示させない', $supervision_display)) {

                $doct_pagebtm_title = get_field('doct_pagebtm_title', get_the_ID());
                $doct_pagebtm_link = get_field('doct_pagebtm_link', get_the_ID());
                $args = array(
                    //'doct_pagebtm_title' => $doct_pagebtm_title,
                    'doct_pagebtm_title' => 'このページの監修医師',
                    'doct_pagebtm_link' => $doct_pagebtm_link[0]
                );
                set_query_var('query', $args);
                /* ver未対応のためset_query_var使用。5.5以上になったらset_query_varからこちらへ変更
                get_template_part('includes/eat-woman', null, $args); 
                */
                get_template_part('includes/eat-woman');
            }
            ?>

    </div>
        
        <?php if ( is_object_in_term($post->ID, 'column_category','varicocele')): // 特定のコラムカテゴリーの場合のみリンクを表示 ?>
        <p class="fjk_thumbnail_top_link"><a href="https://ginzarepro.jp/sinryo/varicocele/" rel="noopener" target="_blank">精索静脈瘤に関して詳しくはこちらをご覧ください</a></p>
        <?php endif; ?>
        
        <div class="contents__thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <article class="contents__article">
            <div class="contents__article__post">
                <?php the_content(); ?>
            </div>

            <?php
                $featured_posts = get_field('related_ope',$post_id); //投稿ID
                //echo $featured_posts;
                if( $featured_posts ):
                $post_info = get_post( $featured_posts ); 
                $txt_01 = get_field('related_ope_txt');
                $image_01 = get_field('related_ope_image');
                if( $image_01 ) {
                    $image_01 = wp_get_attachment_image_src( $image_01 , 'large' );
                    $thumbnail_01 = $image_01[0];
                }
            ?>
              <h3 class="contents__heading">
                <span class="contents__heading--text">施術の紹介</span>
              </h3>
              <div class="doctor--staff introduce__box">
                <?php if($image_01): ?>
                <div class="doctor__img--staff">
                  <img src="<?php echo $thumbnail_01; ?>" alt="<?php echo $post_info->post_title; ?>">
                </div>
                <?php endif; ?>
                <div class="doctor__biography<?php if(empty($image_01)){ echo ' noimage'; } ?>">
                  <p class="doctor__biography--name"><?php echo $post_info->post_title; ?></p>
                  <?php if($txt_01): ?>
                  <p class="doctor__biography--comment">
                    <?php echo $txt_01; ?>
                  </p>
                  <?php endif; ?>
                  <a href="<?php echo get_permalink($featured_posts); ?>" class="contents__item__permalink">詳しくはこちら</a>
                </div>
              </div>
            <?php endif; ?>

            <div cl
            ss="link--column">
                <?php get_template_part('includes/link'); ?>
            </div>
            
            
            <?php
            $supervision_display = get_field('supervision_display');
			  if (!in_array('監修医師・執筆医師表示を表示させない', $supervision_display)) {

                echo '';
            }
            ?>
            
            
            
<?php
// ACFのカスタムフィールド「supervision_display」の値を取得
$supervision_display = get_field('supervision_display');

// 配列内に「監修医師・執筆医師表示を表示させない」が含まれていない場合に処理を実行
if (!in_array('監修医師・執筆医師表示を表示させない', $supervision_display)) {
    // 表示させない場合の処理（指定されたコードブロックを表示）
    $doct_pagebtm_title = get_field('doct_pagebtm_title', get_the_ID());
    $doct_pagebtm_link = get_field('doct_pagebtm_link', get_the_ID());
    $args = array(
        'doct_pagebtm_title' => $doct_pagebtm_title,
        'doct_pagebtm_link' => $doct_pagebtm_link[0]
    );
    set_query_var('query', $args);
    get_template_part('includes/profcard');
}
?>

            
            
            <?php /*
            
            <div class="profcard">
                <div>
                    <h3>この記事の執筆医師</h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/doctor__img--staff--nagao.jpg" alt="永尾光一（東邦大学泌尿器科教授 リプロダクションセンター長）">

                    <div class="pfcd">
                        <p class="prfname">永尾 光一 先生</p>
                        <p>東邦大学 医学部教授（泌尿器科学講座）<br>東邦大学医療センター大森病院 リプロダクションセンター長<br>東邦大学医療センター大森病院 尿路再建（泌尿器科・形成外科）センター長</p>
                    </div>

                    <p>昭和大学にて形成外科学を8年間専攻。その後、東邦大学で泌尿器科学を専攻し、形成外科・泌尿器科両方の診療科部長を経験する（2つの基本領域専門医を取得）。得意分野はマイクロサージャリーをはじめとする生殖医学領域の形成外科的手術。泌尿器科医の枠を超えた細やかな手術手技と丁寧な診察で、様々な悩みを抱える患者さんから高い信頼と評価を得ている。</p>
                    <div class="contact__btn">
                        <a class="contact__btn--submit" href="<?php echo esc_url(home_url('/about-koichi-nagao/')); ?>">先生のプロフィールについて詳しくはこちら</a>
                    </div>
                    <p class="kikan">所属医療機関</p>
                    <p class="kikanlink"><a href="https://www.omori.med.toho-u.ac.jp/" target="_blank">東邦大学医療センター 大森病院</a></p>
                </div>
            </div>
            
            */?>
            
            
            <a class="contents__item__permalink" href="/column/">一覧ページに戻る</a>
        </article>
        <div class="contents__article">
          <h3 class="contents__heading">
          <span class="contents__heading--text">診療・手術一覧</span>
          </h3>
          <?php get_template_part('includes/sinryo-menu'); //診療メニュー ?>
        </div>
    </section>

    <?php endwhile;
    else : ?>

    <?php endif; ?>
    <!-- <section class="contents"> -->
    <?php get_template_part('includes/recommend'); ?>
    <!-- </section> -->

    <?php 
    if( $disp_lva ){
        get_template_part('includes/sns-woman');
    }
    ?>
    <article class="contents__article">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
    </article>
</div>

<?php 
if( $disp_lva ){
    get_footer('woman');
}else{
    get_footer();
}
?>

<style>
.Header__description {
    font-size: 1.5rem;
    line-height: 2;
    color: #333;
    padding-top: 35px;
    padding-top: 30px;
}

.fjk_thumbnail_top_link {
	margin: 0 30px 25px;
	font-size: 1.4rem;
}
.fjk_thumbnail_top_link a {
	color: #777777;
	line-height: 1.4;
	text-decoration: underline;
}
@media screen and (min-width: 1025px){
	.fjk_thumbnail_top_link {
		margin: -70px 30px 35px;
		font-size: 2rem;
	}
}
@media screen and (min-width: 1335px){
	.fjk_thumbnail_top_link {
		max-width: calc(1200px - 140px);
		margin: -70px auto 35px;
	}
}
</style>