@extends ('layouts/layout')

@section ('content')

<div class="container-fluid bg_cont">
           <div class="row">
               <div class="col padding_top_2 padding_left padding_bottom text">
                 <h2 class="text" id="kontakti">Kontakti</h2>
                 <h5>Rakstiet mums orient@skgaujiena.lv</h5>
                 <h5>Zvaniet +371 26956723</h5>

                 <form action="/kontakti" method="POST">
                 @csrf
                 <p class="contact mb0">Vārds:</p>
                 <input type="text" name="contact_name"><br>
                 <p class="contact mb0">E-pasts:</p>
                 <input type="text" name="contact_mail"><br>
                 <p class="contact mb0">Ziņa:</p>
                 <input class="mail_text" type="textarea" name="contact_msg"><br><br>
                 <input type="submit" value="Sūtīt" class="square_btn1">
                 </form>

               </div>
               <div class="col padding_top_3 padding_right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d535.7171482854598!2d26.39903593116763!3d57.514628954937976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x46ea4b601ad989db%3A0x19520e7c25dc3947!2sGaujiena%2C%20Gaujiena%20Parish%2C%20LV-4339!3m2!1d57.5146235!2d26.3986716!5e0!3m2!1sen!2slv!4v1576583558734!5m2!1sen!2slv" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
               </div>
           </div>
</div>

@endsection