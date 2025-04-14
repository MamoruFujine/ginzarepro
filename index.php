<?php //diagnosis
$path = $_SERVER['REQUEST_URI'];
if( strpos( $path, '/diagnosis/' ) !== false ):
get_template_part('404');
else: ?>
<?php get_header(); ?>
<style>
#document.timeline-Widget {
    max-width: 100% !important;
    width: 100% !important;
}
div.timeline-Widget {
    max-width: 100% !important;
    width: 100% !important;
}
.timeline {
    max-width: 100% !important;
    width: 100% !important;
}
/* ここから下を追記 */
.SandboxRoot.env-bp-970 .timeline-Tweet-text {
    font-size: 10.5pt !important;
    line-height: 14pt!important;
}
.SandboxRoot.env-bp-820 .timeline-Tweet-text {
    font-size: 10.5pt !important;
    line-height: 14pt!important;
}
.mainVis-img {
  background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_5.png?ver0123) no-repeat bottom left;
  height: 710px !important;
  background-size: cover;
}
.mainVis__text,.mainVis__text .mainVis__text__title,.mainVis__text .mainVis__text__title i{
  overflow: hidden;
  white-space: nowrap;
  text-indent: 100%;
  padding:0!important;
  height: 1em;
}
@media screen and (min-width: 1201px){
  .mainVis__contact{
    z-index: 9;
  }
  .mainVis{
    position: relative;
    background-color: #fcf8f3;
  }
/*  .mainVis:before,
  .mainVis:after{
    content: '';
    position: absolute;
    left: 0;
  }
  .mainVis:before{
    width: 100%;
    height: 100%;
    top: 0;
    background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_bg.png?ver0123) repeat-y;
    background-size: 100% auto;
    z-index: 1;
  }*/
.mainVis::after {
    bottom: 0;
    width: 100%;
    height: 56%;
    display: block;
    /* background: -webkit-gradient(linear, left bottom, left top, from(rgba(0,0,0,0.37)), to(rgba(0,0,0,0))); */
    background: -o-linear-gradient(bottom, rgba(0,0,0,0.37), rgba(0,0,0,0));
    background: linear-gradient(0deg, rgba(0,0,0,0.37), rgba(0,0,0,0));
    z-index: 3;
}
  .mainVis-img {
    /*0712*/
    /*background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_6.png) no-repeat bottom center;*/
    background-position: bottom center;
    height: 658px !important;
    position: relative;
    z-index: 5;
  }
  .mainVis__text{
    width: 100%;
    z-index: 7;
  }
  .mainVis__text__title, .mainVis__text__header {
    max-width: 1110px;
    margin: 0 auto;
  }
}
.varicocele-table th, .varicocele-table td {
    padding: 15px;
}
.varicocele-table th, .varicocele-table td {
    line-height: 1.5;
    font-size: 14px;
    padding-left: 5px;
    padding-right: 5px;
    vertical-align: middle;
}
.varicocele-table th {
    background: #f8f8f8;
    text-align: center;
}
.varicocele-table table, .varicocele-table td, .varicocele-table th {
    border: solid 1px #f0f0ee;
}
<?php if(0){ ?>
.mainVis-img::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;         /* 幅いっぱい */
  height: 100%;        /* 高さいっぱい */
  display: block;      /* 高さを指定するためにブロック要素にする */
  /* background:-webkit-gradient(linear, left bottom, left top, from(rgba(0,0,0,0.6)), to(rgba(0,0,0,0))); */
  background:-o-linear-gradient(bottom, rgba(0,0,0,0.6), rgba(0,0,0,0));
  background:linear-gradient(0deg, rgba(0,0,0,0.6), rgba(0,0,0,0))
}
<?php } ?>
.mainVis__text__title,.mainVis__text__header{
  color: #333;
  font-weight: 600;
  line-height: 1.5;
}
.mainVis__text__title i{
  font-size: .5em;
  display: block;
  font-style: normal;
}
@media screen and (min-width: 769px){
  .sp-mode{
    display: none;
  }
  .mainVis__text__title{
    font-size:clamp(3rem,4vw,3.8rem);/*0712*/
  }
}
@media screen and (min-width: 1414px){
  .mainVis-img{/*0712*/
    background-size: auto 100%;
  }
  /*0712*/
/*  .mainVis:before{
    width: 50%;
    height: 100%;
    top: 0;
    background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_bg-l.png) repeat-x;
    background-size: auto 100%;
    z-index: 1;
  }*/
}
@media screen and (min-width: 769px) and (max-width: 1200px){
  .mainVis-img{
    background-position: bottom center;
    height: 41vw !important;
    background-size: auto 100%;
  }
}
@media screen and (max-width: 768px){
  .pc-mode{
    display: none;
  }
  .mainVis{
    /*margin-top: 0;*/
    background:#fefbf7 !important;
  }
  .mainVis-img {
    background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_sp_4.png?ver0123) no-repeat 50% 100%;
    background-size: contain;
  }
  .mainVis,
  .mainVis-img{
    width: 100%;
    height: 368px !important;
    height: 110vw !important;
  }

  .mainVis__text__header {
      font-size: 1rem;
      font-size: 2.6vw;
    }
  .mainVis__text__title {
      font-size: 1.6rem;
      font-size: 4.1vw;
    }
  .mainVis__contact{
    bottom: -50px;
  }
}
@media screen and (max-width: 1024px){
  .mainVis__text {
      padding: 110px 25px 30px 4.5%;
  }
}
  html #wpadminbar{display: none;}
