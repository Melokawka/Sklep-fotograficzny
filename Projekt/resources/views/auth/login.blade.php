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

    <div id="..." class="container mt-3 mb-5 text-center">
 
            <div class="mt-4 mb-4">
                <div class="row" >
                    <h1>Zaloguj się</h1>
                </div>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif


            <form method="POST" action="{{ route('login.authenticate') }}"  class="text-center">
                @csrf
                <!-- Email Address -->
                <div class="form-group mb-2">
                    <label for="email">Email</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="@error('email') is-invalid @else is-valid @enderror">
                </div>
                <div class="form-group mb-2">
                    <label for="password">Hasło</label>
                    <input id="password" name="password" type="password" class="@error('password') is-invalid @else is-valid @enderror">
                </div>
                <div class="form-group" style="margin-top: 20px !important; margin-left: 2rem !important">
                    <input type="submit" value="Wyślij">
                </div>
            </form>

    </div>

    <div class="fixed-bottom">
        @include('shared/footer')
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>