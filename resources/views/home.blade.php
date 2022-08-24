@extends('common.layout')

@section('title','ホーム')

@section('content')
<div class="innerContainer">
  <div>会員登録</div>
  <div><a href="{{route('users')}}">会員一覧</a></div>     
  <div><a href="{{route('showUser')}}">新規作成</a></div>
  <div>お問い合わせ一覧</div>
  <div><a href="{{route('showContacts')}}">お問い合わせ一覧</a></div>  
</div>
@endsection

          
          