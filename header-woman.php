<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <?php
    if (is_home() || is_front_page()) :
        $pageTitle = '';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて、精索静脈瘤をはじめとする様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
        $pageKeyword = '';
    elseif (is_single('lva')) :
        $pageTitle = 'リンパ浮腫の治療・手術（リンパ管静脈吻合術・LVA）| 東京の銀座リプロ外科';
        $pageDesc = 'リンパ管静脈吻合術（LVA手術）は保険適用の低侵襲治療です。局所麻酔で日帰り手術が可能。リンパの流れを改善し、むくみや痛み、蜂窩織炎を緩和します。';
    elseif (is_page()) :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
        $pageKeyword = '';
    elseif (is_single()) :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    elseif (is_search()) :
        $pageTitle =  '検索結果 | ';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    elseif (is_404()) :
        $pageTitle =  'ページが見つかりません | ';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    else :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    endif;
    $http = is_ssl() ? 'https' : 'http' . '://';
    $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    ?>
    <title><?php if (is_archive('woman')) : ?><?php elseif (!is_home() || !is_front_page() || !is_tag()) : ?><?php echo $pageTitle ?><?php endif; ?><?php if(!is_single('lva')): ?>銀座リプロ外科 東京のリンパ浮腫治療クリニック<?php endif; ?></title>
    <meta name="keywords" content="<?php echo $pageKeyword ?>" />
    <meta name="description" content="<?php echo $pageDesc ?>">
    <?php if (is_single('w-lva')) : ?>
    <link rel="canonical" href="https://ginzarepro.jp/sinryo/lva/">
    <?php endif; ?>
    <?php /*if (is_single('w-access')) : ?>
    <link rel="canonical" href="https://ginzarepro.jp/access/">
    <?php endif;*/ ?>
    <meta property="og:title" content="<?php if (is_archive('woman')) : ?><?php elseif (!is_home() || !is_front_page()) : ?><?php echo $pageTitle ?><?php endif; ?><?php if(!is_single('lva')): ?>銀座リプロ外科：リンパ浮腫など女性疾患の外科治療<?php endif; ?>" />
    <meta property="og:site_name" content="銀座リプロ外科：リンパ浮腫をはじめとした女性疾患の外科治療クリニック" />
    <meta property="og:url" content="https://ginzarepro.jp/" />
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/ogp.png" />
    <meta property="og:description" content="<?php echo $pageDesc ?>" />
    <meta property="og:type" content="website" />
    <?php /*<!-- meta property="fb:admin" content="" -->*/?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $pageDesc ?>" />
    <meta name="twitter:title" content="<?php if (is_archive('woman')) : ?><?php elseif (!is_home() || !is_front_page()) : ?><?php echo $pageTitle ?><?php endif; ?>銀座リプロ外科：リンパ浮腫をはじめとした女性疾患の外科治療クリニック" />
    <meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/ogp.png" />
    <meta name="google-site-verification" content="46RwUtB0kwp5BsJ38PwDEJTvTT0f2xbFS9c4ned1WRg" />
    <meta name="naver-site-verification" content="ad68e9b1e6d77b9ce7fff3bdfc1bb777ab7de66d" />
    <meta name="google-site-verification" content="wvDcyXHQ9dmd9z0D6wJuPEvX-Z_N5f8R0rXDfOxRuWc" />
    <link rel="SHORTCUT ICON" href="https://ginzarepro.jp/wp-content/uploads/2019/12/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <?php if (is_single('w-access')) : ?>
    <link rel='stylesheet' id='ez-toc-css' href='https://ginzarepro.jp/wp-content/plugins/easy-table-of-contents/assets/css/screen.min.css?ver=2.0.67.1' type='text/css' media='all' />
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <?php /*<!-- <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/eat.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/sns.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/styletop.css" /> -->*///style_pf.cssへ記載?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/woman.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style_pf.css?ver=<?php $str = date('YmdHs'); echo str_shuffle($str); ?>" />
    <?php
    $search_01 = "-en";
    $search_02 = "_en";
    $hreflang_url = $_SERVER['REQUEST_URI'];
    $pos_01 = strrpos($hreflang_url, $search_01);
    $pos_02 = strrpos($hreflang_url, $search_02);
    $post_id_acf = get_the_ID();
    if (is_singular('sinryo') || is_singular('post') || is_single()) {
        $eng = 0;
        if (is_singular('sinryo')) {
            $eng = get_field('meta_href_eng_sinryo',$post_id_acf);
        }elseif (is_singular('post')) {
            $eng = get_field('meta_href_eng_post',$post_id_acf);
        }
        if ($eng) {
            $eng = $eng[0];
            if ($pos_01 !== false || $pos_02 !== false) {
                //-en or _en のついたページ
                echo '<link rel="alternate" hreflang="ja" href="' . get_the_permalink($eng) . '">' . PHP_EOL;
                echo '    <link rel="alternate" hreflang="en" href="' . get_the_permalink() . '">' . PHP_EOL;
            }else{
                //日本語
                    echo '<link rel="alternate" hreflang="ja" href="' . get_the_permalink() . '">' . PHP_EOL;
                    echo '    <link rel="alternate" hreflang="en" href="' . get_the_permalink($eng) . '">' . PHP_EOL;
            }
        }
    }
    // if (is_singular('sinryo')) {
    //     $eng = 0;
    //     $eng = get_field('meta_href_eng_sinryo');
    //     if ($eng) {
    //         $eng = $eng[0];
    //         echo '<link rel="alternate" hreflang="ja" href="' . get_the_permalink($eng) . '">' . PHP_EOL;
    //         echo '<link rel="alternate" hreflang="en" href="' . get_the_permalink() . '">' . PHP_EOL;
    //     }
    // }
    // if (is_singular('post')) {
    //     $eng = 0;
    //     $eng = get_field('meta_href_eng_post');
    //     if ($eng) {
    //         $eng = $eng[0];
    //         echo '<link rel="alternate" hreflang="ja" href="' . get_the_permalink($eng) . '">' . PHP_EOL;
    //         echo '<link rel="alternate" hreflang="en" href="' . get_the_permalink() . '">' . PHP_EOL;
    //     }
    // }
    ?>
    <?php wp_head(); ?>
    <?php if (!(is_front_page() || is_home() || is_singular('sinryo') || is_single())) {
        wp_deregister_script('jquery');
    } ?>
    <?php if(is_singular('sinryo')) : get_template_part('includes/markup_ld-json'); endif; //手術ページに構造化データ ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/common.js"></script>
    <script type="text/javascript" id="" charset="utf-8" src="//typesquare.com/3/tsst/script/ja/typesquare.js?6391a387603045ceba0d44dbac1e02d5&fadein=-1"></script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-MPMKWX5');
    </script>
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K5BZLRN');
    </script>
    <!-- End Google Tag Manager -->
    <!--<?php $url = $_SERVER['REQUEST_URI']; ?>
