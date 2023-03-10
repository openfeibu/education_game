
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

    <div id="g2-park1">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 50.7%"><img src="{!! theme_asset_lang("images/g2-1.png") !!}" alt=""></p>
                <br/>
                <div class="btn g2-park1-btn delay-1 gdownIn" style="width: 19.2%"><img src="{!! theme_asset_lang("images/g2-2.png") !!}" alt=""></div>
            </div>
        </div>
    </div>
    <div id="g2-park2">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="video_box" >
            <video id="g2-park2-video" class="video" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/B1_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g2-park3">
        <div class="question" >
            <div class="question-bg" style="width: 60%">
                <img src="{!! theme_asset_lang("images/g2-3.png") !!}" width="100%" alt="">
                <div class="question-list">
                    <div class="question-item fb-transition grightIn" tid = "A" option_id="1" question_id="1">
                        <img src="{!! theme_asset_lang("images/g2-4.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "B" option_id="2" question_id="1">
                        <img src="{!! theme_asset_lang("images/g2-5.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "C" option_id="3" question_id="1">
                        <img src="{!! theme_asset_lang("images/g2-6.png") !!}" width="100%" alt="">
                    </div>
                    <div class="question-item fb-transition grightIn"  tid = "D" option_id="4" question_id="1">
                        <img src="{!! theme_asset_lang("images/g2-7.png") !!}" width="100%" alt="">
                    </div>
                </div>
                <div class="question-power2 gdownIn fb-clearfix">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
            <input type="hidden" name="g2-park3Answer" value="">
            <input type="hidden" name="g2-park3Answer-option-id" value="">
            <input type="hidden" name="g2-park3Answer-question-id" value="">
        </div>

    </div>
    <div id="g2-park3-1">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 50.7%"><img src="{!! theme_asset_lang("images/g2-8-1.png") !!}" alt=""></p>
                <br/>
                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g2-park3-2">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn" style="width: 50.7%"><img src="{!! theme_asset_lang("images/g2-8-2.png") !!}" alt=""></p>
                <br/>
                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g2-park4">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="video_box-park4" >
            <video id="g2-park4-video" class="video" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/B2_batch.mp4") !!}"></video>
        </div>
    </div>
    <div id="g2-park5">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn delay-1" style="width: 56%"><img src="{!! theme_asset_lang("images/g2-9.png") !!}" alt=""></p>
                <br>
                <p class="gcenterIn delay-2" style="width: 56%"><img src="{!! theme_asset_lang("images/g2-10.png") !!}" alt=""></p>
                <br/>
                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g2-park6">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn delay-1" style="width: 71.1%"><img src="{!! theme_asset_lang("images/g2-11.png") !!}" width="100%" alt=""></p>
                <br>
                <p class="gcenterIn delay-2" style="width: 30.4%"><img src="{!! theme_asset_lang("images/g2-12.png") !!}" width="100%" alt=""></p>
                <br/>
                <div class="question-power3  fb-clearfix delay-1 gdownIn" >
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div id="g2-park7">
        <div class="jump bbtn" style="width: 13.7%"><img src="{!! theme_asset_lang("images/jump.png") !!}" alt=""></div>
        <div id="video_box-park7" >
            <video id="g2-park7-video" class="video" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/B3_batch.mp4") !!}"></video>
        </div>
    </div>
	 <div id="g2-park8">
          <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn delay-1" style="width: 48.6%"><img src="{!! theme_asset_lang("images/g2-13-1.png") !!}" width="100%" alt=""></p>
              <br>
              <p class="gcenterIn  g2-park8-ckda" style="width: 48.6%;display: none;"><img src="{!! theme_asset_lang("images/g2-13-2.png") !!}" width="100%" alt=""></p>
              <br>
            <div class="btn g2-park8-btn delay-1 gdownIn" style="width: 14.9%"><img src="{!! theme_asset_lang("images/ckda.png") !!}" alt=""></div>
            
            
                <div class="question-power3  fb-clearfix  gdownIn" style="display: none;">
                  <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
              </div>
           
            </div>
          </div>
        </div>
        <div id="g2-park8-1">
          <div class="tips">
            <div class="tips-item">
              <p class="gcenterIn delay" style="width: 64.3%;position: relative;">
               
				<img src="{!! theme_asset_lang("images/g2-14.png") !!}" alt=""/>
                   <textarea  id="" cols="30" rows="10" name="g2-park8Answer" question_id="2"></textarea>
              </p>
              <br/>
             
              <div class="question-power3  fb-clearfix delay-1 gdownIn">
                 <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
              </div>
            </div>
          </div>
        </div>
   <!-- <div id="g2-park8">
        <div class="tips">
            <div class="tips-item">
                <p class="gcenterIn delay-1" style="width: 64.3%"><img src="{!! theme_asset_lang("images/g2-13.png") !!}" width="100%" alt=""></p>
                <br>
                <p class="gcenterIn delay-2" style="width: 64.3%;position: relative;">
                    <img src="{!! theme_asset_lang("images/g2-14.png") !!}" alt="">

                    <textarea  id="" cols="30" rows="10" name="g2-park8Answer" question_id="2"></textarea>

                </p>
                <br/>

                <div class="question-power3  fb-clearfix delay-1 gdownIn">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>-->
    <div id="g2-park9">
        <div class="tips">
            <div class="tips-item">
                <div class="g2-result gcenterIn" style="width: 26.2%" ><img src="{!! theme_asset_lang("images/g2-result.png") !!}" width="100%" alt=""></div>
                <br>

                <div class="question-power3  fb-clearfix  delay-1 gdownIn" style="margin-top: 0">
                    <div class="question-home bbtn"><a href="{{ route('pc.home') }}"><img src="{!! theme_asset_lang("images/home.png") !!}" alt=""></a></div>
                    <div class="question-reset bbtn"><img src="{!! theme_asset_lang("images/reset.png") !!}" alt=""></div>
                    <div class="question-last bbtn"><img src="{!! theme_asset_lang("images/last.png") !!}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="video_box" style="opacity: 0">
      <video id="byl_video" style="object-fit:fill;"  width="100%" htyle="object-fit:fill;"  width="100%" height="100%"  preload="auto" playsinline="true" webkit-playsinline="true" x-webkit-airplay="allow" airplay="allow"  x5-video-orientation="portrait" x5-video-player-type="h5" x5-video-player-fullscreen="true" src="{!! theme_asset_lang("video/2.mp4") !!}"></video>
    </div>

    <canvas class="dynaLayer__canvas video_welcome" width="1920" height="1080" id="canvas"></canvas> -->

