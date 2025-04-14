<?php
/*
手術記録ページ
Template Name: record
*/
?>
<?php get_header(); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">RECORDS</span>
                <p class="lowerHeader__title--jp">手術記録（ナガオメソッド）</p>
            </h1>
        </div>
    </section>

    <article class="contents__article article_cases">
      <div class="contents--lower">
        <div class="wrap">

      <div class="contents__text">
        <p>当院ではナガオメソッドによる自費による精索静脈瘤手術をいたしております。<br>顕微鏡下精索静脈瘤低位結紮術ナガオメソッドは必要なもの全てを残すので、機能の低下や合併症も殆どなく、<span class="Marker">精液所見の改善も87%（※1）</span>と高い結果を得られています。<br></p>          男性不妊でお悩みの方は東邦大学の永尾教授が開発したナガオメソッドによる精索静脈瘤手術をご検討ください。<p></p>
        <p class="mn">（※1 データ出典：Nagao K ，Nakajima K, et al：One day microsurgical varicocelectomy under local anesthesia． International Federation of Fertility(IFFS)/ Japan Society for Reproductive Medicine(JSRM) International Meeting 2015*(Symposium)* ，Yokohama，2015 4）</p>
      </div>
      <h2 class="contents__heading">
        <span class="contents__heading--text">ナガオメソッドと一般的な術式の比較</span>
      </h2>
        <!--<h3 class="nagaomethod__ttl">当院ではリスクが少なく男性不妊の効果改善が<br class="pc-mode">見込めるナガオメソッドを採用しています</h3>-->
      <ul class="nagaomethod-list">
        <li class="nagaomethod-list__item">
          <h4 class="nagaomethod-list__ttl">当院ではリスクが少なく<br>男性不妊の効果改善が見込める<br>ナガオメソッドを採用しています<br>（顕微鏡下精索静脈瘤<br class="sp-mode">低位結紮術）</h4>
          <p class="ups"><img src="https://ginzarepro.jp/lp/images/nagao_method_new_img1.jpg" alt="ナガオメソッド治療イメージ" class="nagaomethod-list__img1" width="499" height="500"></p>
          <p class="nagaomethod-list__txt">※特徴<br>精管・動脈・リンパ管・神経、大事なものをすべて温存します。逆流静脈は細かく結紮、太いものは切離します。</p>
          <p class="nagaomethod-list__txt">※時間<br>片側50分～90分（術者による）<br>※術者に必要な技能<br>熟練した技術と根気が必要です。
          </p><p class="nagaomethod-list__txt">※リスク<br>再発0.5％<br>合併症は、ほとんどありません。</p>
        </li>
        <li class="nagaomethod-list__item">
          <h4 class="nagaomethod-list__ttl">一般的に行われている<br>顕微鏡下低位結紮術</h4>
          <p class="ups"><img src="https://ginzarepro.jp/lp/images/nagaomethod_img02.jpg" alt="一括結紮による精索静脈瘤手術イメージ" class="nagaomethod-list__img2" width="360" height="486"></p>
          <p class="nagaomethod-list__txt">※特徴<br>精管１本、動脈１本を残して、その他動脈・神経・リンパ管を含んで逆流静脈を一括結紮します。</p>
          <p class="nagaomethod-list__txt">※時間<br>30分程度<br>※術者に必要な技能<br>経験の浅い術者でも手術が可能です。</p>
          <p class="nagaomethod-list__txt">※リスク<br>再発高い（一本の糸で縛るため、緩みやすく再発のリスクも高いです。）<br> 合併症は、血流障害・精巣委縮・リンパ浮腫・痛みのリスクがあります。</p>
        </li>
      </ul>
      <div class="btn-link"><a href="https://ginzarepro.jp/sinryo/varicocele/#i-17">精索静脈瘤手術・ナガオメソッドについて詳しくはこちら</a></div>

          <h2 class="contents__heading">
            <span class="contents__heading--text">手術記録</span>
          </h2>
              <?php
                $paged = get_query_var('paged',1);
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
                $record_other_7 = get_field('record_other_7');
                $record_other_8 = get_field('record_other_8');
                $record_other_9 = get_field('record_other_9');
                $record_other_10 = get_field('record_other_10');

                $case_img_1 = get_field('thumbnail_01');
                $case_img_2 = get_field('thumbnail_02');
                if( $image_01 ) {
                            $image_01 = wp_get_attachment_image_src( $image_01 , 'large' );
                            $thumbnail_01 = $image_01[0];
                        }

                 ?>

                <div class="item">
                    <div class="contents__text">
                        <?php /*<h3 class="contents__heading">
                           <span class="contents__heading--text"><?php the_title(); ?></span>
                        </h3>*/?>
        <div class="js-tab">
          <div class="record_tab">
            <ul class="clearfix">
              <li class="nagao"><a href="#record_content01" class="hover js-tab-trigger active">日帰り顕微鏡下精索静脈瘤手術<span>・ナガオメソッド</span></a></li>
              <li class="other"><a href="#record_content02" class="hover js-tab-trigger">一括結紮法<span>（一般的に行われている手術法）</span></a></li>
            </ul>
          </div><!-- record_tab -->
          <div class="record_content-wrap">
            <section class="js-tab-content active" id="record_content01">
                        
                        <?php
                        $record_imglist_nagao = $cfs->get('record_imglist_nagao');
                        if(!empty($record_imglist_nagao)): $num = 0;
                            echo '<div class="case_photos record new">';
                            foreach ($record_imglist_nagao as $field) : $num++;
                                $record_img_nagao = $field['record_img_nagao'];

                                if(!empty($record_img_nagao)){
                                    $img_data_nagao = wp_get_attachment_image_src( $record_img_nagao , 'large' );
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

                            ?>
                            <div class="record_photo_slider list-<?php echo $num; ?>">
                              <div class="flex-box">
                                <figure><img src="<?php echo $img_url_nagao; ?>" width="<?php echo $img_width_nagao; ?>" height="<?php echo $img_height_nagao; ?>" alt="手術記録"></figure>
                                <?php 
                                //ナガオメソッド 表
                                if(!empty($record_nagao_1 || $record_nagao_2 || $record_nagao_3 || $record_nagao_4 || $record_nagao_5 || $record_nagao_6 || $record_nagao_7 || $record_nagao_8 || $record_nagao_9 || $record_nagao_10 )){ 
                                  echo '<div class="tbl_case-wrap">'.PHP_EOL;
                                    echo '<table class="tbl_case record new">'.PHP_EOL;

                                  if(!empty($record_nagao_1 || $record_nagao_2 || $record_nagao_3 || $record_nagao_4 || $record_nagao_5 )){
                                  $rowspan_nagao = 1;
                                  if(!empty($record_nagao_1)){ $rowspan_nagao++; }
                                  if(!empty($record_nagao_2)){ $rowspan_nagao++; }
                                  if(!empty($record_nagao_3)){ $rowspan_nagao++; }
                                  if(!empty($record_nagao_4)){ $rowspan_nagao++; }
                                  if(!empty($record_nagao_5)){ $rowspan_nagao++; }

                                    echo '<tr>'.PHP_EOL;
                                    echo '<th class="th01" rowspan="'.$rowspan_nagao.'">温存</th>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                  }

                                    if(!empty($record_nagao_1)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>逆流静脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_1.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_2)){
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>精管</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_2.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_3)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>動脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_3.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_4)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>リンパ管</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_4.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_5)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>神経</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_5.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                  if(!empty($record_nagao_6 || $record_nagao_7 || $record_nagao_8 || $record_nagao_9 || $record_nagao_10 )){
                                  $rowspan_nagao2 = 1;
                                  if(!empty($record_nagao_6)){ $rowspan_nagao2++; }
                                  if(!empty($record_nagao_7)){ $rowspan_nagao2++; }
                                  if(!empty($record_nagao_8)){ $rowspan_nagao2++; }
                                  if(!empty($record_nagao_9)){ $rowspan_nagao2++; }
                                  if(!empty($record_nagao_10)){ $rowspan_nagao2++; }

                                    echo '<tr>'.PHP_EOL;
                                    echo '<th class="th01" rowspan="'.$rowspan_nagao2.'">結紮</th>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                  }

                                    if(!empty($record_nagao_8)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>動脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_8.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_9)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>リンパ管</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_9.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_10)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>神経</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_10.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_6)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>逆流静脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_6.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_nagao_7)){
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>精管</th>'.PHP_EOL;
                                        echo '<td>'.$record_nagao_7.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    echo '</table>'.PHP_EOL;
                                    echo '</div>'.PHP_EOL;
                                }
                                ?>
                              </div><!-- /.flex-box -->
                            </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

            </section>
            <section class="js-tab-content" id="record_content02">
              <div class="flex-box">
                        <?php
                        $record_imglist_other = $cfs->get('record_imglist_other');
                        if(!empty($record_imglist_other)): $num = 0;
                            echo '<div class="case_photos record">';
                            foreach ($record_imglist_other as $field) : $num++;
                                $record_img_other = $field['record_img_other'];

                                if(!empty($record_img_other)){
                                    $img_data_other = wp_get_attachment_image_src( $record_img_other , 'large' );
                                    $img_url_other = $img_data_other[0];
                                    $img_width_other = $img_data_other[1] / 2;
                                    $img_height_other = $img_data_other[2] / 2;
                                }

                            ?>
                            <div class="record_photo_slider list-<?php echo $num; ?>">
                                <figure><img src="<?php echo $img_url_other; ?>" width="<?php echo $img_width_other; ?>" height="<?php echo $img_height_other; ?>" alt="手術記録"></figure>
                            </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                                <?php 
                                //一括結紮法 表
                                if(!empty($record_other_1 || $record_other_2 || $record_other_3 || $record_other_4 || $record_other_5 || $record_other_6 || $record_other_7 || $record_other_8 || $record_other_9 || $record_other_10 )){ 
                                  echo '<div class="tbl_case-wrap">'.PHP_EOL;

                                  $rowspan_other2 = 1;
                                  $rowspan_otherx = 0;
                                  if(!empty($record_other_6)){ $rowspan_other2++;  }
                                  if(!empty($record_other_7)){ $rowspan_other2++; }
                                  if(!empty($record_other_8)){ $rowspan_other2++; $rowspan_otherx++;}
                                  if(!empty($record_other_9)){ $rowspan_other2++; $rowspan_otherx++;}
                                  if(!empty($record_other_10)){ $rowspan_other2++; $rowspan_otherx++;}
                                  if(!empty($rowspan_otherx)){
                                    $rowspan_otherx = $rowspan_otherx;
                                  echo '<div class="att-txt pc-'.$rowspan_otherx.'">損傷リスクあり</div>';
                                  }
                                    echo '<table class="tbl_case record">'.PHP_EOL;

                                  if(!empty($record_other_1 || $record_other_2 || $record_other_3 || $record_other_4 || $record_other_5 )){
                                  $rowspan_other = 1;
                                  if(!empty($record_other_1)){ $rowspan_other++; }
                                  if(!empty($record_other_2)){ $rowspan_other++; }
                                  if(!empty($record_other_3)){ $rowspan_other++; }
                                  if(!empty($record_other_4)){ $rowspan_other++; }
                                  if(!empty($record_other_5)){ $rowspan_other++; }

                                    echo '<tr>'.PHP_EOL;
                                    echo '<th class="th01" rowspan="'.$rowspan_other.'">温存</th>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                  }

                                    if(!empty($record_other_3)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>動脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_3.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_4)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>リンパ管</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_4.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_5)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>神経</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_5.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_1)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>逆流静脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_1.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_2)){
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>精管</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_2.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }


                                  if(!empty($record_other_6 || $record_other_7 || $record_other_8 || $record_other_9 || $record_other_10 )){

                                    echo '<tr>'.PHP_EOL;
                                    echo '<th class="th01" rowspan="'.$rowspan_other2.'">結紮</th>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                  }


                                    if(!empty($record_other_7)){
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>精管</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_7.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_6)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th>逆流静脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_6.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }
                                    
                                    if(!empty($record_other_10)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th class="th02">神経</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_10.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_8)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th class="th02">動脈</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_8.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    if(!empty($record_other_9)){ 
                                        echo '<tr>'.PHP_EOL;
                                        echo '<th class="th02">リンパ管</th>'.PHP_EOL;
                                        echo '<td>'.$record_other_9.'本</td>'.PHP_EOL;
                                        echo '</tr>'.PHP_EOL;
                                    }

                                    echo '</table>'.PHP_EOL;
                                    echo '</div>'.PHP_EOL;
                                }
                            ?>
                              </div><!-- /.flex-box -->
                    </section>
                    </div><!-- /.js-tab-->
                    </div>
                </div>
                <?php endwhile;
                ?>
                <?php
                echo '<div class="navi-box_case">';
                    wp_pagenavi(array('query' => $query));
                    // 現在のページ番号を取得
                    $current_page = get_query_var( 'paged' ); 
                    $current_page = $current_page == 0 ? '1' : $current_page;
                    $max_pages = (int)$query->max_num_pages; //全ページ
                    $all_pages = (int)$query->found_posts; //全件
                    $current_page_start = (int)$current_page - 1;
                    /*
                    if(!is_paged()){
                        if ( 10 > $all_pages ) {
                            $current_start_last = $current_page.'-'.$all_pages.'件';
                        }else{
                            $current_start_last = $current_page.'-'.$current_page.'0件';
                        }
                    }else{
                        if ( $current_page == $max_pages ) {
                            $current_start_last = $current_page_start.'1-'.$all_pages.'件';
                        }else{
                            $current_start_last = $current_page_start.'1-'.($current_page_start+1).'0件';
                        }
                    }
                    */
                        $current_page2 = $current_page+1;
                        $current_start_last = $current_page.'件目';
                    echo '<p>'. $current_start_last . '/' .$all_pages . '件</p>';
                    echo '</div>';

                    endif; wp_reset_postdata();
                ?>
                </div><!-- /.wrap -->
            </div>

      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">診療・手術一覧</span>
        </h2>
        <?php get_template_part('includes/sinryo-menu'); //診療メニュー ?>
      </article>

    <section class="about">
      <div class="about--inner">
      <!--<h2 class="about__heading">当院のポリシー</h2>-->
        <div class="policy">
          <!--<p class="policy__text">
            日帰り顕微鏡下精索静脈瘤手術（ナガオメソッド・自由診療）などの提供を、できるだけお待たせしないことが当院の方針です。<br>
            そのため費用はかかりますが、土日祝日夜間、遠方の方は遠隔診療で医療情報が十分得られれば即日手術も対応しています。<br>
        ※<a href="/lp/" target="_blank">精索静脈瘤手術の内容についてはこちらよりご確認</a>ください。
          </p>-->
          <ul class="policy__link">
            <li class="policy__link__item--color">
              <p class="policy__link__item__heading">精液検査をご希望の方へ</p>
              <p class="policy__link__item__text">
                精索静脈瘤があれば、精子の質が低下します。当院は高い専門性と技術を必要とする、精索静脈瘤検診および日帰り顕微鏡下精索静脈瘤低位結紮術・ナガオメソッドを行っているため、一般的な検査は、東邦大学大森病院をはじめ提携医療機関をご紹介させていただいております。
              </p>
            </li>
            <li class="policy__link__item">
              <p class="policy__link__item__heading">患者様へのお願い</p>
              <p class="policy__link__item__text">
          海外や国内の医師が、医療水準の向上のために当院で手術見学をする場合があります。<br>ご理解ご協力いただけますようお願い申し上げます。<br>また、ご協力いただけない場合は、事前にお申し出ください。
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <div class="map">
      <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1535248175046!2d139.76586911525862!3d35.673221580196135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be3fea240d3%3A0xe0a00c9bc5230399!2z6YqA5bqn44Oq44OX44Ot5aSW56eR772c55S35oCn5bCC6ZaA5LiN5aaK44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1543928789058"
        frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    </section>
    <section class="linkArea">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
    </section>
          </div>

        </article>
        </div><!-- /.page-wrap -->

        <?php get_footer(); ?>
<style>
</style>