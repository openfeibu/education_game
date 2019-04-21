<body  class="g2Bg" >
<section id="main">
    <div class="loginBtn btn" style="width: 13.7%">
        @if(Auth::user())
        <a href="{{ route('pc.logout') }}"><img src="{!! theme_asset_lang("images/logout.png") !!}" width="100%" alt=""></a>
        @else
            <a href="{{ route('pc.login') }}"><img src="{!! theme_asset_lang("images/login-a.png") !!}" width="100%" alt=""></a>
        @endif
    </div>
    <div class="index-btn">
        <div class="lau-box fb-clearfix" style="width: 17.7%">
            @if(App::getLocale()=='en')
                <div class="lau-cn btn active2 " style="width: 49%">
                    <img src="{!! theme_asset_lang("images/cno.png") !!}" width="100%"  alt="">
                </div>
                <div class="lau-en btn   "style="width: 49%">
                    <img src="{!! theme_asset_lang("images/en.png") !!}" width="100%"  alt="">
                </div>
            @else
                <div class="lau-cn btn " style="width: 49%">
                    <img src="{!! theme_asset_lang("images/cn.png") !!}" width="100%"  alt="">
                </div>
                <div class="lau-en btn active2  "style="width: 49%">
                    <img src="{!! theme_asset_lang("images/eno.png") !!}" width="100%"  alt="">
                </div>
            @endif

        </div>
        <div class="start btn" style="width: 17.7%">
            <a href="{{ route('pc.levels',['lang' => 'zh-hk']) }}" ><img src="{!! theme_asset_lang("images/start.png") !!}" width="100%" alt=""></a>
        </div>
        <div class="guanka btn" style="width: 17.7%">
            <a href="{{ route('pc.levels',['lang' => 'zh-hk']) }}"><img src="{!! theme_asset_lang("images/choose.png") !!}" width="100%" alt=""></a>
        </div>
    </div>
</section>
<audio id="audioPlay" src="button.mp3" preload ></audio>
</body>
<script>
    $(function(){


        $(".lau-cn").on("click",function(){
            if($(this).hasClass("active2")){
                $(this).removeClass("active2").find("img").attr("src","{!! theme_asset_lang("images/cn.png") !!}");

            }
            $(".lau-en").addClass("active2").find("img").attr("src","{!! theme_asset_lang("images/eno.png") !!}");

            $(".loginBtn").find("img").attr("src","{!! theme_asset("images/login-a.png") !!}")
            $(".start ").find("img").attr("src","{!! theme_asset("images/start.png") !!}")
            $(".start ").find("a").attr("href","{{ route('pc.levels',['lang' => 'zh-hk']) }}")
            $(".guanka").find("img").attr("src","{!! theme_asset("images/choose.png") !!}")
            $(".guanka ").find("a").attr("href","{{ route('pc.levels',['lang' => 'zh-hk']) }}")
        })
        $(".lau-en").on("click",function(){
            if($(this).hasClass("active2")){
                $(this).removeClass("active2").find("img").attr("src","{!! theme_asset_lang("images/en.png") !!}");;
            }
            $(".lau-cn").addClass("active2").find("img").attr("src","{!! theme_asset_lang("images/cno.png") !!}");;
            $(".loginBtn").find("img").attr("src","{!! theme_asset("images/en/login-a.png") !!}")
            $(".start ").find("img").attr("src","{!! theme_asset("images/en/start.png") !!}")
            $(".start ").find("a").attr("href","{{ route('pc.levels',['lang' => 'en']) }}")
            $(".guanka").find("img").attr("src","{!! theme_asset("images/en/choose.png") !!}")
            $(".guanka ").find("a").attr("href","{{ route('pc.levels',['lang' => 'en']) }}")


        })
    })
</script>