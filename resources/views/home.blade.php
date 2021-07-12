<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    <body>
       <!-- Website header -->
       <header>
            <h1 class="heading">Laravel Model Controller</h1>
        </header>

        <!-- Website content -->
        <main>
            <div class="container">
                @foreach($movies as $movie)
                    <div class="movie-card">
                        <h2 class="title">Title: {{ $movie->title }}</h2>
                        <h3 class="original-title">Original title: {{ $movie->original_title }}</h3>
                        <div class="nationality">Nationality: {{ ucfirst($movie->nationality) }}</div>
                        <div class="date">Released on: {{ $movie->date }}</div>
                        <div class="vote">Vote: {{ $movie->vote }}</div>
                    </div>
                @endforeach
            </div>
        </main>
            
        
    </body>
</html>
