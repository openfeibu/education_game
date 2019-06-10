<div class="main">
    <div class="layui-card fb-minNav">
        <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="﻿{{ route('home') }}">{{ trans('app.home') }}</a><span lay-separator="">/</span>
            <a><cite>{{ trans('game_history.name') }}</cite></a>
        </div>
    </div>
    <div class="main_full">
        <div class="layui-col-md12">
            <div class="fb-main-table">
                <form class="layui-form" action="" method="post" method="post" lay-filter="fb-form">
                    @if($level_id == 1)
                    <div class="layui-form-item">
                        <label class="layui-input-block">{{ trans('level.level_one.question_one') }}</label>
                        <div class="layui-input-block">
                            @foreach($user_level_one_video_tolerate_grades as $key => $user_level_one_video_tolerate_grade)
                                <a href="{{ config('common.video_path').'/'.$user_level_one_video_tolerate_grade['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$user_level_one_video_tolerate_grade['video_thumb_path'] }}"></a>
                                <p>{{ $user_level_one_video_tolerate_grade['grade'] }}分</p>
                            @endforeach

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-input-block">{{ trans('level.level_one.question_two') }}</label>
                    </div>
                    @foreach($user_parent_video_category_arr as $key => $user_parent_video_category)
                    <div class="layui-form-item">
                        <label class="layui-input-block">{{ $user_parent_video_category['name'] }}</label>
                        <div class="layui-input-block">
                            @foreach($user_parent_video_category['videos'] as $key => $video)
                                <a href="{{ config('common.video_path').'/'.$video['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$video['video_thumb_path'] }}"></a>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                    <div class="layui-form-item">
                        <label class="layui-input-block">{{ trans('level.level_one.question_three') }}</label>
                    </div>
                    @foreach($user_child_video_category_arr as $key => $user_child_video_category)
                        <div class="layui-form-item">
                            <label class="layui-input-block">{{ $user_child_video_category['name'] }}</label>
                            <div class="layui-input-block">
                                @foreach($user_child_video_category['videos'] as $key => $video)
                                    <a href="{{ config('common.video_path').'/'.$video['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$video['video_thumb_path'] }}"></a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                    @elseif($level_id == 4)
                        @foreach($user_answers as $key => $user_answer)
                            <div class="layui-form-item">
                                <label class="layui-input-block">問題：{{ $user_answer['question_content'] }}</label>
                            </div>
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    選項/答案：{{ $user_answer['answer_content'] }}
                                </div>
                            </div>
                        @endforeach

                        <div class="layui-form-item">
                            <label class="layui-input-block">{{ trans('level.level_four.question_two') }}</label>
                        </div>

                        @foreach($user_level_four_strategy_likes as $key => $user_level_four_strategy_like)
                            <div class="layui-form-item">
                                <div class="layui-input-block">
                                    {{ $user_level_four_strategy_like['content'] }}
                                </div>
                            </div>
                        @endforeach

                    @else
                        @foreach($user_answers as $key => $user_answer)
                        <div class="layui-form-item">
                            <label class="layui-input-block">問題：{{ $user_answer['question_content'] }}</label>
                        </div>
                        <div class="layui-form-item">
                            <div class="layui-input-block">
                                選項/答案：{{ $user_answer['answer_content'] }}
                            </div>
                        </div>
                        @endforeach
                    @endif
                </form>
            </div>

        </div>
    </div>
</div>
{!! Theme::asset()->container('ueditor')->scripts() !!}