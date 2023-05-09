<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h2>Insegnanti: {{ $class_number }}</h2>
        <ul>
            @foreach ( $teachers as $teacher )
                <li>{{ $teacher }}</li>
            @endforeach
        </ul>

        <h2>Studenti: {{ $class_number }}</h2>

        @if (count($students) === 0)
            <h4>Nessuno studente</h4>
        @else
            <ul>
                @foreach ( $students as $student )
                    <li>{{ $student }}</li>
                @endforeach
            </ul>
        @endif
         <h5>Totale studenti: {{count($students)}}</h5>
    </main>
</body>
</html>