<?php if (strstr($url, 'thanks-revisit')) : ?> -->
    <!-- Event snippet for 再診予約完了 conversion page -->
    <!-- Global site tag (gtag.js) - Google Ads: 727032786 -->
    <!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-727032786"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('event', 'conversion', {'send_to': 'AW-727032786/nkPLCMjB1LgBENLH1toC'});
  gtag('config', 'AW-727032786');
</script>
<?php else : ?>
<?php endif; ?>-->
</head>
<?php
$sphead_disp = 0;
$ex_tax = 'column_category';
$ex_term = 'lva';
$ex_term_02 = 'varicocele';
$ex_term_id = get_term_by('slug', $ex_term, $ex_tax)->term_id;
$ex_term_id_02 = get_term_by('slug', $ex_term_02, $ex_tax)->term_id;
$ex_term_child_id = get_term_children($ex_term_id, $ex_tax);
$ex_term_child_id_02 = get_term_children($ex_term_id_02, $ex_tax);
if (is_tax($ex_term) || is_tax($ex_term_02) || has_term($ex_term_id_02, $ex_tax) || has_term($ex_term_child_id_02, $ex_tax) || has_term($ex_term_id, $ex_tax) || has_term($ex_term_child_id, $ex_tax)) {
    $sphead_disp = 1;
}
?>
<body id="lvapage" <?php if ($sphead_disp) { echo ' class="sphead_disp lva"'; } ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPMKWX5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5BZLRN" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php if (!is_page(array('appointment-first', 'appointment-first-confirm', 'appointment-first_lp', 'appointment-first-confirm_lp'))) { ?>
    <header class="sideNavi--wrap">
        <div class="sideNavi--inner">
            <div class="sideNavi">
                <div class="sp__btn">
                    <a class="mainVis__contact" href="https://ginzarepro.jp/lva/appointment-first/" target="_blank">
                        <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
                            <span class="fas fa-envelope"></span><i>ご予約</i>
                        </p>
                    </a>
                    <?php if (is_single('lva')) : ?>
                    <span class="mainVis__h"><i>保険</i><i>適用</i></span>
                    <?php endif; ?>
                </div>
                <div class="sideNavi__spheader">
                    <?php if (is_home() || is_front_page()) : ?><h1 class="sideNavi__logo"><a href="/woman/">
                            <?php else : ?>
                            <a href="/woman/" class="sideNavi__logo">
                                <?php endif; ?>
                                <img class="sideNavi__logo--pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__logo--pc.png" alt="医療法人社団マイクロ会　銀座リプロ外科" />
                                <img class="sideNavi__logo--sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__logo--sp.png" alt="医療法人社団マイクロ会　銀座リプロ外科" />
                            </a>
                            <?php if (is_home() || is_front_page()) : ?></h1><?php endif; ?>
                    <a class="sideNavi__spheader__tel" href="tel:0351592240"><span class="fas fa-phone"></span></a>
                    <!--<a class="sideNavi__spheader__tel" href="tel:0351592240"><span class="fas fa-phone"></span></a>-->
                    <div class="hamburger" data-active="false">
                        <div class="hamburger--inner">
                            <span class="hamburger--border"></span>
                            <span class="hamburger--border"></span>
                            <span class="hamburger--border"></span>
                        </div>
                    </div>
                </div>
                <ul class="sideNavi__menu">
                    <li class="sideNavi__menu__trigger">
                        <a class="sideNavi__menu__item--pc" href="/woman/">TOPページ</a>
                    </li>
                    <li><a class="sideNavi__menu__item" href="/sinryo/lva/">リンパ浮腫手術</a></li>
                    <li><a class="sideNavi__menu__item" href="/case/">症例写真</a></li>
                    <li><a class="sideNavi__menu__item" href="/sinryo/lymph_drainage/">リンパドレナージ</a></li>
                    <li><a class="sideNavi__menu__item" href="/column/rubber-stockings/">弾性ストッキング</a></li>
                    <li class="sideNavi__menu__trigger">
                        <a class="sideNavi__menu__item--pc" href="/woman/w-staff/">当院について</a>
                        <a class="sideNavi__menu__item--sp">当院について</a>
                        <ul class="sideNavi__menu__lower">
                            <li><a class="sideNavi__menu__lower__item--sp" href="/woman/w-staff/">当院について</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/woman/w-staff/#firstVisit">初めての方へ</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/woman/w-staff/#concept">当院のコンセプト</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/woman/w-staff/#facility">院内・設備紹介</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/woman/w-staff/#aboutDoctor">医師紹介</a></li>
                        </ul>
                    </li>
                    <li><a class="sideNavi__menu__item" href="/column_category/lva/">基礎知識</a></li>
                   <li><a class="sideNavi__menu__item" href="/woman/w-faq/">よくある質問</a></li>
                   <li><a class="sideNavi__menu__item" href="/woman/w-access/">交通アクセス</a></li>
						<!--<ul class="sp-line" style="margin:10px; text-align: center;">
							<li style="padding-bottom:10px;"><a href="https://liff.line.me/2006292900-akPlPwgN/landing?follow=%40261gnxxn&lp=EaLfyF&liff_id=2006292900-akPlPwgN" target="_blank"><img src="https://ginzarepro.jp/wp-content/uploads/2024/10/lymphedema-risk-diagnosis-banner-scaled.jpg" alt="リンパ浮腫リスク度診断" style="max-width: 100%;"></a></li>
						</ul>
						<ul class="pc-line" style="margin:10px; text-align: center;">
							<li style="padding-bottom:10px;"><a href="https://liff.line.me/2006292900-akPlPwgN/landing?follow=%40261gnxxn&lp=t6rz8p&liff_id=2006292900-akPlPwgN" target="_blank"><img src="https://ginzarepro.jp/wp-content/uploads/2024/10/lymphedema-risk-diagnosis-banner-scaled.jpg" alt="リンパ浮腫リスク度診断" style="max-width: 100%;"></a></li>
						</ul>-->
