<div class="main" style="background: url(http://edu_game.feibu.info/images/weBg.jpg) no-repeat center/100% 100%;">
    <div class="main_full">
        <div class="layui-col-md12">
            <div class="layui-card" style="margin-top:10px;background:none;">
                <!-- <div class="layui-card-header">待办事项</div> -->
                <div class="layui-card-body">

                    <div class="fb-carousel fb-backlog "  lay-anim="" lay-indicator="inside" lay-arrow="none" >
                        <div carousel-item="">
                            <ul class="layui-row fb-clearfix layui-col-space5">
                                <li class="layui-col-xs3">
                                    <a lay-href="" class="fb-backlog-body">
                                        <h3>用戶量</h3>
                                        <p><cite>{{ $user_count }}</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-xs3">
                                    <a lay-href="" class="fb-backlog-body">
                                        <h3>遊戲次數</h3>
                                        <p><cite>{{ $game_count }}</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-xs3">
                                    <a lay-href="" class="fb-backlog-body">
                                        <h3>今日活躍用戶</h3>
                                        <p><cite>{{ $today_active_user_count }}</cite></p>
                                    </a>
                                </li>
                                <li class="layui-col-xs3">
                                    <a lay-href="" class="fb-backlog-body">
                                        <h3>今日遊戲次數</h3>
                                        <p><cite>{{ $today_game_count }}</cite></p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>