<?php
/*
スターフォーマーページ
Template Name: case
*/
?>
<?php get_header(); ?>
<style>
.clearfix::after {
    content: "";
    display: block;
    clear: both;
}
#starformer p{
	font-size: 1.6rem;
}
#starformer .contents__text p a{
	max-width: 100%;
}
#starformer figure{
	position: relative;
	text-align: center;
}
#starformer figure a{
	display: block;
	width: 100%;
	height: 100%;
	position: relative;
}
#starformer figure a:after {
    content: "READ MORE >>";
    position: absolute;
    right: -10px;
    bottom: -10px;
    font-size: 1.3rem;
    color: #fff;
    background: #b49d1a;
    display: inline-block;
    padding: .7em 1em;
    border-radius: 5px;
    border: 1px solid #fff;
    text-align: center;
    transition: all .4s;
}
#starformer figure a:hover:after {
    color: #b49d1a;
    background: #fff;
}
@media screen and (max-width: 768px) {
	#starformer figure a:after {
	    font-size: 1.1rem;
	    right: 0;
	    bottom: 0;
	    border-radius: 0;
	    width: 100%;
	    box-sizing: border-box;
	    border: 0;
	    padding: 1em;
	}
}
#starformer .figure_txt-box.box_even,
#starformer .figure_txt-box.box_odd{
	margin: 0 auto 5%;
}
#starformer .figure_txt-box figure{
	width: 45%;
	margin: 0 2.5% 0 0;
	float: left;
}
#starformer .figure_txt-box.box_even figure,
#starformer .figure_txt-box.box_odd figure{
	width: 35%;
}
#starformer .figure_txt-box.box_odd figure{
 	float: right;
 	margin:0 0 0 2.5%;
}
#starformer .figure_txt-box .contents__text{
	width: 52%;
	float: right;
}
#starformer .figure_txt-box.box_odd .contents__text,
#starformer .figure_txt-box.box_even .contents__text{
	width: 62%;
}
#starformer .figure_txt-box.box_odd .contents__text{
 	float: left;
}
@media screen and (max-width: 768px) {
	#starformer .figure_txt-box figure,
	#starformer .figure_txt-box .contents__text,
	#starformer .figure_txt-box.box_odd figure,
	#starformer .figure_txt-box.box_odd .contents__text,
	#starformer .figure_txt-box.box_even figure,
	#starformer .figure_txt-box.box_even .contents__text {
    	width: 100%;
    	float: none;
    	margin-bottom: 5%;
    }
}
#starformer .figure_txt-box .contents__text dl dt{
	font-weight: bold;
	font-size: 1.8rem;
}
#starformer .figure_txt-box .contents__text dl dd{
	margin-bottom: 1.5em;
}
#starformer .figure_txt-box .contents__text li{
	margin-bottom: 1.5em;
}
#starformer figure img{
	max-width: 100%;
	height: auto;
}
#starformer .img-80_center{
    text-align: center;
    margin: 2.5% auto 0;
    width: 80%;
}
#starformer .img-80_center img{
  width: 100%;
  height: auto;
}
@media screen and (max-width: 768px) {
	#starformer .img-80_center {
	    text-align: center;
	    margin: 5% auto 0;
	    width: 100%;
	}
}
#starformer .thumb_circle{
	overflow: hidden;
	width: 200px;
	height: 200px;
	border-radius: 100%;
	margin:0 auto 5%;
	display: block;
}
@media screen and (max-width: 1024px) {
	#starformer .thumb_circle{
		width: 18vw;
		height: 18vw;
	}
}
@media screen and (max-width: 768px) {
	#starformer .thumb_circle{
		width: 48vw;
		height: 48vw;
	}
}
#starformer .thumb_circle img{
	width: 100%;
	height: 100%;
	object-fit: cover;
	border-radius: 100%;
}
#starformer .online__illustrated__item--text {
    font-weight: normal;
    line-height: 1.6;
    font-size: 1.8rem;
    margin: 0 auto 1em;
    color: #b49d1a;
    font-weight: bold;
    border-bottom: 1px solid #ccc;
    padding: 0 0 1em;
}
#starformer .online__illustrated__item--text span{
	font-weight: bold;
	display: block;
}

