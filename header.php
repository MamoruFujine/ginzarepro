<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
<?php
    $path = $_SERVER['REQUEST_URI'];  //20230904 add
    if (is_home() || is_front_page()) :
        $pageTitle = '';
        $pageDesc = '精索静脈瘤などの男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて、精索静脈瘤をはじめとする様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
        $pageKeyword = '';
    elseif (is_tax("column_category")) :
        $current_term = single_term_title("", false);
        $pageTitle = '基礎知識 ' . $current_term . 'について | ';
        $pageDesc = '基礎知識 ' . $current_term . 'についてのページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
        $pageKeyword = '';
    elseif (is_category('column')) : //20230904 add
        $pageTitle =  'ページが見つかりません | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    elseif (strpos($path, '/diagnosis/') !== false) : //20230904 add
        $pageTitle =  'ページが見つかりません | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    elseif (is_date()) : //20230904 add
        $pageTitle =  'ページが見つかりません | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    elseif (is_page()) :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
        $pageKeyword = '';
    elseif (is_single()) :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    elseif (is_search()) :
        $pageTitle =  '検索結果 | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    elseif (is_404()) :
        $pageTitle =  'ページが見つかりません | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」です。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。不妊治療のみならず、難治性EDや生殖医療も実施しておりますので、お悩みの方はご来院ください。';
    else :
        $pageTitle = get_the_title() . ' | ';
        $pageDesc = '男性不妊手術専門クリニック「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    endif;
    $http = is_ssl() ? 'https' : 'http' . '://';
    $url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    ?>
    <?php if (is_single('2695')) : ?>
    <title><?php echo $pageTitle = get_the_title("2695") . ' | ' ?>Ginza Reproductive Surgery</title>
    <?php elseif (is_single("2562")) : ?>
    <title><?php echo $pageTitle = get_the_title("2562") . ' | ' ?>Ginza Reproductive Surgery</title>
    <?php elseif (is_single("71")) : ?>
		<title>精索静脈瘤とは？症状や検査方法、治療・手術方法を解説 (Varicocele)｜男性不妊治療・手術は銀座リプロ外科</title>
		<?php elseif (is_page('kanagawa')) : ?>
		<!-- ME様依頼に基づきタイトルとメタディスクリプションを設定 -->
		<title>横浜・川崎で精索静脈瘤手術なら名医と評判の銀座リプロ外科</title>
		<meta name="description" content="神奈川県横浜市・川崎市周辺で精索静脈瘤手術・男性不妊治療検診・治療なら東邦大学の名医が執刀する銀座リプロ外科まで。毎年年間800件以上の手術実績のある安心・安全な男性不妊専門病院です。">
    <?php else : ?>
    <?php if (is_home() || is_front_page()) :  ?>
    <title>東京の男性不妊症治療クリニック 銀座リプロ外科</title>
    <?php else : ?>
    <title><?php if (!is_home() || !is_front_page() || !is_tag()) : ?><?php echo $pageTitle ?><?php endif; ?>男性不妊治療は銀座リプロ外科</title>
    <?php endif; ?>
    <?php endif; ?>
    <meta name="keywords" content="精索静脈瘤,男性不妊症,銀座リプロ外科,ED治療" />
    <?php if (is_single('71')) : ?>
    <meta name="description" content="精索静脈瘤（せいさくじょうみゃくりゅう）とは、男性不妊の原因の 1 つです。ここでは、原因や手術方法、予防方法などをご紹介しています。銀座リプロ外科では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。">
    <?php elseif (is_single('951')) : ?>
    <meta name="description"
        content="ED薬でも勃起しなかった場合、海綿体・陰茎注射（ICI治療）が効果的です。当院ではプロスタグランジンE1による陰茎注射を自己負担治療で行っております。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。">
    <?php elseif (is_single('69')) : ?>
    <meta name="description"
        content="不妊の原因は女性だけでなく、男性に問題がある場合もあります。男性不妊症は、造精機能障害や生活習慣などさまざまな原因が考えられます。そのため、受診により原因を探り適切な治療方法を選びましょう。">
    <?php elseif (is_single('1830')) : ?>
    <meta name="description"
        content="精索静脈瘤とは、精巣やその上の精索部に静脈瘤ができる症状を指します。精索静脈瘤は成人男性のみいならず、子供でも発生することがあります。遺伝や特定の原因はありませんが、精索静脈瘤は進行性の病気のため、早期診断と早期治療が重要です。">
    <?php elseif (is_single('2791')) : ?>
    <meta name="description"
        content="頑張らず、他力本願で、お金がかからない、そして気持ちいい♪ 無理なく続けられる銀座リプロ式リンパドレナージのご紹介です。保存療法のための通院が続かない・毎日行うことができない・効果が上がらない方にお薦めいたします。">
    <?php elseif (is_single('2695')) : ?>
    <meta name="description"
        content="At Ginza Reproductive Surgery, we focus on treatable male infertility. We specialize in microsurgery, daytime Varicocelectomy, daytime penile prosthesis surgery and penile sponge injections. We provide a variety of male sexual function treatments to help men feel confident in their work.">
    <?php elseif (is_single('2562')) : ?>
    <meta name="description"
        content="Ginza Reproductive Surgery offers vasectomy reconstructive surgery by expert microsurgery surgeons. Our vasectomy reconstruction has a high treatment record with a 91% sperm appearance rate and 47% normalization rate.">
    <?php elseif (is_single('2872')) : ?>
    <meta name="description"
        content="当クリニックでは、アルファ･ベータT細胞(αβT細胞療法)を行っています。T細胞療法とは、がん細胞を攻撃する免疫細胞であるアルファ･ベータT細胞、NK細胞などのリンパ球全体を増殖･活性化して投与する治療法です。免疫力全体が底上げされ、化学療法や放射線治療との併用も可能です。">
    <?php elseif (is_single('944')) : ?>
    <meta name="description" content="ED薬の効果を実感できていない場合、生活習慣や併用している薬との相性以外にもさまざまな原因が考えられます。
