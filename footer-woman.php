  <?php if(!is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ ?>
  <footer class="footer">
    <?php if ( is_single('lva') ) : ?>
    <div class="footer__btn_wrap">
      <span class="mainVis__h"><i>保険</i><i>適用</i></span>
    </div>
    <?php endif; ?>
    <!--<div class="footer__about100">-->
    <div class="footer__about footer__auto">
      <img class="footer__about__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__logo.png" alt="医療法人社団マイクロ会　銀座リプロ外科">
      <p>&nbsp;</p>
      <p class="footer__about__address">
        〒104-0061 東京都中央区銀座2-8-19 FPG links GINZA 6F
      </p>
    <div class="footer__about__guide">
      <p class="footer__about__guide__heading">診療のご案内【完全予約制】</p>
      <!--<p class="footer__about__guide__text"><strong>毎週月曜日13:00&#65374;</strong></p>-->
		</div>
		<div class="footer__about__practiceTime--wrap">
        <div class="footer__about__practiceTime">
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">&nbsp;</dt>
            <dd class="footer__about__practiceTime--contents">
              9:00&#65374;13:00
            </dd>
            <dd class="footer__about__practiceTime--contents">
              13:00&#65374;17:00
            </dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">月</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
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
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">金</dt>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
            <dd class="footer__about__practiceTime--contents">○</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">土</dt>
						<dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
          <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">日</dt>
            <dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
			    <dl class="footer__about__practiceTime--col">
            <dt class="footer__about__practiceTime--header">祝日</dt>
            <dd class="footer__about__practiceTime--contents">○</dd>
            <dd class="footer__about__practiceTime--contents">&nbsp;</dd>
          </dl>
        </div>
				<p class="attention">○・・・リンパ浮腫外来　<!--□・・・リンパルーム--><br><br>
          ※メールでのご対応は、土日も含め随時行っております。<br>
					※学会参加などで休診の場合がございます。
        </p>
      </div>
    </div>
    <ul class="footer__navi_sp">
      <li><a href="<?php echo esc_url(home_url('/woman/')); ?>">トップページ</a></li>
      <li><a href="<?php echo esc_url(home_url('/woman/w-lva/')); ?>">リンパ浮腫手術</a></li>
      <li><a href="<?php echo esc_url(home_url('/woman/w-staff/')); ?>">当院について</a></li>
      <li><a href="<?php echo esc_url(home_url('/column_category/lva/')); ?>">基礎知識</a></li>
      <li><a href="<?php echo esc_url(home_url('/woman/w-faq/')); ?>">よくある質問</a></li>
      <li><a href="<?php echo esc_url(home_url('/woman/w-access/')); ?>">交通アクセス</a></li>
    </ul>

    <!--<div class="footer__navi">
      <ul class="footer__navi--wrap">
        <li><a class="footer__navi__item" href="/woman/">トップページ</a></li>
        <li><a class="footer__navi__item" href="/woman/w-lva/">リンパ浮腫手術</a></li>
        <li><a class="footer__navi__item" href="/woman/w-staff/">当院について</a></li>
        <li><a class="footer__navi__item" href="/woman/w-faq/">よくある質問</a></li>
        <li><a class="footer__navi__item" href="/woman/w-access/">交通アクセス</a></li>
      </ul>
    </div>-->
    <div class="footer__copyWright">c 2019 Association of Microsurgery, Ginza Reproductive Surgery.</div>

<?php $slug = get_post_field( 'post_name', get_the_ID() ); ?>
<?php if( ( $slug !== 'contact') && (!is_page(array('contact','appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp','appointment-revisit'))) ){ ?>
<?php if ( is_single('lva') ) : ?>
    <div class="footer__spNavi">
      <a class="footer__spNavi__item" style="width: calc(32.5% - (0px / 3));" href="/lva/appointment-first/" target="_blank">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">初診予約</p>
        </div>
      </a>
    <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="/lva/appointment-revisit/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">再診予約</p>
        </div>
      </a>
     <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="tel:03-51592240">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--tel.png" alt="" />
          <p class="footer__spNavi__item__text">電話</p>
        </div>
      </a>
<?php elseif( is_page( array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp', 'appointment-revisit') ) ) : ?>
    <div class="footer__spNavi">
      <a class="footer__spNavi__item" style="width: calc(32.5% - (0px / 3));" href="/lva/appointment-first/" target="_blank">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">初診予約</p>
        </div>
      </a>
    <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="/lva/appointment-revisit/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">再診予約</p>
        </div>
      </a>
     <a class="footer__spNavi__item" style="width: calc(33% - (0px / 3));" href="tel:03-51592240">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--tel.png" alt="" />
          <p class="footer__spNavi__item__text">電話</p>
        </div>
      </a>
<?php else:?>

    <div class="footer__spNavi">
      <a class="footer__spNavi__item" style="width: calc(24.5% - (0px / 4));" href="/lva/appointment-first/" target="_blank">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">初診予約</p>
        </div>
      </a>
    <a class="footer__spNavi__item" style="width: calc(25% - (0px / 4));" href="/lva/appointment-revisit/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--reservation.png" alt="" />
          <p class="footer__spNavi__item__text">再診予約</p>
        </div>
      </a>
     <a class="footer__spNavi__item" style="width: calc(25% - (0px / 4));" href="tel:03-51592240">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--tel.png" alt="" />
          <p class="footer__spNavi__item__text">電話</p>
        </div>
      </a>
      <a class="footer__spNavi__item" style="width: calc(24.5% - (0px / 4));" href="/contact/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--operation.png" alt="" />
          <p class="footer__spNavi__item__text">お問い合わせ</p>
        </div>
      </a>
       <!--<a class="footer__spNavi__item" style="width: calc(33% - (0px / 4));" href="/online/">
        <div class="footer__spNavi__item--inner">
          <img class="footer__spNavi__item__img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/footer__spNavi__item__img--online.png" alt="" />
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


<div id="footerFloatingMenu3">
<div class="floatingbtn">
  <a class="mainVis__contact" href="/lva/appointment-first/" target="_blank">
    <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
      <span class="fas fa-envelope"></span>ご予約・お問い合わせ
    </p>
  </a>
</div>
</div>



<style>
#footerFloatingMenu3 {
    position: fixed;
    top: 0px;
    right: 0px;
    padding: 30px;
    color: #fff;
    z-index: 2;
}

#footerFloatingMenu3 a{
    display: block;
    border: solid #ff2a2a;
    padding: 20px;
    background: #FFF;
    font-size: 14px;
color:#ff2a2a;
}

@media screen and (max-width: 480px){
#footerFloatingMenu3 {
  display: none !important;
}
}

</style>




<script>
jQuery(function() {
    var topBtn = jQuery('#footerFloatingMenu3');
    topBtn.hide();
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 200) { // 200pxで表示
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});
</script>
	<div class="pagetop"></div>

<?php if(is_page('case')){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.case_photos').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
              responsive: [
                {
                  breakpoint: 769,
                  settings: {
                    arrows: false
                  }
                }
              ]
        });
    });
