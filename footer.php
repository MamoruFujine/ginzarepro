<?php
    $line_url = 'tel:03-51592240';
    if(is_single('10562')){ //〜/sinryo/lva-en/
        $line_url = 'tel:03-51592240';
    }
?>
<?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>
<?php get_footer('woman'); ?>
<?php else : ?>
<?php if(!is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ ?>
<footer class="footer<?php if (is_singular('sinryo')){ echo ' f-sinryo-sblue';} //if (is_single(array('71','10677'))){ echo ' f-sinryo-sblue';} ?>">
    <div class="footer__about">
        <!-- div class="footer__about__guide">
          <p class="footer__about__guide__heading">手術日のご案内</p>
          <p class="footer__about__guide__text">
            以下日程にて手術を実施しております。<br />
            手術ご希望の方はご確認ください。<br />
            毎週水、金、土、日曜日（土曜日は午後のみ）
          </p>
        </div -->
        <img class="footer__about__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__logo.png"
            alt="医療法人社団マイクロ会　銀座リプロ外科" />
        <div class="footer__about__contact">
            <p class="footer__about__contact__text">お問い合わせ・ご質問はこちら</p>
            <a class="footer__about__contact__tel" href="tel:0351592240">
                <span class="fas fa-phone"></span> 03-5159-2240
            </a>
        </div>
        <p class="footer__about__address">
            〒104-0061 東京都中央区銀座2-8-19 FPG links GINZA 6F
        </p>

        <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>

        <div class="footer__about__guide">
            <p class="footer__about__guide__heading">初診のご案内【完全予約制】</p>
            <p class="footer__about__guide__text"><strong>毎週月曜日13:00&#65374;</strong></p>
        </div>


        <div class="footer__about__practiceTime--wrap">
            <!--        <div class="footer__about__practiceTime">
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">初診日</dt>
            <dd class="footer__about__practiceTime--contents">
              9:00&#65374;9:30
            </dd>
            <dd class="footer__about__practiceTime--contents">
              16:00&#65374;
            </dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">月</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">火</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">水</dt>
            <dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">木</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">金</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">土</dt>
            <dd class="footer__about__practiceTime--contents">第3</dd>
            <dd class="footer__about__practiceTime--contents">○※</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">日</dt>
            <dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
                      <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">祝日</dt>
            <dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
        </div>-->
            <p class="footer__about__practiceTime__attention">
                ※メールでのご対応は、土日も含め随時行っております。<br>
                ※医師の学会参加などで休診の場合は、ご連絡が遅くなる場合がございます。
            </p>
            <ul class="follow-me" id="sns_d">
                <p>公式SNS</p>
                <li><a href="https://www.facebook.com/ginzarepro/" target="_blank"></a></li>
                <li><a href="https://twitter.com/ginzarepro" target="_blank"></a></li>
                <li><a href="https://www.instagram.com/ginzarepro/" target="_blank"></a></li>
            </ul>
        </div>

        <?php else : ?>

        <div class="footer__about__guide">
            <p class="footer__about__guide__heading">初診のご案内【完全予約制】</p>
            <!--<p class="footer__about__guide__text">
          以下の時間以外でも初診対応している場合がございます。詳しくはお問い合わせください。
          </p>-->
        </div>

        <div class="footer__about__practiceTime--wrap">
            <div class="footer__about__practiceTime">
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">初診日</dt>
                    <dd class="footer__about__practiceTime--contents">
                        9:00&#65374;12:00
                    </dd>
                    <dd class="footer__about__practiceTime--contents">
                        13:00&#65374;19:00
                    </dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">月</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">火</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">水</dt>
                    <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
                    <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">木</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">金</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">土</dt>
                    <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">日</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
                <dl class="footer__about__practiceTime--col">
                    <dt class="footer__about__practiceTime--header">祝日</dt>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                    <dd class="footer__about__practiceTime--contents">○</dd>
                </dl>
            </div>
            <p class="footer__about__practiceTime__attention">
                ※土曜日の初診は17:30&#65374;となります。<br>
                ※メールでのご対応は、土日も含め随時行っております。<br>
                ※学会参加などで休診の場合がございます。
            </p>
            <ul class="follow-me" id="sns_d">
                <p>公式SNS</p>
                <li><a href="https://www.facebook.com/ginzarepro/" target="_blank"></a></li>
                <li><a href="https://twitter.com/ginzarepro" target="_blank"></a></li>
                <li><a href="https://www.instagram.com/ginzarepro/" target="_blank"></a></li>
            </ul>
            <ul class="english-site">
                <li><span class="footer__navi__item">English Contents</span></li>
                <li><a href="https://ginzarepro.jp/sinryo/varicocele-en/" target="_blank"
                        class="footer__navi__item__child">Varicocelectomy</a></li>
                arepro.jp/sinryo/nagao_method-en/" target="_blank" class="footer__navi__item__child">Nagao method</a>
                </li>
                <li><a href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction-en/" target="_blank"
                        class="footer__navi__item__child">Vasectomy Reversa</a></li>
            </ul>
        </div>


        <?php endif; ?>

        <ul class="footer__navi_sp">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">トップページ</a></li>
            <li><a href="<?php echo esc_url(home_url('/staff/')); ?>">当院について</a></li>
            <!--<li><a href="<?php echo esc_url(home_url('/sinryo/')); ?>">診療・手術一覧</a></li>-->
            <!--<li><a href="<?php echo esc_url(home_url('/worry/')); ?>">お悩みから探す</a></li>-->
            <li><a href="<?php echo esc_url(home_url('/cost/')); ?>">費用</a></li>
            <li><a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a></li>
            <li><a href="<?php echo esc_url(home_url('/column/')); ?>">基礎知識</a></li>
            <li><a href="<?php echo esc_url(home_url('/prolapse/')); ?>">骨盤臓器脱</a></li>
            <li><a href="<?php echo esc_url(home_url('/records/')); ?>">手術記録</a></li>
            <li><a href="<?php echo esc_url(home_url('/media/')); ?>">メディア掲載情報</a></li>
            <li><a href="<?php echo esc_url(home_url('/interview/')); ?>">取材について</a></li>
            <li><a href="<?php echo esc_url(home_url('/online/')); ?>">オンライン診療</a></li>
            <li><a href="<?php echo esc_url(home_url('/access/')); ?>">交通アクセス</a></li>
            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a></li>
        </ul>
    </div>
    <div class="footer__navi">
        <ul class="footer__navi--wrap">
            <li><a class="footer__navi__item" href="/">トップページ</a></li>
            <li><a class="footer__navi__item" href="/staff/">当院について</a></li>

            <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?><?php else : ?>

            <li>
                <a class="footer__navi__item" href="<?php echo esc_url(home_url('/sinryo/')); ?>">診療・手術一覧</a>
                <ul class="footer__navi__item__lower--wrap">
                    <li><a class="footer__navi__item__lower"
                            href="<?php echo esc_url(home_url('/sinryo/varicocele/')); ?>">精索静脈瘤治療</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/nagao_method/')); ?>"
                                class="footer__navi__item__child">日帰り顕微鏡下精索静脈瘤手術・ナガオメソッド</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/varicocele/')); ?>"
                                class="footer__navi__item__child">精索静脈瘤検診</a>
                        </li>
                    </ul>

                    <li><a class="footer__navi__item__lower">リンパ浮腫治療</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/lva/')); ?>"
                                class="footer__navi__item__child">LVA手術（リンパ管細静脈吻合術）</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/lymph_drainage/')); ?>"
                                class="footer__navi__item__child">銀座リプロ式リンパドレナージ</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/column/rubber-stockings/')); ?>"
                                class="footer__navi__item__child">オーダーメイド弾性ストッキング</a>
                        </li>
                    </ul>

                    <li><a class="footer__navi__item__lower"
                            href="<?php echo esc_url(home_url('/sinryo/%e9%9b%a3%e6%b2%bb%e6%80%a7ed%e5%a4%96%e6%9d%a5/')); ?>">難治性ED治療</a>
                    </li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/penile-injections/')); ?>"
                                class="footer__navi__item__child">海綿体・陰茎注射</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/prosthetic/')); ?>"
                                class="footer__navi__item__child">日帰り陰茎プロステーシス手術</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/lp/prosthesis/')); ?>"
                                class="footer__navi__item__child">陰茎プロステーシス手術特設ページ</a>
                        </li>
                    </ul>
                    <li><a class="footer__navi__item__lower">陰茎湾曲症治療</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/inkei/')); ?>"
                                class="footer__navi__item__child">日帰り顕微鏡下陰茎彎曲症手術</a>
                        </li>
                    </ul>
                    <li><a class="footer__navi__item__lower">パイプカットおよび再建手術</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/about-pipecut/')); ?>"
                                class="footer__navi__item__child">日帰り顕微鏡下パイプカット手術（避妊手術）</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/pipe-cut-reconstruction/')); ?>"
                                class="footer__navi__item__child">日帰り顕微鏡下パイプカット再建手術（男性不妊治療・妊活）</a>
                        </li>
                    </ul>
                    <li><a class="footer__navi__item__lower" href="<?php echo esc_url(home_url('/')); ?>">免疫療法</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/nk/')); ?>"
                                class="footer__navi__item__child">NK細胞療法</a>
                        </li>
                        <li>
                            <a href="<?php echo esc_url(home_url('/sinryo/cat/')); ?>"
                                class="footer__navi__item__child">T細胞療法</a>
                        </li>
                    </ul>
                    <li><a class="footer__navi__item__lower" href="<?php echo esc_url(home_url('/')); ?>">その他</a></li>
                    <ul class="footer__navi__item__child--wrap">
                        <li>
                            <a href="https://ginzarepro.jp/sinryo/gikougan/"
                                class="footer__navi__item__child">精巣インプラント（偽睾丸挿入術）</a>
                        </li>
                        <li>
                            <a href="https://ginzarepro.jp/sinryo/scrotal-ptosis-surgery/"
                                class="footer__navi__item__child">陰嚢下垂手術</a>
                        </li>
                    </ul>



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
          <li><a class="footer__navi__item__lower" href="/sinryo/#<?php echo get_post_field('post_name', get_the_ID()); ?>"><?php the_title(); ?></a></li>
<?php endforeach; ?>
<?php endif;
                                                                                                                                                                                                                                                                                    wp_reset_postdata(); //クエリのリセット 
?>-->
                </ul>
            </li>

            <!-- li>
          <a class="footer__navi__item" href="/sinryo/#forWomen">女性向け手術</a>
        </li -->

        </ul>
        <ul class="footer__navi--wrap">
            <li><a class="footer__navi__item" href="/cost/">費用</a></li>
            <li><a class="footer__navi__item" href="/online/">オンライン診療</a></li>
            <li><a class="footer__navi__item" href="/faq/">よくある質問</a></li>
            <li><a class="footer__navi__item" href="/column/">基礎知識</a></li>
            <li><a class="footer__navi__item" href="<?php echo esc_url(home_url('/prolapse/')); ?>">骨盤臓器脱</a></li>
            <!--<ul class="footer__navi__item__child--wrap">
            <li><a href="https://urogyne.jp/prolapse/prolapse-surgery/" target="_blank" class="footer__navi__item__child">骨盤臓器脱（子宮脱・性器脱）の手術、失敗のリスクやデメリット、費用は？</a></li>
            <li style="padding-bottom: 1em;"><a href="https://urogyne.jp/prolapse/intercourse/" target="_blank" class="footer__navi__item__child">骨盤臓器脱になったとき、セックスは続けられますか？</a></li>
            </ul>-->

            <li>
                <ul class="follow-me">
                    <p>公式SNS</p>
                    <li><a href="https://www.facebook.com/ginzarepro/" target="_blank"></a></li>
                    <li><a href="https://twitter.com/ginzarepro/" target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/ginzarepro/" target="_blank"></a></li>
                </ul>
            </li>
            <li>
                <a class="footer__navi__item" href="/interview/">取材について</a>
            </li>
            <li><span class="footer__navi__item">English Contents</span></li>
            <li><a href="https://ginzarepro.jp/sinryo/varicocele-en/" target="_blank"
                    class="footer__navi__item__child">Varicocelectomy</a></li>
            <li><a href="https://ginzarepro.jp/sinryo/nagao_method-en/" target="_blank"
                    class="footer__navi__item__child">Nagao method</a></li>
            <li><a href="https://ginzarepro.jp/sinryo/pipe-cut-reconstruction-en/" target="_blank"
                    class="footer__navi__item__child">Vasectomy Reversa</a></li>
            <?php endif; ?>

        </ul>

        <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>
        <ul class="footer__navi--wrap">
            <li><a class="footer__navi__item" href="/faq/">よくある質問</a></li>
        </ul>
        <?php endif; ?>


    </div>


    <div class="footer__copyWright">c 2019 Association of Microsurgery, Ginza Reproductive Surgery.</div>

    <?php if(!is_page(array('contact','appointment-first','appointment-first_lp','appointment-revisit'))){ ?>
    <?php if (is_single('lva')) : ?>
    <div class="footer__spNavi">
        <a class="footer__spNavi__item" style="width: calc(32.5% - (0px / 3));" href="/lva/appointment-first/"
            target="_blank">
            <div class="footer__spNavi__item--inner">
                <img class="footer__spNavi__item__img"
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                    alt="" />
                <p class="footer__spNavi__item__text">初診予約</p>
            </div>
        </a>
        <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="/lva/appointment-revisit/">
            <div class="footer__spNavi__item--inner">
                <img class="footer__spNavi__item__img"
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                    alt="" />
                <p class="footer__spNavi__item__text">再診予約</p>
            </div>
        </a>
        <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="<?php echo $line_url; ?>">
            <div class="footer__spNavi__item--inner">
                <img class="footer__spNavi__item__img"
                    src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--tel.png"
                    alt="" />
                <p class="footer__spNavi__item__text">電話予約</p>
            </div>
        </a>
        <?php elseif (is_page(array('appointment-first', 'appointment-first_lp', 'appointment-revisit'))) : ?>
        <div class="footer__spNavi">
            <a class="footer__spNavi__item" style="width: calc(32.5% - (0px / 3));" href="/lva/appointment-first/"
                target="_blank">
                <div class="footer__spNavi__item--inner">
                    <img class="footer__spNavi__item__img"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                        alt="" />
                    <p class="footer__spNavi__item__text">初診予約</p>
                </div>
            </a>
            <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="/lva/appointment-revisit/">
                <div class="footer__spNavi__item--inner">
                    <img class="footer__spNavi__item__img"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                        alt="" />
                    <p class="footer__spNavi__item__text">再診予約</p>
                </div>
            </a>
            <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="<?php echo $line_url; ?>">
                <div class="footer__spNavi__item--inner">
                    <img class="footer__spNavi__item__img"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--tel.png"
                        alt="" />
                    <p class="footer__spNavi__item__text">電話予約</p>
                </div>
            </a>
            <?php else : ?>

            <div class="footer__spNavi">
                <a class="footer__spNavi__item" style="width: calc(24.5% - (0px / 4));"
                    href="/contact/appointment-first/" target="_blank">
                    <div class="footer__spNavi__item--inner">
                        <img class="footer__spNavi__item__img"
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                            alt="" />
                        <p class="footer__spNavi__item__text">初診予約</p>
                    </div>
                </a>
                <a class="footer__spNavi__item" style="width: calc(25% - (0px / 4));"
                    href="/contact/appointment-revisit/">
                    <div class="footer__spNavi__item--inner">
                        <img class="footer__spNavi__item__img"
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--reservation.png"
                            alt="" />
                        <p class="footer__spNavi__item__text">再診予約</p>
                    </div>
                </a>
                <a class="footer__spNavi__item" style="width: calc(25% - (0px / 4));" href="<?php echo $line_url; ?>">
                    <div class="footer__spNavi__item--inner">
                        <img class="footer__spNavi__item__img"
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--tel.png"
                            alt="" />
                        <p class="footer__spNavi__item__text">電話予約</p>
                    </div>
                </a>
                <a class="footer__spNavi__item" style="width: calc(24.5% - (0px / 4));" href="/contact/">
                    <div class="footer__spNavi__item--inner">
                        <img class="footer__spNavi__item__img"
                            src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--operation.png"
                            alt="" />
                        <p class="footer__spNavi__item__text">お問い合わせ</p>
                    </div>
                </a>
                <!--<a class="footer__spNavi__item" style="width: calc(33% - (0px / 4));" href="/online/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/footer__spNavi__item__img--online.png" alt="" />
          <p class="footer__spNavi__item__text">オンライン<br />診療</p>
        </div>
      </a>-->
                <?php endif; ?>
                <p class="footer__spNavi__attention">
                    銀座リプロ外科は完全予約制です。
                </p>
            </div>
            <?php } ?>


</footer>
<?php } ?>
<?php if (!is_home() && !is_front_page()) : ?>