そのため、まずは診察に受け、症状に合わせて陰茎形成術や別の薬を試すなどの適切な対処方法をとることが大切です。">
    <?php elseif (is_single('5021')) : ?>
    <meta name="description" content="精巣上体炎とは、陰嚢（たま袋）の中で精巣の後ろ側にある精巣上体が炎症を起こしている状態を指します。
場合によっては、性行為をすることで女性への感染、不妊につながります。
そのため、陰嚢に違和感を感じる場合は早期診断をお勧めします。">
    <?php elseif (is_single('5017')) : ?>
    <meta name="description" content="無精子症・乏精子症とは、射精はできるが基準よりも精子の数が少ない、もしくは全くいない状態を指します。
治療方法には手術によるもの、精子が作られやすい身体にするための処方箋治療などがあり、改善することで自然妊娠も可能になります。">
    <?php elseif (is_single('4885')) : ?>
    <meta name="description" content="停留精巣とは、通常であれば精巣は胎生期に後腹膜から陰嚢内に下降するところ、陰嚢内に降りていない状態を指します。
停留精巣は見た目で判断することが難しく、大人になるまで治療をしていない場合男性不妊や清掃癌の原因になります。">
    <?php elseif (is_single('4862')) : ?>
    <meta name="description" content="銀座リプロ外科は、高い技術で男性不妊を中心とした外科手術を行うクリニックです。
男性不妊治療では、泌尿器科生殖医療専門医が手術を行うため安心して受けることができます。
また、充実したサポートのもと、独自の技術によって日帰りでの治療を可能にしました。">
    <?php elseif (is_single('4765')) : ?>
    <meta name="description" content="人工授精（AIH）とは、排卵の時期に管で精液を子宮内へ直接注入する方法です。
人工授精はタイミング法を一定期間繰り返し実施しても妊娠しない場合に検討され、女性の体質に合わせた方法で行います。">
    <?php elseif (is_single('4755')) : ?>
    <meta name="description" content="体外受精は、卵子と精子を体の外で受精させる方法です。
体外受精の一つである顕微授精は、顕微鏡下で人工的に精子を卵子に注入する方法であり、通常の体外受精は、精子が自らの力で卵子に入る方法を指します。">
    <?php elseif (is_single('4751')) : ?>
    <meta name="description" content="精子にはWHOの定める精液所見の基準があります。
精子の質が高まることで、自然妊娠の確立が高まり、不妊治療もスムーズになるといったメリットがあります。
精液検査をする場合は、精子の保護のためにも院内採取をお薦めしております。">
    <?php elseif (is_single('4748')) : ?>
    <meta name="description" content="タイミング法とは自然妊娠が難しい夫婦が最初に行う不妊治療です。具体的には、排卵日を診断して性交のタイミングを調整します。
妊娠の可能性をあげるためには、日々の規則正しい生活習慣などや身体の環境を整える必要があります。">
    <?php elseif (is_single('4745')) : ?>
    <meta name="description"
        content="顕微授精とは、顕微鏡下で卵子に直接精子を注入して受精させ、奥様の子宮に受精卵を戻すという方法です。男性側の精子の量が少ない場合でも受精させることができるといったメリットの一方で、卵子を傷つけしまうリスクがあるなどデメリットもあります。">
    <?php elseif (is_single('4725')) : ?>
    <meta name="description" content="当院で行う精索静脈瘤の検査では、陰部の触診・陰嚢のエコー検査を通じて、婦人科で行う検査では見つけられない男性の不妊原因を明らかにします。
疾患が不妊の原因であれば、治療によって女性の負担を軽減することもできます。">
    <?php elseif (is_single('4581')) : ?>
    <meta name="description" content="人工授精とは、タイミング法による効果が見られない場合に、排卵の時期に管で精液を子宮内へ直接注入する方法です。
また、人工授精を行う前に泌尿器科的男性不妊検査を受けることが生殖医療ガイドラインで定められています。">
    <?php elseif (is_single('4520')) : ?>
    <meta name="description" content="男性不妊の改善の第一歩はご自身の原因やその他関連知識を身につけることから始まります。
