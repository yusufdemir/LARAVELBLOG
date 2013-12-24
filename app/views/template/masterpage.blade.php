
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

    <meta property="fb:admins" content="561635557"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- < CSS > -->
    {{ HTML::style('assets/css/default.css'); }}
    {{ HTML::style('assets/css/custom.css'); }}
    {{ HTML::style('assets/css/last-activate.css'); }}
    <!-- </ CSS >  -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Changa+One' rel='stylesheet' type='text/css'>
    <script type='text/javascript'>
        $(window).load(function(){
            var elementPosition_pcb = $('#post-control-bar').offset();
            var elementPosition = $('.s-300').offset();

            $(window).scroll(function(){
                if($(window).scrollTop() > elementPosition_pcb.top-50){
                    $('#post-control-bar').css('position','fixed').css('top','50px');
                } else {
                    $('#post-control-bar').css('position','static');
                }
                if($(window).scrollTop() > elementPosition.top-75){
                    $('.s-300').css('position','fixed').css('top','75px');
                } else {
                    $('.s-300').css('position','static');
                }
            });
        });
    </script>
    <title>Viral Media Portal</title>
    <meta name="description" content="Descriptions GET DB">
    <meta name="keywords" content="Keywords Get DB">
</head>
<div class="random_thumbs">
</div>
<body>

<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=490642984337841";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "72d0e931-330a-4a87-96b1-4491c82db79a", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<div id="fb-root"></div>

<div id="tmp-img" style="display:none"></div>

<div id="head-wrapper">
    <div id="head-bar">
        <h1>
            <a href="#"><img src="http://nexthon.com/vmp/images/logo.png"/></a>

        </h1>


        <ul class="main-menu" style="overflow:visible">

            <li>{{ HTML::link(URL::route('anasayfa'), 'TÜMÜ') }}</li>
            <li>{{ HTML::link(URL::route('anasayfa'), 'Resimler') }}</li>
            <li>{{ HTML::link(URL::route('anasayfa'), 'Hareketli Resimler (GİF)') }}</li>
            <li>{{ HTML::link(URL::route('anasayfa'), 'Videolar') }}</li>
            <li>{{ HTML::link(URL::route('anasayfa'), 'Rastgele', array( 'id' => 'rand-but'  )) }} </li>

        </ul>


        <ul class="main-2-menu">

            <li>{{ HTML::link( URL::route('anasayfa'), 'RSS',array( 'class' => 'add-rss') )  }}</li>
            <li>{{ HTML::link( URL::route('anasayfa'), 'Yükle',array( 'class' => 'add-post') )  }}</li>

            <li><form action="" method="post">
                    <input id="sitebar_search_header" type="text" class="search search_input" name="query" tabindex="1" placeholder="Bi Kurcala :)"/>
                </form>
            </li>
        </ul>
    </div>


</div>


<div class="nexthon-bar">
    <ul>
        <a href="http://nexthon.com/vmp/video/how-toddlers-gossip">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/1385974ed5904a438616ff7bdb3f7439.jpg"/>
            <span class="title">How Toddlers Gossip</span>
        </a>
        <a href="http://nexthon.com/vmp/video/homeless">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/5fd0b37cd7dbbb00f97ba6ce92bf5add.jpg"/>
            <span class="title">Homeless</span>
        </a>
        <a href="http://nexthon.com/vmp/video/brain-divided">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/7f6ffaa6bb0b408017b62254211691b5.jpg"/>
            <span class="title">Brain Divided</span>
        </a>
        <a href="http://nexthon.com/vmp/gif/monkey-spanking-chow">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/f899139df5e1059396431415e770c6dd.gif"/>
            <span class="title">Monkey Spanking Chow</span>
        </a>
        <a href="http://nexthon.com/vmp/video/cute-fail">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/e00da03b685a0dd18fb6a08af0923de0.jpg"/>
            <span class="title">Cute Fail</span>
        </a>
        <a href="http://nexthon.com/vmp/video/the-waterhole">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/698d51a19d8a121ce581499d7b701668.jpg"/>
            <span class="title">The Waterhole</span>
        </a>
        <a href="http://nexthon.com/vmp/picture/amazing-kitten">
            <img style="width: auto;height: 100%;" src="http://nexthon.com/vmp/uploads/thumbs/92cc227532d17e56e07902b254dfad10.jpg"/>
            <span class="title">Amazing Kitten</span>
        </a>
    </ul>
</div>

<div style="clear:both; margin-top:160px;"></div>

