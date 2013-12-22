@extends('template/masterpage')
@section('content')


    @foreach($kullanicilar as $kullanici)
        <section class="panel col-xs-5">
            <div class="follower">
                <div class="panel-body">
                    <h3>{{$kullanici->username}}</h3>
                    <h4>{{$kullanici->name}} {{$kullanici->surname}}</h4>
                    <div class="follow-ava">
                        <img src="http://dummyimage.com/200x200/9e2f2f/f0f0f0.jpg&text=Resim+Yok" alt="">
                    </div>
                </div>
            </div>

            <footer class="follower-foot">
                <ul>
                    <li>
                        <h5>{{$kullanici->created_at}}</h5>
                        <p>Üyelik Tarihi</p>
                    </li>
                    <li>
                        <h5>270</h5>
                        <p>Mesaj Sayısı</p>
                    </li>
                </ul>
            </footer>
        </section>
    @endforeach
@stop