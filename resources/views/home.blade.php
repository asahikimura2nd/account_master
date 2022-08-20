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
    <div class="sideBar active" id="sideBar">
      <div class="items ">
        <div class="hambarger"><img src="{{asset('images/menu50.png')}}" alt="hambarger" class="menuIcon"></div>
        <div class="home">
          <div><img src="{{asset('images/home50.png')}}" alt="home" class="homeIcon"></div>
          <div>ホーム</div>
        </div>
        <div class="members">
          <div><img src="{{asset('images/component48.png')}}" alt="members" class="membersIcon"></div>
          <div>会員登録</div>
        </div>
        <div class="members">
          <div><img src="{{asset('images/component48.png')}}" alt="members" class="membersIcon"></div>
          <div><a href="{{route('showContacts')}}">お問い合わせ一覧</a></div>
        </div>
      </div>
    </div>
 
    <div class="mainContainer">   
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
</body>

</html>