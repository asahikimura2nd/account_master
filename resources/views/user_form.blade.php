@extends('common.layout')

@section('title','会員登録')

@section('content')


  <h1>会員登録フォーム</h1>
  @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach
  <form action="{{route('user')}}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{Str::random(30);}}">
      <label for="user_company">会社名：必須<br>
        <input type="text" name="user_company" id="user_company" value="{{ old('user_company') }}">
      </label>
      <br>
      <label for="user_name_katakana">フリガナ：必須<br>
        <input type="text" name="user_name_katakana" id="user_name_katakana" value="{{ old('user_name_katakana') }}">
      </label>
      <br>
      <label for="user_email">メールアドレス：必須<br>
        <input type="email" name="user_email" id="user_email" value="{{ old('user_email') }}">
      </label>
      <br>
      <label for="user_password">パスワード：必須<br>
        <input type="password" name="user_password" id="user_password" value="{{ old('user_password') }}" >
      </label>
      <br>
      <label for="user_tel">電話番号：必須<br>
        <input type="text" name="user_tel" id="user_tel" value="{{ old('user_tel')}}">
      </label>
      <br>
      <label for="user_postcode">郵便番号：必須<br>
        <input type="text" name="user_postcode" id="user_postcode" value="{{ old('user_postcode') }}">
      </label>
      <br>
      <label for="user_prefectures">都道府県：必須<br>
        <input type="text" name="user_prefectures" id="user_prefectures" value="{{ old('user_prefectures') }}">
      </label>
      <br>
      <label for="user_city">市区町村：必須<br>
        <input type="text" name="user_city" id="user_city" value="{{ old('user_city') }}">
      </label>
      <br>
      <label for="user_address_and_building">番号・アパート：必須<br>
        <input type="text" name="user_address_and_building" id="user_address_and_building" value="{{ old('user_address_and_building')}}">
      </label>
      <br>
      <label for="content">備考欄：必須<br>
        <textarea name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>
      </label>
      <br>
      <input type="submit" value="登録する。">

  </form>
@endsection