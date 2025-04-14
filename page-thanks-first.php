<?php
/*
Template Name: thanks-first
*/
?>

<?php get_header(); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">THANKS</span>
                <span class="lowerHeader__title--jp">初診のご予約<br>ありがとうございます。</span>
            </h1>
        </div>
    </section>
    <section class="contents--lower">
        <article class="contents__article">
            <p class="contact__thanks">ご予約依頼をいただきましたら、メールにてご返信させていただきます。<br>本フォーム入力をもって予約完了とはなりませんのでご注意ください。</p>
            <p class="contact__thanks">
                ご希望頂いたお日にち確認の上、<br>
                改めてご連絡させていただきます。</p>
            <p class="contact__note">※１日以内に連絡がない場合は恐れ入りますが、<br>
                下記メールアドレスまでご連絡をお願いします。</p>
            <p class="contents__mail">&#105;&#110;&#102;&#111;&#64;&#103;&#105;&#110;&#122;&#97;&#114;&#101;&#112;&#114;&#111;&#46;&#106;&#112;</p>

            <p class="contents__document__txt">ご予約頂いた皆様に、<br>
                当院の資料を配布させて頂いております。<br>
                お時間がありましたら、ご確認下さい。</p>

            <div class="contents__document__item">
                <div class="contents__document__thumb">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/document_thumb_01.jpg" alt="精索静脈瘤手術(ナガオメソッドについて)" width="375" height="254">
                </div>
                <div class="contents__document__btn">
                    <a href="<?php echo esc_url(get_template_directory_uri()); ?>/img/document_01.pdf" target="_blank" rel="noopener noreferrer" class="contact__btn--back">精索静脈瘤手術<br>(ナガオメソッドについて)</a>
                </div>
            </div>

            <div class="contents__mail">
                <p class="contents__mail__txt">ご来院までに何かご不安な事など<br>ありましたら、お気軽にご連絡下さい</p>
                <p class="contents__mail">&#105;&#110;&#102;&#111;&#64;&#103;&#105;&#110;&#122;&#97;&#114;&#101;&#112;&#114;&#111;&#46;&#106;&#112;</p>
            </div>

            <div class="contents__youtube">
                <p class="contents__youtube__txt">※永尾がYoutubeでも男性不妊に関しての情報を発信しております。以下バナーより是非、御覧ください。</p>
                <div class="contents__youtube__bnr"><a href="https://www.youtube.com/channel/UC8A7zCAuY1NXZDgNPXE9awg" target="_blank"><img src="/wp-content/themes/ginzarepro_0.1/img/bn03.webp" alt="youtubeバナー" style="max-width: 100%;"></a></div>
            </div>

            <div class="contact__btn">
                <a class="contact__btn--back" href="/">TOPに戻る</a>
            </div>
        </article>
    </section>
    <section class="contents">
        <article class="contents__article">
            <?php get_template_part('includes/link'); ?>
            <?php get_template_part('includes/banner'); ?>
        </article>
    </section>
</div>
<?php get_footer(); ?>