
<body class="g2Bg">
<section id="main">
    <div id="loading">
        <div class="loader">
            <div class="loader-inner pacman">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p> {{ trans('app.loading') }}... <br> <span>1</span>%</p>
        </div>

    </div>

    <div id="g3-park1">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 34.6%"><img src="{!! theme_asset_lang("images/g3-1.png") !!}" alt=""></p>
                <br/>
                <div class="btn c1-btn delay-1 gdownIn" style="width: 19.2%"><img src="{!! theme_asset_lang("images/g2-2.png") !!}" alt=""></div>
            </div>
        </div>
    </div>
    <div id="g3-park2">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="video_box" >
            <video id="c1" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C1_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g3-park3">
        <div class="question" >
            <div class="question-bg" style="width: 68.1%;left: 16%;top: 10%">
                <img src="{!! theme_asset_lang("images/g3-2.png") !!}" width="100%" alt="">
                <div class="question-list">
                    <div class="question-item fb-transition grightIn" tid = "A" option_id="5" question_id="3">
                        <img src="{!! theme_asset_lang("images/g3-3.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "B" option_id="6" question_id="3">
                        <img src="{!! theme_asset_lang("images/g3-4.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "C" option_id="7" question_id="3">
                        <img src="{!! theme_asset_lang("images/g3-5.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "D" option_id="8" question_id="3">
                        <img src="{!! theme_asset_lang("images/g3-6.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "E" option_id="9" question_id="3">
                        <img src="{!! theme_asset_lang("images/g3-7.png") !!}" width="100%" alt="">
                    </div>
                </div>
                <div class="question-power2 gdownIn fb-clearfix" >
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
            <div class="question-power2 gdownIn fb-clearfix" >
                <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
            </div>
            <input type="hidden" name="g3-park3Answer" value="">
            <input type="hidden" name="g3-park3Answer-option-id" value="">
        </div>

    </div>
    <div id="g3-park4">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="c2-box" class="video-box" >
            <video id="c2" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C2_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g3-park5">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="c3-box" class="video-box" >
            <video id="c3" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C3_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g3-park6">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="c4-box" class="video-box" >
            <video id="c4" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C4_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g3-park7">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="c5-box" class="video-box" >
            <video id="c5" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C5_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g3-park8">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="c6-box" class="video-box" >
            <video id="c6" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/C6_batch.mp4") !!}"></video>
        </div>
    </div>

    <div id="g3-park9">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn delay-1" style="width:65.6%"><img src="{!! theme_asset_lang("images/g3-8.png") !!}" alt=""></p>

                <br/>
                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g3-park10">
        <div class="tips">
            <div class="tips-item">
                <div class="game-result gcenterIn " style="width: 26.2%" ><img src="{!! theme_asset_lang("images/g3-result.png") !!}" width="100%" alt=""></div>
                <br>

                <div class="question-power3  fb-clearfix  delay-1 gdownIn" style="margin-top: 0">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>


</section>

