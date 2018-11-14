@extends('layouts.app')

@section('content')
<div class='container'>
    <h2 class='mt-5 mb-3'>Список сообщений</h2>
    @if(count($messages) > 0)
        @foreach($messages as $mes)
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    Получено: {{ $mes['created_at'] }}
                </li>
                <li class="list-group-item">
                    Отправитель: {{ $mes['name'] }}
                </li>
                <li class="list-group-item">
                    Адрес: <a href="mailto:{{ $mes['email'] }}">{{ $mes['email'] }}</a>
                </li>
                <li class="list-group-item">
                    Сообщение: {{ $mes['message'] }}
                </li>
            </ul>
        @endforeach
    @else
        <p>К сожалению, ни одного сообщения еще не поступило.</p>
    @endif
</div>
@endsection