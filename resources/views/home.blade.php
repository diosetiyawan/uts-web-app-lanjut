@extends("tema.master")

@section('title')
    Home
@endsection

@section('content')
<div class="carousel-inner">
  		<div class="carousel-item active">
  			<img src="https://cdn.timesmedia.co.id/images/2019/03/07/Survei.jpg" alt="Gambar - 1" width="1280" height="400">
  			<div class="carousel-caption">
  				<p> Slide 1</p>
  			</div>
  		</div>

  		<div class="carousel-item">
  			<img src="https://i1.wp.com/www.kanalinfo.web.id/wp-content/uploads/2016/08/survey.jpg?fit=600%2C400&ssl=1" alt="Gambar - 1" width="1280" height="400">
  			<div class="carousel-caption">
  				<p>Slide 2</p>
  			</div>
  		</div>
</div>

<fieldset id="tengah"style="width: 700px; text-align: center; margin: auto">
    <br><br>

    <h2>
        <div class="text-center">
            Welcome To My Website
        </div>
    </h2>
    <h5>Banyak survei、Banyak survei、Pertukaran cepat、Keamanan</h5>
    <div class="text-center">
        <p>Hii..selamat datang di website saya. kami melakukan survei untuk website ini.</p>
    </div>
</fieldset>

<br><br><br>

<footer class="container">
    <p style="text-align: center;">&copy; 2020 Survei</p>
</footer>
</body>
@endsection