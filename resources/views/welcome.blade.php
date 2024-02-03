<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
    @vite('resources/js/app.js')
</head>

<body class="bg-dark">
    <header>
        <div class="container p-3">
            <h1 class="text-danger mb-3">Movies</h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-4 g-3">
                @foreach ($movies as $movie)
                    <div class="col d-flex">
                        <div class="card w-100">
                            <div class="card-body">
                                <h4 class="card-title">{{ $movie['title'] }}</h4>
                                <p class="card-text row row-cols-2">
                                <div class="col">
                                    <span class="fw-bold">Titolo Originale: </span>
                                    <span>{{ $movie['original_title'] }}</span>
                                </div>
                                <div class="col">
                                    <span class="fw-bold">Nazionalità: </span>
                                    <span>{{ $movie['nationality'] }}</span>
                                </div>
                                <div class="col">
                                    <span class="fw-bold">Data di uscita: </span>
                                    <span>{{ $movie['date'] }}</span>
                                </div>
                                <div class="col">
                                    <span class="fw-bold">Voto: </span>
                                    <span>{{ $movie['vote'] }}/10</span>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
