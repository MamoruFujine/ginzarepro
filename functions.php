<?php

add_theme_support('post-thumbnails');

function disable_redirect_canonical($redirect_url)
{
    if (is_404()) {
        return false;
    }
    return $redirect_url;
}
add_filter('redirect_canonical', 'disable_redirect_canonical');

function my_tiny_mce_before_init($ar)
{
    $ar['block_formats'] = '段落=p';
    return $ar;
}
add_filter('tiny_mce_before_init', 'my_tiny_mce_before_init');

require_once locate_template('functions/breadcrumbs.php');


add_action('init', 'add_post_type_event', 0);
function add_post_type_event()
{
    register_post_type(
        'sinryo', /* カスタム投稿タイプのスラッグ */
        array(
            'labels' => array(
                'name' => '診療・手術一覧',
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'author', 'trackbacks', 'comments', 'revisions', 'page-attributes')  /* いろんな機能を有効化 */
        )
    );
}

function people_init()
{
    // 新規カスタムタクソノミーを作成
    register_taxonomy(
        'diagnosis', // 新規カスタムタクソノミー名
        'sinryo', // 新規カスタムタクソノミーを反映させる投稿タイプの定義名
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => 'カテゴリー',
            'singular_label' => 'カテゴリー',
            'public' => true,
            'show_ui' => true
        )
    );
}
add_action('init', 'people_init');

function add_taxonomy_column($columns)
{
    $columns['diagnosis'] = 'カテゴリー';
    return $columns;
}

function add_taxonomy_column_data($column_name, $post_id)
{
    if ($column_name == 'diagnosis') {
        $name = get_the_term_list($post_id, 'diagnosis', '', ' | ');
        echo (!empty($name)) ? $name : '';
    }
}

add_filter('manage_posts_columns', 'add_taxonomy_column');
add_action('manage_posts_custom_column', 'add_taxonomy_column_data', 10, 2);

//　カスタム投稿タイプ「女性向け」
add_action('init', 'add_post_type_event2', 0);
function add_post_type_event2()
{
    register_post_type(
        'woman', /* カスタム投稿タイプのスラッグ */
        array(
            'labels' => array(
                'name' => '女性向け一覧',
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'author', 'trackbacks', 'comments', 'revisions', 'page-attributes')  /* いろんな機能を有効化 */
        )
    );
}

function people2_init()
{
    // 新規カスタムタクソノミーを作成
    register_taxonomy(
        'womanlva', // 新規カスタムタクソノミー名
        'woman', // 新規カスタムタクソノミーを反映させる投稿タイプの定義名
        array(
            'hierarchical' => true,
            'update_count_callback' => '_update_post_term_count',
            'label' => 'カテゴリー',
            'singular_label' => 'カテゴリー',
            'public' => true,
            'show_ui' => true
        )
    );
}
add_action('init', 'people2_init');

// Replaces the excerpt "Read More" text by a link
/*
function new_excerpt_more($more)
{
	global $post;
	return '<a class="contents__text__readmore" href="' . get_permalink($post->ID) . '">続きを読む</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

global $wp_rewrite;
$wp_rewrite->flush_rules();
*/

function remove_more_link_scroll($link)
{
    $link = preg_replace('|#more-[0-9]+|', '', $link);
    return $link;
}
add_filter('the_content_more_link', 'remove_more_link_scroll');

function modify_read_more_link()
{
    return '<a class="more-link" href="' . get_permalink() . '"></a>';
}
add_filter('the_content_more_link', 'modify_read_more_link');

// 電話番号リンクをPCで無効にする
function invalid_pc_tel_link()
{
    if (!wp_is_mobile()) : ?>
        <style type="text/css">
            a[href*="tel:"] {
                pointer-events: none;
                cursor: default;
                text-decoration: none;
            }
        </style>
<?php endif;
}
add_action('wp_head', 'invalid_pc_tel_link');

remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