<?php if (is_single('lva')) : ?>
<div id="footerFloatingMenu3">
    <div class="floatingbtn">
        <a class="mainVis__contact" href="/lva/appointment-first/" target="_blank">
            <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
                <span class="fas fa-envelope"></span>ご予約・お問い合わせ
            </p>
        </a>
    </div>
</div>
<?php elseif (is_page(array(1608, 1621))) : ?>
<div id="footerFloatingMenu3">
    <div class="floatingbtn">
        <a class="mainVis__contact" href="/lva/appointment-first/" target="_blank">
            <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
                <span class="fas fa-envelope"></span>ご予約・お問い合わせ
            </p>
        </a>
    </div>
</div>
<?php elseif (is_single('lva-s')) : ?>
<div id="footerFloatingMenu3">
    <div class="floatingbtn">
        <a class="mainVis__contact" href="/lva/appointment-first/" target="_blank">
            <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
                <span class="fas fa-envelope"></span>ご予約・お問い合わせ
            </p>
        </a>
    </div>
</div>
<?php else : ?>
<?php if(!is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ ?>
<div id="footerFloatingMenu3">
    <div class="floatingbtn">
        <a class="mainVis__contact" href="/contact/appointment-first/" target="_blank">
            <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
                <span class="fas fa-envelope"></span>ご予約・お問い合わせ
            </p>
        </a>
    </div>
</div>
<?php } ?>
<?php endif; ?>