銀座リプロ外科は男性不妊治療を中心とした、完全予約制のクリニックです。
まずはお気軽にご相談ください。">
    <?php elseif (is_single('4353')) : ?>
    <meta name="description" content="男性不妊症患者のうち半数近くが精索静脈瘤の疑いがあります。精索静脈瘤は薬物治療では改善しないため、手術を受ける必要があります。
手術後のダウンタイムが、仕事など日常生活に影響する場合もあるため、事前に確認しましょう。">
    <?php elseif (is_single('4348')) : ?>
    <meta name="description" content="精索静脈瘤とは、精巣やその上の精索部に静脈瘤ができる症状です。
改善には外科手術が有効手段とされ、銀座リプロ外科では専門技術を持つ医師が担当するため、再発率は0.5％と低く合併症の心配もほとんどありません。">
    <?php elseif (is_single('4339')) : ?>
    <meta name="description" content="造精機能障害とは、精子を作る機能の障害によって精子濃度や運動率が悪化している状況を指します。
根本的改善には手術による治療が有効とされており、銀座リプロ外科の日帰り手術・ナガオメソッドによって精液所見の大幅な改善が見込めます。">
    <?php elseif (is_single('4050')) : ?>
    <meta name="description" content="日本生殖医学会は、「生殖医療ガイドライン2021」を公開しました。
その中では、男性不妊症に対する泌尿器科的検査（触診・エコー検査など）により、男性不妊治療ができる病気の早期発見につながると定められています。">
    <?php elseif (is_single('3971')) : ?>
    <meta name="description" content="不妊は女性だけでなく、男性側に原因があることも珍しくありません。
そこで、自覚症状や普段の生活習慣からわかる男性不妊セルフチェックを公開しました。
万が一、当てはまる項目が多く不安な場合は銀座リプロ含め専門医院で受診をおすすめします。">
    <?php elseif (is_single('3962')) : ?>
    <meta name="description" content="当院の永尾が出演している「プロフェッサー永尾のYouTubeチャンネル」では、精索静脈瘤の症状・治療法や男性不妊に関する情報を発信しています。
男性不妊について知りたい方、精索静脈瘤など症状を改善したい方は是非ご覧ください。">
    <?php elseif (is_single('3826')) : ?>
    <meta name="description" content="糖尿病によって自律神経が乱れ、血管障害とともに勃起機能が低下します。
糖尿病性EDは通常のED薬が効かないことがあり、その場合は陰茎注射が有効です。
陰茎注射を使用する場合は、安全のためにも専門医と薬剤容量などを相談しましょう。">
    <?php elseif (is_single('3239')) : ?>
    <meta name="description" content="前立腺がん手術後のEDには、通常のED治療である薬物療法が無効な場合があります。
この場合、陰茎注射（陰茎海綿体注射）が有効です。
しかし、陰茎自己注射の場合は安全のためにも専門医の指導を受け薬量を守るなど諸注意もあります。">
    <?php elseif (is_single('2702')) : ?>
    <meta name="description" content="精液検査には厳格な条件があり、正確な検査を行ううえで非常に重要です。
精液所見の良し悪しはWHOが定めた基準値で判断しますが、精液検査が正常でも精索静脈瘤がある場合、妊娠までに時間がかかる場合もあります。">
    <?php elseif (is_single('1814')) : ?>
    <meta name="description" content="男性不妊のうち約40％は精索静脈瘤と言われてるため、不妊にお悩みの方は精索静脈瘤が原因かもしれません。
万が一、精索静脈瘤の可能性がある場合は早急に手術を受けることで再発もほとんどなく、妊娠率・出産率の上昇につながります。">
    <?php elseif (is_single('1294')) : ?>
    <meta name="description" content="男性不妊の約4割を占める精索静脈瘤は、陰嚢・精液・自覚症状などさまざまな点から特徴を見つけることができます。
