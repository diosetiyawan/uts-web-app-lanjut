@extends('tema.master')

@section('title')
    This is My first blade
@endsection

@section('content')
<fieldset id="tengah"style="width: 700px; text-align: center; margin: auto">
    <div>
        <hr>
        <h2>Isi Sesuai Dengan KTP</h2>
        <hr>
    </div>

    <div class="container post">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://pngimg.com/uploads/whatsapp/whatsapp_PNG20.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-body"><b>Whatsapp</b></h4>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button"
                   class="btn btn-sm btn-outline-secondary">Buka</button>
                </div>
                <small class="text-muted">1 Part</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-icon-file-facebook-icon-svg-wikimedia-commons-4.png" alt="card image cap">
            <div class="card-body">
            <h4 class="card-body"><b>Facebook</b></h4>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-secondary">Buka</button>
              </div>
              <small class="text-muted">1 Part</small>
            </div>
          </div>
        </div>
      </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" alt="card image cap">
            <div class="card-body">
            <h4 class="card-body"><b>Instagram</b></h4>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <button class="btn btn-sm btn-outline-secondary">Buka</button>
              </div>
              <small class="text-muted">1 Part</small>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
</fieldset>

<br><br><br>

<footer class="container">
    <p style="text-align: center;">&copy; 2020 Survei</p>
</footer>
</body>
@endsection