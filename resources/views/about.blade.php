<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
    <title>Document</title>
</head>

<body>
    @include("parts.common", [ "title" => "8COLOGYとは | えころじー | プラスチックごみ削減" ])
    @include("parts.header")
    <main>
        <!-- 企業理念 -->
        <div class="image">
            <img class="philosophy" src="img/philosophy.png" alt="philosophy">
            <p id="btn_center">
                8COLOGYは、廃プラスチックのリサイクルを推進するサービスです。<br>
                世の中のもったいないをなくしたい。<br>
                ごみが少ない世界を作りたい。<br>
                大きな時代の変化の中で、廃プラスチックの再生資源化を推進していきたい。<br>
                そんな思いから、「8COLOGY」は歩みを始めています。<br>
                廃プラスチックの再生資源化はもちろんのこと、<br>
                もったいないをなくすためのサービスを提供していきます。<br>
                ロゴマークのコンセプトは、無限に続く自然環境保護活動。<br>
                私たち8COLOGYのやるべきことはもったいないをなくす」ということ。<br>
                ロゴマークの初めの一文字に、無限に続くを表現する8をデザインしました。<br>
            </p><br>
        </div>
        <!-- 企業概要 -->
        <div style="text-align:center;" class="info">
            <img class="infomation" src="img/infomation.png" alt="infomation">
            <p class="infomation_text" id="btn_center">
                組織名：8COLOGY<br>
                設立：2021年11月<br>
                代表：難波 佳代子<br>
                所在地：福岡県福岡市中央区大名1-３−41<br>
            </p>
        </div>

    </main>
    @include("parts.footer")
</body>

</html>