@extends ('layouts/layout')

@section ('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" data-interval="4800">
                  <img src="/img/back_1.jpg" class="carousel" alt="Mežs">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="">Aktīvās atpūtas klubs</h5>
                    <h1 class="padding_bottom_30">Gaujiena</h1>
                    <p class="text carousel_txt padding_bottom_50">Čempions ir tas, kurš pieceļas arī tad, kad nevar.</p>
                  </div>
                </div>
                <div class="carousel-item" data-interval="4800">
                  <img src="/img/back_2.jpg" class="carousel" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h1>Orientējies</h1>
                    <h5>Uzlabo izturību, iepazīsti apvidu, ievēro norādes</h5>
                    <p class="text carousel_txt">Noderīgi gan ikdienā, gan sacensībās. </p>
                  </div>
                </div>
                <div class="carousel-item" data-interval="4800">
                  <img src="/img/back_3.jpg" class="carousel" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h1 class="font_size">Treniņnometnes</h1>
                    <h5>Gan Latvijā, gan ārpus tās.</h5>
                    <p class="text carousel_txt">Jauni draugi, jauna pieredze, jaunas vietas.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
</div>

<div class="container">
        <div class="row padding_top">
          <div class="col text-center">
            <h2 id="parmums" class="underline">Par mums</h2>
          </div>
        </div>
        <div class="row">
          <div class="col text-center">
            <p>Aktīvās atpūtas sporta klubs "Gaujiena" ir brīvā laika pavadīšanas klubs ar galveno novirzienu - orientēšanās sportu. Dalība klubā ir bez vecuma ierobežojuma. Galvenais noteikums ir vēlme doties trasē un atrast visus kontrolpunktus. </p>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <a href="/img/par_mums_1_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid padding_bottom" src="img/par_mums_1.jpg" alt=""></div>
              <div class="overlay"></div class="overlay">
            </div>
              </a>
              <a href="/img/par_mums_2_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid" src="/img/par_mums_2.jpg" alt=""></div>
              <div class="overlay"></div>
            </div>
              </a>
          </div>
          <div class="col">
              <a href="/img/par_mums_3_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid padding_bottom" src="img/par_mums_3.jpg" alt=""></div>
              <div class="overlay"></div>
            </div>
              </a>
              <a href="/img/par_mums_4_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid" src="img/par_mums_4.jpg" alt=""></div>
              <div class="overlay"></div>
            </div>
              </a>
          </div>
          <div class="col">
              <a href="/img/par_mums_5_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid padding_bottom" src="img/par_mums_5.jpg" alt=""></div> 
              <div class="overlay"></div>
            </div>
              </a> 
              <a href="/img/par_mums_6_big.jpg" data-lightbox="img">
              <div class="wrapper">
            <div><img class="img-fluid" src="img/par_mums_6.jpg" alt=""></div>
            <div class="overlay"></div>
          </div>
            </a>  
          </div>
          <div class="col">
              <a href="/img/par_mums_7_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid padding_bottom" src="img/par_mums_7.jpg" alt=""></div>
              <div class="overlay"></div>
            </div>
              </a>
              <a href="/img/par_mums_8_big.jpg" data-lightbox="img">
              <div class="wrapper">
              <div><img class="img-fluid" src="img/par_mums_8.jpg" alt=""></div>
              <div class="overlay"></div>
            </div>
              </a>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row padding_top">
          <div class="col text-center">
            <h2 id="rezultāti" class="underline">Rezultāti</h2>
            <p>Kluba dalībnieku sniegums 2019. gada sezonā.</p>
          </div>
        </div>
      </div>

      <div class="container-fluid bg padding_top_2">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Vārds</th>
              <th scope="col">Uzvārds</th>
              <th scope="col">1.posms</th>
              <th scope="col">2.posms</th>
              <th scope="col">3.posms</th>
              <th scope="col">4.posms</th>
              <th scope="col">5.posms</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">2</th>
              <td>Ilze</td>
              <td>Celenberga</td>
              <td>2</td>
              <td>1</td>
              <td>3</td>
              <td>7</td>
              <td>4</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Ilze</td>
              <td>Dāve</td>
              <td>4</td>
              <td>3</td>
              <td>2</td>
              <td>5</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Kristers</td>
              <td>Lārmanis</td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Austris</td>
              <td>Kalniņš</td>
              <td>1</td>
              <td>3</td>
              <td>2</td>
              <td>3</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Marta</td>
              <td>Kalniņa</td>
              <td>5</td>
              <td>3</td>
              <td>2</td>
              <td>4</td>
              <td>6</td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Raivis</td>
              <td>Kalniņš</td>
              <td>2</td>
              <td>3</td>
              <td>3</td>
              <td>5</td>
              <td>6</td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Rodrigo</td>
              <td>Saharovs</td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>2</td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Sanita</td>
              <td>Sproģe</td>
              <td>4</td>
              <td>3</td>
              <td>3</td>
              <td>2</td>
              <td>3</td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Uvis</td>
              <td>Sproģis</td>
              <td>1</td>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>1</td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Māris</td>
              <td>Vabulnieks</td>
              <td>1</td>
              <td>3</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="container bg_blogs">
        <div class="row padding_top">
          <div class="col text-center">
          <a href="/raksti" class="text-decoration-none">
            <h2 class="underline">Blogs</h2>
            <p>Orientēšanās padomi iesācējiem</p>
            </a>
          </div>
        </div>
        <div class="row p10">
          <div class="col padding_bottom">
            <a href="/blogs" class="text-decoration-none">
            <img src=img/checkpoint.jpg class="rounded" alt="">
            <h4 class="p5">Kā orientēties pēc orientieriem dabā</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
            </a>
          </div>
          <div class="col padding_bottom">
          <a href="/blogs1" class="text-decoration-none">
            <img src=img/idents.jpg class="rounded" alt="">
            <h4 class="p5">Fakti par identiem</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
          <div class="col padding_bottom">
          <a href="/blogs2" class="text-decoration-none">
            <img src=img/maplegend.jpg class="rounded" alt="">
            <h4 class="p5">Orientēšanās kartes un leģendas</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
          <div class="col padding_bottom">
          <a href="/blogs3" class="text-decoration-none">
            <img src=img/kompass.jpg class="rounded" alt="">
            <h4 class="p5">Lieto kompasu pareizi</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
          <div class="col padding_bottom">
          <a href="/blogs4" class="text-decoration-none">
            <img src=img/apavi.jpg class="rounded" alt="">
            <h4 class="p5">Dažādiem apvidiem dažādi apavi</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
          <div class="col padding_bottom">
          <a href="/blogs5" class="text-decoration-none"> 
            <img src=img/warmup.jpg class="rounded" alt="">
            <h4 class="p5">Pareiza iesildīšanās</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
        </div>
      </div>

@endsection