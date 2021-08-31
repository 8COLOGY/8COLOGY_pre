<div class='fixed-top'>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">8COLOGY</a> -->
            <a href="#section_top" class="navbar-brand">
                <img src="img/logo_s.png" alt="navbarlogo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Home</a>
                 <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                 </li> -->
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">8COLOGYについて</a> -->
                        <a class="nav-link" href="{{ url('/about') }}">8COLOGYについて</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section_infog">数字でみる8COLOGY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">リサイクルのやり方</a>
                    </li>
                    <li>
                        <div class="popup_wrap" v-cloak>
                            <input id="trigger" type="checkbox">
                            <div class="popup_overlay">
                                <label for="trigger" class="popup_trigger"></label>
                                <div class="popup_content">
                                    <label for="trigger" class="close_btn">×</label>
                                    <p>QRコードをスキャンするとLINEの友だちに追加されます<br>
                                        <img src="https://qr-official.line.me/sid/M/266kegaz.png"><br>
                                        QRコードをスキャンするには、LINEアプリのコードリーダーをご利用ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <label for="trigger" class="open_btn">今すぐリサイクルを始める</label>
                    </li>
                    <li>
                        <div class="popup_wrap" v-cloak>
                            <input id="trigger" type="checkbox">
                            <div class="popup_overlay">
                                <label for="trigger" class="popup_trigger"></label>
                                <div class="popup_content">
                                    <label for="trigger" class="close_btn">×</label>
                                    <p>QRコードをスキャンするとLINEの友だちに追加されます<br>
                                        <img src="https://qr-official.line.me/sid/M/266kegaz.png"><br>
                                        QRコードをスキャンするには、LINEアプリのコードリーダーをご利用ください。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <label for="trigger" class="open_btn_login">ログイン</label>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>