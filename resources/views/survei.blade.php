@extends('tema.master')

@section('title')
    Survei
@endsection

@section('content')
    <fieldset id="tengah"style="width: 700px; text-align: center; margin: auto">
        <div>
            <hr>
            <h2>Survei WEB</h2>
            <hr>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form action="/proses" method="POST">
        @csrf

        <div align="left"><label for="nama lengkap"><b>Nama Lengkap</b></label><br></div>
        <div align="left"><input type="text" name="nama" placeholder="Nama Lengkap..." class="form-control" required></div>
        <br>

        <div align="left"><label for="pertanyaan"><b>Apa Pendapat Anda Tentang Web Ini?</b></label><br></div>
        <div align="left"><textarea name="pertanyaan" class="form-control"></textarea></div>
        <br>

        <div align="left"><label><b>Email</b></label><br></div>
        <div align="left"><input type="email" name="email" placeholder="email..." required></div>
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