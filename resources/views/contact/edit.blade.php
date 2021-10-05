@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">お問い合わせ編集</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form method="POST" action="{{route('contact.update',['id'=>$contact->id])}}">
                        @csrf
                        姓
                        <input type="text" name="last_name" value="{{$contact->last_name}}">
                        名
                        <input type="text" name="first_name" value="{{$contact->first_name}}">
                        <br>
                        電話番号
                        <input type="text" name="tel" value="{{$contact->tel}}">
                        <br>
                        メールアドレス
                        <input type="email" name="email" value="{{$contact-> email}}">
                        <br>
                        件名
                        <input type="text" name="title" value="{{$contact->title}}">
                        <br>
                        お問い合わせ内容
                        <textarea name="contact">{{$contact->contact}}</textarea>
                        <br>
                        <input class="btn btn-info" type="submit" value="更新する">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection