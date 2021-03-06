<!DOCTYPE html>
<html>

<head>
    <title>株式会社 OPEN STORE</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" type="text/css" />

    <!-- CSSを読み込んだ後にjsを読み込むようにしましょう -->
    <!-- <script src="script.js"></script> -->
    <!-- デフォルトのjqを削除 -->
    <?php
    wp_deregister_script('jquery');
    wp_head();
    ?>

    <!-- jquery読み込み -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib/jquery.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    </script>
</head>

<body>
    <div class="header-color">
        <p></p>
    </div>
    <header>

        <div class="header container ">
            <div class="header-left">
                <div class="header-logo">
                    <a href="#"><img src="" alt=""></a>
                </div>

            </div>
            <div class="header-right">
                <div class="header-contact">

                </div>
                <div class="header-nav" style="width:100px;">
                    <a href="#" id="header-course"><img src="https://everydayicons.jp/wp/wp-content/themes/everydayicons/icons/png/ei-menu.png" alt=""> </a>
                    <ul id="header-toggle">
                        <li>初級</li>
                        <li>中級</li>
                        <li>上級</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <div class="container clear">
        <div class="top">
            <div class="top-logo">
                <h3>あなたの価値を、<span>全ての場所に</span></h3>
                <!-- 　　　<p>いつでもどこでもすべての場所に</p> -->
            </div>
            <div class="top-me">
                <p>- Branding your value everywhere -
                    <br>
                </p>
            </div>
            <div class="sc ">
                <p>scroll<span>→</span></p>
            </div>
        </div>
    </div>
    <div class="service clear scrollanime slide-left">
        <div class="service1 ">
            <p>SERVICE</p>
        </div>
        <div class="con-1 ">
            <div class="main container ">
                <div class="main1">
                    <div class="main1-me scrollanime slide-left ">
                    <div class="main1-to">
                            <p>WEBコンサルティング</p>
                            <a href="#">WEB CONSULTING</a>
                        </div>
                        <div class="main1-bo">
                            <h3>「WEBサービス」の成功は戦略で決まる</h3>
                            <p>
                            綿密なヒアリングをもとに、Webサービスの<br>問題発見や解決策の提案、戦略立案などを中心に、<br>
                            お客様が最適なWebサービスを活用できるよう<br>サポートします。
                            <!-- 　お客様の抱えている悩みをお聞かせていただき、<br>
                            　最適な解決策をご案内します。 -->
                        　　</p>
                        <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
                <div class="main1">
                <div class="main1-me scrollanime slide-left">
                        <div class="main1-to">
                            <p>WEBサービス制作/開発</p>
                            <a href="#">WEB DESIGN</a>
                        </div>
                        <div class="main1-bo">
                            <h3>あくまでもユーザーのためのもの。</h3>
                            <p>
                            お客様の「伝えたいコト」「やりたいコト」と<br>
                            ユーザーの「求めているコト」をWEBサービスを<br>
                            用いて様々なカタチで実現します。
                        　　</p>
                        <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
                <div class="main1">
                <div class="main1-me scrollanime slide-left">
                        <div class="main1-to">

                            <p>ECサイト構築/運営</p>
                            <a href="#">WEBOPERATION</a>
                        </div>
                        <div class="main1-bo">
                            <h3>あなたのお店を、全ての場所に</h3>
                            <p>
                                お客様の商品やオリジナルブランドを<br>独自のオンラインショップを通じて<br>
                                誰にでもどこにでもお届けすることができます。
                            </p>
                            <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main1-1 container">
                <div class="main1">
                <div class="main1-me scrollanime slide-left">
                        <div class="main1-to">

                            <p>WEBマーケティング/運用</p>
                            <a href="#">WEBCONSULTING</a>
                        </div>
                        <div class="main1-bo">
                            <h3>「だれに」「どこで」「どう伝えるか」</h3>
                            <p>
                                デジタル広告の重要性が非常に高まっている今、<br>
                                インターネット上でユーザーを集める為の<br>
                                仕組みづくりを提供します。
                            </p>
                            <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
                <div class="main1">
                <div class="main1-me scrollanime slide-left">
                        <div class="main1-to">
                            <p>クリエイティブ制作</p>
                            <a href="#">WEB DESIGN</a>
                        </div>
                        <div class="main1-bo">
                            <h3>創造がビジネスを加速させる</h3>
                            <p>
                                ユーザーのココロと行動を変化させ,<br>お客様のブランドが
                                人々の記憶に深く刻まれるような<br>
                                "伝わる"クリエイティブを制作します。
                            </p>
                            <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
                <div class="main1">
                <div class="main1-me scrollanime slide-left">
                        <div class="main1-to">

                            <p>システム開発</p>
                            <a href="#">WEBOPERATION</a>
                        </div>
                        <div class="main1-bo">
                            <h3>「効率」から「創造」へ</h3>
                            <p>
                                顧客管理、営業管理システムといった<br>
                                ITの導入により業務を効率化し、新たな<br>
                                ビジネスチャンスを創造します。
                            </p>
                            <button type="button">MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="creative scrollanime slide-left">
        <div class="main2-to">
            <p class="scrollanime slide-left">CREATIVE LINE UP</p>
            <h3 class="scrollanime slide-left">ビジネスの課題を解決しています。</h3>
        </div>

        <div class="main2 container">
            <div class="main2-bo">
                <div class="main2-bo-item scrollanime slide-left">
                    <p>新しくWEBサービスを
                        <br>立ち上げたい
                    </p>
                </div>
                <div class="main2-bo-item scrollanime slide-left">
                    <p>WEBサービスを効果的に
                        <br>運用したい
                    </p>
                </div>
                <div class="main2-bo-item scrollanime slide-left">
                    <p>新規見込顧客
                        <br>問い合わせを獲得したい
                    </p>
                </div>
            </div>
            <div class="main2-bo">
                <div class="main2-bo-item scrollanime slide-left">
                    <p>新しくWEBサービスを
                        <br>立ち上げたい
                    </p>
                </div>
                <div class="main2-bo-item scrollanime slide-left">
                    <p>WEBサービスを効果的に
                        <br>運用したい
                    </p>
                </div>
                <div class="main2-bo-item scrollanime slide-left">
                    <p>新規見込顧客
                        <br>問い合わせを獲得したい
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="workflow clear">
        <div class="workflowx">
            <div class="con3 clear scrollanime slide-left">
                <div class="work-title ">
                    <p> WORK FLOW</p>
                </div>
                <div class="workflow1 container ">
                    <div class="workflow1-me scrollanime slide-left">
                        <p>様々なビジネス課題をWebサイトで解決してきた私たちが
                            <br>Webサイトの活用方法をご提案します。
                        </p>
                    </div>
                    <div class="workflow1-item">
                        <div class="workflow1-item1 scrollanime slide-left">
                            <div class="workimg">
                                <!-- <img src="<?php echo get_template_directory_uri(); ?>/image/1.png" -->
                                <!-- フォルダ名はimgでは？ -->
                                <img src="<?php echo get_template_directory_uri(); ?>/img/1.png" alt="">
                            </div>
                            <p>STEP 01
                                <br>お打ち合わせ
                            </p>
                        </div>
                        <div class="yaji scrollanime downup">→</div>
                        <div class="workflow1-item1 scrollanime slide-left">
                            <div class="x">
                                <div class="workimg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/2.png" alt="">
                                </div>
                                <p>STEP 02
                                    <br>提案書 見積り
                                </p>
                            </div>
                        </div>
                        <div class="yaji scrollanime downup">→</div>
                        <div class="workflow1-item1 scrollanime slide-left">
                            <div class="x2">
                                <div class="workimg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/3.png" alt="">
                                </div>
                                <p>STEP 03
                                    <br>ご契約
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="yaji2 scrollanime downup">↙</div>
                    <div class="text">
                        <div class="workflow2-item">
                            <div class="workflow1-item1 scrollanime slide-left">
                                <div class="workimg">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/4.png" alt="">
                                </div>
                                <p>STEP 04
                                    <br>デザイン制作
                                </p>
                            </div>
                            <div class="yaji scrollanime downup">→</div>
                            <div class="workflow1-item1 scrollanime slide-left">
                                <div class="x">
                                    <div class="workimg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/5.png" alt="">
                                    </div>
                                    <p>STEP 05
                                        <br>サイト構築
                                    </p>
                                </div>
                            </div>
                            <div class="yaji scrollanime downup">→</div>
                            <div class="workflow1-item1 scrollanime slide-left">
                                <div class="x2">
                                    <div class="workimg">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/6.png" alt="">
                                    </div>
                                    <p>STEP 06
                                        <br>完成 運用
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pastrecords clear scrollanime slide-left">

        <div class="past-title scrollanime slide-left">
            <p>PAST RECORD</p>
        </div>
        <div class="container">
            <div class="past">
                <div class="past-item">
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>
                        <div class="past-buttom">
                            <div class="past-bu">
                                <a href="#">detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>
                        <div class="past-buttom">
                            <div class="past-bu">
                                <a href="#">detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>
                        <div class="past-buttom">
                            <div class="past-bu">
                                <a href="#">detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="manage">
        <div class="con3 scrollanime slide-left">
            <div class="manage-top">
                <p>NEWS</p>
            </div>
            <div class="container">
                <div class="manege-me scrollanime slide-left">
                    <div class="news-img">
                        <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                    </div>
                    <div class="news-me">
                        <h3>biebviueqblcrqeuirlwqo</h3>
                        <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                            それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                            様々なご要望にお応えできるのが私たちの強みです</p>
                    </div>
                </div>
                <div class="manege-me scrollanime slide-left">
                    <div class="news-img">
                        <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                    </div>
                    <div class="news-me">
                        <h3>biebviueqblcrqeuirlwqo</h3>
                        <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                            それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                            様々なご要望にお応えできるのが私たちの強みです</p>
                    </div>
                </div>
                <div class="manege-me scrollanime slide-left">
                    <div class="news-img">
                        <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                    </div>
                    <div class="news-me">
                        <h3>biebviueqblcrqeuirlwqo</h3>
                        <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                            それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                            様々なご要望にお応えできるのが私たちの強みです</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="pastrecords clear scrollanime slide-left">
        <div class="past-title scrollanime slide-left">
            <p>WORK</p>
        </div>
        <div class="container">
            <div class="past">
                <div class="past-item">
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>
                    </div>
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>

                    </div>
                    <div class="past-main scrollanime slide-left">
                        <div class="past-img">
                            <img src="https://i.pinimg.com/originals/37/a6/29/37a629b6faca99b751ce0792b8cf6459.jpg" alt="">
                        </div>
                        <div class="past-me">
                            <p>大規模工場の配管工事から一般住宅やオフィスなどのトイレ・キッチンなどのリフォーム工事。
                                それだけに留まらず、空調設備取り付けに加えメンテナンスや上下設備設置。そして上水道配水管布設工事など
                                様々なご要望にお応えできるのが私たちの強みです</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="script.js"></script> -->
</body>
<footer>
    <div class="footer">
        <p>株式会社open store</p>
    </div>
</footer>

</html>