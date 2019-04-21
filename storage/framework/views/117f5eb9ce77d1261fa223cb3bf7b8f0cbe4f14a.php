<body  class="g2Bg" >
<section id="main">
    <div class="loginBtn btn" style="width: 13.7%"><a href="<?php echo e(route('pc.login')); ?>"><img src="<?php echo theme_asset("images/login-a.png"); ?>" width="100%" alt=""></a></div>
    <div class="index-btn">
        <div class="lau-box fb-clearfix" style="width: 17.7%">
            <div class="lau-cn btn" style="width: 49%">
                <img src="<?php echo theme_asset("images/cn.png"); ?>" width="100%"  alt="">
            </div>
            <div class="lau-en btn active2" style="width: 49%">
                <img src="<?php echo theme_asset("images/eno.png"); ?>" width="100%"  alt="">
            </div>
        </div>
        <div class="start btn" style="width: 17.7%">
            <a href="<?php echo e(route('pc.levels',['lang' => 'zh-hk'])); ?>" ><img src="<?php echo theme_asset("images/start.png"); ?>" width="100%" alt=""></a>
        </div>
        <div class="guanka btn" style="width: 17.7%">
            <a href="<?php echo e(route('pc.levels',['lang' => 'zh-hk'])); ?>"><img src="<?php echo theme_asset("images/choose.png"); ?>" width="100%" alt=""></a>
        </div>
    </div>
</section>
<audio id="audioPlay" src="button.mp3" preload ></audio>
</body>
<script>
    $(function(){


        $(".lau-cn").on("click",function(){
            if($(this).hasClass("active2")){
                $(this).removeClass("active2").find("img").attr("src","<?php echo theme_asset("images/cn.png"); ?>");

            }
            $(".lau-en").addClass("active2").find("img").attr("src","<?php echo theme_asset("images/eno.png"); ?>");

            $(".loginBtn").find("img").attr("src","<?php echo theme_asset("images/login-a.png"); ?>")
            $(".start ").find("img").attr("src","<?php echo theme_asset("images/start.png"); ?>")
            $(".start ").find("a").attr("href","<?php echo e(route('pc.levels',['lang' => 'zh-hk'])); ?>")
            $(".guanka").find("img").attr("src","<?php echo theme_asset("images/choose.png"); ?>")
            $(".guanka ").find("a").attr("href","<?php echo e(route('pc.levels',['lang' => 'zh-hk'])); ?>")
        })
        $(".lau-en").on("click",function(){
            if($(this).hasClass("active2")){
                $(this).removeClass("active2").find("img").attr("src","<?php echo theme_asset("images/en.png"); ?>");;
            }
            $(".lau-cn").addClass("active2").find("img").attr("src","<?php echo theme_asset("images/cno.png"); ?>");;
            $(".loginBtn").find("img").attr("src","<?php echo theme_asset("images/login-b.png"); ?>")
            $(".start ").find("img").attr("src","<?php echo theme_asset("images/start-b.png"); ?>")
            $(".start ").find("a").attr("href","<?php echo e(route('pc.levels',['lang' => 'en'])); ?>")
            $(".guanka").find("img").attr("src","<?php echo theme_asset("images/choose-b.png"); ?>")
            $(".guanka ").find("a").attr("href","<?php echo e(route('pc.levels',['lang' => 'en'])); ?>")


        })
    })
</script>