<?php
/*
Template Name: visitappoint
*/
?>

<?php get_header(); ?>
<div class="page-wrap<?php if(is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ echo ' contact-wrap';} ?>">
    <section class="lowerHeader">
        <?php breadcrumb(); ?>
        <div class="lowerHeader--wrap">
          <h1 class="lowerHeader__title">
            
<?php if(is_page(array('appointment-first','appointment-first_lp'))): ?>
	<span class="lowerHeader__title--en">FIRST APPOINTMENT</span>
            <span class="lowerHeader__title--jp">初診のご予約</span>
<?php elseif(is_page( 'appointment-revisit' )): ?>
	<span class="lowerHeader__title--en">REVISIT APPOINTMENT</span>
            <span class="lowerHeader__title--jp">再診のご予約</span>

<?php elseif(is_page( array('appointment-first-confirm','appointment-first-confirm_lp'))): ?>
            <span class="lowerHeader__title--jp">初診のご予約　確認画面</span>
<?php elseif(is_page( 'appointment-revisit-confirm' )): ?>
            <span class="lowerHeader__title--jp">再診のご予約　確認画面</span>
<?php elseif(is_page( 'contact-confirm-lps' )): ?>
            <span class="lowerHeader__title--jp">初診のご予約　確認画面</span>
<?php endif; ?>
          </h1>

<?php if(is_page(array('appointment-first','appointment-first_lp'))): ?>
  <p class="lowerHeader__description">初診の方はこちらからお申し込みください。<br>
その他の方は<a href="<?php echo esc_url(home_url()); ?>/contact/appointment-revisit/" target="_blank">&gt;再診予約</a>・<a href="<?php echo esc_url(home_url()); ?>/contact/" target="_blank">&gt;お問い合わせ</a> からご連絡ください。</p>
          <!--<p class="lowerHeader__description">
初診の方はこちらのフォームよりお申し込みください。<br>
再診をご希望の方は<a href="/contact/appointment-revisit/" target="_blank">「再診のご予約」</a>のフォームから、<br>それ以外のご予約の方は<a href="/contact/" target="_blank">「お問い合わせ」</a>よりお問い合わせください。</p>-->
<?php elseif(is_page( 'appointment-revisit' ) ): ?>
          <p class="lowerHeader__description">
 すでに銀座リプロ外科にて診療いただいたことのある方のお申し込みフォームです。<br>
初めて診察を受ける方は<a href="/contact/appointment-first/" target="_blank">「初診のご予約」</a>のフォームから、<br>それ以外のご予約の方は<a href="/contact/" target="_blank">「お問い合わせ」</a>よりお問い合わせください。</p>

<?php elseif(is_page( 'contact-confirm-lps' ) || is_page( 'appointment-revisit-confirm' ) || is_page( 'appointment-first-confirm' ) || is_page( 'appointment-first-confirm_lp' )): ?>
<?php endif; ?>
        </div>
      </section>



      <section class="contents--lower" style="padding: 10px 0 0;">
        <article class="contents__article">

<?php if(is_page(array('appointment-first','appointment-first_lp','appointment-revisit'))): ?>

<div class="contact__attention">
            <p class="contact__attention__heading">※ご予約の際のお願い※</p>
            <p>※Gmailでお問い合わせの場合、当院からのメールが迷惑メールに届く場合がございます。<br />お問い合わせ後に当院からのメールが届かない場合は、迷惑メールフォルダを御確認下さい。</p>
		  </div>

<?php elseif(is_page( 'contact-confirm-lps' ) || is_page( 'appointment-revisit-confirm' ) || is_page( 'appointment-first-confirm' ) || is_page( 'appointment-first-confirm_lp' )): ?>
          <div class="contact__attention">
            <p class="contact__attention__heading">※まだ送信完了ではありません※</p>
            <p>
              以下をご確認いただき、送信ボタンを押してください。
            </p>
          </div>

<?php endif; ?>