<div id="container" style="">

    <div id="main">
        <div id="main-bottom-ad-tray">
            <div>
                <div style='width:728px; height:90px; border:1px solid #DFDFDF;' align='center'><script type="text/javascript"><!--
                        google_ad_client = "ca-pub-1706865407555688";
                        /* mtl_leaderboard */
                        google_ad_slot = "6694513754";
                        google_ad_width = 728;
                        google_ad_height = 90;
                        //-->
                    </script>
                    <script type="text/javascript"
                            src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                    </script></div>
            </div>
        </div>

        <div id="content-holder">
            <div class="main-filter ">
                <ul class="content-type">

                    <li><a class="current" href="http://nexthon.com/vmp"><strong>Tazeler</strong></a></li>
                    <li><a class="link" href="http://nexthon.com/vmp/rss" style="padding-left: 8px; padding-right: 11px;"><img src="http://nexthon.com/vmp/images/rss_icon.png"  /></a></li>

                    <li> <a class="" href="http://nexthon.com/vmp/pictures"><strong>Fotoğraflar</strong></a>/li>
                    <li> <a class="" href="http://nexthon.com/vmp/animated-gifs"><strong>Hareketli Resimler (GIF)</strong></a></li>
                    <li> <a class="" href="http://nexthon.com/vmp/videos"><strong>Videolar</strong></a></li>
                    <li> <a class="" href="http://nexthon.com/vmp/videos"><strong>VİNE</strong></a></li>
                </ul>
                <div id="sort">
                    <label>
                        <strong>Sort by : </strong>
                        <select onchange="self.location=self.location='http://nexthon.com/vmp/index.php?sort_by='+this.options[this.selectedIndex].value">
                            <option value="orderid">Date</option>
                            <option value="votes" selected>Likes</option>
                            <option value="views">Views</option>
                        </select>
                    </label>​
                    <a href="http://nexthon.com/vmp/index.php?sort_order=ASC"><img src="http://nexthon.com/vmp/images/arrow_down.png" title="Descending"></a>
                </div>
            </div>

            <div id="content" listPage="hot">
                <div id="entries-content" class="grid">
                    <ul id="grid-col-1" class="col-1">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/picture/girl-teasing-cow" class="jump_stop">
                                <div style="" class="thimage">
                                    <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/54229abfcfa5649e7003b83dd4755294.jpg" alt="Girl Teasing Cow" title="Girl Teasing Cow" />
                                    <div id="title_m"><center>Girl Teasing Cow</center></div>
                            </a>

                </div>
                <h4></h4>
                </li>
                </ul>
                <ul id="grid-col-1" class="col-2">
                    <li style="height:200px">
                        <a href="http://nexthon.com/vmp/picture/amazing-kitten" class="jump_stop">
                            <div style="" class="thimage">
                                <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/92cc227532d17e56e07902b254dfad10.jpg" alt="Amazing Kitten" title="Amazing Kitten" />
                                <div id="title_m"><center>Amazing Kitten</center></div>
                        </a>

            </div>
            <h4></h4>
            </li>
            </ul>
            <ul id="grid-col-1" class="col-3">
                <li style="height:200px">
                    <a href="http://nexthon.com/vmp/picture/funny-cats" class="jump_stop">
                        <div style="" class="thimage">
                            <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/c4ca4238a0b923820dcc509a6f75849b.jpg" alt="Funny Cats" title="Funny Cats" />
                            <div id="title_m"><center>Funny Cats</center></div>
                    </a>

        </div>
        <h4></h4>
        </li>
        </ul>
        <ul id="grid-col-1" class="col-1">
            <li style="height:200px">
                <a href="http://nexthon.com/vmp/video/tired-to-sit-on-bike-try-this" class="jump_stop">
                    <div style="" class="thimage">
                        <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/cedebb6e872f539bef8c3f919874e9d7.jpg" alt="Tired To Sit On Bike Try This" title="Tired To Sit On Bike Try This" />
                        <div id="title_m"><center>Tired To Sit On Bike Try This</center></div>
                </a>

    </div>
    <h4></h4>
    </li>
    </ul>
    <ul id="grid-col-1" class="col-2">
        <li style="height:200px">
            <a href="http://nexthon.com/vmp/video/amazing-goal" class="jump_stop">
                <div style="" class="thimage">
                    <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/013d407166ec4fa56eb1e1f8cbe183b9.jpg" alt="Amazing Goal" title="Amazing Goal" />
                    <div id="title_m"><center>Amazing Goal</center></div>
            </a>

</div>
<h4></h4>
</li>
</ul>
<ul id="grid-col-1" class="col-3">
    <li style="height:200px">
        <a href="http://nexthon.com/vmp/gif/smokin-girl" class="jump_stop">
            <div style="" class="thimage">
                <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/f0935e4cd5920aa6c7c996a5ee53a70f.gif" alt="Smokin Girl" title="Smokin Girl" />
                <div id="title_m"><center>Smokin Girl</center></div>
        </a>

        </div>
        <h4></h4>
    </li>