</ul>
			
					
<style>
    .sideNavi__menu .sp-line{
        display: none;
    }

@media screen and (min-width: 769px) {
    .sideNavi__menu[data-active="false"] .sp-line{
        display: none;
    }
    .sideNavi__menu[data-active="false"] .pc-line{
        display: block;
    }
}
@media screen and (max-width: 768px) {
    .sideNavi__menu[data-active="true"] .sp-line{
        display: block;
    }
    .sideNavi__menu[data-active="true"] .pc-line{
        display: none;
    }
}
</style>
					
					
                <div class="sideNavi__contact--wrap">

                    <a class="sideNavi__contact--btn" href="/lva/appointment-first/" target="_blank"><img src="/wp-content/themes/ginzarepro_0.1/img/sideNavi__contact__reservation.png" alt="">初診のご予約</a>
                    <a class="sideNavi__contact--btn" href="/lva/appointment-revisit/"><img src="/wp-content/themes/ginzarepro_0.1/img/sideNavi__contact__operation.png" alt="">再診のご予約</a>

                </div>
            </div>
        </div>
    </header>
    <?php } ?>
    <?php if ($sphead_disp) { ?>
    <div class="sideNavi__spheader_btm">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/')); ?>"><span>HOME</span></a></li>
            <?php if ($sphead_disp === 'varicocele') { ?>
            <li><a href="<?php echo esc_url(home_url('/sinryo/varicocele/')); ?>"><span><i>精索静脈瘤手術</i>とは</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/sinryo/nagao_method/')); ?>"><span><i>ナガオメソッド</i>とは</span></a></li>
            <?php } else { ?>
            <li><a href="<?php echo esc_url(home_url('/sinryo/lva/')); ?>"><span><i>リンパ浮腫手術</i>とは</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/column/beginning-of-lva/')); ?>"><span><i>リンパ浮腫の</i>はじまりとは</span></a></li>
            <?php } ?>
            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><span>よくある質問</span></a></li>
        </ul>
    </div>
    <?php } ?>