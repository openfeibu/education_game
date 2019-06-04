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

    <div id="g4-park1">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 65%"><img src="{!! theme_asset_lang("images/g4-1.png") !!}" alt=""></p>
                <br/>
                <div class="btn g1-park1-btn delay-1 gdownIn" style="width: 19.2%"><img src="{!! theme_asset_lang("images/g2-2.png") !!}" alt=""></div>
            </div>
        </div>
    </div>
    <div id="g4-park2">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div class="video_box" >
            <video id="d1" class="video video-position" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="none" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/D1_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g4-park3">
        <div class="question" >
            <div class="question-bg" style="width: 70%;left: 16%;top: 5%">
                <img src="{!! theme_asset_lang("images/g4-2.png") !!}" width="100%" alt="">
                <div class="question-list">
                    <div class="question-item fb-transition grightIn" tid = "A" option_id="10" question_id="5">
                        <img src="{!! theme_asset_lang("images/g4-3.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "B" option_id="11" question_id="5">
                        <img src="{!! theme_asset_lang("images/g4-4.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "C" option_id="12" question_id="5">
                        <img src="{!! theme_asset_lang("images/g4-5.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "D" option_id="13" question_id="5">
                        <img src="{!! theme_asset_lang("images/g4-6.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn question-item-input"  tid = "E" option_id="0" question_id="5">
                        <img src="{!! theme_asset_lang("images/g4-7.png") !!}" width="100%" alt="">
                        <img src="{!! theme_asset_lang("images/g4-7-1.png") !!}" width="100%" alt="" style="display: none;">
                        <input type="text" name="g4-park3-input">
                    </div>
                </div>
                <div class="question-power2 gdownIn fb-clearfix" >
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
            <input type="hidden" name="g4-park3Answer" value="">
            <input type="hidden" name="g4-park3Answer-option-id" value="">
            <input type="hidden" name="g4-park3Answer-question-id" value="">
        </div>

    </div>
    <div id="g4-park3-1">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div class="video_box" >
            <video id="d2" class="video video-position g4-video-item" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="none" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/D2_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g4-park3-2">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div class="video_box" >
            <video id="d3" class="video video-position video-item" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="none" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/D3_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g4-park3-3">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div class="video_box" >
            <video id="d4" class="video video-position video-item" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="none" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/D4_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g4-park3-4">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div class="video_box" >
            <video id="d5" class="video video-position video-item" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="none" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/D5_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g4-park4">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 73%"><img src="{!! theme_asset_lang("images/g4-8.png") !!}" alt=""></p>
                <br/>
                <div class="g4-park4-con" style="width: 73%">
                    <ul class="g4-park4-tab">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                    <div class="g4-park4-card gcenterIn  delay-1" style="width: 100%">
                        <img src="{!! theme_asset_lang("images/g4-9.png") !!}" alt="">
                        <div class="card-item" style="z-index:2"><img src="{!! theme_asset_lang("images/g4-9.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-10.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-11.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-12.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-13.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-14.png") !!}" alt=""></div>
                        <div class="card-item"><img src="{!! theme_asset_lang("images/g4-15.png") !!}" alt=""></div>
                    </div>
                </div>
                <div class="question-power3  fb-clearfix delay-2 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div> 
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>

        </div>

    </div>
    <div id="g4-park5">
        <div class="tips">
            <div class="tips-item">
				<div class="fb-clearfix" style="width: 82%;margin:0 auto">
					<p class="gcenterIn delay" style="width: 78%;position: relative;float:left">
						<img src="{!! theme_asset_lang("images/g4-16.png") !!}" alt="">

						<textarea  id="" cols="30" rows="10" name="g4-park5Answer"></textarea>

					</p>
				<div class="gcenterIn delay" style="width: 22%;position: relative; float:right;text-align:center;margin-top:7%">
                  <div class="zanItem">
                    <img src="{!! theme_asset_lang("images/g4-z1.png") !!}" alt="">
                    <img src="{!! theme_asset_lang("images/g4-z1-a.png") !!}" alt="">
                  </div>
                  <div class="zanItem">
                      <img src="{!! theme_asset_lang("images/g4-z2.png") !!}" alt="">
                      <img src="{!! theme_asset_lang("images/g4-z2-a.png") !!}" alt="">
                      
                  </div>
                  <div class="zanItem">
                    <img src="{!! theme_asset_lang("images/g4-z3.png") !!}" alt="">
                    <img src="{!! theme_asset_lang("images/g4-z3-a.png") !!}" alt="">
                  </div>
                  <div class="zanItem">
                      <img src="{!! theme_asset_lang("images/g4-z4.png") !!}" alt="">
                      <img src="{!! theme_asset_lang("images/g4-z4-a.png") !!}" alt="">
                  </div>
                  <div class="zanItem">
                    <img src="{!! theme_asset_lang("images/g4-z5.png") !!}" alt="">
                    <img src="{!! theme_asset_lang("images/g4-z5-a.png") !!}" alt="">
                  </div>
                  <div class="zanItem">
                      <img src="{!! theme_asset_lang("images/g4-z6.png") !!}" alt="">
                      <img src="{!! theme_asset_lang("images/g4-z6-a.png") !!}" alt="">
                  </div>
                  <div class="zanItem">
                    <img src="{!! theme_asset_lang("images/g4-z7.png") !!}" alt="">
                    <img src="{!! theme_asset_lang("images/g4-z7-a.png") !!}" alt="">
                  </div>

              </div>
                </div>
		
                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/return.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g4-park6">
        <div class="reflect">
            <div class="reflect-1">
                <div class="reflect-item gdownIn reflect-item-1"  style="position: absolute;;width: 6.25%;top: 3.7%;left:69.1%">
                    <img class="reflect-item-img" c="reflect-item-des-1" src="{!! theme_asset_lang("images/1.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-1" style="position: absolute;;width:56%;top: 13%;left:41%">
                    <img src="{!! theme_asset_lang("images/g4-17-1.png") !!}" alt="">
                </div>
                <div class="reflect-item gdownIn reflect-item-2"  style="position: absolute;;width: 6.25%;top: 15.27%;left:43.75%">
                    <img class="reflect-item-img" c="reflect-item-des-2"  src="{!! theme_asset_lang("images/2.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-2" style="position: absolute;;width:42.18%;top: 24.53%;left:40%">
                    <img  src="{!! theme_asset_lang("images/g4-17-2.png") !!}" alt="">
                </div>
                <div class="reflect-item gdownIn reflect-item-3"  style="position: absolute;width: 6.25%;top: 39%;left:33.6%">
                    <img  class="reflect-item-img" c="reflect-item-des-3"  src="{!! theme_asset_lang("images/3.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-3" style="position: absolute;;width:51.56%;top: 47.22%;left:27.8%">
                    <img src="{!! theme_asset_lang("images/g4-17-3.png") !!}" alt="">
                </div>
                <div class="reflect-item gdownIn reflect-item-4" style="position: absolute;width: 7.5%;top: 46.75%;left:69.8%">
                    <img  class="reflect-item-img" c="reflect-item-des-4" src="{!! theme_asset_lang("images/4.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-4" style="position: absolute;;width:51.56%;top: 28%;left:45.5%">
                    <img src="{!! theme_asset_lang("images/g4-17-4.png") !!}" alt="">
                </div>
            </div>
            <div class="reflect-2">
                <div class="reflect-item"  style="position: absolute;;width: 7.5%;top: 45%;left:14%">
                    <img class="reflect-item-img" c="reflect-item-des-5" src="{!! theme_asset_lang("images/5.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-5" style="position: absolute;;width:57.3%;top: 19%;left:10%">
                    <img src="{!! theme_asset_lang("images/g4-17-5.png") !!}" alt="">
                </div>
                <div class="reflect-item"  style="position: absolute;;width: 7.5%;top: 43.5%;left:48.9%">
                    <img class="reflect-item-img" c="reflect-item-des-6"  src="{!! theme_asset_lang("images/6.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-6" style="position: absolute;;width:57.3%;top: 10%;left:23%">
                    <img  src="{!! theme_asset_lang("images/g4-17-6.png") !!}" alt="">
                </div>
                <div class="reflect-item"  style="position: absolute;width: 7.5%;top: 29.6%;left:68.2%">
                    <img  class="reflect-item-img" c="reflect-item-des-7"  src="{!! theme_asset_lang("images/7.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-7" style="position: absolute;;width:57.3%;top: 43%;left:34.2%">
                    <img src="{!! theme_asset_lang("images/g4-17-7.png") !!}" alt="">
                </div>
                <div class="reflect-item" style="position: absolute;width: 7.5%;top: 5.5%;left:84.9%">
                    <img  class="reflect-item-img" c="reflect-item-des-8" src="{!! theme_asset_lang("images/8.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-8" style="position: absolute;;width:67%;top: 15.5%;left:32%">
                    <img src="{!! theme_asset_lang("images/g4-17-8.png") !!}" alt="">
                </div>
            </div>
            <div class="reflect-3">
                <div class="reflect-item"  style="position: absolute;;width: 5.5%;top: 4%;left:57.4%">
                    <img class="reflect-item-img" c="reflect-item-des-9" src="{!! theme_asset_lang("images/9.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-9" style="position: absolute;width:57.3%;top: 12%;left:24.5%">
                    <img src="{!! theme_asset_lang("images/g4-17-9.png") !!}" alt="">
                </div>
                <div class="reflect-item"  style="position: absolute;;width: 7.5%;top:18%;left:66.4%">
                    <img class="reflect-item-img" c="reflect-item-des-10"  src="{!! theme_asset_lang("images/10.png") !!}" alt="">
                </div>
                <div class="reflect-item-des reflect-item-des-10" style="position: absolute;;width:46.8%;top: 27.7%;left:39.2%">
                    <img  src="{!! theme_asset_lang("images/g4-17-10.png") !!}" alt="">
                </div>
                <div class="reflect-item"  style="position: absolute;width: 7.5%;top: 39.8%;left:50%">
                    <img  class="reflect-item-img" c="reflect-item-des-11"  src="{!! theme_asset_lang("images/11.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-11" style="position: absolute;;width:67%;top: 51.8%;left:23%">
                    <img src="{!! theme_asset_lang("images/g4-17-11.png") !!}" alt="">
                </div>
                <div class="reflect-item" style="position: absolute;width: 7.5%;top: 50%;left:85%">
                    <img  class="reflect-item-img" c="reflect-item-des-12" src="{!! theme_asset_lang("images/12.png") !!}" alt="">

                </div>
                <div class="reflect-item-des reflect-item-des-12" style="position: absolute;;width:51.5%;top: 27%;left:45%">
                    <img src="{!! theme_asset_lang("images/g4-17-12.png") !!}" alt="">
                </div>
            </div>
        </div>
        <div class="question-power3  fb-clearfix delay-2 gdownIn">
             <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div> 
            <div class="question-reset bbtn" style="display:none;"><img src="{!! theme_asset_lang("images/return.png") !!}" alt=""></div>
            <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
        </div>
    </div>
    <div id="g4-park7">
        <div class="tips">
            <div class="tips-item">
                <div class="g1-result game-result  gcenterIn" style="width: 26.2%" ><img src="{!! theme_asset_lang("images/g4-result.png") !!}" width="100%" alt=""></div>
                <br>
                <div class="question-power3  fb-clearfix  delay-1 gdownIn" style="margin-top: 0">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn" ><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
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
    function g4Park1In(){
        $("#g4-park1").fadeIn()
    }
    function g4Park1Out(){
        $("#g4-park1").hide()
    }
    function g4Park2In(){
        $("#g4-park2").fadeIn();


    }
    function g4Park2Out(){
        $("#g4-park2").hide();

    }
    function g4Park3In(){
        $("#g4-park3").fadeIn();

    }
    function g4Park3Out(){
        $("#g4-park3").hide();

    }
    function g4Park3_1In(){
        $("#g4-park3-1").fadeIn().find("video")[0].play();

    }
    function g4Park3_2In(){
        $("#g4-park3-2").fadeIn().find("video")[0].play();

    }
    function g4Park3_3In(){
        $("#g4-park3-3").fadeIn().find("video")[0].play();

    }
    function g4Park3_4In(){
        $("#g4-park3-4").fadeIn().find("video")[0].play();

    }
    function g4Park3_Out(){
        $("#g4-park3-1,#g4-park3-2,#g4-park3-3,#g4-park3-4").hide();

    }
    function g4Park4In(){
        $("#g4-park4").fadeIn();
    }
    function g4Park4Out(){
        $("#g4-park4").hide();

    }
    function g4Park5In(){
        $("#g4-park5").fadeIn();

    }
    function g4Park5Out(){
        $("#g4-park5").fadeOut();

    }
    function g4Park6In(){
        $("#g4-park6").fadeIn();

    }
    function g4Park6Out(){
        $("#g4-park6").hide();

    }
    function g4Park7In(){
        $("#g4-park7").fadeIn();

    }
    function g4Park7Out(){
        $("#g4-park7").hide();

    }

    var timer = null;
    var n = 0;
    loadingNum();
    function loadingNum(){
        timer = setInterval(function(){
            var count = $(".video").length;
			var maxM = parseInt((n/count)*100); 
			var num = parseInt($("#loading p span").text());
			num = ++num > maxM ? maxM : num;
            $("#loading p span").text(num)
        },200)
    }
    // 判断视频是否完全加载完毕
	
	go()
    function go(){
        var count = $(".video").length;
       
        if( n == count){
            //  开始
            clearInterval(timer);
            hideLaoding();
            g4Park1In();
        }else{
            $(".video").eq(n).attr("preload","auto")
        }
		 ++n;
    }
    // 判断视频是否完全加载完毕
    //视频卡顿提醒
    function videoWaiting(){
        fbAlert("{{ trans('messages.video_loading') }}",3000)
    }
    //视频卡顿提醒
    //第一步 缓存视频
    var g4Video ={};
    $(".video").each(function(k,v){
        g4Video[k] = $(v)[0];
        g4Video[k].addEventListener('canplaythrough',function(){
            go();
        });
        g4Video[k].addEventListener('ended',function () {
            g4Video[k].removeEventListener('waiting',videoWaiting)
        });
        g4Video[k].addEventListener('waiting',videoWaiting)
    })
    $("#g4-park1 .g1-park1-btn").on("click",function(){
        g4Park1Out()
        g4Park2In()
        $("#d1")[0].play();
    })
    //第二步
    $("#d1")[0].addEventListener('ended',function () {
        g4Park2Out();
        g4Park3In();
        $("#d1")[0].removeEventListener('waiting',videoWaiting)
    });
    $("#g4-park2 .jump").on("click",function(){
        var videoE = $(this).parents("#g4-park2").find("video")[0];
        videoE.pause();
        videoE.currentTime = 0;
        g4Park2Out();
        g4Park3In();
    })

    //第三步
    $("#g4-park3 .question-item").on("click",function(){
        var n = $(this).attr("tid");
        var option_id = $(this).attr("option_id");
        var question_id = $(this).attr("question_id");
        $("[name='g4-park3Answer']").val(n);
        $("[name='g4-park3Answer-option-id']").val(option_id);
        $("[name='g4-park3Answer-question-id']").val(question_id);
        //提交答案
        $(this).addClass("active").siblings(".question-item").removeClass("active")
    })

    $("#g4-park3 .question .question-list .question-item-input input").on('input propertychange',function(){
        var v = $(this).val();
        if(v.length != 0){
            $(this).parents(".question-item-input").find("img").eq(0).hide().siblings("img").show()
        }else{
            $(this).parents(".question-item-input").find("img").eq(1).hide().siblings("img").show()
        }
    })
    $("#g4-park3 .question-reset").on("click",function(){
        //重播
        g4Park2In();
        g4Park3Out();
        $("#d1")[0].play();
    })
    $("#g4-park3 .question-last").on("click",function(){
        var p4answer = $("[name='g4-park3Answer']").val();
        var option_id = $("[name='g4-park3Answer-option-id']").val();
        var question_id = $("[name='g4-park3Answer-question-id']").val();
        var answer ='';
        console.log(option_id,question_id)
        if(p4answer.length == 0){
            fbAlert("{{ trans('messages.choose_option') }}");
            return false;
        }
        if(p4answer =="A"){
            g4Park3Out()
            g4Park3_1In()
        }else if(p4answer == "B"){
            g4Park3Out()
            g4Park3_2In()
        }else if(p4answer == "C"){
            g4Park3Out()
            g4Park3_3In()
        }else if(p4answer == "D"){
            g4Park3Out()
            g4Park3_4In()
        }else if(p4answer == "E"){
            if($("[name='g4-park3-input']").val().length == 0){
                fbAlert("{{ trans('messages.enter_e_answer') }}");
                answer = $("[name='g4-park3-input']").val();
                return false;
            }else{
                g4Park3Out();
                g4Park4In();
            }
        }else{
            fbAlert("{{ trans('messages.choose_option') }}");
        }
        submit_option(question_id,option_id,answer);
    })
    $("#d2")[0].addEventListener('ended',function () {
        g4Park3_Out();
        g4Park4In();
        $("#d2")[0].removeEventListener('waiting',videoWaiting)
    });
    $("#d3")[0].addEventListener('ended',function () {
        g4Park3_Out();
        g4Park4In();
        $("#d3")[0].removeEventListener('waiting',videoWaiting)
    });
    $("#d4")[0].addEventListener('ended',function () {
        g4Park3_Out();
        g4Park4In();
        $("#d4")[0].removeEventListener('waiting',videoWaiting)
    });
    $("#d5")[0].addEventListener('ended',function () {
        g4Park3_Out();
        g4Park4In();
        $("#d5")[0].removeEventListener('waiting',videoWaiting)
    });
    $("#g4-park3-1 .jump").on("click",function(){
        var videoE = $(this).parents("#g4-park3-1").find("video")[0];
        videoE.pause();
        videoE.currentTime = 0;
        g4Park3_Out();
        g4Park4In();
    })
    $("#g4-park3-2 .jump").on("click",function(){
        var videoE = $(this).parents("#g4-park3-2").find("video")[0];
        videoE.pause();
        videoE.currentTime = 0;
        g4Park3_Out();
        g4Park4In();
    })
    $("#g4-park3-3 .jump").on("click",function(){
        var videoE = $(this).parents("#g4-park3-3").find("video")[0];
        videoE.pause();
        videoE.currentTime = 0;
        g4Park3_Out();
        g4Park4In();
    })
    $("#g4-park3-4 .jump").on("click",function(){
        var videoE = $(this).parents("#g4-park3-4").find("video")[0];
        videoE.pause();
        videoE.currentTime = 0;
        g4Park3_Out();
        g4Park4In();
    })
    //第四步
    $("#g4-park4 .g4-park4-tab li").on("click",function(){
        var i = $(this).index("#g4-park4 .g4-park4-tab li");
        $("#g4-park4 .card-item").eq(i).css("z-index",2).siblings(".card-item").css("z-index",1)
    })
    $("#g4-park4 .question-last").on("click",function(){
        g4Park4Out();
        g4Park5In();
    })
	$("#g4-park4 .question-reset").on("click",function(){
        //重来
        g4Park3In();
        g4Park4Out();
     
    })
    //第五步
    $("#g4-park5 .question-reset").on("click",function(){
        g4Park5Out();
        g4Park4In();
    })
    $("#g4-park5 .question-last").on("click",function(){
        var answer = $("[name='g4-park5Answer']").val();
        if(answer.length == 0){
            fbAlert("{{ trans('messages.enter_answer') }}");
            return false;
        }
        submit_option(5,0,answer);
        g4Park5Out();
        g4Park6In();
    })
    //第五步
    $(".reflect").on("click",function(e){
        var c = $(e.target).attr("c");
        if(c){
            if($("."+c).css("display") != "block"){
                $("."+c).fadeIn(200).siblings(".reflect-item-des").fadeOut(200);
            }
        }else{
            $(".reflect-item-des").fadeOut(200);
        }
    })
    var step = 1;
    $("#g4-park6 .question-power3 .question-last").on("click",function(){
        if(step == 1){
            $(".reflect-1").animate({left:"-100%"})
            $(".reflect-2").animate({left:0})
            $(".reflect-3").animate({left:'100%'})
			$("#g4-park6 .question-power3 .question-reset").show();
        }else if(step == 2){
            $(".reflect-1").animate({left:"-200%"})
            $(".reflect-2").animate({left:'-100%'})
            $(".reflect-3").animate({left:0})
			$("#g4-park6 .question-power3 .question-reset").show();
        }else if(step == 3){
            g4Park6Out();
            g4Park7In();
			step = 0;
			$(".reflect-1").animate({left:0})
            $(".reflect-2").animate({left:'100%'})
            $(".reflect-3").animate({left:'200%'})
			$("#g4-park6 .question-power3 .question-reset").hide();
        }else{
            return false;
        }
		
        step++;
    })
    $("#g4-park6 .question-power3 .question-reset").on("click",function(){
        if(step == 3){
            $(".reflect-1").animate({left:"-100%"})
            $(".reflect-2").animate({left:0})
            $(".reflect-3").animate({left:'100%'})
			$("#g4-park6 .question-power3 .question-reset").show();
        }else if(step == 2){
            $(".reflect-1").animate({left:0})
            $(".reflect-2").animate({left:'100%'})
            $(".reflect-3").animate({left:'200%'})
			$("#g4-park6 .question-power3 .question-reset").hide();
        }else{
            return false;
        }
        step--;
    })
    //重来
    //dian zan
	 $("#g4-park5 .zanItem").on("click",function(){
		$(this).toggleClass("active")
		})


    //结束
    $("#g4-park7 .question-reset").on("click",function(){
        g4Park1In();
        g4Park7Out();

    })
    $("#g4-park7 .question-last").on("click",function(){
        window.location.href="{{ route('pc.home') }}"

    })
</script>
