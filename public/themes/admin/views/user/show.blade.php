<div class="main">
    <div class="layui-card fb-minNav">
        <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="﻿{{ route('home') }}">{{ trans('app.home') }}</a><span lay-separator="">/</span>
            <a><cite>{{ trans("user.name") }}</cite></a><span lay-separator="">/</span>
    </div>
    <div class="main_full">
        <div class="layui-col-md12">
            <div class="fb-main-table">
                <form class="layui-form" action="{{guard_url('user/'.$user->id)}}" method="post" lay-filter="fb-form">
                    <div class="layui-form-item">
                        <label class="layui-form-label">{{ trans("user.label.name") }}</label>
                        <div class="layui-input-inline">
                            <input type="text" name="email" value="{{ $user->name }}" lay-verify="title" autocomplete="off" placeholder="{{ trans('app.please_input') }}{{ trans("user.label.name") }}" class="layui-input" disabled>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">{{ trans("user.label.new_password") }}</label>
                        <div class="layui-input-inline">
                            <input type="password" name="password" placeholder="{{ trans('app.please_input') }}{{ trans("user.label.password") }}，不改則留空" autocomplete="off" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">{{ trans('app.please_input') }}{{ trans("user.label.password") }}，不改則留空</div>
                    </div>

                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="demo1">{{ trans('app.submit') }}</button>
                        </div>
                    </div>
                    {!!Form::token()!!}
                    <input type="hidden" name="_method" value="PUT">
                </form>
            </div>

        </div>
    </div>
</div>
<script>
    layui.use('form', function(){
        var form = layui.form;

        form.render();
    });
</script>

