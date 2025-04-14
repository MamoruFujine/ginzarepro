<?php
/* ver未対応のためset_query_var使用。5.5以上になったらset_query_var削除*/
$args = get_query_var('query');
if($args['doct_pagebtm_title']){
  $doct_pagebtm_title = $args['doct_pagebtm_title'];
}else{
  $doct_pagebtm_title = 'この記事の執筆医師';
}
$doct_pagebtm_link = 0;
if($args['doct_pagebtm_link']){
  $doct_pagebtm_link = $args['doct_pagebtm_link'];
}
?>
            <div class="profcard">
                <div>
                    <h3><?php echo $doct_pagebtm_title; ?></h3>
<?php if($doct_pagebtm_link){ ?>
                    <?php 
                    $doct_name = get_the_title($doct_pagebtm_link);
                    $doct_sub = get_field('doct_sub',$doct_pagebtm_link);
                    $doct_job = get_field('doct_job',$doct_pagebtm_link);
                    $doct_profile = get_field('doct_profile',$doct_pagebtm_link);
                    $doct_link = get_field('doct_link',$doct_pagebtm_link);
                    /*if(!$doct_link){ $doct_link = home_url('/about-koichi-nagao/'); }*/
                    $doct_medical = get_field('doct_medical', $doct_pagebtm_link);
                    if($doct_medical){
                      $doct_medical_name = $doct_medical['doct_medical_name'];
                      $doct_medical_link = $doct_medical['doct_medical_link'];
                    }
                    $thumb_id = get_post_thumbnail_id($doct_pagebtm_link);
                    $thumb_img = wp_get_attachment_image_src($thumb_id, 'thumbnail');
                    $thumb_src = $thumb_img[0];
                    $doct_img = $thumb_src;
                    if (!has_post_thumbnail($doct_pagebtm_link)){
                      $doct_img = get_template_directory_uri().'/img/noimg.png';
                    }
                    ?>
                    <img src="<?php echo esc_url($doct_img); ?>" alt="<?php echo esc_html($doct_name); ?>">

                    <div class="pfcd">
                        <?php if($doct_sub){ echo '<p class="prfname_sub">'.$doct_sub.'</p>'; } ?>
                        <p class="prfname"><?php echo $doct_name; ?>先生</p>
                        <?php /*<!--<p>東邦大学 医学部教授<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>（泌尿器科学講座）<?php } ?><br>東邦大学医療センター大森病院 リプロダクションセンター<br>東邦大学医療センター大森病院 <?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>尿路再建（泌尿器科・<?php } ?>形成外科<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>）<?php } ?>センター長</p>-->*/?>
                        <p><?php echo $doct_job; ?></p>
                    </div>

                    <?php /*<<!--<p>昭和大学にて形成外科学を8年間専攻。<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>その後、東邦大学で泌尿器科学を専攻し、<?php } ?>形成外科<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>・泌尿器科両方の<?php } ?>診療科部長を経験する（<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>2つの<?php } ?>基本領域専門医を取得）。得意分野はマイクロサージャリーをはじめとする生殖医学領域の形成外科的手術。<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>泌尿器科医の枠を超えた<?php } ?>細やかな手術手技と丁寧な診察で、様々な悩みを抱える患者さんから高い信頼と評価を得ている。</p>-->*/?>
                    <p><?php echo $doct_profile; ?></p>
                    <div class="contact__btn">
                        <?php if($doct_link){ ?><a class="contact__btn--submit" href="<?php echo esc_url($doct_link); ?>">先生のプロフィールについて詳しくはこちら</a><?php } ?>
                    </div>
                    <?php if($doct_medical){ ?>
                    <p class="kikan">所属医療機関</p>
                    <p class="kikanlink"><a href="<?php echo esc_url( $doct_medical_link ); ?>" target="_blank"><?php echo $doct_medical_name; ?></a></p>
                  <?php } ?>
<?php }else{ ?>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/doctor__img--staff--nagao.jpg" alt="永尾 光一 先生">

                    <div class="pfcd">
                        <p class="prfname">永尾 光一 先生</p>
                        <p>東邦大学 医学部教授<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>（泌尿器科学講座）<?php } ?><br>東邦大学医療センター大森病院 リプロダクションセンター<br>東邦大学医療センター大森病院 <?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>尿路再建（泌尿器科・<?php } ?>形成外科<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>）<?php } ?>センター長</p>
                    </div>

                    <p>昭和大学にて形成外科学を8年間専攻。<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>その後、東邦大学で泌尿器科学を専攻し、<?php } ?>形成外科<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>・泌尿器科両方の<?php } ?>診療科部長を経験する（<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>2つの<?php } ?>基本領域専門医を取得）。得意分野はマイクロサージャリーをはじめとする生殖医学領域の形成外科的手術。<?php if ( !is_object_in_term($post->ID, 'column_category','lva') ){ ?>泌尿器科医の枠を超えた<?php } ?>細やかな手術手技と丁寧な診察で、様々な悩みを抱える患者さんから高い信頼と評価を得ている。</p>
                    <div class="contact__btn">
                        <a class="contact__btn--submit" href="<?php echo esc_url(home_url('/about-koichi-nagao/')); ?>">先生のプロフィールについて詳しくはこちら</a>
                    </div>
                    <p class="kikan">所属医療機関</p>
                    <p class="kikanlink"><a href="https://www.omori.med.toho-u.ac.jp/" target="_blank">東邦大学医療センター 大森病院</a></p>
<?php } ?>
                </div>
            </div>