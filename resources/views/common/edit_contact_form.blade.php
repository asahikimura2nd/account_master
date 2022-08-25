<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ編集</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/signin.css') }}"> --}}
</head>
<body >
  {{-- {{dd($editContact)}} --}}
  <h1>お問い合わせ編集</h1>

  {{-- @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
@endforeach --}}
  <form action="{{route('contactEdit')}}" method="POST">
    @csrf
    ステータス
      <input type="hidden" name="contact_id" value="{{$editContact->contact_id}}">
     {{-- {{dd($editContact->contact_id)}}; --}}
      <select name="status">
        <option value="未対応" @if(old('status')==="未対応") selected @endif>未対応</option>
        <option value="対応中" @if(old('status')==="対応中") selected @endif>対応中</option>
        <option value="対応済み" @if(old('status')==="対応済み") selected @endif>対応済み</option>
    </select>
    <br>
      お問い合わせ内容
      <br>
      {{$editContact->content}}
      <br>
      <label for="remarks">備考<br>
        <textarea name="remarks" id="remarks" cols="30" rows="10">{{old('remarks',$editContact->remarks)}}</textarea>  
      </label>
      <br>
      お問い合わせ情報
      氏名：{{$editContact->name}}
      <br>
      電話番号：{{$editContact->tel}}
      <br>
      メールアドレス：{{$editContact->email}}
      <br>
      生年月日：{{$editContact->birth_date}}
      <br>
      性別：{{$editContact->gender}}
      <br>
      職業：{{$editContact->job}}
      <br>
      <input type="submit" value="登録する。">

  </form>


</body>

</html>