remove_action('wp_head', 'wp_shortlink_wp_head');

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function my_mail1($Mail, $values, $Data)
{


    if ($Data->get('contact--appointment__ope') == '陰茎海綿体自己注射（ED治療薬無効）') {

        $Mail->body = "この度はメールフォームよりご連絡いただき、ありがとうございます。" . "\n"
            . "ご予約状況を確認し、担当者より折り返しご連絡をいたします。" . "\n"
            . "今しばらくお待ちくださいませ。" . "\n"
            . "\n"
            . "------------------" . "\n"
            . "※まだ本メール受信時点では予約は確定しておりません。" . "\n"
            . "\n"
            . "担当者からの折り返し連絡および合意により予約確定となりますのでご注意ください。" . "\n"
            . "１日経っても返信がない場合は、お手数ではございますが、お電話などで再度ご連絡いただけますようお願い致します。" . "\n"
            . "------------------" . "\n"
            . "\n"
            . "なお、ご連絡内容やタイミングによりご返信が遅くなる場合もございます。" . "\n"
            . "また状況によっては直接お電話にてご連絡を差し上げる場合もございます。" . "\n"
            . "\n"
            . "以下、ご連絡いただいた内容です。" . "\n"
            . "誤りなどありましたら yoyaku@ginzarepro-dev.bizproject.biz までお問い合わせください。" . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご相談の診療：" . $Data->get('contact--appointment__ope') . "\n"
            . "お名前：" . $Data->get('contact--appointment__name') . "\n"
            . "ふりがな：" . $Data->get('contact--appointment__kana') . "\n"
            . "生年月日：" . $Data->get('contact--appointment__birthday') . "\n"
            . "お住まい：" . $Data->get('contact--appointment__pref') . "\n"
            . "メールアドレス：" . $Data->get('contact--appointment__mail') . "\n"
            . "電話番号：" . $Data->get('contact--appointment__tel') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご予約第1希望日：" . $Data->get('contact--appointment__date1') . "\n"
            . "第1希望のお時間帯：" . $Data->get('contact--appointment__time1') . "\n"
            . "\n"
            . "ご予約第2希望日：" . $Data->get('contact--appointment__date2') . "\n"
            . "第2希望のお時間帯：" . $Data->get('contact--appointment__time2') . "\n"
            . "\n"
            . "ご予約第3希望日：" . $Data->get('contact--appointment__date3') . "\n"
            . "第3希望のお時間帯：" . $Data->get('contact--appointment__time3') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "備考：" . $Data->get('contact--appointment__contents') . "\n";
    } else {
        $Mail->body = "この度はメールフォームよりご連絡いただき、ありがとうございます。" . "\n"
            . "ご予約状況を確認し、担当者より折り返しご連絡をいたします。" . "\n"
            . "今しばらくお待ちくださいませ。" . "\n"
            . "\n"
            . "------------------" . "\n"
            . "※まだ本メール受信時点では予約は確定しておりません。" . "\n"
            . "\n"
            . "担当者からの折り返し連絡および合意により予約確定となりますのでご注意ください。" . "\n"
            . "１日経っても返信がない場合は、お手数ではございますが、お電話などで再度ご連絡いただけますようお願い致します。" . "\n"
            . "------------------" . "\n"
            . "\n"
            . "なお、ご連絡内容やタイミングによりご返信が遅くなる場合もございます。" . "\n"
            . "また状況によっては直接お電話にてご連絡を差し上げる場合もございます。" . "\n"
            . "\n"
            . "以下、ご連絡いただいた内容です。" . "\n"
            . "誤りなどありましたら yoyaku@ginzarepro-dev.bizproject.biz までお問い合わせください。" . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご相談の診療：" . $Data->get('contact--appointment__ope') . "\n"
            . "お名前：" . $Data->get('contact--appointment__name') . "\n"
            . "ふりがな：" . $Data->get('contact--appointment__kana') . "\n"
            . "生年月日：" . $Data->get('contact--appointment__birthday') . "\n"
            . "お住まい：" . $Data->get('contact--appointment__pref') . "\n"
            . "メールアドレス：" . $Data->get('contact--appointment__mail') . "\n"
            . "電話番号：" . $Data->get('contact--appointment__tel') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご予約第1希望日：" . $Data->get('contact--appointment__date1') . "\n"
            . "第1希望のお時間帯：" . $Data->get('contact--appointment__time1') . "\n"
            . "\n"
            . "ご予約第2希望日：" . $Data->get('contact--appointment__date2') . "\n"
            . "第2希望のお時間帯：" . $Data->get('contact--appointment__time2') . "\n"
            . "\n"
            . "ご予約第3希望日：" . $Data->get('contact--appointment__date3') . "\n"
            . "第3希望のお時間帯：" . $Data->get('contact--appointment__time3') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            //. "初診同日手術を希望する：" . $Data->get('contact--appointment__operation') . "\n"
            . "備考：" . $Data->get('contact--appointment__contents') . "\n";
    }
    return $Mail;
}
add_filter('mwform_auto_mail_mw-wp-form-1054', 'my_mail1', 10, 3);

function my_mail2($Mail, $values, $Data)
{


    if ($Data->get('contact--appointment__ope') == '陰茎海綿体自己注射（ED治療薬無効）') {

        $Mail->body = "初診フォームより送信されました" . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご相談の診療：" . $Data->get('contact--appointment__ope') . "\n"
            . "お名前：" . $Data->get('contact--appointment__name') . "\n"
            . "ふりがな：" . $Data->get('contact--appointment__kana') . "\n"
            . "生年月日：" . $Data->get('contact--appointment__birthday') . "\n"
            . "お住まい：" . $Data->get('contact--appointment__pref') . "\n"
            . "メールアドレス：" . $Data->get('contact--appointment__mail') . "\n"
            . "電話番号：" . $Data->get('contact--appointment__tel') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご予約第1希望日：" . $Data->get('contact--appointment__date1') . "\n"
            . "第1希望のお時間帯：" . $Data->get('contact--appointment__time1') . "\n"
            . "\n"
            . "ご予約第2希望日：" . $Data->get('contact--appointment__date2') . "\n"
            . "第2希望のお時間帯：" . $Data->get('contact--appointment__time2') . "\n"
            . "\n"
            . "ご予約第3希望日：" . $Data->get('contact--appointment__date3') . "\n"
            . "第3希望のお時間帯：" . $Data->get('contact--appointment__time3') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "備考：" . $Data->get('contact--appointment__contents') . "\n";
    } else {
        $Mail->body = "初診フォームより送信されました" . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご相談の診療：" . $Data->get('contact--appointment__ope') . "\n"
            . "お名前：" . $Data->get('contact--appointment__name') . "\n"
            . "ふりがな：" . $Data->get('contact--appointment__kana') . "\n"
            . "生年月日：" . $Data->get('contact--appointment__birthday') . "\n"
            . "お住まい：" . $Data->get('contact--appointment__pref') . "\n"
            . "メールアドレス：" . $Data->get('contact--appointment__mail') . "\n"
            . "電話番号：" . $Data->get('contact--appointment__tel') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            . "ご予約第1希望日：" . $Data->get('contact--appointment__date1') . "\n"
            . "第1希望のお時間帯：" . $Data->get('contact--appointment__time1') . "\n"
            . "\n"
            . "ご予約第2希望日：" . $Data->get('contact--appointment__date2') . "\n"
            . "第2希望のお時間帯：" . $Data->get('contact--appointment__time2') . "\n"
            . "\n"
            . "ご予約第3希望日：" . $Data->get('contact--appointment__date3') . "\n"
            . "第3希望のお時間帯：" . $Data->get('contact--appointment__time3') . "\n"
            . "\n"
            . "----------" . "\n"
            . "\n"
            //. "初診同日手術を希望する：" . $Data->get('contact--appointment__operation') . "\n"
            . "備考：" . $Data->get('contact--appointment__contents') . "\n";
    }
    return $Mail;
}
add_filter('mwform_admin_mail_mw-wp-form-1054', 'my_mail2', 10, 3);


