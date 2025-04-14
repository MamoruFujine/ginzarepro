<?php get_header(); ?>
<div class="page-wrap">
      <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            <span class="lowerHeader__title--en">CHARGE</span>
            <span class="lowerHeader__title--jp">精索静脈瘤の手術費用</span>
          </h1>
       <?php if( is_page('578') ) : ?>
        <?php if ( wp_is_mobile() ) : ?>
        <p class="lowerHeader__description">精索静脈瘤の手術・治療にかかる費用や料金をご紹介しています。銀座リプロ外科では、日帰りで手術可能で再発率も低く、機能低下や合併症の心配がほとんど無い顕微鏡下精索静脈瘤低位結紮術・ナガオメソッドをおすすめしています。</p>
        <?php else: ?>
        <?php endif; ?>
        <?php else: ?>
        <?php endif; ?>
</div>
      </section>
      <?php if( is_page('578') ) : ?>
        <?php if ( wp_is_mobile() ) : ?>
        <?php else: ?>
        <p style="padding: 0px 70px 50px;font-size: 1.5rem;line-height: 1.8;">精索静脈瘤の手術・治療にかかる費用や料金をご紹介しています。銀座リプロ外科では、日帰りで手術可能で再発率も低く、機能低下や合併症の心配がほとんど無い顕微鏡下精索静脈瘤低位結紮術・ナガオメソッドをおすすめしています。</p>
        <?php endif; ?>
        <?php else: ?>
      <?php endif; ?>
      <section class="contents--lower">
        <article class="contents__article">
          <h2 class="contents__heading">
            <span class="contents__heading--text">1．まずは外来にお越しください</span>
          </h2>
          <p class="contents__text">日本生殖医学会の泌尿器科生殖医療専門医の10分ほどの診察とエコー検査で診断できます。<br>陰嚢の腫れや凸凹が見てわかるグレード３と腫れが触ってわかるグレード2、エコー検査では静脈の太さが3ｍｍ以上が複数、または2.8mm以上が多数あるものが手術適応です。</p>
          <p class="contents__text">精索静脈瘤が見つかれば、治療により87％で精液が改善、精子の質も改善するため、自然・人工授精・体外受精・顕微授精の妊娠率が改善し、流産や奇形児の確率が低下します。<br>非常に悪いの精液所見（顕微授精レベル）でも38％で正常化し、奥様の負担が軽減されます。<br>
          初診の際に術前検査、手術予約を行っていただくことが可能です。</p>
          <div class="table">
            <dl class="table--wrap">
              <dt class="table__title">初診</dt>
              <dd class="table__description">5,000円</dd>
              <dt class="table__title">エコー検査</dt>
              <dd class="table__description">5,000円</dd>
            </dl>
          </div>
          <p class="contents__text">当院では、遠方から受診されるかた、また治療をお急ぎの方向けに、初診当日に日帰りで手術を受けていただくことが可能です。<br>初診当日に手術を受けられる際の、当日の流れについては「<a href="/sinryo/nagao_method/">診察の日に日帰り顕微鏡下精索静脈瘤手術をご希望される方へ</a>」をご覧ください。</p>
        </article>

        <article class="contents__article">
          <h2 class="contents__heading">
            <span class="contents__heading--text">2．予約後、術前検査を行います</span>
          </h2>
          <p class="contents__text">感染症の検査（B型肝炎・C型肝炎・梅毒・HIV）をお受けいただきます。<br>※6か月以内のものであれば他院のものでもお使いいただけます。必ず原本をお持ちください。</p>
          <p class="contents__text">なお、術前検査は初診の際にお受けいただけます。</p>
          <div class="table">
            <dl class="table--wrap">
              <dt class="table__title">検査</dt>
              <dd class="table__description">20,000円</dd>
            </dl>
          </div>
        </article>

        <article class="contents__article">
          <h2 class="contents__heading">
            <span class="contents__heading--text">3．手術を行います</span>
          </h2>
          <p class="contents__text">手術は、日帰りで片側1時間程度です。2.5㎝程の小切開で、低侵襲な手術をお受けいただけます。手術翌日から仕事への復帰も可能です。</p>

          <p class="contents__text">また独自の技術で開発した局所麻酔法を行っており、痛みの少ない手術を13歳から安全にお受けいただいています。</p>
          <div class="table">
            <dl class="table--wrap">
              <dt class="table__title">手術</dt>
              <dd class="table__description">260,000円～</dd>
              <dt class="table__title">局所麻酔</dt>
              <dd class="table__description">20,000円</dd>
            </dl>
            <p style="margin-top: 10px; text-align:right;">※片側のみの料金です</p>
			    </div>
          <p class="contents__text">・担当医師によって金額が異なります。<br />     ・上記の金額に加え、割増料金として土曜・日曜・祝日は20,000円が必要となります。</p>
        </article>

        <div class="contents--lower__heading">
          <h2 class="contents--lower__heading--text">
            お支払い方法
            <p class="contents--lower__heading__description">手術費用に関しては、予約完了後、手術前までに指定口座へのお振込みをお願いいたします。<br>それ以外の費用（初診料、術前検査料など）に関しては現金・クレジットカードのご利用が可能です。</p>
          </h2>
        </div>
      </section>
      <section class="contents">
        <article class="contents__article">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
        </article>
      </section>
    </div>
<?php get_footer(); ?>
