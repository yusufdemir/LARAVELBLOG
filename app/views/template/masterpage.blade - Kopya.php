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

    <div id="header-wrapper">
        <div id="head-wrapper">
            <div id="head-bar">
                <h1>
                    <a href="#"><img src="http://nexthon.com/vmp/images/logo.png"></a>

                </h1>


                <ul class="main-menu" style="overflow:visible">

                    <li>{{ HTML::link(URL::route('anasayfa'), 'TÜMÜ') }}</li>


                    <li>{{ HTML::link(URL::route('anasayfa'), 'Resimler') }}</li>


                    <li>{{ HTML::link(URL::route('anasayfa'), 'Hareketli Resimler (GİF)') }}</li>


                    <li>{{ HTML::link(URL::route('anasayfa'), 'Videolar') }}</li>


                    <li><a class="" href="#"><strong>Karışık</strong></a></li>

                </ul>


                <ul class="main-menu menu-right">

                    <li><a class="add-rss" href="#"><i class="glyphicon glyphicon-bookmark"></i>RSS</a></li>
                    <li><a class="add-post" href="#">Sende Yükle!</a></li>


                    <li>
                        <form action="#" method="post">
                            <input type="text" class="form-control input-sm search" name="query" tabindex="1" placeholder="Arama Yap!">
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div id="head-last-wrapper">
            <div class="head-last">
                <a href=""> test</a>
                <a href=""> test</a>
                <a href=""> test</a>
                <a href=""> test</a>
                <a href=""> test</a>
                <a href=""> test</a>
                <a href=""> test</a>
            </div>

        </div>
    </div>
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