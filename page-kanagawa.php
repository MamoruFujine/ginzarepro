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
  background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/pc_ginzarepro_fv2.jpg) no-repeat bottom left;
  height: 710px !important;
  background-size: cover;
}
@media screen and (min-width: 1201px){
  .mainVis__contact{
    z-index: 9;
  }
  .mainVis{
    position: relative;
    background-color: #fcf8f3;
  }
  .mainVis:before,
  .mainVis:after{
    content: '';
    position: absolute;
    left: 0;
  }
  .mainVis:before{
    width: 100%;
    height: 100%;
    top: 0;
    background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_bg.png) repeat-y;
    background-size: 100% auto;
    z-index: 1;
  }
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
  color: #fff;
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
  .mainVis:before{
    width: 50%;
    height: 100%;
    top: 0;
    background: url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/mainVis_FV_pc_bg-l.png) repeat-x;
    background-size: auto 100%;
    z-index: 1;
  }
}
@media screen and (min-width: 769px) and (max-width: 1200px){
  .mainVis-img{/*0712*/
    background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/pc_ginzarepro_fv.jpg) no-repeat top left;
    height: 62vw !important;
    background-size: 100% auto;
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
    margin-top:171px!important;
    background:url(<?php echo esc_url( get_template_directory_uri() ); ?>/img/sp_ginzarepro_fv2.jpg) no-repeat 50% 100%;
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
      padding: 60px 25px 30px 2.5%;
  }
}

