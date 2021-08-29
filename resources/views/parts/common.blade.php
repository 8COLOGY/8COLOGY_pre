<!-- <!DOCTYPE html>

<head>
    @if(Request::is('about'))
    <title>8COLOGYとは | えころじー | プラスチックごみ削減</title>
    @else
    <title>えころじー | プラスチックごみ削減</title>
    @endif
    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head> -->
<!DOCTYPE html>

<head>

    @isset($title)
    <title>{{ $title }} - 8COLOGYとは | えころじー | プラスチックごみ削減</title>
    @else
    <title>えころじー | プラスチックごみ削減</title>
    @endisset

    <link rel="stylesheet" href="{{  asset('css/style.css') }}" />
</head>