</script>
<?php } ?>
<?php if(is_single('lva')){ ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('.case-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            //adaptiveHeight: true,
            dots: true,
              responsive: [
                {
                  breakpoint: 769,
                  settings: {
                    //arrows: false
                  }
                }
              ]
        });
    });
</script>
<?php } ?>
<?php if(is_archive('woman')){ ?>
<script>
    $(document).ready(function(){
        $('.case-slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            //adaptiveHeight: true,
            dots: false,
              responsive: [
                {
                  breakpoint: 769,
                  settings: {
                    //arrows: false
                  }
                }
              ]
        });
    });
</script>
<?php } ?>
<?php wp_footer(); ?>
<script id="tagjs" type="text/javascript">
(function () {
var tagjs = document.createElement("script");
var s = document.getElementsByTagName("script")[0];
tagjs.async = true;
tagjs.src = "//s.yjtag.jp/tag.js#site=C8dJt4d&referrer=" + encodeURIComponent(document.location.href);
s.parentNode.insertBefore(tagjs, s);
}());
</script>
<noscript>
<iframe src="//b.yjtag.jp/iframe?c=C8dJt4d" width="1" height="1" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</noscript>
<?php if(is_single('contact')){ ?>
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
<?php } ?>
<?php 
if(is_tax('column_category','lva')|| (is_singular('post') && is_object_in_term($post->ID,'column_category','lva')) ){ ?>
  <!--<div class="line__pop">
    <button class="line__pop-close"></button>
    <a href="https://liff.line.me/1657907965-MLNZwGWy?state=16Kvlx&clientId=1657907965&basicId=%40261gnxxn&liffId=1657907965-MLNZwGWy" target="_blank" rel="noopener noreferrer">
      <picture class="img">
        <source media="(min-width: 769px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/line__pop@2x.png">
        <source media="(max-width: 768px)" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/img/line__pop_sp.png">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/line__pop@2x.png" alt="" width="329" height="188">
      </picture>
    </a>
  </div>-->
  <!-- popup -->
			<!--<div class="popup-area">
  <p><a href="https://liff.line.me/1657907965-MLNZwGWy?state=16Kvlx&clientId=1657907965&basicId=%40261gnxxn&liffId=1657907965-MLNZwGWy" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/bnr_lva.png" alt="LVA" width="267" height="200"></a></p>
  <button class="close-btn"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/btn_close.png" alt="close" width="24" height="24"></button>
  </div>
  <script>
    jQuery( function ($) {
      setTimeout(function () {
        $('.line__pop').fadeIn();
      }, 20000);
      var webStorage = function () {
        $('.line__pop-close').click(function() {
          var child = $(this).parent();
          $(this).parent().hide();
          sessionStorage.setItem('linepopdisplay', 'true');
        });
        if (sessionStorage.getItem('linepopdisplay')) { 
          $('.line__pop').addClass('nodisplay');
        }
      }
      webStorage();
    } );
    
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
  </script>-->
<?php } ?>
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
</body>
</html>