.infertility_box {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.infertility_box dt {
    background-color: #d4af37;
    color: white;
    padding: 15px;
    font-size: 1.2em;
    font-weight: bold;
}

.infertility_box dd {
    margin: 0;
    padding: 20px;
    background-color: #f4e9d2;
}

.flex-box {
    display: flex;
    gap: 20px;
}

.flex-box figure {
    flex: 1;
    margin: 0;
    text-align: center;
}

.flex-box figure img {
    max-width: 100%;
    height: auto;
}

.flex-box .box {
    flex: 1;
}

.flex-box .box p {
    margin-top: 0;
    color: #333;
}

.btn {
    margin-top: 15px;
}

.btn a {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
}

.btn-01 a {
    background-color: #d4af37;
    color: white;
}

.btn-02 a {
    background-color: transparent;
    color: #d4af37;
    border: 1px solid #d4af37;
}

@media (max-width: 768px) {
    .flex-box {
        flex-direction: column;
    }
.img{width:100%!important;}

}
<html #wpadminbar{display: none;}
</style>
  <div class="page-wrap link-wrap ink">
    <section class="mainVis">
      <h2 class="mainVis__text">
        <span class="mainVis__text__header">
        </span>
        <span class="mainVis__text__title">
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
   
    <section class="contents">
      
      <article class="contents__article" style="margin-bottom:40px!important">
        <h2 class="contents__heading">
          <span class="contents__heading--text">神奈川県内にお住まいの方、こんなことでお困りではありませんか？</span>
        </h2>
        <div class="checkList large">
          <ul class="checkList__list">
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text" style="pading:20px 30px !important">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                神奈川県内や横浜市内に精索静脈瘤手術ができるクリニックがない
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                精索静脈瘤を日帰りで手術してもらえる病院を探している<br>
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                精液検査の結果、総運動精子数が非常に低いと診断された
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
                手術を受けたいが都合により入院での手術が難しい
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                奥様や同僚など周囲に知られずに手術を受けたい
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/checkList__list.png" alt="">
                東京方面で仕事帰りや合間に受診・検査をできる病院を探している
              </p>
            </li>
          </ul>
        </div>
      </article>
<article class="contents__article" style="margin-bottom:30px!important">
<div class="contents__text">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
当院には、神奈川県横浜市をはじめ、海老名市や厚木市、川崎市、相模原市、藤沢市、横須賀市、茅ヶ崎市、秦野市、平塚市、大和市、小田原市などからご来院いただいております。<br>
<span style="font-weight: bold;">
検査と手術合わせてたった2回の通院で手術が完了するため、遠方から多数の患者さまがご来院されています！</span>
</p>
</div>
</aside>
</div>
</article>
<article class="contents__article" style="margin-bottom:10px!important">
<h2 class="contents__heading">
<span class="contents__heading--text">精索静脈瘤とは？</span>
</h2>
<div class="contents__text">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
精索静脈瘤は、一般男性の15％に認められ、男性不妊症患者の40％以上に認められ、後天性の男性不妊症(二人目不妊)の78％の原因です。WHOの報告では、9,034人の不妊男性の調査で、精液所見が悪い男性の25.6％、精液所見が正常の男性の11.7％で精索静脈瘤が認められました。まずは検査を行い、精液所見の状態や触知により手術適応の判断をいたします。
</p>
</div>
</aside>
</div>
</article>
    <div class="link_box-top" style="margin-top:5px!important;margin-bottom:50px!important;max-with:600px!important">
      <a href="https://ginzarepro.jp/sinryo/varicocele/">精索静脈瘤の症状や検査方法、治療・手術方法を解説 &gt;</a></div>

<article class="contents__article" style="margin-bottom:20px!important">
<div class="contents__text">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
<span style="color:#c39e54;font-weight: bold;">【関連記事】</span><br>
<a href="https://ginzarepro.jp/sinryo/varicocele/" target="_blank" style="color:#4271f0!important">精索静脈瘤の治療｜主な治療方法は手術、薬は補助的に</a></li><br>
<a href="https://ginzarepro.jp/column/varicocele-surgery-medication/#back" target="_blank" style="color:#4271f0!important">無症状でわかりづらい？精索静脈瘤の主な症状</a><br>
<a herf="https://ginzarepro.jp/column/varicocele-self-check-3/#back" target="_blank" style="color:#4271f0!important">【必見】精索静脈瘤のセルフチェック！見た目でわかる？</a><br>
<a href="https://ginzarepro.jp/column/varicocele-leave/" target="_blank" style="color:#4271f0!important">精索静脈瘤を放置するとどうなるの？自然に治ることはあるの？</a>
</p>
</div>
</aside>
</div>
</article>

<article class="contents__article" style="margin-bottom:20px!important">
<dl class="infertility_box">
<dt style="font-size:2.1rem!important">男性不妊・精索静脈瘤にお困りのかたへ</dt>    <dd>        <div class="flex-box">            <figure>
    <img decoding="async" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/img_infertility.jpg?ver=0809" alt="男性不妊の４０％精索静脈瘤が原因"></figure>            <div class="box">                <p>男性不妊の４０％にある精索静脈瘤は、精巣やその上の精索部（精管、血管、神経、リンパ管などを覆う膜）に静脈瘤（じょうみゃくりゅう・静脈の拡張）が認められる症状のことを指します。一般男性の15％に認められ、男性不妊症患者の40％がその疑いであるとされています。</p>                <div class="btn btn-01">                    <a href="https://ginzarepro.jp/column/reproductive-medical-selfcheck/">男性不妊セルフチェックを行う</a>                </div>                <div class="btn btn-02">                    <a href="https://ginzarepro.jp/sinryo/varicocele/">精索静脈瘤手術の詳細はこちら</a>                </div>            </div>        </div>    </dd></dl>
</article>

<article class="contents__article" style="margin-bottom:10px!important">
<h2 class="contents__heading">
<span class="contents__heading--text">精索静脈瘤手術をご検討中の方へ</span>
</h2>
<div class="contents__text">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
ナガオメソッドは、当院でのみ行っている技術です。
「良いものを全て残す手術を行っている」と説明する施設も増えていますが、手術内容が説明と本当に同じ内容かなど注意が必要です。また、「良いものをある程度残す」など中途半端な剥離は、再発リスクを高めます。
執刀する医師のマイクロサージャリーの経験や、これまでの症例数、治療成績なども参考にされると良いでしょう。
一度受けた手術は、後戻りできないため、手術を受けるときは十分に検討されることをお薦めいたします。
<br>

 当院はナガオメソッドと言われる日帰り顕微鏡下精索静脈瘤手術の第1人者である永尾先生による手術を行っております。</p>
</div>
</aside>
</div>
</article>

<div class="link_box-top" style="margin-top:5px!important;margin-bottom:50px!important;">
<a href="https://ginzarepro.jp/sinryo/varicocele/" style="max-width:677px!important">日帰り顕微鏡下精索静脈瘤手術・ナガオメソッドについて詳しくはこちら &gt;</a></div>



<article class="contents__article" style="margin-bottom:10px!important">
<div class="contents__text">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
          <ul class="contents__facility">
            <li class="contents__facility__item">
              <img src="https://ginzarepro.jp/wp-content/uploads/2024/10/region_suit.jpeg" alt="">
            </li>
            <li class="contents__facility__item">
             <img src="https://ginzarepro.jp/wp-content/uploads/2024/10/region_02.png" alt="">
             </li>
          </ul>
</p>
</p></div>
<div style="text-align: center;">
<p style="text-align: cener!iportant;font-size:2.0rem!important">当院は横浜駅から最短34分！　川崎駅から最短26分！<br>
東京への通勤途中や出張帰りにも気軽に受診・手術が可能です。</p>
</div>
</aside>
</div>
</article>
      <article class="contents__article" style="margin-bottom:10px!important">
          <h2 class="contents__heading">
            <span class="contents__heading--text">横浜駅から当院までのルート</span>
          </h2>
          <div class="contents__text">
          <p>
            <div style="text-align: center;">
    <li class="contents__facility__item" style="text-align: center;list-style:none">
            <img src="https://ginzarepro.jp/wp-content/uploads/2024/10/region_yokohama.jpg" style="text-align: center;">
          </li>
          </div>
          <span style="font-weight: bold;">
          【ルート１】</span><br>
          横浜駅　⇒　<上野東京ライン>　新端駅（23分）　⇒　徒歩4分　<銀座線>　浅草行で銀座駅まで（1分）⇒銀座駅から徒歩5分<br>
          <br>
<span style="font-weight: bold;">
          【ルート２】</span><br>
         横浜駅　⇒<横須賀線>　新橋駅（26分）⇒　徒歩5分　<銀座線>　浅草行　銀座駅（1分）⇒　銀座駅から徒歩5分<br>
          <br>
 <span style="font-weight: bold;">
          【ルート３】</span><br>
         横浜駅　⇒<京急本線>　泉岳寺駅（23分）⇒徒歩1分　<浅草線>　成田空港行　東銀座駅（8分）⇒東銀座駅から徒歩6分<br>
        </p></div></article>

 <article class="contents__article" style="margin-bottom:20px!important">
          <h2 class="contents__heading">
            <span class="contents__heading--text">川崎駅から当院までのルート</span>
          </h2>
          <div class="contents__text">
          <p>
           <span style="font-weight: bold;">
          【ルート１】</span><br>
          川崎駅⇒<上野東京ライン>新橋駅（15分）⇒徒歩4分　<銀座線＞浅草行　銀座駅（1分）⇒銀座駅から徒歩5分
<br>
          <br>
<span style="font-weight: bold;">
          【ルート２】</span><br>
         川崎駅　⇒<京浜東北線>　品川駅（14分）⇒徒歩2分　<京急本線>旛日本医大行　旛日本医大行 (2分)　⇒<浅草線>旛日本医大行　（8分）⇒東銀座駅から徒歩6分<br>
        </p>
      </div>



<div class="contents__text" style="margin-top:40px">
<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
          <ul class="contents__facility">
            <li class="contents__facility__item">
              <a href="https://ginzarepro.jp/wp-content/uploads/2024/10/accessmap2.jpg" target="_blank">
              <img src="https://ginzarepro.jp/wp-content/uploads/2024/10/accessmap2.jpg" alt=""></a>
            </li>
            <li class="contents__facility__item">
             <img src="https://ginzarepro.jp/wp-content/uploads/2024/10/gaikan.jpg">
             </li>
          </ul>
</p>
</div>
</aside>
</div>

 <div class="access-link">
      <a href="<?php echo esc_url(home_url('/access/')); ?>">アクセスの詳細はこちら</a>
    </div>

</article>


      <article class="contents__article" style="margin-bottom:20px!important">
        <h2 class="contents__heading"><span class="contents__heading--text">神奈川方面の方からよくお寄せいただくご質問と回答</span></h2>
        <div class="checkList">
          <ul class="checkList__list">
            <li class="checkList__list__item">
              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
                ナガオメソッドは保険適応になりますか？
              </p>
              <p class="checkList__list__item--hide">自費（自由診療）診療なので保険は適応になりません。とても高度な技術を要する手術で、ナガオメソッドによる手術が可能な医師は銀座リプロ外科に所属する数名のみです。術者が限定（スーパーマイクロサージャンであることは必須で、更なる時間をかけトレーニングし、習得できた医師のみ）されることから、自費診療となっています。</p>
            </li>

            <li class="checkList__list__item">
              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
                ナガオメソッドの手術にはどれくらい費用がかかりますか？</p>
              <p class="checkList__list__item--hide">42万円からとなっており、永尾医師の指名には別料金が必要です。</p>
            </li>

            <li class="checkList__list__item">
              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
                ナガオメソッドの手術後は日常生活に制限がありますか？</p>
              <p class="checkList__list__item--hide">シャワーは翌日、軽い運動は1週間後、筋トレなどは2週間後から可能です。不妊治療中の方は、一週間後から性交渉を再開、婦人科治療は2か月後（精子のDNAの改善）からをお薦めします。</p>
            </li>

            <li class="checkList__list__item">
              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
                日帰り顕微鏡下精索静脈瘤低位結紮術・ナガオメソッドは痛くないですか？</p>
              <p class="checkList__list__item--hide">局所麻酔は細い針（皮内針）を使用し、注射の痛みは少しありますが、長時間作用と短時間作用の局所麻酔薬を使用し、7段階局所麻酔法でほとんど痛みはありませんでした。この麻酔方法を確立してから、中学生でも痛がらず日帰り手術を行っています。手術中にスマホで音楽を聴いたり、メールをしている患者さんもいます。手術後はすぐに歩いて帰ることができます。痛み止めの内服程度で術後の痛みもコントロールできます。<br><a href="https://ginzarepro.jp/sinryo/nagao_method/"target="_blank">詳日帰り顕微鏡下精索静脈瘤手術・ナガオメソッドについて詳しくはこちら &gt;</a>
              </p>
            </li>

            <li class="checkList__list__item">
              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
                手術の準備、術後の管理は？</p>
              <p class="checkList__list__item--hide">術前検査として感染症採血を行います。手術前日に陰毛を自分自身で電気シェーバーなどで剃ってきてください。※院内で剃る場合はディスポの電気シェーバーを使用するので別途費用がかかります。
皮膚は、溶ける糸で皮膚の裏側から縫っているので抜糸はりません。手術日は内出血予防にガーゼで傷を圧迫してるので陰部はふいてください。洗髪はよいです。傷に医療用ビニールテープを貼っているので、翌日からシャワーが使用できます。採精は翌日から、性交は1週間後から、入浴・飲酒は傷が完全に乾いてからです。1週間はブリーフをはいて中にタオルを入れて陰嚢がぶらぶらしないようにしてください（内出血予防）。</p>
</li>
</ul>
</div>
</article>

      <article class="contents__article" style="margin-bottom:20px!important">
          <h3 class="contents__heading">
            <span class="contents__heading--text">精索静脈瘤の手術にかかる費用</span>
          </h3>
          <div class="contents__text">
          <p>当院で顕微鏡下低位結紮術・ナガオメソッドを受ける場合の費用をまとめました。<br>
            <br>
外来にお越しいただいたら、まずは10分ほどの診察とエコー検査を行います。初診の際に術前検査、手術予約が可能です。初診当日に日帰りで手術を受けることもできます。<br>


         <div class="table">
            <dl class="table--wrap">
              <dt class="table__title">初診料</dt>
              <dd class="table__description">5,500円（税込）</dd>
              <dt class="table__title">エコー検査</dt>
              <dd class="table__description">5,500円(税込）</dd>
            </dl>
          </div>

<br>
手術前に感染症の検査(B型肝炎・C型肝炎・梅毒・HIV)を受けていただきます。6ヶ月以内に他院で検査をした場合、検査表の原本をご提示いただくことで省略も可能です。<br>
<br>


         <div class="table">
            <dl class="table--wrap">
              <dt class="table__title">顕微鏡下低位結紮術・ナガオメソッド</dt>
              <dd class="table__description">440,000円(税込)～</dd>
              <dt class="table__title">局所麻酔 </dt>
              <dd class="table__description">22,000円(税込)</dd>
            </dl>
          </div>


<br>
土日祝日に手術を行う場合、割増料金として上記費用に加え20,000円(税込)が必要です。<br>
<br>
手術費用は予約完了後、手術前までに指定口座へのお振込みをお願いしております。それ以外の費用(初診料や術前検査の費用)は現金・クレジットカードのご利用が可能です。
</p>
</div>
</article>

<article class="contents__article" style="margin-bottom:60px!important">
 <h2 class="contents__heading">
<span class="contents__heading--text">神奈川県内の提携病院</span>
</h2>
<div class="contents__text">
  <p>主に以下のような病院と医療連携しております。</p><br>

<aside>
<div class="aboutMaleInfertility">
<p class="aboutMaleInfertility__text contents__text">
<ul class="contents__facility">
<li class="contents__facility__item">
<img src="https://ginzarepro.jp/wp-content/uploads/2024/10/kanagawa_syoudai.jpg" alt="">
</li>
<li class="contents__facility__item" style="vertical-align: middle;">
<p><span style="font-weight:bold;">昭和大学藤が丘病院</span></p>
<p>〒227-8501 神奈川県横浜市青葉区藤が丘１丁目３０<br>
 <a href="https://www.showa-u.ac.jp/SUHF/" target="_blank">https://www.showa-u.ac.jp/SUHF/</a></p>
</li>


<li class="contents__facility__item" style="text-align: center;">
<img src="https://ginzarepro.jp/wp-content/uploads/2024/10/kanagawa_yokohanma.jpg" alt="">
</li>
<li class="contents__facility__item">
<p><span style="font-weight:bold;">横浜市立大学病院</span></p>
<p>〒236-0004 神奈川県横浜市金沢区福浦３丁目９<br>
 <a href="https://www.yokohama-cu.ac.jp/fukuhp/index.html" target="_blank">https://www.yokohama-cu.ac.jp/fukuhp/index.html"</a></p></li>


<li class="contents__facility__item">
<img src="https://ginzarepro.jp/wp-content/uploads/2024/10/kanagawa_yokohamadai.jpg" alt="">
 </li>
<li class="contents__facility__item">
<p><span style="font-weight:bold;">横浜市立大学附属市民総合医療センター</span></p>
<p>〒232-0024 神奈川県横浜市南区浦舟町４丁目５７<br>
 <a href="https://www.yokohama-cu.ac.jp/urahp/index.html" target="_blank">https://www.yokohama-cu.ac.jp/urahp/index.html</a></p></li>

<li class="contents__facility__item">
<img src="https://ginzarepro.jp/wp-content/uploads/2024/10/kanagawa_kitasato.jpg" alt=""></li>
<li class="contents__facility__item">
<p><span style="font-weight:bold;">北里大学病院</span></p><br>
<p>〒252-0375 神奈川県相模原市南区北里１丁目１５−１<br>
<a href="https://www.kitasato-u.ac.jp/khp/" target="_blank">https://www.kitasato-u.ac.jp/khp/</a></p></li>

</ul>
</p></div></aside>




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