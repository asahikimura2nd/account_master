<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>会員作成フォーム</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/signin.css') }}"> --}}
</head>
<body >

  <h1>会員作成フォーム</h1>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach
  <form action="{{route('user')}}" method="POST">
    @csrf
      <label for="user_company">会社名：必須<br>
        <input type="text" name="user_company" id="user_company">
      </label>
      <br>
      <label for="user_name_katakana">フリガナ：必須<br>
        <input type="text" name="user_name_katakana" id="user_name_katakana">
      </label>
      <br>
      <label for="user_email">メールアドレス：必須<br>
        <input type="email" name="user_email" id="user_email">
      </label>
      <br>
      <label for="user_password">パスワード：必須<br>
        <input type="password" name="user_password" id="user_password">
      </label>
      <br>
      <label for="user_tel">電話番号：必須<br>
        <input type="text" name="user_tel" id="company">
      </label>
      <br>
      <label for="user_postcode">郵便番号：必須<br>
        <input type="text" name="user_postcode" id="user_postcode">
      </label>
      <br>
      <label for="user_prefectures">都道府県：必須<br>
        <input type="text" name="user_prefectures" id="user_prefectures">
      </label>
      <br>
      <label for="user_city">市区町村：必須<br>
        <input type="text" name="user_city" id="user_city">
      </label>
      <br>
      <label for="user_address_and_building">番号・アパート：必須<br>
        <input type="text" name="user_address_and_building" id="user_address_and_building">
      </label>
      <br>
      <label for="content">備考欄：必須<br>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
      </label>
      <br>
      <input type="submit" value="登録する。">

  </form>


</body>

</html>