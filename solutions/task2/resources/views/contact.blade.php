@extends('layouts.app')

@section('content')
<div class='container d-flex flex-column justify-content-center align-items-center' style="width:100%; height:100vh;">
    <h2 class="mt-5 mb-4">Отправьте свое сообщение</h2>
    <noscript>
        Для корректной работы данной странице необходимо разрешение JavaScript<br>
        Информацию о том, как активировать JavaScript вы можете найти 
        <a href="https://www.enable-javascript.com/ru/#pnlChromeNew"
        title="Инструкция по активации JavaScript">здесь</a>.
    </noscript>

    {!! Form::open(['url' => '/']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Имя:') }}
        {{ Form::text('name', '', ['class' => 'form-control', "placeholder" => "Иванов Иван"]) }}
    </div>
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::email('email', '', ['class' => 'form-control', "placeholder" => "example@gmail.com"]) }}
    </div>
    <div class="form-group">
        {{ Form::label('message', 'Сообщение: ') }}
        {{ Form::textarea('message', '', ['class' => 'form-control', "placeholder" => "Ваше сообщение...", "rows" => 3 ]) }}
    </div>
    <div>
        {{ Form::submit('Отправить', [ 'class' => 'btn btn-primary' ] ) }}
    </div>
    {!! Form::close() !!}
</div>
@endsection