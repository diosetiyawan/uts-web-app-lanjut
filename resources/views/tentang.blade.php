@extends('tema.master')

@section('title')
    This is My first blade
@endsection

@section('content')
<fieldset id="tengah"style="width: 700px; text-align: center; margin: auto">
    <br><br>

    <h2>
        <div class="text-center">
            Tentang Website
        </div>
    </h2>
    <div class="text-center">
        <p>Website ini dibuat dengan tujuan UTS dengan beberapa ketentuan yang ada, jadi tidak ada
            yang istimewa diwebsite ini, jika ada yang salah ya maafkan karena saya juga masih belajar.<br>
            TERIMA KASIH
        </p>
    </div>
</fieldset>

<br><br><br>

<footer class="container">
    <p style="text-align: center;">&copy; 2020 Survei</p>
</footer>
</body>
@endsection