// X-Robots-Tagを利用して feed に noindex を付与する
add_action('template_redirect', function () {
    if (is_feed() && headers_sent() === false) {
        header('X-Robots-Tag: noindex, follow', true);
    }
});

// コラムカテゴリーの追加
function add_post_type()
{
    // コラムカテゴリー
    register_taxonomy(
        'column_category',
        'post',
        array(
            'label'         => 'コラムカテゴリー',
            'hierarchical'     => true,
            'rewrite'         => true
        )
    );
}
add_action('init', 'add_post_type');

/* 管理画面での表示項目追加 */
function add_custom_column($defaults)
{
    $defaults['column_category'] = 'コラムカテゴリー';
    return $defaults;
}
add_filter('manage_post_posts_columns', 'add_custom_column');

function add_custom_column_id($column_name, $id)
{
    $terms = get_the_terms($id, $column_name);
    if ($terms && !is_wp_error($terms)) {
        $post_cat_links = array();
        foreach ($terms as $term) {
            $post_cat_links[] = $term->name;
        }
        echo join(", ", $post_cat_links);
    }
}
add_action('manage_post_posts_custom_column', 'add_custom_column_id', 10, 2);

//MW WP FORM でLPページからのリンクにselectの値をいれる
function my_mwform_value($value, $name)
{
    if ($name === 'contact--appointment__ope' && !empty($_GET['apmnt_select']) && !is_array($_GET['apmnt_select'])) {
        return $_GET['apmnt_select'];
    }
    return $value;
}
add_filter('mwform_value_mw-wp-form-1054', 'my_mwform_value', 10, 2);

// disable for posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// disable for post types
add_filter('use_block_editor_for_post_type', '__return_false', 10);


/* 症例紹介 カスタム投稿 */
function custom_post_type_test3()
{
    $labels = array(
        'name' => _x('症例紹介一覧', 'post type general name'),
        'singular_name' => _x('症例紹介', 'post type singular name'),
        'add_new' => _x('新しく投稿を追加する', 'casescat'),
        'add_new_news' => __('新しく投稿を追加する'),
        'edit_news' => __('投稿を編集'),
        'new_news' => __('新しい投稿'),
        'view_news' => __('投稿を表示'),
        'search_newss' => __('投稿を探す'),
        'not_found' =>  __('投稿はありません'),
        'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
        'parent_news_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'query_var' => true,
        'hierarchical' => false,
        'menu_position' => 24,
        'supports' => array('title', 'revisions'),
        'has_archive' => false,
    );
    //カスタム投稿タイプを登録
    register_post_type('cases', $args);
    /*
    //カテゴリータイプ
    $args1 = array(
        'label' => 'カテゴリー',
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true
    );
    register_taxonomy('cases_category','cases',$args1);
*/
}
//アクションをフック function custom_post_type_test3() を呼び出す
add_action('init', 'custom_post_type_test3');
/*
function add_custom_cases2( $defaults ) {
 $defaults['cases_category'] = 'カテゴリー';
 return $defaults;
}
add_filter('manage_cases_posts_casess', 'add_custom_cases2');
 
function add_custom_cases_id2($cases_name, $id) {
 if( $cases_name == 'cases_category' ) {
 echo get_the_term_list($id, 'cases_category', '', ', ');
 }
}
add_action('manage_cases_posts_custom_cases', 'add_custom_cases_id2', 10, 2);
*/

/* コメント非表示 */
add_action('admin_menu', 'remove_menus');
function remove_menus()
{
    remove_menu_page('edit-comments.php'); //コメントメニュー
}
add_shortcode('ctabtn', 'btn_cta');
function btn_cta()
{
    $output = '<div class="cta cta-link2">
    <p class="link__ttl">お問い合わせ・ご予約はこちら</p>
    <p class="text__center">ご不明点や不安な点は<br>メールフォームからご相談ください。</p>
    <ul class="link">        
        <li><a href="' . home_url() . '/lva/appointment-first/" class="link__item" target="_blank" rel="noopener"><p class="link__item__text link__item__text--reservation">初診のご予約</p><div class="link__item__img--reservation"></div><p class="link__item__lead">初めてご来院いただく方はこちら</p></a></li>
        <li><a href="' . home_url() . '/contact/" class="link__item"><p class="link__item__text link__item__text--contact">お問い合わせ</p><div class="link__item__img--contact"></div><p class="link__item__lead">当院へのお問い合わせはこちら</p></a>
        </li>
    </ul>
    <p class="address"><span>〒104-0061 </span>東京都中央区銀座2-8-19 FPG links GINZA 6F</p>
</div>';
    return $output;
}
// 自動生成されるページをリダイクレト
// https://haniwaman.com/wordpress-page-delete/#index_id5
/*
function my_template_redirect() {

	if ( is_author() || is_date() ) {
		//TOPページへリダイレクト
		nocache_headers();
		wp_safe_redirect( home_url() );
		exit;

	}elseif ( is_category('column') ) {
		//TOPページへリダイレクト
		nocache_headers();
		wp_safe_redirect( home_url('/column/') );
		exit;

	}
}
add_action( 'template_redirect', 'my_template_redirect' );
*/

