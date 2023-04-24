<head>
    <meta charset="utf-8">
    <title>Sklep fotogeniczny</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        body {
            font-family: 'Rubik', sans-serif;
        }

        .white {
            color: white;
        }
    </style>
</head>

<body style="background-image: url('img/floor-tile.png');">

    @include('shared/navbar')

    <div class=" m-5 h-50 position-relative white" style="background-image: url('storage/img/mk5.jpg'); margin-bottom: 0 !important; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <h1 class="text-center p-5 position-absolute" style="top: 0%; left: 0; right: 0;">Photo Wiz</h1>
        <p class="text-center  m-2 position-absolute d-none d-md-block" style="font-size: 25px; bottom: 5%; left: 0; right: 0;">Przyjazna użytkownikowi witryna sprzedaży fotografii</p>

        <a class="btn btn-danger position-absolute top-100 start-50 translate-middle" href="{{ route('presentation.about') }}" role="button">Dowiedz się więcej o nas</a>
    </div>

    <div class="container-fluid mt-5 position-relative">

        <div class="container-fluid m-2 d-flex justify-content-center">
            @php
            $max=20;
            $random_numbers=range(0,$max);

            $first=$random_numbers[rand(1, $max)];
            unset($random_numbers[array_search($first, $random_numbers, true)]);
            $random_numbers=array_values($random_numbers);

            $second=$random_numbers[rand(1, $max-1)];
            unset($random_numbers[array_search($second, $random_numbers, true)]);
            $random_numbers=array_values($random_numbers);

            $third=$random_numbers[rand(1, $max-2)];
            @endphp

            <img src="{{ asset('storage/img/'.'photo'.$first.'.jpg') }}" style="width: 20%; height: auto; margin-right: 5rem" alt="...">
            <img src="{{ asset('storage/img/'.'photo'.$second.'.jpg') }}" style="width: 20%; height: auto; margin-right: 5rem" alt="...">
            <img src="{{ asset('storage/img/'.'photo'.$third.'.jpg') }}" style="width: 20%; height: auto;" alt="...">
        </div>
        <a class="btn btn-danger position-absolute top-100 start-50 translate-middle" href="{{ route('photos.index') }}" role="button">Przeglądaj zdjęcia</a>
    </div>

    <div class="container" style="max-width: 68rem;">

        <div class="m-5 card border-danger mb-3" style="height: 7rem">
            <h1 class="text-center m-5" style="line-height: 1rem; vertical-align:center">Szybki zakup fotografii!</h1>
        </div>

        <div class="container-fluid  card-group d-flex justify-content-center position-relative" style="height: 20rem">

            <div class="card text-bg-danger mb-3 m-5 " style="max-width: 27rem;">

                <div class="card-body">
                    <h5 class="card-title">1. Wybierz</h5>
                    <p class="card-text mt-3 position-absolute" style="text-align: justify; line-height: 30px; top: 30%; left: 5%; right: 5%">Wybieraj spośród 519 483 zdjęć autorstwa sławnych fotografów!</p>
                </div>
            </div>

            <div class="card text-bg-danger mb-3 m-5" style="max-width: 27rem;">

                <div class="card-body">
                    <h5 class="card-title">2. Zapłać i odbierz</h5>
                    <p class="card-text mt-3 position-absolute" style="text-align: justify; line-height: 30px; top: 30%; left: 5%; right: 5%">Wykorzystaj swój portfel konta użytkownika by w prosty sposób wykonywać płatności!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="m-5 position-relative card border-danger mb-3" style="height: 15rem">
        <h1 class="text-center m-3 d-none  d-lg-block">Photo Wiz</h1>
        <p class="text-center position-absolute m-5" style="bottom: 0%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-danger position-absolute top-100 start-50 translate-middle">Dowiedz się więcej o naszych fotografach</button>
    </div>

    <div class="m-5 position-relative card border-danger mb-3" style="height: 15rem">
        <h1 class="text-center m-3 d-none  d-lg-block">Photo Wiz</h1>
        <p class="text-center position-absolute m-5" style="bottom: 0%">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button type="button" class="btn btn-danger position-absolute top-100 start-50 translate-middle">Dowiedz się więcej o naszych fotografach</button>
    </div>

    <div class=" m-5 h-50 position-relative" style="background-image: url('storage/img/mk3.jpg'); margin-bottom: 0 !important; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <h1 class="text-center p-5 white" style="position: absolute; bottom: 10px; left: 0; right: 0;">Photo Wiz</h1>

        <a class="btn btn-danger position-absolute top-100 start-50 translate-middle" href="{{ route('photos.index') }}" role="button">Przeglądaj zdjęcia</a>
    </div>

    <div class="mt-4">@include('shared/footer')</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </script>
</body>