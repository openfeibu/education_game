<script>
    function submit_option($option_id)
    {
        $.ajax({
            url : "{{ route('pc.submit_option') }}",
            data : {'_token':"{!! csrf_token() !!}","option_id":$option_id},
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
    function submit_content($question_id,$content)
    {
        $.ajax({
            url : "{{ route('pc.submit_content') }}",
            data : {'_token':"{!! csrf_token() !!}","question_id":$question_id,'content':$content},
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
</script>