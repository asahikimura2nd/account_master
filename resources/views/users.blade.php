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
<body >


  <table>
    <thead>
    <tr>
      <th>編集</th>
      <th>メールアドレス</th>
      <th>電話番号</th>
      <th>都道府県</th>
      <th>市町村</th>
      <th>番地・アパート名</th>
    </tr>
    <thead>
    <tbody>
      <tr>           
        <td>    
          @foreach ($members as $member)
            <pre>
            <a href="{{ route('showEdit',['user_id' => $member->user_id]) }}">{{$member->user_id}}</a>
            <pre>
            @endforeach
        </td>
        {{-- <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_name}}
            <pre>
            @endforeach
        </td> --}}
        <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_email}}
            <pre>
            @endforeach
        </td>
        <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_tel}}
            <pre>
            @endforeach
        </td>
        <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_prefectures}}
            <pre>
            @endforeach
        </td>
        <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_city}}
            <pre>
            @endforeach
        </td>
        <td>    
          @foreach ($members as $member)
            <pre>
            {{$member->user_address_and_building}}
            <pre>
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>

</body>

</html>