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
          <?php if($doct_pagebtm_link){ ?>
          <?php
                    $doct_name = get_the_title($doct_pagebtm_link);
                    $doct_job_new= get_field('doct_job_new',$doct_pagebtm_link);
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
          <?php 
                    $doct_name = get_the_title($doct_pagebtm_link);
                    $doct_job_new= get_field('doct_job_new',$doct_pagebtm_link);
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
                    $doct_history = get_field('doct_history', $doct_pagebtm_link); 
                    $doct_history = preg_replace('/(<br \/>\r\n)+/', '</li><li>', $doct_history);
                    $doct_gakkai = get_field('doct_gakkai', $doct_pagebtm_link); 
                    $doct_gakkai = preg_replace('/(<br \/>\r\n)+/', '</li><li>', $doct_gakkai);
          ?>
          <div class="doctoreat--staff">
            <div class="doctoreat__img--staff">
              <img src="<?php echo esc_url($doct_img); ?>" alt="<?php echo esc_html($doct_name); if($doct_job_new){ echo '（'.$doct_job_new.'）';}  ?>">
            </div>
              <div class="doctoreat__biography">
                <p class="doctoreat__biography--belong">
                  <?php echo $doct_pagebtm_title; ?>
                </p>
                <p class="doctoreat__biography--name">
                <?php if($doct_link){ echo '<a href="'.$doct_link.'" target="_blank">';} echo $doct_name; if($doct_job_new){ echo '<br>（'.$doct_job_new.'）';} if($doct_link){ echo '</a>';} ?>
                </p>
              </div>
            </div>
            <div class="swell-block-accordion">
              <div class="swell-block-accordion__item" aria-expanded="false">
                <?php if($doct_history || $doct_gakkai){ ?>
                <div class="swell-block-accordion__title" data-onclick="toggleAccordion">
                  <span class="swell-block-accordion__label"><strong>経歴</strong>と<strong>所属学会</strong></span>
                  <span class="swell-block-accordion__icon c-switchIconBtn" aria-hidden="true" data-opened="false">
                    <i class="__icon--closed icon-arrow_drop_down">▼</i>
                    <i class="__icon--opened icon-arrow_drop_up" style="display:none;" >▲</i>
                  </span>
                </div>
                <div class="swell-block-accordion__body" aria-hidden="true">
                  <?php if($doct_history){ ?>
                  <p class="acordion-ttl"><strong>経歴</strong></p>
                  <ul class="acordion-li">
                    <li><?php echo $doct_history; ?></li>
                  </ul>
                  <?php } ?>
                  <?php if($doct_gakkai){ ?>
                  <p class="acordion-ttl" style="margin-top:15px;"><strong>所属学会</strong></p>
                  <ul class="acordion-li">
                    <li><?php echo $doct_gakkai; ?></li>
                  </ul>
                  <?php } ?>
                  <?php if($doct_link){ ?>
                  <div class="swell-block-button is-style-btn_solid">
                    <a href="<?php echo $doct_link; ?>" class="swell-block-button__link">
                      <span>プロフィール詳細を見る</span>
                    </a>
                  </div>
                  <?php } ?>
                </div>
              <?php } ?>
              </div>
            </div>

        <?php }else{ ?>
        <div>
          <div class="doctoreat--staff">
            <div class="doctoreat__img--staff">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/doctor__img--staff--nagao.jpg" alt="永尾光一（東邦大学泌尿器科教授 リプロダクションセンター長）" />
            </div>
            <div class="doctoreat__biography">
              <p class="doctoreat__biography--belong">
                このページの監修医師
              </p>
              <p class="doctoreat__biography--name">
              <a href="/woman/w-staff/#aboutNagao" target="_blank">永尾光一<br>（東邦大学泌尿器科教授 リプロダクションセンター長）</a></p>
            </div>
          </div>

          <div class="swell-block-accordion">
            <div class="swell-block-accordion__item" aria-expanded="false">
              <div class="swell-block-accordion__title" data-onclick="toggleAccordion">
                <span class="swell-block-accordion__label"><strong>経歴</strong>と<strong>所属学会</strong></span>
                <span class="swell-block-accordion__icon c-switchIconBtn" aria-hidden="true" data-opened="false">
                  <i class="__icon--closed icon-arrow_drop_down">▼</i>
                  <i class="__icon--opened icon-arrow_drop_up" style="display:none;" >▲</i>
                </span>
              </div>
              <div class="swell-block-accordion__body" aria-hidden="true">
                <p class="acordion-ttl"><strong>経歴</strong></p>
                <ul class="acordion-li">
                    <li>昭和59年 昭和大学医学部形成外科学講座研修医</li>
                    <li>平成&nbsp;&nbsp;2年 昭和大学医学部助手（形成外科学講座）</li>
                    <li>平成&nbsp;&nbsp;2年 川崎病院形成外科部長</li>
                    <li>平成&nbsp;&nbsp;4年 東邦大学医学部助手（泌尿器科学講座）</li>
                    <li>平成&nbsp;&nbsp;9年 東邦大学医学部講師（泌尿器科学講座）</li>
                    <li>平成&nbsp;&nbsp;9年 博慈会記念総合病院泌尿器科部長</li>
                    <li>平成11年 東邦大学医学部講師（泌尿器科学講座）</li>
                    <li>平成18年 カリフォルニア大学サンフランシスコ校留学</li>
                    <li>平成19年 東邦大学医学部准教授（泌尿器科学講座）<br>（東邦大学大森病院リプロダクションセンターおよび小児泌尿器科担当）</li>
                    <li>平成19年 北京大学客員教授</li>
                    <li>平成21年10月 東邦大学医学部教授（泌尿器科学講座）</li>
                    <li>平成22年4月 東邦大学大森病院リプロダクションセンター長</li>
                  </ul>
                  <p class="acordion-ttl" style="margin-top:15px;"><strong>所属学会</strong></p>
                  <ul class="acordion-li">
                    <li>日本性機能学会 理事長</li>
                    <li>日本生殖医学会 副理事長</li>
                    <li>日本生殖医学会生殖医療従事者資格制度委員会委員長（2018-2020年）</li>
                    <li>NPO法人 <a href="https://www.mids.jp/" target="_blank" rel="noopener noreferrer">男性不妊ドクターズ 理事長</a></li>
                    <li>日本泌尿器科学会 内分泌生殖性機能領域 部会長（2015-2019年）</li>
                    <li>日本泌尿器科学会　生殖部会委員（2021-現在）</li>
                    <li>日本泌尿器科学会　教育委員会委員（2015－現在）</li>
                    <li>日本アンドロロジー学会 理事</li>
                    <li>日本メンズヘルス医学会 理事</li>
                    <li>日本思春期学会 常務理事</li>
                    <li>アジアパシフィック性機能学会 理事長</li>
                    <li>日本マイクロサージャリー学会</li>
                  </ul>
                  <p class="acordion-ttl" style="margin-top:15px;"><strong>専門医・指導医</strong></p>
                  <ul class="acordion-li">
                    <li>日本形成外科学会専門医</li>
                    <li>日本泌尿器科学会専門医・指導医</li>
                    <li style="margin-bottom:15px;">日本生殖医学会生殖医療専門医・指導医</li>
                  </ul>
                  <div class="swell-block-button is-style-btn_solid">
                    <a href="https://ginzarepro.jp/woman/w-staff/#aboutNagao" class="swell-block-button__link">
                      <span>プロフィール詳細を見る</span>
                    </a>
                  </div>
              </div>
            </div>
          </div>
          </div>
          <?php } ?>
          <style>
          i.icon-arrow_drop_down, i.icon-arrow_drop_up{
            font-style:normal;
          }
          .swell-block-button{
          margin: 30px auto;
              text-align: center;
              padding: 15px 50px;
              font-size: 15px;
              background: #ddc654;
              border-radius: 50px;
              width: 300px;
          }

          .acordion-ttl{
              font-size: 14px;
              padding: 10px 5px;
          }

          ul.acordion-li li{
              font-size: 13px;
              margin: 5px 0 0 10px;
          }

          .swell-block-accordion__title {
              align-items: center;
              background: rgb(200,200,200,0.15);
              display: flex;
              justify-content: space-between;
              padding: 1.1em;
              position: relative;
              font-size: 15px;
          }

              .swell-block-accordion__body {
                display: none;
                overflow: hidden;
                transition: max-height 0.3s ease-out; 
              }
            .swell-block-accordion strong {
                text-decoration: none;
                font-weight: normal;
            }

          </style>

          <script>
            function toggleAccordion() {
              const accordionBody = document.querySelector('.swell-block-accordion__body');
              const accordionIcon = document.querySelector('.swell-block-accordion__icon');

              const isExpanded = accordionBody.getAttribute('aria-hidden') === 'false';
              accordionBody.style.display = isExpanded ? 'none' : 'block';
              accordionBody.setAttribute('aria-hidden', isExpanded ? 'true' : 'false');

              const closedIcon = accordionIcon.querySelector('.__icon--closed');
              const openedIcon = accordionIcon.querySelector('.__icon--opened');

              closedIcon.style.display = isExpanded ? 'block' : 'none';
              openedIcon.style.display = isExpanded ? 'none' : 'block';
            }

            const accordionTitle = document.querySelector('.swell-block-accordion__title');
            accordionTitle.addEventListener('click', toggleAccordion);
          </script>
