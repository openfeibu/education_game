<div class="main">
    <div class="layui-card fb-minNav">
        <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="﻿{{ route('home') }}">{{ trans('app.home') }}</a><span lay-separator="">/</span>
            <a><cite>{{ trans("user.name") }}{{ trans('app.manage') }}</cite></a>
        </div>
    </div>
    <div class="main_full">
        <div class="layui-col-md12">
            <div class="tabel-message">
                <div class="layui-inline tabel-btn">
                    <button class="layui-btn layui-btn-warm "><a href="{{guard_url('user/create')}}">{{ trans('app.add') }}{{ trans("user.name") }}</a></button>
                    <button class="layui-btn layui-btn-primary " data-type="del" data-events="del">{{ trans('app.delete') }}</button>
                </div>
                <div class="layui-inline">
                    <input class="layui-input search_key" name="name" id="demoReload" placeholder="{{ trans('user.label.name') }}" autocomplete="off">
                </div>
                <button class="layui-btn" data-type="reload">{{ trans('app.search') }}</button>
            </div>

            <table id="fb-table" class="layui-table"  lay-filter="fb-table">

            </table>
        </div>
    </div>
</div>

<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-sm" lay-event="user_game_history">查看遊戲紀錄</a>
    <a class="layui-btn layui-btn-sm" lay-event="edit">{{ trans('app.edit') }}</a>
    <a class="layui-btn layui-btn-danger layui-btn-sm" lay-event="del">{{ trans('app.delete') }}</a>
</script>


<script>
    var main_url = "{{guard_url('user')}}";
    var delete_all_url = "{{guard_url('user/destroyAll')}}";
    layui.use(['jquery','element','table'], function(){
        var table = layui.table;
        var form = layui.form;
        var $ = layui.$;
        table.render({
            elem: '#fb-table'
            ,url: main_url
            ,cols: [[
                {checkbox: true, fixed: true}
                ,{field:'id',title:'ID', width:80, sort: true}
                ,{field:'name',title:'{{ trans('user.label.name') }}'}
                ,{field:'score',title:'{{ trans('app.actions') }}', width:300, align: 'right',toolbar:'#barDemo'}
            ]]
        ,id: 'fb-table'
        ,page: true
        ,limit: 10
        ,height: 'full-200'
    });


    });
</script>
{!! Theme::partial('common_handle_js') !!}