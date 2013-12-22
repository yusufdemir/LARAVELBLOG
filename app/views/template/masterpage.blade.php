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
        <div class="col-xs-12" style="background-color: red;">
            <h1>Laravel Master Page</h1>
            <p>bu satırdan sonrası dinamiktir</p>
            <hr color="red"/>
        </div>
        <div class="col-xs-12">
            @yield('content')
        </div>

    </div>

</body>
</html>