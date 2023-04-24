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

    <form method="POST" action="{{route('photos.store')}}" class="d-flex justify-content-center">
        @csrf
        <div class="text-end">

            <div class="form-group mb-2 row">
                <label for="name">nazwa zdjęcia</label>
                <input id="name" name="name" type="text" placeholder="Nazwa" class="form-control" class="@error('name') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowa nazwa zdjęcia!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="description">opis</label>
                <textarea rows="3" id="description" name="description" type="text" placeholder="Opis" class="form-control" placeholder="Nazwa" class="form-control" class="@error('description') is-invalid @else is-valid @enderror"></textarea>
                <div class="invalid-feedback">Nieprawidłowy opis!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="price">cena</label>
                <input id="price" name="price" type="text" placeholder="Cena" class="form-control" class="@error('price') is-invalid @else is-valid @enderror">
                <div class="invalid-feedback">Nieprawidłowa cena!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="dayofupload">data dodania</label>
                <input id="dayofupload" name="dayofupload" value="{{$today}}" type="text" class="form-control" class="@error('dayofupload') is-invalid @else is-valid @enderror" disabled>
                <div class="invalid-feedback">Nieprawidłowa data dodania!</div>
            </div>

            <div class="form-group mb-2 row">
                <label for="photographer_id">id fotografa</label>
                <select id="photographer_id" name="photographer_id" class="form-control">
                    @foreach($photographers as $ph )
                    <option value="{{ $ph->id }}" class="form-control">{{ $ph->lastname }}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" value="Wyślij">
        </div>
    </form>


    <div class="fixed-bottom">
        @include('shared/footer')
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>