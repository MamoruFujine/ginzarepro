<?php
/*
Template Name: thanksLP
*/
?>

<?php get_header(); ?>
 <div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            <span class="lowerHeader__title--en">THANKS</span>
            <span class="lowerHeader__title--jp">お問い合わせありがとうございました。</span>
          </h1>
           <p class="lowerHeader__description">
            当院のご予約・ご相談については、お電話もしくはメールフォームよりご連絡ください。<br />
            ご予約・ご相談以外の問い合わせについては、お問合せフォームよりお願いいたします。
          </p>
        </div>
      </section>
      <section class="contents--lower">
        <article class="contents__article">
          <p class="contact__thanks">
            お問い合わせありがとうございました。<br>
            自動返信メールをご送付しておりますので、メールをご確認ください。<br><br>
            恐れ入りますが、メールが確認できない場合は、迷惑メールフォルダ内のご確認をお願いいたします。<br>
            自動返信メールが迷惑メールフォルダに振り分けられている場合がございます。<br>
            <br>
            メールが届いていない場合や迷惑メールフォルダにメールが無い場合には、お手数をおかけしますが以下までご連絡ください。<br>
            <br>
            &#105;&#110;&#102;&#111;&#64;&#103;&#105;&#110;&#122;&#97;&#114;&#101;&#112;&#114;&#111;&#46;&#106;&#112;<br>
            <br>
			  1日経っても返信がない場合は、お手数ではございますが、お電話などで再度ご連絡いただけますようお願い致します。
            
          </p>
          <br>
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