また、男性不妊と関連する病気も多岐にわたるため、不安な方は専門医に相談することをおすすめします。">
    <?php elseif (is_single('486 ')) : ?>
    <meta name="description"
        content="初診当日に顕微鏡下精索静脈瘤手術（ナガオメソッド・自費診療）を希望される場合は、ご予約時に必ず「同日に手術」という旨をお申し出ください。また、事前準備・費用・術前検査などについてもご確認ください。">
    <?php else : ?>
    <meta name="description" content="<?php echo $pageDesc ?>">
    <?php endif; ?>
    <meta property="og:title" content="<?php if (!is_home() || !is_front_page()) : ?><?php echo $pageTitle ?>男性不妊治療・手術は銀座リプロ外科<?php else : ?>銀座リプロ外科 東京の男性不妊治療クリニック<?php endif; ?>" />
    <meta property="og:site_name" content="銀座リプロ外科 東京の男性不妊治療クリニック" />
    <meta property="og:url" content="https://ginzarepro.jp/" />
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/assets/img/ogp.png" />
    <meta property="og:description" content="<?php echo $pageDesc ?>" />
    <meta property="og:type" content="website" />
    <?php /*<!-- meta property="fb:admin" content="" -->*/?>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $pageDesc ?>" />
    <meta name="twitter:title" content="<?php if (!is_home() || !is_front_page()) : ?><?php echo $pageTitle ?>男性不妊治療・手術は銀座リプロ外科<?php else : ?>銀座リプロ外科 東京の男性不妊治療クリニック<?php endif; ?>" />
    <meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/assets/img/ogp.png" />
    <meta name="google-site-verification" content="46RwUtB0kwp5BsJ38PwDEJTvTT0f2xbFS9c4ned1WRg" />
    <meta name="naver-site-verification" content="ad68e9b1e6d77b9ce7fff3bdfc1bb777ab7de66d" />
    <meta name="p:domain_verify" content="d96358d6f88438dbdc50eeda8133e467" />
    <meta name="google-site-verification" content="wvDcyXHQ9dmd9z0D6wJuPEvX-Z_N5f8R0rXDfOxRuWc" />
    <link rel="SHORTCUT ICON" href="https://ginzarepro.jp/wp-content/uploads/2019/12/favicon.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/humanity/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css" />
    <?php /*<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/eat.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/sns.css" />
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/styletop.css" />*/ //style_pfの最初に記述?>
    <link rel="stylesheet" href="https://unpkg.com/scroll-hint@latest/css/scroll-hint.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style_pf.css?ver<?php $str = date('YmdHs'); echo str_shuffle($str); ?>" />
    <?php if (is_singular('sinryo')) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style_pf_sb.css?ver<?php $str = date('YmdHs'); echo str_shuffle($str); ?>" />
    <?php endif ?>
    <?php if (is_front_page() || is_home() || is_singular('sinryo')) { ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/remodal.css?ver<?php $str = date('YmdHs'); echo str_shuffle($str); ?>" />
    <?php } ?>
    <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/woman.css" />
    <?php endif; ?>
    <?php if (is_home() || is_front_page()) : echo '<link rel="canonical" href="https://ginzarepro.jp/">' . PHP_EOL;
    endif; ?>
    <?php wp_head(); ?>
    <?php if (!(is_front_page() || is_home() || is_singular('sinryo') || is_single())) {
        wp_deregister_script('jquery');
    } ?>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/common.js?ver_061802"></script>
    <script type="text/javascript" id="" charset="utf-8" src="//typesquare.com/3/tsst/script/ja/typesquare.js?6391a387603045ceba0d44dbac1e02d5&fadein=-1"></script>
    <script src="https://unpkg.com/scroll-hint@latest/js/scroll-hint.min.js"></script>
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
    <?php if (is_single('2562')) : ?>
    <link rel="alternate" hreflang="ja" href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction/">
    <link rel="alternate" hreflang="en" href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction-en/">
    <?php elseif (is_single('751')) : ?>
    <link rel="alternate" hreflang="en" href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction-en/">
    <link rel="alternate" hreflang="ja" href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction/">
    <?php endif; ?>
    <?php if (is_single('71')) : ?>
    <link rel="alternate" hreflang="ja" href="https://ginzarepro.jp/sinryo/varicocele/">
    <link rel="alternate" hreflang="en" href="https://ginzarepro.jp/sinryo/varicocele-en/">
    <?php elseif (is_single('2185')) : ?>
    <link rel="alternate" hreflang="en" href="https://ginzarepro.jp/sinryo/varicocele-en/">
    <link rel="alternate" hreflang="ja" href="https://ginzarepro.jp/sinryo/varicocele/">
    <?php endif; ?>
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
    <?php if(is_singular('sinryo')) : get_template_part('includes/markup_ld-json'); endif; //手術ページに構造化データ ?>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.css' />
    <script src='https://cdnjs.cloudflare.com/ajax/libs/lity/1.6.6/lity.js'></script>
    <meta name="facebook-domain-verification" content="5ci3iad3hr2dzeoxce6o8szkitymwn" />
</head>
<?php
$sphead_disp = 0;

$ex_tax = 'column_category';
$ex_term = 'lva';

$ex_term_02 = 'varicocele';
$ex_term_03 = 'infertility';
$ex_term_04 = 'female-infertility';
$ex_term_05 = 'ginzarepro';

$ex_term_id = get_term_by('slug', $ex_term, $ex_tax)->term_id;

$ex_term_id_02 = get_term_by('slug', $ex_term_02, $ex_tax)->term_id;
$ex_term_id_03 = get_term_by('slug', $ex_term_03, $ex_tax)->term_id;
$ex_term_id_04 = get_term_by('slug', $ex_term_04, $ex_tax)->term_id;
$ex_term_id_05 = get_term_by('slug', $ex_term_05, $ex_tax)->term_id;

$ex_term_child_id = get_term_children($ex_term_id, $ex_tax);
$ex_term_child_id_02 = get_term_children($ex_term_id_02, $ex_tax);
$ex_term_child_id_03 = get_term_children($ex_term_id_03, $ex_tax);
$ex_term_child_id_04 = get_term_children($ex_term_id_04, $ex_tax);
$ex_term_child_id_05 = get_term_children($ex_term_id_05, $ex_tax);

