<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Sporta klubs Gaujiena</title>
  </head>
  
  <body>

  <div class="container-fluid">
      <div class="row">
        <div class="col">
            <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="/galvena"><img src="img/index.png" alt="Logotips" height="42" width="42"></a>
              
                <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                  <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item p02">
                      <a href="/galvena#parmums"><button type="button" class="square_btn1">Par mums</button></a>
                    </li>
                    <li class="nav-item p02">
                      <a href="/galvena#rezultāti"><button type="button" class="square_btn1">Rezultāti</button></a>
                    </li>
                    <li class="nav-item p02">
                      <a href="/kontakti"><button type="button" class="square_btn1">Kontakti</button></a>
                    </li>
                  </ul>
                  <form class="input">
                    <input type="text" placeholder="Meklē šeit...">
                    <button class="square_btn1 my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </nav>
        </div>
      </div>
  </div>

  @yield ('content')

  <div class="footer p10">
        <h5>Sandis Sproģis 2019</h5>
  </div>

  <div class="square_btn1 back_to_top"><i class="fa fa-arrow-up" aria-hidden="true"></i></div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
    <script src="js/lightbox-plus-jquery.min.js"></script>
  </body>
</html>