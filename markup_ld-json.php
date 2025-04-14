<?php
  $sitetitle = '銀座リプロ外科 東京の男性不妊治療｜医療法人社団マイクロ会';
  if(is_single(array('lva','lva-s','lva-cause','lymph_drainage'))){
    $sitetitle = '銀座リプロ外科 東京のリンパ浮腫治療｜医療法人社団マイクロ会';
  }
  $post_desc = '';
  global $pageDesc;
  if($pageDesc){
    $post_desc = $pageDesc;
  }else{
    if(is_single(array('lva','lva-s','lva-cause','lymph_drainage'))){
      $post_desc = 'リンパ浮腫をはじめとした女性疾患の外科治療「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    }else{
      $post_desc = '男性不妊手術専門クリニック「銀座リプロ外科」の' . get_the_title() . 'に関するページです。当院では日帰り顕微鏡下手術にて様々な症状の外科手術を行っております。銀座一丁目駅徒歩2分。';
    }
  }
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

  $first_img = $matches [1][0];
  if(strpos($first_img,'questionList__list.png') !== false){
    $first_img = null;
  }

  $second_img = $matches [1][1];
  if(strpos($second_img,'questionList__list.png') !== false){
    $second_img = null;
  }

  $third_img = $matches [1][2];
  if(strpos($third_img,'questionList__list.png') !== false){
    $third_img = null;
  }

  $sinryo_title = null;
  $sinryo_desc = null;
  $post_title = get_the_title();

  // if(is_single('')){
   //  $sinryo_title = '';
   //  $sinryo_desc =  '';
  // }
  if(is_single('lymph_drainage-en')){
    $sinryo_title = 'Ginza Repro Lymphatic Drainage';
    $sinryo_desc =  'The Ginza Repro lymphatic drainage is an easy way to get relief without spending time and money, and without relying on others for help.';
  }
  if(is_single('inkei-en')){
    $sinryo_title = 'Penile Curvature';
    $sinryo_desc =  'Penile curvature is a disease in which the penis curves during erection. ';
  }
  if(is_single('penile-injections-en')){
    $sinryo_title = 'Corpus Cavernosa Injections';
    $sinryo_desc =  'According to reports Prostaglandin E1 is injected into the corpus cavernosum to induce an erection, with an efficacy rate of 82 % (Otto IL et al.).';
  }
  if(is_single('lva-en')){
    $sinryo_title = 'Lymphedema';
    $sinryo_desc =  'Lymphedema is a condition characterized by swelling of the arms and legs. It occurs when there is a disruption or reduced flow of lymphatic fluid, commonly as a result of treatment for breast cancer, uterine cancer, ovarian cancer, or malignant melanoma.';
  }
  if(is_single('about-pipecut-en')){
    $sinryo_title = 'Vasectomy';
    $sinryo_desc =  'A vasectomy is a sterilization procedure performed on men. It is a contraceptive method in which a 1 cm incision is made in the scrotum and the vas deferens is ligated or severed to prevent the passage of sperm.';
  }
  if(is_single('prosthetic-en')){
    $sinryo_title = 'Penile Prosthesis Surgery';
    $sinryo_desc =  'Penile prosthesis surgery is a procedure in which a simple, bendable (non-inflatable) prosthesis (implant) is implanted into the corpus cavernosum of the penis.';
  }
  if(is_single('scrotal-ptosis-surgery')){
    $sinryo_title = '陰嚢下垂手術';
    $sinryo_desc =  '陰嚢下垂とは、睾丸を包んでいる陰嚢が、文字通り垂れ下がってしまう状態のことです。原因には加齢などが考えられます。';
  }
  if(is_single('gikougan')){
    $sinryo_title = '精巣インプラント';
    $sinryo_desc =  '睾丸の摘出手術を受けた方が、見た目の問題を解決するために偽睾丸挿入術を受けられます。';
  }
  if(is_single('nagao_method-en')){
    $sinryo_title = 'Nagao method';
    $sinryo_desc =  'Nagao method is different from normal surgery and require very advanced techniques.';
  }
  if(is_single('cat')){
    $sinryo_title = 'アルファ･ベータT細胞療法';
    $sinryo_desc =  '身体に備わっている免疫の力を利用して、がんを攻撃する治療法のことをいいます。';
  }
  if(is_single('lymph_drainage')){
    $sinryo_title = 'リンパドレナージ';
    $sinryo_desc =  '銀座リプロ外科では、「銀座リプロ式リンパドレナージ」を体験いただき、手順をお伝えしています。';
  }
  if(is_single('varicocele-en')){
    $sinryo_title = 'Varicose';
    $sinryo_desc =  'Varicose veins (dilation of veins) are found in the testicles and the spermatic cord above it, and this is called a varicocele.';
  }
  if(is_single('pipe-cut-reconstruction-en')){
    $sinryo_title = 'Vasectomy Reversal / Reconstruct';
    $sinryo_desc =  'Vasectomy is a male sterilization procedure performed on those who already have children and do not plan to have more children or those who do not not want to have children.';
  }
  if(is_single('nk')){
    $sinryo_title = 'NK細胞療法';
    $sinryo_desc =  '免疫療法のひとつでもある、NK細胞療法について詳しく紹介します。';
  }
  if(is_single('lymph-drainage')){
    $post_title = 'リンパ浮腫ケアのマッサージとは？';
    $sinryo_title = 'リンパ浮腫ケアのマッサージ';
    $sinryo_desc =  'リンパ浮腫の治療で重要な保存療法を、リンパドレナージにフォーカスを当ててご紹介します。';
  }
  if(is_single('beginning-of-lva')){
    $post_title = 'リンパ浮腫のはじまりとは？';
    $sinryo_title = 'リンパ浮腫のはじまり';
    $sinryo_desc =  'リンパ浮腫がどのようにして発症するのか、また、どの程度のレベルになったときに病院に行けばよいのかについてご紹介しています。';
  }
  if(is_single('varicocele-jhs-students')){
    $post_title = '小児精索静脈瘤とは';
    $sinryo_title = '小児精索静脈瘤';
    $sinryo_desc =  '子どもに起こる小児精索静脈瘤についてご紹介しています。';
  }
  if(is_single('varicocele')){
    $post_title = '精索静脈瘤とは';
    $sinryo_title = '精索静脈瘤';
    $sinryo_desc =  '精索静脈瘤とは、精巣やその上の精索部（精管、血管、神経、リンパ管などを覆う3層構造の膜）に静脈瘤（じょうみゃくりゅう・静脈の拡張）が認められる症状のことを指します。';
  }
  if(is_single('covid-19-notice')){
    $post_title = '新型コロナウイルス感染症と不妊治療';
    $sinryo_title = '新型コロナウイルス感染症と不妊治療';
    $sinryo_desc =  '新型コロナウイルス感染症と不妊治療に関して、現段階での状況と、今できる不妊治療についてご紹介します。';
  }
  if(is_single('lva')){
    $sinryo_title = 'リンパ浮腫';
    $sinryo_desc =  'リンパ浮腫は手足がむくむ病気の一つです。乳がん、子宮がん、卵巣がん、悪性黒色腫などの治療のあとに、リンパ液の流れが悪くなることによって発生します。';
  }
  if(is_single('penile-injections')){
    $sinryo_title = '陰茎海綿体注射';
    $sinryo_desc =  '陰茎海綿体にプロスタグランジンE1を注射し、勃起させる方法です。';
  }
  if(is_single('ed-medicine-doesnt-work')){
      $post_title = '勃起障害';
    $sinryo_title = 'ED薬が効かない';
    $sinryo_desc =  '勃起力を図るため、最近では、勃起硬度測定評価EHS(Erection Hardness Scoreという簡便な問診票が海外で開発され、日本でも翻訳され使われています。';
  }
  if(is_single('pipe-cut-reconstruction')){
      $post_title = 'パイプカット再建術（日帰り顕微鏡下再建術）';
    $sinryo_title = 'パイプカット再建術';
    $sinryo_desc =  'パイプカット手術（精管結紮術）を受けたあと、再婚などを理由に授産目的で元に戻す（再開通）ために行う手術です。';
  }
  if(is_single('inkei')){
      $post_title = '陰茎湾曲症手術';
    $sinryo_title = '陰茎湾曲症';
    $sinryo_desc =  '陰茎湾曲症（湾曲ペニス）とは、勃起時に陰茎が屈曲する病気です。';
  }
  if(is_single('about-pipecut')){
      $post_title = 'パイプカット顕微鏡下手術';
    $sinryo_title = 'パイプカット';
    $sinryo_desc =  '当院では、パイプカット手術、ならびに過去に受けたパイプカット手術の再建術（もとに戻す）どちらも行っています。';
  }
  if(is_single('nagao_method')){
    $sinryo_title = 'ナガオメソッド';
    $sinryo_desc =  'ナガオメソッドは、精索および外精組織から、血管・リンパ管・神経を1本1本丁寧に分離して確認して、逆流静脈だけ結紮します。';
  }
  if(is_single('70')){
    $sinryo_title = '難治性ED';
    $sinryo_desc =  'ED薬を使っても、EDの定義である「満足のいく性行為に十分な勃起を達成できない、もしくは維持できないこと」を解消できない症状のことを指します。';
  }
  if(is_single('reproductive_medical')){
      $post_title = '男性不妊症';
    $sinryo_title = '男性不妊';
    $sinryo_desc =  '不妊の原因が男性側にあるケースのことを指します。WHOの定義では、「1年間の不妊期間を持つもの」を不妊と定義しています。';
  }
  if(is_single('prosthetic')){
    $sinryo_title = '陰茎プロステーシス手術';
    $sinryo_desc =  'シンプルな曲げ伸ばし式（ノンインフレータブルタイプ）のプロステーシス（インプラント）を陰茎海綿体内に移植する手術です。';
  }
  if(is_single('pipe_cut')){
    $sinryo_title = 'パイプカット手術';
    $sinryo_desc =  'すでに子供がいてこれ以上子供を作る予定のない人が手術を希望した場合に行います。';
  }
