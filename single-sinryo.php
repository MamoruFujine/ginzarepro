<?php if (is_single('lva')) : ?>
<?php get_header('woman'); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <ul class="lowerHeader__breadcrumbs" style="
    background-color: #fff0f0;
">
            <li><a class="lowerHeader__breadcrumbs__home" href="https://ginzarepro.jp/woman/"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/breadcrumbs__home_pink.png" alt="銀座リプロ外科 HOME"></a></li>
            <li class="lowerHeader__breadcrumbs__current">リンパ浮腫の治療・手術（日帰りリンパ管静脈吻合術・LVA）</li>
        </ul>
        <div class="lowerHeader--wrap lva-top">
            <div class="lowerHeader__title">
                <div class="btn__wrap">
                    <span class="mainVis__h"><i>保険</i><i>適用</i></span>
                </div>
                <span class="lowerHeader__title--en">MEDICAL CONTENT</span>
                <h1>
                    <span class="lowerHeader__title--jp"><?php the_title(); ?></span>
                </h1>
            </div>
        </div>
    </section>
    <div class="top-txt">
        <p class="red">リンパ浮腫の治療・手術は<br class="sp">医療保険の給付対象です</p>
        <p>子宮がんや乳がん、卵巣がんなど、がんの治療後に起きる「リンパ浮腫」は手術で治療できます。<br>リンパ浮腫の治療・手術は医療保険の給付対象です。<br>お気軽にご相談ください。</p>
    </div>
    <?php /*<!--<p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;">子宮がんや乳がん、卵巣がんなど、がんの治療後に起きる「リンパ浮腫」は手術で治療できます。お気軽にご相談ください。</p>-->*/?>
    <?php /*<!-- <div class="lva_top_box_wrap">
        <div class="lva_top_box renew">
            <p class="att">腕や足に、このような症状はありませんか？</p>
            <ul>
                <li>皮膚がピリピリする</li>
                <li>違和感がある</li>
                <li>左右差がある</li>
            </ul>
            <p class="att">受診の対象</p>
            <ul>
                <li>婦人科がんでリンパ節廓清<span>※</span>や放射線治療を行った後のリンパ浮腫</li>
            </ul>
            <p class="att">受診の条件</p>
            <ul>
                <li>婦人科がんの手術から6ヶ月以上経ち、治療を終えた方</li>
                <li>リンパ節廓清でリンパ節転移がないと病理診断された方</li>
            </ul>
        </div>
        <p class="small">※手術の際にがんを取り除くだけでなく、がんの周辺にあるリンパ節を切除すること。</p>
    </div> -->*/?>
    <div class="lva_top_box_wrap">
        <div class="lva_top_box renew">
            <p class="att first">腕や足に、このような症状はありませんか？</p>
            <ul class="check-list">
                <li>皮膚がピリピリする</li>
                <li>違和感がある</li>
                <li>左右差がある</li>
            </ul>
            <p class="att middle">受診の対象</p>
            <ul>
                <li>婦人科がんでリンパ節廓清<span>※</span>や放射線治療を行った後のリンパ浮腫<p class="small">※手術の際にがんを取り除くだけでなく、がんの周辺にあるリンパ節を切除すること。</p></li>
            </ul>
            <p class="att last">受診の条件</p>
            <ul>
                <li>婦人科がんの手術から6ヶ月以上経ち、治療を終えた方</li>
                <li>リンパ節廓清でリンパ節転移がないと病理診断された方</li>
            </ul>
        </div>
    </div>
    <br>
    <!--
<p style="padding: 0px 70px 50px; font-size:25px; font-weight: bold; line-height: 1.8;">リンパ節廓清でリンパ節転移がないと病理診断されたらリンパ浮腫の早期診断と早期治療をお薦めいたします。</p>
  <p style="padding: 0px 70px 50px; font-size:25px; font-weight: bold; line-height: 1.8;">婦人科がんの治療を終えたらリンパ浮腫の早期発見と早期治療をお薦めいたします。</p>-->

    <section class="contents--lower">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="contents__article" id="varicocele">
            <div class="contents__img--center--href">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="contents__text">
                <?php the_content(); ?>
            </div>
            <article class="contents__article">
                <?php
                $doct_pagebtm_title = get_field('doct_pagebtm_title',get_the_ID());
                $doct_pagebtm_link = get_field('doct_pagebtm_link',get_the_ID());
                $args = array(
                    'doct_pagebtm_title' => $doct_pagebtm_title,
                    'doct_pagebtm_link' => $doct_pagebtm_link[0]
                );
                set_query_var('query', $args);
                /* ver未対応のためset_query_var使用。5.5以上になったらset_query_varからこちらへ変更
                get_template_part('includes/eat-woman',null,$args); 
                */
                get_template_part('includes/eat-woman'); 
                ?>
            </article>
        </article>

        <?php endwhile;
      else : ?>

        <?php endif; ?>
    </section>

    <?php get_template_part('includes/sns-woman'); ?>
    
    <!-- <section class="contents"> -->
        <?php 
        global $wp_query;
        $post_id = $wp_query->get_queried_object_id();
        $d_rs_post_list = get_field('rec_column_list', $post_id);
        //echo $post_id;
            //var_dump($d_rs_post_list);
            if(!empty($d_rs_post_list)):
            ?>
            <div class="recommend recommend_list">
                <h2 class="recommend__ttl"><span class="contents__heading--text">こんな記事も読まれています</span></h2>
                <div class="wrap">
                    <?php foreach( $d_rs_post_list as $post ):  ?>
            <?php get_template_part('includes/recommend_sinryo'); ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        wp_reset_query(); endif;
        ?>
        <!-- </section> -->

    <section class="contents">
        <article class="contents__article">
            <?php get_template_part('includes/link'); ?>
        </article>
    </section>
</div>
<?php get_footer('woman'); ?>

<?php elseif (is_single('lva-s')) : ?>
<?php get_header('woman'); ?>
<div class="page-wrap">

    <section class="lowerHeader">
        <ul class="lowerHeader__breadcrumbs" style="
    background-color: #fff0f0;
">
            <li><a class="lowerHeader__breadcrumbs__home" href="https://ginzarepro.jp/woman/"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/breadcrumbs__home_pink.png" alt="銀座リプロ外科 HOME"></a></li>
            <li class="lowerHeader__breadcrumbs__current">リンパ浮腫の治療・手術（日帰りリンパ管静脈吻合術・LVA）</li>
        </ul>
        <div class="lowerHeader--wrap">
            <div class="lowerHeader__title">
                <span class="lowerHeader__title--en">MEDICAL CONTENT</span>
                <h1>
                    <span class="lowerHeader__title--jp"><?php the_title(); ?></span>
                </h1>
            </div>
        </div>
    </section>

    <section class="contents--lower">
        <?php if (wp_is_mobile()) : ?>
        <?php else : ?>
        <p style="padding: 0px 70px 50px; font-size:25px; font-weight: bold; line-height: 1.8;">リンパ節廓清でリンパ節転移がないと病理診断されたらリンパ浮腫の早期診断と早期治療をお薦めいたします。</p>
        <?php endif; ?>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="contents__article" id="varicocele">
            <div class="contents__img--center--href">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="contents__text">
                <?php the_content(); ?>
            </div>
            <a class="contents__item__permalink" href="/sinryo/">一覧ページに戻る</a>
        </article>

        <?php endwhile;
      else : ?>

        <?php endif; ?>
        <section class="contents">
            <article class="contents__article">
                <div class="sns-area">
                    <?php get_template_part('sns'); ?>
                    <div class="twi-insta-wrap page">
                        <div class="twitter">
                            <a class="twitter-timeline" width="350px" height="450px" href="https://twitter.com/ginzarepro?ref_src=twsrc%5Etfw" data-tweet-limit="1">Tweets by ginzarepro</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="instagram">
                            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                        </div>
                    </div>
                </div>
            </article>
        </section>

    </section>

    <section class="contents">
        <article class="contents__article">
            <?php get_template_part('includes/link'); ?>
            <?php get_template_part('includes/banner'); ?>
        </article>
    </section>
