<?php get_header(); ?>
 <div class="page-wrap">
      <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            <span class="lowerHeader__title--en">ABOUT INTERVIEW</span>
            <p class="lowerHeader__title--jp">取材のご依頼について</p>
          </h1>
        </div>
      </section>
      <section class="contents--lower" id="firstVisit">
        <article class="contents__article">
        <!--<div class="contents--lower__heading">
	        <h2 class="contents--lower__heading--text">取材のご依頼について</h2>
		</div>-->
        <div class="contents__article__post">
          <p class="contents__text">
            当院へ取材を希望される場合は、<a href="<?php echo esc_url(home_url('/contact/')); ?>">問い合わせフォーム</a>のお問い合わせ内容に、<br>・会社名<br>・部署名<br>・担当者名<br>・企画・依頼内容<br>を記載のうえ、ご連絡くださいますようお願いいたします。<br><br>確認後、担当者よりご連絡いたします。<br><br>なお、返答までに数日お待ちいただく場合もありますので、あらかじめご了承ください。
          </p>
        </div>
          <div class="contents__article__post">
            <h2 class="contents__heading">
              <span class="contents__heading--text">注意事項</span>
            </h2>
            <p class="contents__text">患者様のプライバシーに十分配慮してください。<br>業務に支障をきたさぬよう留意してください。<br>取材、撮影にあたっては、本院職員の指示に従ってください。</p>
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

<style>
  .contents__img--center img {
    max-width: 100%;
    max-height: 100%;
}
</style>