add_shortcode('btnlist', 'list_btn');
function list_btn()
{
    $output = '		<div class="contact__link btn_list">
          <a href="' . home_url() . '/contact/appointment-first/" class="contact__link__item" target="_blank">
            初診・手術のご予約
          </a>
          <!--<a href="' . home_url() . '/faq/" class="contact__link__item">
            よくある質問
          </a>-->
        </div>';
    return $output;
}

/* 手術記録 カスタム投稿 */
function custom_post_type_test4()
{
    $labels = array(
        'name' => _x('手術記録一覧', 'post type general name'),
        'singular_name' => _x('手術記録', 'post type singular name'),
        'add_new' => _x('新しく投稿を追加する', 'casescat'),
        'add_new_news' => __('新しく投稿を追加する'),
        'edit_news' => __('投稿を編集'),
        'new_news' => __('新しい投稿'),
        'view_news' => __('投稿を表示'),
        'search_newss' => __('投稿を探す'),
        'not_found' =>  __('投稿はありません'),
        'not_found_in_trash' => __('ゴミ箱に投稿はありません'),
        'parent_news_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'show_ui' => true,
        'query_var' => true,
        'hierarchical' => false,
        'menu_position' => 24,
        'supports' => array('title', 'revisions'),
        'has_archive' => true,
    );
    //カスタム投稿タイプを登録
    register_post_type('record', $args);
    /*
    //カテゴリータイプ
    $args1 = array(
        'label' => 'カテゴリー',
        'public' => true,
        'show_ui' => true,
        'hierarchical' => true
    );
    register_taxonomy('record_category','record',$args1);
*/
}
//アクションをフック function custom_post_type_test4() を呼び出す
add_action('init', 'custom_post_type_test4');