</div>
<?php get_footer('woman'); ?>


<?php elseif (is_single('lva-cause')) : ?>
<?php get_header('woman'); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <ul class="lowerHeader__breadcrumbs" style="
    background-color: #fff0f0;
">
            <li><a class="lowerHeader__breadcrumbs__home" href="https://ginzarepro.jp/woman/"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/breadcrumbs__home_pink.png" alt="銀座リプロ外科 HOME"></a></li>
            <li class="lowerHeader__breadcrumbs__current">リンパ浮腫の治療・手術（日帰りリンパ管静脈吻合術・LVA）</li>
        </ul>
        <div class="lowerHeader--wrap">
            <div class="lowerHeader__title--en">
                <span>MEDICAL CONTENT</span>
                <h1 class="lowerHeader__title">
                    <span class="lowerHeader__title--jp"><?php the_title(); ?></span>
                </h1>
            </div>
        </div>
    </section>
    <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;">子宮がんや乳がん、卵巣がんなど、がんの治療後に起きる「リンパ浮腫」は手術で治療できます。お気軽にご相談ください。</p>
    <br>
    <p style="padding: 0px 70px 50px; font-size:25px; font-weight: bold; line-height: 1.8;">リンパ節廓清でリンパ節転移がないと病理診断されたらリンパ浮腫の早期診断と早期治療をお薦めいたします。</p>
    <section class="contents--lower">


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="contents__article" id="varicocele">
            <div class="contents__img--center--href">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <div class="contents__text">
                <?php the_content(); ?>
            </div>
            <article class="contents__article">
                <?php
                $doct_pagebtm_title = get_field('doct_pagebtm_title',get_the_ID());
                $doct_pagebtm_link = get_field('doct_pagebtm_link',get_the_ID());
                $args = array(
                    'doct_pagebtm_title' => $doct_pagebtm_title,
                    'doct_pagebtm_link' => $doct_pagebtm_link[0]
                );
                set_query_var('query', $args);
                /* ver未対応のためset_query_var使用。5.5以上になったらset_query_varからこちらへ変更
                get_template_part('includes/eat',null,$args); 
                */
                get_template_part('includes/eat');
                ?>
            </article>
        </article>

        <?php endwhile;
      else : ?>

        <?php endif; ?>
    </section>

</div>
<?php get_footer('woman'); ?>