</section>


</body>
<script>
    // g2Park1In();
    function hideLaoding(){
        $("#loading").hide()
    }
    function g2Park1In(){
        $("#g2-park1").fadeIn()
    }
    function g2Park1Out(){
        $("#g2-park1").hide()
    }
    function g2Park2In(){
        $("#g2-park2").fadeIn();


    }
    function g2Park2Out(){
        $("#g2-park2").hide();

    }
    function g2Park3In(){
        $("#g2-park3").fadeIn();

    }
    function g2Park3Out(){
        $("#g2-park3").hide();

    }
    function g2Park3_1In(){
        $("#g2-park3-1").fadeIn();

    }
    function g2Park3_1Out(){
        $("#g2-park3-1").hide();

    }
    function g2Park3_2In(){
        $("#g2-park3-2").fadeIn();

    }
    function g2Park3_2Out(){
        $("#g2-park3-2").hide();
    }
    function g2Park4In(){
        $("#g2-park4").fadeIn();
    }
    function g2Park4Out(){
        $("#g2-park4").hide();

    }
    function g2Park5In(){
        $("#g2-park5").fadeIn();

    }
    function g2Park5Out(){
        $("#g2-park5").fadeOut();

    }
    function g2Park6In(){
        $("#g2-park6").fadeIn();

    }
    function g2Park6Out(){
        $("#g2-park6").hide();

    }
    function g2Park7In(){
        $("#g2-park7").fadeIn();

    }
    function g2Park7Out(){
        $("#g2-park7").hide();

    }
    function g2Park8In(){
        $("#g2-park8").fadeIn();

    }
    function g2Park8Out(){
        $("#g2-park8").hide();

    }
	function g2Park8_1In(){
        $("#g2-park8-1").fadeIn();

    }
    function g2Park8_1Out(){
        $("#g2-park8-1").hide();

    }
    function g2Park9In(){
        $("#g2-park9").fadeIn();

    }
    function g2Park9Out(){
        $("#g2-park9").hide();

    }

    var timer = null;
    var n = 1;
    loadingNum();
    function loadingNum(){
        timer = setInterval(function(){
            var count = $(".video").length;
			var maxM = parseInt((n/count)*100); 
			console.log(maxM)
			var num = parseInt($("#loading p span").text());
			num = ++num > maxM ? maxM : num;
            $("#loading p span").text(num)
        },100)
    }
    // ????????????????????????????????????
    function go(){
        var count = $(".video").length;  
        if( n == count){
            //  ??????
		  $("#loading p span").text(100)
            clearInterval(timer);
            hideLaoding();
            g2Park1In();
        }
		++n;
    }
    // ????????????????????????????????????
    //??????????????????
    function videoWaiting(){
        fbAlert("{{ trans('messages.video_loading') }}",3000)
    }
    //??????????????????
    //????????? s
    videoElem = document.getElementById('g2-park2-video');
    videoElem.addEventListener('canplaythrough',cacheFun1);
    videoElem.addEventListener('ended',function () {
        g2Park2Out();
        g2Park3In();
        videoElem.removeEventListener('waiting',videoWaiting)
    });
    videoElem.addEventListener('waiting',videoWaiting)
    function cacheFun1(){
        go();
        $(".g2-park1-btn").fadeIn(200)
        $(".g2-park1-btn").on("click",function(){
            g2Park1Out()
            g2Park2In()
            videoElem.play()

        })
        videoElem.removeEventListener("canplaythrough",cacheFun1);
    }
    //????????? e
    //????????? s

    $("#g2-park3 .question-item").on("click",function(){
        var n = $(this).attr("tid");
        var option_id = $(this).attr("option_id");
        var question_id = $(this).attr("question_id");
        $("[name='g2-park3Answer']").val(n);
        $("[name='g2-park3Answer-option-id']").val(option_id);
        $("[name='g2-park3Answer-question-id']").val(question_id);
        //????????????
        $(this).addClass("active").siblings(".question-item").removeClass("active")
    })
    $("#g2-park3 .question-reset").on("click",function(){
        //??????
        g2Park2In();
        g2Park3Out();
        videoElem.play()
    })
    //????????? e
    //????????? s
    videoElem2 = document.getElementById('g2-park4-video');
    videoElem2.addEventListener('canplaythrough',cacheFun2);
    videoElem2.addEventListener('ended',function () {
        g2Park4Out();
        g2Park5In();
        videoElem2.removeEventListener('waiting',videoWaiting)
    });
    videoElem2.addEventListener('waiting',videoWaiting)
    function cacheFun2(){
        go();
        $("#g2-park3 .question-last").on("click",function(){
            var p3answer = $("[name='g2-park3Answer']").val();
            var p3answer_option_id = $("[name='g2-park3Answer-option-id']").val();
            var p3answer_question_id = $("[name='g2-park3Answer-question-id']").val();
            if(p3answer.length == 0){
                fbAlert("{{ trans('messages.choose_option') }}");
                return false;
            }
            if(p3answer =="A" || p3answer =="B" || p3answer =="C"  ){
                g2Park3Out()
                g2Park3_1In()
            }else if(p3answer == "D"){
                g2Park3Out()
                g2Park3_2In()
            }else{
                fbAlert("{{ trans('messages.choose_option') }}");
            }
            submit_option(p3answer_question_id,p3answer_option_id,'');
        })
        videoElem2.removeEventListener("canplaythrough",cacheFun2);
    }
    $("#g2-park3-1 .question-reset").on("click",function(){
        //??????
        g2Park2In();
        g2Park3_1Out();
        videoElem.play()
    })
    $("#g2-park3-2 .question-reset").on("click",function(){
        //??????
        g2Park2In();
        g2Park3_2Out();
        videoElem.play()
    })
    $("#g2-park3-1 .question-last").on("click",function(){
        g2Park4In();
        g2Park3_1Out();
        videoElem2.play()
    })
    $("#g2-park3-2 .question-last").on("click",function(){
        g2Park4In();
        g2Park3_2Out();
        videoElem2.play()
    })
    //????????? e
    //????????? s
    $("#g2-park5 .question-reset").on("click",function(){
        g2Park4In();
        g2Park5Out();
        videoElem2.play()
    })
    $("#g2-park6 .question-reset").on("click",function(){
        g2Park4In();
        g2Park6Out();
        videoElem2.play()
    })
    $("#g2-park5 .question-last").on("click",function(){
        g2Park5Out();
        g2Park6In();

    })
    //????????? e
    //????????? s
    videoElem3 = document.getElementById('g2-park7-video');
    videoElem3.addEventListener('canplaythrough',cacheFun3);
    videoElem3.addEventListener('ended',function () {
        g2Park7Out();
        g2Park8In();
        videoElem3.removeEventListener('waiting',videoWaiting)

    });
    videoElem3.addEventListener('waiting',videoWaiting)
    function cacheFun3(){
        go();
        $("#g2-park6 .question-last").on("click",function(){
            g2Park6Out()
            g2Park7In()
            videoElem3.play()

        })
        videoElem3.removeEventListener("canplaythrough",cacheFun3);
    }
    //????????? e
    //????????? s
	
    $("#g2-park8 .g2-park8-btn").on("click",function(){
      $("#g2-park8 .g2-park8-ckda,#g2-park8 .question-power3").show();
      $(this).hide();
    })
    $("#g2-park8 .question-reset").on("click",function(){
      g2Park7In();
      g2Park8Out();
      videoElem3.play()
      $("#g2-park8 .g2-park8-ckda,#g2-park8 .question-power3").hide();
      $("#g2-park8 .g2-park8-btn").show();
    })
    $("#g2-park8 .question-last").on("click",function(){
      g2Park8_1In();
      g2Park8Out();
      $("#g2-park8 .g2-park8-ckda,#g2-park8 .question-power3").hide();
      $("#g2-park8 .g2-park8-btn").show();
    })

  
	
    $("#g2-park8-1 .question-last").on("click",function(){
        var p8answer = $("[name='g2-park8Answer']").val();
        if(p8answer.length == 0){
            fbAlert("{{ trans('messages.enter_answer') }}");
            return false;
        }
        submit_option(2,0,p8answer);
        g2Park8_1Out();
        g2Park9In();

    })
    $("#g2-park8-1 .question-reset").on("click",function(){
        g2Park7In();
        g2Park8_1Out();
        videoElem3.play()
    })
    //????????? e
    //??????
    $("#g2-park9 .question-reset").on("click",function(){
        g2Park1In();
        g2Park9Out();

    })
    $("#g2-park9 .question-last").on("click",function(){
        window.location.href="{{ route('pc.level.level_three') }}"

    });
    $("#g2-park2 .jump").on("click",function(){
        videoElem.pause();
        videoElem.currentTime = 0;
        g2Park2Out();
        g2Park3In();
    })
    $("#g2-park4 .jump").on("click",function(){
        videoElem2.pause();
        videoElem2.currentTime = 0;
        g2Park4Out();
        g2Park5In();
    })
    $("#g2-park7 .jump").on("click",function(){
        videoElem3.pause();
        videoElem3.currentTime = 0;
        g2Park7Out();
        g2Park8In();
    })
</script>
