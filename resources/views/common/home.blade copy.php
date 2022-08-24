<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ホーム</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body class="text-center">
  <header>
    <div class="admin">管理者：{{Auth::user()->email}}
      <form action="{{route('logout')}}" method="POST" class="logoutForm">
        @csrf
        <button class="logoutButton" type="submit">ログアウト</button>
      </form>
    </div>
  </header>  
  <main>
    <div class="sideBar" id="sideBar" >
      <div>
        <div class="hambarger"><img src="{{asset('images/menu50.png')}}" alt="hambarger" class="menuIcon" id="hambarger"></div>
        <div class="home">
          <a href="{{route('home')}}">
            <div><img src="{{asset('images/home50.png')}}" alt="home" class="homeIcon"></div>
            <div class="items">ホーム</div>
          </a>
        </div>
        <a href="{{route('showUser')}}">
          <div class="members">
          <div><img src="{{asset('images/component48.png')}}" alt="members" class="membersIcon"></div>
          <div class="items">会員登録</div>
        </div>
      </a>
        <div class="members">
          <div><img src="{{asset('images/component48.png')}}" alt="members" class="membersIcon"></div>
          <div class="items"><a href="{{route('showContacts')}}">お問い合わせ一覧</a></div>
        </div>
      </div>
    </div>
 
    <div class="mainContainer" id="mainContainer">   
      <div class="title">HOME</div>      
      <div class="backImage">
          <div class="innerContainer">
            <div>会員登録</div>
            <div><a href="{{route('users')}}">会員一覧</a></div>     
            <div><a href="{{route('showUser')}}">新規作成</a></div>
            <div>お問い合わせ一覧</div>
            <div><a href="{{route('showContacts')}}">お問い合わせ一覧</a></div>  
          </div>
      </div>
    </div>  
  </main>


	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{asset('js/menu.js')}}"></script>
</body>

</html>