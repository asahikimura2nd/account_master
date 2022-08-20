<!doctype html>
<html>

<head>
    <meta charset='utf-8' />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
    <form action="{{ route('confirm') }}" method="POST">
    @csrf
    <input type="hidden" name="contact_id" value="{{Str::random(30);}}">
    <div class="container">
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">会社名</div>
            <div class="col-md-6 border border-dark"><input type="text" name="company" id="company">
                @if($errors->has('company'))
                <div>{{$errors->first('company')}}</div>
                @endif
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">氏名</div>
            <div class="col-md-6 border border-dark"><input type="text" name="name" id="name">
                @if($errors->has('name'))
                <div>{{$errors->first('name')}}</div>
                @endif   
            </div>
                 
        </div>
         <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">電話番号</div>
            <div class="col-md-6 border border-dark"><input type="text" name="tel" id="name">
                @if($errors->has('tel'))
                <div>{{$errors->first('tel')}}</div>
                @endif
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">メールアドレス</div>
            <div class="col-md-6 border border-dark"><input type="text" name="email" id="">
                @if($errors->has('email'))
                <div>{{$errors->first('email')}}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">生年月日</div>
            <div class="col-md-6 border border-dark"><input type="date" name="birth_date" id="birth_date">
                @if($errors->has('birth_date'))
                <div>{{$errors->first('birth_date')}}</div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">性別</div>
            <div class="col-md-6 border border-dark">
                <label for="gender" class="col-sm-2 col-form-label"><input type="radio" name="gender" value="男" id="gender">男</label>
                <label for="gender" class="col-sm-2 col-form-label"><input type="radio" name="gender" value="女" id="gender">女</label>
                @if($errors->has('gender'))
                <div>{{$errors->first('gender')}}</div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">職業</div>
            <div class="col-md-6 border border-dark">
                <select name="job" id="job">
                    <option value="">職業を選択してください</option>
                    <option value="セキュリティエンジニア">セキュリティエンジニア</option>
                    <option value="電気工事士">電気工事士</option>
                    <option value="建築士">建築士</option>
                </select>
                @if($errors->has('job'))
                <div>{{$errors->first('job')}}</div>
                @endif
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-2 border border-dark ">必須</div>
            <div class="col-md-4 border border-dark">お問い合わせ内容 </div>
             <div class="col-md-6 border border-dark"><textarea name="content" id="content" cols="30" rows="10"></textarea>
                @if($errors->has('content'))
                <div>{{$errors->first('content')}}</div>
                @endif
            </div>
        </div>
        
        <input type="submit" value="送信する">
    </div>
    
</form>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>