if (is_tax('column_category', 'lva') || has_term(array($ex_term_child_id, $ex_term_id), $ex_tax)) {
    $sphead_disp = 'lva';
} elseif (is_page('records') || is_tax('column_category', array('infertility', 'varicocele')) || has_term(array($ex_term_id_02, $ex_term_id_03, $ex_term_id_04, $ex_term_id_05, $ex_term_child_id_02, $ex_term_child_id_03, $ex_term_child_id_04, $ex_term_child_id_05), $ex_tax)) {
    $sphead_disp = 'varicocele';
}
if (is_home() || is_page('appointment-first')) {
    $sphead_disp = 0;
}
//echo '<!-- '.$sphead_disp . '-->';
?>
<body class="<?php if (!is_page('appointment-first')) {
                    echo 'sphead_disp ';
                }
                if ($sphead_disp === 'lva') {
                    echo ' lva';
                } ?>" <?php if ((get_post_type() === 'sinryo') && is_single(array('lva', 'lva-s', 'lva-cause', 'beginning-of-lva', 'lymph-drainage')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : echo 'id="lvapage"';
                        endif; ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MPMKWX5" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K5BZLRN" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <?php if (!is_page(array('appointment-first', 'appointment-first-confirm', 'appointment-first_lp', 'appointment-first-confirm_lp'))) { ?>
    <header class="sideNavi--wrap">
        <div class="sideNavi--inner">
            <div class="sideNavi">
                <div class="sp__btn">
                    <a class="mainVis__contact" href="https://ginzarepro.jp/contact/appointment-first/" target="_blank">
                        <p class="mainVis__contact__header"
                            style="padding: 0 !important; margin: 0 !important; border: none;">
                            <span class="fas fa-envelope"></span><i>ご予約</i>
                        </p>
                    </a>
                </div>
                <div class="sideNavi__spheader">
                    <?php if (is_home() || is_front_page()) : ?><h1 class="sideNavi__logo"><a href="/">
                            <?php else : ?>
                            <a href="/" class="sideNavi__logo">
                                <?php endif; ?>
                                <img class="sideNavi__logo--pc"
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__logo--pc.png"
                                    alt="医療法人社団マイクロ会　銀座リプロ外科" />
                                <img class="sideNavi__logo--sp"
                                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__logo--sp.png"
                                    alt="医療法人社団マイクロ会　銀座リプロ外科" />
                            </a>
                            <?php if (is_home() || is_front_page()) : ?></h1><?php endif; ?>
                    <a class="sideNavi__spheader__tel" href="tel:0351592240"><span class="fas fa-phone"></span></a>
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
                        <a class="sideNavi__menu__item--pc" href="/">TOPページ</a>
                    </li>
                    <li class="sideNavi__menu__trigger">
                        <a class="sideNavi__menu__item--pc" href="/staff/">当院について</a>
                        <a class="sideNavi__menu__item--sp">当院について</a>
                        <ul class="sideNavi__menu__lower">
                            <li><a class="sideNavi__menu__lower__item--sp" href="/staff/">当院について</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/staff/#firstVisit">初めての方へ</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/staff/#concept">当院のコンセプト</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/staff/#facility">院内・設備紹介</a></li>
                            <li><a class="sideNavi__menu__lower__item" href="/staff/#aboutDoctor">医師紹介</a></li>
                        </ul>
                    </li>

                    <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s', 'lva-cause')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?><?php else : ?>
                    <li class="sideNavi__menu__trigger_2 accordion">
                        <a class="sideNavi__menu__item--pc" href="/sinryo/">診療・手術一覧</a>
                        <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo">診療・手術一覧</label>
                        <input type="checkbox" id="menu_sinryo" class="toggle">
                        <label class="arw" for="menu_sinryo">▼</label>
                        <ul class="sideNavi__menu__lower sinryo ">
                            <li class="link--sp"><a class="sideNavi__menu__lower__item--sp" href="/sinryo/">診療・手術一覧</a>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">精索静脈瘤</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_1">精索静脈瘤</label>
                                <input type="checkbox" id="menu_sinryo_1" class="toggle">
                                <label class="arw" for="menu_sinryo_1">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"><a class="sideNavi__menu__lower__item" href="#">精索静脈瘤</a></li>-->
                                    <li>
                                        <a href="/sinryo/varicocele/" class="sideNavi__navi__item__child">精索静脈瘤診療・手術</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/nagao_method/"
                                            class="sideNavi__navi__item__child">日帰り顕微鏡下精索静脈瘤手術・ナガオメソッド</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">陰茎湾曲症治療</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_4">陰茎湾曲症治療</label>
                                <input type="checkbox" id="menu_sinryo_4" class="toggle">
                                <label class="arw" for="menu_sinryo_4">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/inkei/"
                                            class="sideNavi__navi__item__child">日帰り顕微鏡下陰茎彎曲症手術</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">リンパ浮腫の治療・手術</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_2">リンパ浮腫の治療・手術</label>
                                <input type="checkbox" id="menu_sinryo_2" class="toggle">
                                <label class="arw" for="menu_sinryo_2">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"><a class="sideNavi__menu__lower__item" href="#">リンパ浮腫の治療・手術</a></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/lva/"
                                            class="sideNavi__navi__item__child">LVA手術（リンパ管細静脈吻合術）</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/lymph_drainage/"
                                            class="sideNavi__navi__item__child">銀座リプロ式リンパドレナージ</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/column/rubber-stockings/"
                                            class="sideNavi__navi__item__child">オーダーメイド弾性ストッキング</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item"
                                    href="#">パイプカットおよび再建手術</a>
                                <label class="sideNavi__menu__item--sp link-txt"
                                    for="menu_sinryo_5">パイプカットおよび再建手術</label>
                                <input type="checkbox" id="menu_sinryo_5" class="toggle">
                                <label class="arw" for="menu_sinryo_5">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/about-pipecut/"
                                            class="sideNavi__navi__item__child">日帰り顕微鏡下パイプカット手術（避妊手術）</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction/"
                                            class="sideNavi__navi__item__child">日帰り顕微鏡下パイプカット再建手術（男性不妊治療・妊活）</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item"
                                    href="/sinryo/%e9%9b%a3%e6%b2%bb%e6%80%a7ed%e5%a4%96%e6%9d%a5/">難治性ED治療</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_3">難治性ED治療</label>
                                <input type="checkbox" id="menu_sinryo_3" class="toggle">
                                <label for="menu_sinryo_3">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp">
                                        <a href="https://ginzarepro.jp/sinryo/penile-injections/" class="sideNavi__navi__item__child">海綿体・陰茎注射</a>
                                    </li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/prosthetic/"
                                            class="sideNavi__navi__item__child">日帰り陰茎プロステーシス手術</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/lp/prosthesis/"
                                            class="sideNavi__navi__item__child">陰茎プロステーシス手術特設ページ</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/penile-injections/"
                                            class="sideNavi__navi__item__child">陰茎海綿体注射</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">免疫療法</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_6">免疫療法</label>
                                <input type="checkbox" id="menu_sinryo_6" class="toggle">
                                <label for="menu_sinryo_6">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/nk/"
                                            class="sideNavi__navi__item__child">NK細胞療法</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/cat/"
                                            class="sideNavi__navi__item__child">T細胞療法</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">小児精索静脈瘤</a>
                                <label class="sideNavi__menu__item--sp arw" for="menu_sinryo_8">小児精索静脈瘤</label>
                                <input type="checkbox" id="menu_sinryo_8" class="toggle">
                                <label for="menu_sinryo_8">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/varicocele-jhs-students/"
                                            class="sideNavi__navi__item__child">小児精索静脈瘤</a>
                                    </li>
                                    <!--<li>
                                        <a href="https://ginzarepro.jp/sinryo/penile-injections/" class="sideNavi__navi__item__child">陰茎海綿体注射</a>
                                    </li>-->
                                </ul>
                            </li>
                            <li>
                                <a class="sideNavi__menu__item--pc sideNavi__menu__lower__item" href="#">その他</a>
                                <label class="sideNavi__menu__item--sp link-txt" for="menu_sinryo_7">その他</label>
                                <input type="checkbox" id="menu_sinryo_7" class="toggle">
                                <label for="menu_sinryo_7">▼</label>
                                <ul class="sideNavi__navi__item__child--wrap">
                                    <!--<li class="link--sp"></li>-->
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/gikougan/"
                                            class="sideNavi__navi__item__child">精巣インプラント（偽睾丸挿入術）</a>
                                    </li>
                                    <li>
                                        <a href="https://ginzarepro.jp/sinryo/scrotal-ptosis-surgery/"
                                            class="sideNavi__navi__item__child">陰嚢下垂手術</a>
                                    </li>
                                    <?php /*<li>
                                        <a href="<?php echo home_url();?>/sinryo/starformer/"
                                    class="sideNavi__navi__item__child">高強度のテスラ磁気刺激治療（スターフォーマー
                                    <!-- &trade; -->）</a>
                            </li>*/ ?>
                        </ul>
                    </li>
                    <!-- <li><a class="sideNavi__menu__lower__item" href="/sinryo/simple-tese">Simple TESE</a></li> -->

                    <!--<?php
                                                                                                                                                                                                                                                                                                            $taxonomy_slug = 'diagnosis'; // カスタムタクソノミーのスラッグを指定
                                                                                                                                                                                                                                                                                                            $post_type_slug = 'sinryo'; // 投稿タイプのスラッグを指定
                                                                                                                                                                                                                                                                                                            $terms = 'sinryo'; // タームを取得
                                                                                                                                                                                                                                                                                                            $args = array(
                                                                                                                                                                                                                                                                                                                'post_type' => $post_type_slug, // 投稿タイプの指定
                                                                                                                                                                                                                                                                                                                $taxonomy_slug => $terms, // タクソノミーからタームを指定
                                                                                                                                                                                                                                                                                                                'posts_per_page' => -1, // タームに紐づく投稿を全てを表示
                                                                                                                                                                                                                                                                                                                'post_status' => 'publish' // 公開済みの投稿を表示
                                                                                                                                                                                                                                                                                                            );
                                                                                                                                                                                                                                                                                                            $customPosts = get_posts($args);
                                                                                                                                                                                                                                                                                                            if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
                                    ?>
          <li><a class="sideNavi__menu__lower__item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
<?php endif;
                                                                                                                                                                                                                                                                                                            wp_reset_query();
                                                                                                                                                                                                                                                                                                            wp_reset_postdata(); //クエリのリセット 
?>-->
                </ul>
                </li>
                <!--<li class="sideNavi__menu__trigger">
        <a class="sideNavi__menu__item--pc" href="/sinryo/#guidance">手術のご案内</a>
        <a class="sideNavi__menu__item--sp">手術のご案内</a>
        <ul class="sideNavi__menu__lower">
          <li><a class="sideNavi__menu__lower__item--sp" href="/sinryo/#guidance">手術のご案内</a></li>
<?php
                                                                                                                                                                                                                                                                                                            $taxonomy_slug = 'diagnosis'; // カスタムタクソノミーのスラッグを指定
                                                                                                                                                                                                                                                                                                            $post_type_slug = 'sinryo'; // 投稿タイプのスラッグを指定
                                                                                                                                                                                                                                                                                                            $terms = 'guidance'; // タームを取得
                                                                                                                                                                                                                                                                                                            $args = array(
                                                                                                                                                                                                                                                                                                                'post_type' => $post_type_slug, // 投稿タイプの指定
                                                                                                                                                                                                                                                                                                                $taxonomy_slug => $terms, // タクソノミーからタームを指定
                                                                                                                                                                                                                                                                                                                'posts_per_page' => -1, // タームに紐づく投稿を全てを表示
                                                                                                                                                                                                                                                                                                                'post_status' => 'publish' // 公開済みの投稿を表示
                                                                                                                                                                                                                                                                                                            );
                                                                                                                                                                                                                                                                                                            $customPosts = get_posts($args);
                                                                                                                                                                                                                                                                                                            if ($customPosts) : foreach ($customPosts as $post) : setup_postdata($post);
?>
          <li><a class="sideNavi__menu__lower__item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
<?php endif;
                                                                                                                                                                                                                                                                                                            wp_reset_query();
                                                                                                                                                                                                                                                                                                            wp_reset_postdata(); ?>
        </ul>
      </li>-->
                <!-- li class="">
        <a class="sideNavi__menu__item" href="/sinryo/#forWomen">女性向け手術</a>
      </li -->

                <li class="sideNavi__menu__trigger">
                    <a class="sideNavi__menu__item--pc" href="/worry/">お悩みから探す</a>
                    <a class="sideNavi__menu__item--sp">お悩みから探す</a>
                    <ul class="sideNavi__menu__lower">
                        <li><a class="sideNavi__menu__lower__item--sp" href="/worry/">お悩みから探す</a></li>
                        <li><a class="sideNavi__menu__lower__item" href="/worry/#worries-01">精索静脈瘤診療・手術</a></li>
                        <li><a class="sideNavi__menu__lower__item" href="/worry/#worries-02">陰茎湾曲症治療</a></li>
                        <li><a class="sideNavi__menu__lower__item" href="/worry/#worries-03">パイプカット</a></li>
                        <li><a class="sideNavi__menu__lower__item" href="/worry/#worries-04">陰茎海綿体注射・陰茎プロステーシス</a></li>
                        <li><a class="sideNavi__menu__lower__item" href="/worry/#worries-05">リンパ浮腫の治療・手術</a></li>
                    </ul>
                </li>
                <?php /*<li><a class="sideNavi__menu__item" href="/worry/">お悩みから探す</a></li>*/ ?>
                <li><a class="sideNavi__menu__item" href="/cost/">費用</a></li>

                <?php endif; ?>

                <li><a class="sideNavi__menu__item" href="/faq/">よくある質問</a></li>

                <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s', 'lva-cause')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?><?php else : ?>

                <li class="sideNavi__menu__trigger">
                    <a class="sideNavi__menu__item--pc" href="/column/">基礎知識</a>
                    <a class="sideNavi__menu__item--sp">基礎知識</a>
                    <ul class="sideNavi__menu__lower">
                        <li><a class="sideNavi__menu__lower__item--sp" href="/column/">基礎知識</a></li>
                        <?php
                                                                                                                                                                                                                                                                                                        $terms = get_terms('column_category');
                                                                                                                                                                                                                                                                                                        foreach ($terms as $term) {
                                                                                                                                                                                                                                                                                                            echo '<li><a class="sideNavi__menu__lower__item" href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                                                                                                                                                                                                                                                                                                        } ?>
                    </ul>
                </li>

                <li><a class="sideNavi__menu__item" href="<?php echo esc_url(home_url()); ?>/records/">手術記録</a></li>
                <li><a class="sideNavi__menu__item" href="/media/">メディア掲載情報</a></li>
                <li><a class="sideNavi__menu__item" href="/interview/">メディアの方はこちら</a></li>
                <li><a class="sideNavi__menu__item" href="/online/">オンライン診療</a></li>

                <?php endif; ?>

                <li><a class="sideNavi__menu__item" href="/access/">交通アクセス</a></li>
                <!-- <li><a class="sideNavi__menu__item" href="/column/">ドクター豆知識</a></li>-->
                <li><a class="sideNavi__menu__item" href="/contact/">お問い合わせ</a></li>
                <li class="sideNavi__menu__trigger">
                    <a class="sideNavi__menu__item--pc">募集要項</a>
                    <a class="sideNavi__menu__item--sp">募集要項</a>
                    <ul class="sideNavi__menu__lower">
                        
                        <li><a class="sideNavi__menu__lower__item" href="<?php echo esc_url(home_url('/recruit-doctor/')); ?>">募集要項（医師）</a></li>                                                                                                                                                                                                                                                             
                        <li><a class="sideNavi__menu__lower__item" href="<?php echo esc_url(home_url('/recruit-iryoujimu/')); ?>">募集要項（医療事務）</a></li>                                                                                                                                                                                                                                                             
                        <li><a class="sideNavi__menu__lower__item" href="<?php echo esc_url(home_url('/recruit-kangoshi/')); ?>">募集要項（看護師）</a></li>                                                                                                                                                                                                                                                             
                   
                    </ul>
                </li>
                <ul style="margin:10px; text-align: center;">
                    <!--<li style="padding-bottom:10px;"><a href="https://liff.line.me/2006158059-pzVG0Rqy/landing?follow=%40686zvmsx&lp=gt85GM&liff_id=2006158059-pzVG0Rqy" target="_blank"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/line_risk.png" alt="精索静脈瘤リスク度診断"
								style="max-width: 100%;"></a></li>-->
					<!--<li style="padding-bottom:10px;"><a href="/sinryo/varicocele/"><img
                                src="/wp-content/themes/ginzarepro_0.1/img/bn1.webp" alt="精索静脈瘤とは？"
                                style="max-width: 100%;"></a></li>
                    <li style="padding-bottom:10px;"><a href="/sinryo/nagao_method/"><img
                                src="/wp-content/themes/ginzarepro_0.1/img/bn2.webp" alt="ナガオメソッド"
                                style="max-width: 100%;"></a></li>
                    <li><a href="https://www.youtube.com/channel/UC8A7zCAuY1NXZDgNPXE9awg" target="_blank"><img
                                src="/wp-content/themes/ginzarepro_0.1/img/bn03.webp" alt="youtubeバナー"
                                style="max-width: 100%;"></a></li>-->
					<li><img src="/wp-content/themes/ginzarepro_0.1/img/acceljapan_1200.png" alt="成長企業と新しい日本を作る" style="max-width: 100%;"></li>
                </ul>
                </ul>
                <div class="sideNavi__contact--wrap">

                    <!--<a class="sideNavi__contact--btn" href="/contact/appointment-first/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__reservation.png" alt="" />初診のご予約</a>
      <a class="sideNavi__contact--btn" href="/contact/appointment-revisit/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__operation.png" alt="" />再診のご予約</a>-->

                    <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s', 'lva-cause')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>

                    <a class="sideNavi__contact--btn" href="/lva/appointment-first/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__reservation.png"
                            alt="" />初診のご予約</a>
                    <a class="sideNavi__contact--btn" href="/lva/appointment-revisit/"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__operation.png"
                            alt="" />再診のご予約</a>

                    <?php else : ?>

                    <a class="sideNavi__contact--btn" href="/contact/appointment-first/" target="_blank"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__reservation.png"
                            alt="" />初診のご予約</a>
                    <a class="sideNavi__contact--btn" href="/contact/appointment-revisit/"><img
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/sideNavi__contact__operation.png"
                            alt="" />再診のご予約</a>

                    <?php endif; ?>
                </div>
                <!--<div class="sideNavi__search" style="margin: 5px 0 5px 0;">
      <form
        role="search"
        method="get"
        id="searchform"
        class="sideNavi__search__searchform"
        action="https://ginzarepro-jp.check-xserver.jp/"
      >
        <div>
          <input
            type="text"
            value=""
            name="s"
            id="s"
            placeholder="サイト内検索"
            class="sideNavi__search__searchform--input"
          />
          <input
            type="submit"
            id="searchsubmit"
            value=""
            class="sideNavi__search__searchform--btn"
          />
        </div>
      </form>
    </div>-->
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
            <li><a href="<?php echo esc_url(home_url('/sinryo/nagao_method/')); ?>"><span><i>ナガオメソッド</i>とは</span></a>
            </li>
            <?php } elseif ($sphead_disp === 'lva') {  ?>
            <li><a href="<?php echo esc_url(home_url('/sinryo/lva/')); ?>"><span><i>リンパ浮腫手術</i>とは</span></a></li>
            <li><a
                    href="<?php echo esc_url(home_url('/column/beginning-of-lva/')); ?>"><span><i>リンパ浮腫の</i>はじまりとは</span></a>
            </li>
            <?php } ?>
            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><span>よくある質問</span></a></li>
        </ul>
    </div>
    <?php } else {
        if (!is_page('appointment-first')) { ?>
    <div class="sideNavi__spheader_btm">
        <ul>
            <li><a href="<?php echo esc_url(home_url('/staff/')); ?>"><span>当院について</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/sinryo/')); ?>"><span>診療・手術一覧</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/records/')); ?>"><span>手術記録</span></a></li>
            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>"><span>よくある質問</span></a></li>
        </ul>
    </div>
    <?php }
    } ?>