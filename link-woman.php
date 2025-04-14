<?php $slug = get_post_field( 'post_name', get_the_ID() ); ?>
<?php if( ( $slug !== 'contact') && (!is_page(array('contact','appointment-first','appointment-revisit'))) ){ ?>
<div class="cta">
    <h2 class="link__ttl">お問い合わせ・ご予約はこちら</h2>
    <ul class="link">
        <li>
            <a href="/lva/appointment-first/" class="link__item">
                <p class="link__item__text link__item__text--reservation">初診のご予約</p>
                <div class="link__item__img--reservation"></div>
                <p class="link__item__lead">初めてご来院いただく方はこちら</p>
            </a>
        </li>
        <li>
            <a href="/lva/appointment-revisit/" class="link__item">
                <p class="link__item__text link__item__text--consultation">再診のご予約</p>
                <div class="link__item__img--consultation"></div>
                <p class="link__item__lead">２回目以降のご来院予約はこちら</p>
            </a>
        </li>
        <li>
            <a href="/woman/contact/" class="link__item">
                <p class="link__item__text link__item__text--contact">お問い合わせ</p>
                <div class="link__item__img--contact"></div>
                <p class="link__item__lead">当院へのお問い合わせはこちら</p>
            </a>
        </li>
    </ul>
</div>
<?php } ?>