//ショートコード 症例写真
add_shortcode('casephoto', 'liset_case_photos');
function liset_case_photos()
{
    $output = '<div class="case-slider">' . PHP_EOL;
    $args = array(
        'post_type' => 'cases',
        'posts_per_page' => 5,
        'status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            $case_txt_1 = get_field('case_txt_1');
            $case_txt_2 = get_field('case_txt_2');
            $case_txt_3 = get_field('case_txt_3');
            $case_txt_4 = get_field('case_txt_4');
            $case_img_1 = get_field('thumbnail_01');
            $case_img_2 = get_field('thumbnail_02');
            if ($image_01) {
                $image_01 = wp_get_attachment_image_src($image_01, 'large');
                $thumbnail_01 = $image_01[0];
            }
            $output .= '<div class="item">' . PHP_EOL;
            $output .= '<div class="contents__text">' . PHP_EOL;
            $output .= '<p class="contents__heading">' . PHP_EOL;
            $output .= '<span class="contents__heading--text">' . get_the_title() . '</span>' . PHP_EOL;
            $output .= '</p>' . PHP_EOL;
            global $cfs;
            $fields = $cfs->get('case_photos');
            if (!empty($fields)): $num = 0;
                $output .= '<div class="case_photos">';
                foreach ($fields as $field) : $num++;
                    $img_id_before = $field['case_photos_before'];
                    $img_id_after = $field['case_photos_after'];

                    if (!empty($img_id_before)) {
                        $img_data_before = wp_get_attachment_image_src($img_id_before, 'large');
                        $img_url_before = $img_data_before[0];
                        $img_width_before = $img_data_before[1] / 2;
                        $img_height_before = $img_data_before[2] / 2;
                    }

                    if (!empty($img_id_after)) {
                        $img_data_after = wp_get_attachment_image_src($img_id_after, 'large');
                        $img_url_after = $img_data_after[0];
                        $img_width_after = $img_data_after[1] / 2;
                        $img_height_after = $img_data_after[2] / 2;
                    }

                    $case_photos_before_txt = $field['case_photos_before_txt'];
                    if (empty($case_photos_before_txt)) {
                        $case_photos_before_txt =  get_the_title() . ' 術前写真 ' . $num;
                    }

                    $case_photos_after_txt = $field['case_photos_after_txt'];
                    if (empty($case_photos_after_txt)) {
                        $case_photos_after_txt =  get_the_title() . ' 術後写真 ' . $num;
                    }
                    $output .= '<div class="ba_photo-list list-' . $num . '">' . PHP_EOL;
                    $output .= '<div class="ba_photo-box">' . PHP_EOL;
                    $output .= '<figure><img src="' . $img_url_before . '" width="' . $img_width_before . '" height="' . $img_height_before . '" alt="' . $case_photos_before_txt . '"></figure>' . PHP_EOL;
                    $output .= '<figure><img src="' . $img_url_after . '" width="' . $img_width_after . '" height="' . $img_height_after . '" alt="' . $case_photos_after_txt . '"></figure>' . PHP_EOL;
                    $output .= '</div>' . PHP_EOL;
                    $output .= '</div>' . PHP_EOL;
                    break;
                endforeach;
                $output .= '</div>' . PHP_EOL;
            endif;
            if (!empty($case_txt_1 || $case_txt_2 || $case_txt_3 || $case_txt_4)) {
                $output .= '<table class="tbl_case">' . PHP_EOL;

                if (!empty($case_txt_1)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>治療内容</th>' . PHP_EOL;
                    $output .= '<td>' . $case_txt_1 . '</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                if (!empty($case_txt_2)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>手術回数</th>' . PHP_EOL;
                    $output .= '<td>' . $case_txt_2 . '</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                if (!empty($case_txt_3)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>費用</th>' . PHP_EOL;
                    $output .= '<td>' . $case_txt_3 . '</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }
                $output .= '</table>' . PHP_EOL;

                if (!empty($case_txt_4)) {
                    $output .= '<p class="att_txt_case">' . PHP_EOL;
                    $output .= '<span>※リスク・副作用：</span>' . PHP_EOL;
                    $output .= $case_txt_4;
                    $output .= '</p>' . PHP_EOL;
                }
            }

            $output .= '<div class="more-btn_wm"><a href="' . home_url() . '/case/#case_' . get_the_ID() . '" rel="Anker">症例写真詳細</a></div>' . PHP_EOL;
            $output .= '</div>' . PHP_EOL;

            $output .= '</div>' . PHP_EOL;
        endwhile;
    endif;
    wp_reset_query();
    $output .= '</div>' . PHP_EOL;
    return $output;
}
//ショートコード 手術記録
add_shortcode('record_display', 'liset_record_display');
function liset_record_display()
{
    $output = '';
    $paged = get_query_var('paged', 1);
    $args = array(
        'post_type' => 'record',
        'posts_per_page' => 1,
        'status' => 'publish',
        'paged' => $paged,
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            /*
                $record_nagao_1 = get_field('record_nagao_1');
                $record_nagao_2 = get_field('record_nagao_2');
                $record_nagao_3 = get_field('record_nagao_3');
                $record_nagao_4 = get_field('record_nagao_4');
                $record_nagao_5 = get_field('record_nagao_5');
                $record_nagao_6 = get_field('record_nagao_6');
                $record_nagao_7 = get_field('record_nagao_7');
                $record_nagao_8 = get_field('record_nagao_8');
                $record_nagao_9 = get_field('record_nagao_9');
                $record_nagao_10 = get_field('record_nagao_10');
                */
            $record_other_1 = get_field('record_other_1');
            $record_other_2 = get_field('record_other_2');
            $record_other_3 = get_field('record_other_3');
            $record_other_4 = get_field('record_other_4');
            $record_other_5 = get_field('record_other_5');
            $record_other_6 = get_field('record_other_6');
            $record_other_6_check = get_field('record_other_6_check');
            $record_other_7 = get_field('record_other_7');
            $record_other_7_check = get_field('record_other_7_check');
            $record_other_8 = get_field('record_other_8');
            $record_other_8_check = get_field('record_other_8_check');
            $record_other_9 = get_field('record_other_9');
            $record_other_9_check = get_field('record_other_9_check');
            $record_other_10 = get_field('record_other_10');
            $record_other_10_check = get_field('record_other_10_check');

            $case_img_1 = get_field('thumbnail_01');
            $case_img_2 = get_field('thumbnail_02');
            if ($image_01) {
                $image_01 = wp_get_attachment_image_src($image_01, 'large');
                $thumbnail_01 = $image_01[0];
            }
            //$output .= '<div class="item">'.PHP_EOL;
            $output .= '<div class="contents__text">' . PHP_EOL;
            $output .= '<div class="js-tab">' . PHP_EOL;
            $output .= '<div class="record_tab">' . PHP_EOL;
            $output .= '<ul class="clearfix">' . PHP_EOL;
            $output .= '<li class="nagao"><a href="#record_content01" class="hover js-tab-trigger active">日帰り<br class="sp">顕微鏡下精索静脈瘤手術<span>・ナガオメソッド</span></a></li>' . PHP_EOL;
            $output .= '<li class="other"><a href="#record_content02" class="hover js-tab-trigger">一括結紮法<span>（一般的に行われている<br class="sp">手術法）</span></a></li>' . PHP_EOL;
            $output .= '</ul>' . PHP_EOL;
            $output .= '</div><!-- record_tab -->' . PHP_EOL;
            $output .= '<div class="record_content-wrap">' . PHP_EOL;
            $output .= '<section class="js-tab-content active" id="record_content01">' . PHP_EOL;
            global $cfs;
            $record_imglist_nagao = $cfs->get('record_imglist_nagao');
            if (!empty($record_imglist_nagao)): $num = 0;
                $output .= '<div class="case_photos record new">';
                foreach ($record_imglist_nagao as $field) : $num++;
                    $record_img_nagao = $field['record_img_nagao'];

                    if (!empty($record_img_nagao)) {
                        $img_data_nagao = wp_get_attachment_image_src($record_img_nagao, 'large');
                        $img_url_nagao = $img_data_nagao[0];
                        $img_width_nagao = $img_data_nagao[1] / 2;
                        $img_height_nagao = $img_data_nagao[2] / 2;
                    }
                    //cfs 
                    $record_nagao_1 = $field['record_nagao_1_cfs'];
                    $record_nagao_2 = $field['record_nagao_2_cfs'];
                    $record_nagao_3 = $field['record_nagao_3_cfs'];
                    $record_nagao_4 = $field['record_nagao_4_cfs'];
                    $record_nagao_5 = $field['record_nagao_5_cfs'];
                    $record_nagao_6 = $field['record_nagao_6_cfs'];
                    $record_nagao_7 = $field['record_nagao_7_cfs'];
                    $record_nagao_8 = $field['record_nagao_8_cfs'];
                    $record_nagao_9 = $field['record_nagao_9_cfs'];
                    $record_nagao_10 = $field['record_nagao_10_cfs'];

                    $output .= '<div class="record_photo_slider list-' . $num . '">' . PHP_EOL;
                    $output .= '<div class="flex-box">' . PHP_EOL;
                    $output .= '<div class="figure">' . PHP_EOL;
                    $output .= '<p class="ttl">手術記録</p>' . PHP_EOL;
                    $output .= '<figure><img src="' . $img_url_nagao . '" width="' . $img_width_nagao . '" height="' . $img_height_nagao . '" alt="手術記録"></figure>' . PHP_EOL;
                    $output .= '</div>' . PHP_EOL;

                    //ナガオメソッド 表
                    if (!empty($record_nagao_1 || $record_nagao_2 || $record_nagao_3 || $record_nagao_4 || $record_nagao_5 || $record_nagao_6 || $record_nagao_7 || $record_nagao_8 || $record_nagao_9 || $record_nagao_10)) {
                        $output .= '<div class="tbl_case-wrap">' . PHP_EOL;
                        $output .= '<p class="ttl">解説</p>' . PHP_EOL;
                        $output .= '<table class="tbl_case record new">' . PHP_EOL;

                        if (!empty($record_nagao_1 || $record_nagao_2 || $record_nagao_3 || $record_nagao_4 || $record_nagao_5)) {
                            $rowspan_nagao = 1;
                            if (!empty($record_nagao_1)) {
                                $rowspan_nagao++;
                            }
                            if (!empty($record_nagao_2)) {
                                $rowspan_nagao++;
                            }
                            if (!empty($record_nagao_3)) {
                                $rowspan_nagao++;
                            }
                            if (!empty($record_nagao_4)) {
                                $rowspan_nagao++;
                            }
                            if (!empty($record_nagao_5)) {
                                $rowspan_nagao++;
                            }

                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th class="th01 clr_01" rowspan="' . $rowspan_nagao . '">温存</th>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_1)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>逆流静脈</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_1 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_2)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>精管</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_2 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_3)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>動脈</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_3 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_4)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>リンパ管</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_4 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_5)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>神経</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_5 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_6 || $record_nagao_7 || $record_nagao_8 || $record_nagao_9 || $record_nagao_10)) {
                            $rowspan_nagao2 = 1;
                            if (!empty($record_nagao_6)) {
                                $rowspan_nagao2++;
                            }
                            if (!empty($record_nagao_7)) {
                                $rowspan_nagao2++;
                            }
                            if (!empty($record_nagao_8)) {
                                $rowspan_nagao2++;
                            }
                            if (!empty($record_nagao_9)) {
                                $rowspan_nagao2++;
                            }
                            if (!empty($record_nagao_10)) {
                                $rowspan_nagao2++;
                            }

                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th class="th01 clr_02" rowspan="' . $rowspan_nagao2 . '">結紮</th>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_8)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>動脈</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_8 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_9)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>リンパ管</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_9 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_10)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>神経</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_10 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_6)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>逆流静脈</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_6 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        if (!empty($record_nagao_7)) {
                            $output .= '<tr>' . PHP_EOL;
                            $output .= '<th>精管</th>' . PHP_EOL;
                            $output .= '<td>' . $record_nagao_7 . '本</td>' . PHP_EOL;
                            $output .= '</tr>' . PHP_EOL;
                        }

                        $output .= '</table>' . PHP_EOL;
                        $output .= '</div>' . PHP_EOL;
                    }
                    $output .= '</div><!-- /.flex-box -->' . PHP_EOL;
                    $output .= '</div>' . PHP_EOL;
                endforeach;
                $output .= '</div>' . PHP_EOL;
            endif;

            $output .= '</section>' . PHP_EOL;
            $output .= '<section class="js-tab-content" id="record_content02">' . PHP_EOL;
            $output .= '<div class="flex-box">' . PHP_EOL;

            $record_imglist_other = $cfs->get('record_imglist_other');
            if (!empty($record_imglist_other)): $num = 0;
                $output .= '<div class="case_photos record">';
                foreach ($record_imglist_other as $field) : $num++;
                    $record_img_other = $field['record_img_other'];

                    if (!empty($record_img_other)) {
                        $img_data_other = wp_get_attachment_image_src($record_img_other, 'large');
                        $img_url_other = $img_data_other[0];
                        $img_width_other = $img_data_other[1] / 2;
                        $img_height_other = $img_data_other[2] / 2;
                    }


                    $output .= '<div class="record_photo_slider list-' . $num . '">' . PHP_EOL;
                    $output .= '<p class="ttl">手術記録</p>' . PHP_EOL;
                    $output .= '<figure><img src="' . $img_url_other . '" width="' . $img_width_other . '" height="' . $img_height_other . '" alt="手術記録"></figure>' . PHP_EOL;
                    $output .= '</div>' . PHP_EOL;
                endforeach;
                $output .= '</div>' . PHP_EOL;
            endif;
            if (!empty($record_other_1 || $record_other_2 || $record_other_3 || $record_other_4 || $record_other_5 || $record_other_6 || $record_other_7 || $record_other_8 || $record_other_9 || $record_other_10)) {
                $output .= '<div class="tbl_case-wrap">' . PHP_EOL;
                $output .= '<p class="ttl">解説</p>' . PHP_EOL;

                $rowspan_other2 = 1;
                $rowspan_otherx = 0;
                if (!empty($record_other_6)) {
                    $rowspan_other2++;
                }
                if (!empty($record_other_7)) {
                    $rowspan_other2++;
                }
                if (!empty($record_other_8)) {
                    $rowspan_other2++;
                    $rowspan_otherx++;
                }
                if (!empty($record_other_9)) {
                    $rowspan_other2++;
                    $rowspan_otherx++;
                }
                if (!empty($record_other_10)) {
                    $rowspan_other2++;
                    $rowspan_otherx++;
                }

                $output .= '<div class="tbl-inner">' . PHP_EOL;

                $output .= '<table class="tbl_case record">' . PHP_EOL;

                if (!empty($record_other_1 || $record_other_2 || $record_other_3 || $record_other_4 || $record_other_5)) {
                    $rowspan_other = 1;
                    if (!empty($record_other_1)) {
                        $rowspan_other++;
                    }
                    if (!empty($record_other_2)) {
                        $rowspan_other++;
                    }
                    if (!empty($record_other_3)) {
                        $rowspan_other++;
                    }
                    if (!empty($record_other_4)) {
                        $rowspan_other++;
                    }
                    if (!empty($record_other_5)) {
                        $rowspan_other++;
                    }

                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th class="th01 clr_01" rowspan="' . $rowspan_other . '">温存</th>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }


                if (!empty($record_other_2)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>精管</th>' . PHP_EOL;
                    $output .= '<td>' . $record_other_2 . '本</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }
                if (!empty($record_other_3)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>動脈</th>' . PHP_EOL;
                    $output .= '<td>' . $record_other_3 . '本</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                if (!empty($record_other_4)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>リンパ管</th>' . PHP_EOL;
                    $output .= '<td>' . $record_other_4 . '本</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                if (!empty($record_other_5)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>神経</th>' . PHP_EOL;
                    $output .= '<td>' . $record_other_5 . '本</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                if (!empty($record_other_1)) {
                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th>逆流静脈</th>' . PHP_EOL;
                    $output .= '<td>' . $record_other_1 . '本</td>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }
                $output .= '</table>' . PHP_EOL;
                $output .= '</div>' . PHP_EOL;
                $output .= '<div class="tbl-inner">' . PHP_EOL;

                $output .= '<table class="tbl_case record">' . PHP_EOL;


                if (!empty($record_other_6 || $record_other_7 || $record_other_8 || $record_other_9 || $record_other_10)) {

                    $output .= '<tr>' . PHP_EOL;
                    $output .= '<th class="th01 clr_02" rowspan="' . $rowspan_other2 . '">結紮';
                    $output .= '</th>' . PHP_EOL;
                    $output .= '</tr>' . PHP_EOL;
                }

                //損傷リスク調整
                $record_other_6_display = 1;
                $record_other_7_display = 1;
                $record_other_8_display = 1;
                $record_other_9_display = 1;
                $record_other_10_display = 1;

                //チェックの入っているものを表示
                if ($record_other_6_check || $record_other_7_check || $record_other_8_check || $record_other_9_check || $record_other_10_check) {
                    $record_other_display = 0;

                    if (!empty($record_other_10_check && $record_other_10)) {
                        $output .= '<tr class="clr_red">' . PHP_EOL;
                        $output .= '<th>神経</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_10 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                        $record_other_10_display = 0;
                        $record_other_display++;
                    }

                    if (!empty($record_other_8_check && $record_other_8)) {
                        $output .= '<tr class="clr_red">' . PHP_EOL;
                        $output .= '<th>動脈</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_8 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                        $record_other_8_display = 0;
                        $record_other_display++;
                    }

                    if (!empty($record_other_9_check && $record_other_9)) {
                        $output .= '<tr class="clr_red">' . PHP_EOL;
                        $output .= '<th>リンパ管</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_9 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                        $record_other_9_display = 0;
                        $record_other_display++;
                    }

                    if (!empty($record_other_7_check && $record_other_7)) {
                        $output .= '<tr class="clr_red">' . PHP_EOL;
                        $output .= '<th>精管</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_7 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                        $record_other_7_display = 0;
                        $record_other_display++;
                    }

                    if (!empty($record_other_6_check && $record_other_6)) {
                        $output .= '<tr class="clr_red">' . PHP_EOL;
                        $output .= '<th>逆流静脈</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_6 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                        $record_other_6_display = 0;
                        $record_other_display++;
                    }
                }


                //チェックの入っていないものを表示
                if ($record_other_6_display || $record_other_7_display || $record_other_9_display || $record_other_8_display || $record_other_10_display) {


                    if (!empty($record_other_10_display && $record_other_10)) {
                        $output .= '<tr>' . PHP_EOL;
                        $output .= '<th>神経</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_10 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                    }

                    if (!empty($record_other_8_display && $record_other_8)) {
                        $output .= '<tr>' . PHP_EOL;
                        $output .= '<th>動脈</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_8 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                    }

                    if (!empty($record_other_9_display && $record_other_9)) {
                        $output .= '<tr>' . PHP_EOL;
                        $output .= '<th>リンパ管</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_9 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                    }

                    if (!empty($record_other_7_display && $record_other_7)) {
                        $output .= '<tr>' . PHP_EOL;
                        $output .= '<th>精管</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_7 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                    }

                    if (!empty($record_other_6_display && $record_other_6)) {
                        $output .= '<tr>' . PHP_EOL;
                        $output .= '<th>逆流静脈</th>' . PHP_EOL;
                        $output .= '<td>' . $record_other_6 . '本</td>' . PHP_EOL;
                        $output .= '</tr>' . PHP_EOL;
                    }
                }

                $output .= '</table>' . PHP_EOL;

                if (!empty($rowspan_otherx)) {
                    $rowspan_otherx = $rowspan_otherx;
                    $output .= '<div class="att-txt pc-' . $record_other_display . '">損傷</div>';
                }
                $output .= '</div>' . PHP_EOL;
                $output .= '</div>' . PHP_EOL;
            }
            $output .= '</div><!-- /.flex-box -->' . PHP_EOL;
            $output .= '</section>' . PHP_EOL;
            $output .= '</div><!-- /.js-tab-->' . PHP_EOL;
            $output .= '</div>' . PHP_EOL;
            $output .= '</div>' . PHP_EOL;
        endwhile;
    endif;
    wp_reset_query();
    return $output;
}
/* 執筆医師 doctor */

add_action('init', 'add_post_type_doctor', 0);
function add_post_type_doctor()
{
    register_post_type(
        'doctor', /* カスタム投稿タイプのスラッグ */
        array(
            'labels' => array(
                'name' => '執筆医師',
            ),
            'public' => false,
            'show_ui' => true,
            'query_var' => true,
            'hierarchical' => false,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions')  /* いろんな機能を有効化 */
        )
    );
}

//テンプレートを投稿画面から呼び出せるショートコード
//参考：https://www.sensitivity.jp/wordpress/%E3%83%86%E3%83%B3%E3%83%97%E3%83%AC%E3%83%BC%E3%83%88%E3%83%91%E3%83%BC%E3%83%84%E3%82%92%E6%8A%95%E7%A8%BF%E7%94%BB%E9%9D%A2%E3%81%A7%E5%91%BC%E3%81%B3%E5%87%BA%E3%81%99%E6%96%B9%E6%B3%95/
//[add_part temp='templates/[呼び出したいファイル名]']　※投稿画面への記述
add_shortcode('add_part', function ($attr) {
    ob_start();
    get_template_part($attr['temp']);
    return ob_get_clean();
});

//ez-toc
$my_toc_no = 0;
function toc_anchor_change($return, $heading)
{
    global $my_toc_no;
    $my_toc_no = $my_toc_no + 1;
    return "ez-toc-" . $my_toc_no;
}
add_filter('ez_toc_url_anchor_target', 'toc_anchor_change', 10, 2);

//wpのverを削除
remove_action('wp_head', 'wp_generator');




/**CTA Short Code**/
function custom_cta_link_shortcode($atts)
{
    $atts = shortcode_atts(
        array(
            'url' => '',     // URL引数
            'text' => '',    // 文言引数
        ),
        $atts,
        'cta_link'  // ショートコード名
    );

    $url = esc_url($atts['url']);
    $text = esc_html($atts['text']);
    // 出力
    $output = '<div class="cta-link">';
    $output .= '<a href="' . $url . '" target="_blank" rel="noopener noreferrer">' . $text . '</a>';
    $output .= '</div>';

    return $output;
}
add_shortcode('cta_link', 'custom_cta_link_shortcode');

/* ショートコード書き方
 * [cta_link url="URL" text="文言"]
 * /
/**CTA Short Code END**/

//参考：https://rilaks.jp/blog/wordpress-insert-html/#add_filterthe_content
function insert_html_before_first_h2($content)
{
    global $post;
    $page_slugs_m = array('varicocele-self-check-3', 'varicocele-leave', 'varicocele-pain-characteristics', 'varicocele-symptoms', 'varicocele-cause');
    $page_slugs_f = array('infertility-sign', 'good-quality-sperm', 'semen-analysis', 'infertile-male-semen', 'semen-volume-increase');
    if (is_object_in_term($post->ID, 'column_category', 'infertility') || is_single($page_slugs_m) || is_single($page_slugs_f)) {

        // 挿入したいHTML
        $html_to_insert = '';
        // if(is_single('microinsemination-fertilization')){
        //   		$html_to_insert .= 'test0';
        //   	}else{
        //   	$html_to_insert .= 'test1';
        //   	}
        $html_to_insert .= '<dl class="infertility_box">';
        $html_to_insert .= '    <dt>男性不妊・精索静脈瘤にお困りのかたへ</dt>';
        $html_to_insert .= '    <dd>';
        $html_to_insert .= '        <div class="flex-box">';
        $html_to_insert .= '            <figure><img src="' . esc_url(get_template_directory_uri()) . '/img/img_infertility.jpg?ver=0809" alt="男性不妊の４０％精索静脈瘤が原因"></figure>';
        $html_to_insert .= '            <div class="box">';
        $html_to_insert .= '                <p>男性不妊の４０％にある精索静脈瘤は、精巣やその上の精索部（精管、血管、神経、リンパ管などを覆う膜）に静脈瘤（じょうみゃくりゅう・静脈の拡張）が認められる症状のことを指します。一般男性の15％に認められ、男性不妊症患者の40％がその疑いであるとされています。</p>';
        $html_to_insert .= '                <div class="btn btn-01">';
        if (is_single($page_slugs_m)) {
           // $html_to_insert .= '                    <a href="https://liff.line.me/2006158059-pzVG0Rqy/landing?follow=%40686zvmsx&lp=Ugo2Tm&liff_id=2006158059-pzVG0Rqy" target="_blank">LINEで精索静脈瘤リスク度診断</a>';
            $html_to_insert .= '                    <a href="' . home_url('/contact/appointment-first/') . '">初診予約</a>';
        } elseif (is_single($page_slugs_f)) {
            //$html_to_insert .= '                    <a href="https://liff.line.me/2006158059-pzVG0Rqy/landing?follow=%40686zvmsx&lp=Ugo2Tm&liff_id=2006158059-pzVG0Rqy" target="_blank">LINEで精索静脈瘤リスク度診断</a>';
            $html_to_insert .= '                    <a href="' . home_url('/contact/appointment-first/') . '">初診予約</a>';
        }else {
            $html_to_insert .= '                    <a href="' . home_url('/column/reproductive-medical-selfcheck/') . '">男性不妊セルフチェックを行う</a>';
        }
        $html_to_insert .= '                </div>';
        $html_to_insert .= '                <div class="btn btn-02">';
        $html_to_insert .= '                    <a href="' . home_url('/sinryo/varicocele/') . '">精索静脈瘤手術の詳細はこちら</a>';
        $html_to_insert .= '                </div>';
        $html_to_insert .= '            </div>';
        $html_to_insert .= '        </div>';
        $html_to_insert .= '    </dd>';
        $html_to_insert .= '</dl>';
        // 最初のh2タグを見つける
        $first_h2_pos = strpos($content, '<h2');
        // h2タグがあれば、指定したHTMLを挿入する
        if ($first_h2_pos !== false) {
            $content = substr_replace($content, $html_to_insert, $first_h2_pos, 0);
        }
    }
    return $content;
}
add_filter('the_content', 'insert_html_before_first_h2');

//アンパサンド記号（&）を含むURLを入力するとHTMLエンティティ（&#038;）に自動変換されてしまう問題を解消
add_filter('run_wptexturize', '__return_false');
