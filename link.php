<?php if(!is_page(array('contact','appointment-first','appointment-revisit'))){ ?>
<div class="cta">
    <h2 class="link__ttl">お問い合わせ・ご予約はこちら</h2>
    <ul class="link">


        <?php if (get_post_type() === 'sinryo' && is_single(array('lva', 'lva-s')) || is_page(array('lva/appointment-first', 'lva/appointment-first-confirm', 'lva/thanks-first', 'lva/appointment-revisit', 'lva/appointment-revisit-confirm', 'lva/thanks-revisit'))) : ?>

        <li>
            <a href="/lva/appointment-first/" class="link__item" target="_blank">
                <p class="link__item__text link__item__text--reservation">初診のご予約</p>
                <div class="link__item__img--reservation"></div>
                <p class="link__item__lead">初めてご来院いただく方はこちら</p>
            </a>
        </li>
        <li>
            <a href="/lva/appointment-revisit/" class="link__item">
                <p class="link__item__text link__item__text--consultation">再診のご予約</p>
                <div class="link__item__img--consultation"></div>
                <p class="link__item__lead">２回目以降のご来院予約はこちら</p>
            </a>
        </li>

        <?php else : ?>

        <li>
            <a href="/contact/appointment-first/" class="link__item" target="_blank">
                <p class="link__item__text link__item__text--reservation">初診のご予約</p>
                <div class="link__item__img--reservation"></div>
                <p class="link__item__lead">初めてご来院いただく方はこちら</p>
            </a>
        </li>
        <li>
            <a href="/contact/appointment-revisit/" class="link__item">
                <p class="link__item__text link__item__text--consultation">再診のご予約</p>
                <div class="link__item__img--consultation"></div>
                <p class="link__item__lead">２回目以降のご来院予約はこちら</p>
            </a>
        </li>

        <?php endif; ?>

        <li>
            <a href="/contact/" class="link__item">
                <p class="link__item__text link__item__text--contact">お問い合わせ</p>
                <div class="link__item__img--contact"></div>
                <p class="link__item__lead">当院へのお問い合わせはこちら</p>
            </a>
        </li>
    </ul>
    <p class="address"><span>〒104-0061 </span>東京都中央区銀座2-8-19 FPG links GINZA 6F</p>
</div>


<?php if (is_home() || is_page("staff") ) : ?>
<article class="contents__article fjk_ajst">
    <h2 class="contents__heading">
        <span class="contents__heading--text">東京を中心に全国から患者様が訪れています</span>
    </h2>
    <div class="fjk_patient_wrap">
        <div class="fjk_patient_txt">
            <p class="contents__text">東京の銀座に位置する銀座リプロ外科は、東京や関東近県だけでなく日本全国・海外から患者様がご来院されます。東京駅からもアクセスが良く、駅近です。当院で執刀いただける永尾先生はマイクロサージャーの高度な技術を有しており日本における精索静脈瘤手術の第一人者です。その高度な技術から精索静脈瘤手術の日帰りを可能とし、医師の方も治療を希望され患者として多く訪れます。精索静脈瘤を専門とする医師は全国に約90人と非常に少ないのも全国から患者様がご来院される理由の一つです。<br>精索静脈瘤手術を受けるにあたり、不安なことや心配されていることがありましたら是非お問い合わせください。</p>
        </div>
        <div class="fjk_patient_img">
            <img src="https://ginzarepro.jp/wp-content/uploads/2023/09/toukei.png" alt="患者様の居住地統計グラフ" />
        </div>
    </div>
</article>
<style type="text/css">
.contents__article.fjk_ajst {
	margin: 0;
}
.fjk_patient_txt {
	padding-bottom: 30px;
}
.fjk_patient_img {
	text-align: center;
}
.fjk_patient_img img {
	width: 100%;
	max-width: 500px;
}
@media screen and (min-width: 1025px){
.contents__article.fjk_ajst {
	margin: 50px auto 0;
}
.fjk_patient_wrap {
	display: flex;
	justify-content: space-between;
	padding-top: 30px;
}
.fjk_patient_txt {
	width: 40%;
}
.fjk_patient_img {
	width: 55%;
}

</style>

<?php endif; ?>


<?php if (is_home() || is_front_page()) : ?>

<section class="contents">
    <article class="contents__article">
        <h2 class="contents__heading">
            <span class="contents__heading--text">最新情報</span>
        </h2>

        <section class="short_drama">
            <h3 class="contents__heading--text child">ショートドラマを作成しました</h3>
            <div class="youtube_box-top">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/_OlnE3izRsg?si=ywZCbspEQw08H22K" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </section>
        
        <div class="sns-area">
            <div class="twi-insta-wrap">
                <div class="twitter">
                    <a class="twitter-timeline" width="600px" height="800px" href="https://twitter.com/ginzarepro?ref_src=twsrc%5Etfw" data-tweet-limit="">Tweets by ginzarepro</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8" style="font-size: 10px;"></script>
				</div>
                <div class="instagram">
                    <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
                </div>
            </div>
        </div>
    </article>
    <section class="about pt70">
        <div class="about--inner">

            <div style="margin: 0 auto 60px; border:2px solid #e71f19; padding:20px; background-color: #fff;">
                    <p style="font-size:2.5rem; padding-bottom:15px;"><strong>受診時のご協力とお願い</strong></p>
                    <p class="contents__text" style="margin-bottom:15px;">当院では、患者様とお守りする観点より、コロナ禍行っておりました感染対策予防対策を引き続き行って参りますので、ご協力いただけますようお願い申し上げます。</p>
                    <p class="contents__text" style="margin-bottom:15px;">当日はご予約のお時間になりましたら、１階にありますインターフォンで呼び出してください。エレベーターの解除をさせていただきます。</p>
                    <p class="contents__text" style="margin-bottom:15px;">感染予防対策として、ご来院時は不織布マスクをご着用いただき、診察中も着用をお願い致します。</p>
                    <p class="contents__text" style="margin-bottom:15px;">風邪症状・発熱等がある場合は、日を改めていただけますようお願い致します。
                        <p class="contents__text" style="margin-bottom:15px;">感染予防のため、未成年、学生の患者様は保護者一名のみご同伴いただき、その他の方は患者様お一人でいらしていただけますようご協力をお願い致します。
                            詳しくは、以下のリンクをご一読ください。
                </p>
                        <p class="contents__text" style="margin-bottom:15px;"><a href="/sinryo/covid19-for-patients/">https://ginzarepro.jp/sinryo/covid19-for-patients/</a></p>

                        <p class="contents__text">何卒ご理解ご協力いただけますようお願い申し上げます。
</p>


            </div>





            <h2 class="about__heading">当院の特徴</h2>
            <ul class="feature">
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--place.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            銀座一丁目駅<br />
                            徒歩2分
                        </p>
                    </div>
                </li>
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--privacy.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            プライバシーに<br />
                            配慮
                        </p>
                    </div>
                </li>
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--today.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            日帰り<br />
                            静脈瘤手術可
                        </p>
                    </div>
                </li>
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--operation.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            当日診察<br />
                            当日手術
                        </p>
                    </div>
                </li>
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--hurry.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            急ぎの手術<br />
                            ご相談可
                        </p>
                    </div>
                </li>
                <li class="feature__item">
                    <div class="feature__item--inner">
                        <div class="feature__item__img">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/feature__item__img--female.png" alt="" />
                        </div>
                        <p class="feature__item__text">
                            待合スペース
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</section>
<?php endif; ?>
<?php } ?>