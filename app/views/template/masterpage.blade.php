<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laravel Örneği</title>

    <!-- < BOOTSTRAP > -->
    {{ HTML::style('assets/bootstrap/css/bootstrap.css'); }}
    {{ HTML::style('assets/bootstrap/js/bootstrap.js'); }}
    <!-- </ BOOTSTRAP >  -->

    <!-- < CSS > -->
    {{ HTML::style('assets/css/default.css'); }}
    <!-- </ CSS >  -->

</head>
<body>
    <div class="container">
        <div class="col-xs-12" style="background-color: #DDD;">
            <h1>Laravel Master Page </h1>
            {{ HTML::link(URL::route('anasayfa'), 'Anasayfa') }}  ||
            {{ HTML::link(URL::route('makaleler'), 'Makaleleler') }}-
            {{ HTML::link(URL::route('makale-ekle'), 'Makale Ekle') }} ||
            {{ HTML::link(URL::route('kullanicilar'), 'Kullanıcılar') }} -
            {{ HTML::link(URL::route('uye-ol'), 'Üye Ol') }} -
            {{ HTML::link(URL::route('giris-yap'), 'Giriş Yap') }}

            <p>bu satırdan sonrası dinamiktir</p>
            <hr color="red"/>
        </div>
        <div class="col-xs-12 contents">
            @include('sidebar')
            <div class="clearfix"></div>
        </div>
        <hr/>
        <div class="col-xs-12 contents">
            @yield('content')
            <div class="clearfix"></div>
        </div>

    </div>

</body>
</html>