</style>
  <div class="page-wrap link-wrap ink">
    <section class="mainVis">
      <h2 class="mainVis__text">
        <span class="mainVis__text__title">
          精索静脈瘤検診・手術を<br class="sp-mode">中心とした<br class="pc-mode">
          男性不妊治療
          <i>精液所見を改善し自然妊娠も可能</i>
        </span>
      </h2>
    <a class="mainVis__contact" href="/contact/appointment-first/" target="_blank">
        <p class="mainVis__contact__header" style="padding: 0 !important; margin: 0 !important; border: none;">
          <span class="fas fa-envelope"></span>ご予約・お問い合わせ
        </p>
      </a>
      <div class="mainVis">
        <div class="mainVis-img"></div>
      </div>
    </section>
    <div class="link_box-top"><a href="https://ginzarepro.jp/sinryo/lva/">リンパ浮腫の治療ご希望の方はこちら &gt;</a></div>
    
    <section class="contents">
      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">男性不妊治療、精索静脈瘤検診・手術なら銀座リプロ外科へ</span>
        </h2>
        <div class="description">
          <p class="contents__text">医療法人社団マイクロ会　銀座リプロ外科では、治療可能な男性不妊を中心に診療しています。<br>中でも<span class="Marker">精索静脈瘤の手術にかけては日本で第一人者</span>と言われる永尾先生が開発した<span class="txt_r1_2">ナガオメソッド</span>を行える唯一のクリニックとなっております。<br>0.5mm以下の吻合技術を持つ<span class="Marker">スーパーマイクロサージャリー（超微小外科医）</span>が執刀します。</p>
        </div>
        <dl class="dl_r1_2"><dt>出典</dt>
			<dd><a href="https://www.jmedj.co.jp/book/search/detail.php?id=2291" target="_blank">1) 片桐由起子, 編著：患者さんからの質問に自信をもって答える 不妊治療Q＆A. 日本医事新報社, 2023, p52-58</a><br>
        <a href="https://www.kanehara-shuppan.co.jp/books/detail.html?isbn=9784307301497" target="_blank">2）堤 治, 監著：ステップと動画で学ぶ 山王病院の生殖医療第2版. 金原出版株式会社, 2024, p141-145</a></dd>
        </dl>
        <div class="description__img"></div>
      </article>
      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">多くの方がご来院されています</span>
        </h2>
        <div class="checkList large">
          <ul class="checkList__list">
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                精液検査の結果、総運動精子数が非常に低かった方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                都合により入院での手術が難しい方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                他院で精索静脈瘤手術をしたが静脈瘤が改善されない
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                奥様や同僚など周囲に不妊治療を知られたくない方
              </p>
            </li>
          </ul>
        </div>
      </article>
      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">医師のご紹介</span>
        </h2>
        <div class="doctor">
          <div class="doctor__img"></div>
          <div class="doctor__biography">
            <p class="doctor__biography--name">永尾光一</p>
            <p class="doctor__biography--belong">
              東邦大学医学部教授 大森病院リプロダクションセンター長
            </p>
            <p class="doctor__biography--comment">銀座リプロ外科では<span class="Marker">年間800例を超える精索静脈瘤手術</span>を行っております。中でも永尾医師はナガオメソッドにより20年以上、精索静脈瘤手術をしており、その手術数は<span class="Marker">10,000例程度</span>となります。<br>日本ではまだあまり知られていない診療が多いですが、より多くの患者様に気軽に相談していただければと思っております。
            </p>
            <p class="doctor__biography--btn">
              <a class="contents__item__permalink" href="/staff/#aboutNagao">医師詳細</a>
            </p>
          </div>
        </div>
        <!-- <p class="doctor__biography--belong" style="text-decoration-line: underline; margin-top:50px;">YouTubeでも情報を発信しています。以下バナーよりぜひ御覧ください。</p>
        <p style="width: 300px;"><a href="https://www.youtube.com/channel/UC8A7zCAuY1NXZDgNPXE9awg" target="_blank"><img src="/wp-content/themes/ginzarepro_0.1/img/bn03.webp" alt="youtubeバナー" style="max-width: 100%;"></a></p> -->

        <h2 class="contents__heading">
          <span class="contents__heading--text">Youtube</span>
        </h2>
        <div class="youtube_list_wrap">
          <ul class="flex-box">
            <li><div class=""><iframe width="560" height="315" src="https://www.youtube.com/embed/hA533QEPHZY?si=vhRtn9uyDTdJxsLH" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe></div></li>
            <li><iframe width="560" height="315" src="https://www.youtube.com/embed/IUkV3B-GXNk?si=2F42gZ8Wnr5F71_V" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe></li>
            <li><iframe width="560" height="315" src="https://www.youtube.com/embed/AvjHTna7_XE?si=levHis1otgkpmox_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen loading="lazy"></iframe></li>
          </ul>
        </div>
        
      </article>
 <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">銀座リプロ外科が受診をおすすめする理由</span>
        </h2>
        <div class="contents__text">
        <aside>
          <h2>1. 不妊原因の約半数は男性にあり</h2>
          <div class="aboutMaleInfertility">
            <p class="aboutMaleInfertility__text contents__text">
              WHO(世界保健機構)の不妊症原因調査では、男性不妊48％
              女性不妊65％、<br>
              夫婦両方24％で、男性に原因がある場合が珍しくありません。<br>
              精索静脈瘤が見つかれば、治療により87％で精液が改善、精子の質も改善するため、<br>
              自然・人工授精・体外受精・顕微授精の妊娠率が改善し、流産や奇形児の確率が低下します。<br>
              非常に悪いの精液所見（顕微授精レベル）でも38％で正常化し、奥様の負担が軽減されます。<br>
              また、精索静脈瘤を放置すると精巣機能が悪化していき2人目不妊にもなりますので、<br>
              早期診断・早期治療を推奨（欧州泌尿器科学会ガイドラインで推奨グレードAランク
              )します。
            </p>
            <div class="aboutMaleInfertility__graph">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/aboutMaleInfertility__graph.webp" alt="" />
            </div>
          </div>

