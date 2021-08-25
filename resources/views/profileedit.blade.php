@extends('layouts.app')

@section('content')
    {{-- ユーザ一覧 --}}
    
    <h1>EDIT PAGE</h1>
    <p>::{{ $user->name }}</p> 
    <p>::{{ $profile->profiletext }}</p>

    <div class="register">

        <div class="form">
            {!! Form::open(['route' => 'users.store']) !!}
                <div class="form-group">
                    {!! Form::label('plofiletext', 'Plofile') !!}
                    {!! Form::text('plofiletext', null, ['class' => 'form-control']) !!}

                </div>
                <div style="text-align: right;">
                {!! Form::submit('登録', ['class' => 'btn btn-outline-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    
    @include('users.users')

@endsection



