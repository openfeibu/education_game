<div class="layui-header">
    <ul class="layui-nav layui-layout-right">
        <!-- <li class="layui-nav-item">
          <a href="">控制台<span class="layui-badge">9</span></a>
        </li>
        <li class="layui-nav-item">
          <a href="">个人中心<span class="layui-badge-dot"></span></a>
        </li> -->
        <li class="layui-nav-item" lay-unselect="">
            <a href="javascript:;"><img src="http://t.cn/RCzsdCq" class="layui-nav-img">{{ Auth::user()->email }}</a>
            <dl class="layui-nav-child">
                <dd><a href="{{ guard_url('password') }}">{{ trans('app.change_info') }}</a></dd>
                <dd><a href="{{ guard_url('logout') }}">{{ trans('app.logout') }}</a></dd>
            </dl>
        </li>
    </ul>
</div>
