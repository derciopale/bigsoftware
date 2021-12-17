
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Musica Moz</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
</head>

<body>

  @if (Route::has('login'))
  <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">BIG SOFTWARE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        </ul>
        <span class="navbar-text">
          <a href="{{ route('login') }}"><button class="btn btn-primary  btn-sm">Login</button></a>
          <a href="{{ route('register') }}"><button class="btn btn-primary  btn-sm">Registar</button></a>
        </span>
      </div>
    </div>
  </nav>



      @auth
          <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
      @else
          {{-- <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a> --}}

          @if (Route::has('register'))
              {{-- <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> --}}
          @endif
      @endauth
  </div>
@endif


  <main id="main">

    <div class="row col-sm-6">
     
        @foreach($posts as $post)
        
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title">{{$post->titulo}}</h5>
                    <p class="card-text">  {{$post->descricao}}</p>
                    <a href="{{ route('posts.show',$post->id) }}" class="btn btn-primary">Ver Mais</a>
                  </div>
                </div>

          @endforeach
  
    </div>

  </main>
  

</body>

</html>
