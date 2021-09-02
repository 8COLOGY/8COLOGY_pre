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
                もったいないをなくすためのサービスを提供していきます。</p><br>
        </div>
        </p>
        </div>
        <!-- 企業概要 -->
        <div class="info">
            <img class="infomation" src="img/infomation.png" alt="infomation">
            <p id="btn_center">
            <div class="row">
                <div class="col-sm-4">組織名</div>
                <div class="col-sm-8">8COLOGY</div>
                <div class="col-sm-4">設立</div>
                <div class="col-sm-8">2021年11月</div>
                <div class="col-sm-4">代表</div>
                <div class="col-sm-8">難波 佳代子</div>
                <div class="col-sm-4">所在地</div>
                <div class="col-sm-8">福岡県福岡市中央区大名1-３−41</div>
            </div>
            </p>
        </div>

    </main>
    @include("parts.footer")
</body>

</html>