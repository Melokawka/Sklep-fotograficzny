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

    <div class=" m-5 h-50" style="background-image: url('storage/img/mk6.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">
        <div class="container p-5">
            <h1 class="text-center" style="color: white">O nas</h1>
        </div>
        
    </div>

    <div class="container-fluid mt-5 d-none  d-md-block">
        <div class="container-fluid m-2 d-flex justify-content-center ">
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

    </div>

    <div class="container">
        <div class="m-5 position-relative card border-danger mb-3 mt-5" style="height: 15rem">
            <h1 class="text-center m-3 d-none d-lg-block">Kim jesteśmy?</h1>
            <p class="text-center position-absolute m-5" style="bottom: 0%">Jesteśmy małym zespołem programistów i hobbystów fotografii z Poznania, którzy pragną dzielić się sztuką z innymi,
                jak i pomagać ludziom takim jak my robić tak samo.</p>
            <a class="btn btn-danger position-absolute top-100 start-50 translate-middle" href="{{ route('photos.index') }}" role="button">Poznaj naszych fotografów</a>
        </div>

        <div class="m-5 position-relative card border-danger mb-3" style="height: 15rem">
            <h1 class="text-center m-3 d-none d-lg-block">Co oferujemy?</h1>
            <p class="text-center position-absolute m-5" style="bottom: 0%">Współpracujemy ze światowej klasy fotografami żeby dostarczyć wam uwiecznienia najpiękniejszych chwil. Możecie je wykorzystać
                jako tło na pulpit, czy wydrukować je i powiesić nad kominkiem.
            </p>
            <a class="btn btn-danger position-absolute top-100 start-50 translate-middle" href="{{ route('photos.index') }}" role="button">Przeglądaj zdjęcia</a>
        </div>

        <div class="m-5 position-relative card border-danger mb-3 d-none  d-md-block" style="height: 23rem">
            <h1 class="text-center m-3">Masz pytanie? Postaramy ci się pomóc!</h1>
            <div class="container d-flex justify-content-center">@include('shared.form')</div>
            
        </div>
    </div>

    <div class=" m-5 h-50 position-relative" style="background-image: url('storage/img/mk2.jpg'); margin-bottom: 0 !important; background-position: center; background-repeat: no-repeat; background-size: cover;">
        <h1 class="text-center white" style="position: absolute; bottom: 10px; left: 0; right: 0;">Photo Wiz</h1>
    </div>

        @include('shared/footer')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        </script>
</body>