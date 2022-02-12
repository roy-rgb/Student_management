<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Management Database</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="#">Project</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route ('index')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('create')}}">Create</a>
            </li>
          </ul>
   </div>
</div>
</nav>

    <div class="container">
        @yield('content')
    </div>

        <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"> </script>
  </body>
</html>
