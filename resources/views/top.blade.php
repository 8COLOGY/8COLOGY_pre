<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <meta name="keywords" content="えころじー,8cology,ecology,プラスチックリサイクル,プラスチックごみ,廃プラスチック削減">
    <meta name="description" content="8COLOGYは、廃プラスチック削減を推進するサービスです。世の中のもったいないをなくしたい。ごみが少ない世界を作りたい。そんな思いから、8COLOGYは廃プラスチックの再生資源化を推進するためのサービスを提供しています。">

</head>

<body>
    @include("parts.common")
    @include("parts.header")
    <!-- Topロゴ -->
    <!-- Topイメージ -->
    <section id="section_top">
        <div class="toplogo">
            <img src="img/logo_l.png" alt="toplogo">
        </div>
    </section>
    <!-- Topイメージ -->
    <!-- <div class="box mx-auto"></div> -->
    <img src="img/topimg.png" class="topimage d-block mx-auto img-fluid" alt="Responsive image">
    <label id="btn_center" for="trigger" class="open_btn_now">今すぐリサイクルを始める</label>
    <label id="btn_center" for="trigger" class="open_btn_login_center">>>ログイン</label>
    <!-- 8COLOGYについて -->
    <div class="about">
        <section id="section_about">
            <h3 class=”text_title”><span style="color:forestgreen;">ABOUT</span></h3>
            <h4 class=”text_subtitle_about”>8COLOGYについて</h4>
            <div class="text_title_details_about">
                <dl>
                    <dd class="fw-bold">8COLOGYは、廃プラスチックのリサイクルを推進するサービスです。</dd>
                    <dd>世の中のもったいないをなくしたい。</dd>
                    <dd>ごみが少ない世界を作りたい。</dd>
                    <dd>大きな時代の変化の中で、廃プラスチックの再生資源化を推進していきたい。</dd>
                    <dd>そんな思いから、「8COLOGY」は歩みを始めています。</dd>
                    <dd>廃プラスチックの再生資源化はもちろんのこと、</dd>
                    <dd>もったいないをなくすためのサービスを提供していきます。</dd>
                </dl>
            </div>
        </section>
    </div>
    <!-- 数字でみる8COLOGY -->
    <div class="infog">
        <section id="section_infog">
            <h3 class=”text_title”><span style="color:forestgreen;">INFOGRAPHICS</span></h3>
            <p>数字でみる8COLOGYの活動</p>
            <p>これまでに回収したプラスチック容器の重さは…</p>
            <h3><span style="color:forestgreen;" class="count">12345</span>kg</h3>
        </section>
    </div>
    <!-- HOWTO -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md">
                <p class="step howto_fonts" style="color:forestgreen;">STEP1</p><img src="img/wash.png" alt="news_img" width="400" height="400" class="rounded">
                <div class="news_details">
                    <dl>
                        <dt class="">1.プラスチック容器をよく洗う</dt>
                    </dl>
                </div>
            </div>
            <div class="col-md">
                コンテンツB
            </div>
            <div class="col-md">
                コンテンツC
            </div>
        </div>
    </div>
    @include("parts.footer")
    <!-- 数字のカウントアップjs -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('.count').each(function() {
            $(this).prop('c', 0).animate({
                c: $(this).text()
            }, {
                duration: 3000,
                easing: 'linear',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>
</body>

</html>