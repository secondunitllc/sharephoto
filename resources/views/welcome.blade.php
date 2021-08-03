<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Share Photo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@100&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="login">
        <div class="title">
            <p>Share Photo</p>
        </div>
        <div class="form">
            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'E mail') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Pass word') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            <div div style="text-align: center;">
            {!! Form::submit('ログイン', ['class' => 'btn btn-outline-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="attention">
            {{-- ユーザ登録ページへのリンク --}}
            <p>・アカウントをお持ちでない方はら{!! link_to_route('signup.get', 'こちら') !!}。</p>
            {{-- 退会へのリンク --}}
            <p >・退会の方は{!! link_to_route('signup.get', 'こちら') !!}。</p>
        </div> 
    </div>
</body>
</html>