?>

  <!-- 構造化データ Article -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "headline": "<?php the_title(); ?>",
        "image": [
        "<?php echo $first_img; ?>",
        "<?php echo $second_img; ?>",
        "<?php echo $third_img; ?>"
        ],
        "datePublished": "<?php the_time( 'Y-m-d' ); ?>T<?php the_time( 'H:i:s' ); ?>+09:00",
        "dateModified": "<?php the_modified_time( 'Y-m-d' );?>T<?php the_modified_time( 'H:i:s' ); ?>+09:00",
        "author": [{
            "@type": "Person",
            "name": "永尾 光一",
            "url": "<?php echo home_url(); ?>/about-koichi-nagao/"
        }]
    }
    </script>
  <!-- 構造化データ BreadcrumbList -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "<?php echo $sitetitle; ?>",
        "item": "<?php echo home_url(); ?>"
      },{
        "@type": "ListItem",
        "position": 2,
        "name": "診療・手術一覧",
        "item": "<?php echo home_url('/sinryo/'); ?>"
      },{
        "@type": "ListItem",
        "position": 3,
        "name": "<?php the_title(); ?>"
      }]
    }
    </script>

<?php if(!is_single('covid19-for-patients')){ ?>
  <!-- 構造化データ MedicalWebPage -->
  <script type="application/ld+json">
  {
    "@context":"http://schema.org",
    "@type":"MedicalWebPage",
    "name": "<?php echo $post_title;?>",
    "description":"<?php echo $post_desc;?>",
    "author": {
      "@type": "Person",
      "name": "永尾 光一",
      "jobTitle": "泌尿器科医",
      "affiliation": {
        "@type": "Organization",
        "name": "銀座リプロ外科"
      }
    },
    "lastReviewed": "<?php the_modified_time( 'Y-m-d' );?>T<?php the_modified_time( 'H:i:s' ); ?>+09:00",
    "mainEntity": {
      "@type": "MedicalCondition",
      <?php if($sinryo_title){ echo '"name": "'.$sinryo_title.'",';}?>

      <?php if($sinryo_desc){ echo '"description": "'.$sinryo_desc.'"';}?>

    }
  }
  </script>
<?php } ?>