<!doctype html>
<html>

<head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
{{-- データの形で->演算子が使用できるか検討する。 --}}
    <div>会社名:{{$forms['company']}}</div>
    <div>氏名:{{$forms['name']}}</div>
    <div>電話番号:{{$forms['tel']}}</div>
    <div>メールアドレス:{{$forms['email']}}</div>
    <div>生年月日:{{$forms['birth_date']}}<</div>
    <div>性別:{{$forms['gender']}}<</div>
    <div>職業:{{$forms['job']}}<</div>
    <div>お問い合わせ内容:<br>{{$forms['content']}}<</div>
    <a href="{{route('send')}}"><button type="button" class="btn btn-primary">送信する</button></a>
    <a href="{{route('form',$forms)}}"><button type="button" class="btn btn-primary">戻る</button></a>
    <script src="{{ mix('js/app.js') }}"></script>
    
</body>
</html>


 