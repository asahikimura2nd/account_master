<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホーム画面</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">

</head>
<body class="text-center">
    {{-- ログイン成功 --}}
    @if(session('login_success'))
      <div>{{session('login_success')}}</div>
    @endif
    プロフィール
  {{-- userモデルのデータを表示する --}}
  <ul>
    <li>名前：{{Auth::user()->name}}</li>
    <li>メールアドレス：{{Auth::user()->email}}</li>
  </ul>
    <form action="{{route('logout')}}" method="POST">
      @csrf
      <button class="btn btn-danger">ログアウト</button>
  </form>
</body>
</html>