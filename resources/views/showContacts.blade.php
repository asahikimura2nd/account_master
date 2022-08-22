<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ一覧</title>
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('/css/signin.css') }}"> --}}
</head>
<body >


  <table>
    <thead>
    <tr>
      <th>編集</th>
      <th>ステータス</th>
      <th>会社名</th>
      <th>氏名</th>
      <th>電話番号</th>
    </tr>
  </thead>
    <tbody>
      <tr>           
        <td>    
          @foreach ($contacts as $contact)
            <pre>
            <a href="{{ route('showEditContact',['contact_id' => $contact->contact_id]) }}">{{$contact->contact_id}}</a>
            <pre>
            @endforeach
        </td>
        <td>
          @foreach ($contacts as $contact)
            <pre>
            {{$contact->company}}
            <pre>
            @endforeach
        </td>
        <td>
        {{-- ステータスに変更予定 --}}
        @foreach ($contacts as $contact)
        <pre>
        {{$contact->company}}
        <pre>
        @endforeach
        </td>
        <td>    
          @foreach ($contacts as $contact)
            <pre>
            {{$contact->name}}
            <pre>
            @endforeach
        </td>
       
        <td>    
          @foreach ($contacts as $contact)
            <pre>
            {{$contact->tel}}
          
            <pre>
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>
  
  {{-- {{ dd($data->links()) }} --}}
  {{-- {{dd($contacts)}} --}}
  {{ $contacts->links() }}
</body>

</html>