</body>
<script>
    // g2Park1In();
    function hideLaoding(){
        $("#loading").hide()
    }
    function g3Park1In(){
        $("#g3-park1").fadeIn()
    }
    function g3Park1Out(){
        $("#g3-park1").hide()
    }
    function g3Park2In(){
        $("#g3-park2").fadeIn();


    }
    function g3Park2Out(){
        $("#g3-park2").hide();

    }
    function g3Park3In(){
        $("#g3-park3").fadeIn();

    }
    function g3Park3Out(){
        $("#g3-park3").hide();

    }
    function g3Park4In(){
        $("#g3-park4").fadeIn();

    }
    function g3Park4Out(){
        $("#g3-park4").hide();

    }
    function g3Park5In(){
        $("#g3-park5").fadeIn();

    }
    function g3Park5Out(){
        $("#g3-park5").fadeOut();

    }
    function g3Park6In(){
        $("#g3-park6").fadeIn();

    }
    function g3Park6Out(){
        $("#g3-park6").hide();

    }
    function g3Park7In(){
        $("#g3-park7").fadeIn();

    }
    function g3Park7Out(){
        $("#g3-park7").hide();

    }
    function g3Park8In(){
        $("#g3-park8").fadeIn();

    }
    function g3Park8Out(){
        $("#g3-park8").hide();

    }
    function g3Park9In(){
        $("#g3-park9").fadeIn();

    }
    function g3Park9Out(){
        $("#g3-park9").hide();

    }
    function g3Park10In(){
        $("#g3-park10").fadeIn();

    }
    function g3Park10Out(){
        $("#g3-park10").hide();

    }
    var timer = null;
    var n = 0;
    loadingNum();
    function loadingNum(){
        timer = setInterval(function(){
            var n = parseInt($("#loading p span").text());
            n = ++n > 99 ? 99 : n;
            $("#loading p span").text(n)
        },500)
    }
    // 判断视频是否完全加载完毕
    function go(){
        var count = $(".video").length;
        ++n;
        console.log(n)
        if( n == count){
            //  开始
            clearInterval(timer);
            hideLaoding();
            g3Park1In();
        }
    }
    // 判断视频是否完全加载完毕
    //视频卡顿提醒
    function videoWaiting(){
        fbAlert("網絡有點卡頓，正在緩衝中。結束後可點左下角重新播放視頻哦",3000)
    }
    //视频卡顿提醒
    //第二部 s
    videoElem = document.getElementById('c1');
    videoElem.addEventListener('canplaythrough',cacheFun1);
    videoElem.addEventListener('ended',function () {
        g3Park2Out();
        g3Park3In();
        videoElem.removeEventListener('waiting',videoWaiting)
    });
    videoElem.addEventListener('waiting',videoWaiting)
    function cacheFun1(){
        go();
        $(".c1-btn").on("click",function(){
            g3Park1Out()
            g3Park2In()
            videoElem.play()

        })
        videoElem.removeEventListener("canplaythrough",cacheFun1);
    }
    //第二部 e
    //第三步 s

    $("#g3-park3 .question-item").on("click",function(){
        var n = $(this).attr("tid");
        var option_id = $(this).attr("option_id");
        $("[name='g3-park3Answer']").val(n);
        $("[name='g3-park3Answer-option-id']").val(option_id);
        //提交答案
        $(this).addClass("active").siblings(".question-item").removeClass("active")
    })
    $("#g3-park3 .question-reset").on("click",function(){
        //重播
        g3Park2In();
        g3Park3Out();
        videoElem.play()
    })
    $("#g3-park3 .question-last").on("click",function(){
        var p3answer = $("[name='g3-park3Answer']").val();
        var p3answer_option_id = $("[name='g3-park3Answer-option-id']").val();
        if(p3answer.length == 0){
            fbAlert("{{ trans('messages.choose_option') }}");
            return false;
        }
        console.log(p3answer)
        if(p3answer == "A"){
            g3Park3Out()
            g3Park4In()
            videoElem2.play()
        }else if(p3answer == "B"){
            g3Park3Out()
            g3Park5In()
            videoElem3.play()
        }else if(p3answer == "C"){
            g3Park3Out()
            g3Park6In()
            videoElem4.play()
        }else if(p3answer == "D"){
            g3Park3Out()
            g3Park7In()
            videoElem5.play()
        }else if(p3answer == "E"){
            g3Park3Out()
            g3Park8In()
            videoElem6.play()
        }else{
            fbAlert("{{ trans('messages.choose_option') }}");
        }
        submit_option(p3answer_option_id);
        // g2Park3Out()
        // g2Park4In()
        // videoElem2.play()

    })
    //第三步 e
    //第四步 s
    videoElem2 = document.getElementById('c2');
    videoElem2.addEventListener('canplaythrough',cacheFun2);
    videoElem2.addEventListener('ended',function () {
        g3Park4Out()
        g3Park9In()
        videoElem2.removeEventListener('waiting',videoWaiting)
    });
    videoElem2.addEventListener('waiting',videoWaiting)
    function cacheFun2(){
        go();
        console.log("c2")

        videoElem2.removeEventListener("canplaythrough",cacheFun2);
    }
    videoElem3 = document.getElementById('c3');
    videoElem3.addEventListener('canplaythrough',cacheFun3);
    videoElem3.addEventListener('ended',function () {
        g3Park5Out()
        g3Park9In()
        videoElem3.removeEventListener('waiting',videoWaiting)
    });
    videoElem3.addEventListener('waiting',videoWaiting)
    function cacheFun3(){
        go();
        console.log("c3")

        videoElem3.removeEventListener("canplaythrough",cacheFun3);
    }
    videoElem4 = document.getElementById('c4');
    videoElem4.addEventListener('canplaythrough',cacheFun4);
    videoElem4.addEventListener('ended',function () {
        g3Park6Out()
        g3Park9In()
        videoElem4.removeEventListener('waiting',videoWaiting)
    });
    videoElem4.addEventListener('waiting',videoWaiting)
    function cacheFun4(){
        go();
        console.log("c4")

        videoElem4.removeEventListener("canplaythrough",cacheFun4);
    }
    videoElem5 = document.getElementById('c5');
    videoElem5.addEventListener('canplaythrough',cacheFun5);
    videoElem5.addEventListener('ended',function () {
        g3Park7Out()
        g3Park9In()
        videoElem5.removeEventListener('waiting',videoWaiting)
    });
    videoElem5.addEventListener('waiting',videoWaiting)
    function cacheFun5(){
        go();
        console.log("c5")

        videoElem5.removeEventListener("canplaythrough",cacheFun5);
    }
    videoElem6 = document.getElementById('c6');
    videoElem6.addEventListener('canplaythrough',cacheFun6);
    videoElem6.addEventListener('ended',function () {
        g3Park8Out()
        g3Park9In()
        videoElem6.removeEventListener('waiting',videoWaiting)
    });
    videoElem6.addEventListener('waiting',videoWaiting)
    function cacheFun6(){
        console.log("c6")
        go();

        videoElem6.removeEventListener("canplaythrough",cacheFun6);
    }
    //第四步 e
    //第五步 s
    $("#g3-park9 .question-reset").on("click",function(){
        g3Park3In();
        g3Park9Out();

    })

    $("#g3-park9 .question-last").on("click",function(){
        g3Park9Out();
        g3Park10In();

    })
    //第五步 e
    //第六步 s

    $("#g3-park10 .question-reset").on("click",function(){
        g3Park1In();
        g3Park10Out();

    })
    $("#g3-park9 .question-last").on("click",function(){
        // window.location.href="game4.html"

    });
    $("#g3-park2 .jump").on("click",function(){
        videoElem.pause();
        videoElem.currentTime = 0;
        g3Park2Out();
        g3Park3In();
    })
    $("#g3-park4 .jump").on("click",function(){
        videoElem2.pause();
        videoElem2.currentTime = 0;
        g3Park4Out()
        g3Park9In()
    })
    $("#g3-park5 .jump").on("click",function(){
        videoElem3.pause();
        videoElem3.currentTime = 0;
        g3Park5Out()
        g3Park9In()
    })
    $("#g3-park6 .jump").on("click",function(){
        videoElem4.pause();
        videoElem4.currentTime = 0;
        g3Park6Out()
        g3Park9In()
    })
    $("#g3-park7 .jump").on("click",function(){
        videoElem5.pause();
        videoElem5.currentTime = 0;
        g3Park7Out()
        g3Park9In()
    })
    $("#g3-park8 .jump").on("click",function(){
        videoElem6.pause();
        videoElem6.currentTime = 0;
        g3Park8Out()
        g3Park9In()
    })
</script>