</ul>
<ul id="grid-col-1" class="col-1">
    <li style="height:200px">
        <a href="http://nexthon.com/vmp/video/how-toddlers-gossip" class="jump_stop">
            <div style="" class="thimage">
                <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/1385974ed5904a438616ff7bdb3f7439.jpg" alt="How Toddlers Gossip" title="How Toddlers Gossip" />
                <div id="title_m"><center>How Toddlers Gossip</center></div>
        </a>

        </div>
        <h4></h4>
    </li>
</ul>
<ul id="grid-col-1" class="col-2">
    <li style="height:200px">
        <a href="http://nexthon.com/vmp/gif/minion-got-banana" class="jump_stop">
            <div style="" class="thimage">
                <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/ed3d2c21991e3bef5e069713af9fa6ca.gif" alt="Minion Got Banana" title="Minion Got Banana" />
                <div id="title_m"><center>Minion Got Banana</center></div>
        </a>

        </div>
        <h4></h4>
    </li>
</ul>
<ul id="grid-col-1" class="col-3">
    <li style="height:200px">
        <a href="http://nexthon.com/vmp/picture/awesome-car" class="jump_stop">
            <div style="" class="thimage">
                <img style="width: auto;" src="http://nexthon.com/vmp/uploads/thumbs/65b9eea6e1cc6bb9f0cd2a47751a186f.jpg" alt="Awesome Car" title="Awesome Car" />
                <div id="title_m"><center>Awesome Car</center></div>
        </a>

        </div>
        <h4></h4>
    </li>
</ul>
</div>
<div id="paging-buttons" class="paging-buttons">
    <a href="#" onclick="return false;" class="previous disabled">&laquo; Newer</a><a href="http://nexthon.com/vmp/all/2" class="next">Older &raquo;</a>			</div>
</div>
</div>
<br />
<div id="main-bottom-ad-tray">
    <div>
        <div style='width:728px; height:90px; border:1px solid #DFDFDF;' align='center'><script type="text/javascript"><!--
                google_ad_client = "ca-pub-1706865407555688";
                /* mtl_leaderboard */
                google_ad_slot = "6694513754";
                google_ad_width = 728;
                google_ad_height = 90;
                //-->
            </script>
            <script type="text/javascript"
                    src="//pagead2.googlesyndication.com/pagead/show_ads.js">
            </script></div>
    </div>
</div>
</div>

<div class="side-bar">

    <li id="side-bar-signup">
        <a class="spcl-button green" href="http://nexthon.com/vmp/submit.php" label="Header">Sizde Fotoğraf , Gif yada Video Yükleyin!</a>
    </li>


    <div class="social-block">
        <div class="facebook-like">
            <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fnexthon&amp;width=300&amp;height=258&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:248px;" allowTransparency="true"></iframe>
        </div>

        <center>
            <a href="https://twitter.com/nexthon" class="twitter-follow-button" data-show-count="false">Follow @nexthon</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            <!-- Place this tag where you want the widget to render. -->
            <div class="g-follow" data-annotation="bubble" data-height="20" data-href="https://plus.google.com/104682548360379303861" data-rel="publisher"></div>
            <!-- Place this tag after the last widget tag. -->
            <script type="text/javascript">
                (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                })();
            </script>
        </center>

    </div>

    <div class="s-300">
        <div style='width:300px; height:300px; border:1px solid #DFDFDF;' align='center'>
            <script type="text/javascript">
                <!--
                    google_ad_client = "ca-pub-1706865407555688";
                    /* nexthon_medrec */
                    google_ad_slot = "5654772550";
                    google_ad_width = 300;
                    google_ad_height = 250;
                //-->
            </script>
            <script type="text/javascript"
                    src="//pagead2.googlesyndication.com/pagead/show_ads.js">
            </script></div>
    </div>

</div>

<div id="footer" class="">
    <div class="wrap" style="width:1060px">
        <h4>
            {{ HTML::link(URL::route('anasayfa'), 'Site Hakkında') }}
            |
            {{ HTML::link(URL::route('anasayfa'), 'Kullanım Şartları') }}
            |
            {{ HTML::link(URL::route('anasayfa'), 'SSS') }}
            |
            {{ HTML::link(URL::route('anasayfa'), 'İletişim') }}
        </h4>
        <div style="clear:both"></div>
        <b>&copy; 2013</b>
            <a href="http://nexthon.com/vmp"></a>
        </li>
        <b>Powered by </b><a href="#" target="_blank"><b>YSFDMR</b></a>
    </div>
</div>
</body>
</html>