<h2 style="contents__heading--text" data-gtm-vis-first-on-screen-8372168_39="227" data-gtm-vis-total-visible-time-8372168_39="2400">2. 男性不妊は根本的治療も可能</h2>
<p>男性不妊治療の治療方法にはさまざまな方法があります。生活習慣の改善や補助的療法は日々の生活に組み込むことができますが、対処療法や根本的治療には、医師の力が必要です。<br><br>
ただし、対処療法では男性自身の生殖機能を改善しているわけではないため、二人目、三人目を考える際にも、再度治療が必要です。そのため、当院では根本的治療をおすすめしています。</p>
<table>
<tbody>
<tr>
<th></th>
<th style="font-weight:bold; color: #e71f19;">根本的治療※</th>
<th>対症療法</th>
<th>補助的療法</th>
<th>生活習慣の改善</th>
</tr>
<tr>
<td class="tdh">生殖機能</td>
<td style="font-weight:bold; color: #e71f19;">改善</td>
<td style="font-weight:bold; color: #e71f19;">不変・低下</td>
<td>不変・軽度改善</td>
<td>不変・軽度改善</td>
</tr>
<tr>
<td class="tdh">医学的根拠</td>
<td>高い</td>
<td>高い</td>
<td>低い</td>
<td>低い</td>
</tr>
<tr>
<td class="tdh">方法</td>
<td><span style="font-weight:bold;">・精索静脈瘤手術<br>・ナガオメソッド</span><span>・精路再建手術</span><span>・低コナドトロピン性性腺機能低下症治療</span></td>
<td>・人工授精<span><br>・体外受精</span><br><span>・顕微授精</span><br><span>・精巣内精子採取術</span><span class="mn">(TESE)</span><span class="mn">→ 生殖機能は手術で低下</span></td>
<td>・サプリメント<span class="mn">（CoQ10・ビタミン剤などの抗酸化薬、亜鉛など）</span>・漢方薬<p></p>
<p>・ホルモン薬</p>
</td>
<td>・禁煙<br>・長風呂を避ける<br>・サウナを避ける<br>・トランクスをはく</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p class="mn"><span class="txt_r1_2">※ 男性不妊での有病率</span> <span style="font-weight:bold;">精索静脈瘤40％</span> ＞ 精路閉塞2％ ＞ 低ゴナドトロピン性性腺機能低下症0.0001％</p>
<dl class="dl_r1_2"><dt>出典</dt>
<dd><a href="https://www.jmedj.co.jp/book/search/detail.php?id=2291" target="_blank">1) 片桐由起子, 編著：患者さんからの質問に自信をもって答える 不妊治療Q＆A. 日本医事新報社, 2023, p52-58</a><br>
        <a href="https://www.kanehara-shuppan.co.jp/books/detail.html?isbn=9784307301497" target="_blank">2）堤 治, 監著：ステップと動画で学ぶ 山王病院の生殖医療第2版. 金原出版株式会社, 2024, p141-145</a></dd>
