<head>
    <meta charset="utf-8">
    <title>Sklep fotogeniczny</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        body {
            font-family: 'Rubik', sans-serif;
        }

        footer {
            line-height: 25px;
        }

        .row {
            text-align: right;
            --bs-gutter-x: 0rem;
        }
    </style>
</head>

<body style="background-image: url({{ asset('storage/img/floor-tile.png') }});">
    @include('shared/navbar')

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{route('photographers.store')}}" class="d-flex justify-content-center">
        @csrf
        
        <div class="text-end">

            <div class="form-group mb-2 row">
                <label for="firstname">imię</label>
                <input id="firstname" name="firstname" type="text" placeholder="Imię" class="form-control" class="@error('firstname') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowe imię!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="lastname">nazwisko</label>
                <input id="lastname" name="lastname" type="text" placeholder="Nazwisko" class="form-control" class="@error('lastname') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowe nazwisko!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="birthdate">data urodzin</label>
                <input id="birthdate" name="birthdate" type="date" class="form-control" class="@error('birthdate') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowa data urodzin!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="description">opis</label>
                <textarea rows="3" id="description" name="description" type="text" placeholder="Opis" class="form-control" class="@error('description') is-invalid @else is-valid @enderror"></textarea>

                <div class="invalid-feedback">Nieprawidłowy opis!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="howmanysold">polubione zdjęcia</label>
                <input id="howmanysold" name="howmanysold" type="text" placeholder="Polubione zdjęcia" class="form-control" class="@error('howmanysold') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowa liczba sprzedanych!</div>
            </div>

            <input type="submit" value="Wyślij">

        </div>
    </form>

    <div class="fixed-bottom">
        @include('shared/footer')
    </div>