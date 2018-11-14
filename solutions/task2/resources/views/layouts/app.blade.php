<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>Тестовое задание SmartLeads</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        @if( count($errors) > 0 )
        <div class='position-fixed w-100 evading'>
            @foreach( $errors->all() as $err )
                <div class='alert alert-danger'>
                    {{ $err }}
                </div>
            @endforeach
        </div>
        @endif
        @if(session('success'))
        <div class='position-fixed w-100 evading'>
            <div class='alert alert-success'>
                    {{ session('success') }}
            </div>
        </div>
        @endif
        @yield('content')
    </body>
</html>