@extends ('layouts/layout')

@section ('content')
  
      <div class="container bg_blogs">
        <div class="row padding_top_2">
          <div class="col text-center">
            <h2 class="underline">Blogs</h2>
            <p>Orientēšanās padomi iesācējiem</p>
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