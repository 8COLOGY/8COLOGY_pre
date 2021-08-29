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
    <div class="box mx-auto"></div>
    <!-- <img id="topimage" class="d-block mx-auto box" src="img/bigimg.png" alt="imagelogo"></div> -->
    <!-- <p><a class="link" href="https://1-notes.com/css/rotate-animation/" target="_blank" rel="noopener">https://1-notes.com/rotate-animation/</a></p> -->
    <label id="btn_center" for="trigger" class="open_btn_now">今すぐリサイクルを始める</label>
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