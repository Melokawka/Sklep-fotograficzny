<head>
    <meta charset="utf-8">
    <title>Sklep fotogeniczny</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');


        body {
            font-family: 'Rubik', sans-serif;
        }

        tr:last-child {
            border-bottom: 0px solid transparent !important;
        }

        footer {
            line-height: 25px;
        }

    </style>

</head>

<body style="background-image: url({{ asset('storage/img/floor-tile.png') }});">
    @include('shared/navbar')

    <div class="container mt-4 mb-2">
        <!--<h2>Spis</h2> -->
        <table class="table table-striped table-hover table-danger table-bordered" style="vertical-align: middle;">
            <thead>
                <tr>
                    <th scope="col">Tytuł zdjęcia</th>
                    <th scope="col">Zdjęcie</th>
                    <th scope="col">Data dodania</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Nazwisko fotografa</th>
                    <th scope="col">Cena</th>
                    @if (Auth::check()) 
                    <th scope="col"></th>
                    <th scope="col"></th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr style="border-bottom: 20px solid white;">
                    <td>{{$p->name}}</td>
                    @if (($p->id)<=20)
                    <td><a href="{{route('photos.show', $p->id)}}"><img src="{{ asset('storage/img/'.'photo'.$p->id.'.jpg') }}" class="card-img-top" alt="..." width="420" height="280"></a></td>
                    @else
                    <td><a href="{{route('photos.show', $p->id)}}"><img src="{{ asset('storage/img/'.'photo'.(($p->id)%20).'.jpg') }}" class="card-img-top" alt="..." width="420" height="280"></a></td>
                    @endif
                    <td>{{$p->dayofupload}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{$photographers[($p->photographer_id)-1]->lastname}}</td>
                    <td>{{$p->price}}$</td>
                    @if (Auth::check()) 
                    <td><a class="btn btn-danger" href="{{route('photos.edit', $p->id)}}" role="button">Edycja</a></td>
                    <td>
                        <form method="POST" action="{{ route('photos.destroy', $p->id) }}" style="margin: auto 0 auto 0"> @csrf @method('DELETE') <button type="submit" class="btn btn-danger">Usuń</button> </form>
                    </td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>

    <div class="fixed-bottom">
        @include('shared/footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </script>
</body>