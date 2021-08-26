<!DOCTYPE html>
<html>
    <head>
        <title>Kotak Gertak</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .carousel-inner img {
              width: 100%;
            }
        </style>
        <style>
            body {
              background-color: #ffaa24;
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
                <li class="nav-item active">
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

        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://akcdn.detik.net.id/visual/2020/04/22/327b4f73-c53c-4e65-ad63-56a38479b2bd_169.png?w=650" alt="Nussa" height="500">
              </div>
              <div class="carousel-item">
                <img src="https://www.acehnews.id/files/images/20201017-adit-sopo-jarwo-1200x675.jpg" alt="Adit & Sopo Jarwo" height="500">
              </div>
              <div class="carousel-item">
                <img src="https://mmc.tirto.id/image/otf/700x0/2016/05/15/battleofsurabaya_ratio-16x9.JPG" alt="Battle of Surabaya" height="500">
              </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a>
          </div>

          <div class="container" style="width:100%;background-color:maroon;">
            <h3 class="text-white text-center">Most Popular</h3>
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <a href="/nussa">
                        <img src="https://cdn-cas.orami.co.id/parenting/images/film-kartun-asli-indonesia-yang-.original.jpegquality-90.jpg"  width="256px" height="144px">
                        <p class="text-white text-center">Kiko</p>
                        </a>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="/nussa">
                        <img src="https://i1.wp.com/sekolahnews.com/wp-content/uploads/2021/01/904-nussa-tribun.jpg?resize=700%2C400&ssl=1"  width="256px" height="144px">
                        <p class="text-white text-center">Nussa</p>
                        </a>
                    </div>
                    <div class="col-sm-4 text-center">
                        <a href="/nussa">
                        <img src="https://img1.hotstarext.com/image/upload/f_auto,t_hcdl/sources/r1/cms/prod/7776/737776-h" width="256px" height="144px">
                        <p class="text-white text-center">Si Juki The Movie</p>
                        </a>
                    </div>
                </div>
          </div>

    </body>
</html>