@media screen and (max-width: 768px) {
	#starformer .online__illustrated__item--img{
		width: 100%;
		margin:0 auto 5%;
	}
	#starformer .online__illustrated__item--text,
	#starformer .online__illustrated__item--text span{
	    font-size: 1.7rem;
	}
}
#starformer .contents__heading_box,
#starformer .contents__heading_box span{
    font-weight: bold;
    line-height: 1.4;
}
#starformer .contents__heading_box{
    font-size: 1.6rem;
    margin-bottom: 25px;
    padding: 0 0 0 10px;
    border-left: solid 4px #ddc654;
}
#starformer .contents__heading_box span{
    font-size: 1.8rem;
	margin-bottom: .5em;
	display: block;
}
#starformer .online__illustrated__item-circle{
    padding: 1.5em 1em;
    font-size: 1.6rem;
    line-height: 2;
    text-align: center;
    border: 1px solid #E2E5ED;
    background: #fff;
    border-radius: 5px;
}
#starformer .img-80_center {
    text-align: center;
    margin: 5% auto 0;
    width: 100%;
}
</style>
<div id="starformer" class="page-wrap">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
            <h1 class="lowerHeader__title">
                <span class="lowerHeader__title--en">MEDICAL CONTENT</span>
                <p class="lowerHeader__title--jp">高強度のテスラ磁気刺激治療（スターフォーマー<!-- &trade; -->&trade;）</p>
            </h1>
        </div>
    </section>

    <div class="contents__thumbnail">
        <img width="1060" height="707" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave.jpg" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="スターフォーマー・インティマウェーブ">
    </div>
    <div class="contents__article">
	    <div class="contents__text">
	    	<p>スターフォーマー&trade;は、装置に座るだけで筋肉・神経・血流に効果的に働きかけ、高強度のテスラ磁気刺激（HITS&trade;）治療を行う次世代型の治療機器です。</p>
	    	<p>着衣のまま30分間座るだけで、自分ではアプローチしにくい骨盤底筋や骨盤神経などに働きかけ、尿失禁や骨盤臓器脱などの症状を改善できます。</p>
	    	<p>安全性が高く痛みのない治療なので継続しやすく、専門知識がない方でもインナーマッスルを鍛えられます。加齢で衰えた筋力によるさまざまな症状の改善に期待でき、将来性のある治療機器です。</p>
	    </div>
	</div>

    <!-- //こんな方におすすめ -->
	<article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">こんな方におすすめ</span>
        </h2>
        <div class="checkList large">
          <ul class="checkList__list">
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                尿失禁でお悩みの方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                骨盤底筋の強化をしたい方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                根治的前立腺摘出術後のリハビリテーションが必要な方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                便失禁でお悩みの方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                慢性前立腺炎に罹患している方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                勃起不全、EDでお悩みの方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                微小循環の改善を目指す方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                リンパの流れを促進したい方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                腰痛でお悩みの方
              </p>
            </li>
            <li class="checkList__list__item--2col">
              <p class="checkList__list__item--text">
                <img class="checkList__list__item--img" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/checkList__list.png" alt="">
                フレイル対策をしたい方
              </p>
            </li>
          </ul>
        </div>
    </article>

    <!-- //スターフォーマー・インティマウェーブが効果的な症状 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;が効果的な症状</span>
       </h2>
       <div class="online">
          <ul class="online__illustrated">
            <li class="online__illustrated__item">
                <figure><a href="https://ginzarepro.jp/incontinence/"><img class="online__illustrated__item--img" src="https://ginzarepro.jp/wp-content/uploads/2022/07/AdobeStock_286152481_resize-768x511.jpg" alt="尿失禁"></a></figure>
                <h3 class="online__illustrated__item--text">尿失禁</h3>
                <div class="contents__text">
                  <p>尿失禁とは、自分の意志と関係なく尿が漏れてしまう症状です。原因や症状によって「腹圧性尿失禁」「切迫性尿失禁」などに大別されます。</p>
                  <p>腹圧性尿失禁は、骨盤底筋を鍛えることで尿道括約筋が強くなり、症状の改善が期待できます。<br>切迫性尿失禁の治療は、抗コリン薬などを用いた薬物治療が基本です。骨盤神経を鍛えることで尿意のコントロールが可能となり、将来的に服薬を中止できるようになります。</p>
                  <p>尿失禁は、すぐに命に関わる疾患ではないですが、生活の質を著しく低下させます。また、羞恥心で治療をためらうことがあり、症状に悩んでいる方が多い疾患です。</p>
                </div>
            </li>
            <li class="online__illustrated__item">
              <figure><a href="https://ginzarepro.jp/prolapse/"><img class="online__illustrated__item--img" src="https://nkmrfmts.xsrv.jp/ginzarepro_test/wp-content/uploads/2023/08/240_F_621557077_YZ1qzNKZWL9jscw8ZS9NeYVNuZ7Hr91u.jpg" alt="骨盤臓器脱"></a></figure>
              <h3 class="online__illustrated__item--text">骨盤臓器脱</h3>
              <div class="contents__text">
                  <p>骨盤臓器脱とは、本来であれば骨盤内に保持されている子宮・膀胱・直腸などの臓器が下垂し、膣から体外へ脱出してしまう疾患です。成人女性の３人に１人は悩んでいると言われています。</p>
                  <p>骨盤臓器脱の原因は、出産などで骨盤底筋が損傷し、臓器を支える力が弱くなってしまうことです。膣に何かが挟まっているように感じるほか、尿漏れや便秘など排尿障害などの原因にもなり、通常の日常生活を送ることが困難になってしまいます。</p>
                  <p>骨盤臓器脱の治療には、骨盤底筋運動やウォーキングなどで症状緩和を目指す保存的治療法、ペッサリーを膣内に挿入する方法、外科手術による治療などがあります。</p>
                </div>
            </li>
            <li class="online__illustrated__item">
              	<figure><a href="https://ginzarepro.jp/column/ed-cause-improvement/"><img class="online__illustrated__item--img" src="https://ginzarepro.jp/wp-content/uploads/2023/05/male-fertility-treatment.jpg" alt="ED"></a></figure>
              	<h3 class="online__illustrated__item--text">ED</h3>
              	<div class="contents__text">
              		<p>ED（勃起障害）とは、勃起機能が低下し、十分な勃起に達しないため満足な性交ができない、または勃起を維持できない状態が繰り返し起こる症状です。</p>
              		<p>EDの原因はさまざまで、原因にあった適切な方法を選択することが重要です。<br>動脈硬化や神経障害が原因の「器質性ED」、精神的なストレスが原因の「心因性ED」、そのどちらもが複雑に関係しあっている「混合型ED」、特定の薬剤が原因の「薬剤性ED」に大別されます。</p>
              		<p>器質性EDであれば、原因の１つである血行不良を磁気刺激で治療することにより、症状の改善が期待できます。</p>
              	</div>
            </li>
          </ul>
        </div>
    </article>

    <!-- //スターフォーマーとは？ -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマーとは？</span>
       	</h2>
       	<div class="contents__text">
			<p>スターフォーマー&trade;は、医療用レーザー機器の世界的なシェアを誇るFOTONA社が開発した磁気刺激治療機器です。次世代HITS&trade;による高強度テスラ磁気刺激により、服を着たまま30分間座るだけで、5万回の筋肉運動に相当する効果が期待できます。</p>

			<p>自分ではアプローチしにくい骨盤底筋を鍛え、骨盤神経を整えることで、男女問わずデリケートなお悩みの症状改善につながります。</p>

			<p>これまで尿失禁や便失禁などは、骨盤底筋を鍛える方法や電気治療、薬物治療、手術が主な治療でした。</p>

			<p>その中でも電気治療は、磁気刺激と同様に筋収縮を促すことができます。一方で、電気の強度をあげると痛みがあり、重度の患者様には効果が低い上に体への負担が大きい治療方法なのです。</p>

			<p>スターフォーマー&trade;による治療は、電気治療に比べるとより効果的で、低侵襲治療のため痛みがありません。心地よいマッサージを受けているような治療で継続しやすいでしょう。尿失禁や骨盤臓器脱など骨盤底筋が弱くなって起こる疾患や、慢性的腰痛、EDなどさまざまな疾患の症状改善が期待できます。</p>
		</div>

    </article>

    <!-- //スターフォーマー・インティマウェーブとは？ -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;とは？</span>
       	</h2>
       	<div class="contents__text">
       		<p>スターフォーマー&trade;には２つの治療モードがあります。そのうちの１つであるインティマウェーブ治療（磁気刺激治療）は、磁気刺激で骨盤底筋や神経機能の調整を行うことができる安全で低侵襲な治療方法です。</p>

			<p>これまでも磁気による治療法はありましたが、強度が弱く効果があまり感じられませんでした。</p>

			<p>スターフォーマー・インティマウェーブ&trade;は、高強度テスラ磁気刺激（HITS&trade;＝high intensity Tesla magnetic Stimulation）テクノロジーを使った次世代型の治療機器です。</p>

			<p>椅子型の装置には、座面と背中に２つの電磁コイルが内蔵されており、骨盤と腰の両方から筋肉・神経にアプローチします。刺激の強度は調整可能で、不快な刺激や痛みがないので継続しやすいでしょう。</p>

			<p>また、高強度で筋肉組織に効果的にアプローチでき、自分では鍛えることが難しい骨盤底筋の筋収縮を促すことでインナーマッスルを強化します。筋肉組織だけではなく末梢神経系を刺激することもできるため、神経の変調が原因で起こるさまざまな疾患の症状改善に効果的です。</p>

			<p>尿失禁の治療においては、膀胱の不随収縮を抑制する効果がある神経変調療法（ニューロモデュレーション）を行います。神経変調療法は、電気または磁気刺激で末梢神経を刺激し、その神経の支配下である臓器の機能調整を図る治療方法です。</p>

			<p>スターフォーマー・インティマウェーブ&trade;のHITSで陰部神経や仙骨神経を刺激することで、切迫性尿失禁の症状改善に効果が期待できます。</p>
		</div>
		<p class="img-80_center"><img class="aligncenter size-full wp-image-5850" src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_02.jpg" alt="スターフォーマー・インティマウェーブとは？"></p>
    </article>

    <!-- //スターフォーマー・インティマウェーブのメリット -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;のメリット</span>
       	</h2>
       	<div class="online">
        	<ul class="online__illustrated">
	            <li class="online__illustrated__item online__illustrated__item-circle">
	              <figure class="thumb_circle"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_03.jpg" alt="メリット１.低侵襲で痛みがない"></figure>
	              <h3 class="online__illustrated__item--text"><span>メリット１</span>低侵襲で痛みがない</h3>
	              <div class="contents__text">
	              	<p>内服薬や注射、手術など身体に負担のかかる方法とは違い、服を着たまま座るだけでインナーマッスルを鍛えることができ、安全で低侵襲な治療方法です。</p>
	              	<p>また、これまでの電気治療方法のように強度を上げると痛みがあるわけではなく、心地よいマッサージのような治療なので続けやすいのが特徴です。</p>
	              </div>
	            </li>
	            <li class="online__illustrated__item online__illustrated__item-circle">
	              <figure class="thumb_circle"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_04.jpg" alt="メリット２.脱衣せず椅子に座るだけで治療が可能"></figure>
	              <h3 class="online__illustrated__item--text"><span>メリット２</span>脱衣せず椅子に座るだけで治療が可能</h3>
	              <div class="contents__text">
	              	<p>電気治療では、脱衣し体に直接電極を取り付けるなどの準備が必要でした。スターフォーマー・インティマウェーブ&trade;は着衣のまま座るだけなので、手軽に治療を受けやすく治療中の羞恥心にも配慮できます。</p>
	              </div>
	            </li>
	            <li class="online__illustrated__item online__illustrated__item-circle">
	              <figure class="thumb_circle"><img src="https://ginzarepro.jp/wp-content/uploads/2022/08/AdobeStock_515522098_resize.jpg" alt="メリット３.無理なく継続しやすい"></figure>
	              <h3 class="online__illustrated__item--text"><span>メリット３</span>無理なく継続しやすい</h3>
	              <div class="contents__text">
	              	<p>尿失禁や骨盤臓器脱の症状改善のための骨盤底筋訓練は、「やり方を忘れる」「効いているのかわからない」「時間がない」等の理由で、自分で継続して行うことが困難な方法でした。</p>
	              	<p>スターフォーマー・インティマウェーブ&trade;は、30分間座るだけで治療できるため、専門知識がなくても続けやすく効果的です。</p>
	              </div>
	            </li>
        	</ul>
        </div>
    </article>

    <!-- //スターフォーマー・インティマウェーブのデメリット・リスク -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;のデメリット・リスク</span>
       	</h2>
       	<div class="contents__text">
	       	<p>まれに下記のような副反応が起こることが報告されています。いずれも一過性で、短期間で回復します。</p>
	       	<ul>
	       		<li>・治療中、治療完了後の不快感</li>
				<li>・筋肉痛</li>
				<li>・倦怠感</li>
				<li>・筋肉の炎症</li>
				<li>・知覚異常</li>
				<li>・生理不順</li>
				<li>・腸症状</li>
			</ul>
		</div>
    </article>

    <!-- //スターフォーマー・インティマウェーブ治療に期待できる効果 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;治療に期待できる効果</span>
       	</h2>
       	<div class="figure_txt-box clearfix">
			    <figure><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_05.jpg?ver=02" alt="スターフォーマー・インティマウェーブ治療に期待できる効果"></figure>
	       	<div class="contents__text">
	       		<dl>
	       			<dt>効果1　筋肉の強化</dt>
					<dd>骨盤底筋を鍛えることで、尿失禁、骨盤臓器脱などデリケートなお悩みの予防・改善が期待できます。</dd>

					<dt>効果2　神経機能の調整</dt>
					<dd>骨盤神経に働きかける神経変調治療で、切迫性尿失禁の治療に効果的です。</dd>

					<dt>効果3　血流の改善</dt>
					<dd>磁気刺激により血流を改善し、過活動膀胱や低活動膀胱の治療、また血行不良によるEDの改善にも効果が期待できます。</dd>
				</dl>
	       </div>
       </div>
    </article>

    <!-- //スターフォーマー・インティマウェーブ治療のポイント -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;治療のポイント</span>
       	</h2>
       	<div class="figure_txt-box box_odd clearfix">
       		<figure><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_06.jpg?ver=02" alt=""></figure>
	       	<div class="contents__text">
	       		<h3 class="contents__heading_box"><span>ポイント1</span>高強度の磁気刺激により中枢及び末端神経系にアプローチ</h3>
	       		<p>スターフォーマー&trade;から発する磁気は、衣服、皮膚、骨を無害に通過し、電気治療器など他の方法ではアクセスできない組織に直接作用します。</p>
	       	</div>
	    </div>
       	<div class="figure_txt-box box_even clearfix">
       		<figure><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_02.jpg" alt="ポイント2 着衣のまま座るだけ"></figure>
	       	<div class="contents__text">
	       		<h3 class="contents__heading_box"><span>ポイント2</span>着衣のまま座るだけ</h3>
	       		<p>施術による体への大きな副反応がなく、着衣のまま座るだけなので簡単です。強度を上げても痛みがなく、マッサージのような心地の良い治療方法です。</p>
	       	</div>
	    </div>
       	<div class="figure_txt-box box_odd clearfix">
       		<figure><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_07.jpg" alt=""></figure>
	       	<div class="contents__text">
	       		<h3 class="contents__heading_box"><span>ポイント3</span>位置調整が可能な発信機</h3>
	       		<p>これまでの磁気治療機とは違い、磁気が発信される位置を調整できるため、ピンポイントで狙った部位へ効果的に磁気刺激を届けることができます。</p>
	       	</div>
	    </div>
    </article>

    <!-- //禁忌事項 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">禁忌事項</span>
       	</h2>
       	<div class="contents__text">
       		<ul>
       			<li>・強磁性金属のインプラント</li>
       			<li>・心臓ペースメーカー</li>
       			<li>・妊娠中</li>
       			<li>・がん</li>
       			<li>・子宮内膜症</li>
       			<li>・重度の不整脈</li>
       			<li>・活動性肺疾患</li>
       			<li>・投薬ポンプ</li>
       			<li>・埋め込み式の補聴器</li>
       			<li>・施術部に刺青のある方</li>
       		</ul>
       	</div>
    </article>

    <!-- //料金 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">料金</span>
       	</h2>
		<dl class="table--wrap">
			<dt class="table__title">一回</dt>
			<dd class="table__description">11,000円</dd>
			<dt class="table__title">診断書・各種証明書等発行</dt>
			<dd class="table__description">8,800円</dd>
			<dt class="table__title">英文での診断書・<br>各種証明書等発行</dt>
			<dd class="table__description">1ページにつき<br>17,600円</dd>
		</dl>
