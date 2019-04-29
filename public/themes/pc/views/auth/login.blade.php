<body  class="g2Bg">
<section id="main">
    <div class="login-form">
        <form action=""onSubmit="return login_form()" id="login_form">
            <div class="login-input fb-clearfix">
                <label for=""><img src="{!! theme_asset_lang("images/zh.png") !!}" width="100%" alt=""></label>
                <div class="login-input-c">
                    <img src="{!! theme_asset_lang("images/mmp.png") !!}" width="100%" alt="">
                    <input type="text" name="name" readonly autocomplete="off" id="name">
                </div>

            </div>
            <div class="login-input fb-clearfix">
                <label for=""><img src="{!! theme_asset_lang("images/mm.png") !!}" width="100%" alt=""></label>
                <div class="login-input-c">
                    <img src="{!! theme_asset_lang("images/mmp.png") !!}" width="100%" alt="">
                    <input type="password" name="password" readonly autocomplete="off" id="password">
                </div>
            </div>
            <div class="login-btn fb-clearfix">
                <div class="forgetPass btn"><img src="{!! theme_asset_lang("images/wjmm.png") !!}" width="100%" alt=""></div>
                <div class="login-submit btn">
                    <img src="{!! theme_asset_lang("images/dl.png") !!}" width="100%" alt="">
                    <button type="submit">{{ trans('auth.signin') }}</button>
                </div>
            </div>
        </form>
    </div>
    <div class="question-power">
        <div class="question-return bbtn" onclick="window.history.go(-1)"><img src="{!! theme_asset_lang("images/return.png") !!}" alt=""></div>

    </div>
</section>
<!-- <audio id="audioPlay" src="button.mp3" preload ></audio> -->
</body>
<script>
    $(function(){
		$("#name,#password").on("click",function(){
			$("#name,#password").removeAttr("readonly")
		})
		
        $(".forgetPass").on("click",function(){
            fbAlert("請聯係管理員")
        })
    })
    function login_form()
    {
        var name = $("#login_form").find("[name='name']").val();
        var password = $("#login_form").find("[name='password']").val();

        if(isEmpty(name) || isEmpty(password)){
            fbAlert("{{ trans('messages.login.please_complete') }}");
            return false;
        }else{
            $.ajax({
                url : "{{ route('pc.ajax_login') }}",
                data : {'_token':"{!! csrf_token() !!}","name":name,"password":password,"remember":1},
                type : 'post',
                dataType : "json",
                success : function (data) {
                    if(data.code == 200)
                    {
                        //window.location.href = data.url;
                        window.location.href = "{{ url()->previous() }}";
                    }
                    fbAlert(data.msg);
                },
                error : function (jqXHR, textStatus, errorThrown) {
                    responseText = $.parseJSON(jqXHR.responseText);
                    var message =  responseText.msg;
                    if(!message)
                    {
                        message = "{{ trans('messages.internal_server_error') }}";
                    }
                    fbAlert(message);
                }
            });
        }
        return false;
    }
    function isEmpty(obj){
        if(typeof obj == "undefined" || obj == null || obj == ""){
            return true;
        }else{
            return false;
        }
    }
</script>

