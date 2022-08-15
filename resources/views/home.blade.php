<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホーム</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/signin.css') }}"> --}}

</head>
<body class="text-center">
    {{-- ログイン成功 --}}
    {{-- @if(session('login_success'))
      <div>{{session('login_success')}}</div>
    @endif
    プロフィール --}}
  {{-- userモデルのデータを表示する --}}
    {{-- <li>名前：{{Auth::user()->name}}</li> --}}

  <header>
    <div>管理者：{{Auth::user()->email}}</div>
    <form action="{{route('logout')}}" method="POST">
      @csrf
      <input type="submit" value="ログアウト">
    </form>
  </header>  
    
  <main>
    <div>HOME</div>
    <div>Logout</div>
    
    <div class="container">    
      <div class="card1">
        <div class="card2">
          <div>会員登録</div>
          <div>会員一覧</div>     
        </div>
        
        <div class="card2">
          <div>お問い合わせ一覧</div>
          <div>お問い合わせ一覧</div>     
        </div>
      </div>
    </div>  
  </main>

  <div class="sideBar active" id="sideBar">
    <div class="items ">
      <div class="hambarger"><img src="" alt="hambarger"></div>
      <div class="home">
        <div><img src="asset{{'images/home50.png'}}" alt="home"></div>
        <div>ホーム</div>
      </div>
      <div class="members">
        <div><img src="asset{{'images/component48.png'}}" alt="members"></div>
        <div>会員登録</div>
      </div>
      <div class="contact">
        <div><img src="asset{{'images/component48.png'}}" alt="contact"></div>
        <div>お問い合わせ一覧</div>
      </div>
    </div>
  </div>
	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>