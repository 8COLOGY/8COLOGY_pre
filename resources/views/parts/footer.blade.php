<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Document</title>
</head>

<body>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 col-md-9">
                    <ul class="navbar-nav list-inline">
                        <li><a href="{{ url('/') }}">ホーム</a></li>
                        <li><a href="{{ url('/about') }}">8COLOGYについて</a></li>
                        <li><a href="{{ url('/inquiry') }}">お問い合わせ</a></li>
                        <li><a href="#">プライバシーポリシー</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3">
                    <address>
                        <dl>
                            <dt>8COLOGY</dt>
                            <dd>〒810-0041</dd>
                            <dd>福岡県福岡市中央区大名1-３−41</dd>
                            <dd>プリオ大名ビル2F</dd>
                            <dd>Mail 8cology@gmail.com</dd>
                            <dd>福岡市営地下鉄天神駅 徒歩10分</dd>
                            <dd>火～日 AM 10:00 ～ PM 6:00 月曜定休</dd>
                        </dl>
                    </address>
                </div>
            </div>
        </div>
        <div class="copyright">
            Copyright &copy; 8COLOGY All rights reserved.
        </div>
    </footer>
</body>

</html>