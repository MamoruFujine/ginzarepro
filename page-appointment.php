<?php
/*
Template Name: appointment
*/
?>

<?php get_header(); ?>
 <div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            <span class="lowerHeader__title--en">APPOINTMENT</span>

<?php if(is_page( 'appointment-yoyaku' )): ?>
            <span class="lowerHeader__title--jp">診察・来院予約</span>
<?php elseif(is_page( 'appointment-soudan' )): ?>
            <span class="lowerHeader__title--jp">手術日程のご相談</span>
<?php elseif(is_page( 'appointment-yoyaku-test' )): ?>

            <span class="lowerHeader__title--jp">診察・来院予約テスト</span>
<?php elseif(is_page( 'appointment-soudan-test' )): ?>
            <span class="lowerHeader__title--jp">手術日程のご相談テスト</span>

<?php elseif(is_page( 'appointment-yoyaku-confirm' )): ?>
            <span class="lowerHeader__title--jp">診察・来院予約　確認画面</span>
<?php elseif(is_page( 'appointment-soudan-confirm' )): ?>
            <span class="lowerHeader__title--jp">手術日程のご相談　確認画面</span>

<?php endif; ?>
          </h1>

<?php if(is_page( 'appointment-yoyaku' ) || is_page( 'appointment-yoyaku-test' )): ?>
          <p class="lowerHeader__description">
            診察や検診をご希望の方は本ページからご連絡ください。<br />
            通常の問い合わせについては、<a href="/contact/">お問合せフォーム</a>をご利用ください。
          </p>
<?php elseif(is_page( 'appointment-soudan' ) || is_page( 'appointment-soudan-test' )): ?>
          <p class="lowerHeader__description">
            診察と同日に手術も可能です。<br>
        遠方からご来院いただく方はご相談ください。
          </p>

<?php elseif(is_page( 'appointment-yoyaku-confirm' ) || is_page( 'appointment-soudan-confirm' )): ?>

<?php endif; ?>
        </div>
      </section>



      <section class="contents--lower" style="padding: 10px 0 0;">
        <article class="contents__article">


<?php if(is_page( 'appointment-yoyaku' ) || is_page( 'appointment-soudan' ) || is_page( 'appointment-yoyaku-test' ) || is_page( 'appointment-soudan-test' )): ?>
         <div class="contact__tel">
            <a class="contact__tel__btn" href="tel:03-5159-2240">
              お電話でのご予約・ご相談は<br />
              <span class="contact__tel__btn--number"
                ><span class="fas fa-phone"></span>03-5159-2240</span
              >
              <span class="contact__tel__description"
                >ここをクリックすると電話がかかります</span
              >
            </a>
          </div>

<?php elseif(is_page( 'appointment-yoyaku-confirm' ) || is_page( 'appointment-soudan-confirm' )): ?>


<?php endif; ?>


<?php if(is_page( 'appointment-yoyaku' ) || is_page( 'appointment-yoyaku-test' )): ?>

          <div class="contact__attention">
          <p style="margin-bottom:15px; "><a href="/column/sameday/">診察の日に日帰り顕微鏡下精索静脈瘤手術をご希望される方はこちら</a></p>
            <p class="contact__attention__heading">※注意事項※</p>
            <p>
              ・本フォーム入力をもって予約完了とはなりませんのでご注意ください。<br>
            ・予約状況を確認の上、メールもしくはお電話にてご連絡をいたしますため、ご希望をひとまずご連絡ください。<br>
              　※時間の縛りがある方は備考欄にその旨ご記入ください。<br>  
            ・迷惑メール対策を実施している場合、@ginzarepro.jp からのメールが受信できるよう設定ください。         
            </p>
          </div>
<?php elseif(is_page( 'appointment-soudan' ) || is_page( 'appointment-soudan-test' )): ?>
          <div class="contact__attention">
            <p class="contact__attention__heading">※注意事項※</p>
            <p>
             ・手術を希望の方は来院による診察が必要となりますので、以下の希望日をご入力ください。<br>
              ・メールを送信いただいた後、担当者からの折り返し連絡をもって予約確定となりますのでご注意ください。<br>
              　※時間の縛りがある方は備考欄にその旨ご記入ください。<br>  
            ・迷惑メール対策を実施している場合、@ginzarepro.jp からのメールが受信できるよう設定ください。
           </p>
          </div>

<?php elseif(is_page( 'appointment-yoyaku-confirm' ) || is_page( 'appointment-soudan-confirm' )): ?>
          <div class="contact__attention">
            <p class="contact__attention__heading">※まだ送信完了ではありません※</p>
            <p>
              以下をご確認いただき、送信ボタンを押してください。
            </p>
          </div>

