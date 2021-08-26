<!DOCTYPE html>
<html>
    <head>
        <title>Nussa The Animation</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            body {
              background-color: maroon;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
            <a class="navbar-brand" href="/home">
                <img src="{{url('storage/img/kglogo.jpg')}}" height="24px" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/new">New!</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Genre
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/comedy">Comedy</a>
                    <a class="dropdown-item" href="#">Horror</a>
                    <a class="dropdown-item" href="#">Fantasy</a>
                    <a class="dropdown-item" href="#">Romance</a>
                  </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
              <ul class="navbar-nav mr-2">
                <li class="nav-item">
                    <a class="nav-link" href="#">Log In</a>
                </li>
              </ul>
            </div>
          </nav>

        <div class="container" style="margin-top: 70px">
            <div class="row">
                <div class="col-sm-7">
                    <h2 class="text-white">Nussa The Animation</h2>
                    <img src="https://i1.wp.com/sekolahnews.com/wp-content/uploads/2021/01/904-nussa-tribun.jpg?resize=700%2C400&ssl=1">
                    <h4 class="text-white" style="margin-top: 40px">Deskripsi</h4>
                </div>
                <div class="col-sm-4" style="margin-left: 90px;background-color: #ffaa24">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="https://i1.wp.com/sekolahnews.com/wp-content/uploads/2021/01/904-nussa-tribun.jpg?resize=700%2C400&ssl=1" width="64px" height="36px">
                            <h4>Eps 1 Nussa </h4>
                            <p>Deskripsi singkat dari episode</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="https://i1.wp.com/sekolahnews.com/wp-content/uploads/2021/01/904-nussa-tribun.jpg?resize=700%2C400&ssl=1" width="64px" height="36px">
                            <h4>Eps 2 Nussa </h4>
                            <p>Deskripsi singkat dari episode</p>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="https://i1.wp.com/sekolahnews.com/wp-content/uploads/2021/01/904-nussa-tribun.jpg?resize=700%2C400&ssl=1" width="64px" height="36px">
                            <h4>Eps 3 Nussa </h4>
                            <p>Deskripsi singkat dari episode</p>
                        </a>
                  </div>
                </div>
            </div>
        </div>
    </body>
</html>

