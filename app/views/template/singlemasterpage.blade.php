
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
            <div style="width:728px; height:90px; border:1px solid #DFDFDF;" align="center"><script type="text/javascript"><!--
                    google_ad_client = "ca-pub-1706865407555688";
                    /* mtl_leaderboard */
                    google_ad_slot = "6694513754";
                    google_ad_width = 728;
                    google_ad_height = 90;
                    //-->
                </script>
                <script type="text/javascript" src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                </script><ins style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent"><iframe width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_0" name="aswift_0" style="left:0;position:absolute;top:0;"></iframe></ins></ins></div>
        </div>
    </div>

    <div id="content-holder">
        <div class="post-info-pad">
            <h1>Girl Teasing Cow</h1>
            <p>
                <a href="http://nexthon.com/vmp/pictures">Pictures</a>                    <span class="seperator">|</span>
                Nov 16, 2013. 00:00 AM                    <span class="comment"><fb:comments-count href="http://nexthon.com/vmp/picture/girl-teasing-cow" fb-xfbml-state="rendered" class=""><span class="fb_comments_count">2</span></fb:comments-count> comments</span>
                <span class="views"><span id="love_count" votes="2933">2933 views</span></span>
                <span class="loved"><span id="love_count" votes="109">109 likes</span></span>
            </p>
            <ul class="actions">
                <li><a class="love" id="loveit">Love</a></li>
            </ul>
        </div>
        <div id="post-control-bar" class="spread-bar-wrap" style="position: static; top: 50px;">
            <div class="spread-bar">
                <span class="st_facebook_hcount" displaytext="Facebook" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-facebook-counter" style="background-image: url(http://w.sharethis.com/images/facebook_counter.png);">&nbsp;<img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">24</span></span></span></span></span></span>
                <span class="st_twitter_hcount" displaytext="Tweet" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-twitter-counter" style="background-image: url(http://w.sharethis.com/images/twitter_counter.png);">&nbsp;<img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">1</span></span></span></span></span></span>
                <span class="st_linkedin_hcount" displaytext="LinkedIn" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-linkedin-counter" style="background-image: url(http://w.sharethis.com/images/linkedin_counter.png);">&nbsp;<img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">0</span></span></span></span></span></span>
                <span class="st_pinterest_hcount" displaytext="Pinterest" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stMainServices st-pinterest-counter" style="background-image: url(http://w.sharethis.com/images/pinterest_counter.png);">&nbsp;<img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">0</span></span></span></span></span></span>
                <span class="st_stumbleupon_hcount" displaytext="Stumble" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stButton_gradient"><span class="chicklets stumbleupon">Stumble</span><img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">0</span></span></span></span></span></span>
                <span class="st_reddit_hcount" displaytext="Reddit" st_processed="yes"><span style="text-decoration:none;color:#000000;display:inline-block;cursor:pointer;" class="stButton"><span><span class="stButton_gradient"><span class="chicklets reddit">Reddit</span><img src="http://w.sharethis.com/images/check-big.png" style="position: absolute; top: -7px; right: -7px; width: 19px; height: 19px; max-width: 19px; max-height: 19px; display: none;"></span><span class="stArrow"><span class="stButton_gradient stHBubble" style="display: inline-block;"><span class="stBubble_hcount">2</span></span></span></span></span></span>
            </div>
        </div>

        <div class="buttons_p_n">
            <div id="floating-box">
                <div id="right-social" style="margin-top: 0px;"></div>
            </div>
            <a id="prev_p" class="prev_p" title="Funny Cats" href="http://nexthon.com/vmp/picture/funny-cats"></a>
            <a id="next_p" class="next_p" title="Amazing Kitten" href="http://nexthon.com/vmp/picture/amazing-kitten"></a>
        </div>

        <div id="content">



            <div class="post-container">
                <div class="img-wrap">
                    <img src="http://nexthon.com/vmp/uploads/54229abfcfa5649e7003b83dd4755294.jpg" alt="Girl Teasing Cow" title="Girl Teasing Cow">                </div>
            </div>
            <div class="comment-section">
								<span class="report-and-tags">
					<p style="padding-left: 15px;font-size: 12px;">
                        Cute girl teasing cow :D					</p>
				</span>

				<span class="report-and-tags">
					<p style="padding-left: 15px;">
                        Tags :
                        <a href="http://nexthon.com/vmp/tags/cute">cute</a> , <a href="http://nexthon.com/vmp/tags/girl">girl</a> , <a href="http://nexthon.com/vmp/tags/cow">cow</a>					</p>
				</span>

                <span class="report-and-source">
					<p>
                        Source : None &nbsp; (<a style="color:red" href="http://nexthon.com/vmp/contact.php?report=http://nexthon.com/vmp/picture/girl-teasing-cow">Report This</a>)
                    </p>
				</span>
                <h3 class="title" id="comments">Comments</h3>

                <div style="margin-left:10px">
                    <div class="fb-comments fb_iframe_widget" data-href="http://nexthon.com/vmp/picture/girl-teasing-cow" data-colorscheme="light" data-width="720" fb-xfbml-state="rendered"><span style="height: 258px; width: 720px;"><iframe id="f2e481998" name="f2b2ce0158" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=490642984337841&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D28%23cb%3Df80d236f%26domain%3Dnexthon.com%26origin%3Dhttp%253A%252F%252Fnexthon.com%252Ff2a9e1026%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=http%3A%2F%2Fnexthon.com%2Fvmp%2Fpicture%2Fgirl-teasing-cow&amp;locale=en_US&amp;numposts=10&amp;sdk=joey&amp;skin=light&amp;width=720" style="border: none; overflow: hidden; height: 258px; width: 720px;"></iframe></span></div>
                </div>
            </div>
            <div class="post-may-like">
                <div id="entries-content" class="grid">
                    <ul id="grid-col-1" class="col-1">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/gif/monkey-spanking-chow" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/gif/monkey-spanking-chow" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/f899139df5e1059396431415e770c6dd.gif" alt="Monkey Spanking Chow" title="Monkey Spanking Chow">


                                    <div id="title_m">Monkey Spanking Chow</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul id="grid-col-1" class="col-2">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/picture/funny-cats" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/picture/funny-cats" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/c4ca4238a0b923820dcc509a6f75849b.jpg" alt="Funny Cats" title="Funny Cats">


                                    <div id="title_m">Funny Cats</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul id="grid-col-1" class="col-3">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/video/tired-to-sit-on-bike-try-this" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/video/tired-to-sit-on-bike-try-this" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/cedebb6e872f539bef8c3f919874e9d7.jpg" alt="Tired To Sit On Bike Try This" title="Tired To Sit On Bike Try This">


                                    <div id="title_m">Tired To Sit On Bike Try This</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul id="grid-col-1" class="col-1">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/picture/amazing-kitten" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/picture/amazing-kitten" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/92cc227532d17e56e07902b254dfad10.jpg" alt="Amazing Kitten" title="Amazing Kitten">


                                    <div id="title_m">Amazing Kitten</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul id="grid-col-1" class="col-2">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/gif/dirty-ted" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/gif/dirty-ted" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/ac627ab1ccbdb62ec96e702f07f6425b.gif" alt="Dirty TED" title="Dirty TED">


                                    <div id="title_m">Dirty TED</div>
                                </a>
                            </div>
                        </li>
                    </ul>
                    <ul id="grid-col-1" class="col-3">
                        <li style="height:200px">
                            <a href="http://nexthon.com/vmp/video/chump-and-clump" class="jump_stop">
                            </a><div style="" class="thimage"><a href="http://nexthon.com/vmp/video/chump-and-clump" class="jump_stop">
                                    <img src="http://nexthon.com/vmp/uploads/thumbs/5f93f983524def3dca464469d2cf9f3e.jpg" alt="Chump And Clump" title="Chump And Clump">


                                    <div id="title_m">Chump And Clump</div>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <br>
    <div id="main-bottom-ad-tray">
        <div>
            <div style="width:728px; height:90px; border:1px solid #DFDFDF;" align="center"><script type="text/javascript"><!--
                    google_ad_client = "ca-pub-1706865407555688";
                    /* mtl_leaderboard */
                    google_ad_slot = "6694513754";
                    google_ad_width = 728;
                    google_ad_height = 90;
                    //-->
                </script>
                <script type="text/javascript" src="//pagead2.googlesyndication.com/pagead/show_ads.js">
                </script><ins style="display:inline-table;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent"><ins id="aswift_1_anchor" style="display:block;border:none;height:90px;margin:0;padding:0;position:relative;visibility:visible;width:728px;background-color:transparent"><iframe width="728" height="90" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" onload="var i=this.id,s=window.google_iframe_oncopy,H=s&amp;&amp;s.handlers,h=H&amp;&amp;H[i],w=this.contentWindow,d;try{d=w.document}catch(e){}if(h&amp;&amp;d&amp;&amp;(!d.body||!d.body.firstChild)){if(h.call){setTimeout(h,0)}else if(h.match){try{h=s.upd(h,i)}catch(e){}w.location.replace(h)}}" id="aswift_1" name="aswift_1" style="left:0;position:absolute;top:0;"></iframe></ins></ins></div>
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