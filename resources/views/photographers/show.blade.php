<head>
    <meta charset="utf-8">
    <title>Sklep fotogeniczny</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body {
            font-family: 'Rubik', sans-serif;
        }

        footer {
            line-height: 25px;
        }

    </style>
</head>

<body style="background-image: url({{ asset('storage/img/floor-tile.png') }});">
    @include('shared/navbar')

    <div class="container-fluid mt-5">
        <div class="col-sm-12 d-flex justify-content-center">
            <div class="card text-bg-danger mb-3 m-5" style="width: 40rem; height: 40rem">
                <div class="card-header">{{$ph->firstname}} {{$ph->lastname}}</div>
                <div class="card-body">
                    <h5 class="card-title text-center">{{$ph->howmanysold}} sprzedanych zdjęć</h5>
                    <div class="container mt-3 mb-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/img/'.'gr'.$ph->id.'.jpg') }}" class="card-img-top" alt="..." style="width:480; height:270">
                    </div>
                    <p class="card-text m-4" style="text-align: justify; line-height: 30px">{{$ph->description}}</p>
                    <div class="container d-flex justify-content-center position-absolute" style="bottom: 1%; left: 0; right: 0">
                        @if (Auth::check()) 
                        <a class="btn white border border-white h-100" style="margin-right: 10px; color: white !important" href="{{route('photographers.edit', $ph->id)}}" role="button">Edycja</a> 
                        <form method="POST" action="{{ route('photographers.destroy', $ph->id) }}" > @csrf @method('DELETE') <button type="submit" class="btn white border border-white" style="color: white !important">Usuń</button> </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-bottom">
        @include('shared/footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </script>
</body>