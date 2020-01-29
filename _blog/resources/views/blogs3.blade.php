@extends ('layouts/layout')

@section ('content')

      <div class="container bg_blogs">
        <div class="container">
          <div class="row">
            <div class="col padding_top_2">
              <img src=img/kompassbig.jpg class="rounded pics_blog" alt="">
            </div>
          </div>
            <div class="row">
                <div class="col padding_top">
                    <h2>Lieto kompasu pareizi</h2>
                    <p class="padding_top_4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                </div>
            </div>
        </div>
  
      <div class="container">
        <div class="row padding_top">
          <div class="col text-center">
            <h6 class="underline">Līdzīgi raksti</h6>
          </div>
        </div>
        <div class="row p10">
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
          <a href="/blogs4" class="text-decoration-none">
            <img src=img/apavi.jpg class="rounded" alt="">
            <h4 class="p5">Dažādiem apvidiem dažādi apavi</h4>
            <button type="button" class="square_btn1">Lasīt tālāk</button>
          </a>
          </div>
        </div>
      </div>
    </div>

@endsection     