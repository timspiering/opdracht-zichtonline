<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>

<body>

<div class="container">
    <ul class="list-group">
        {{-- Alle comments van het huidige bericht worden hier weergeven --}}
        @foreach($comments as $comment)
            <li class="list-group-item">
                <h3>{{ $comment->name }}</h3>
                <p>{{ $comment->body }}</p>
            </li>
        @endforeach
    </ul>

    <hr>

    {{-- Form voor toevoegen nieuwe comment verwijst naar Route > post/add/{id} (PostController@postComment) --}}
    <form method="POST" action="add/{{ $id }}">
        {!! csrf_field() !!}

        <h1>Plaats een bericht</h1>

        <div class="form-group">
            <input type="text" name="name" placeholder="Naam" class="form-control">
        </div>
        <div class="form-group">
            <textarea name="body" placeholder="Bericht" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Verstuur</button>
        </div>
    </form>
</div>

</body>