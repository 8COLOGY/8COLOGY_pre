<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Document</title>
</head>

<body>
    @include("parts.common", [ "title" => "8COLOGYとは | えころじー | プラスチックごみ削減" ])
    @include("parts.header")
    <main>
        <h1 class=”text_subtitle_about”>8COLOGYについて</h1>
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
    </main>
    @include("parts.footer")
</body>

</html>