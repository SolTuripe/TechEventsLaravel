<!DOCTYPE html>
<!-- saved from url=(0052)https://getbootstrap.com/docs/5.1/examples/carousel/ -->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Tech-Events</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



  <!-- Bootstrap core CSS -->
  <link href="{{asset('events-css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
  <link rel="icon" href="https://getbootstrap.com/docs/5.1/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{{asset('events-css/carousel.css')}}" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Carousel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>

  <main>

  <div class="container">
    <div class="album py-5 bg-light">
      <div class="container">
          <div class="row" id="list">
            <form action='{{ route('events.store')}}' method="POST">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">TITLE</label>
                <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">IMAGE URL</label>
                <input name="img" type="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputText1">DESCRIPTION</label>
                <input name="text" type="text" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
              </div>
              <div class="form-group">
                <label for="exampleInputText1">DATE</label>
                <input name="date_time" type="date_time" class="form-control" id="exampleInputText1" aria-describedby="emailHelp">
              </div>
              <button type="submit" class="btn btn-primary">Submint</button>
            </form>
          </div>
      </div>
    </div>
    </div>


    <!-- FOOTER -->
    <footer class="container">
      <p class="float-end"><a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Back to top</a></p>
      <p>© 2017–2021 Company, Inc. · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Privacy</a> · <a href="https://getbootstrap.com/docs/5.1/examples/carousel/#">Terms</a></p>
    </footer>
  </main>


  <script src="./plantillaBoostrap_html_files/bootstrap.bundle.min.js" ></script>




</body>

</html>