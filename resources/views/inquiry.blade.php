@include("parts.common")
@include("parts.header")
<!-- @extends('layouts.app')

@section('content') -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせ内容の入力</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif -->

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <label for="InputName">氏名<span class="badge badge-danger">必須</span></label><br>
                        <div class="form-inline">
                            <label for="InputName1">姓</label>
                            <input type="text" class="form-control mr-2" id="InputName1" name="last_name">
                            <label for="InputName2">名</label>
                            <input type="text" class="form-control" id="InputName2" name="first_name">
                        </div>
                        <br>
                        <div class="form-group mr-3">
                            <label for="InputAsk">電話番号<span class="badge badge-danger">必須</span></label>
                            <input type="text" class="form-control" name="tel">
                        </div>
                        <div class="form-group mr-3">
                            <label for="InputAsk">メールアドレス<span class="badge badge-danger">必須</span></label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group mr-3">
                            <label for="InputAsk">件名<span class="badge badge-danger">必須</span></label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mr-3">
                            <label for="InputAsk">お問い合わせ内容<span class="badge badge-danger">必須</span></label>
                            <textarea rows="5" class="form-control" name="contact"></textarea>
                        </div>
                        <br>
                        <input class="btn btn-info" type="submit" value="送信する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include("parts.footer")