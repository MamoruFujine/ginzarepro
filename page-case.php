<?php
/*
症例一覧ページ
Template Name: case
固定ページ case と 詳細非生成カスタム投稿 cases
*/
?>
<?php get_header('woman'); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">CASE REPORTS</span>
                <p class="lowerHeader__title--jp">症例紹介</p>
            </h1>
        </div>
    </section>

    <article class="contents__article article_cases">
        <div class="contents--lower">
            <section class="about">
                <div class="about--inner">
                    <h2 class="about__heading">初めての方へ</h2>
                    <div class="policy">
                        <p class="policy__text">当院で実際に⾏った治療の症例紹介をさせていただきます。<br>当院ではリンパ浮腫の⼿術や研究に⻑けた専⾨医が⼿術の執⼑医となります。<br>当院では⽇帰り⼿術のリンパ管静脈吻合術（LVA）と保存的治療であるリンパトレナージや弾性ストッキングの開発等を⾏っており、リンパ浮腫でお悩みの患者さまのトータルサポートを⾏っております。<br>⼿術のご参考に下記の症例⼀覧をご覧ください。<br>※写真掲載に関しては患者さまに書⾯による同意を得ております。<br>※医療法上の広告ガイドラインに則り、症例写真を掲載しております。</p>
                    </div>
                </div>
            </section>

            <div class="wrap">
                <div class="contents--lower__heading">
                    <h2 class="contents--lower__heading--text">症例一覧</h2>
                </div>
                <?php
                $paged = get_query_var('paged',1);
                $args = array(
                    'post_type' => 'cases',
                    'posts_per_page' => 10,
                    'status' => 'publish',
                    'paged' => $paged,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
                $case_txt_1 = get_field('case_txt_1');
                $case_txt_2 = get_field('case_txt_2');
                $case_txt_3 = get_field('case_txt_3');
                $case_txt_4 = get_field('case_txt_4');
                $case_img_1 = get_field('thumbnail_01');
                $case_img_2 = get_field('thumbnail_02');
                if( $image_01 ) {
                            $image_01 = wp_get_attachment_image_src( $image_01 , 'large' );
                            $thumbnail_01 = $image_01[0];
                        }

                 ?>

                <div id="case_<?php the_ID(); ?>" class="item">
                    <div class="contents__text">
                        <h3 class="contents__heading">
                           <span class="contents__heading--text"><?php the_title(); ?></span>
                        </h3>
                        <?php
                        $fields = $cfs->get('case_photos');
                        if(!empty($fields)): $num = 0;
                            echo '<div class="case_photos">';
                            foreach ($fields as $field) : $num++;
                                $img_id_before = $field['case_photos_before'];
                                $img_id_after = $field['case_photos_after'];

                                if(!empty($img_id_before)){
                                    $img_data_before = wp_get_attachment_image_src( $img_id_before , 'large' );
                                    $img_url_before = $img_data_before[0];
                                    $img_width_before = $img_data_before[1] / 2;
                                    $img_height_before = $img_data_before[2] / 2;
                                }

                                if(!empty($img_id_after)){
                                    $img_data_after = wp_get_attachment_image_src( $img_id_after , 'large' );
                                    $img_url_after = $img_data_after[0];
                                    $img_width_after = $img_data_after[1] / 2;
                                    $img_height_after = $img_data_after[2] / 2;
                                }

                                $case_photos_before_txt = $field['case_photos_before_txt'];
                                if(empty($case_photos_before_txt)){
                                    $case_photos_before_txt =  get_the_title().' 術前写真 '.$num;
                                }

                                $case_photos_after_txt = $field['case_photos_after_txt'];
                                if(empty($case_photos_after_txt)){
                                    $case_photos_after_txt =  get_the_title().' 術後写真 '.$num;
                                }

                            ?>
                            <div class="ba_photo-list list-<?php echo $num; ?>">
                                <div class="ba_photo-box">
                                    <figure><img src="<?php echo $img_url_before; ?>" width="<?php echo $img_width_before; ?>" height="<?php echo $img_height_before; ?>" alt="<?php echo $case_photos_before_txt; ?>"></figure>
                                    <figure><img src="<?php echo $img_url_after; ?>" width="<?php echo $img_width_after; ?>" height="<?php echo $img_height_after; ?>" alt="<?php echo $case_photos_after_txt; ?>"></figure>
                                </div>
                            </div>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>

                        <?php 
                            if(!empty($case_txt_1 || $case_txt_2 || $case_txt_3 || $case_txt_4)){ 
                                echo '<table class="tbl_case">'.PHP_EOL;

                                if(!empty($case_txt_1)){ 
                                    echo '<tr>'.PHP_EOL;
                                    echo '<th>治療内容</th>'.PHP_EOL;
                                    echo '<td>'.$case_txt_1.'</td>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                }

                                if(!empty($case_txt_2)){
                                    echo '<tr>'.PHP_EOL;
                                    echo '<th>手術回数</th>'.PHP_EOL;
                                    echo '<td>'.$case_txt_2.'</td>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                }

                                if(!empty($case_txt_3)){ 
                                    echo '<tr>'.PHP_EOL;
                                    echo '<th>費用</th>'.PHP_EOL;
                                    echo '<td>'.$case_txt_3.'</td>'.PHP_EOL;
                                    echo '</tr>'.PHP_EOL;
                                }

                                echo '</table>'.PHP_EOL;

                                if(!empty($case_txt_4)){ 
                                    echo '<p class="att_txt_case">'.PHP_EOL;
                                    echo '<span>※リスク・副作用：</span>'.PHP_EOL;
                                    echo $case_txt_4;
                                    echo '</p>'.PHP_EOL;
                                }
                            }
                        ?>

                    </div>
                </div>
                <?php endwhile;
                    else: echo '<p style="text-align:center;font-size:16px;margin:2em auto 5em;">症例の投稿はまだありません。</p>';
                    endif; 
                ?>
                <!--<section class="about">
                    <div class="about--inner">
                        <h2 class="about__heading">⼿術のリスクや合併症について</h2>
                        <div class="policy">
                            <p class="policy__text">⽪膚切開部位からリンパ液が漏れる、⽪膚切開をした傷跡が⽬⽴つ、といった合併症が⽣じることがあり得ます。<br>また、リンパ液が漏れることで、リンパ浮腫の進⾏を促進させてしまう可能性がございます。</p>
                        </div>
                    </div>
                </section>-->
                <?php
                echo '<div class="navi-box_case">';
                    wp_pagenavi(array('query' => $query));
                    // 現在のページ番号を取得
                    $current_page = get_query_var( 'paged' ); 
                    $current_page = $current_page == 0 ? '1' : $current_page;
                    $max_pages = (int)$query->max_num_pages; //全ページ
                    $all_pages = (int)$query->found_posts; //全件
                    $current_page_start = (int)$current_page - 1;
                    if(!is_paged()){
                        if ( 0 === $all_pages  ) {
                            $current_start_last = '0件';
                        }elseif ( 10 > $all_pages ) {
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
                    echo '<p>'. $current_start_last . '/' .$all_pages . '件</p>';
                    echo '</div>';
                    wp_reset_postdata();
                ?>
                </div><!-- /.wrap -->
            </div>
            
        </article>
        <?php get_template_part('includes/sns-woman'); ?>
        </div><!-- /.page-wrap -->
        <?php get_footer('woman'); ?>
  