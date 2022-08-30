@extends('common.layout')

@section('title','お問い合わせ一覧')

@section('content')
@if (session('flash_message'))
      {{ session('flash_message') }}
  @endif

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

            <a href="{{ route('showEditContact',['user_id' => $contact->user_id]) }}">
              <img class="edit" src="{{asset('images/pen.svg')}}" alt="members" class="membersIcon"></a>
            <pre>
            @endforeach
        </td>
        <td>
          @foreach ($contacts as $contact)
            <pre>
              {{$contact->status}}
            <pre>
            @endforeach
        </td>
        <td>
        @foreach ($contacts as $contact)
        <pre>
          {{$contact->user_company}}
        <pre>
        @endforeach
        </td>
        <td>    
          @foreach ($contacts as $contact)
            <pre>
            {{$contact->user_name}}
            <pre>
            @endforeach
        </td>
        <td>    
          @foreach ($contacts as $contact)
            <pre>
            {{$contact->user_tel}}
          
            <pre>
            @endforeach
        </td>
      </tr>
    </tbody>
  </table>
  

  {{ $contacts->links('vendor/pagination/custom') }}
@endsection