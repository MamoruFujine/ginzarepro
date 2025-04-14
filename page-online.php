<?php get_header(); ?>
<div class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
      <div class="lowerHeader--wrap">
        <h1 class="lowerHeader__title">
          <span class="lowerHeader__title--en">ONLINE INQUIRY</span>
          <span class="lowerHeader__title--jp">オンライン診療</span>
        </h1>
        <p class="lowerHeader__description">
          当院ではオンライン診療システムを導入し、オンライン上にて問診を行います。<br>
          あくまで問診のため、精密検査などはご来院いただく必要がございますが、<br>
          ご来院前に症状の確認などができますため、ぜひご利用ください。
        </p>
      </div>
    </section>
    <section class="contents--lower">
      <div class="contents--lower__heading">
        <h2 class="contents--lower__heading--text"> このような方にご利用いただいております</h2>
      </div>
      <article class="contents__article">
        <h3 class="contents__heading">
          <span class="contents__heading--text">医院について</span>
        </h3>
        <div class="checkList">
          <ul class="checkList__list">
            <li class="checkList__list__item">
              <p class="checkList__list__item--text">
                <img class=" checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                すでに他院でかかっており、診察結果についてセカンドオピニオンが欲しい
              </p>
            </li>
            <li class="checkList__list__item">
              <p class="checkList__list__item--text">
                <img class=" checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                自分が治療のため来院した方が良いか相談したい
              </p>
            </li>
            <li class="checkList__list__item">
              <p class="checkList__list__item--text">
                <img class=" checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                自分の症状が改善できるのか聞いてほしい
              </p>
            </li>
            <li class="checkList__list__item">
              <p class="checkList__list__item--text">
                <img class=" checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                地方在住ですぐに銀座まで来院するのが難しい
              </p>
            </li>
            <li class="checkList__list__item">
              <p class="checkList__list__item--text">
                <img class=" checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                自分の住まいの周りに男性不妊や専門医がいない
              </p>
            </li>
          </ul>
        </div>
        <?php get_template_part('includes/banner'); ?>
      </article>
      <article class="contents__article">
        <h3 class="contents__heading">
          <span class="contents__heading--text">オンライン診療のメリット</span>
        </h3>
        <div class="online">
          <ul class="online__illustrated">
            <li class="online__illustrated__item--sp2col">
              <img class="online__illustrated__item--img--sp2col" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--smartphone.png" alt="スマホで受診">
              <p class="online__illustrated__item--text">スマホで受診</p>
            </li>
            <li class="online__illustrated__item--sp2col">
              <img class="online__illustrated__item--img--sp2col" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--waitingTime.png" alt="移動・待ち時間がゼロ">
              <p class="online__illustrated__item--text">移動・待ち時間がゼロ</p>
            </li>
            <li class="online__illustrated__item--sp2col">
              <img class="online__illustrated__item--img--sp2col" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--drag.png" alt="薬・処方せんが届く">
              <p class="online__illustrated__item--text">薬・処方せんが届く</p>
            </li>
            <li class="online__illustrated__item--sp2col">
              <img class="online__illustrated__item--img--sp2col" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--24hours.png" alt="24時間いつでも予約可能">
              <p class="online__illustrated__item--text">24時間いつでも予約可能</p>
            </li>
            <li class="online__illustrated__item--sp2col">
              <img class="online__illustrated__item--img--sp2col" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--cost.png" alt="交通費ゼロ">
              <p class="online__illustrated__item--text">交通費ゼロ</p>
            </li>
          </ul>
        </div>
      </article>
      <article class="contents__article">
        <h3 class="contents__heading">
          <span class="contents__heading--text">画面サンプル</span>
        </h3>
        <div class="online">
          <ul class="online__illustrated">
            <li class="online__illustrated__item">
              <img class="online__illustrated__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--login.png" alt="ログイン画面です。初めての方はご登録ください。">
              <p class="online__illustrated__item--text">
                ログイン画面です。<br>
                初めての方はご登録ください。</p>
            </li>
            <li class="online__illustrated__item">
              <img class="online__illustrated__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--menu.png" alt="シンプルな画面にしたがいメニューを選択していただきます。">
              <p class="online__illustrated__item--text">
                シンプルな画面にしたがい<br>
                メニューを選択していただきます。
              </p>
            </li>
            <li class="online__illustrated__item">
              <img class="online__illustrated__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/online__illustrated--date.png" alt="日付を選ぶだけですぐにご予約が可能です。">
              <p class="online__illustrated__item--text">
                日付を選ぶだけで<br>
                すぐにご予約が可能です。
              </p>
            </li>
          </ul>
        </div>
        <?php get_template_part('includes/banner'); ?>
      </article>
      <article class="contents__article">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
      </article>
    </section>
  </div>
<?php get_footer(); ?>
