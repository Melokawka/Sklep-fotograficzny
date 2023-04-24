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

    <div class="container-fluid m-2">
        <div class=" m-5 h-50 position-relative" style="background-image: url('storage/img/mk9.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover; ">
            <h1 class="text-center p-5" style="color: white">Nasi partnerzy</h1>
            @if (Auth::check()) 
            <a class="btn white border border-white position-absolute" style="bottom: 0; margin: 0; left: 50%; transform: translate(-50%, -50%);" href="{{route('photographers.create')}}" role="button">Dodaj fotografa</a>
            @endif
        </div>

    </div>

    <div class="container-fluid mt-5  card-group  ">
        @forelse ($photographers_pag as $ph)
        <div class="col-sm-12 col-lg-6 d-flex justify-content-center">
            <div class="card text-bg-danger mb-3 m-5" style="width: 40rem; height: 43rem">
                <div class="card-header">{{$ph->firstname}} {{$ph->lastname}}</div>
                <div class="card-body position-relative">
                    <h5 class="card-title text-center">{{$ph->howmanysold}} sprzedanych zdjęć</h5>
                    <div class="container mt-3 mb-4 d-flex justify-content-center">
                        @if (($ph->id)<=10)
                        <a href="{{route('photographers.show', $ph->id)}}"><img src="{{ asset('storage/img/'.'gr'.$ph->id.'.jpg') }}" class="card-img-top" alt="..." style="width:480; height:270"></a>
                        @else
                        <a href="{{route('photographers.show', $ph->id)}}"><img src="{{ asset('storage/img/'.'gr'.(($ph->id)%10).'.jpg') }}" class="card-img-top" alt="..." style="width:480; height:270"></a>
                        @endif
                    </div>
                    <p class="card-text m-4" style="text-align: justify; line-height: 30px">{{$ph->description}}</p>
                    <div class="container d-flex justify-content-center position-absolute" style="bottom: 1%; left: 0; right: 0">
                        @if (Auth::check()) 
                        <a class="btn white border border-white h-100" style="margin-right: 10px" href="{{route('photographers.edit', $ph->id)}}" role="button">Edycja</a> 
                        <form method="POST" action="{{ route('photographers.destroy', $ph->id) }}" > @csrf @method('DELETE') <button type="submit" class="btn white border border-white">Usuń</button> </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @empty
        <p>Brak</p>
        @endforelse


    </div>



    <nav aria-label="Page navigation example" class="container-fluid d-flex justify-content-center mt-5">

        <ul class="pagination">
            @if (!($photographers_pag->onFirstPage()))
            <li class="page-item" style="margin-right: 30px;">
                <a class="page-link bg-danger" style="padding: 10px 20px 10px 20px; color: white" href="{{$photographers_pag->previousPageUrl()}}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            @endif

            @if (!($photographers_pag->onLastPage()))
            <li class="page-item">
                <a class="page-link bg-danger" style="padding: 10px 20px 10px 20px; color: white" href="{{$photographers_pag->nextPageUrl()}}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
            @endif
        </ul>
    </nav>


    @include('shared/footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </script>
</body>