<p style="text-align:right;">(税込)</p>
    </article>

    <!-- //施術の流れ -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">施術の流れ</span>
       	</h2>
       	<div class="figure_txt-box clearfix">
       		<figure><img src="https://ginzarepro.jp/wp-content/uploads/2022/11/male-check.jpg" alt="施術の流れ"></figure>
	       	<div class="contents__text">
	       		<ol>
	       			<li>
	       				<h3 class="contents__heading_box">1.ご予約</h3>
	       				<p>銀座リプロ外科は完全予約制となっております。下記よりご予約の上ご来院ください。</p>
	       				<p><a class="contents__item__permalink" href="https://ginzarepro.jp/contact/appointment-first/" target="_blank">銀座リプロ外科　予約フォーム</a></p>
	       			</li>
	       			<li>
	       				<h3 class="contents__heading_box">2.施術</h3>
	       				<p>施術は、事前準備が必要なく、着衣のまま30分間治療器に座るだけで完了します。</p>
	       			</li>
	       			<li>
	       				<h3 class="contents__heading_box">3.完了</h3>
	       				<p>施術完了後はそのままお帰りいただけます。</p>
	       			</li>
	       			<li>
	       				<h3 class="contents__heading_box">4.１クールの施術を継続</h3>
	       				<p>1日おきまたは1週間に2回の間隔で、合計8回を1クールとして治療を行います。その後は症状を見ながら、定期的に施術を受けると効果的です。</p>
	       			</li>
	       		</ol>
	       	</div>
       	</div>
    </article>

    <!-- //スターフォーマー・インティマウェーブと併用したい医療機器 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">スターフォーマー・インティマウェーブ&trade;と併用したい医療機器</span>
       	</h2>
        <div class="figure_txt-box box_even clearfix">
          <figure><a href="https://urogyne.jp/femicushion/" target="_blank"><img src="https://ginzarepro.jp/wp-content/themes/ginzarepro_0.1/img/starformer/img_intimawave_08.jpg" alt="スターフォーマー・インティマウェーブと併用したい医療機器"></a></figure>
       	  <div class="contents__text">
  		      <h3 class="contents__heading_box">フェミクッション</h3>
         		<p>フェミクッションは、骨盤臓器脱の治療・予防を目的として開発された医療機器です。独自に開発された下着のようなデザインのサポーターに特殊なクッションとホルダーを装着し、膣口で臓器を支えます。</p>
         		<p>ペッサリーのように体の中に異物を入れることなく、臓器を支え骨盤内に保持することができ、体に負担の少ないケア方法です。</p>
         		<p>フェミクッションを使用することで、日常生活が無理なく送れるようになるほか、骨盤底筋を鍛えるためのウォーキングなども行うことができ、症状を緩和する訓練をすることができます。</p>
         		<p>ペッサリーのように洗浄のための定期的な通院などの必要がなく、ご自身で洗って衛生的に使用することができます。</p>
       	  </div>
        </div>
        
        <div class="figure_txt-box box_even clearfix">
          <figure><a href="https://urogyne.jp/other/" target="_blank"><img src="https://ginzarepro.jp/wp-content/uploads/2023/11/x_hold-1.jpeg" alt="Xホールド"></a></figure>
       	  <div class="contents__text">
  		      <h3 class="contents__heading_box">Xホールド</h3>
         		<p>Xホールドは、下着の上から着用する医療機器で、腰ベルト、股下ベルト、クッションの3つの構成品があります。男性が前立腺がん手術などで、前立腺を全摘出した際に起こる尿漏れをコントロールでき、尿道括約筋の収縮を補助します。</p>
         		<p>会陰部をシリコン製の柔らかいクッションで圧迫し、股下ベルトや腰ベルトで固定します。ベルトはメッシュ素材を使用しているため、夏場でもむれを抑えることができ安心です。</p>
       	  </div>
        </div>
	</article>

    <!-- //よくある質問 -->
    <article class="contents__article">
        <h2 class="contents__heading">
          <span class="contents__heading--text">よくある質問</span>
        </h2>
        <div class="checkList">
         	<ul class="checkList__list">
	            <li class="checkList__list__item">
	              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
	                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
	                男女問わず治療を受けることができますか？</p>
	              <p class="checkList__list__item--hide">スターフォーマー・インティマウェーブ&trade;は、男女問わずデリケートな症状を予防・改善することができます。年齢も性別も関係なく治療を受けられます。</p>
	            </li>
	            <li class="checkList__list__item">
	              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
	                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
	                ダウンタイムはありますか？
	              </p>
	              <p class="checkList__list__item--hide">施術による大きな副反応はなく、ダウンタイムもありません。着衣のまま座るだけの治療なので、30分間の治療後はそのまますぐに帰宅できます。</p>
	            </li>
	            <li class="checkList__list__item">
	              <p class="checkList__list__item--question" data-toggle="false"><img class=" checkList__list__item--img"
	                  src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/questionList__list.png" alt="">
	                １回の治療で効果がありますか？
	              </p>
	              <p class="checkList__list__item--hide">スターフォーマー・インティマウェーブ&trade;は、１日おきまたは１週間に２回の間隔で計８回を１クールとして治療を行うことが推奨されています。その後は、症状に応じて月１回程度の治療を継続して受けることで、症状改善を持続できます。</p>
	            </li>
			</ul>
        </div>

      </article>
</div><!-- /.page-wrap -->
<?php get_footer(); ?>
  