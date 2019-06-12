<script>
    function submit_option(question_id,option_id,content,strategy_slug)
    {
		var parms = {'_token':"{!! csrf_token() !!}","question_id":question_id,"option_id":option_id,'content':content}
		if(strategy_slug){
			parms.strategy_slug = strategy_slug;
		}
        $.ajax({
            url : "{{ route('pc.submit_option') }}",
            data : parms,
            type : 'post',
            dataType : "json",
            success : function (data) {
                //fbAlert(data.msg);
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
    /*
    function submit_content(question_id,content)
    {
        $.ajax({
            url : "{{ route('pc.submit_content') }}",
            data : {'_token':"{!! csrf_token() !!}","question_id":question_id,'content':content},
            type : 'post',
            dataType : "json",
            success : function (data) {
                //fbAlert(data.msg);
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
    */
</script>