<div id="formCheck">
<?php if(is_page( 'appointment-first' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="14400"]'); ?>
<?php elseif(is_page( 'appointment-first_lp' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="9964"]'); ?>
<?php elseif(is_page( 'appointment-revisit' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="1055"]'); ?>
	

<?php elseif(is_page( 'appointment-first-confirm' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="14400"]'); ?>
<?php elseif(is_page( 'appointment-first-confirm_lp' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="9964"]'); ?>
<?php elseif(is_page( 'appointment-revisit-confirm' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="1055"]'); ?>
<?php elseif(is_page( 'contact-confirm-lps' )): ?>
        <?php echo do_shortcode('[mwform_formkey key="3928"]'); ?>

<?php endif; ?>
</div>
<?php if(!is_page(array('appointment-first-confirm','appointment-first-confirm_lp'))){ ?>
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
                <a href="/contact/" target="_blank">お問い合わせページ</a>からご連絡ください</p>
            </div>
          </div>
<?php } ?>

      </article>
    </section>
    <?php if(!is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ ?>
    <section class="contents">
      <article class="contents__article">
        <?php get_template_part('includes/link'); ?>
        <?php get_template_part('includes/banner'); ?>
      </article>
    </section>
    <?php } ?>
  </div>
  <?php if(is_page(array('appointment-first','appointment-first-confirm','appointment-first_lp','appointment-first-confirm_lp'))){ ?>
<script>
$(function(){
  $('.contact__input.opehope select').change(function() {
    const str1 = $('.contact__input.opehope select').val();
    if ( str1 === '希望する' ) {
      $("#span4").text(str1);
      $('.opehope_select input').val('');
      $('.opehope_select select').val('');
      $('.opehope_select').hide();
    }else{
      $('.opehope_select').show();
    }
  });
});
</script>
<?php } ?>
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
  <?php if(is_page('appointment-first')):?>
  <?php //参考：https://monotokoto.jp/get_template_part_wordpress55/、https://qiita.com/mo9mo99mo/items/745806bbb9cc02747bbe ?>
  <?php 
  // 日付取得の関数化（フォーマット）
  function returnDate($date) {
    $array = explode('/', $date);
    return "{$array[0]},{$array[1]}-1,{$array[2]}";
  }

  // 営業期間の処理（日付選択範囲の設定）
  //$start_text = returnDate(get_field('range_start', $form_page_id));
  //$end_text = returnDate(get_field('range_end', $form_page_id));

  // 定休日（曜日）の設定
  $holiday_date = get_field('holiday_date','post_1621');
  foreach($holiday_date as $k => $v) { 
    $holiday_date[$k] = (int) $v;
  }
  $holiday_date_object = json_encode($holiday_date);

  // 定休日の処理（日付）
  $holiday_day = get_field('holiday_day','post_1621');
  $holiday_day_array = explode("\r\n", $holiday_day);
  $holiday_day_object = json_encode($holiday_day_array);
?>

<script>
  jQuery(function($) {
    //祝日の設定ここから
    var holidays = [];
    let req = new XMLHttpRequest();
    req.open("get", "<?php echo esc_url(get_template_directory_uri()); ?>/js/syukujitsu.csv", true);
    req.overrideMimeType('text/plain; charset=Shift_JIS');
    req.send(null);
    req.onload = function(){
      holidays = convertCSVtoArray(req.responseText);
    }
    req.onerror = function() {
      //alert('失敗しました');
      window.stop();
    }
    //csvを配列化
    function convertCSVtoArray(str){
        let tmp = str.split("\n");
        tmp.shift();
        let result = [];
        let date2 = "";
        for(let i=0;i<tmp.length;i++){
          if(!tmp[i]) continue;
          result[i] = tmp[i].split(',');
          date2 = new Date(result[i][0]);
          result[i][0] = getDayStr(date2)
        }
        return result;
    };
    //日付をcsvのフォーマットに合わせる（yy/mm/dd）
    function getDayStr(date2){
      let yy = date2.getFullYear();
      let mm = ("0" + (date2.getMonth() + 1)).slice(-2);
      let dd = ("0" + date2.getDate()).slice(-2);
      return yy + '/' + mm + '/' + dd;
    }
    //祝日の設定ここまで

    $('form .hasDatepicker').attr('autocomplete', 'off');
    $('body').addClass('reserve-page');
    // 営業期間の設定
    // 複数項目がある場合は $('input[name="カレンダー1"]', 'input[name="カレンダー2"]')
    var calendar = $('.contact--appointment__date1,.contact--appointment__date2,.contact--appointment__date3');
    //calendar.datepicker('option', 'minDate', new Date(<?php echo $start_text?>));
    //calendar.datepicker('option', 'maxDate', new Date(<?php echo $end_text?>));

    // 定休日の処理（日付）
    calendar.datepicker('option', 'beforeShowDay', function(date){
      var holiday_day = <?php echo $holiday_day_object ?>;
      for (var i = 0; i < holiday_day.length; i++) {
        var holiday_time = Date.parse(holiday_day[i]);
        var holiday = new Date();
        holiday.setTime(holiday_time);
        if (holiday.getYear() == date.getYear() && holiday.getMonth() == date.getMonth() && holiday.getDate() == date.getDate()) {
          return false;
        }
      }
      // 祝日はOK
      // $.get("https://holidays-jp.github.io/api/v1/date.json", function(holidaysData) {
      //   //var holiday_day1 = Object.keys(holidaysData);
      //   var holiday_day1 = ["2024\/08\/05","2024\/08\/12"];
      //   for (var i = 0; i < holiday_day1.length; i++) {
      //     var holiday_time2 = Date.parse(holiday_day1[i]);
      //     var holiday1 = new Date();
      //     holiday1.setTime(holiday_time1);
      //     if (holiday1.getYear() == date.getYear() && holiday1.getMonth() == date.getMonth() && holiday1.getDate() == date.getDate()) {
      //       return [true, ''];
      //     }
      //   }
      //});
      
      //祝日の表示ここから
      function isHoliday(dayStr){
        for(let i=0;i<holidays.length;i++){
          if(holidays[i][0] === dayStr){
            return true;
          }
        }
        return false;
      }
      if(isHoliday(getDayStr(date))){
        return [true,"ui-test"];
      }

      //var holiday_day1 = Object.keys(holidaysData);
      // var holiday_day2 = ["2024\/08\/11","2024\/09\/11"];
      // for (var i = 0; i < holiday_day2.length; i++) {
      //   var holiday_time2 = Date.parse(holiday_day2[i]);
      //   var holiday2 = new Date();
      //   holiday2.setTime(holiday_time2);
      //   if (holiday2.getYear() == date.getYear() && holiday2.getMonth() == date.getMonth() && holiday2.getDate() == date.getDate()) {
      //     return [true, ''];
      //   }
      // }

      // 定休日の処理（曜日）
      //var holiday_date = <?php echo $holiday_date_object ?>;
      var holiday_date = [1,2,3,5];
      return [!holiday_date.includes(date.getDay())];
    });

    calendar.datepicker('option', 'onSelect', function(dayNames){
        var dayNames = dayNames.replace(/年/g,'-').replace(/月/g,'-').replace(/日/g,'');
        var youbi_array = ["日","月","火","水","木","金","土"];
        var mydate = new Date(dayNames);   // 2021年12月31日を指定
        var youbi = mydate.getDay();
        //document.write(youbi_array[youbi] + "曜日ですよ");
        //var youbi = youbi_array[youbi];
        //alert(youbi);
      });
  });
</script>
<?php /*
  <?php //参考：https://monotokoto.jp/get_template_part_wordpress55/、https://qiita.com/mo9mo99mo/items/745806bbb9cc02747bbe ?>
  <?php
  // 日付取得の関数化（フォーマット）
  function returnDate($date) {
    $array = explode('/', $date);
    return "{$array[0]},{$array[1]}-1,{$array[2]}";
  }

  // 営業期間の処理（日付選択範囲の設定）
  //$start_text = returnDate(get_field('range_start', $form_page_id));
  //$end_text = returnDate(get_field('range_end', $form_page_id));

  // 定休日（曜日）の設定
  $holiday_date = get_field('holiday_date');
  foreach($holiday_date as $k => $v) { 
    $holiday_date[$k] = (int) $v;
  }
  $holiday_date_object = json_encode($holiday_date);

  // 定休日の処理（日付）
  $holiday_day = get_field('holiday_day');
  $holiday_day_array = explode("\r\n", $holiday_day);
  $holiday_day_object = json_encode($holiday_day_array);
?>
<script>
  jQuery(function($) {
    $('form .hasDatepicker').attr('autocomplete', 'off');
    $('body').addClass('reserve-page');
    // 営業期間の設定
    // 複数項目がある場合は $('input[name="カレンダー1"]', 'input[name="カレンダー2"]')
    var calendar = $('.contact--appointment__date1,.contact--appointment__date2,.contact--appointment__date3');
    //calendar.datepicker('option', 'minDate', new Date(<?php echo $start_text?>));
    //calendar.datepicker('option', 'maxDate', new Date(<?php echo $end_text?>));

    // 定休日の処理（日付）
    calendar.datepicker('option', 'beforeShowDay', function(date){
      var holiday_day = <?php echo $holiday_day_object ?>;
      for (var i = 0; i < holiday_day.length; i++) {
        var holiday_time = Date.parse(holiday_day[i]);
        var holiday = new Date();
        holiday.setTime(holiday_time);
        if (holiday.getYear() == date.getYear() && holiday.getMonth() == date.getMonth() && holiday.getDate() == date.getDate()) {
          return false;
        }
      }

      // 定休日の処理（曜日）
      var holiday_date = <?php echo $holiday_date_object ?>;
      return [!holiday_date.includes(date.getDay())];
    });
  });
</script>
*/?>
  <?php endif; ?>
<?php get_footer(); ?>