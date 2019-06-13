<div class="main">
    <div class="layui-card fb-minNav">
        <div class="layui-breadcrumb" lay-filter="breadcrumb" style="visibility: visible;">
            <a href="﻿{{ route('home') }}">{{ trans('app.home') }}</a><span lay-separator="">/</span>
            <a><cite>{{ trans('game_history.name') }}</cite></a>
        </div>
    </div>
    <div class="main_full">
        <div class="layui-col-md12">
            <div class="fb-main-table fb-nop-table">
                <form class="layui-form" action="" method="post" method="post" lay-filter="fb-form">
                    @if($level_id == 1)
                    <div class="layui-form-item">
                        <label class="layui-input-block tit">{{ trans('level.level_one.question_one') }}</label>
                        <div class="layui-input-block layui-col-space10 fb-clearfix">
                            @foreach($user_level_one_video_tolerate_grades as $key => $user_level_one_video_tolerate_grade)
								<div class="fb-grade-item layui-col-xs4  layui-col-md2">
									<a href="{{ config('common.video_path').'/'.$user_level_one_video_tolerate_grade['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$user_level_one_video_tolerate_grade['video_thumb_path'] }}"></a>
									<p>{{ $user_level_one_video_tolerate_grade['grade'] }}分</p>
								</div>
                            @endforeach

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-input-block tit">{{ trans('level.level_one.question_two') }}</label>
						 @foreach($user_parent_video_category_arr as $key => $user_parent_video_category)
                  
							<label class="layui-input-block tit2">{{ $user_parent_video_category['name'] }}:</label>
							<div class="layui-input-block layui-col-space10 fb-clearfix">
								@foreach($user_parent_video_category['videos'] as $key => $video)
								<div class="fb-grade-item layui-col-xs4  layui-col-md2">
									<a href="{{ config('common.video_path').'/'.$video['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$video['video_thumb_path'] }}"></a>
								</div>
								@endforeach
							</div>
                 
						@endforeach
                    </div>
                   
                    <div class="layui-form-item">
                        <label class="layui-input-block tit">{{ trans('level.level_one.question_three') }}</label>
						 @foreach($user_child_video_category_arr as $key => $user_child_video_category)
                        
                            <label class="layui-input-block tit2">{{ $user_child_video_category['name'] }}:</label>
                            <div class="layui-input-block layui-col-space10 fb-clearfix">
                                @foreach($user_child_video_category['videos'] as $key => $video)
								<div class="fb-grade-item layui-col-xs4  layui-col-md2">
                                    <a href="{{ config('common.video_path').'/'.$video['video_path'] }}" target="_blank"><img src="{{ config('common.video_thumb_path').'/'.$video['video_thumb_path'] }}"></a>
								</div>
                                @endforeach
                            </div>
                      
                        @endforeach
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-input-block tit">{{ trans('level.level_one.question_four') }}</label>
                        @foreach($user_level_one_video_category_notice_grades as $key => $user_level_one_video_category_notice_grade)

                            <label class="layui-input-block tit2">{{ $user_level_one_video_category_notice_grade['name'] }}:</label>
                            <div class="layui-input-block layui-col-space10 fb-clearfix">
                                <p>{{ $user_level_one_video_category_notice_grade['grade'] }}分</p>
                            </div>

                        @endforeach
                    </div>

                    @foreach($user_answers as $key => $user_answer)
                        <div class="layui-form-item">
                            <label class="layui-input-block tit">問題：{{ $user_answer['question_content'] }}</label>
                            @foreach($user_answer['options'] as $option_key => $option)
                                <div class="layui-input-block option {{ $option['selected_class'] }}">
                                    {{ $option['letter'] }}.{{ $option['content'] }}
                                </div>
                            @endforeach
                            @if($user_answer['answer_content'])
                            <div class="layui-input-block">
                                {{ $user_answer['answer_content'] }}
                            </div>
                            @endif
                        </div>
                    @endforeach

                    @elseif($level_id == 4)

                        @foreach($user_answers as $key => $user_answer)
                            <div class="layui-form-item">
                                <label class="layui-input-block tit">問題：{{ $user_answer['question_content'] }}</label>
                                @foreach($user_answer['options'] as $option_key => $option)
                                    <div class="layui-input-block option {{ $option['selected_class'] }}">
                                        {{ $option['letter'] }}.{{ $option['content'] }}
                                    </div>
                                @endforeach
                                @if($user_answer['answer_content'])
                                    <div class="layui-input-block option_selected">
                                        @if($user_answer['options']) 其他答案：@endif{{ $user_answer['answer_content'] }}
                                    </div>
                                @endif
                            </div>
                        @endforeach


                        <div class="layui-form-item">
                            <?php $i=0;?>
                            @foreach($level_four_strategies as $key => $strategy)
                            <?php $i++ ?>
                            <div class="layui-input-block option {{ $strategy['selected_class'] }}">
                                {{ $i }}.{{ $strategy['content'] }}
                            </div>
                            @endforeach
                        </div>

                    @else
                        @foreach($user_answers as $key => $user_answer)
                            <div class="layui-form-item">
                                <label class="layui-input-block tit">問題：{{ $user_answer['question_content'] }}</label>
                                @if($user_answer['options'])
                                @foreach($user_answer['options'] as $option_key => $option)
                                    <div class="layui-input-block option {{ $option['selected_class'] }}">
                                        {{ $option['letter'] }}.{{ $option['content'] }}
                                    </div>
                                @endforeach
                                @else
                                @if($user_answer['answer_content'])
                                    <div class="layui-input-block">
                                        {{ $user_answer['answer_content'] }}
                                    </div>
                                @endif
                                @endif
                            </div>
                        @endforeach
                    @endif
                    </div>
                   
                </form>
            </div>

        </div>
    </div>
</div>
{!! Theme::asset()->container('ueditor')->scripts() !!}