</dl>
<?php /*<p style="font-weight:bold;">結論：一般的には、精索静脈瘤手術・ナガオメソッドは、生殖機能を改善させる唯一の方法。</p>
<p><a href="/sinryo/nagao_method/">精索静脈瘤手術・ナガオメソッドについて詳しくはこちら</a></p>*/?>
<h2 style="contents__heading--text" data-gtm-vis-first-on-screen-8372168_39="406" data-gtm-vis-total-visible-time-8372168_39="5000" data-gtm-vis-recent-on-screen-8372168_39="2692" data-gtm-vis-has-fired-8372168_39="1">3.精索静脈瘤手術・ナガオメソッドは、生殖機能を改善させる唯一の方法。</h2>
<p>男性不妊の根本的な治療法には、精索静脈瘤手術（ナガオメゾッド）、精路再建術、低コナドトロピン性性腺機能低下症治療がありますが、有病率から考えると、一般的には精索静脈瘤手術（ナガオメゾッド）が生殖機能を改善させる唯一の方法と言えます。</p>
<p>人工授精、体外受精、顕微授精は、男性の生殖機能を改善させません。また精巣内精子採取術（TESE）は、手術操作によって生殖機能を低下させます。</p>
<p>補助的療法や生活習慣の改善は有効な場合がありますが、医学的根拠は高くありません。</p>
    </aside>
    </div>
      </article>
      <article class="contents__article">
          <h2 class="contents__heading">
            <span class="contents__heading--text">ナガオメソッドと他手術の違い</span>
          </h2>
          <div class="contents__text">
          <p>当院ではナガオメソッドによる自費による精索静脈瘤手術をいたしております。<br>顕微鏡下精索静脈瘤低位結紮術ナガオメソッドは必要なもの全てを残すので、機能の低下や合併症も殆どなく、<span class="Marker">精液所見の改善も87%（※1）</span>と高い結果を得られています。<br></p>          男性不妊でお悩みの方は東邦大学の永尾教授が開発したナガオメソッドによる精索静脈瘤手術をご検討ください。</p>
          <p class="mn">（※1 データ出典：Nagao K ，Nakajima K, et al：One day microsurgical varicocelectomy under local anesthesia． International Federation of Fertility(IFFS)/ Japan Society for Reproductive Medicine(JSRM) International Meeting 2015*(Symposium)* ，Yokohama，2015 4）</p>
          <p>以下の表は、精索静脈瘤の手術方式を特徴ごとにまとめたものです。<br>再発率が低く日帰りできるナガオメソッドをお薦めいたします。</p>
        </div>
        <?php /*<div class="scroll-table-wrap">
          <table class="varicocele-table">
            <thead>
            <tr>
            <th class="th-first"></th>
            <th class="bg-red border-top border-left border-right">ナガオメソッド<br><span class="small">顯微鏡下低位結紮術</span></th>
            <th class="bold">顕微鏡下高位結紮術</th>
            <th>一般的な顕微鏡下<br>低位結紮術</th>
            <th>鼠径部結紮術</th>
            <th>肉眼的高位結紮術</th>
            <th>腹腔鏡手術</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <th>麻酔法</th>
            <td class="bold border-left border-right">局所麻酔 (7段階)</td>
            <td>全身麻酔</td>
            <td>全身/局所麻酔</td>
            <td>全身麻酔</td>
            <td>全身麻酔</td>
            <td>全身麻酔</td>
            </tr>
			<tr>顕微鏡下精索静脈瘤低位（鼠径下）結紮手術
            <th>入院日帰り</th>
            <td class="bold border-left border-right">日帰り</td>
            <td>入院</td>
            <td>入院/日帰り</td>
            <td>入院</td>
            <td>入院</td>
            <td>入院</td>
            </tr>
            <tr>
            <th>動脈温存<br>(外精動脈温存)</th>
            <td class="bold bg-blue border-left border-right">6-16本<br>(0-6本)</td>
            <td>0-1本<br>(なし)</td>
            <td>1-2本<br>(なし)</td>
            <td>1-2本<br>(なし)</td>
            <td>なし<br>(なし)</td>
            <td>なし<br>(なし)</td>
            </tr>
            <tr>
            <th>リンパ管温存<br>(外精リンパ管温存)</th>
            <td class="bold bg-blue border-left border-right">8-26本<br>(0-7本)</td>
            <td class="bg-blue">3-5本<br>(なし)</td>
            <td class="bg-yellow">なし/1-2本<br>(なし)</td>
            <td class="bg-yellow">なし/1-2本<br>(なし)</td>
            <td class="bg-yellow">なし/1-2本<br>(なし)</td>
            <td class="bg-yellow">なし/1-2本<br>(なし)</td>
            </tr>
            <tr>
            <th>神経温存<br> (外精神経温存)</th>
            <td class="bold bg-blue border-left border-right">8-28本<br>(2-13本)</td>
            <td class="bg-blue">1-3本<br>(なし)</td>
            <td class="bg-yellow">なし<br>(なし)</td>
            <td class="bg-yellow">なし<br>(なし)</td>
            <td class="bg-yellow">なし<br>(なし)</td>
            <td class="bg-yellow">なし<br>(なし)</td>
            </tr>
            <tr>
            <th>結紮した逆流静脈<br><span class="small red">(結紮した外精逆流静脈)</span></th>
            <td class="bold bg-blue border-left border-right">10-67本<br><span class="red">(2-20本)</span></td>
            <td class="bg-blue">3-7本<br><span class="red">(なし)</span></td>
            <td class="bg-yellow">なし<br><span class="red">(なし)</span></td>
            <td class="bg-yellow">なし<br><span class="red">(なし)</span></td>
            <td class="bg-yellow">なし<br><span class="red">(なし)</span></td>
            <td class="bg-yellow">なし<br><span class="red">(なし)</span></td>
            </tr>
            <tr>
            <th>再発率</th>
            <td class="bold bg-blue border-left border-right">0.5%</td>
            <td class="bg-blue">5%</td>
            <td class="bg-yellow">13.3%※</td>
            <td class="bg-yellow">13.3%</td>
            <td class="bg-yellow">29%</td>
            <td class="bg-yellow">3-7%</td>
            </tr>
            <tr>
            <th>精巣水瘤合併</th>
            <td class="bold bg-blue border-left border-right">なし</td>
            <td class="bg-blue">なし</td>
            <td class="bg-yellow">あり</td>
            <td class="bg-yellow">あり</td>
            <td class="bg-yellow">5-10%</td>
            <td class="bg-yellow">あり</td>
            </tr>
            <tr>
            <th>重篤な合併症の<br>可能性</th>
            <td class="bold bg-blue border-left border-right">なし</td>
            <td class="bg-blue">なし</td>
            <td class="bg-pink">あり<br>(血流障害・精巣萎縮)</td>
            <td class="bg-blue">なし</td>
            <td class="bg-blue">なし</td>
            <td class="bg-pink">あり<br>(出血・腸管損傷)</td>
            </tr>
            <tr>
            <th>使用器具</th>
            <td class="small bold border-left border-right">顕微鏡・ドップラ血流計<br>・NAGAOBO</td>
            <td>顕微鏡</td>
            <td>顕微鏡</td>
            <td>–</td>
            <td>–</td>
            <td>腹腔鏡</td>
            </tr>
            <tr>
            <th>技術レベル</th>
            <td class="bold bg-blue border-left border-right">非常に高い</td>
            <td>普通</td>
            <td class="bg-yellow">ばらつき多い</td>
            <td>普通</td>
            <td>普通</td>
            <td>普通</td>
            </tr>
            <tr>
            <th>保険適応</th>
            <td class="bold border-left border-right">自費</td>
            <td>保険</td>
            <td>自費/保険</td>
            <td>保険</td>
            <td>保険</td>
            <td>保険</td>
            </tr>
            <tr>
            <th>おすすめ度</th>
            <td class="bold bg-blue border-left border-right border-bottom">◎</td>
            <td class="bg-blue">○</td>
            <td>△/×</td>
            <td>×</td>
            <td>×</td>
            <td>×</td>
            </tr>
            </tbody>
          </table>
        </div>*/?>
        <!-- 精索静脈瘤テーブル -->
        <div class="scroll-table-wrap">
        <table class="varicocele-table">
        <thead>
        <tr>
        <th class="th-first"></th>
        <th class="bg-red border-top border-left border-right bold">ナガオメソッド<br>
        <span class="small">顯微鏡下低位結紮術</span></th>
        <th class="bold">顕微鏡下リンパ管<br>温存<span class="underline">高位</span>結紮術</th>
        <th class="bold">一般的な顕微鏡下<br>低位(一括)結紮術</th>
        <th class="bold">一般的な顕微鏡下<br>低位(簡易)結紮術</th>
        <th class="bold">肉眼的高位結紮術</th>
        <th class="bold">腹腔鏡手術</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th class="bold">麻酔法</th>
        <td class="bold border-left border-right">局所麻酔 (7段階)</td>
        <td>全身麻酔</td>
        <td>全身/局所麻酔</td>
        <td>全身麻酔/局所麻酔</td>
        <td>全身麻酔</td>
        <td>全身麻酔</td>
        </tr>
        <tr>
        <th class="bold">入院日帰り</th>
        <td class="bold border-left border-right">日帰り</td>
        <td>入院</td>
        <td>入院/日帰り</td>
        <td>入院/日帰り</td>
        <td>入院</td>
        <td>入院</td>
        </tr>
        <tr>
        <th class="bold">動脈温存<br>
        (外精動脈温存)</th>
        <td class="bold bg-blue border-left border-right">6-16本<br>
        (0-6本)</td>
        <td>0-1本<br>
        (なし)</td>
        <td>1-2本<br>
        (なし)</td>
        <td>1-2本<br>
        (なし)</td>
        <td>なし<br>
        (なし)</td>
        <td>なし<br>
        (なし)</td>
        </tr>
        <tr>
        <th class="bold">リンパ管温存<br>
        (外精リンパ管温存)</th>
        <td class="bold bg-blue border-left border-right">8-26本<br>
        (0-7本)</td>
        <td class="bg-blue">3-5本<br>
        (なし)</td>
        <td class="bg-pink2">なし/1-2本<br>
        (なし)</td>
        <td class="bg-pink2">なし/1-2本<br>
        (なし)</td>
        <td class="bg-pink2">なし/1-2本<br>
        (なし)</td>
        <td class="bg-pink2">なし/1-2本<br>
        (なし)</td>
        </tr>
        <tr>
        <th class="bold">神経温存<br>
        (外精神経温存)</th>
        <td class="bold bg-blue border-left border-right">8-28本<br>
        (2-13本)</td>
        <td class="bg-blue">1-3本<br>
        (なし)</td>
        <td class="bg-pink2">なし<br>
        (なし)</td>
        <td class="bg-pink2">なし<br>
        (なし)</td>
        <td class="bg-pink2">なし<br>
        (なし)</td>
        <td class="bg-pink2">なし<br>
        (なし)</td>
        </tr>
        <tr>
        <th class="bold">内精逆流静脈結紮<br>
        <span class="small red">外精逆流静脈結紮</span></th>
        <td class="bold bg-blue border-left border-right">10-67本<br>
        <span class="red">(2-20本)</span></td>
        <td class="bg-blue">3-7本<br>
        <span class="red bold">外精逆流静脈残存</span></td>
        <td class="bg-pink2">数えない<br>
        <span class="red bold">外精逆流静脈残存</span></td>
        <td class="bg-pink2">少ない（残存あり）<br>
        <span class="red bold">外精逆流静脈残存</span></td>
        <td class="bg-pink2">数えない<br>
        <span class="red bold">外精逆流静脈残存</span></td>
        <td class="bg-pink2">数えない<br>
        <span class="red bold">外精逆流静脈残存</span></td>
        </tr>
        <tr>
        <th class="bold">再発率</th>
        <td class="bold bg-blue border-left border-right">0.5%</td>
        <td class="bg-blue">5%</td>
        <td class="bg-pink2">13.3%※</td>
        <td class="bg-pink2">13.3%以上※</td>
        <td class="bg-pink2">29%</td>
        <td class="bg-pink2">3-7%</td>
        </tr>
        <tr>
        <th class="bold">精巣水瘤合併</th>
        <td class="bold bg-blue border-left border-right" "="">なし</td>
        <td class="bg-blue" bg-yellow"="">なし</td>
        <td class="bg-pink2">あり</td>
        <td class="bg-pink2">あり</td>
        <td class="bg-pink2">あり</td>
        <td class="bg-pink2">あり</td>
        </tr>
        <tr>
        <th class="bold">重篤な合併症の<br>
        可能性</th>
        <td class="bold bg-blue border-left border-right">なし</td>
        <td class="bg-blue">なし</td>
        <td class="bg-pink2">あり<br>
        (血流障害・精巣萎縮)</td>
        <td class="bg-pink2">あり<br>(血流障害・精巣萎縮)</td>
        <td class="bg-blue">なし</td>
        <td class="bg-pink2">あり<br>
        (出血・腸管損傷)</td>
        </tr>
        <tr>
        <th class="bold">使用器具</th>
        <td class="small bold border-left border-right">顕微鏡・ドップラ血流計<br>
        ・NAGAOBO</td>
        <td>顕微鏡</td>
        <td>顕微鏡</td>
        <td>顕微鏡</td>
        <td>–</td>
        <td>腹腔鏡</td>
        </tr>
        <tr>
        <th class="bold">技術レベル</th>
        <td class="bold bg-blue border-left border-right">非常に難しい</td>
        <td>普通</td>
        <td class="bg-pink2">簡単・短時間</td>
        <td class="bg-pink2">簡単・短時間</td>
        <td>普通</td>
        <td>普通</td>
        </tr>
        <tr>
        <th class="bold">保険適応</th>
        <td class="bold border-left border-right">自費</td>
        <td>保険</td>
        <td>自費/保険</td>
        <td>自費/保険</td>
        <td>保険</td>
        <td>保険</td>
        </tr>
        <tr>
        <th class="bold">おすすめ度</th>
        <td class="bold bg-blue border-left border-bottom border-right">◎<br>(銀座リプロ外科）</td>
        <td class="bg-blue">○</td>
        <td>△/×</td>
        <td>△/×</td>
        <td>×</td>
        <td>×</td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="mn2">
          <p>文献</p>
          <ol class="contents__text">
			  <li><a href="https://d56bochluxqnz.cloudfront.net/media/EAU-Guidelines-on-Male-Infertility-2019.pdf" target="_blank">ヨーロッパ泌尿器科学会男性不妊ガイドライン</a></li>
            <li>K. Nagao: One day microsurgical varicocelectomy under local anesthesia.<br>
            IFFS/ JSRM International Meeting (Symposium) , Yokohama, 2015</li>
          </ol>
          <p>※本邦では、外精静脈を残すので、鼠径部結紮術と同じ再発率である。</span></p>
        </div>
        <?php /* 2312_02 ここから */?>
        <h2 class="contents__heading"><span class="contents__heading--text">精索静脈瘤再発予防には、外精静脈の結紮・切離が重要です</span></h2>
          <div class="remodal remodal-box varicocele_img_box" data-remodal-id="modal_img_01">
            <button data-remodal-action="close" class="remodal-close"></button>
            <p class="align-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img_varicocele_01@2x.png" alt="" width="640" heigth="360"></p>
          </div>
		    <h3 class="contents__heading--text child">顕微鏡下精索静脈瘤低位（鼠径下）結紮手術　2019.4シュレーゲル教授招請講演のスライド</h3>
        <div class="table_grade_box">
        <div class="scroll-table-wrap">
        <table class="table_grade">
        <thead>
        <tr>
        <th></th>
        <th><span class="color-yel txt-bold">演者（米国における第一人者）</span>シュレーゲル教授（コーネル大学）</th>
        <th><span class="color-yel txt-bold">座長</span>永尾教授（東邦大学・銀座リプロ外科）</th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>陰部大腿神経の陰部枝</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th><span class="color-blue">外精逆流静脈</span></th>
        <td><span class="color-blue txt-bold">結紮し切離（両氏の共通点）</span><a href="#modal_img_01" class="remodal_link">画像を見る</a></td>
        <td><span class="color-blue txt-bold">結紮し切離（両氏の共通点）</span><a href="#modal_img_01" class="remodal_link">画像を見る</a></td>
        </tr>
        <tr>
        <th><span class="color-red">外精動脈</span>（少しの違い）</th>
        <td><span class="color-red">太ければ温存 ※1</span></td>
        <td><span class="color-red txt-bold">顕微鏡下にすべて温存 ※1</span></td>
        </tr>
        <tr>
        <th>精巣導帯静脈</th>
        <td>温存される<br>（精巣は通常は露出されない）<span class="color-red">※2</span></td>
        <td>温存される<br>（精巣は露出されない）</td>
        </tr>
        <tr>
        <th>精巣挙筋静脈</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th>精巣挙筋動脈</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th><span class="color-red">精管静脈（少しの違い）</span></th>
        <td><span class="color-red">いつも温存される</span></td>
        <td><span class="color-red txt-bold">&gt;2mm 結紮し切離　※3　&lt;2mm温存される</span></td>
        </tr>
        <tr>
        <th>精管動脈</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th>内精逆流静脈</th>
        <td>結紮し切離</td>
        <td>結紮し切離</td>
        </tr>
        <tr>
        <th>精巣動脈</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th>すべての神経</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        <tr>
        <th>すべてのリンパ管</th>
        <td>温存される</td>
        <td>温存される</td>
        </tr>
        </tbody>
        </table>
        </div>
        <ol>
          <li><span class="color-red">※１</span>　外精動脈が内精動脈と吻合または接続しているというデータがないため、日常的にすべての外精動脈を保存ているわけではない。<span class="color-red">永尾教授は、静脈と動脈は並行して走行するので<span class="txt-underline">外精動脈も精巣に重要</span>と考える。</span></li>
          <li><span class="color-red">※２</span>　複雑で再発性の精索静脈瘤の修復の場合にのみ精巣露出する。</li>
          <li><span class="color-red">※３　<span class="txt-underline">太いものには逆流があるので結紮</span></span></li>
        </ol>
	<div class="imgbx">
		<img alt="シュレーゲル教授と永尾先生のお写真" class="shure" src="https://ginzarepro.jp/wp-content/uploads/2022/07/20240221044809.jpg">
	<p>左：シュレーゲル教授/右：永尾先生</p>
	</div>
      </div>
        <?php /* 2312_02 ここまで */?>
        <!--<h3 class="nagaomethod__ttl">当院ではリスクが少なく男性不妊の効果改善が<br class="pc-mode">見込めるナガオメソッドを採用しています</h3>-->
        <ul class="nagaomethod-list">
        <li class="nagaomethod-list__item">
          <h4 class="nagaomethod-list__ttl">当院ではリスクが少なく<br>男性不妊の効果改善が見込める<br>ナガオメソッドを採用しています<br>（顕微鏡下精索静脈瘤<br class="sp-mode">低位結紮術）</h4>
          <p class="ups"><img src="https://ginzarepro.jp/lp/images/nagao_method_new_img1.jpg" alt="ナガオメソッド治療イメージ" class="nagaomethod-list__img1" width="499" height="500"></p>
          <p class="nagaomethod-list__txt">※特徴<br>精管・動脈・リンパ管・神経、大事なものをすべて温存します。逆流静脈は細かく結紮、太いものは切離します。</p>
          <p class="nagaomethod-list__txt">※時間<br>片側50分～90分（術者による）<br>※術者に必要な技能<br>熟練した技術と根気が必要です。
          </p><p class="nagaomethod-list__txt">※リスク<br>再発0.5％<br>合併症は、ほとんどありません。</p>
        </li>
        <li class="nagaomethod-list__item">
          <h4 class="nagaomethod-list__ttl">一般的に行われている<br>顕微鏡下低位結紮術</h4>
          <p class="ups"><img src="https://ginzarepro.jp/lp/images/nagaomethod_img02.jpg" alt="一括結紮による精索静脈瘤手術イメージ" class="nagaomethod-list__img2" width="360" height="486"></p>
          <p class="nagaomethod-list__txt">※特徴<br>精管１本、動脈１本を残して、その他動脈・神経・リンパ管を含んで逆流静脈を一括結紮します。</p>
          <p class="nagaomethod-list__txt">※時間<br>30分程度<br>※術者に必要な技能<br>経験の浅い術者でも手術が可能です。</p>
          <p class="nagaomethod-list__txt">※リスク<br>再発高い（一本の糸で縛るため、緩みやすく再発のリスクも高いです。）<br> 合併症は、血流障害・精巣委縮・リンパ浮腫・痛みのリスクがあります。</p>
        </li>
      </ul>
      <div class="btn-link"><a href="https://ginzarepro.jp/sinryo/nagao_method/">精索静脈瘤手術・ナガオメソッドについて詳しくはこちら</a></div>



      </article>
<style>
table , td, th {
  border: 1px solid #595959;
  border-collapse: collapse;
  width: 100%;
  font-size:14px;
  vertical-align: middle;
}
td, th {
  padding: 5px;
  width: 20%;
  height: 25px;
}
th {
  background: #f0e6cc;
}
.even {
  background: #fbf8f0;
}
.odd {
  background: #fefcf9;
}
.tdh{
  font-weight: bold;
  vertical-align: middle;
  text-align:center;
}
.mn{
  font-size:12px;
}
table span{
    line-height: 1.6em;
    display: inline-block;
}
.youtube {
  position: relative;
  width: 100%;
  padding-top: 56.25%;
}
.youtube iframe {
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
}
.top-data{
  width: 100%;
  height: auto;
}

.fjk_consider_box {
 border: solid 3px #e52222;
}
.fjk_consider_box > h4 {
 background-color: #e52222;
 color: #ffffff;
 text-align: center;
 font-weight: bold;
 font-size: 2.4rem;
 padding: 12px 0 15px;
 margin: 0;
 border-left: none;
 line-height: 1.8;
}
.fjk_consider_box_inner {
 padding: 10px 15px;
 background-color: #efefef;
}
@media screen and (max-width: 768px) {
.fjk_consider_box > h4 {
 font-size: 1.7rem;
 padding: 2px 0 5px;
}
}

div.imgbx{max-width: 100%;
    text-align: center;
    margin:20px;}
img.shure{width:90%}

</style>


    <article class="contents__article">
		<div class="fjk_consider_box">
			<h4>精索静脈瘤手術をご検討中の方へ</h4>
			<div class="fjk_consider_box_inner contents__text">
				<p>ナガオメソッドは、当院でのみ行っている技術です。<br>
「良いものを全て残す手術を行っている」と説明する施設も増えていますが、手術内容が説明と本当に同じ内容かなど注意が必要です。また、「良いものをある程度残す」など中途半端な剥離は、再発リスクを高めます。<br>
執刀する医師のマイクロサージャリーの経験や、これまでの症例数、治療成績なども参考にされると良いでしょう。<br>
一度受けた手術は、後戻りできないため、手術を受けるときは十分に検討されることをお薦めいたします。</p>
			</div>
		</div>
    </article>

      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">「ザ・ドクター」にて、インタビューをしていただきました。</span>
        </h2>
        <div class="youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/k8cCM45cMkA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        <h2 class="contents__heading">
          <span class="contents__heading--text">男性不妊の原因の約40%にのぼる「精索静脈瘤」</span>
        </h2>
        <div class="aboutMaleInfertility">
          <p class="contents__text">男性不妊の主な原因は精巣機能低下により総運動精子数が減少することで受精が難しくなることです。<br>精巣機能が低下する理由は多岐にわたりますが、男性不妊症患者全体の約40%に認められるのが「精索静脈瘤」です。<br>精索静脈瘤が認められれば手術により精液所見の顕著な改善が期待できます。<br><br>精索静脈瘤と診断された方や自覚症状がある方は銀座リプロ外科にて日帰り手術ができます。<br>また、まだ精索静脈瘤か不明な方、男性不妊治療の方は検診にて精索静脈瘤の有無を診断します。<br>ご予約の上、ご来院ください。<br><br>当院では、年間800例を超える精索静脈瘤手術を行っております。<br>また、当院で主に執刀する永尾医師はナガオメソッドにより20年以上、精索静脈瘤手術をしており、その手術数は10,000例程度となります。<br><img class="" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/our_surgeons_are_super_micro_surgeons_jp.png" alt="スーパーマイクロサージャン" width="100%" height="auto"><br><a href="/sinryo/varicocele/">精索静脈瘤について詳しくはこちら</a></p>
        </div>
        <h2 class="contents__heading"><span class="contents__heading--text">調査結果によると、約8割の男性が男性不妊の原因を知らない</span></h2>
        <p class="contents__text">
        銀座リプロ外科が全国の24歳～59歳の男女1,055名を対象に実施（男性53.0％、女性47.0％）した調査によると、不妊の約半分が男性側に原因があることを知っていました。<br>しかし、男性不妊の原因である「精索静脈瘤」「精路閉塞」「下垂体ホルモン低下」の3つの病気について、79.9%の人が「知らない」と回答しました。<br>つまり、男性の約8割が、男性不妊の原因を知らないということです。<br>不妊治療を開始する際には、女性だけでなく男性側にも原因があるということを認識し、かならず男性側も検査を受け、なるべく短い期間で不妊治療を終えられるようにしましょう。<br></p>
       <ul style="display: flex; justify-content: center;">
          <li style="list-style: none;">
           <img class="top-right" width="100%" height="auto" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/lnvestigation_result01.png" alt="調査結果1">
          </li>
          <li style="list-style: none;">
           <img class="top-left" width="100%" height="auto" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/Investigation_result02.png" alt="調査結果2">
          </li>
        </ul>
        
        <div class="aboutMaleInfertility">
          <p class="contents__text">
          <a href="https://ginzarepro.jp/column/male-infertility-cause/">調査結果について詳しくはこちら</a>
          </p>
        </div>
        
        <h2 class="contents__heading">
            <span class="contents__heading--text">治療できる男性不妊原因の早期発見・確実な治療が女性の負担を軽減します</span>
        </h2>
        <img class="top-right" width="100%" height="auto" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/treatable_male_infertility_causes.png" alt="男性不妊に対する検査・治療に関する調査研究
">

      </article>
      
    <article class="contents__article">
        <h2 class="contents__heading">
            <span class="contents__heading--text">妊娠された方へ</span>
        </h2>
        <div class="contents__text">
            <p>当院では自然妊娠された方にプレゼントをお送りしています。<br>
            ※誠に申し訳ございませんが、妊娠される方が多いため、現在は自然妊娠された方のみとさせていただいております。</p>
        </div>
    </article>

      <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">診療・手術一覧</span>
        </h2>
        <?php get_template_part('includes/sinryo-menu'); //診療メニュー ?>
      </article>
      
    <section class="about">
      <div class="about--inner">
      <!--<h2 class="about__heading">当院のポリシー</h2>-->
        <div class="policy">
          <!--<p class="policy__text">
            日帰り顕微鏡下精索静脈瘤手術（ナガオメソッド・自由診療）などの提供を、できるだけお待たせしないことが当院の方針です。<br>
            そのため費用はかかりますが、土日祝日夜間、遠方の方は遠隔診療で医療情報が十分得られれば即日手術も対応しています。<br>
        ※<a href="/lp/" target="_blank">精索静脈瘤手術の内容についてはこちらよりご確認</a>ください。
          </p>-->
          <ul class="policy__link">
            <li class="policy__link__item--color">
              <p class="policy__link__item__heading">精液検査をご希望の方へ</p>
              <p class="policy__link__item__text">
                精索静脈瘤があれば、精子の質が低下します。当院は高い専門性と技術を必要とする、精索静脈瘤検診および日帰り顕微鏡下精索静脈瘤低位結紮術・ナガオメソッドを行っているため、一般的な検査は、東邦大学大森病院をはじめ提携医療機関をご紹介させていただいております。
              </p>
            </li>
            <li class="policy__link__item">
              <p class="policy__link__item__heading">患者様へのお願い</p>
              <p class="policy__link__item__text">
          海外や国内の医師が、医療水準の向上のために当院で手術見学をする場合があります。<br>ご理解ご協力いただけますようお願い申し上げます。<br>また、ご協力いただけない場合は、事前にお申し出ください。
              </p>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <div class="map">
      <iframe class="map__iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.1535248175046!2d139.76586911525862!3d35.673221580196135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188be3fea240d3%3A0xe0a00c9bc5230399!2z6YqA5bqn44Oq44OX44Ot5aSW56eR772c55S35oCn5bCC6ZaA5LiN5aaK44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1543928789058"
        frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="access-link">
      <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセスの詳細はこちら</a>
    </div>
    </section>
    <section class="linkArea">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
    </section>
  </div>

<?php get_footer(); ?>
<?php endif; ?>