<?php else : ?>
<?php if(is_single('lymph_drainage')): ?>
<?php get_header('woman'); ?>
<?php else: ?>
<?php get_header(); ?>
<?php endif; ?>
<?php 
$sinryo_slug = $post->post_name;
if(preg_match('/varicocele_test/',$sinryo_slug)){
    //$sinryo_slug = 'sblue';
}elseif(preg_match('/varicocele/',$sinryo_slug)){
    //$sinryo_slug = 'sblue';
}
if(!is_single(array('71','varicocele'))){
    $sinryo_slug_02 = ' add_sblue';
}
?>
<div class="page-wrap <?php echo 'sinryo-sblue sinryo-'.$sinryo_slug.$sinryo_slug_02; ?>">

    <section class="lowerHeader">
        <?php if (is_single(array(69, 944, 1939))) : ?>
        <ul class="lowerHeader__breadcrumbs">
            <li><a class="lowerHeader__breadcrumbs__home" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/breadcrumbs__home.png" alt="銀座リプロ外科 HOME" /></a></li>
            <li><a class="lowerHeader__breadcrumbs__link" href="/column/">コラム</a></li>
            <li class="lowerHeader__breadcrumbs__current"><?php the_title(); ?></li>
        </ul>
        <?php else : ?>
        <?php breadcrumb(); ?>
        <?php endif; ?>
        <div class="lowerHeader--wrap">
            <div class="lowerHeader__title">
                <span class="lowerHeader__title--en">MEDICAL CONTENT</span>
                <h1>
                    <span class="lowerHeader__title--jp">
                        <?php if (is_single('71')) : ?>
                        <?php echo $pageTitle = get_the_title("71") ?> <span class="headline" style="font-size: 2.0rem; line-height: none; font-weight: bold; letter-spacing: none; letter-spacing:normal">(Varicocele)</span>
                        <?php elseif (is_single('751')) : ?>
                        <?php echo $pageTitle = get_the_title("751") ?><span class="headline" style="font-size: 2.0rem; line-height: none; font-weight: bold; letter-spacing: none; letter-spacing:normal">(Vasectomy Reversal)</span>
                        <?php elseif (is_single('77')) : ?>
                        <?php $add_title = get_the_title("77");
                              $add_title = str_replace('ナガオメソッド', '<span class="txt_r1_2">ナガオメソッド</span>', $add_title); ?>
                        <?php echo $pageTitle = $add_title; ?><br><span class="headline" style="font-size: 2.0rem; line-height: none; font-weight: bold; letter-spacing: none; letter-spacing:normal">(One-day microsurgical low ligation varicocelectomy surgery)</span>
                        <?php elseif (is_single('951')) : ?>
                        <?php echo $pageTitle = "陰茎海綿体注射" ?>
                        <?php else : ?>
                        <?php the_title(); ?>
                        <?php endif; ?>
                    </span>
                </h1>
            </div>
            <?php /*
            <?php if (is_single('71')) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description"><strong>Click here for English page</strong><br>
                <a href="/sinryo/varicocele-en/">Varicocele</a><br>精索静脈瘤とは、精巣やその上の精索部（精管、血管、神経、リンパ管などを覆う3層構造の膜）に静脈瘤（じょうみゃくりゅう・静脈の拡張）が認められる症状のことを指します。一般男性の15%に認められ、男性不妊症患者の40%がその疑いであるとされています。ここでは、精索静脈瘤の原因や悪影響についてご紹介しています。また、手術の方法、予防法などについてもご紹介します。
            </p>
            <?php else : ?>
            <?php endif; ?>
            <?php else : ?>
            <?php endif; ?>*/?>

            <?php if (is_single(array('varicocele_','varicocele_test'))) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description"><a href="<?php echo esc_url(home_url('/')); ?>/sinryo/varicocele-en/" style="color:#4E87B7;"><strong>English page</strong></a>
            </p>
            <?php endif; ?>
            <?php endif; ?>

            <?php if (is_single('2695')) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description">Varicocele is a condition in which varicose veins (dilation of veins) are found in the testis and the sperm (three-layered membrane that covers the vas deferens, vascular nerves, nerves, and lymph vessels). It is found in 15% of general males and is suspected in 40% of male infertility patients. Here, we introduce the causes and adverse effects of varicocele. In addition, we will also introduce surgical methods and preventive methods.</p>
            <?php else : ?>
            <?php endif; ?>
            <?php else : ?>
            <?php endif; ?>

            <?php if (is_single('910')) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description">パイプカット（精管結紮術・精管切断術）とは、男性が行う避妊手術のことです。精管を結紮（結ぶ）または切断し、精子の通り道を塞ぐ避妊方法です。夫婦・パートナーとの間に子どもがいて、これ以上子どもは作らないと希望した方が行う手術で、パートナーとの話し合いが必要です。</p>
            <?php else : ?>
            <?php endif; ?>
            <?php else : ?>
            <?php endif; ?>

            <?php if (is_single('751')) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description"><strong>Click here for English page</strong><br>
                <a href="/sinryo/pipe-cut-reconstruction-en/">Vasectomy Reversal / Reconstruct (One-Day Microsurgical Vasectomy Reversal)</a>
            </p>
            <?php else : ?>
            <?php endif; ?>
            <?php else : ?>
            <?php endif; ?>

            <?php if (is_single('77')) : ?>
            <div class="lowerHeader__description">
            <?php if (wp_is_mobile()) : ?>
                <p><strong>Click here for English page</strong><br>
                <a href="/sinryo/nagao_method-en/">One-day microsurgical low ligation varicocelectomy surgery (Nagao method)</a></p>
                <dl class="dl_r1_2"><dt>出典</dt>
                <dd>1) 片桐由起子, 編著：患者さんからの質問に自信をもって答える 不妊治療Q＆A. 日本医事新報社, 2023, p52-58<br>
                2）堤 治, 監著：ステップと動画で学ぶ 山王病院の生殖医療第2版. 金原出版株式会社, 2024, p141-145</dd>
                </dl>
            <?php else : ?>
            <?php endif; ?>
            </div>
            <?php else : ?>
            <?php endif; ?>
        </div>

    </section>

    <?php /*<?php if (is_single('71')) : ?>
    <?php if (wp_is_mobile()) : ?>
    <?php else : ?>
    <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;"><strong>Click here for English page</strong><br>
        <a href="/sinryo/varicocele-en/" style="color: #b39d1a; text-decoration: underline; margin-bottom: 10px;">Varicocele</a><br>精索静脈瘤とは、精巣やその上の精索部（精管、血管、神経、リンパ管などを覆う3層構造の膜）に静脈瘤（じょうみゃくりゅう・静脈の拡張）が認められる症状のことを指します。一般男性の15%に認められ、男性不妊症患者の40%がその疑いであるとされています。ここでは、精索静脈瘤の原因や悪影響についてご紹介しています。また、手術の方法、予防法などについてもご紹介します。
    </p>
    <?php endif; ?>
    <?php else : ?>
    <?php endif; ?>*/?>
    <?php if (is_single(array('varicocele_','varicocele_test'))) : ?>
            <?php if (wp_is_mobile()) : ?>
            <p class="lowerHeader__description"><a href="<?php echo esc_url(home_url('/')); ?>/sinryo/varicocele-en/" style="color:#4E87B7;"><strong>English page</strong></a>
            </p>
            <?php endif; ?>
            <?php endif; ?>

    <?php if (is_single('2695')) : ?>
    <?php if (wp_is_mobile()) : ?>
    <?php else : ?>
    <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;">Varicocele is a condition in which varicose veins (dilation of veins) are found in the testis and the sperm (three-layered membrane that covers the vas deferens, vascular nerves, nerves, and lymph vessels). It is found in 15% of general males and is suspected in 40% of male infertility patients. Here, we introduce the causes and adverse effects of varicocele. In addition, we will also introduce surgical methods and preventive methods.</p>
    <?php endif; ?>
    <?php else : ?>
    <?php endif; ?>

    <?php if (is_single('910')) : ?>
    <?php if (wp_is_mobile()) : ?>
    <?php else : ?>
    <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;">パイプカット（精管結紮術・精管切断術）とは、男性が行う避妊手術のことです。精管を結紮（結ぶ）または切断し、精子の通り道を塞ぐ避妊方法です。夫婦・パートナーとの間に子どもがいて、これ以上子どもは作らないと希望した方が行う手術で、パートナーとの話し合いが必要です。</p>
    <?php endif; ?>
    <?php else : ?>
    <?php endif; ?>

    <?php if (is_single('751')) : ?>
    <?php if (wp_is_mobile()) : ?>
    <?php else : ?>
    <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;"><strong>Click here for English page</strong><br>
        <a href="/sinryo/pipe-cut-reconstruction-en/" style="color: #b39d1a; text-decoration: underline; margin-bottom: 10px;">Vasectomy Reversal / Reconstruct (One-Day Microsurgical Vasectomy Reversal)</a>
    </p>
    <?php endif; ?>
    <?php else : ?>
    <?php endif; ?>

    <?php if (is_single('77')) : ?>
    <?php if (wp_is_mobile()) : ?>
    <?php else : ?>
    <p style="width: 85%; margin: 0 auto;font-size: 1.5rem;line-height: 1.8;"><strong>Click here for English page</strong><br>
        <a href="/sinryo/nagao_method-en/" style="color: #b39d1a; text-decoration: underline; margin-bottom: 10px;">One-day microsurgical low ligation varicocelectomy surgery (Nagao method)</a>
    </p>
                <dl class="dl_r1_2" style="width: 85%; margin: 20px auto 60px;"><dt>出典</dt>
                <dd>1) 片桐由起子, 編著：患者さんからの質問に自信をもって答える 不妊治療Q＆A. 日本医事新報社, 2023, p52-58<br>
                2）堤 治, 監著：ステップと動画で学ぶ 山王病院の生殖医療第2版. 金原出版株式会社, 2024, p141-145</dd>
                </dl>
    <?php endif; ?>
    <?php else : ?>
    <?php endif; ?>


    <section class="contents--lower">
        <?php if (is_single('74')) : ?>
        <?php if (wp_is_mobile()) : ?>
        <?php else : ?>
        <p style="padding: 0px 70px 50px; font-size:25px; font-weight: bold; line-height: 1.8;">リンパ節廓清でリンパ節転移がないと病理診断されたらリンパ浮腫の早期診断と早期治療をお薦めいたします。</p>
        <?php endif; ?>
        <?php else : ?>
        <?php endif; ?>

        <?php if (is_single('covid19-for-patients')) : ?>
        <?php else : ?>
        <?php if (!is_single(array('varicocele','varicocele_test'))) : ?>
        <article class="contents__article ">
            <?php 
                $doct_pagebtm_title = get_field('doct_pagebtm_title',get_the_ID());
                $doct_pagebtm_link = get_field('doct_pagebtm_link',get_the_ID());
                $args = array(
                    //'doct_pagebtm_title' => $doct_pagebtm_title,
                    'doct_pagebtm_title' => 'このページの監修医師',
                    'doct_pagebtm_link' => $doct_pagebtm_link[0]
                );
                set_query_var('query', $args);
                /* ver未対応のためset_query_var使用。5.5以上になったらset_query_varからこちらへ変更
                get_template_part('includes/eat',null,$args); 
                */
                get_template_part('includes/eat'); ?>
        </article>
        <?php endif; ?>
        <?php endif; ?>


        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="contents__article" id="varicocele">
            <?php if (!is_single(array('varicocele','varicocele_test'))) : ?>
            <div class="contents__img--center--href">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
            <div class="contents__text">
                <?php the_content(); ?>
            </div>

            <div class="link--column">
                <?php get_template_part('includes/link'); ?>
            </div>

            <?php if(is_single('71')){ ?>
                <div class="profcard media">
                <div>
                    <h3>メディア掲載情報</h3>
                    <ul class="flex-box">
                        <li>
                            <figure><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/jineko.png" alt=""></figure>
                            <div class="box">
                                <p>【医師監修】ジネコ不妊治療情報「精子が0でも自然妊娠できますか？」にて解説を行いました。</p>
                            </div>
                        </li>
                        <li>
                            <figure><img src="https://ginzarepro.jp/wp-content/uploads/2024/07/yomiuri_0615.jpg" alt=""></figure>
                            <div class="box">
                                <p>夕刊読売にて男性不妊症の原因と治療方法について解説を行いました。</p>
                            </div>
                        </li>
                        <li>
                            <figure><img src="https://ginzarepro.jp/wp-content/uploads/2022/09/tamahiyo_2022.jpg" alt=""></figure>
                            <div class="box">
                                <p>妊活たまごクラブ「不妊治療クリニック受診ガイド」にて解説を行いました</p>
                            </div>
                        </li>
                    </ul>
                    <div class="contact__btn">
                        <a class="contact__btn--submit" href="https://ginzarepro.jp/media/">メディア掲載情報一覧</a>
                    </div>
                </div>
            </div>

            <?php }?>

            <?php

                $doct_pagebtm_title = get_field('doct_pagebtm_title',get_the_ID());
                $doct_pagebtm_link = get_field('doct_pagebtm_link',get_the_ID());
                $args = array(
                    'doct_pagebtm_title' => $doct_pagebtm_title,
                    'doct_pagebtm_link' => $doct_pagebtm_link[0]
                );
                set_query_var('query', $args);
                get_template_part('includes/profcard');
            ?>
            <?php /*<div class="profcard">
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
            </div>*/?>
            <?php if (get_the_ID() === 753) { ?>
            <div class="book_list_box">
                <!--<p class="txt">陰茎弯曲手術　執刀医　：<br>永尾光一　日本泌尿器科学会専門医・日本形成外科学会専門医</p>-->
                <h3 class="ttl">【論文・学会発表】永尾先生の陰茎手術に関するもの</h3>
                <ul>
                    <li><span class="bold">永尾光一</span>、堀口明男 : 2023/11: 外性器・鼠径部の開放手術、第2回「<span class="bold">陰茎尿道</span>」 JUA WEBINAR 13SERIES 13,2-2</li>
                    <li>Yozo Mitsui, <span class="bold">Koichi Nagao</span>, et al 2023/06/14 Molecular Mechanisms and Risk Factors Related to the Pathogenesis of <span class="bold">Peyronie's Disease</span> International Jorunal of Molecular Science</li>
                    <li>Eric Chung, <span class="bold">Koichi Nagao</span>, et. al: 2023/05/07 : Clinical recommendations on <span class="bold">penile reconstructive and prosthetic surgery</span>: a consensus statement from the Asia-Pacific Society of Sexual Medicine Sexual Medicine, https://doi.org/10.1093/sexmed/qfad003</li>
                    <li><span class="bold">永尾光一</span> 2022/09/03 陰茎の病気（包茎、尿道下裂、先天性陰茎弯曲症），ワークショップ３　「思春期男子外性器の形」 第41回日本思春期学会総会・学術集会</li>
                    <li>Yozo Mitsui, <span class="bold">Koichi Nagao</span> 2022/11/12 Psychological Evaluation Using the Questionnaire Method in Patient with <span class="bold">Penile Curvature</span> The 42st Congress of the Société Internationale d'Urologie (SIU)</li>
                    <li><span class="bold">Koichi Nagao</span> 2022/05/20 Surgical Treatment for <span class="bold">Penile Deformity</span> 18th Biennial Meeting of the Asia Pacific Society for Sexual Medicine</li>
                    <li>永尾　光一 2023/03/25 思春期男子外性器の形、3．陰茎の病気（包茎、尿道下裂、<span class="bold">先天性陰茎彎曲症</span>） 思春期学</li>
                    <li><span class="bold">永尾光一</span> 2022/06/20 <span class="bold">陰茎</span>の縫合（包茎手術），トラブルゼロを目指した泌尿器縫合術 臨床泌尿器科</li>
                    <li>Mitsui Y, <span class="bold">Nagao K</span>, et.al. 2023/01/30 Significant inverse association of testosterone level with <span class="bold">penile deformity</span> severity in Japanese males with <span class="bold">Peyronie's disease</span> International　Journal of Urology</li>
                    <li><span class="bold">永尾光一</span> 2022/03/31 学会好事　日本性機能学会第31回学術総会　併催：第30回日本性機能学会東部総会　第22回国際性機能学会世界学術総会 Urology Today</li>
                    <li>三井要造，<span class="bold">永尾光一</span>、他　2021/12 <span class="bold">陰茎彎曲症</span>患者における質問紙法を用いた心理的評価 西日本泌尿器科</li>
                    <li><span class="bold">永尾光一</span> 2021/10/29 外性器・鼠径部の開放手術、<span class="bold">ペロニー病</span> JUA WEBINAR 第13シリーズ『外性器・鼠径部の開放手術』第2回</li>
                    <li><span class="bold">永尾光一</span>、他 2021/06/28 <span class="bold">ペロニー病</span>の手術、EDに対する血行再建術、<span class="bold">陰茎プロステーシス手術</span> 泌尿器科</li>
                    <li>Yozo Mitsui, <span class="bold">Koichi Nagao</span>, et.al. 2022/01 ABO Blood Type and Risk of <span class="bold">Peyronie's Disease</span> in Japanese Males The　World Journal of Men's Health</li>
                    <li><span class="bold">Koichi Nagao</span> 2021/11/27 Single cylinder procedure in <span class="bold">malleable penile implant</span> The Genitourinary Huaxia Medical Forum 2021 (GU-HMF2021)</li>
                    <li>Koichi　Nagao 2021/11/20 <span class="bold">Penile Implants</span> at Toho University in Japan 22nd World Meeting on Sexual Medicine</li>
                    <li><span class="bold">Koichi Nagao</span> 2021/11/19 History of ED treatment and patient satisfaction of Malleable Penile Prosthesis 22nd World Meeting on Sexual Medicine</li>
                    <li><span class="bold">永尾光一</span> 2020/06/30 当科の<span class="bold">陰茎プロステーシス</span>手術の現状ーWMSM2020と再承認に向けてー 泌尿器外科</li>
                    <li><span class="bold">永尾光一</span> 2020/12/13 <span class="bold">陰茎プロステーシス</span>：手技と適応 第108回日本泌尿器科学会総会</li>
                    <li><span class="bold">永尾光一</span> 2020/12/12 難治性勃起障害に対する<span class="bold">陰茎プロステーシス手術</span> 次世代スーパーマイクロサージャリー研究会</li>
                    <li><span class="bold">Koichi Nagao</span> 2020/11/07 Penile implant in Japan 120th Anniversary of Tongji Hospital &Academic Week of 65th Anniversary of the Hospital Moving to Wuhan</li>
                    <li>Yozo Mitsui, <span class="bold">Koichi Nagao</span>, et.al. 2020/10/10 Penile skin flap urethroplasty for the patients with urethral stricture unfit for buccal mucosa graft: a modification of surgical technique and preliminary results 40th Congress of Société Internationale d'Urologie</li>
                    <li><span class="bold">Koichi Nagao</span> 2020/09/25 <span class="bold">Penile Implants</span> in Japan The 4th International Joint Meeting pf Pan-Asian Men's Health Forum and 37th Annual Meeting of KSSMA2020</li>
                    <li><span class="bold">Koichi Nagao</span> 2020/08/20 Penile plastic surgeries and progress in Japan The 5th Annual Congress of Asian Association of Andrology &2020 Annual Meeting of Shanxi Andrology Doctors Association</li>
                    <li><span class="bold">永尾光一</span> 2020/01/01 <span class="bold">尿道狭窄症</span> 今日の治療指針2020年版 62,1232-1233</li>
                    <li><span class="bold">永尾光一</span> 2019/04/25 <span class="bold">尿道下裂</span> 泌尿器科グリーンノート 1,447-449</li>
                    <li><span class="bold">永尾光一</span> 2019/04/25 <span class="bold">尿道狭窄</span> 泌尿器科グリーンノート 1,404-408</li>
                    <li><span class="bold">永尾光一</span> 2019/04/25 <span class="bold">ペロニー病</span> 泌尿器科グリーンノート 1,377-379</li>
                    <li><span class="bold">永尾光一</span> 2020/03/25 思春期からの男性不妊予防 思春期学</li>
                    <li><span class="bold">永尾光一</span> 2019/06/15 <span class="bold">陰茎プロステーシス挿入術</span> 泌尿器外科</li>
                    <li>岩井秀憲、、<span class="bold">永尾光一</span>、他 2019/04 <span class="bold">陰茎持続勃起症</span>の手術 臨泌</li>
                    <li><span class="bold">永尾光一</span>、他 2019/11/11 日本における<span class="bold">陰茎プロステーシス手術</span>の現状と展望ーWMSM2020に向けてー 第69回日本泌尿器科学会中部総会</li>
                    <li>佐藤嘉一、<span class="bold">永尾光一</span> 2019/09/22 WMSM2020　Future of sexual health 第30回日本性機能学会総会</li>
                    <li>佐藤嘉一、<span class="bold">永尾光一</span>、他 2019/09/22 <span class="bold">陰茎プロステーシス挿入術</span>を再考する 第30回日本性機能学会総会</li>
                    <li><span class="bold">永尾光一</span> 2019/04/19 <span class="bold">ペロニー病に対する陰茎形成術</span> 第107回日本泌尿器科学会総会</li>
                    <li><span class="bold">Koichi Nagao</span> 2019/04/12 <span class="bold">Penile prosthesis implant</span> in Japan 17th Biennial meeting of the Asia Pacific Society for Sexual Medicine</li>
                    <li><span class="bold">Koichi Nagao</span> 2019/11/09 <span class="bold">Penile Implants</span> in Japan International Joint Meeting of C.J.K Andrology Meeting</li>
                    <li><span class="bold">Koichi Nagao</span> 2019/04/11 <span class="bold">Penile curvature surgery</span> 17th Biennial meeting of the Asia Pacific Society for Sexual Medicine</li>
                    <li><span class="bold">永尾光一</span> 2018/09 <span class="bold">陰茎湾曲症・ペロニー病</span>に対する手術療法 腎臓内科・泌尿器科</li>
                    <li>三井要造、<span class="bold">永尾光一</span>、他 2018/05 島状陰茎皮弁を用いた尿道形成術　口腔粘膜移植術不適応症例への応用 西日本泌尿器科</li>
                    <li>辻村晃，<span class="bold">永尾光一</span>，他 2018/08 日本性機能学会員を対象とした<span class="bold">陰茎プロステーシス</span>に関する実態調査 第29回日本性機能学会総会</li>
                    <li><span class="bold">永尾光一</span> 2018/07 生殖医療と社会の調和：リプロダクションセンターの使命と課題 第36 回日本受精着床学会総会・学術講演会（特別企画）</li>
                    <li><span class="bold">永尾光一</span>,他 2018/04 陰茎海綿体白膜の大きな欠損を生じる<span class="bold">ペロニー病</span>に対する自己真皮組織移植 第106 回日本泌尿器科学会総会</li>
                    <li><span class="bold">永尾光一</span>,他 2018/04 当科における<span class="bold">陰茎プロステーシス手術</span> 第106 回日本泌尿器科学会総会</li>
                    <li>三井要造,<span class="bold">永尾光一</span>、他 2018/04 陰茎島状皮弁を用いた尿道形成術－口腔粘膜移植術不適応症例への応用 第106 回日本泌尿器科学会総会</li>
                    <li><span class="bold">Nagao K</span> 2019/01 Peyronie's Desease; Plication and Grafting (Autologous Vein and Dermis) 1st Asian Society of Penoplasty</li>
                    <li><span class="bold">Nagao K</span> 2018/10 <span class="bold">Congenital Penile Curvature Repair</span> 5th National congress of Indonesian Association of Sexology in collaboration with Indonesian Association of Andrologist and Asia Pacific Society for Sexual Medicine</li>
                    <li><span class="bold">Nagao K</span> 2018/08 Surgical treatment for penile curvature 雲南省医学会2018年男科学術年会(特別講演)</li>
                    <li><span class="bold">永尾光一</span>（分担） 2018/01 腎・泌尿器疾患、勃起障害 日常診療に活かす診療ガイドラインUP-TO-DATE2018-2019 　239-243</li>
                    <li><span class="bold">永尾光一</span>（分担） 2017/10 勃起障害・射精障害に対する治療 生殖医療の必修知識2017 239-243</li>
                    <li><span class="bold">永尾光一</span> 2018/01 けんこうQ&A、 <span class="bold">尿道狭窄症</span> けんぽだより</li>
                    <li>荒木徹，<span class="bold">永尾光一</span>、他 2017/12 日本性機能学会第1次ICI認可推進委員会・活動始末記． 日性会誌</li>
                    <li><span class="bold">永尾光一</span> 2017/04 陰圧式勃起補助具・<span class="bold">陰茎プロステーシス手術</span>，性機能のエキスパートに聞く術後の性機能． Prostate Journal</li>
                    <li><span class="bold">永尾光一</span> 2017/04 <span class="bold">陰茎損傷</span>，泌尿器科検査パーフェクトガイド 臨泌</li>
                    <li><span class="bold">永尾光一</span> 2017/09 <span class="bold">陰茎プロステーシス手術</span>(Surgical Penile Implant)，日本性機能学会卒後・生涯教育プログラム兼日本泌尿器科学会専門医講習会 第28日本性機能学会総会（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2017/08 「男の子の性教育」、男子の性機能不全の実態と思春期教育 第36回日本思春期学会総会（ワークショップ）</li>
                    <li>三井 要造、<span class="bold">永尾 光一</span>、他 2017/04 <span class="bold">UREThRAL Stricture</span> Scoreを用いた前部尿道再建術の成績評価 第105回　日本泌尿器科学会総会</li>
                    <li>田村公嗣，<span class="bold">永尾光一</span>，他 2017/04 当院で経験した<span class="bold">陰茎折症</span>の8 例 第105回日本泌尿器科学会総会</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2018/02 Autologous dermal tissue grafting for <span class="bold">Peyronie's disease</span> with large tunica albuginea defect World Meeting on Sexual Medicine</li>
                    <li><span class="bold">Nagao K</span> 2017/11 Autologous dermal grafting for <span class="bold">Peyronie's disease</span> and pelvic organ prolapse The CNUH international Symposium for Uro-genital Translational Research2017 (State of art in functional urology)</li>
                    <li><span class="bold">Nagao K</span> 2017/11 Surgical treatment for <span class="bold">penile deformity</span> Vietnamese Society for Sexual Medicine Congress (lecture)</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2017/10 Problems of penile plication for <span class="bold">penile curvature</span> 16th Biennial Meeting of The Asia Pacific Society for Sexual Medicine and 12th Japan-Asean Conference on Mens Health and Aging</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2017/10 Autologous Dermal Grafting for <span class="bold">Peyronie's disease</span> and Pelvic Organ Prolapse 16th Biennial Meeting of The Asia Pacific Society for Sexual Medicine and 12th Japan-Asean Conference on Mens Health and Aging</li>
                    <li><span class="bold">Nagao K</span> 2017/10 Autologous Dermal Grafting for <span class="bold">Peyronie's disease</span> and Pelvic Organ Prolapse 18th Annual Fall Scientific Meeting of Sexual Medicine Society of North America (Topics from Asia)</li>
                    <li><span class="bold">永尾光一</span> 2017/01 性機能障害（勃起障害） 今日の治療指針2017年版 1154-1155</li>
                    <li><span class="bold">永尾光一</span> 2016/11 男性不妊症、治療、勃起障害・射精障害 不妊・不育診療指針 666-670</li>
                    <li><span class="bold">永尾光一</span> 2017/01 男性避妊手術，不妊手術の方法―その現状と問題点 産婦人科の実際</li>
                    <li><span class="bold">永尾光一</span> 2016/04 <span class="bold">ペロニー病</span> 臨泌</li>
                    <li><span class="bold">永尾光一</span> 2016/09/09 アンドロロジーにおける最新の話題 第11回土浦阿見地区泌尿器合同泌尿器科セミナー</li>
                    <li><span class="bold">永尾光一</span> 2016/09/04 男性の性機能不全・性障害 第３回性の健康カウンセラー養成講座（基礎コース）</li>
                    <li><span class="bold">永尾光一</span> 2016/09 包茎手術の過剰な広告と手術トラブル 第17回日本性科学連合性科学セミナー</li>
                    <li>鵜木 勉，<span class="bold">永尾 光一</span>，他 2016/04 Outcomes of surgical treatment of Peronie's Disease 第10４回日本泌尿器科学会総会</li>
                    <li><span class="bold">永尾 光一</span> 2016/04 <span class="bold">陰茎形成術</span>Update 第10４回日本泌尿器科学会総会(Educational lecture)</li>
                    <li><span class="bold">永尾光一</span>，他 2016/04 陰嚢下垂scrotum droopingの治療経験 第59回日本形成外科学会総会</li>
                    <li>Yozo Mitsui, <span class="bold">Koichi Nagao</span>, et.al. 2017/03/25 <span class="bold">UREThRAL Stricture</span> Score can predict surgical outcome of urethral reconstruction in patients with anterior urethral stricture 32nd Annual European Association of Urology Congress</li>
                    <li><span class="bold">Nagao K</span>,et.al. 2017/03 Surgical treatment for <span class="bold">penile curvature</span> The 2nd International Joint Meeting of Pan Asian Men s Health Forum and Annual Meeting of Korean Society for Sexual Medicine and Andrology 2017</li>
                    <li><span class="bold">Nagao K</span>, et.al 2016/04 Surgical treatment for <span class="bold">penile curvature</span> The 14th Congress of Asia-Oceania Federation for Sexology (Symposium)</li>
                    <li><span class="bold">永尾光一</span> 2015/10 EDの<span class="bold">外科的治療</span> 第65回日本泌尿器科学会中部総会（Meet the Expert1）</li>
                    <li><span class="bold">永尾光一</span> 2015/04 生殖機能・性機能領域，日本泌尿器科学会におけるSubspecialtyと境界領域 第103回日本泌尿器科学会総会</li>
                    <li><span class="bold">Nagao K</span>, et.al 2015/11 Surgical treatment for <span class="bold">Peyronie's Disease</span> at Toho University in JAPAN 38th Annual Scientific Meeting of Indonesian Urological Association (Symposium)</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2015/09 Surgical treatment for <span class="bold">Peyronie's Disease</span> in Japan 15th Biennial Meeting of the Asia-Pacific Society for Sexual Medicine(Symposium) </li>
                    <li><span class="bold">Nagao K</span>, et.al. 2015/06 17 years experience of <span class="bold">Peyronie's Disease</span> in Toho University 4th International consultation on Sexual Medicine</li>
                    <li>Koji Tamura, <span class="bold">Koichi Nagao</span>, et.al. 2015/04/26 Microsurgical excision of urethral hair rots in patients with a history of surgical treatment of hypospadias during childhood IFFS/JSRM international meeting 2015</li>
                    <li><span class="bold">Nagao K</span> 2015/04 Surgical treatment for <span class="bold">peyronie's disease</span>, Recent Progress in Andrology 103th JUA/AUA Joint Session</li>
                    <li><span class="bold">永尾光一</span> 2014/04 <span class="bold">形成性陰茎硬化症</span> 「ケータイ家庭の医学」 http://e-katei.net/,1-1</li>
                    <li><span class="bold">永尾光一</span> 2014/12 　ＥＤと<span class="bold">陰茎形成術</span> 多摩泌尿器科医会雑誌</li>
                    <li><span class="bold">永尾光一</span> 2014/05 <span class="bold">ペロニー病（形成性陰茎硬化症）</span> ドクターサロン</li>
                    <li><span class="bold">永尾光一</span> 2014/04 男性性機能障害，必携泌尿器科診療手引き 泌尿器外科</li>
                    <li>永田雅人 ，<span class="bold">永尾光一</span>、他 2014/04 尿道狭窄，必携泌尿器科診療手引き　泌尿器外科</li>
                    <li><span class="bold">永尾光一</span> 2015/02 泌尿器科領域の<span class="bold">陰茎形成術</span> 第11回東京ベイ泌尿器科フォーラム（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2014/11 性機能障害と治療、特に<span class="bold">陰茎硬化症（ペロニー病）</span>について 福岡性機能障害研究会（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2014/10 泌尿器科領域の<span class="bold">陰茎形成術</span>―ＥＤ治療、リハビリを含めて― 30th Takeda Expert TV Conference in Urology（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2014/07 成人の<span class="bold">陰茎・尿道形成術</span>（持続勃起症を含む）．，，2014 7 第８回名古屋Urologyセミナー（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2014/06 ED診療と<span class="bold">陰茎形成術</span> 第124回多摩泌尿器科医会（特別講演）</li>
                    <li><span class="bold">永尾光一</span> ，他 2014/04 男性<span class="bold">先天性外陰部疾患先天性</span>の成人期―総合病院の立場からー，小児泌尿器科疾患：成人期への持越し(Transition)症例 第102回日本泌尿器科学会総会</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2014/10 Effectiveness of surgical treatment for <span class="bold">Peyronie's Disease</span> 16th World Meeting on Sexual Medicine</li>
                    <li><span class="bold">Nagao K</span>, et.al 2014/06 <span class="bold">Surgical Treatment</span> for Erectile Dysfunction The 9th Japan Asean Conference on Men's Health and Aging (Symposium)</li>
                    <li>木村将貴，<span class="bold">永尾光一</span>、他 2014/02 <span class="bold">先天性陰茎彎曲症</span>に対するプリケーション法の注意点―彎曲再発以外のマイナートラブルとその対処法ー 第２４回日本性機能学会東部総会</li>
                    <li><span class="bold">永尾光一</span> 2013/11 <span class="bold">陰茎・尿道再建術</span> 第101回山形泌尿器科研究会（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2013/11 性機能障害と男性不妊 第58回日本生殖医学会総会(モーニングセミナー)</li>
                    <li><span class="bold">永尾光一</span>，他 2013/08 当科を訪れた思春期男子の疾患と今後の対応 第32回日本思春期学会総会</li>
                    <li><span class="bold">永尾光一</span> 2013/07 <span class="bold">陰茎手術</span>とPDE5阻害薬 Kobe Men’s Health研究会（特別講演）</li>
                    <li><span class="bold">永尾光一</span>，他 2013/04 成人の<span class="bold">尿道形成</span>における陰茎海綿体注射による人工勃起の有用性 第101回日本泌尿器科学会総会</li>
                    <li>鵜木 勉，<span class="bold">永尾 光一</span>、他 2013/04 Outcomes of surgical treatment of <span class="bold">Peronie's Disease</span> 第10４回日本泌尿器科学会総会</li>
                    <li><span class="bold">Nagao K</span> 2013/11 <span class="bold">Surgical treatment</span> for erectile dysfunction 10th ANNUAL MEETING OF KOREAN ASSOCIATION FOR SEXOLOGY(International Symposium</li>
                    <li><span class="bold">Nagao K</span>, et.al. 2013/11 <span class="bold">Peyronie's Disease</span> in the Aging Male The 8th Japan-ASEAN Conference on Men's Health and Aging(Symposium)</li>
                    <li><span class="bold">Nagao K</span> 2013/06 Surgical Technique for <span class="bold">Penile and Urethral Reconstruction</span> The14th Biennial meeting of Asia-Pacific Society for Sexual Medicine(Plenary lecture)</li>
                    <li><span class="bold">永尾光一</span> 2012/06 <span class="bold">陰茎海綿体注射</span> 患者説明にそのまま使える！よくわかる泌尿器科検査の知識</li>
                    <li><span class="bold">永尾光一</span> 2012/05 <span class="bold">ペロニー病</span> ED診療ガイドライン2012年版 93-97</li>
                    <li><span class="bold">永尾光一</span> 2012/05 <span class="bold">陰茎プロステーシス挿入術</span> ED診療ガイドライン2012年版 77-78</li>
                    <li><span class="bold">永尾光一</span> 2013/03 泌尿器疾患治療の最近のトピックスー<span class="bold">陰茎手術</span>とED治療薬―． 蒲田医師会雑誌</li>
                    <li><span class="bold">永尾光一</span>,他 2012/11 適正な避妊を目指して　<span class="bold">男性避妊</span> 産科と婦人科</li>
                    <li>Toshihiro TAI, <span class="bold">Koichi NAGAO</span>, et.al 2012/12 Intracavernous injection (ICI) therapy of ED after radicap prostatectomy The Japanese Journal of Sexual Medicine</li>
                    <li><span class="bold">永尾光一</span>，他 2012/06 <span class="bold">先天性陰茎彎曲症</span>に対するプリケーション法の注意点 第31回日本アンドロロジー学会総会</li>
                    <li>胡　剣麟，<span class="bold">永尾光一</span>、他 2012/04 尿道内発毛に対する<span class="bold">顕微鏡下尿道内毛根切除術</span>の考案 第100回日本泌尿器科学会総会（ビデオ）</li>
                    <li><span class="bold">永尾光一</span> 2011/06 ED治療で専門医が留意すべきこと Pfizer Urology Forum 2010泌尿器科医として果たすべき役割 6-7</li>
                    <li><span class="bold">永尾光一</span>, 他 2011/11 EDに対する<span class="bold">陰茎プロステーシス</span>，手術特集/会陰部周囲の形成外科 PEPAR</li>
                    <li><span class="bold">永尾光一</span>, 他 2011/05 <span class="bold">陰茎彎曲症とペロニー病</span>の治療　保存的治療と観血的治療 臨泌65(6)：409-415，2011 5</li>
                    <li>Hu J, <span class="bold">Nagao K</span>, et, al. 2011/12 Experiences in treating idiopathic <span class="bold">scrotal drooping</span> Jpn J Sex Med</li>
                    <li>田井俊宏，<span class="bold">永尾光一</span>、他 2012/03 術後EDに対するプロスタグランジンE1<span class="bold">海綿体注射</span>の有効性 第13回関東アンドロロジーカンファレンス</li>
                    <li>Hu Jianlin，<span class="bold">Koichi Nagao</span>, et.al. 2012/02 Treatment of idiopathic <span class="bold">scrotal drooping</span> 第22回日本性機能学会東部総会</li>
                    <li>Hu Jian-Lin，<span class="bold">永尾光一</span>、他 2011/09 尿道内発毛に対する<span class="bold">顕微鏡下尿道内毛根切除術</span>の試み 第22回日本性機能学会</li>
                    <li>荒木　徹，<span class="bold">永尾光一</span>他 2011/09 一歩前進、日本のICI 第22回日本性機能学会（ランチョンセミナー）</li>
                    <li>木元康介，<span class="bold">永尾光一</span>、他 2011/09 EDガイドライン公聴会 第22回日本性機能学会（公聴会</li>
                    <li>松井英幸、<span class="bold">永尾光一</span>、他 2011/04/11 <span class="bold">先天性陰茎湾曲症</span>術後の問題点 第21回日本性機能学会東部総会</li>
                    <li>神戸茂樹，<span class="bold">永尾光一</span>、他　2011/04 <span class="bold">陰茎海綿体自己注射</span>とPDE５阻害薬の併用治療の２例 第21回日本性機能学会東部総会</li>
                    <li>田井俊宏，<span class="bold">永尾光一</span>、他　2011/04 前立腺癌術後勃起障害におけるプロスタグランジンE1<span class="bold">海綿体注射</span>の検討 第21回日本性機能学会東部総会</li>
                    <li>Hu J，<span class="bold">Nagao K</span>, et.al. 2012/03 Experiences in treating idiopathic <span class="bold">scrotal drooping</span> The 5th Greatwall Translational Andro-Urology Forum</li>
                    <li><span class="bold">Nagao K</span>，et.al. 2011/11 Microsurgical excision of <span class="bold">urethral hair</span> roots in patients with a history of surgical treatment of hypospadias during childfood</li>
                    <li><span class="bold">Nagao K</span> 2011/07 History and future developments of Urology and Andrology in Japan The 2nd Andrology Group Congress of Chinese Urological Association (lecture)</li>
                    <li><span class="bold">Nagao K</span> 2011/07 Modern/novel ideas and strategies of ED <span class="bold">surgical treatments</span> The 2nd Andrology Group Congress of Chinese Urological Association (lecture)
                        <span class="bold">Nagao K</span>, et.al. 2011/07 Single Implant Procedure on <span class="bold">Penile Prosthesis Surgery</span> The 6th Japan-Asean Conference on Men's Health and Aging (Symposium)
                    </li>
                    <li><span class="bold">永尾光一</span>，他 2011/03 <span class="bold">陰茎折症</span>の手術 新Urologic Surgeryシリーズ8 p93-97</li>
                    <li><span class="bold">永尾光一</span> 2010/12 <span class="bold">陰茎彎曲症 </span>ケータイ家庭の医学 http://e-katei.net/</li>
                    <li><span class="bold">永尾光一</span>, 他 2010/11 ED(勃起不全)・男性不妊症 医師がすすめる最高の名医＋治る病院</li>
                    <li><span class="bold">永尾光一</span>，他 2010/07 <span class="bold">埋没陰茎・翼状陰茎</span>に対する手術 臨床泌尿器科</li>
                    <li>上村修一，<span class="bold">永尾光一</span>，他 2010/06 包茎術後に性機能障害を訴えた15例の検討 日本性機能学会雑誌</li>
                    <li>永尾　光一 2010/11 ED治療で専門医が留意すべきことと最新の知見，泌尿器科医として果たすべき役割 Pfizer Urology Forum 2010（特別講演）</li>
                    <li><span class="bold">永尾光一</span> 2010/08 <span class="bold">陰茎手術入門（彎曲・ペロニーを中心に）</span> 第21回日本性機能学会（教育講演）</li>
                    <li>石渡誉郎，<span class="bold">永尾光一</span>，他 2010/08 <span class="bold">陰茎彎曲症手術</span>における尿道延長の工夫 第21回日本性機能学会総会</li>
                    <li>石渡誉郎，<span class="bold">永尾光一</span>、他 2010/07 <span class="bold">先天性陰茎彎曲症</span>に対する新しい尿道延長法の考案 第19回日本小児泌尿器科学会総会</li>
                    <li>田井俊宏，<span class="bold">永尾光一</span>、他 2010/07 PGE1<span class="bold">陰茎海綿体自己注射療法</span>の効果と副作用に対する検討 第29回日本アンドロロジー学会総会</li>
                    <li><span class="bold">Nagao K</span>，et.al. 2010/09 <span class="bold">Penile Prosthesis Surgery</span> Preserved Cavernous Smooth Muscle The 14th World Meeting of the International Society for Sexual Medicine</li>
                    <li>Tai T，<span class="bold">Nagao K</span>, et.al. 2010/09 Intracavernous Injection <span class="bold">(ICI)</span> of PGE1 for Treatment of ED When PDE5-Inhibitor Therapy is Ineffective or Contraindicated The 14th World Meeting of the International Society for Sexual Medicine</li>
                    <li><span class="bold">Nagao K</span>，et.al. 2010/07 <span class="bold">Surgical Treatment</span> for Erectile Dysfunction 5th Japan-Asean Conference on Men’s Health and Aging (Symposium)</li>
                    <li><span class="bold">Nagao K</span>，et.al. 2010/07 Treatment for <span class="bold">Peyronie’s Desease</span> - update，The Japan-Korea Andrology Symposium「Erectile dysfunction - update」 The Japan Society of Andrology The 29th Annual Meeting (Symposium)</li>
                    <li><span class="bold">永尾光一</span> 2010/03 被告人の陰茎の形状についての写真撮影報告書 千葉地方裁判所平成21年（わ）第1188号公然わいせつ被告事件 1-11</li>
                    <li><span class="bold">永尾光一</span> 2009/11 被告人の陰茎等の色彩についての報告書 千葉地方裁判所平成21年（わ）第1188号公然わいせつ被告事件 1-18</li>
                    <li><span class="bold">Nagao K</span>，et.al 2009/12 <span class="bold">Surgical Treatment</span> of Erectile Dysfunction 12th Biennial Meeting of the Asia-Pacific Society for Sexual Medicine (Symposium)</li>
                    <li><span class="bold">永尾光一</span>，他 2008/07 成人における<span class="bold">尿道下裂術</span>後の修正手術 Audio-Visual Journal of JUA 14(3) 5 min 35 sec</li>
                    <li><span class="bold">永尾光一</span>，他 2008/05 糖尿病合併の<span class="bold">ペロニー病患者</span>に対する静脈移植例 男性更年期障害―その関連領域も含めたアプローチ 187-188</li>
                    <li><span class="bold">永尾光一</span>，他 2008/05 <span class="bold">ペロニー病Peyronie’s disease</span>，男性更年期に気をつけたい泌尿器疾患 男性更年期障害―その関連領域も含めたアプローチ 109-113</li>
                    <li><span class="bold">永尾光一</span>、他 2008/04 <span class="bold">ペロニー病（形成性陰茎硬化症）</span>，尿路・性器の炎症疾患 臨床泌尿器科</li>
                    <li>石渡誉郎，<span class="bold">永尾光一</span>、他 2009/02 二次性徴以後の尿道下裂に対する<span class="bold">尿道・陰茎海綿体</span>延長術の3例 第19回日本性機能学会東部総会</li>
                    <li><span class="bold">永尾光一</span>、他 2009/02 器質性勃起障害に対する<span class="bold">陰茎プロステーシス手術</span>，4．骨盤内手術後の性機能障害への対応 第26回日本ストーマ・排泄リハビリテーション学会総会</li>
                    <li><span class="bold">永尾光一</span>、他 2008/11 Aging MaleにおけるPDE5阻害薬以外のED治療―<span class="bold">陰茎プロステーシス手術</span>を中心にー 第8回日本Men’s Health医学会</li>
                    <li><span class="bold">永尾光一</span>、他 2008/09 当センターにおける<span class="bold">陰茎プロステーシス移植手術</span> 第19回日本性機能学会総会</li>
                    <li><span class="bold">永尾光一</span>、他 2008/08 男性不妊症の原因となる思春期からの問題点「<span class="bold">先天性陰茎彎曲症</span>」 第27回日本思春期学会総会</li>
                    <li><span class="bold">永尾光一</span>、他 2008/07 大きな<span class="bold">尿道廔孔</span>に対するbilobed flap の使用経験 第17回日本小児泌尿器科学会総会</li>
                    <li><span class="bold">永尾光一</span> 2008/07 <span class="bold">陰茎手術</span>とPDE5阻害剤 第18回日本性機能学会中部総会</li>
                    <li><span class="bold">永尾光一</span>、他 2008/04 当科における<span class="bold">陰茎プロステーシス移植手術</span>の現状 第96回日本泌尿器科学会総会</li>
                    <li><span class="bold">永尾光一</span>、他：局所麻酔下<span class="bold">ペニールプロステーシス手術</span>. IMPOTENCE 8:275-280, 1993</li>
                    <li><span class="bold">Nagao K</span>, et.al.：One-day <span class="bold">penile prosthesis surgery</span> by penile block. Int J Urol 7:57-61,2000.5</li>
                    <li>加藤聡彦, <span class="bold">永尾光一</span>、他：東邦大学におけるPGE1 <span class="bold">ICI</span>テストとIC自己注射の現況.日性会誌 18:213-217,2003.12</li>
                    <li>Kato T, <span class="bold">Nagao K</span>, et.al. New plication technique for the treatment of <span class="bold">congenital penile curvature</span>. Reproductive Medicine and Biology 4:255-258,2005.12（学位指導論文）</li>
                    <li>片岡和義，<span class="bold">永尾光一</span>、他：<span class="bold">陰茎彎曲症</span>に対し自己矯正を試み陰茎折症を発症した2例．泌尿器外科 20(3)：295-297，2007．3</li>
                    <li><span class="bold">永尾光一</span>，他：<span class="bold">先天性陰茎彎曲症</span>，男性不妊症の原因となる思春期からの問題点．思春期学23：301-305，2007 9</li>
                    <li><span class="bold">永尾光一</span>，他：バイアグラ時代における勃起障害　プリアピズム、<span class="bold">先天性陰茎弯曲症およびペロニー病</span>．臨床と研究 76:911-916,1999</li>
                    <li><span class="bold">永尾光一</span>：バイアグラの正しい知識　バイアグラが無効の症例およびバイアグラが使えない症例に対する治療法　<span class="bold">陰茎形成術-先天性陰茎弯曲症およびペロニー病</span>に対する手術．Modern Physician 19:1185-1189,1999.9</li>
                    <li><span class="bold">永尾光一</span>：バイアグラの正しい知識　バイアグラが無効の症例およびバイアグラが使えない症例に対する治療法　<span class="bold">陰茎プロステーシス移植手術</span>　局所麻酔、日帰り手術の実際．Modern Physician 19:1181-1184,1999.9</li>
                    <li><span class="bold">永尾光一</span>：<span class="bold">先天性陰茎湾曲症</span>、陰茎短縮について，思春期外来-泌尿器科を訪れる子供たちの健康．保健ニュース　第1203号：5-6,2002.3</li>
                    <li><span class="bold">永尾光一</span>：<span class="bold">先天性陰茎彎曲症</span>, 男性性機能不全. 日本臨床 60: 356-359, 2002 6</li>
                    <li><span class="bold">永尾光一</span>：<span class="bold">Peyronie（ペロニー）病</span>, 男性性機能不全. 日本臨床 60:360-363,2002.　　　
                        　　　6</li>
                    <li><span class="bold">永尾光一</span>,他：<span class="bold">尿道下裂</span>, 男性性機能不全. 日本臨床 60:370-373,2002.
                        　　　6</li>
                    <li><span class="bold">永尾光一</span>：日本医師会生涯教育講座、ED治療の最前線ー<span class="bold">外科的治療</span>のストラテジー. 東京都医師会雑誌 56:2152-2159,2003.12</li>
                    <li><span class="bold">永尾光一</span>：<span class="bold">勃起障害の外科的治療</span>．泌尿器外科　17:327-334,2004</li>
                    <li><span class="bold">永尾光一</span>（分担）：<span class="bold">陰茎プロステ−シス移植術</span>ーインフレ−タブル型プロステ−シス． 性機能障害（白井將文監，三浦一陽・石井延久編） p164-170. 南山堂，東京，1998</li>
                    <li><span class="bold">永尾光一</span>，他（分担）：インポテンス−<span class="bold">先天性陰茎湾曲症とペロニ−病</span>，新図説臨床泌尿器科学講座 第４巻 内分泌疾患、性機能障害（吉田修監，小柳知彦・村井勝・大島伸一編）p324-330．メジカルビュ−社，東京，1999.12</li>
                    <li><span class="bold">永尾光一</span>，他（分担）：治療第三選択　<span class="bold">プロステーシス</span>（局所麻酔，日帰り手術），泌尿器科外来シリーズ6　Erectile Dysfunction外来（吉田修監，内藤誠二編）p128-134．メジカルビュ−社，東京，2000.3</li>
                    <li><span class="bold">永尾光一</span>，他（分担）：<span class="bold">先天性陰茎湾曲症，ペロニ−病</span>，泌尿器科外来シリーズ6　Erectile Dysfunction外来（吉田修監，内藤誠二編）p152-161．メジカルビュ−社，東京，2000.3</li>
                </ul>
            </div>
            <?php } ?>
            <a class="contents__item__permalink" href="/sinryo/">一覧ページに戻る</a>
        </article>

        <?php endwhile;
      else : ?>

        <?php endif; ?>
        <div class="contents__article sinryo_list">
            <h3 class="contents__heading">
                <span class="contents__heading--text">診療・手術一覧</span>
            </h3>
            <?php get_template_part('includes/sinryo-menu'); //診療メニュー 
        ?>
        </div>
        <!-- <section class="contents"> -->
        <?php 
        if(is_single('varicocele')):
            get_template_part('includes/recommend_varicocele');
        else:
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            $d_rs_post_list = get_field('rec_column_list', $post_id);
            //echo $post_id;
            //var_dump($d_rs_post_list);
            if(!empty($d_rs_post_list)):
            ?>
            <div class="recommend recommend_list">
                <h2 class="recommend__ttl"><span class="contents__heading--text">こんな記事も読まれています</span></h2>
                <div class="wrap">
                    <?php foreach( $d_rs_post_list as $post ):  ?>
            <?php get_template_part('includes/recommend_sinryo'); ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
            wp_reset_query(); endif;
        endif;
        ?>
        <!-- </section> -->
<?php if(is_single('lymph_drainage')): ?>
        <?php get_template_part('includes/sns-woman'); ?>
<?php else: ?>
        <section class="contents">
            <article class="contents__article">
                <div class="sns-area">
                    <?php get_template_part('sns'); ?>
                    <div class="twi-insta-wrap page">
                        <div class="twitter">
                            <a class="twitter-timeline" width="350px" height="450px" href="https://twitter.com/ginzarepro?ref_src=twsrc%5Etfw" data-tweet-limit="1">Tweets by ginzarepro</a>
                            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                        <div class="instagram">
                            <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                        </div>
                    </div>
                </div>
            </article>
        </section>
<?php endif; ?>

    </section>

    <section class="contents">
        <article class="contents__article">
            <?php get_template_part('includes/link'); ?>
            <?php get_template_part('includes/banner'); ?>
        </article>
    </section>
</div>

<?php if(is_single('lymph_drainage')): ?>
<?php get_footer('woman'); ?>
<?php else: ?>
<?php get_footer(); ?>
<?php endif; ?>
<?php endif; ?>
