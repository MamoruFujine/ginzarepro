<?php
  global $home_url;
  global $template_url;

  get_header();

 

?>

<main class="outer-block">
    <section class="c-main-ttl">
      <div class="inner-block02">
        <h1 class="c-main-ttl__txt">クリニック一覧</h1>
      </div>
    </section>
    <div class="c-bread">
      <div class="inner-block">
        <ul class="c-bread-list">
          <li>
            <a href="<?php echo $home_url?>/" class="c-bread-list__item">
              TOP
            </a>
          </li>
          <li>
            <div class="c-bread-list__item">
            クリニック一覧
            </div>
          </li>
        </ul>
      </div>
    </div>

    <section class="p_news-top-cont c-box04">
      <?php if (have_posts()) :?>

        <div class="inner-block">
          <ul class="c-list08">
          <?php while (have_posts()) : the_post();?>
            <li>
            <div class="c-access-cont">
              <div class="c-access-cont__box">
                <p class="c-access-cont__ttl">
                  <?php the_title(); ?>
                </p>
                  <div class="c-access-cont__img">
                    <?php if(has_post_thumbnail()): ?>
                      <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">
                    <?php else:?>
                      <img src="<?php echo $template_url;?>/img/common/dammy.jpg" alt="ダミー">
                    <?php endif;?>

                  </div>
                <div class="c-access-cont__box01">
                  <div class="c-access-cont__box02">
                    <?php $fields_clinic_info = get_field('clinic_info');?>
                    
                    <?php if(!empty($fields_clinic_info["clinic_info_address"])):?>
                      <p class="c-access-cont__address">
                        <?php echo nl2br($fields_clinic_info["clinic_info_address"]);?>
                      </p>
                    <?php endif;?>
                    <?php $fields_clinic_txt = get_field('clinic_txt');?>
                    <?php if(!empty($fields_clinic_txt)):?>
                      <p class="c-access-cont__station">
                        <?php echo nl2br($fields_clinic_txt);?>
                      </p>
                    <?php endif;?>
                    <div class="c-access-cont__telbox">
                      <?php if(!empty($fields_clinic_info["clinic_info_tel"])):?>
                        <p class="c-access-cont__tel">
                          <a href="tel:<?php echo $fields_clinic_info["clinic_info_tel"];?>"><?php echo $fields_clinic_info["clinic_info_tel"];?></a>
                        </p>
                      <?php endif;?>
                      <p class="c-access-cont__time">
                        <?php if(!empty($fields_clinic_info["clinic_info_time"])):?>
                        【診療時間】<?php echo $fields_clinic_info["clinic_info_time"];?><br>
                        <?php endif;?>
                        <?php if(!empty($fields_clinic_info["clinic_info_holiday"])):?>
                        【休診日】<?php echo $fields_clinic_info["clinic_info_holiday"];?><br>
                        <?php endif;?>
                        
                      </p>
                    </div>
                  </div>
                  <div class="c-access-cont__btn">
                    <div class="c-access-cont__btn01">
                      <a href="https://lin.ee/09ku8Px" target="_blank" class="c-btn05">LINE予約はこちら</a>
                    </div>
                    <div class="c-access-cont__btn01">
                      <a href="https://reservation.medical-force.com/c/4a7a018bbb624b30a34610d92e61a5f1" target="_blank" class="c-btn06">WEB予約はこちら</a>
                    </div>
                  </div>
                </div>
                <div class="c-access-cont__box03">
                  <a href="<?php the_permalink();?>" class="c-list05-txt__sub">
                    <div class="c-list05-txt__sub01">READMORE</div>
                    <span class="c-list05-txt__dec"></span>
                  </a>
                </div>
              </div>
            
            </div>
            </li>
            
            <?php endwhile;?>
            <?php wp_reset_postdata();?>

      
          </ul>
        
          
        </div>
      <?php else:?>
        <div class="c-soon">近日公開予定となっております。</div>
      <?php endif;?>
    </section>

    <?php get_template_part('inc/contact');?>
    <?php get_template_part('inc/access');?>

  </main>

<?php get_footer(); ?>