<?php endif; ?>



<style>
#footerFloatingMenu3 {
    position: fixed;
    top: 0px;
    right: 0px;
    padding: 30px;
    color: #fff;
    z-index: 2;
}

#footerFloatingMenu3 a {
    display: block;
    border: solid #ff2a2a;
    padding: 20px;
    background: #FFF;
    font-size: 14px;
    color: #ff2a2a;
}

@media screen and (max-width: 480px) {
    #footerFloatingMenu3 {
        display: none !important;
    }
}
</style>




<script>
jQuery(function() {
    var topBtn = jQuery('#footerFloatingMenu3');
    topBtn.hide();
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 200) { // 200pxで表示
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});
</script>
<div class="pagetop"></div>
<?php if(is_single()){ ?>
<script>
$(function() {
    $('a[href^="#"]:not(.js-tab-trigger,.ez-toc-toggle)').click(function() {
        var speed = 500;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top - 25;
        $("html, body").animate({
            scrollTop: position
        }, speed, "swing");
        return false;
    });
});
</script>
<?php } ?>
<?php if(is_page('records') || is_singular('sinryo')){ ?>
<script>
$(document).ready(function() {
    var slider = $('.case_photos').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        responsive: [{
            breakpoint: 769,
            settings: {
                //arrows: false
            }
        }]
    });
    $(".js-tab").each(function() {
        var $tab = $(this);
        $tab.find(".js-tab-content.active").show();

        $tab.find(".js-tab-trigger").on("click", function() {
            var $tabTrigger = $(this);
            $tab.find(".js-tab-content.active").stop(true).fadeOut(300, function() {
                $($tabTrigger.attr("href")).stop(true).fadeIn().addClass("active");
                slider.slick('setPosition');
            }).removeClass("active");
            $tab.find(".js-tab-trigger.active").removeClass("active");
            $tabTrigger.addClass("active");
            return false;
            slider.slick('setPosition');
        });
    });
});
</script>
<?php } ?>
<?php if(is_tax('column_category','varicocele') || (is_singular('post') && is_object_in_term($post->ID,'column_category','varicocele')) ){ ?>
<!-- popup -->
<div class="popup-area">
    <p><a href="<?php echo esc_url(home_url('/contact/appointment-first/')); ?>"><img
                src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bnr_vc.png" alt="LVA" width="540"
                height="540"></a></p>
    <button class="close-btn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/btn_close.png"
            alt="close" width="24" height="24"></button>
</div>
<?php /*
<script>
"use strict";
//pop
let popAppend = false;
//history
let hash = location.hash;
if (hash != '#back') {
    history.pushState(null, null, location.href);
    history.replaceState(null, null, '#back');
}
//step1
window.addEventListener('popstate', (e) => {
    if (location.hash != "#back" && popAppend === false) {
        $('.popup-area').fadeIn();
        $('body').append($("<div>", {
            class: 'cover-eml'
        }));
        popAppend = true;
        if (popAppend) {
            $('body').on('click', '.cover-eml', function() {
                deleteElm();
                popAppend = false;
            });
        }
    }
});
//step2
$('body,.close-btn').on('click', '.close-btn', function() {
    deleteElm();
    popAppend = false;
});

function deleteElm() {
    $('.cover-eml').fadeOut();
    $('.cover-eml').remove();
    $('.popup-area').fadeOut();
}
</script>*/?>
<?php } ?>
<?php if(is_single('lva')){ ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.case-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        //adaptiveHeight: true,
        dots: true,
        responsive: [{
            breakpoint: 769,
            settings: {
                //arrows: false
            }
        }]
    });
});
</script>
<?php } ?>
<?php if(is_page('case')){ ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.case_photos').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        responsive: [{
            breakpoint: 769,
            settings: {
                arrows: false
            }
        }]
    });
});
</script>
<?php } ?>
<?php if(is_single('lva')|| is_archive('woman')){ ?>
<script type="text/javascript">
$(document).ready(function() {
    $('.case-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        //adaptiveHeight: true,
        dots: true,
        responsive: [{
            breakpoint: 769,
            settings: {
                //arrows: false
            }
        }]
    });
});
</script>
<?php } ?>
<?php if(is_front_page() || is_home() || is_singular('sinryo')){ ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/remodal.min.js?ver=01"></script>
<?php } ?>
<script>
window.addEventListener('DOMContentLoaded', function() {
    new ScrollHint('.scroll-table-wrap', {
        i18n: {
            scrollable: 'スクロールできます'
        }
    });
});
</script>
<?php wp_footer(); ?>
<?php if (is_user_logged_in()) { ?>
<style>
@media screen and (max-width: 992px) {
    html {
        padding-bottom: 32px;
        margin-top: 0 !important;
    }

    * html body {
        margin-top: 0 !important;
    }

    #wpadminbar {
        top: inherit;
        bottom: 0;
    }

    html #wpadminbar {
        height: 46px;
        min-width: 300px;
        position: fixed;
        display: none;
    }

    * html body {
        margin-top: 0 !important;
    }
}
</style>
<?php } ?>
<script id="tagjs" type="text/javascript">
(function() {
    var tagjs = document.createElement("script");
    var s = document.getElementsByTagName("script")[0];
    tagjs.async = true;
    tagjs.src = "//s.yjtag.jp/tag.js#site=C8dJt4d&referrer=" + encodeURIComponent(document.location.href);
    s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
    <iframe src="//b.yjtag.jp/iframe?c=C8dJt4d" width="1" height="1" frameborder="0" scrolling="no" marginheight="0"
        marginwidth="0"></iframe>
</noscript>
		<script>
jQuery(document).ready(function($) {
    $('.contact--appointment__date1, .contact--appointment__date2, .contact--appointment__date3').on('focus', function(event) {
        event.preventDefault();
        $(this).blur();
    });
});
</script>
<script>
jQuery(document).ready(function($) {
    $(".hasDatepicker").on("click", function() {
        if ($(window).width() <= 768) { // SPのみ適用
            setTimeout(function() {
                $(".ui-datepicker").css({
                    "width": "90%",
                    "max-width": "100vw",
                    "left": "0",
                    "right": "0",
                    "margin": "auto"
                });
            }, 50);
        }
    });
});
</script>

</body>

</html>

<?php endif; ?>