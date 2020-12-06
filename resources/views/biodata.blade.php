@extends('tema.master')

@section('title')
    Biodata
@endsection

@section('content')
    <fieldset id="tengah"style="width: 700px; text-align: center; margin: auto">
        <div>
        <hr>
        <h2>Isi Sesuai Dengan KTP</h2>
        <hr>
        </div>

    <form action="/kirim" method="POST" enctype="multipart/form-data">
        @csrf

        <div align="left"><label for="nama lengkap"><b>Nama Lengkap</b></label><br></div>
        <div align="left"><input type="text" placeholder="Nama Lengkap..." id="nama lengkap" required></div>
        <br>

        <div align="left"><label for="nama panggilan"><b>Nama Panggilan</b></label><br></div>
        <div align="left"><input type="text" placeholder="Nama panggilan..." id="nama panggilan" required></div>
        <br>

        <div align="left"><label><b>Jenis Kelamin</b></label> <br></div>
        <div align="left"><input type="radio" name="Gender" value="0" checked>Laki-laki <br></div>
        <div align="left"><input type="radio" name="Gender" value="1">Perempuan <br><br></div>

        <div align="left"><label><b>Tempat Tanggal Lahir</b></label><br></div>
        <div align="left"><input type="text" placeholder="Tempat..." required>
        <input name="date" min="1990-01-01" max="2019-12-30" type="date" required></div>
        <br>

        <div align="left"><label><b>Alamat Lengkap</b></label><br></div>
        <div align="left"><input type="text" placeholder="Alamat..." required></div>
        <br>

        <div align="left"><label for="gambar1"><b>Foto KTP(Depan)</b></label><br></div>
        <div align="left"><input type="file" name="gambar" id="gambar" required></div>
        <br>
        <div align="left"><label for="gambar2"><b>Foto KTP(Belakang)</b></label><br></div>
        <div align="left"><input type="file" name="gambar" id="gambar" required></div>
        <br>

        <div align="left"><label><b>Email</b></label><br></div>
        <div align="left"><input type="email" placeholder="email..." required></div>
        <br>

        <div align="left"><input type="submit" value="Kirim"></div>
    </form>
    </fieldset>
      
<br><br><br>

    <footer class="container">
      <p style="text-align: center;">&copy; 2020 Survei</p>
    </footer>
</body>
@endsection