<?php endif; ?>
      
<div id="formCheck">
<?php if(is_page( 'appointment-yoyaku' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="32"]'); ?>
<?php elseif(is_page( 'appointment-soudan' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="50"]'); ?>

<?php elseif(is_page( 'appointment-yoyaku-test' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="137"]'); ?>
<?php elseif(is_page( 'appointment-soudan-test' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="145"]'); ?>

<?php elseif(is_page( 'appointment-yoyaku-confirm' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="32"]'); ?>
<?php elseif(is_page( 'appointment-soudan-confirm' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="50"]'); ?>


<?php endif; ?>
</div>

          <div class="contact__privacy" style="margin-top:30px;">
            <p class="contact__privacy__heading">個人情報の取り扱いについて</p>
            <div class="contact__privacy__contents">
              銀座リプロ外科(以下、当院と称します）は、お客様、お取引先様を始め弊社に個人情報を提供されるすべての方（以下、ご本人と総称します）の個人情報を適切に保護することが、個人情報取扱事業者としての重要な社会的責務であると認識しております。当院は、個人情報保護に関する法令およびその他の規範を遵守し、自主的なルールおよび体制を確立し、以下の個人情報保護方針を定めて個人情報の保護の徹底に努めます。<br>
              <br>
              1.
              当院は、この宣言を実行するために、個人情報保護に関する社内規程を定め、当院の役員およびすべての従業員、その他関係者に周知徹底させて実行し、改善・維持してまいります。<br>
              <br>
              2.
              当院は、個人情報のセキュリティ確保のため、管理責任者を置き、個人情報の紛失、破壊、改ざんおよび漏洩、不正アクセス等を防止するため、必要かつ適切な安全措置を講じます。<br>
              <br>
              3.
              当院は、個人情報の入手にあたり、適法かつ公正な手段によって行い、不正な方法による入手はいたしません。当院は、ご本人から個人情報をご提供いただく場合には、その個人情報を利用する目的について、通知するかインターネットホームページに必要事項を明示いたします。<br>
              <br>
              4.
              当院は、通知または明示した利用目的の達成に必要な範囲を超えて個人情報を取扱いません。ただし、ご本人の同意がある場合、統計資料等ご本人を識別できない状態で利用する場合、または関係する法令等により利用が認められている場合を除きます。<br>
              <br>
              5.
              当院は、ご本人がご自身の個人情報の照会、変更、修正等を希望される場合には、ご本人からの要請であることを確認させて頂いたうえで、当院所定の手続きに基づいてすみやかに対応いたします。<br>
              <br>
              6.
              当院は、ご本人の同意を得た場合または法令に基づく場合等を除き、個人情報を第三者に提供いたしません。業務を委託するために個人情報を委託先に提供する場合、当該委託先との間において必要な契約等を締結し、個人情報の安全管理のための必要な措置を講じます。<br>
              <br>
              【サイトポリシー】<br>
              当サイト上の文書・写真・イラスト等（以下コンテンツと表現）は、当院及びその関係機関（以下総称して当院といいます）ならびに 第三者が有する著作権により保護されております。<br>
              また、当社は、当サイトからリンクしている他のサイトのコンテンツに関して一切の責任を負いません。
              <p class="contact__privacy__contents--information">
                銀座リプロ外科<br>
                〒104-0061<br>
                東京都中央区銀座2-8-19　FPG links GINZA 6F<br>
                <a href="/contact/">お問い合わせページ</a>からご連絡ください</p>
            </div>
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
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/js/validationEngine.jquery.css">
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.validationEngine.min.js?ver=20221200"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/languages/jquery.validationEngine-ja.js?ver=20221200" charset="UTF-8"></script>
  <script>
    $(function(){
        $("#formCheck form").find('.validate input[type="text"]').addClass("validate[required]");
        $("#formCheck form").find('.validate-tel input[type="text"]').addClass("validate[required,custom[phone]]");
        $("#formCheck form").find('.validate-email input[type="text"]').addClass("validate[required,custom[email]]");
        $("#formCheck form").find('.validate-remail input[type="text"]').addClass("validate[required,equals[email]]");
        $("#formCheck form").find('.validate select').addClass("validate[required]");
        $("#formCheck form").find('.validate textarea').addClass("validate[required]");
        $("#formCheck form").find('.check-hiragana input[type="text"]').addClass("validate[custom[hiragana]]");
        $("#formCheck form").find('.validate-check input[type="checkbox"]').addClass("validate[minCheckbox[1]]");
        $("#formCheck form").validationEngine(
            'attach', {
                promptPosition: "bottomLeft"
            }
        );
    });
  </script>
<?php get_footer(); ?>
